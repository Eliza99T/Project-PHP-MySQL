<?php include("connect.php");

$msg="";


	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub'])) {

	  $cod_instrumente=$_POST['cod_instrumente'];  
	  
	  if($cod_instrumente!="") {  

	    $sql="DELETE FROM `instrumente` WHERE `instrumente`.`cod_instrumente` ="."'$cod_instrumente'";
	      
			$data = mysqli_query($conn, $sql);
		
	    if($data) {

		    $msg= "S-a sters cu succes!";
		  }

		  else
		  {
		    $msg= "Ceva nu  a mers!..";
		  }
		}

	  else {
		  $msg="Completeaza campul!";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <title>Sterge Instrument</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body class="body">

		<div class="nav">
			<ul>
	  		<li><a> <?php
					$Today = date('y:m:d',time());
					$new = date('l, F d, Y', strtotime($Today));
					echo $new; ?> 
				</a></li>
	  		<li><a href = "index.php">Deconectare</a></li>
			</ul>
			<br><br><br>
		</div>

	  <div class="box">
	   <table class="tabel">
	      <tr>
	        <td><b class="antet">Sterge instrument din baza de date</b></td>
	      </tr>
	    </table>
	  </div>

		<div class="nav">
			<ul>
	  		<li><a href = "admin.php">Acasa</a></li>
	  		<li><a href = "add.php" >Adauga Instrument</a></li>
	  		<li><a href = "edit.php" >Editeaza Instrument</a></li>
	    	<li><a href = "delete.php"  class="color">Sterge Instrument</a></li>
	    	<li><a href = "aboutus.php">Despre Noi</a></li>
			</ul>
			<br><br><br>
		</div>

		<form action="" method="POST" enctype="multipart/form-data">
			<div class = "header">

	  		<div class = "container">
	    		<div class="title">
	    			<h2>Sterge Instrument</h2>
	      	</div>

	 			 	<table>
	      		<tr>
	     				<td>COD Instrumente:</td>
	     				<td><input type="text" name="cod_instrumente" /></td>
						</tr>
	      
	      		<tr>
		  				<td><h2><input  type="submit" name="sub" value="STERGE"/></h2></td>
		  			</tr>
	      
	      		<tr>
	      			<td><?php echo $msg; ?></td>
	      		</tr>
	    		</table>
	    	</div>
	   </div> 
	 </form>
	</body>
</html>