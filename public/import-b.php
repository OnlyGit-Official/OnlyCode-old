<?php
try {
    $repo = $_POST['repo'];
    if(empty(trim($repo))){
        $err = "1";
        header("Location: import.php?err=$err");
        die($err);
    } elseif (!filter_var($repo, FILTER_VALIDATE_URL)){
        $err = "3";
        header("Location: import.php?err=$err");
        die($err);
    }

$name = substr($repo, strrpos($repo, '/') + 1);



shell_exec("bash ./shell/import.sh $repo $name");
header("Location: index.php");

} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: ../error/500.php");
}
?>