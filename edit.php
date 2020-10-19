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
$msg25 = "";
$msg26 = "";
$msg27 = "";

$id ="";
$date = "";
$password = "";
$fname = "";
$lname = "";
$ad1 = "";
$ad2 = "";
$ad3 = "";
$bank_no = "";
$mail = "";
$dob = "";

if(isset($_POST['submit']))
{

    $id = $_POST['NIC'];
    $password = $_POST['pass'];

    if(empty($id))
    {
        $msg17 = "<div style = 'color: red;'>Cannot keep NIC field empty</div>";
    }

    else if(empty($password))
    {
        $msg19 = "<div style = 'color: red;'>What do you want us to change?</div>";
    }

    else if(strlen($password)<=5)
    {
        $msg21 = "<div style = 'color: red;'>Must Contain at least 5 charaters</div>";
    }

    else if(nic_exists($id,$connection))
    {
        $msg25 = "<div style = 'color: green; font-weight:bold;'>Check the table on your right</div>";
        $msg26 = "<div style = 'color: green; font-weight:bold;'>Change your Details here</div>";

        $resultFNAME = mysqli_query($connection,"SELECT fname FROM customer WHERE NIC ='$id'");
        $retriveFNAME = mysqli_fetch_array($resultFNAME);
        $fname = $retriveFNAME['fname'];

        $resultLNAME = mysqli_query($connection,"SELECT lname FROM customer WHERE NIC ='$id'");
        $retriveLNAME = mysqli_fetch_array($resultLNAME);
        $lname = $retriveLNAME['lname'];


        $resultAD1 = mysqli_query($connection,"SELECT address1 FROM customer WHERE NIC ='$id'");
        $retriveAD1 = mysqli_fetch_array($resultAD1);
        $ad1 = $retriveAD1['address1'];

        $resultAD2 = mysqli_query($connection,"SELECT address2 FROM customer WHERE NIC ='$id'");
        $retriveAD2 = mysqli_fetch_array($resultAD2);
        $ad2 = $retriveAD2['address2'];

        $resultAD3 = mysqli_query($connection,"SELECT address3 FROM customer WHERE NIC ='$id'");
        $retriveAD3 = mysqli_fetch_array($resultAD3);
        $ad3 = $retriveAD3['address3'];

        $resultDOB = mysqli_query($connection,"SELECT dob FROM customer WHERE NIC ='$id'");
        $retriveDOB = mysqli_fetch_array($resultDOB);
        $dob = $retriveDOB['dob'];

        $resultEMAIL = mysqli_query($connection,"SELECT mail FROM customer WHERE NIC ='$id'");
        $retriveEMAIL = mysqli_fetch_array($resultEMAIL);
        $mail = $retriveEMAIL['mail'];

    }
}
?>


?>


<title>Change User Details </title>
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
    style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./img/003.jpg) no-repeat center center fixed; background-size: cover; height:917px;">
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
            <div class="jumbotron jumbotron-fluid"
                style="margin-top : 20px; padding:15px; border-radius:15px; padding-bottom:10px; background:linear-gradient(rgba(0, 0, 0, 0.1); font-family:Arial, Helvetica, sans-serif;">
                <?php echo $msg25; ?>
                <h2>First, <br>Please Enter Login Credentials for securty purpose.</h2>

                <form method="post">
                    <div class="form-group">
                        <lable> NIC Number : </lable>
                        <input type="text" name="NIC" placeholder="9XXXXXXXV" class="form-control"
                            value="<?php  echo $id; ?>">
                        <?php echo $msg17; ?>
                        <?php echo $msg22; ?>
                    </div>

                    <div class="form-group">
                        <lable> Password : </lable>
                        <input type="password" name="pass" class="form-control" placeholder="Enter new password"
                            value="<?php  echo $password; ?>">
                        <?php echo $msg19; ?>
                        <?php echo $msg21; ?>
                    </div>
                    <center><br><input type="submit" value="Submit" name="submit" class="btn btn-success" /></center>
                    <br>
                    <?php
