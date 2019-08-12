<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../AboutUs/index.php">About Us</a></li>
                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="../ContactUs/index.php ">Contact Us</a></li>
            </ul>
        </div>
    </nav>

</head>
<style>
    body {
        background-repeat: no-repeat;
        background-size: 1280px 700px;
        -webkit-appearance: none;
        background-image: url("../Assets/images/tb.jpg");
        background-size: cover;
    }

    .error {
        color: #FF0000;
    }

    .form {
        width: 400px;
        height: 35px;
        border-radius: 20px;
        border: 2px solid #dcdbdb;
        padding: 20px;

    }

    textarea:focus,
    input:focus {
        outline: none;
    }

    /* ::-webkit-input-placeholder {
        opacity: 0.7;
    }*/

    .submit_center {
        margin-top: 50px;
        margin-left:150px;
    }

    select:focus,
    option:focus {
        outline: none;
    }

    .col-md-12 {
        text-align: center;
    }

    .col-md-6 {
        text-align: center;
    }

    .btn-success {
        margin-bottom: 7vh;
    }

</style>

<body>
    <?php
// define variables and set to empty values
$nameErr = $name1Err ="";
$Fname = $Lname ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["Fname"]))
            {
                $nameErr = "Name is required";
            }
        else
            {
                $name = test_input($_POST["Fname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                $nameErr = "Only letters and white space allowed";
                }
            }
     }
  if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
           if (empty($_POST["Lname"]))
               {
                    $name1Err = "Name is required";
                }
            else
              {
                    $name1 = test_input($_POST["Lname"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name1))
                    {
                    $name1Err = "Only letters and white space allowed";
                    }
             }
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <div class="container">
            <div class="row">
                <form method="post" action="insert_t_user.php">
                    <div style="margin-top:10vh">
                        <div class="form-group">
                            <p><span class="error">* required field.</span></p>
                            <label for="name"></label>
                            <input type="text" class="form" name="nmae" placeholder="Name of Machine"><span class="error">* <?php echo $nameErr;?></span>
                        </div><br></div>

                    <div class="form-group">
                                <label for="duration"></label>
                                <input type="text" class="form" name="duration" placeholder="Time in days">
                            </div><br>
                    <div class="form-group">
                                <label for="price"></label>
                                <input type="text" class="form" name="price" placeholder="Price">
                            </div><br>

                         <button type="sub" class="btn btn-danger submit_center" name="sub">Submit</button>

                </form>
                <a href="search_provider.php"><button type="sub" class="btn btn-danger " name="sub1" style="margin-top:50px;margin-left:250px;">Search for transport providers</button></a>
            </div>
</body>

</html>
