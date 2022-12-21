<?php include("connect.php");
  session_start();
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit'])) {

    $nume=$_POST['nume']; 
    $adresa=$_POST['adresa'];
    $telefon=$_POST['telefon'];
    $email=$_POST['email'];
    $parola=$_POST['parola'];
    $username=$_POST['username'];
      
    $_SESSION["susername"]=$username;
    $_SESSION["sparola"]=$parola;
      
      
      
    if($nume!="" && $adresa!="" && $telefon!="" && $email!="" && $parola!="" && $username!="" ) { 

      $insert="INSERT INTO `clienti`(`nume`,`adresa`,`telefon`,`email`,`parola`,`username`) VALUES('".$nume."','".$adresa."','".$telefon."','".$email."','".$parola."','".$username."')";
          
      $data=mysqli_query($conn,$insert); 

      if($data) {
  
        echo "<script type='text/javascript'> alert('Te-ai înregistrat cu succes!')</script>";
        echo "<script type='text/javascript'> window.location='index.php'</script>"; 
      }   


      else {

        echo "Ceva nu a mers bine!Incearca din nou!";

      }
    }
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>INREGISTRARE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body class="body">

    <div class="box">
      <table>
        <tr>
          <td id="ipag"><b>PAGINA DE INREGISTRARE</b></td>
        </tr>
      </table>
    </div>
    <br><br>

    <div  class="boxtwo">
      <fieldset class="one">
        <div class="title">
          <h2>DATE DE CONTACT</h2>
        </div>

        <form action="" method="post">

          <table id=aligntable>
            <tr>
              <td>NUME PRENUME:</td>
              <td ><input type="text" required="required" name="nume" size="17" maxlength="30"/></td>
            </tr>

            <tr>
              <td>ADRESA:</td>
              <td ><input type="text" required="required" name="adresa" size="17" maxlength="30"/></td>
            </tr>

            <tr>
              <td>TELEFON :</td>
              <td><input type="text" name="telefon" required="required" size="17" maxlength="30"/></td>
            </tr>

            <tr>
              <td>EMAIL :</td>
              <td><input type="text" name="email" required="required" size="17" maxlength="30"/></td>
            </tr>

            <tr>
              <td>PAROLA:</td>
              <td><input type="password" name="parola" required="required" size="17" maxlength="30"></td>
            </tr>

            <tr>
              <td>USERNAME :</td>
              <td><input type="text" name="username" required="required" size="17" maxlength="30"/></td>
            </tr>

            <tr>
              <td><input type="submit" name="submit" value="Inregistreaza-te!"></td>
            </tr>
          </table>
        </form>
      </fieldset>
    </div>
  </body>
</html>
  
