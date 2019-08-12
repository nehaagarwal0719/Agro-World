 <?php
$con=mysqli_connect("localhost","root","","agriculture");
session_id("session2");
session_start();
 $no=$_SESSION['phone_no'];
$id=$_SESSION['user_id'];
echo "$no";
if(isset($_POST['sub']))
{
   $a=$_POST['wt'];
   $b=$_POST['dist'];
   $g=$_POST['time'];
   $c=$_POST['price'];
    $query1=mysqli_query($con,"SELECT*  FROM user WHERE user_id='$id'");
					while($row=mysqli_fetch_array($query1))
						{
                        $name1=$row[f_name];
                        echo "$name1";
							$query=mysqli_query($con,"INSERT INTO t_provider (name,phone_no,wt,dist,price,time)VALUES('$name1','$no','$a','$b','$g','$c')");
							if($query)
								{
                                 echo "<script type='text/javascript'>alert('Your data has been added succesfully!');</script>";
									header("Location:transport_provider.php");
								}
						}
			}
?>
;
