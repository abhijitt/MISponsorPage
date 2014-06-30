	
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
		padding: 0px;

		/*border-width: 1px;
		border-style: solid;
		border-color: red;*/
			}

		table.main_con td{
			padding: 0px;
			margin: 0px;
			line-height: 50px;
			font-size: 30px;
			text-align: center;
			vertical-align: top;
			width: 20%;
			height: 30px;

			border-width: 1px;
			border-style: solid;
			border-color: red;


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
			height:100%;
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
	echo "<div class='titlesponor'><a href=".$data[0]['url']." target='_blank'><img src=".$data[0]['imageurl']."></a></div>";
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
		$maximum=$maximum+1;
									

									echo "<table class='main_con'>";

								for ($rowlist=1; $rowlist <$maximum ; $rowlist++) { 
									echo "<tr> ";
												$size1=$size+1;
												for ($checkl=1; $checkl <5 ; $checkl++) { 
													

											$checklol=0;
											$checkrlol=0;
														for ($current=1; $current < $size; $current++)
														 { 
																	$pos=($rowlist*10)+$checkl;
																	$checkrlol=$checkrlol+1;

																			if($data[$current]['position']==$pos)
																			{
																			echo "<td>".$data[$current]['name']."<br> <a href=".$data[$current]['url']." target='_blank'><img class='fixsize' src='".$data[$current]['imageurl']."'></a></td>";
																	   		}
																	   		else{$checklol=$checklol+1;}

														}
																	
																	if ($checklol==$checkrlol) 
																	{
																		echo "<td>LOL</td>";
																	}
												}
												
									echo "</tr>";									
								}
								echo "</table>";


	 ?>
	
		

	
	

</body>

</html>
