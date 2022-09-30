<?php
$repo = $_GET['repo'];

foreach (scandir("./git/$repo") as $contents) {
            if ($contents[0] === '.') {
              continue;
        }
        echo "<a href='repoconts.php?path=git/$repo/$contents'>$contents</a>" . "<br>";
}



?>