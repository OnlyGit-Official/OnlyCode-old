<?php
try {
    $repo = $_GET['repo'];
    if(empty(trim($repo))){
        throw new Exception('Lol get errored');
    } elseif(!preg_match('/^[a-zA-Z-]+$/', trim($repo))){
        throw new Exception('Lol get errored');
    }


shell_exec("bash ./shell/delete.sh $repo");
header("Location: index.php");

} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: ../error/500.php");
}
?>