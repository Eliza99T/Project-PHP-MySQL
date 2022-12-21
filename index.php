<?php
  include("connect.php");

  session_start();

  if(isset($_POST['submit'])){ 
    $username = $_POST['username'];
    $parola = $_POST['parola'];
    $data="select * from clienti where username='$username' AND parola='$parola'";
   
    $rezultat = mysqli_query($conn, $data) or die(mysql_error());
    $rand = mysqli_fetch_array($rezultat);
    if(isset($rand['codc']) && $rand['codc'] > 0){

      $_SESSION['username'] = $username;
      header("Location:admin.php?codc=" . $rand['codc']);
    }
    else{
      echo "<script type='text/javascript'> alert('Nu te-ai putut loga!')</script>";
    }
  }
?>


<!DOCTYPE html>
<html>

  <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>ACASA</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body class="body">
    <div class="box">
      <table>
        <tr>
          <td class="antet"><b>PAGINA DE LOGIN</b></td>
        </tr>
      </table>
    </div>
    <br><br>

    <form method="post" action="">
      <div  class="boxtwo">
        <fieldset align="center" id="five">
          <div class="boxfour">
            <h3 id="butonlog">Va logati AICI</h3>
          </div>

          <table class="indextable">
	          <tr>
              <td><br></td>
            </tr>
            <tr>
              <td><label>Username:</label></td>
              <td><input type="text" name="username" ></td>
            </tr>
            <tr>
              <td><label>Parola:</label></td>
              <td><input type="password" name="parola"></td>
            </tr>
            <tr>
              <div>
                <label id="inregistrarec">
                  <a href="signup.php">Daca nu ai cont inregistreaza-te aici!<a>
                </label>
              </div>
              <td><input type="submit" name="submit" value="LOGIN"></td>
       	    </tr>
            <tr>
              <td ><br></td>
              <td><br></td>
            </tr>
          </table>
        </fieldset>
      </div>
    </form>
  </body>
</html>


