<?php
require 'dbconnection.php';

$un=htmlspecialchars ($_POST['uname']);
$fn=htmlspecialchars ($_POST['fname']);
$ln=htmlspecialchars ($_POST['lname']);
$em=htmlspecialchars ($_POST['email']);
$gen=htmlspecialchars ($_POST['gender']);
$bdate=htmlspecialchars ($_POST['bdate']);
$pass=htmlspecialchars ($_POST['pass']);
$cpass=htmlspecialchars ($_POST['cpass']);

$con=create_connection();

if($con->connect_error){
    die("Connection Failed:".$con->error);
}   

$sql_uname="SELECT * FROM user where username='$un'";
$result_uname=$con->query($sql_uname);
$uname_error=0;
if($result_uname->num_rows>0) {
    $uname_error=1;
}

$sql_email="SELECT * FROM user where email='$em'";
$result_email=$con-> query($sql_uname);
$email_error=0;
if($result_email->num_rows>0) {
    $email_error=1;
}
$password_error=0;
if (strcmp($pass, $cpass) !=0){
        $password_error=1;
}

if($uname_error==0 && $email_error==0 && $password_error==0){
    $sql="INSERT INTO user VALUES (0, '$un', '$fn', '$ln', '$em', '$gen', '$bdate', '$pass')";
    $con->query($sql);    
    
    header("location:../sign-in.php?reg_success=1");
    
}
else{
    header("location:../sign-up.php?uname_error=$uname_error"
        . "&email_error=$email_error"
        . "&password_error=$password_error");
}