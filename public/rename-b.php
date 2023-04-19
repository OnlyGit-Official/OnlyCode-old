<?php
try {
    $repo = $_GET['repo'];
    $newname = $_POST['newname'];
    if(empty(trim($newname))){
        $err = "1";
        header("Location: rename.php?err=$err&repo=$repo");
        die($err);
    } elseif(!preg_match('/^[a-zA-Z-]+$/', trim($newname))){
        $err = "2";
        header("Location: rename.php?err=$err&repo=$repo");
        die($err);
        
    }


shell_exec("bash ./shell/rename.sh $repo $newname");
header("Location: index.php");

} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: ../error/500.php");
}
?>