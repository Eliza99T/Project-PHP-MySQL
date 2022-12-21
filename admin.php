<?php 
include("connect.php");?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acasa</title>
    </head>
    <body class="body">
        <div class="nav">
            <ul>
                <li><a> 
                    <?php
                    $Today = date('y:m:d',time());
                    $new = date('l, F d, Y', strtotime($Today));
                    echo $new; ?> 
                </a></li>
                <li><a href = "index.php">Deconectare</a></li>
            </ul>
            <br><br><br>
        </div> 

        <div class="box">
            <table id="table1">
                <tr>
                    <td">
                        <h1 id="pganj">Pagina angajati</h1>
                    </td>
                </tr>
                <tr>
                    <td>Informatii</mark></b></td>
                </tr>
            </table>
        </div>

        <div class="nav">
            <ul>
                <li><a class="color" href="admin.php">Acasa</a></li>
                <li><a href="add.php">Adauga Instrument</a></li>
                <li><a href="edit.php">Editeaza Instrument</a></li>
                <li><a href="delete.php">Sterge Instrument</a></li>
                <li><a href = "aboutus.php">Despre Noi</a></li>
            </ul>
        </div>
        <br><br>
                    
        <div class="boxtwo">   
            <p id="listainstr">LISTA INSTRUMENTE</p>
            <div id="main">
                <table id="th1">
                    <tr>
                        <th>Cod Instrument</th>
                        <th>Denumire Instrument</th>
                        <th>Pret</th>
                        <th>Culoare</th>
                        <th>Marime</th>
                    </tr>              
                        
                    <?php 
               
                    $data=mysqli_query($conn,"SELECT * FROM `instrumente`");
                        while($row = mysqli_fetch_array($data)){   
                            echo "<tr>";
                            echo "<td>" ;echo $row["cod_instrumente"]; echo "</td>";
                            echo "<td>";echo $row["denumire_instrument"]; echo "</td>";
                            echo "<td>"; echo $row["pret"]; echo "</td>";
                            echo "<td>"; echo $row["culoare"]; echo "</td>";
                            echo "<td>"; echo $row["marime"]; echo "</td>";
                            echo "</tr>";
                        }
                    ?>

                </table>
            </div>   
        </div>
       
    </body>

</html>






