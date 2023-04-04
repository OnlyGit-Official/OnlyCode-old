<?php
try {
$repo = $_POST['repo'];
$pubpriv = $_POST['pubpriv'];

shell_exec("bash ./shell/create.sh $repo");
header("Location: home");

} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: ../error/500.php");
}
?>