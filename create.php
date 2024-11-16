<?php
global $conn;
include "connection.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $attendees = $_POST['attendees'];
    $package = $_POST['package'];
    $city = $_POST['city'];
    $dateTime = $_POST['dateTime'];
    $q ="INSERT INTO `customer`(name, email,number,plan,address,message,attendees,package,city,dateTime) VALUES ('$name','$email','$number','$plan','$address','$message','$attendees','$package','$city','$dateTime')";

    $query = mysqli_query($conn,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <style>

        body{
            background : url("images/ee.jpg") no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

        }
    </style>




    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <pre>                         </pre>
        <a  class="btn btn-primary nav-link active"style="margin-left: 400px; margin-right: 29px;" background-color="#a3780a" href="indexx.php">Back</a>
        <a class="navbar-brand" href="indexx.php">CUSTOMER RESERVATIONS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="indexx.php">         </a>

                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-primary nav-link active" color="black" background-color="#a3780a" href="create.php">Add New</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">

    <form method="post">

        <br><br><div class="container mt-5">

            <div class="text-center">
                <div background-color="black"></div>
                <h1 class="dispaly=5 mb-5">  Create New Reservation </h1>
            </div>
        </div><br>
        <table border="1" width="100%">
            <tr>
                <td> <label> <b>NAME: </b></label> </td>
                <td> <input type="text" placeholder="enter your name" name="name" required class="form-control"> </td>
                <td background-color="#a3780a"> <label><b>EMAIL: </b> </label></td>
                <td> <input type="email" placeholder="enter your email" name="email" required class="form-control"> </td>

            </tr>
            <tr>
                <td><label> <b>NUMBER: </b></label></td>
                <td> <input type="number" placeholder="enter your number" name="number" required class="form-control"> </td>
                <td> <label><b> # ATTENDEES: </b></label></td>
                <td><input type="number" placeholder="Select the number" name="attendees" min="100" max="500" required class="form-control"> </td>

            </tr>
            <tr>
                <td> <label> <b>DATE/TIME: </b></label></td>
                <td><input type="datetime-local" id="Test_DatetimeLocal" name="dateTime" required class="form-control"> </td>
                <td> <label> <b>PLAN: </b></label></td>
                <td> <select name="plan" class="form-control" id="planid">
                        <option value="basic" onclick="check()">basic</option>
                        <option value="premium" onclick="check()">premium</option>
                        <option value="ultimate" onclick="check()">ultimate</option>
                    </select></td>
            </tr>
            <tr>
                <td> <label> <b>PACKAGE:</b> </label></td>
                <td>    <select name="package" class="form-control">
                        <option value="package one">package one</option>
                        <option value="package two">package two</option>
                        <option value="package three">package three</option>
                    </select> </td>
                <td> <label> <b>CITY: </b></label></td>
                <td><select name="city" class="form-control">
                        <option value="Nablus">Nablus</option>
                        <option value="Jenin">Jenin</option>
                        <option value="Ramallah">Ramallah</option>
                        <option value="Tulakarm">Tulakarm</option>
                        <option value="Qalqilya">Qalqilya</option>

                    </select> </td>
            </tr>
            <tr>
                <td> <label> <b>ADDRESS:</b> </label></td>
                <td> <textarea name="address" placeholder="enter your address" required cols="15" rows="5" class="form-control"></textarea> </td>
                <td> <label> <b>MESSAGE: </b></label></td>
                <td><textarea name="message" placeholder="enter your message" required cols="15" rows="5" class="form-control"></textarea></td>
            </tr>
        </table>

        <br>  <button class="btn btn-dark" type="submit" name="submit"> Submit </button>
        <a class="btn btn-dark" type="submit" name="cancel" href="indexx.php"> Cancel </a><br>


</div>
</form>
</div>
</body>
</html>