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
        body {
            font-family: 'JetBrains Mono';font-size: 18px;
    color: white;
        }
        .nav2 {
    padding: 1rem;
}
.padding {
    padding-left: 2rem;
}
    </style>
</head>
<body>
<nav>
			<a href="index.php"><img src="icons/small-logo.png" alt="logo" height="50" width="50"></img></a>
			<div class='links'>
            <button style="border:none; background-color: transparent;" onclick='window.location.replace("index.php");'><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
            <a href="new.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path><line x1="12" y1="10" x2="12" y2="16"></line><line x1="9" y1="13" x2="15" y2="13"></line></svg></a>
            
			</div>
		</nav>
        <h2 class='nav2'><?php $repo = $_GET['repo']; echo "$repo"; ?></h2>
    <?php


$json = shell_exec("bash ./shell/log.sh $repo");

$data = json_decode($json);

foreach ($data as $commit) {
    echo "<div class='padding'><p style='font-weight:bold;font-size:20px;'>$commit->message</p> ";echo "<p style='font-size:15px;'>$commit->author commited on $commit->date </p><br><br></div>";
    // echo "Commit ID: $commit->commit <br>";
    
    
    
}



?>
</body>
</html>
