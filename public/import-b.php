<?php
try {
$repo = $_POST['repo'];

$name = substr($repo, strrpos($repo, '/') + 1);



shell_exec("bash ./shell/import.sh $repo $name");
header("Location: index.php");

} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: ../error/500.php");
}
?>