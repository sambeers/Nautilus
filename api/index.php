<?php
###############################################
##                                           ##
##  single result: ?q=page&p=id:1,name:home  ##
##  pagination: ?q=projects&p=id>:5          ##
##                                           ##
###############################################
$cd_="";
$dir=explode("/",$_SERVER['PHP_SELF']);
unset($dir[0],$dir[1]);//default 0 & 1 to format correctly, add additional indexes for each folder deep the app root is relative to the server root
  foreach($dir as $up){
  $cd_.="../";
  }
require_once $cd_."core/init.php";
$j=array();//json
$sql="SELECT * FROM ";
$w="";//where
$o="";//order
$l="";//limit
  if(isset($_REQUEST["q"])){
  $q=$_REQUEST["q"];
    //how many results do you need
    if(substr($q,-1)=="s"){//plural
    $o="ORDER BY `id` DESC ";
    }else{//singular
    $q.="s";
    $l="LIMIT 1";
    }
    //check if table ($q) exists in db
    $_t="SELECT `id` FROM `{$q}` LIMIT 1";
    $_c->query($_t);
    if(!$_c->error){
    $j["success"]=true;
    $sql.="`{$q}` ";
      if(isset($_REQUEST["p"])){//params
      $p=explode(",",$_REQUEST["p"]);
        foreach($p as $k=>$v){
        $_v=explode(":",$v);
        $p[$_v[0]]=$_v[1];
        unset($p[$k]);
        }
        foreach($p as $k=>$v){
          if($w==""){
          $w="WHERE";
          }else{
          $w.="AND";
          }
        $w.=" {$k}={$v} ";//dont surround params with quotes, this allows for adding opperands
        }
      }
    $sql.=$w.$l.$o;
    $r=$_c->query($sql);
      if(!$_c->error){
        if($r->num_rows>0){
          while($i=$r->fetch_assoc()){
          $rows=array($i);
            foreach($rows as $row){
              foreach($row as $k=>$v){
                if(strpos($k,"json")!==false){
                $v=json_decode($v,true);
                $row[$k]=$v;
                }
              }
            $j["results"][]=$row;
            }
          }
        }else{
        $j["results"]=null;
        }
      }else{
      $j["success"]=false;
      $j["error"]="failed to excetute query: ".$_c->error;
      $j["results"]=null;
      }
    }else{
    $j["success"]=false;
    $j["error"]="requested table '".strtoupper($q)."' not present in database";
    }
  }else{
  $j["success"]=false;
  $j["error"]="bad request, supply value for 'Q'";
  }
echo json_encode($j);
