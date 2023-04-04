<?php
try {
$folder = $_GET['folder'];
echo "<title>$folder</title>";

echo "<button onclick='history.back()'>&lt;</button>";
echo "<button onclick='history.forward()'>&gt;</button>";
echo "<br>";

foreach (scandir("$folder") as $item) {
            if ($item[0] === '.') {
              continue;
        }
        echo "<a href='repoconts.php?path=$folder/$item'>$item</a>" . "<br>";
}

} catch (Exception $null) {
  header("HTTP/1.1 500 Internal Server Error");
  header("Location: ../error/500.php");
}

?>