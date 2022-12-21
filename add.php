<?php include("connect.php");

	$msg="";

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub'])) {

		$denumire_instrument=$_POST['denumire_instrument'];
		$cod_instrumente=$_POST['cod_instrumente'];
		$pret=$_POST['pret'];
		$culoare=$_POST['culoare'];  
		$marime=$_POST['marime'];
	  

		if($denumire_instrument!="" && $cod_instrumente!="" && $pret!="" && $culoare!="" && $marime!="")	{         
	      
			$insert="INSERT INTO `instrumente`(`cod_instrumente`,`denumire_instrument`,`pret`,`culoare`,`marime`) VALUES('".$cod_instrumente."','".$denumire_instrument."','".$pret."','".$culoare."','".$marime."')";
			$data=mysqli_query($conn,$insert); 

			if($data) {
		 
		 		$msg= "S-a adaugat cu succes";
			}

			else{

	      	$msg="Ups!Ceva nu a mers";
	  		}
		}

		else {
			$msg= "Toate campurile trebuiesc completate!";
		}

	}	

?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Adauga instrument</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="body">

		<div class="nav">
			<ul>
		  		<li>
		  			<a> <?php
						$Today = date('y:m:d',time());
						$new = date('l, F d, Y', strtotime($Today));
						echo $new; ?> 
					</a>
				</li>
		  		<li>
		  			<a href = "index.php">Deconectare</a>
		  		</li>
			</ul>
			<br><br><br>
		</div>

		<div class="box">
		  	<table class="tabel">
		    	<tr>
		      		<td><b class="antet">Adauga instrumente in baza de date</b></td>
		    	</tr>
		  	</table>
		</div>


		<div class="nav">
			<ul>
			  	<li><a href = "admin.php">Acasa</a></li>
			  	<li><a class="color" href = "add.php">Adauga Instrument</a></li>
			  	<li><a href = "edit.php">Editeaza Instrument</a></li>
			    <li><a href = "delete.php">Sterge Instrument</a></li>
			    <li><a href = "aboutus.php">Despre Noi</a></li>
			</ul>
			<br><br><br>
		</div>

		<form action="" method="POST" enctype="multipart/form-data">
			<div class = "header">

		  		<div class = "container">
		    		<div class="title">
		    			<h2>Adauga Instrument</h2>
		      		</div>

		  			<table class="tabel">
		   				<tr>
		     				<td>Denumire Instrument:</td>
		     				<td><input type="text" name="denumire_instrument"/></td>
		     			</tr>
						<tr>
			  				<td>Cod Instrument:</td>
			 				<td><input type="text" name="cod_instrumente"/></td>
		        			<td><?php echo $msg; ?></td>
						</tr>
		   				<tr>
					     	<td>Pret:</td>
					     	<td><input type="text" name="pret"/></td>
						</tr>

			 			<tr>
			  				<td>Culoare:</td>
			 				<td>
			 					<select name="culoare">
				   					<option value="Negru">Negru</option>
				   					<option value="Alb">Alb</option>
				   					<option value="Maro">Maro</option>
				   					<option value="Verde">Verde</option>
			   					</select>
			 				</td>
						</tr>
		   
		   				<tr>
			  				<td>Marime:</td>
			 				<td>
			 					<select name="marime">
			   						<option value="mica">Mica</option>
									<option value="medie">Medie</option>
									<option value="mare">Mare</option>
			   					</select>
			 				</td>
						</tr>

		      			<tr>
			  				<td><h2><input type="submit" name="sub" value="ADAUGA"/></h2></td>
			  			</tr>
		  			</table>
				</div>
			</div>
		</form>
	</body>
</html>

