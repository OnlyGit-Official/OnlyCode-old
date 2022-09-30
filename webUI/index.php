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


        foreach (scandir("./git") as $filename) {
            if ($filename[0] === '.') {
              continue;
        }
        echo "<a href='inrepo.php?repo=$filename'>$filename</a>" . "<br>";
}

// dirname(__FILE__)
        
    ?>

    
</body>
</html>