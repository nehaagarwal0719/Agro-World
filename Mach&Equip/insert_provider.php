 <?php
$con=mysqli_connect("localhost","root","","agriculture");
if(isset($_POST['sub']))
{
   $a=$_POST['name'];
    $b=$_POST['duration'];
   $c=$_POST['price'];

            $query=mysqli_query($con,"INSERT INTO m_provider (name,duration,price)VALUES('$a','$b','$c')");
                 if($query)
                         {
                            header("Location:providers.php");
                          }

   }
?>
