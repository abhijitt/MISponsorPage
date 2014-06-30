<Html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" type="text/html" href="kjl.php">
</head>
<body>
<?php
	echo $_GLOBALS['a'];

	echo '<div>
				<form method="post" action="pro.php" >

			YOU HAVE ENTERED THE FOLLOWING DETAILS: </br>
			First Name: </br><input type="text" name="txtN1" value="First name "/></br>
			Lat Name: </br><input type="text" name="txtN2" value="Enter Last name "/></br>
			Email Address: </br> <input type="text" name="txtN3" value="Email"/></br>
			<p swf_fontsize(26)> PLEASE ENTER SUBMIT TO CONFIRM</p>
			<input type="submit" value="submit"/>
			</form> </div>';
?>
</body>
</Html>



