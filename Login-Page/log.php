
	<?php
		session_start();
		if (isset($_SESSION['name'])){
			header('location:kjl.php');
		}

		
	?>
		<HTML>
			
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>
			Login
		</title>
	</head>
	<body>
		<form method="post"  action="log.php" align="center" >
		<div class="img">Enter Email:</br> <input type="text" name="em1" > </br>
			Enter Password: </br> <input type="password" name="pass1"></br>
			<input type="submit" value="log in"> </br>
		</div>
		</form>
	</body>
</HTML>
