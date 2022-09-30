<?php
$contents = $_GET['path'];



$conts = shell_exec("cat $contents");

if (is_dir($contents)) {
  echo "dir";
} else {
  echo "--FILENAME:$contents--";
  echo "<br>";
  echo "--------------------------------------";
  echo "<br>";
  echo "$conts";
}



?>