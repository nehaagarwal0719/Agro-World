 <?php
$con=mysqli_connect("localhost","root","","agriculture");
    session_id("session2");
   session_start();
$no=$_SESSION['phone_no'];
$id=$_SESSION['user_id'];
if(isset($_POST['sub']))
{
    $c=$_POST['crop_name'];
   $a=$_POST['quantity'];
   $b=$_POST['price'];


     $query=mysqli_query($con,"INSERT INTO crop_seller (user_id,crop_name,quantity,price)VALUES('$id','$c','$a','$b')");
    echo "hello";

   }
?>
