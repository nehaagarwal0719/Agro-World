<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css" />
    <title>Agriculture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<Style>
    .footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 15vh;
  background-color: black;
  text-align: center;
        margin-bottom: -15vh;
}
.container.foot{
  margin-top: 1.5vh;
  color: #fff;
  width: 100%;
}
    #copy{
        float: left;
        margin-left: 2vw;
        margin-top: 2vh;
    }

.fa-twitter {
    color: #4099FF;
}
.fa-facebook {
    color: #3B5998;
}

.fa-youtube-play {
    color: #e52d27;
}

.fa-rss {
    color: #FF6600;
}

.fa-vine {
    color: #00a478;
}

.fa-flickr {
    color: #ff0084;
}

.fa-twitch {
    color: #6441A5;
}

.fa-linkedin {
    color: #007bb6;
}

.fa {
    transition: 1s;
    -webkit-transition: 1s;
}
    #icons{
       margin-right: 2vw;
        float: right;
        vertical-align: middle;
    }

.fa:hover{
    opacity: 1;
    transition: 1s;
    -webkit-transition: 1s;}
    .navbar.navbar-default {
        margin-bottom: 0px;
    }
    body {
        background-color: #b38f00;
        margin-bottom: 15vh;
    }
    .container{
        margin-top: 7vh;
    }
    .row{
        margin-bottom: 2vh;
    }
    header {
        background: #563d7c;
        padding: 2em 1em;
        color: #fff;
        margin-bottom: 2em;
        h1 {
            font-weight: 200;
        }
    }
    #para{
        text-align: center;
        font-size: 3vh;
        text-decoration: none;
        color:black;
        margin-bottom: -1vh;
    }
    #para:hover{
        text-decoration: none;
    }
    .minus {
        margin-top: -6vh;
        text-align: center;
    }
    .row img{
        width: 25vw;
        margin-top: 1.5vh;
        border-radius:14px;
    }
    .thumbnail{
        width:30vw;
        height:auto;
        max-width: 40vw;
        opacity:0.7;
        border-radius: 7px;
    }
     .thumbnail:hover{
        width:30vw;
        height:auto;
        max-width: 40vw;
        opacity:1;
         box-shadow: 0vh 1vh 0vw 0.5vw;
         border: black 4px;
         box-shadow: black;
    }
    h3{
        margin-bottom: 8em;
        font-size: 5rem;
    }
</Style>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><b>Agro World</b></a>
             </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="SignOut/index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                <li><a href=" ContactUs/index.php "><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
                <li><?php include "gt.php";?></li>
            </ul>
        </div>
    </nav>

    <!--carousel-->
    <div class="container-fluid">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="margin-top:-20px;">
                    <div class="item active">
                        <img src="Assets/images/rrr.jpg" alt="Image cc" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>The new Way to Farming!</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="Assets/images/dd.jpg" alt="dd" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>We implement new technologies for agricultural growth.</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="Assets/images/gg.jpg" alt="gg" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>using innovative equipments to reduce time and energy in farming.</h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <!--Left and right controls
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
            </div>
        </div>
    </div>

  <div class="container">
  <div class="row" style="margin-left:100px">
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Weather/index.php">
          <img src="Assets/images/sky.jpg" alt="Lights">
          <div class="caption">
            <p id="para">Weather Conditions</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Crops/index.php">
          <img src="Assets/images/buycrops.jpg" alt="Fjords">
          <div class="caption">
            <p id ="para">Current Market Price</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row" style="margin-left:100px">
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Mach&Equip/index.php">
          <img src="Assets/images/ch.jpg" alt="machines" >
          <div class="caption">
            <p id="para">Machines & Equipments</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Transport/index.php">
          <img src="Assets/images/mt.jpg" alt="transport" >
          <div class="caption">
            <p id="para">Transportation</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row" style="margin-left:100px">
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="#">
          <img src="Assets/images/ferti.jpg" alt="Lights">
          <div class="caption">
            <p id="para">Fertilizer & Pesticides</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="#">
          <img src="Assets/images/seeds.jpg" alt="Fjords">
          <div class="caption">
            <p id ="para">Seeds</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row" style="margin-left:100px;margin-bottom:40px;">
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="#">
          <img src="Assets/images/wtank.jpg" alt="Lights">
          <div class="caption">
            <p id="para">Water Availability</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="#">
          <img src="Assets/images/ontrain.jpg" alt="Fjords">
          <div class="caption">
            <p id ="para">Training Facilities</p>
          </div>
        </a>
      </div>
    </div>
  </div>
    </div>
    <div class="footer">
      <div class="container foot">
          <p id="copy">Copyright &copy; 2013-2018</p>
          <span id="icons">
              <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
            </span>
      </div>
    </div>
</body>
</html>

