<!DOCTYPE html>
<html lang="en">
<head>
    <title>AboutUs</title>
   <link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
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
             <li><a href="../SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li class="active"><a href="../ContactUs/index.php">Contact Us</a></li>
        </ul>
    </div>
</nav>
</head>
   <style>
     bb {
    width: 320px;
    padding: 10px;
    border: 3px solid black;
    margin: 5;
    border-radius: 25px;
    box-shadow: 5px 5px;
         background-color: sandybrown;

}
       /*@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);*/
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;

}

body {
  font-family: sans-serif Helvetica, Arial, sans-serif;
  font-weight: 1000;
  font-size: 12px;
  line-height: 30px;
  color: black;
    box-shadow: 5px 5px;
  background-image: url("../Assets/images/rice.jpg");
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 10 auto;
  position: relative;
}

/*#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"]*/{
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
       }

#contact {
  background: ;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 20px 20px 20px 20px rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 25px;

}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

/*#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}*/

/*#contact button[type="submit"] /*{
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}*/

/*#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}*

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}*/

.copyright {
  text-align: center;
}

/*#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}*/
    </style>
    <body>
        <div class="container">
  <form id="contact">
      <center><h3><BB>CONTACT US</BB></h3></center>
    <!--<h4>Contact us for custom quote</h4>-->
      <fieldset><p></p></fieldset>
       <fieldset><p></p></fieldset>
       <fieldset><p></p></fieldset>
    <fieldset>
        <bb>HELPLINE NUMBER:  9012345678</bb>
      </fieldset>
      <fieldset>
          <p></p>
      </fieldset>
    <fieldset>
      <!--<input placeholder="Your Email Address" type="email" tabindex="2" required>--><bb>EMAIL ID: Amanmishra@gmail.com</bb>
    </fieldset>
      <fieldset>
      <p></p>
      </fieldset>

    <fieldset>
      <!--<input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>--><bb>ADDRESS: UPES,BIDOLI, DEHRADUN</bb>
    </fieldset>
    <!--<fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
      <!--<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>-->
  </form>
<
    </body>
