<?php
function ucSmart($string){//smart ucwords function
  return preg_replace_callback("/\b(A|An|The|And|Of|But|Or|For|Nor|With|On|At|To|From|By)\b/i",function($matches){//add words here to avoid capitalization
    return strtolower($matches[1]);
  },ucwords($string));
}
