 <?php
$con=mysqli_connect("localhost","root","","agriculture");
    session_id("session2");
   session_start();
$no=$_SESSION['phone_no'];
$id=$_SESSION['user_id'];
if(isset($_POST['sub']))
{
    $c=$_POST['crop_name'];
   $a=$_POST['dist_name'];
   $b=$_POST['mandi_name'];
   $e=$_POST['price'];


     $query=mysqli_query($con,"INSERT INTO rice_mp (dist_name,mandi_name,mp)VALUES('$c','$b','$e')");
    if($query)
    {
        header("Location:index.php");

    }

   }
?>
