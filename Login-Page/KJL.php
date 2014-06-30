<?php
	$con=mysqli_connect("localhost","root","","results");

	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	if(isset($_REQUEST['txtN1']) && isset($_REQUEST['txtN2']) && isset($_REQUEST['txtN3']) && isset($_REQUEST['txtN4'])){
		$id= mysqli_real_escape_string($con, $_POST['txtN1']);
		$name = mysqli_real_escape_string($con, $_POST['txtN2']);
		$compi = mysqli_real_escape_string($con, $_POST['txtN3']);
		$rank= mysqli_real_escape_string($con, $_POST['txtN4']);
		$sql="INSERT INTO results (mi_no, name, compi, position)
				VALUES ('$id', '$name', '$compi','$rank')";

		if (!mysqli_query($con,$sql)) {
  				die('Error: ' . mysqli_error($con));
		}
		echo "1 record added";

		mysqli_close($con);
	}
	
?>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="new.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$http({ 
    	  	method : 'POST', 
      		url : 'https://moodi.org/api/college', 
      		responseType : "json",
      		headers: {
 	         	"Content-Type": 'application/x-www-form-urlencoded'

    		}
    	})
    	.success(function(data, status, headers, config){
        	if(status){
          		console.log("added",data);
          
        	}
        	else{s
          		console.log("failed");
        	}
    	});
	})
		
	</script>
		
</head>

<body >
		
	<div >
		<form method="post" action="kjl.php" align="center" class="form-signin" >

			MI Number: </br> <input type="text" class="form-control" name="txtN2" placeholder="MI No."/></br>
			Name: </br><input type="text" class="form-control"  name="txtN1" placeholder="Name"/></br>
			Competition:</br>
			<select class="form-control">
				option
			</select>
			Position: </br><input type="text" class="form-control" name="txtN4" placeholder="Rank"/></br>

				<input type="submit" value="submit"/>
		
			</form>
	
	</body>
</HTML>

