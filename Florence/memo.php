<?php include "server.php"?>
<?php

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>Florence</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="memo.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php  if (!isset($_SESSION['username'])) : ?>
    <p align="top-right"> <a href="register.php" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 10px;
right: 10px;"><u>register/login</u></a> </p>
<?php endif ?>

<?php  if (isset($_SESSION['username'])) : ?>
    <p align="top-right" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: -10px;
right: 10px;"><strong><?php echo $_SESSION['username']; ?></strong></p>
    <p align="top-right"> <a href="index.php?logout='1'" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 20px;
right: 10px;">logout</a> </p>
<?php endif ?>

<p align="right"> <a href="#cart" style="color: greenyellow;padding: 0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 10px;
right: 10px;"><i class="fa fa-basket"></i></a> </p>

<div class="header">

    <p style="font-size: 30px;font-family: 'Agency FB';color: black"><b>Florence</b></p>
    <p style="font-size: 10px;color: black;color: black">Beauty Products</p>
</div>

<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Brands
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="MAC.php" target="_blank">M A C</a>
            <a href="HudaBeauty.php" target="_blank">HUDA BEAUTY</a>
            <a href="Nyx.php" target="_blank">NYX</a>
            <a href="Nars.php" target="_blank">NARS</a>
            <a href="Maybelline.php" target="_blank">MAYBELLINE(New York)</a>
            <a href="L'Oreal.php" target="_blank">L'Oreal</a>
            <a href="gucci.php" target="_blank">GUCCI</a>
            <a href="H&M.php" target="_blank">H&M</a>
            <a href="Dior.php" target="_blank">DIOR</a>
            <a href="Chanel.php" target="_blank">CHANEL</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Products
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Foundations.php" target="_blank">Foundations</a>
            <a href="Highlighter.php" target="_blank">Highlighter</a>
            <a href="eyeliner.php" target="_blank">Eyeliners,Kajal,Mascara</a>
            <a href="Lipsticks.php" target="_blank">Lipsticks</a>
            <a href="Eye_palletes.php" target="_blank">Eye-Pallettes</a>
            <a href="Makeup%20Brush.php" target="_blank">Makeup BRUSH</a>
            <a href="MakeupRemovers.php" target="_blank">Makeup Removers</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Accessories
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="perfumes.php">Perfumes</a>
            <a href="purses.php">Purses</a>
        </div>
    </div>


    <a href="card.html"target="_blank">About</a>

</div>


<div id="invoice-POS">

    <center id="top">
        <div class="info">
            <h2 style="color:darkslategray;">Receipt</h2>
        </div><!--End Info-->
    </center><!--End InvoiceTop-->

    <div id="mid">
        <div class="info">
          <p style="font-size: 17px">  Name:  <?php  if (isset($_SESSION['username'])) : ?>
            <center style="font-family: 'Agency FB';font-size: 20px"><strong><?php echo $_SESSION['username']; ?></center>
            <?php endif ?></strong></br>

            <p style="font-size: 17px"> address :</p>
            <p></p>
            <center style="font-family: 'Agency FB';font-size: 20px"><strong><?php
            $result = mysqli_query($db,"SELECT baddr,bstate,bzip from memo");
            $row = mysqli_fetch_row($result);
            $sum = $row[0].' , '.$row[1].' , '.$row[2];

            echo $sum
                    ?></strong></center></br>


            <p style="font-size: 17px">email:</p>
            <p></p>
            <?php  if (isset($_SESSION['username'])) : ?>
            <center style="font-family: 'Agency FB';font-size: 20px"><strong><?php echo $_SESSION['username']."@gmail.com"; ?></strong></center>
            <?php endif ?></br>
        </p>
        </div>
    </div><!--End Invoice Mid-->
        <center style="font-size: 17px">Products</center>
    <div id="bot">

        <div id="table">
            <?php
            $result = mysqli_query($db,"SELECT * FROM cart");
            $all_property = array();  //declare an array for saving property

            //showing property
            echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
            while ($property = mysqli_fetch_field($result)) {
                echo '<td>'    .$property->name.   '</td>';  //get field name for header
                array_push($all_property, $property->name);  //save those to array
            }
            echo '</tr>';

            //showing all data
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td>'. $row[$item] .'</td>'; //get items using property value
                }
                echo '</tr>';
            }
            echo "</table>";
            ?>
        </div><!--End Table-->

        <div id="legalcopy">

            <center align="center" style="text-align: center;top: 50px">TOTAL:</strong></center>
            <center>
                <?php
                $result = mysqli_query($db,"SELECT SUM(price) FROM cart");
                $row = mysqli_fetch_row($result);
                $sum = $row[0];

                echo $sum ."$"
                ?>
            </center>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <button type="submit" class="pay"><a href="thanks.php" style="color: black">Confirm Payment</a></button>

        </div>

    </div><!--End InvoiceBot-->
</div><!--End Invoice-->

<footer class="footer-distributed">

        <div class="footer-left">

            <h3><span>Florence</span></h3>


            <p class="footer-company-name">by</p>

            <p class="footer-links">
                Jafrin Akter Alo
                <br>
            </p>
            <p class="footer-links">
               Zannatul Tazree Ramisa
               <br>
            </p>
            <p class="footer-links">
                Fariha Zamam Nishat
                <br>
            </p>
        </div>

        <div class="footer-center">

            

            <div>
                <i class="fa fa-phone"></i>
                <p>123456789</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:jafrinalo@gmail.com">jafrinalo@gmail.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Always believe in yourself
            </p>

            <div class="footer-icons">

                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>


            </div>

        </div>

    </footer>

