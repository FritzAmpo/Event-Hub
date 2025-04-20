<?php

session_start();

require 'dbconnection.php';

$un=htmlspecialchars ($_POST['uname']);

$pass=htmlspecialchars ($_POST['pass']);

$con=create_connection();

if($con->connect_error){
    die("Connection Failed:".$con->error);
}   

$sql_uname="SELECT * FROM user where username='$un' AND password='$pass'";
$result_uname=$con->query($sql_uname);

if($result_uname->num_rows>0) {
    $row=$result_uname->fetch_assoc();
    $_SESSION['uid']=$row['uid'];
    $_SESSION['fname']=$row['firstname'];
    $_SESSION['lname']=$row['lastname'];
    
    header("location:../profile.php");
}
else {
    header("location:../sign-in.php?signin_error=1");
}