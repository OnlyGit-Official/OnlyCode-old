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
    <link href='css/style.css' rel='stylesheet'>
    <style>.center {
    font-family: 'JetBrains Mono';font-size: 18px;
    color: white;
    text-decoration: none;


    display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;

}
h2 {
    font-family: 'JetBrains Mono';font-size: 23px;
    font-weight: bolder;
    padding: 1rem;
}

.BRuh {
    padding: 2.5rem;
}
a {
    padding: 1rem;
}

.error {
  background-color: #f54747;
  padding: 5px;

}
.error-border {
    border-style: solid;
    border-radius: 10px;
    border-color: rgba(116, 114, 114, 0.217);

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
        <h2>Import a Project</h2><div class='BRuh'></div>
        <div class="center">
        <?php 
          
          if (isset($_GET['err'])){

              echo "<div><span class='error error-border'>Invalid Repository URL!</span>";

          }
          ?>
    <form action="import-b.php" method="post" >
        <lable><h3>Repository URL:</h3></lable>
    <input class='txt' type="url" name="repo">
    <br><br><br>
    <a style='vertical-align: middle;
  display: inline-block;white-space: pre;' onclick="this.closest('form').submit();"><svg class="svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path><line x1="12" y1="10" x2="12" y2="16"></line><line x1="9" y1="13" x2="15" y2="13"></line></svg> Import Repository</a>
</form>
  </div>
   </div>
</body>
</html>