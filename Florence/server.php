<?php
session_start();

$username = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'admiria');


// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM access WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }


    if (count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO access (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}




// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM access WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}











//////////////////add to cart


if (isset($_POST['1'])) {
    $name = 'Nars 12 Matte Shades';
    $price = 12;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['2'])) {
    $name = 'NYX Ultimate';
    $price = 9;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['3'])) {
    $name = 'Huda Beauty
Rose Golden edition';
    $price = 17;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['4'])) {
    $name = 'C H A N E L
Summer box';
    $price = 18;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['5'])) {
    $name = 'D I O R
High Ends 25';
    $price = 3;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['6'])) {
    $name = 'Gucci Colors';
    $price = 14;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['7'])) {
    $name = 'H&M Metallic';
    $price = 10;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['8'])) {
    $name = 'LA Pallete GOLD';
    $price = 17;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['9'])) {
    $name = 'MAC Eyes';
    $price = 25;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['10'])) {
    $name = 'M A Y B E L L I N E
Burgandy Bar';
    $price = 21;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['11'])) {
    $name = 'Channel_eyes11';
    $price = 15;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['12'])) {
    $name = 'D I O R
eyes22';
    $price = 12;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['13'])) {
    $name = 'G U C C I
eyes33

';
    $price = 19;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['14'])) {
    $name = 'h & M
eyes44';
    $price = 11;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['15'])) {
    $name = 'Huda Beauty
eyes505

';
    $price = 17;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['16'])) {
    $name = 'Loreal Paris
eyes66

';
    $price = 14;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['17'])) {
    $name = 'M ~ A ~ C
eyes100';
    $price = 22;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['18'])) {
    $name = 'M A Y B E L L I N E
eyes77

';
    $price = 20;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['19'])) {
    $name = 'N A R S
eyes88

';
    $price = 17;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['20'])) {
    $name = 'N Y X
eyes99';
    $price = 14;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['21'])) {
    $name = 'NYX_Natural';
    $price = 31;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['22'])) {
    $name = 'N A R S_fiji
Natural Base';
    $price = 26;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['23'])) {
    $name = 'C H A N E L_22Rose
LES BEIGES';
    $price = 41;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['24'])) {
    $name = 'M ~ A ~ C_NC20
Studio Fix Fluid';
    $price = 38;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['25'])) {
    $name = 'Loreal n2
True Match Foundation';
    $price = 29;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['26'])) {
    $name = 'HudaBeauty_food110N';
    $price = 40;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['27'])) {
    $name = 'H&M_Pinky';
    $price = 22;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['28'])) {
    $name = 'G U C C I_050';
    $price = 45;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['29'])) {
    $name = 'DIOR SKIN';
    $price = 35;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['30'])) {
    $name = 'M A Y B E L L I N E
Nautral Coverage';
    $price = 34;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['31'])) {
    $name = 'Gucci_103';
    $price = 7;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['32'])) {
    $name = 'Camelia De Plumes';
    $price = 5;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['33'])) {
    $name = 'M A Y B E L L I N E_108';
    $price = 7;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['34'])) {
    $name = 'MAC Minerise';
    $price = 7;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['35'])) {
    $name = 'Loreal_106
Crushed Foil';
    $price = 4;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['36'])) {
    $name = 'Huda Beauty
Pink Sands';
    $price = 9;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['37'])) {
    $name = 'H&M_104
Sparkiling Purple';
    $price = 3;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['38'])) {
    $name = 'N Y X_201
Mosaic Powder';
    $price = 6;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['39'])) {
    $name = 'N A R S_109
Highlighting Blush Powder';
    $price = 11;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['40'])) {
    $name = 'D I O R_102
Duals';
    $price = 5;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['41'])) {
    $name = 'N Y X
lipsH9H

';
    $price = 31;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['42'])) {
    $name = 'N A R S
lipsG9G';
    $price = 24;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['43'])) {
    $name = 'M A Y B E L L I N E
LipsF9F';
    $price = 29;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['44'])) {
    $name = 'M ~ A ~C
RoobyWoo';
    $price = 40;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['45'])) {
    $name = 'Loreal
lipsE9E';
    $price = 36;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['46'])) {
    $name = 'Huda Beauty
lipsD9D

';
    $price = 43;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['47'])) {
    $name = 'H&M
lipsC9C

';
    $price = 21;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['48'])) {
    $name = 'G U C C I
lipsB9B';
    $price = 51;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['49'])) {
    $name = 'D I O R
lipsA9A';
    $price = 43;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['50'])) {
    $name = 'C H A N E L
lips999

';
    $price = 33;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['51'])) {
    $name = 'N Y X
brushPPP';
    $price = 70;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['52'])) {
    $name = 'Huda Beauty
BrushEEE';
    $price = 68;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['53'])) {
    $name = 'M A Y B E L L I NE
brushNNN';
    $price = 65;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['54'])) {
    $name = 'M ~ A ~ C
MbrushGGG';
    $price = 85;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['55'])) {
    $name = 'Loreal Paris
brushFFF';
    $price = 59;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['56'])) {
    $name = 'D I O R
brushBBB';
    $price = 60;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['57'])) {
    $name = 'H&M
brushDDD

';
    $price = 45;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['58'])) {
    $name = 'G U C C I
brushCCC';
    $price = 45;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['59'])) {
    $name = 'C H A N E L
brushAAA

';
    $price = 63;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['60'])) {
    $name = 'N A R S
brushMMM';
    $price = 62;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['61'])) {
    $name = 'N Y X
remoBWCW.';
    $price = 2;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['62'])) {
    $name = 'N A R S
remo9090';
    $price = 3;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['63'])) {
    $name = 'M A Y B E L L I N E
remoPOPO';
    $price = 5;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['64'])) {
    $name = 'M ~ A ~ C
remo8080';
    $price = 6;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['65'])) {
    $name = 'Loreal Paris
remo7070';
    $price = 2;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['66'])) {
    $name = 'Huda Beauty
remoQAQM';
    $price = 3;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['67'])) {
    $name = 'H & M
remo6060';
    $price = 4;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['68'])) {
    $name = 'G U C C I
remo5050';
    $price = 3;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['69'])) {
    $name = 'D I O R
remo4040';
    $price = 6;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['70'])) {
    $name = 'C H A N E L
remo3030';
    $price = 3;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['71'])) {
    $name = 'ANNIE JUSTIN (AJ)';
    $price = 120;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['72'])) {
    $name = 'Beyonce Heat';
    $price = 89;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['73'])) {
    $name = 'C H L O E';
    $price = 117;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['74'])) {
    $name = 'D I O R
Jadore202';
    $price = 205;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['75'])) {
    $name = 'G U C C I
perfume8888';
    $price = 138;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['76'])) {
    $name = 'LeFemme
perfume1212

';
    $price = 69;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['77'])) {
    $name = 'O P I U M
perfume201';
    $price = 76;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['78'])) {
    $name = 'T O N I Q
Gray Glitter';
    $price = 58;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['79'])) {
    $name = 'Berry Pecker
Wedding Collection

';
    $price = 65;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}
if (isset($_POST['80'])) {
    $name = 'Louis Vuitton
Summer coll';
    $price = 92;
    $query = "INSERT INTO cart (prname,price) 
  			    VALUES('$name','$price')";
    mysqli_query($db,$query);

}




if (isset($_POST['send'])) {
    $name = $_POST['firstname'];
    $mail = $_POST['email'];
    $addr = $_POST['address'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $card = $_POST['cardnumber'];
    $exp = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $query = "INSERT INTO memo(bname,bmail,baddr,bstate,bzip,bnum,byear,bcvv) 
  			    VALUES('$name','$mail','$addr','$state','$zip','$card','$exp','$cvv')";
    mysqli_query($db,$query);
    header('location: memo.php');

}








if (isset($_POST['search'])) {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $result = mysqli_query($db,"SELECT * FROM products WHERE price BETWEEN  $min AND $max");
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

}






?>
<html>

<STYLE>
    body {
        font-size: 19px;
        background: white;
    }
    table{
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
    }
    tr {
        border-bottom: 1px solid ;
        color: black;
    }
    th, td{
        border: none;
        height: 30px;
        padding: 2px;
        color: black;
    }
    tr:hover {
        background: blueviolet;
    }
</STYLE>
<body>
</body>
</html>













