<?php
include ("config.php");
include ("function.php");
session_start();

if(logged_in())
{
    header("location:login.php");
}

if(isset($_COOKIE['name']))
{

$id = $_COOKIE['name'];

$result =mysqli_query($connection, "SELECT  fname, lname, NIC from customer WHERE NIC = '$id'");
$retrive =mysqli_fetch_array($result);
//print_r ($retrive);

$firstname = $retrive['fname'];
$lastname =  $retrive['lname'];
$nic = $retrive['NIC'];
?>
<!-- start of LiveChat code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12203178;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12203178/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->


<title>Profile Page</title>
<script async type="text/javascript" src="//userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/3be9ea6006b814e59b095c542cbd5152709ce1b4e85b8f72637d31ec3d47cf1d.js"></script>
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
    style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./img/001.jpg) no-repeat center center fixed;  background-size: cover;">
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



    <div class="container-fluid" style="margin-top:20px;">
        <div class="col-md-2"
            style="margin-top:70px; background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)); border-radius:5px; padding-top:8px; padding-bottom:8px; margin-bottom:20px; margin-left:-5px; float:left; width:auto;">
            <h3 align="left" style="color:white; font-family:verdana;">Welcome,<br> <?php echo ucfirst($firstname). " ".ucfirst($lastname) ?>
            </h3>
            <h4 align="left" style="color:white; font-family:verdana;"><?php echo ucfirst($nic)?></h4>
            <a href="logout.php"><button class="btn btn-primary btn-sm"  style = "font-family:verdana;">Log Out</button></a>
            <a href = "edit.php"><button class="btn btn-primary btn-sm"  style="float:right; font-family:verdana; margin-top:0px;">Edit Profile</button></a>
        </div>
    </div>
    <div class="container-fluid" style="margin-top:30px;">
        <div class="col-md-2"
            style="margin-top:70px; background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)); border-radius:5px; padding-top:8px; padding-bottom:20px; margin-bottom:20px; margin-left:-5px; float:left; width:auto;">
            <h2 align="left" style="color:white; font-family:verdana;">Lets Check Our Services,<br>
            </h2><br>
            <a href = "" ><h4 align="left" style="color:white; font-family:verdana;">Check out our store</h4></a><br>
            <a href = ""><h4 align="left" style="color:white; font-family:verdana;">Contact our Doctors</h4></a><br>
            <a href = ""><h4 align="left" style="color:white; font-family:verdana;">Check out your cart</h4></a><br>
            <a href = ""><h4 align="left" style="color:white; font-family:verdana;">Drugs without prescriptions</h4></a><br>
        </div>
    </div>
    <div
            style="margin-top:-520px; float:right; background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)); border-radius:5px; padding-top:8px; padding-bottom:20px; margin-bottom:20px; margin-left:500px;">
    <section >
        <div class="container py-md-5">
            <div class="feature-grids row mt-3">
                <div class="col-lg-6 ab-content-img">
                </div>
                <div class="col-lg-6 ab-content-inf pl-lg-1" style = "color:white; margin-right:50px; font-weight:bold;">
                    <h3>We do what we have to do to protect you..</h3>
                    <p>

Let him go, Biff, you're drunk. C'mon, open up, let me out of here, Yo. You're gonna be in the car with her. Lorraine, have you ever, uh, been in a situation where you know you had to act a certain way but when you got there, you didn't know if you could go through with it? I don't wanna know your name. I don't wanna know anything anything about you.

Thank god I found you. Listen, can you meet me at Twin Pines Mall tonight at 1:15? I've made a major breakthrough, I'll need your assistance. Sam, here's the young man you hit with your car out there. He's alright, thank god. Good, you could start by sweeping the floor. Why is she gonna get angry with you? George.
</p>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    </div>

    
</body>

</html>
<?php
}
else{
    $id = $_SESSION['id'];

$result =mysqli_query($connection, "SELECT  fname, lname, NIC from customer WHERE NIC = '$id'");
$retrive =mysqli_fetch_array($result);
//print_r ($retrive);

$firstname = $retrive['fname'];
$lastname =  $retrive['lname'];
$nic = $retrive['NIC'];
?>


<title>Profile Page</title>
</head>

<body
    style="background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(./img/5ce0d483d95ea.png) no-repeat center center fixed;  background-size: cover;">
   
    <!-- Start of LiveChat (www.livechatinc.com) code -->


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
                <a class="navbar-brand" href="#"><img id="logo" src="./img/img.png"> </a>
                <!--Logo for nav bar-->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="#">Home</a> </li>
                    <li><a href="#">About</a> </li>
                    <li><a href="#">About</a> </li>
                    <li><a href="#">About</a> </li>
                    <li><a href="#">About</a> </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid" style="margin-top:20px;">
        <div class="col-md-2"
            style="margin-top:70px; box-shadow: 5px 5px 5px; background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)); border-radius:5px; padding-top:8px; padding-bottom:8px; margin-bottom:20px; margin-left:-5px; float:left; width:auto;">
            <h3 align="left" style="color:white; font-family:verdana;">Welcome,<br> <?php echo ucfirst($firstname). " ".ucfirst($lastname) ?>
            </h3>
            <h4 align="left" style="color:white; font-family:verdana;"><?php echo ucfirst($nic)?></h4>
            <a href="logout.php"><button class="btn btn-primary btn-sm"  style = "font-family:verdana;">Log Out</button></a>
            <button class="btn btn-primary btn-sm"  style="float:right; font-family:verdana; margin-top:0px;">Edit Profile</button>
        </div>
        
    </div>
</div>

<?php
}
?>
    <footer class="container-fluid text-center" style="margin-top:600px;">
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