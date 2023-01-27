<?php
$repo = $_POST['repo'];
shell_exec("mkdir -p git/$repo | git init git/$repo");
header("Location: index.php");
?>