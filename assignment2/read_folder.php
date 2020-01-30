<?php
$dir = "C:\\wamp\\www\\ruturaj";

if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
        // echo "filename:" . $file . "<br>";
        if(is_dir($file)) {
            echo ("$file is a directory<br>");
          } else {
            echo ("$file is file <br>");
          }
      }
      closedir($dh);
    }
  }

?>