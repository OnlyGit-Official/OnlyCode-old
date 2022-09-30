<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git</title>
</head>
<body>
    <?php

/*
        

$files = scandir('./');

foreach($files as $file) {

echo "$file" . "<br>";

}

  */

foreach (scandir(dirname(__FILE__)) as $filename) {
    if ($filename[0] === '.') {
        continue;
    }
    echo "$filename" . "<br>";
}
        
    ?>

    
</body>
</html>