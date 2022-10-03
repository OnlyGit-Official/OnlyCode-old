<?php
$contents = $_GET['path'];



// $conts = shell_exec("cat $contents");

$fs = filesize("$contents");
$f = fopen($contents, 'r');
$conts = fread($f, $fs);
fclose($f);

if (is_dir($contents)) {
  header("Location: folderinrepo.php?folder=$contents");
} else {
  echo "--FILENAME:$contents--";
  echo "<br>";
  echo "-----------------------------------------------";
  echo "<br>";
  echo nl2br($conts);
}



?>