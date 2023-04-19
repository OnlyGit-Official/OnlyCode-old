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
        a {
            padding: 1rem;
        }
        h2 {
    font-family: 'JetBrains Mono';font-size: 23px;
    font-weight: bolder;display: flex;
    flex-direction: row;
}

.nav2 {
    padding: 1rem;
    display: inline-block;
    
}
body {
    font-weight: 'JetBrains Mono';
}
.center {
    font-family: 'JetBrains Mono';font-size: 18px;
    color: white;
    text-decoration: none;
    padding: 3rem;

    display: flex;
  justify-content: center;
  align-items: center;
  white-space: pre;
}
    </style>
    <script>
        function conf() {
    var conf = confirm("Are you sure you want to delete this repository? You can not undo this action.");
    if (conf) {
        window.location.replace("delete.php?repo=<?php 
            if (!isset($_GET['repo'])){
                header("HTTP/1.1 404 Not Found");
      header("Location: ../error/404.php");
            }
    $reponospace = $_GET['repo'];
    $repo = " " . $reponospace;
            echo "$reponospace"; ?>");
    }
  }
    </script>
</head>
<body>
<nav>
			<a href="index.php"><img src="icons/small-logo.png" alt="logo" height="50" width="50"></img></a>
			<div class='links'>
            
            <button style="border:none; background-color: transparent;" onclick='history.back();'><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
            <a href="new.php"><svg xmlns='http://wsww.w3.org/2000/svg' width='50' height='50' viewBox='0 0 24 24' fill='none' stroke='#ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-folder-plus'><path d='M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z'></path><line x1='12' x2='12' y1='10' y2='16'></line><line x1='9' x2='15' y1='13' y2='13'></line></svg></a>
            
			</div>
		</nav>
        <h2 class='nav2'><?php 
echo "$repo";
?></h2>
<?php 
  if (strpos($repo, '.') !== false){
    header('Location: ./error/404.php');
    die('Lol get errored.');
  }
?>
<a class='border-noround center' href='rename.php?repo=<?php echo "$reponospace";?>'><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-edit"><path d="M8.42 10.61a2.1 2.1 0 1 1 2.97 2.97L5.95 19 2 20l.99-3.95 5.43-5.44Z"></path><path d="M2 11.5V5c0-1.1.9-2 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H20a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-9.5"></path></svg> Rename This Repository</a>
<br><br><br><br>
<a class='border-noround center' onclick="conf();"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-x"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path><path d="m9.5 10.5 5 5"></path><path d="m14.5 10.5-5 5"></path></svg> Delete This Repository</a> 

</body>
</html>