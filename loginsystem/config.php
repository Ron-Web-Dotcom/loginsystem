<?php
 session_start();
header('location:login.php');
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
 
$signup="select * from tbl_signup where email='$name'";
$result= mysqli_query($con,$signup);
$num= mysqli_num_rows($result);
if($num==1){
    echo " <p style= color:red;>Username Already Taken </p>.";
}else{
        $regi="insert into tbl_signup (email,password)values('$name','$pass')";
     mysqli_query($con,$regi);
     echo " <p style= color:green;> Sign Up Successful </p>";

    }




?>