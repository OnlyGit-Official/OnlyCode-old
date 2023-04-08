<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OnlyCode</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon"></link>
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <style>
      a {padding:1rem;}
      h2 {
    font-family: 'JetBrains Mono';font-size: 23px;
    font-weight: bolder;
}

.nav2 {
    padding: 1rem;
}
body {
  font-family: "JetBrains Mono";
}
a {
    font-family: 'JetBrains Mono';font-size: 18px;
    color: white;
    text-decoration: none;
    padding: 1rem;
}
    </style>
</head>
<body>

<nav>
			<a href="index.php"><img src="icons/small-logo.png" alt="logo" height="50" width="50"></img></a>
			<div class='links'>
            
            <button style="border:none; background-color: transparent;" onclick='history.back();'><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
            <a href="new.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path><line x1="12" y1="10" x2="12" y2="16"></line><line x1="9" y1="13" x2="15" y2="13"></line></svg></a>
            
			</div>
		</nav>
    <h2 class='nav2'><?php 
$folder = $_GET['folder'];

$pattern = "/.\/show\//";
$replacement = "";
$result = preg_replace($pattern, $replacement, $folder);
echo "$result";
?></h2>
  <?php
try {
$folder = $_GET['folder'];





foreach (scandir("$folder") as $item) {
            if ($item[0] === '.') {
              continue;
        }
        echo "<a class='border' style='margin:25px;' href='repoconts.php?path=$folder/$item'>$item</a>" . "<br><br><br><br>";
}

} catch (Exception $null) {
  header("HTTP/1.1 500 Internal Server Error");
  header("Location: ../error/500.php");
}

?>
</body>
</html>

