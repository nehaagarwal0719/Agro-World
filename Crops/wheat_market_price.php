<html lang="en">

<head>
    <title>Current Market Price</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <style>
        body{
            background-image: url("../Assets/images/wheatwall.jpg");
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
         select:focus,
    option:focus {
        outline: none;
    }
input:focus,
    text:focus {
        outline: none;
    }

    .crop_name {
        border-radius: 25px;
        height: 40px;
        width: 18vw;
        border: 2px solid #dcdbdb;
        padding-left: 35px;
        padding-right: 35px;
        margin-top: 40px;
        text-align: center;
         box-shadow: grey 0px 2px 0px 1px;
        margin-left:100px;
        margin-right: 100px;
    }

    .form {
         box-shadow: grey 0px 2px 0px 1px;
        border-radius: 25px;
        height: 2.5em;
        width: 18vw;
        border: 2px solid #dcdbdb;
        padding-left: 35px;
        padding-right: 35px;
        text-align: center;
        font-size: 2.5vh;
        margin-top: 1vh;
        margin-right: 100px;
        margin-left:100px;
    }

    .sub1 {
         box-shadow: #331a00 0px 2px 0px 1px;
        width:18vw;
        height:auto;
        margin-top: 1vh;
        border-radius: 25px;
        background-color:  #331a00;
        color:white;
        margin-left:100px;
    }
    .sub{
        margin-top: 1vh;
        width:18vw;
        box-shadow: #331a00 0px 2px 0px 1px;
        border-radius: 25px;
        background-color:  #331a00;
        color:white;
    }

    .row{
        text-align: center;
        vertical-align: middle;

    }
    .options{

    }
        .submit_center
        {
            margin-left:200px;
             background-color:  #331a00;
        color:white;
        }
        .submit_center1
        {
            margin-left:350px;
            margin-top: 100px;
             background-color:  #331a00;
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
<div class="col-md-6">
    <?php
        $con = mysqli_connect("localhost","root","","agriculture");
        $query1 = mysqli_query($con," SELECT * FROM wheat_mp ");

                                            while($row=mysqli_fetch_array($query1))
                                             {
    ?>

        <div class="well">
            <?php echo " District name : "." $row[dist_name]<br>";?>
            <?php echo " Mandi name : "." $row[mandi_name]<br>";?>
            <?php echo " Market price : "." $row[mp]<br>";?>
        </div>

        <?php
             }
        ?>
    </div>
    <div class="col-md-6">
     <?php
// define variables and set to empty valuesS
$quanErr = $pricErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["quantity"]))
            {
                $nameErr = "quantity is required";
            }
        else
            {
                $name = test_input($_POST["quantity"]);
                // check if name only contains letters and whitespace.
                if (!preg_match("/^[0-9 ]*$/",$name))
                {
                $nameErr = "Only digits allowed";
                }
            }
     }
?>

    <form method="POST" action="insert_sell_crop.php">
            <select name="crop_name" style="border-radius:25px; height:40px ;border: 2px solid #dcdbdb;padding-left:35px;padding-right:35px;margin-top:40px;margin-left:100px;" placeholder="select crop"><br>
                             <option value="1" style="opacity:0.7;">Select your crop</option>
                             <option value="Wheat">Wheat</option>
                             <option value="Rice">Rice</option>
                             <option value="Potato">Potato</option>
                             <option value="Brinjal">Brinjal</option>
                             <option value="Cabbage">Cabbage</option>
                             <option value="Black gram">Black gram</option>
            </select><br><br>
        <div class="form-group">
                                <label for="quantity"></label>
                                <input type="text" class="form" name="quantity" placeholder="Quantity in kg">
        </div><br>
        <div class="form-group">
                                <label for="price"></label>
                                <input type="text" class="form" name="price" placeholder="price per kg">
        </div><br>

    <div >
        <button type="sub" class="btn submit_center " name="sub">Submit</button>
    </div>
         </form>

    <div>
        <form action="search_wheat_sell.php">
        <button type="sub" class="btn  submit_center1" name="sub1">Search for buyers</button>
        </form>
    </div>
    </div>
</body>

</html>
