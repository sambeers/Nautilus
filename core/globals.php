<?php
$_="http://".$_SERVER['HTTP_HOST']."/";//root
$current_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$human_readable=explode("index.php",$_SERVER["PHP_SELF"]);
$human_readable=explode("/",$human_readable[0]);
$human_readable=implode(" ",$human_readable);
$human_readable=str_replace("agreements ","",$human_readable);
$default_h1="Write default META DESCRIPTION here";
$default_h3="Write default META KEYWORDS here";
$default_h5="Write default META TITLE here";
$default_i0="Write default PAGE HEADING here";
$default_i1="Write default PAGE INTRO here";
$h=array(
   "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN''http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'xml:lang='en'lang='en'><head><meta http-equiv='Content-Type'content='text/html;charset=UTF-8'><meta name='viewport'content='width=device-width,initial-scale=1'><meta name='description'content='",
  "",//meta_desc = $h[1]
  "><meta name='keywords'content='",
  "",//meta_keys = $h[3]
  "'><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','YOUR ANALYTICS ID HERE',{'siteSpeedSampleRate': 100});ga('send','pageview');</script><title>",
  "",//meta_title = $h[5]
  "</title><link rel='apple-touch-icon'sizes='57x57'href='{$_}apple-touch-icon-57x57.png'><link rel='apple-touch-icon'sizes='60x60'href='{$_}apple-touch-icon-60x60.png'><link rel='apple-touch-icon'sizes='72x72'href='{$_}apple-touch-icon-72x72.png'><link rel='apple-touch-icon'sizes='76x76'href='{$_}apple-touch-icon-76x76.png'><link rel='apple-touch-icon'sizes='114x114'href='{$_}apple-touch-icon-114x114.png'><link rel='apple-touch-icon'sizes='120x120'href='{$_}apple-touch-icon-120x120.png'><link rel='apple-touch-icon'sizes='144x144'href='{$_}apple-touch-icon-144x144.png'><link rel='apple-touch-icon'sizes='152x152'href='{$_}apple-touch-icon-152x152.png'><link rel='apple-touch-icon'sizes='180x180'href='{$_}apple-touch-icon-180x180.png'><link rel='icon'type='image/png'href='{$_}favicon-32x32.png'sizes='32x32'><link rel='icon'type='image/png'href='{$_}android-chrome-192x192.png'sizes='192x192'><link rel='icon'type='image/png'href='{$_}favicon-96x96.png'sizes='96x96'><link rel='icon'type='image/png'href='{$_}favicon-16x16.png'sizes='16x16'><link rel='manifest'href='{$_}manifest.json'><link rel='mask-icon'href='{$_}safari-pinned-tab.svg'color='#28cfff'><meta name='msapplication-TileColor'content='#28cfff'><meta name='msapplication-TileImage'content='{$_}mstile-144x144.png'><meta name='theme-color'content='#28cfff'></head><body><style>",
  file_get_contents($cd_."css/critical.css"),//inlined critical css = $h[3]
  "</style>"
);
$n=array(
  array(/*display name*/"home",/*hover text*/"homepage",/*url*/"index.php"),
  array("about","learn more about this project","about")
);
$fn=array(
  array("sitemap","for robots","sitemap.xml")
);
$js=array();
$jq="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js";
//encryption
$public_key="PUBLIC KEY";//public key
$enc_method_1="ENCRYPTION METHOD 1";
$enc_method_2="ENCRYPTION METHOD 2";
//captcha
$captcha_url="https://www.google.com/recaptcha/api/siteverify";
$captcha_secret="YOUR CAPTCHA SECRET";
