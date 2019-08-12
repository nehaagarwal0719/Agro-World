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
   $e=$_POST['password'];
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
