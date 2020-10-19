<?php
include ("header.php");
include ("config.php");
include ("function.php");
session_start();

$msg12 = "";
$msg13 = "";
$msg14 = "";
$msg15 = "";
$msg16 = "";

$id = "";
$pass = "";

if (isset($_POST["submit"]))
{

$id = $_POST["id"];
$pass = $_POST["password"];
$checkbox=isset($_POST["check"]);

if(empty($id))
{
    $msg12 = "<div style = 'color: red;'>Please Enter your NIC number </div>";
}

else if(empty($pass))
{
    $msg13 = "<div style = 'color: red;'>Please Enter your Password </div>";
}
else if(nic_exists($id,$connection))
    {
        $Epass = mysqli_query($connection, "SELECT password  From customer where NIC = '$id'"); 
        $Epass_a =  mysqli_fetch_array($Epass);
        $Dpass = $Epass_a["password"];
        $Hpass = hash("sha512",$pass);

        if($Dpass !== $Hpass)
        {
            $msg15 = "<div style = 'color: red;'>The Password is Not Matching</div>";
        }

        else if ($Dpass == $Hpass)
        {   
            $_SESSION['id'] = $id;
            if($checkbox == "on")
            {   
                setcookie('name',$id,time()+1000000);
    
            }
            header("location:profile.php");
        }
    }

else{
         $msg16 = "<div style = 'color: red;'>Invalid NIC Number</div>";
    }

}
?>
<title>Login Form</title>
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

<body style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./img/00.jpg) no-repeat center center fixed; background-size: cover;">>
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
    <div class="container " style="align : center; margin-left:10px;">
        <div class="login-form col-md-4 offset-md-4" >
            <div class="jumbotron" style="margin-top : 100px; padding:15px; padding-bottom:10px; background:linear-gradient(rgba(0, 0, 0, 0.1); font-family:Arial, Helvetica, sans-serif; ">
                <h2 align="left" style="font-family:verdana;" >Login to your Health Plus Pharmacy account </h2>
                <br>
                <form style="font-family:verdana;" method="post">
                    <div class="form-group">
                        <lable>NIC Number : </lable>
                        <input type="text" name="id" class="form-control" value = "<?php  echo $id; ?>"/>
                        <?php echo $msg12; ?>
                        <?php echo $msg14; ?>
                        <?php echo $msg16; ?>
                    </div><br>
                    <div class="form-group">
                        <lable>Password: </lable>
                        <input type="password" name="password" class="form-control" />
                        <?php echo $msg13; ?>
                        <?php echo $msg15; ?>
                    </div><br>
                    <div class="form-group">
                        <input type="checkbox" name="check" /> &nbsp; Keep Me Logged In
                    </div><br>
                    <div class="form-group">
                        <center> <input type="submit" name="submit" value="Login" class="btn btn-success" />
                        </center>
                    </div>
                </form>
                <center><a href = "fogot.php">Fogot Password?</a></center>
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
