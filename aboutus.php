<?php 
    include("connect.php");
?>

<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body class="body">

        <div class="nav">
            <ul>
                <li><a> 
                    <?php
                    $Today = date('y:m:d',time());
                    $new = date('l, F d, Y', strtotime($Today));
                    echo $new; 
                    ?> 
                </a></li>
                <li><a href = "index.php">Deconectare</a></li>
            </ul>
            <br><br><br>
        </div> 
  
        <div class="box">
            <table  class="desprenoi">
                <tr>
                    <td class="desprenoi">
                        <h1 align="center">Despre Noi</h1>
                    </td>
                </tr>
            </table>
        </div>

        <div class="nav">
            <ul>
                <li><a href="admin.php">Acasa</a></li>
                <li><a href="add.php">Adauga Instrument</a></li>
                <li><a href="edit.php">Editeaza Instrument</a></li>
                <li><a href="delete.php">Sterge Instrument</a></li>
                <li><a class="color" href = "aboutus.php">Despre Noi</a></li>
            </ul>
        </div>
        <br><br>
                  
        <div id="boxabout">
            <h1 id="info">Informatii </h1>
            <p class="paragraf">S.C. Music S.R.L. este un lanţ de magazine de instrumente muzicale cunoscut în Romania . A fost înfiinţat în 2006 şi are ca scop promovarea şi vânzarea produselor. Produsele au diferite mărci şi modele , iar pasionaţii de muzică vor fi încântaţi să le descopere.
            </p>
      
            <h2 id="misiune"> MISIUNE </h2>
            <p class="paragraf">Misiunea noastra este aceea de a oferi informaţii necesare cu privire la produsele de pe site.De asemenea vor fi adăugate noutati si promoţii, prin care să se promoveze ofertele şi serviciile noastre.
            </p>
        </div>
    </body>
</html>
