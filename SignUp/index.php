<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIGN UP</title>
   <link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
           <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li class="active"><a href="SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="../SignOut/index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                <li><a href=" ../ContactUs/index.php "><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
                <li><?php include "../gt.php";?></li>
        </ul>

    </div>
</nav>

</head>
    <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<style>
    body {
        background-repeat: no-repeat;
        background-size: 1280px 700px;
        -webkit-appearance: none;
        background-image: url("../Assets/images/tree.jpeg");
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
        margin-left: 170px;
    }
    select:focus,
    option:focus {
        outline: none;
    }
    .col-md-12{
        text-align: center;
    }
    .col-md-6{text-align: center;
    }
    .btn-success{
        margin-bottom: 7vh;
    }
    input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

/* Style the submit button */


/* Style the container for inputs */


/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>

<body>
    <?php
// define variables and set to empty values
$nameErr = $name1Err=$phoneErr="";
$f_name = $l_name =$phone_no="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["f_name"]))
            {
                $nameErr = "Name is required";
            }
        else
            {
                $name = test_input($_POST["f_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                $nameErr = "Only letters and white space allowed";
                }
            }
     }
  if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
           if (empty($_POST["l_name"]))
               {
                    $name1Err = "Name is required";
                }
            else
              {
                    $name1 = test_input($_POST["l_name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name1))
                    {
                    $name1Err = "Only letters and white space allowed";
                    }
             }
  }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
           if (empty($_POST["phone_no"]))
               {
                    $phoneErr = "Phone No is required";
                }
            else
              {
                    $name1 = test_input($_POST["phone_no"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[0-9]*$/",$name1))
                    {
                    $phoneErr = "No letters and white space allowed";
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
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div style="margin-top:10vh">
                    <div class="row">
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="f_name"></label>
                                <input type="text" class="form" name="f_name" placeholder="First Name"><span class="error">* <?php echo $nameErr;?></span>
                            </div><br></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 "></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="l_name "></label>
                                <input type="text" class="form" name="l_name" placeholder="Last Name"><span class="error">* <?php echo $name1Err;?></span>
                            </div><br></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone_no"></label>
                                <input type="text" class="form" name="phone_no" placeholder="Phone No"><span class="error">* <?php echo $phoneErr;?></span>
                            </div></div>
                    </div>

                    <label for="password"></label>
                    <input type="password" placeholder="Password" id="password" name="password"  style="border-radius:25px;height:45px;margin-left:370px;padding:15px;width:29em;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
                    <div class="row">

                      <div class="col-md-12">
                            <select name="state" style="border-radius:25px; height:40px ;border: 2px solid #dcdbdb;padding-left:35px;padding-right:35px;"  placeholder="select state"><br>
                             <option value="1" style="opacity:0.7;">Select your state</option>
                             <option value="West Bengal">West Bengal</option>
                            </select><br>
                            <select name="district" style="border-radius:25px; height:40px ;border: 2px solid #dcdbdb;padding-left:35px;padding-right:35px;margin-top:40px;" placeholder="select state"><br>
                             <option value="1" style="opacity:0.7;">Select your district</option>
                             <option value="Asansol">Asansol</option>
                             <option value="barhampur">Barhampur</option>
                             <option value="Birbhum">Birbhum</option>
                             <option value="cooch behar">Cooch Behar</option>
                             <option value="malda">Malda</option>
                             <option value="durgapur">Durgapur</option>
                             <option value="siliguri">Siliguri</option>
                                 <option value="pandua">Pandua</option>
                                 <option value="samsi">Samsi</option>
                                 <option value="murshidabad">Murshidabad</option>
                                 <option value="howrah">Howrah</option>
                              </select><br>
                            <br></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col"></div>
                        <div class="col-md-12">
                                <button type="sub" class="btn btn-success" name="sub" >Submit</button>
                        </div>
                    </div>
            </form>
            </div>
    <?php
$con=mysqli_connect("localhost","root","","agriculture");
    echo "hello";
if(isset($_POST['sub']))
{
    echo "HELLO";
   $a=$_POST['f_name'];
   $b=$_POST['l_name'];
   $g=$_POST['phone_no'];
   $c=$_POST['state'];
   $d=$_POST['district'];
   $e=md5($_POST['password']);
            $query=mysqli_query($con,"INSERT INTO user (f_name,l_name,phone_no,state,district,password)VALUES('$a','$b','$g','$c','$d','$e')");
                 if($query)
                         {
                     echo "hello";
							 $query2=mysqli_query($con,"SELECT* FROM user WHERE phone_no='$g'");
							  while($row=mysqli_fetch_array($query2))
                                 {

									 $no=$row['phone_no'];
                                     $id=$row['user_id'];
									  session_id("session2");
									 session_start();
                                    $_SESSION['phone_no']=$no;
							        $_SESSION['user_id']=$id;
                                  echo $_SESSION['phone_no'];
                                    header("Location:../index.php");
                                 }
						 }

   }
?>

</body>

</html>
