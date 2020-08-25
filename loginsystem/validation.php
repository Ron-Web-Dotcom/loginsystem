<?php
 session_start();
 $host = "localhost";    /* Host name */
 $user = "root";         /* User */
 $password = "";         /* Password */
 $dbname = "system";   /* Database name */
 
 // Create connection
 $con = mysqli_connect($host, $user, $password,$dbname);
 
 // Check connection

mysqli_select_db($con,'system');
$name=$_POST['email'];

$pass=$_POST['password'];
 
$signup="select * from tbl_signup where email='$name'&& password='$pass'";
$result= mysqli_query($con,$signup);
$num= mysqli_num_rows($result);
if($num==1){
    $_SESSION['email']=$name;
    header('location:homepage.php');

}else{
    header('location:login.php');

    }




?>