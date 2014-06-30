<?php
		session_start();
		if (!isset($_SESSION['name'])){
			header('location:log.php');
		}

	echo $_SESSION['name'];
	
?>