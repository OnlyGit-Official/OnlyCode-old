<?php
$repo = $_POST['repo'];
shell_exec("mkdir -p git/$repo | git init --bare git/$repo");
header("Location: index.php");
?>