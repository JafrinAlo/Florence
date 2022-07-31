<?php include "server.php"?>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<html>

<head>
    <title>Florence Says Thanks</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
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

    <p style="font-size: 30px;font-family: 'Agency FB'"><b>Florence</b></p>
    <p style="font-size: 10px;color: black">Beauty products</p>
</div>



<center align="center" style="text-align: center;top: 50px">Thank You for shopping with us.</strong></center>
<center align="center" style="text-align: center;top: 50px">Hope You will like it.</strong></center>
<br>
<center align="center" style="text-align: center;top: 50px"> <a  href="index.php" >Jump to homepage.</a></center>



</body>
</html>