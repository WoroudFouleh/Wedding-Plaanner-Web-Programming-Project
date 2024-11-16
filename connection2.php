<?php

if($_SERVER['REQUEST_METHOD'] =='POST') {

    $name = $_POST['name1'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $attendees = $_POST['attendees'];
    $package = $_POST['package'];
    $city = $_POST['city'];
    $dateTime = $_POST['dateTime'];


    $con = new mysqli('localhost', 'root', '', 'connect');
    if ($con) {
        // echo "connection successful";
        $sql="INSERT INTO `customer`(name, email,number,plan,address,message,attendees,package,city,dateTime) VALUES ('$name','$email','$number','$plan','$address','$message','$attendees','$package','$city','$dateTime')";
        $result=mysqli_query($con,$sql);
        if($result){
           include 'contact.php';
           include 'reg2.php';
        }
        else{
            die(mysqli_error($con));
        }

    } else {
        die(mysqli_error($con));
    }
}
?>