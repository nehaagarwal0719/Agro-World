 <?php
$con=mysqli_connect("localhost","root","","agriculture");
session_id("session2");
session_start();
 $no=$_SESSION['phone_no'];
$id=$_SESSION['user_id'];

if(isset($_POST['sub']))
{
   $a=$_POST['wt'];
   $b=$_POST['dist'];
   $g=$_POST['time'];
   $c=$_POST['price'];
    $query1=mysqli_query($con,"SELECT*  FROM user WHERE user_id='$id'");
					while($row=mysqli_fetch_array($query1))

						{
                        echo "hello";

                        $name=$row[f_name];
							$query=mysqli_query($con,"INSERT INTO t_user(name,phone_no,wt,dist,price,time)VALUES('$name','$no','$a','$b','$g','$c')");
							if($query)
								{

									header("Location:transport_user.php");
								}
						}
			}
?>
;
