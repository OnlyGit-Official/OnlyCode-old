<?php
$repo = $_GET['repo'];

echo "<button onclick='history.back()'>&lt;</button>";
echo "<button onclick='history.forward()'>&gt;</button>";
echo "<br>";

foreach (scandir("./show/$repo") as $contents) {
            if ($contents[0] === '.') {
              continue;
        }
        echo "<a href='repoconts.php?path=./show/$repo/$contents'>$contents</a>" . "<br>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form action='push.php?repo=<?php echo "$repo" ?>' method='post'>

    GitHub Username: <input type='text' placeholder='Hardwaregore' name='username'>
    <br>
    Access Token: <input type='password' placeholder='Personal access token' name='key'>
    <br>
    Force? <input type='checkbox' value='1' name='force' />

      <button type='submit'>Push</button>
    
  </form>
  
</body>
</html>