if(isset($_POST['submit']))
{

    $id = $_POST['NIC'];
    $password = $_POST['pass'];

    if(empty($id))
    {
        $msg17 = "<div style = 'color: red;'>Cannot keep NIC field empty</div>";
    }

    else if(empty($password))
    {
        $msg19 = "<div style = 'color: red;'>What do you want us to change?</div>";
    }

    else if(strlen($password)<=5)
    {
        $msg21 = "<div style = 'color: red;'>Must Contain at least 5 charaters</div>";
    }

    else if(nic_exists($id,$connection))
    {   
        
        $msg25 = "<div style = 'color: red;'>Check the table on your right</div>";

        $resultID = mysqli_query($connection,"SELECT NIC FROM customer WHERE NIC ='$id'");
        $retriveID = mysqli_fetch_array($resultID);
        $id = $retriveID['NIC'];

        $resultFNAME = mysqli_query($connection,"SELECT fname FROM customer WHERE NIC ='$id'");
        $retriveFNAME = mysqli_fetch_array($resultFNAME);
        $fname = $retriveFNAME['fname'];

        $resultLNAME = mysqli_query($connection,"SELECT lname FROM customer WHERE NIC ='$id'");
        $retriveLNAME = mysqli_fetch_array($resultLNAME);
        $lname = $retriveLNAME['lname'];

        
        $resultAD1 = mysqli_query($connection,"SELECT address1 FROM customer WHERE NIC ='$id'");
        $retriveAD1 = mysqli_fetch_array($resultAD1);
        $ad1 = $retriveAD1['address1'];

        $resultAD2 = mysqli_query($connection,"SELECT address2 FROM customer WHERE NIC ='$id'");
        $retriveAD2 = mysqli_fetch_array($resultAD2);
        $ad2 = $retriveAD2['address2'];

        $resultAD3 = mysqli_query($connection,"SELECT address3 FROM customer WHERE NIC ='$id'");
        $retriveAD3 = mysqli_fetch_array($resultAD3);
        $ad3 = $retriveAD3['address3'];

        $resultDOB = mysqli_query($connection,"SELECT dob FROM customer WHERE NIC ='$id'");
        $retriveDOB = mysqli_fetch_array($resultDOB);
        $dob = $retriveDOB['dob'];

    }
    
}
?>
                </form>
            </div>
        </div>
        <div class="login-form col-md-6 " style="margin-left:150px;">
            <div class="jumbotron jumbotron-fluid"
                style="margin-top : 20px; padding:15px; padding-bottom:10px; width:1000px; border-radius:15px; background:linear-gradient(rgba(0, 0, 0, 0.1); font-family:Arial, Helvetica, sans-serif;">
                <?php echo $msg26; ?><br>

                <h2>Now You can Change your Details.</h2>
                <?php echo $msg24; ?><br>
                <?php echo $msg27; ?><br>
                <form method="post">
                    <div class="form-group">
                        <lable> NIC Number : </lable>
                        <input type="text" name="NIC" class="form-control" value="<?php  echo $id; ?>">
                    </div>
                    <div class="form-group">
                        <lable> First Name : </lable>
                        <input type="text" name="fname" class="form-control" value="<?php  echo $fname; ?>">
                    </div>
                    <div class="form-group">
                        <lable> Last Name : </lable>
                        <input type="text" name="lname" class="form-control" value="<?php  echo $lname; ?>">
                    </div>
                    
                    <div class="form-group">
                        <lable> Adddress : </lable>
                        <input type="text" name="ad1" class="form-control" value="<?php  echo $ad1; ?>">
                        <input type="text" name="ad2" class="form-control" value="<?php  echo $ad2; ?>">
                        <input type="text" name="ad3" class="form-control" value="<?php  echo $ad3; ?>">
                    </div>

                    <div class="form-group">
                        <lable> E-mail : </lable>
                        <input type="text" name="mail" class="form-control" value="<?php  echo $mail; ?>">
                    </div>

                    <div class="form-group">
                        <lable> Date of birth : </lable>
                        <input type="date" name="dob" class="form-control" value="<?php  echo $dob; ?>">
                    </div>
                    <!--<center><br><input type="submit" value="Done" name="done" class="btn btn-success" /></center>-->
                    <center><button type="button" class="btn btn-primary" data-toggle="modal" name ="done" data-target="#exampleModalLong">
                        Done
                    </button></center><br>
                    <center><a href = "profile.php">I dont want to change anything</a></center>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLongTitle">Everything Is Done</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <?php echo ucfirst($fname). " ".ucfirst($lname). " " ?>your changed data will be saved to our Database<br>Please Log in to proceed..
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name = "done" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php
                    if(isset($_POST ["done"]))
                    {
            
                    
                    $id_0 = $_POST["NIC"];   
                    $fname_0 = $_POST["fname"];
                    $lname_0 = $_POST["lname"];
                    $ad1_0 = $_POST["ad1"];
                    $ad2_0 = $_POST["ad2"];
                    $ad3_0 = $_POST["ad3"];
                    $mail_0 = $_POST["mail"];
                    $date_0 = $_POST["dob"];
                    
            
                    mysqli_query($connection, "UPDATE customer SET fname = '$fname_0' WHERE NIC = '$id_0'");
                    mysqli_query($connection, "UPDATE customer SET lname = '$lname_0' WHERE NIC = '$id_0'");
                    mysqli_query($connection, "UPDATE customer SET address1 = '$ad1_0' WHERE NIC = '$id_0'");
                    mysqli_query($connection, "UPDATE customer SET address2 = '$ad2_0' WHERE NIC = '$id_0'");
                    mysqli_query($connection, "UPDATE customer SET address3 = '$ad3_0' WHERE NIC = '$id_0'");
                    mysqli_query($connection, "UPDATE customer SET email = '$mail_0' WHERE NIC = '$id_0'");
                    mysqli_query($connection, "UPDATE customer SET dob = '$date_0' WHERE NIC = '$id_0'");
                    ?>
                        <script type="text/javascript">
                         window.location = "login.php";
                         </script> 
                         <?php
                    }
                    ?>

                         
                    
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

edit.php
edit.php දර්ශනය කරමින්.