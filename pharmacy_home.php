<!DOCTYPE html>
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
</head>

<body>
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
    <div id="home">
        <div class="landing-text">
            <h1 id="welcome">Welcome to the Future of Pharmacology</h1>
            <br>
            <h3 id="welcome">Making sure you feel as good as you look</h3>
            <h3 id="welcome">Bringing the medicine at your door</h3>
            <br>
            <a href="sign_up.php" class="btn btn-default btn-lg" id="pad">Get Started</a>
        </div>
    </div>
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img id="pharmacy-shutterstock" src="./img/life.jpg">

                </div>
                <div class="col-sm-6 text-center"></div>
                <h1>All about your health</h1>
                <p class="lead">Pharmacy is the clinical health science that links medical science with chemistry and it is charged with the discovery, production, disposal, safe and effective use, and control of medications and drugs. The practice of pharmacy requires excellent knowledge of drugs, their mechanism of action, side effects, interactions, mobility and toxicity. At the same time, it requires knowledge of treatment and understanding of the pathological process. Some specialties of pharmacists, such as that of clinical pharmacists, require other skills, e.g. knowledge about the acquisition and evaluation of physical and laboratory data.
                The scope of pharmacy practice includes more traditional roles such as compounding and dispensing of medications, and it also includes more modern services related to health care, including clinical services, reviewing medications for safety and efficacy, and providing drug information. Pharmacists, therefore, are the experts on drug therapy and are the primary health professionals who optimize the use of medication for the benefit of the patients.
                An establishment in which pharmacy (in the first sense) is practiced is called a pharmacy (this term is more common in the United States) or a chemist's (which is more common in Great Britain, though pharmacy is also used).</p>

            </div>
        </div>
    </div>
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!--Boostrap has 12 colums and dividing them can make thoese colums for screen sizes-->
                    <h3>What can we do ?</h3>
                    <p>Pharmacy technicians support the work of pharmacists and other health professionals by performing a variety of pharmacy-related functions, including dispensing prescription drugs and other medical devices to patients and instructing on their use.
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!--Boostrap has 12 colums and dividing them can make thoese colums for screen sizes-->
                    <img src="./img/pills4.jpg" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!--Boostrap has 12 colums and dividing them can make thoese colums for screen sizes-->
                    <h3>Who are we ?</h3>
                    <p>We are healthcare professionals with specialized education and training who perform various roles to ensure optimal health outcomes for their patients through the quality use of medicines. Pharmacists may also be small-business proprietors, owning the pharmacy in which they practice. Since pharmacists know about the mode of action of a particular drug, and its metabolism and physiological effects on the human body in great detail, they play an important role in optimization of drug treatment for an individual. </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!--Boostrap has 12 colums and dividing them can make thoese colums for screen sizes-->
                    <img src="./img/pills5.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div id="fixed">
    </div>
    <section class="stat" id="stats">
        <div class="content-box">
            <br>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="stat-items">
                            <i class="fas fa-user" id="icon_col"></i>
                            <h2><span class="counter text-center">8500</span><span>+</span>
                            </h2>
                            <p>Reg-Users</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="stat-items">
                            <i class="fas fa-file-invoice"></i>
                            <h2><span class="counter text-center">12500</span><span>+</span>
                            </h2>
                            <p>Deliveries</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-items">
                            <i class="fas fa-globe-asia" id="icon_col"></i>
                            <h2><span class="counter text-center">7000</span><span>+</span>
                            </h2>
                            <p>International</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-items">
                            <i class="fas fa-hands-helping" id="icon_col"></i>
                            <h2><span class="counter text-center">800</span><span>+</span>
                            </h2>
                            <p>Help</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="jquery.waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $('.counter').counterUp({
                delay: 100,
                time: 10000,
            });
        });
    </script>

    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Here is a cool thing about our pharmacy system...</h4>
                    <p>Pharmacology is the study of the action of drugs in the widest possible sense, encompassing many types of chemicals as well as a medicines that affect the functioning of the body. Pharmacologists study how drugs work in the body and use this information explore how the body itself functions</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem modi nulla quos blanditiis id
                        corrupti reiciendis nobis neque autem illo nostrum ipsam molestiae, eius voluptate, cumque
                        mollitia molestias voluptatum laudantium cum quod esse magni, rerum nisi hic? Beatae, dolores
                        dolorum hic ipsa culpa quisquam voluptatem accusamus fuga adipisci, qui non?</p>
                </div>
                    <div id = "slider">
                        <figure>
                        <img src="./img/6.jpg" >
                        <img src="./img/2.jpg" >
                        <img src="./img/3.jpg" >
                        <img src="./img/7.jpg" >
                        </figure>

                    </div>

                <div class="col-sm-6"></div>
                <img  class="img-responsive">
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