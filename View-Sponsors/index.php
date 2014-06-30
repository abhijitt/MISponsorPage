	
	<html>
<head>
<title>Sponsors</title>

<style type="text/css">
	table.cg{
		position: absolute;
		left:  20%;
		top: 10%;
		width: 60%	;
		padding: 6px;

		/*border-width: 1px;
		border-style: solid;
		border-color: red;*/
	}


	table.main_con{
		position: absolute;
		left: 10%;
		right: 10%;
		width: 80%;
		top:60%;
		font-family:Arial,Helvetica,sans-serif;

		/*border-width: 1px;
		border-style: solid;
		border-color: red;*/
			}

		table.main_con td{
			
			width: 20%;
			line-height: 50px;
			font-size: 30px;
			text-align: center;
			vertical-align: top;

			/*border-width: 1px;
			border-style: solid;
			border-color: red;*/


		}
		table.cg td{
			width: 15%;
			
			/*border-width: 1px;
			border-style: solid;
			border-color: red;*/
		}

	div.head{
		position: absolute;
		left: 38%;
		top: 22%;
		width: 40%;
		padding: 0px;
		font-family: arial, verdana, sans-serif;

			/*border-width: 1px;
			border-style: solid;
			border-color: red;*/
	}

	div.head2{
		position: absolute;
		left: 47%;
		top: 29%;
		width: 16%;
		padding: 0px;
		font-family: arial, verdana, sans-serif;

			/*border-width: 1px;
			border-style: solid;
			border-color: red;*/
	}
	div.titlesponor{
		position: absolute;
		left: 45%;
		width: 20%;
		height:12%;
		top:40%;
		font-family: arial, verdana, sans-serif;

		/*border-width: 1px;
		border-style: solid;
		border-color: red;*/

	}

		img.fixsize{
			width:80%;
			vertical-align: bottom;
		}
</style>

</head>


<body padding:0; margin:0; >
<table class="cg">
	<tr>
		<td>For Sponsorship <br> Queries</td>
		<td>Aman  Chaudhary <br>+91-9769501715<br> aman@moodi.org</td>
		<td>Deep Shah <br>+91-9820403636<br> deep@moodi.org</td>
		<td>Rishabh Bohara <br>+91-9967361219<br> rishabh@moodi.org</td>

	</tr>
</table>

<div class="head"><h2>MOOD INDIGO 2014 SPONSORS</h2></div>
<div class="head2"><h4>TITLE SPONSORS</h4></div>





	<?php 

	$str_data = file_get_contents("spon.json");
	$data = json_decode($str_data,true);
	//	echo "Boss hobbies: ".$data[0]["name"];
	echo "<div class='titlesponor'><a href=".$data[0]['url']."><img src=".$data[0]['imageurl']."></a></div>";
	$c=1;
	$maximum=$data[0]["position"];
	$size=count($data);
	//$size=$size-1;
							for ($c ; $c < $size ; $c++)
						  {
						    if ($data[$c]["position"] > $maximum)
						    {
						       $maximum  =$data[$c]["position"];
						        }
						  }


		$maximum=(($maximum/10)-(($maximum%10)/10));
									

									echo "<table class='main_con'>";
								for ($i=0; $i <$maximum ; $i++) { 
									echo "<tr> ";
									$checkl=1;
									echo "<td>".$data[$checkl]['name']."<br> <a href=".$data[$checkl]['url']."><img class='fixsize' src='".$data[$checkl]['imageurl']."'></a></td>";
										$checkl=$checkl+1;

									echo "<td>".$data[$checkl]['name']."<br> <a href=".$data[$checkl]['url']."><img class='fixsize' src='".$data[$checkl]['imageurl']."'></a></td>";
										$checkl=$checkl+1;

									echo "<td>".$data[$checkl]['name']."<br> <a href=".$data[$checkl]['url']."><img class='fixsize'  src='".$data[$checkl]['imageurl']."'></a></td>";
										$checkl=$checkl+1;

									echo "<td>".$data[$checkl]['name']."<br> <a href=".$data[$checkl]['url']."><img  class='fixsize' src='".$data[$checkl]['imageurl']."'></a></td>";
										$checkl=$checkl+1;
									
									echo "</tr>";									
								}
								echo "</table>";


	 ?>
	
		

	
	

</body>

</html>