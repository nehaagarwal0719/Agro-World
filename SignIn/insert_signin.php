<?php
$con=mysqli_connect("localhost","root","","agriculture");
if(isset($_POST['sub']))
{
$g=$_POST['phone_no'];
$b=$_POST['password'];
$query1=mysqli_query($con,"SELECT* FROM user WHERE phone_no='$g' AND password='$b'");
 if(mysqli_num_rows($query1)==1)
{
	  $query=mysqli_query($con,"SELECT* FROM user WHERE phone_no='$g'");
							 while($row=mysqli_fetch_array($query))
                                 {
									 $v=$row['user_id'];
									 $z=$row['phone_no'];
									 session_id("session2");
								 	  session_start();
                                    $_SESSION['phone_no']=$z;
							        $_SESSION['id']=$v;
									 header("Location:../index.php");
								 }
                                  }
                                else
                                    {
                                       echo "wrong entry";
                                     }


}
?>
