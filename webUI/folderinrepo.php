<?php
$folder = $_GET['folder'];

foreach (scandir("$folder") as $item) {
            if ($item[0] === '.') {
              continue;
        }
        echo "<a href='repoconts.php?path=$folder/$item'>$item</a>" . "<br>";
}



?>