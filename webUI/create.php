<?php
$repo = $_POST['repo'];
shell_exec("mkdir git/$repo | git init --bare git/$repo");
?>