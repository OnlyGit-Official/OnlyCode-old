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


.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.BRuh {
    padding: 2.5rem;
}

</style>
</head>
<body>
<nav>
			<a href="index.php"><img src="icons/small-logo.png" alt="logo" height="50" width="50"></img></a>
			<div class='links'>
            <a href="new.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path><line x1="12" y1="10" x2="12" y2="16"></line><line x1="9" y1="13" x2="15" y2="13"></line></svg></a>
           
			</div>
		</nav>
        <h2>Create a Blank Project</h2><div class='BRuh'></div>
        <div class="center">
    <form action="blank-b.php" method="post" >
        <lable><h3>Repository Name:</h3></lable>
    <input class='txt' type="text" name="repo" required>
    <br><br>
    <label class="container"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg> Public
  <input type="radio" name="pubpriv" value="public">
  <span class="checkmark"></span>
</label><br>
<label class="container"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 20H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H20a2 2 0 0 1 2 2v2.5"></path><rect x="14" y="17" width="8" height="5" rx="1"></rect><path d="M20 17v-2a2 2 0 1 0-4 0v2"></path></svg> Private 
  <input type="radio" name="pubpriv"  checked="checked" value="private">
  <span class="checkmark"></span>
</label>
<br><br>
    <a style='vertical-align: middle;
  display: inline-block;white-space: pre;' onclick="this.closest('form').submit();"><svg class="svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path><line x1="12" y1="10" x2="12" y2="16"></line><line x1="9" y1="13" x2="15" y2="13"></line></svg> Create Repostiory</a>
</form>
    </div>
</body>
</html>