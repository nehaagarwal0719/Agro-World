<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .box {
        /*  margin: 2vh 3vw;*/
        width: 250px;
        height: 250px;
    }

    .left {
        float: left;
    }

    .right {
        float: right;
        text-align: right;
    }

    .container {
        margin: 2vh 3vw;
    }
    .e {
        border: 2px solid black;

    }
    .card{
        margin: 2vh 2vw;
    }
    .card-title{
      text-align: center;
        vertical-align: middle;
        color: black;
        font-weight:500;
    }
    .r
    {
        margin-top: -6vh;
    }

     body {
        background-image: url("../Assets/images/crops.jpg");
        background-repeat: no-repeat;
        background-size: cover;
         color:white;
    }
</style>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">

        <ul class="nav navbar-nav navbar-right">
             <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="../SignOut/index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                <li><a href=" ../ContactUs/index.php "><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
                <li><?php include "../gt.php";?></li>
        </ul>
    </div>
</nav>
    <!--<div class="container">
        <div class="row">
            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="../Assets/images/r.jpg" alt="Card image" <style="width:100%">
                <div class="card-img-overlay">
                    <h4 class="card-title">RICE</h4>
                </div>
            </div>
            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="../Assets/images/w.jpg" alt="Card image" style="width:111%">
                <div class="card-img-overlay">
                    <h4 class="card-title">WHEAT</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="../Assets/images/p.jpg" alt="Card image" style="width:107%">
                <div class="card-img-overlay">
                    <h4 class="card-title">POTATO</h4>
                </div>
            </div>
            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="../Assets/images/b.jpg" alt="Card image" style="width:110%">
                <div class="card-img-overlay">
                    <h4 class="card-title">BLACK GRAM</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="../Assets/images/c.jpg" alt="Card image" style="width:130%">
                <div class="card-img-overlay">
                    <h4 class="card-title">CABBAGE</h4>
                </div>
            </div>

        <div class="card img-fluid" style="width:510px">
            <img class="card-img-top" src="../Assets/images/br.jpg" alt="Card image" style="width:100% height:80%">
            <div class="card-img-overlay">
                <h4 class="card-title">BRINJAL</h4>
            </div>
        </div>
    </div>
    </div>-->
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="col-md-4 col-xs-12">
                <div class="card text-center">

                    <a href="choose_option.php"><div class="card-footer e">
                        <img src="../Assets/images/r.jpg">
                    </div></a>
                     <div class="card-block">
                        <h4 class="card-title r">RICE</h4>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
                 </div>
                <div class="col-md-4 col-xs-12">
                <div class="card text-center">

                     <a href="choose_option1.php"><div class="card-footer e">
                         <img src="../Assets/images/w.jpg">
                         </div></a>
                         <div class="card-block">
                        <h4 class="card-title r">WHEAT</h4>
                         <p class="card-text">

                        </p>
                    </div>
                </div>
                </div>
                <div class="col-md-4 col-xs-12">
                <div class="card text-center">

                    <div class="card-footer e">
                       <img src="../Assets/images/pp.jpg">
                    </div>
                    <div class="card-block">
                        <h4 class="card-title r">POTATOES</h4>
                        <p class="card-text">
                        </p>
                    </div>

                </div>
                </div>
            </div>
        </div>
             <div class="card-deck mt-20">
                 <div class="row">
                     <div class="col-md-4 col-xs-12">
                  <div class="card text-center">
                      <div class="card-footer e">
                            <img src="../Assets/images/bbb.jpg">
                     </div>
                  <div class="card-block">
                      <h4 class="card-title r">BLACK GRAM</h4>
                            <p class="card-text">
                        </p>
                      </div>
                  </div>
                     </div>
                 <div class="col-md-4 col-xs-12">
        <div class="card text-center">

            <div class="card-footer e">
                <img src="../Assets/images/cab.jpg">
            </div>
             <div class="card-block">
                <h4 class="card-title r">CABBAGE</h4>
                <p class="card-text">

                </p>
            </div>
             </div>
                     </div>
                     <div class="col-md-4 col-xs-12">
        <div class="card text-center">

            <div class="card-footer e">
                 <img src="../Assets/images/br.jpg">
            </div>
             <div class="card-block">
                <h4 class="card-title r">BRINJAL</h4>
                <p class="card-text">
                </p>
            </div>
        </div>

    </div>
</div>
</body>

</html>


