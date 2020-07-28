<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiroto | Template</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php
session_start();
/*header section*/ include "header.php";
?>

    <?php

    //Seat selection
    echo "    <h1 style='text-align: center;'>TICKET PURCHASE</h1>";

    echo "    <div class='ticket_purchase_bg'>";

    echo "        <div class='plane'>";
    echo "            <ol class='cabin fuselage'>";
                      
                      //Row A
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='A$counter' value='A$counter'/>";
    echo "                    <label for='A$counter'>A$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row B
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='B$counter' value='B$counter'/>";
    echo "                    <label for='B$counter'>B$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row C
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='C$counter' value='C$counter'/>";
    echo "                    <label for='C$counter'>C$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row D
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='D$counter' value='D$counter'/>";
    echo "                    <label for='D$counter'>D$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row E
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='E$counter' value='E$counter'/>";
    echo "                    <label for='E$counter'>E$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row F
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='F$counter' value='F$counter'/>";
    echo "                    <label for='F$counter'>F$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row G
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='G$counter' value='G$counter'/>";
    echo "                    <label for='G$counter'>G$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row H
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='H$counter' value='H$counter'/>";
    echo "                    <label for='H$counter'>H$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";


                      //Row I
    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='I$counter' value='I$counter'/>";
    echo "                    <label for='I$counter'>I$counter</label>";
    echo "                </li>";
                      }
    echo "                </ol>";
    echo "            </li>";



    echo "            <li class='table_row'>";
    echo "                <ol class='seats' type='A'>";
                      for($counter=1; $counter<5; $counter++){
    echo "                <li class='seat'>";
    echo "                    <input type='checkbox' id='J$counter' value='J$counter'/>";
    echo "                    <label for='J$counter'>J$counter</label>";
    echo "                </li>";
                       }
    echo "                </ol>";
    echo "            </li>";
    echo "            </ol>";
    echo "        </div>";


    //Tickets Detail Table
    echo "        <div class='ticket_purchase_table'>";
    echo "            <form action='#'>";
    echo "                <table >";

    echo "                    <tr>";
    echo "                        <th><b>DATE</th>";
    echo "                        <td>$_SESSION[date]</td>";
    echo "                    </tr>";

    echo "                    <tr>";
    echo "                        <th><b>FROM</th>";
    echo "                        <td>$_SESSION[fromLocation]</td>";
    echo "                    </tr>";

    echo "                    <tr>";
    echo "                        <th><b>TO</th>";
    echo "                        <td>$_SESSION[toLocation]</td>";
    echo "                    </tr>";

    echo "                    <tr>";
    echo "                        <th>PRICE</th>";
    echo "                        <td>RM $_SESSION[price]</td>";
    echo "                    </tr>";

    echo "                    <tr>";
    echo "                        <th>BUS NO PLATE</th>";
    echo "                        <td>$_SESSION[busNoPlate]</td>";
    echo "                    </tr>";

    echo "                    <tr>";
    echo "                        <th>DEPART TIME</th>";
    echo "                        <td>$_SESSION[departTime]</td>";
    echo "                    </tr>";

    echo "                    <tr>";
    echo "                        <th>ESTIMATE TIME ARRIVAL</th>";
    echo "                        <td>$_SESSION[estTimeArrive]</td>";
    echo "                    </tr>";
    echo "                </table>";
    echo "                <br>";

    echo "                <div class='proceed_pay_btn'>";
    echo "                    <button class='primary-btn' name='submit' style='text-align: center;'>Proceed to Payment</button>";
    echo "                </div>";
    echo "            </form>";
    echo "        </div>";
    echo "    </div>";

    ob_end_flush(); //flush output buffering
    session_destroy(); //destroy session
    ?>

    <?php /*footer.php*/ include "./footer.php"; ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
