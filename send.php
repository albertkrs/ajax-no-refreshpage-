<?php
$con =mysqli_connect('localhost','root','','ajax') or die (mysqli_connect_error);

if (isset($_POST["email"])){
    $username=$_POST["username"] ; 
    $email=$_POST["email"] ;
    $password=$_POST["password"];
    $sql= "INSERT INTO user (username,email,password)   VALUES ('$username','$password','$email')";
    $resp=mysqli_query($con,$sql);
    if($resp) {
        echo 'done';
    } 
}



?>