<?php
include ("config.php");
include ("function.php");

$msg17 = "";
$msg18 = "";
$msg19 = "";
$msg20 = "";
$msg21 = "";
$msg22 = "";
$msg23 = "";
$msg24 = "";

$id ="";
$date = "";
$password = "";

if(isset($_POST['submit']))
{

    $id = $_POST['NIC'];
    $date = $_POST['dob'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    if(empty($id))
    {
        $msg17 = "<div style = 'color: red;'>Cannot keep NIC field empty</div>";
    }

    else if(empty($date))
    {
        $msg18 = "<div style = 'color: red;'>Cannot keep Date of birth field empty</div>";
    }

    else if(empty($password))
    {
        $msg19 = "<div style = 'color: red;'>What do you want us to change?</div>";
    }

    else if(strlen($password)<=5)
    {
        $msg21 = "<div style = 'color: red;'>Must Contain at least 5 charaters</div>";
    }

    else if($password !== $cpassword)
    {
        $msg20 = "<div style = 'color: red;'>Password dosent match.</div>";
    }

    else if(nic_exists($id,$connection))
    {
        $result = mysqli_query($connection,"SELECT dob FROM customer WHERE NIC ='$id'");
        $retrive = mysqli_fetch_array($result);
        $dob = $retrive['dob'];
        if($date == $dob)
        {
            $hashed = hash("sha512",$password);
            mysqli_query($connection, "UPDATE customer SET password = '$hashed' WHERE NIC = '$id'");
            $msg24 = "<div style = 'color: green; font-weight:bold;'>Passoword Changed Successfully</div>";
        }

        else
        {
            $msg23 = "<div style = 'color: red;'>Invalid Date Of Birth</div>";
        }
    }

    else{
        $msg22 = "<div style = 'color: red;'>NIC not Found</div>";
    }
}



?>

<title>Forgot Password </title>
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

</head>

<body
    style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./img/002.jpg) no-repeat center center fixed; background-size: cover;">
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
                    <li><a  href="#">Home</a> </li>
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
                style="margin-top : 20px; padding:15px; padding-bottom:10px; background:linear-gradient(rgba(0, 0, 0, 0.1); font-family:Arial, Helvetica, sans-serif;">
                <h2>Forgot Password</h2>
                <?php echo $msg24; ?><br>
                <form method="post">
                    <div class="form-group"> 
                        <lable> NIC Number : </lable>
                            <input type="text" name="NIC" placeholder="9XXXXXXXV" class="form-control" value = "<?php  echo $id; ?>">
                            <?php echo $msg17; ?>
                            <?php echo $msg22; ?>
                    </div>
                    <div class="form-group">
                        <lable> Date of Birth : </lable>
                        <input type="date" name="dob" class="form-control" value = "<?php  echo $date; ?>">
                        <?php echo $msg18; ?>
                        <?php echo $msg23; ?>
                    </div>
                    <div class="form-group">
                        <lable> New Password : </lable>
                        <input type="password" name="pass" class="form-control" placeholder="Enter new password" value = "<?php  echo $password; ?>" >
                        <?php echo $msg19; ?>
                        <?php echo $msg21; ?>
                    </div>
                    <div class="form-group">
                        <lable> Re-Enter Password : </lable>
                        <input type="password" name="cpass" class="form-control" placeholder="Re-Enter New Password">
                        <?php echo $msg20; ?>
                        
                    </div>
                    <center><br><input type="submit" value="Submit" name="submit" class="btn btn-success" /></center><br>
                    <center><a href  = "login.php">Go Back to Login Page</a></center>
                    
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