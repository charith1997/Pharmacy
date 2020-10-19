<html>
<head>
    <title>Health Plus Pharmacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="pharmacy_home.css" rel="stylesheet">
    <link rel="icon" href="./img/logo2.jpg">
    <?php
    include ("config.php");
    include ("function.php");

    //Declaring Variables
    $msg1 = "";
    $msg2 = "";
    $msg3 = "";
    $msg4 = "";
    $msg5 = "";
    $msg6 = "";
    $msg7 = "";
    $msg8 = "";
    $msg9 = "";
    $msg10= "";
    $msg11= "";
    $msg12= "";
    $msg13= "";
    $msg14= "";

    $nic  = "";
    $fname = "";
    $lname = "";
    $ad1 = "";
    $ad2 = "";
    $ad3 = "";
    $email = "";
    $date = "";
    $password = "";
    $cpassword = "";
    $img = "";

    if(isset($_POST ["submit"]))
    {
        $nic = $_POST["NIC"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $ad1 = $_POST["address1"];
        $ad2 = $_POST["address2"];
        $ad3 = $_POST["address3"];
        $email = $_POST["mail"];
        $date = $_POST["dob"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        
        
        $checkbox = isset($_POST["check"]);
        
        

        //Validations
        if(strlen($nic) < 10)
        {
            $msg3 = "<div style = 'color: red;'>Please Enter a valid NIC number</div>";
        }

        else if(nic_exists($nic,$connection))
        {
            $msg11 = "<div style = 'color: red;'>This User is allready exsist </div>";
        }

        else if(strlen($fname)< 3) 
        {
            $msg1 = "<div style = 'color: red;'>First Name Must Contain at least 3 Characters</div>";
        }

        else if(strlen($lname)< 3)
        {
            $msg2 = "<div style = 'color: red;'>Last Name Must Contain at least 3 Characters</div>";
        }

        else if (empty($date))
        {
            $msg6 = "<div style = 'color: red;'>Enter your Date of birth</div>";
        }
        

        else if (empty($password))
        {
            $msg12 = "<div style = 'color: red;'>Enter a password please. It cannot be empty</div>";
        }
        else if(strlen($password)<=6)
        {
        $msg14 = "<div style = 'color: red;'>Must Contain at least 5 charaters</div>";
        }

        else if (empty($cpassword))
        {
            $msg13 = "<div style = 'color: red;'>Please confirm your password</div>";
        }

        else if($password !== $cpassword)
        {
            $msg8 = "<div style = 'color: red;'>Password dosent match.</div>";
        }

        

        else if ($checkbox == "")
        {
        $msg9 = "<div style = 'color: red;'>Please Agree on Terms and Conditions.</div>";
        }

        else
        {
            
           
            
            
            $hashed = hash("sha512",$password);
            $sql = "INSERT INTO customer (NIC,fname,lname,address1,address2,address3,mail,dob,password)
            VALUES ('$nic','$fname','$lname','$ad1','$ad2','$ad3','$email','$date','$hashed')";
            if ($conn->query($sql) === TRUE) {
                $msg10 = "<div style = 'color:green; align:center;'> You are SucessFully Registerd</div>";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            
            $nic  = "";
            $fname = "";
            $lname = "";
            $ad1 = "";
            $ad2 = "";
            $ad3 = "";
            $email = "";
            $date = "";
            $password = "";
            $cpassword = "";
            $img = "";

            
        }

        


    }
    ?>
    
</head>

<body style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./img/0.jpg) no-repeat center center fixed; background-size: cover;">

       <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!--Best for responsive pages-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <!--Icon on nav bar-->
                    <span class="sr-only">Toggle Navigation</span>
                    <!--focusing on screen readers-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <!--3 lines on icon -->
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="#"><img id="logo" src="./img/logo3.jpg"> </a>
                <!--Logo for nav bar-->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a  href="pharmacy_home.php">Home</a> </li>
                    <li><a href="#">Our network</a> </li>
                    <li><a href="#">Drug lists</a> </li>
                    <li><a href="#">About</a> </li>
                    <li><a href="login.php">Login</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top:100px; margin-left:20px;">
        <div class="login-form col-md-4 offset-md-4 ">
            <div class="jumbotron"
                style="margin-top : 20px; padding:15px; padding-bottom:20px;  font-family:Arial, Helvetica, sans-serif;">
                <?php echo $msg10; ?>
                <h2>Sign Up First.</h2>
                <h3>Lest get ready to be healthy. </h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <lable> NIC Number : </lable>
                            <input type="text" name="NIC" placeholder="9XXXXXXXV" class="form-control" value = "<?php  echo $nic; ?>">
                            <?php echo $msg3; ?>
                            <?php echo $msg11; ?>
                    </div>
                    <div class="form-group">
                        <lable> First Name : </lable>
                        <input type="text" name="fname" placeholder="Saman" class="form-control" value = "<?php  echo $fname; ?>">
                        <?php echo $msg1; ?>
                    </div>
                    <div class="form-group">
                        <lable> Last Name: </lable>
                        <input type="text" name="lname" placeholder="Kodithuwakku" class="form-control" value = "<?php  echo $lname; ?>">
                        <?php echo $msg2; ?>
                    </div>
                    <div class="form-group">
                        <lable> Address : </lable>
                        <input type="text" name="address1" placeholder="No.460, Henegedara road" class="form-control" value = "<?php  echo $ad1; ?>">
                        <input type="text" name="address2" placeholder="Malabe" class="form-control" value = "<?php  echo $ad2; ?>">
                        <input type="text" name="address3" placeholder="Kaduwela" class="form-control" value = "<?php  echo $ad3; ?>">
                    </div>
                    <div class="form-group">
                        <lable> E-mail : </lable>
                        <input type="mail" name="mail" placeholder="saman.kodithuwakku@gmail.com" class="form-control" value = "<?php  echo $email; ?>">
                        <?php echo $msg5; ?>
                    </div>
                    <div class="form-group">
                        <lable> Date of birth: </lable>
                        <input type="date" name="dob"  class="form-control" value = "<?php  echo $date; ?>">
                        <?php echo $msg6; ?>
                    </div>
                    <div class="form-group">
                        <lable> Password : </lable>
                        <input type="password" name="password"
                            placeholder="Must contain(more than 8 digits,number,letter)" class="form-control" >
                            <?php echo $msg12; ?>
                            
                    </div>
                    <div class="form-group">
                        <lable> Re-Enter Password : </lable>
                        <input type="password" name="cpassword"
                            placeholder="Must contain(more than 8 digits,number,letter)" class="form-control">
                            <?php echo $msg13; ?>
                    </div>
                    <input type="checkbox" name="check" />
                    I Agree on the <a href="#">Terms and Conditions<br></a>
                    <?php echo $msg9; ?>
                    <center><br><input type="submit" value="Submit" name="submit" class="btn btn-success" /></center><br>
                    <center><a href = "login.php">Already Registerd </a></center>
                </form>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3>Contact us</h3>
                <br>
                <h4>Our address and contact info here</h4>
            </div>
            <div class="col-sm-4">
                <h3>Connect</h3>
                <a href="#" class="fab fa-facebook" id="icon_scale"></a>
                <a href="#" class="fab fa-twitter" id="icon_scale"></a>
                <a href="#" class="fab fa-youtube" id="icon_scale"></a>
                <a href="#" class="fab fa-linkedin" id="icon_scale"></a>
                <a href="#" class="fab fa-google" id="icon_scale"></a>
            </div>
            <div class="col-sm-4">
                <img src="./img/img.png" class="img-responsive">
            </div>
        </div>
    </footer>
</body>
</html>

