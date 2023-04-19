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
    
.flex{
    display: flex;
    flex-direction: row;
}
h2 {
    font-family: 'JetBrains Mono';font-size: 23px;
    font-weight: bolder;
}

.nav2 {
    padding: 1rem;
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
            <a href="new.php"><svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 24 24' fill='none' stroke='#ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-folder-plus'><path d='M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z'></path><line x1='12' x2='12' y1='10' y2='16'></line><line x1='9' x2='15' y1='13' y2='13'></line></svg></a>
            
			</div>
		</nav>

    
    <?php

        
        echo "<div class='nav2'><h2>Projects</h2></div>";
        echo "<br>";



        foreach (scandir("./show") as $filename) {
            if ($filename[0] === '.') {
              continue;
        }
        $filenameSan = htmlspecialchars($filename);
        $filenameAndSpace = " " . $filenameSan;
        $commit = shell_exec("bash ./shell/latest-commit.sh $filename");
        echo "<a class='border flex' style='margin:25px;' href='inrepo.php?repo=$filename'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='m6 14 1.45-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.55 6a2 2 0 0 1-1.94 1.5H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H18a2 2 0 0 1 2 2v2'></path></svg><span style='white-space: pre;'>$filenameAndSpace</span> <span class='flex' style='margin-left:auto;'>$commit</span></a>";
}

        
    ?>


    
</body>
</html>