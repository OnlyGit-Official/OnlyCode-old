<?php
$contents = $_GET['path'];



$conts = shell_exec("cat $contents");

if (is_dir($contents)) {
  header("Location: folderinrepo.php?folder=$contents");
} else {
  echo "--FILENAME:$contents--";
  echo "<br>";
  echo "--------------------------------------";
  echo "<br>";
  echo "$conts";
}



?>