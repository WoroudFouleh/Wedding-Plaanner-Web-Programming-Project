<?php
$con = new mysqli('localhost', 'root', '', 'connect');
$id=$_GET['id'];
$name=$_POST['fullName'];
$phoneNumber=$_POST['phoneNumber'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($con,"update `data` set fullName='$name', phoneNumber='$phoneNumber' , email='$email' , password='$password' where userid='$id'");
?>