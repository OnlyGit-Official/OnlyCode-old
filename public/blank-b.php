<?php
try {
    $repo = $_POST['repo'];
    if(empty(trim($repo))){
        $err = "1";
        header("Location: blank.php?err=$err");
        die($err);
    } elseif(!preg_match('/^[a-zA-Z-]+$/', trim($repo))){
        $err = "2";
        header("Location: blank.php?err=$err");
        die($err);
        
    }

$pubpriv = $_POST['pubpriv'];

shell_exec("bash ./shell/create.sh $repo");
header("Location: index.php");

} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: ../error/500.php");
}
?>