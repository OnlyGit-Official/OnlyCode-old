<?php

$key =  $_POST['key'];
$repo = $_GET['repo'];
$uname = $_POST['username'];

$debug = shell_exec("bash ../shell/push.sh $repo $uname $key");

header("Location: inrepo.php?repo=$repo");



?>