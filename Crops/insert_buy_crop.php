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

$query1=mysqli_query($con,"SELECT*  FROM user WHERE user_id='$id'");
					while($row=mysqli_fetch_array($query1))

						{
                        echo "hello";

                        $name=$row[f_name];
     $query=mysqli_query($con,"INSERT INTO crop_buyer (user_id,name,phone_no,crop_name,quantity,price)VALUES('$id','$name','$no','$c','$a','$b')");
    if($query)
    {
        header("Location:buy_crop.php");

    }

   }
}
?>



