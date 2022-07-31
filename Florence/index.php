<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Florence</title>
    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader">
    <h1>Florence</h1>
    <span></span>
    <span></span>
    <span></span>
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">

    <?php  if (!isset($_SESSION['username'])) : ?>
        <p align="top-right"> <a href="register.php" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 10px;
right: 10px;"><u>SignUp</u></a> </p>

<p align="top-right"> <a href="login.php" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 30px;
right: 10px;"><u>Login</u></a> </p>



    <?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
        <p align="top-right" style="color: greenyellow;padding:0px;
font-size: 20px;
color: black;
text-align:center;
position: absolute;
top: -50px;
right: 10px;"><strong><?php echo $_SESSION['username']; ?></strong></p>
        <p align="top-right"> <a href="index.php?logout='1'" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 10px;
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

        <p style="font-size: 30px;font-family: 'Agency FB'"><b>FLORENCE</b></p>
        <p style="font-size: 10px;color: black">Beauty products</p>
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
                
        
        <div class="topnav-right">
            <a href="cart.php"><b>CheckOut</b><i class="fa fa-shopping-cart"></i></a>
        </div>

        <a href="about.html"target="_blank">About</a>
        <a href="face.html"target="_blank">Try our Products</a>
        echo "<a href='/GitProject/QRCodeScanner/'>Check Originality</a>";

        <?php
        if(isset($_SESSION['username'])){
        echo "<a href='reg_beauty.php'>Register As a beautician</a>";
        
        }?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="slideshow-container">


        <div class="mySlides fade">

            <div class="parallax1"></div>
        </div>


        <div class="mySlides fade">

            <div class="parallax2"></div>
        </div>

        <div class="mySlides fade">

            <div class="parallax3"></div>
        </div>

        <div class="mySlides fade">

            <div class="parallax4"></div>
        </div>

        <div class="mySlides fade">

            <div class="parallax5"></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>


    <p  style="color: black;
    margin-left: -22%;
text-align:center;
font-size: 21px;
font-family: 'Franklin Gothic Book';
">____Best Sellers____</p>
    <p style="color: white">hello</p>



    <div class="row">

        <div class="leftcolumn">
            <a target="_blank" href="photos/palletessssssss/1.jpg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;" src="photos/palletessssssss/1.jpg" alt="Forest">
            </a>
            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">NARS pallete</a></p>
            <p style="font-size: 14px">price : $12.00</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>

        </div>
        <div class="leftcolumn">
            <a target="" href="photos/removerrrrrrrrr/Channel_remo3030.jpg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;" src="photos/removerrrrrrrrr/Channel_remo3030.jpg" alt="Forest">
            </a>
            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">Chanel Remover</a></p>
            <p style="font-size: 14px">price : $15</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>


        </div>
        <div class="leftcolumn">
            <a target="_blank" href="photos/highlighterrrrrrrrrrrrr/Maybelline_108.jpeg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px" src="photos/highlighterrrrrrrrrrrrr/Maybelline_108.jpeg" alt="Forest">
            </a>

            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">Maybelline Highlighter</a></p>
            <p style="font-size: 14px">price : $6.50</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>


        </div>
        <div class="leftcolumn">
            <a target="_blank" href="photos/Foundations/HudaBeauty_food110N.jpeg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;" src="photos/Foundations/HudaBeauty_food110N.jpeg" alt="Forest">
            </a>
            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">Huda Beauty Foundation</a></p>
            <p style="font-size: 14px">price : $40</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>


        </div>


    </div>
    <p  style="color: black;
    margin-left: -22%;
text-align:center;
font-size: 21px;
font-family: 'Franklin Gothic Book';
">____Trending____</p>
    <p style="color: white">hello</p>



    <div class="row">

        <div class="leftcolumn">
            <a target="_blank" href="photos/mascaraaaaaaaa/Loreal_eyes66.jpg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;" src="photos/mascaraaaaaaaa/Loreal_eyes66.jpg" alt="Forest">
            </a>
            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">L'OREAL eyes</a></p>
            <p style="font-size: 14px">price : $14</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>

        </div>
        <div class="leftcolumn">
            <a target="_blank" href="photos/makeupbrushesssssssssss/MAC_brushGGG.jpg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;" src="photos/makeupbrushesssssssssss/MAC_brushGGG.jpg" alt="Forest">
            </a>
            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">MAC_brush</a></p>
            <p style="font-size: 14px">price : $85</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>


        </div>
        <div class="leftcolumn">
            <a target="_blank" href="photos/lipsticccssssssss/Gucci_lipsB9B.jpg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px" src="photos/lipsticccssssssss/Gucci_lipsB9B.jpg" alt="Forest">
            </a>

            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">Gucci_lips</a></p>
            <p style="font-size: 14px">price : $51</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>


        </div>
        <div class="leftcolumn">
            <a target="_blank" href="photos/removerrrrrrrrr/L'Oreal_remo7070.jpg">
                <img style= "border: 0px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;" src="photos/removerrrrrrrrr/L'Oreal_remo7070.jpg" alt="Forest">
            </a>
            <p><a href="face.html" style="font-size: 16px;font-family: 'Fira Code Retina'">L'OREAL remover</a></p>
            <p style="font-size: 14px">price : $2.00</p>
            <span class="fa fa-star checked" style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star checked"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>
            <span class="fa fa-star"style="font-size: 12px"></span>


        </div>

        
    </div>



    <p style="color: white">hello</p>
    

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


</div>

<script src="loader.js"></script>
<script src="slider.js"></script>

</body>
</html>
