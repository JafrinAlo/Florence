<?php

session_start();
//$db = mysqli_connect('localhost', 'root', '', 'admiria');
$db= new mysqli("localhost","root","","admiria");
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
if(!isset($_SESSION['username'])){
    header('location:login.php');// makes sure user logs in b4 being in homepage
}
if(isset($_POST['logout'])){
    header('location:index.php');// makes sure user logs in b4 being in homepage
    unset($_SESSION['username']);
    return;
}

if(isset($_POST['register'])){
    $username=$_SESSION['username'];
    $sql="SELECT email from access where username='$username'";
    $result=$db -> query($sql);
    
    if ($result->num_rows > 0) {
      //echo "<table><tr><th>ID</th><th>Name</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $email=$row["email"];
      }
   
    }

    $name = mysqli_real_escape_string($db, $_POST['name']);
    
    $interest = mysqli_real_escape_string($db, $_POST['interest']);
    $division = mysqli_real_escape_string($db, $_POST['division']);
    $district = mysqli_real_escape_string($db, $_POST['district']);
    $thana = mysqli_real_escape_string($db, $_POST['thana']);
//$age = mysqli_real_escape_string($conn, $_POST['age']);

    $stmt = "INSERT INTO beautician (email, name, interest, division,district,thana) VALUES ('$email', '$name', '$interest', '$division','$district','$thana')";
        
        $_SESSION['success'] = "Beautician added";
        header("Location: reg_beauty.php");
        return;

}

?>
<html>
<head>
    <!--Onchange select location-->
<script type="text/javascript">
//from division to district
      function populate (s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "Dhaka") {
          var optionArray = [
            "|Choose",
            "dhaka|Dhaka",
            "madaripur|Madaripur",
            "faridpur|Faridpur",
            "tangail|Tangail"
          ];
        } else if (s1.value == "Barisal") {
          var optionArray = [
            "|Choose",
            "barguna|Barguna",
            "barisal|barisal",
            "bhola|Bhola"
          ];
        } else if (s1.value == "Chittagong") {
          var optionArray = ["|Choose", 
          "chadpur|Chadpur",
          "comilla|Comilla"];
        }
        for (var option in optionArray) {
          //just copy this for loop
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value = pair[0];
          newOption.innerHTML = pair[1];
          s2.options.add(newOption) ;
        }
      }
//from district to thana
      function populate1(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "dhaka") {
          var optionArray = [
            "|Choose",
            "khilkhet|Khilkhet",
            "dhanmondi|Dhanmondi",
            "gulshan|Gulshan",
            "vatara|Vatara"
          ];
        } else if (s1.value == "barisal") {
          var optionArray = [
            "|Choose",
            "barisal_sadar|Barisal Sadar",
            "gaurnadi|Gaurnadi",
            "muladi|Muladi"
          ];
        } else if (s1.value == "chadpur") {
          var optionArray = ["|Choose", 
          "bandar|Bandar",
          "chandgaon|Chandgaon"];
        }
        for (var option in optionArray) {
          //just copy this for loop
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value = pair[0];
          newOption.innerHTML = pair[1];
          s2.options.add(newOption) ;
        }
      }
    </script>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="style_reg_beauty.css">
        <link rel="stylesheet" type="text/css" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    </head>
    <body>

        <!--logout and name-->
        <form method="POST">
            <input type="submit" name="logout" value="logout" style="position:absolute; top:50; right:0;">
        </form>
        <h1 class="username"><?php 
         mysqli_select_db($db,'admiria');
        $sql="select username from access where username='".$_SESSION['username'] ."'";
        $result=mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result);
        if(is_array($row)){
           echo $_SESSION['username']=$row['username'];
        }
        ?></h1>
      
        <!--Location form-->

        <?php
   if (isset($_SESSION['success'])) {
        echo('<p style="color: black, text-align: center">' . htmlentities($_SESSION['success']) . "</p>\n");
        unset($_SESSION['success']);
    }
    
    ?>

        <div class="location"><h1>Registration</h1></div>
      
        <div class="loc-info">
        <form method="post">
        <div class="col-md-8 form-group">
           
                        <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                    <div class="form-group">
                        
                        <div class="col-md-4 form-group">
                             <label>Field of Interest <br>(Henna, bridal makeup, etc...)</label>
                                <input type="text" name="interest" class="form-control" required>
                        </div>
                       <label>Select Division </label>
                            <select name="division" class=" col-md-2 select-form" id="div" onchange="populate('div','dist')"  required>
                            <option value="" >Click to choose </option>
                                <option value="Dhaka" >Dhaka </option>
                                <option value="Barisal" >Barisal</option>
                                <option value="Chittagong" >Chittagong </option>
                                <option value="Khulna" >Khulna</option>
                                <option value="Mymensingh" >Mymensingh </option>
                                <option value="Rajshahi" >Rajshahi </option>
                                <option value="Rajshahi" >Rangpur </option>
                                <option value="Sylhet" >Sylhet</option>


                            </select>
                            <label> Select a District</label>
                            <select name="district" class=" col-md-3 select-form" id="dist" onchange="populate1('dist','thana')"  required>
                            
                            </select>
                            <label> Select a Thana</label>
                            <select name="thana" class=" col-md-3 select-form" id="thana"  required>
                            </select>
                        </div>
                        
                        <input type="submit" name="register" class="btn btn-primary" value="Register">
                    </form>
                    </div>

       
    </body>
</html>