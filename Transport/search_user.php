<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
    <title>Current Market Price</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
    <style>
 body{
            background-image: url("../Assets/images/trp.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .well{
            margin-left: 3vw;
            width:30vw;
            height:auto;
            text-align: center;
           box-shadow: 0px 5px 0px 3px;
            opacity:0.7;
           font-weight: 1000;
            border: bold 2px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 2vh;
        }
        .well:hover{
         margin-left: 3vw;
            width:30vw;
            height:auto;
            text-align: center;
           box-shadow: 0px 5px 0px 3px;
            opacity:1;
           font-weight: 1000;
            border: bold 5px;
            text-decoration: none;
            border-radius: 25px;
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

    <?php
        $con = mysqli_connect("localhost","root","","agriculture");
        $query1 = mysqli_query($con," SELECT * FROM t_user");

                                            while($row=mysqli_fetch_array($query1))
                                             {
                                      ?>
        <div class="well">
            <?php echo " Name : "."$row[name] <br>";?>
            <?php echo " Weight : "." $row[wt] kg<br>";?>
            <?php echo " Distance : "." $row[dist] km <br>";?>
            <?php echo " Time : "." $row[price] days<br>";?>
            <?php echo " Price:Rs "." $row[time] <br>";?>
            <?php echo " Phone No: "." $row[phone_no] <br>";?>
        </div>
        <?php
                 }
        ?>

</body>

</html>
