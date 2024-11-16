<?php
global $conn;
include "connection.php";
$id="";
$name="";
$email="";
$number="";
$attendees="";
$message="";
$address="";
$city="";
$dateTime="";
$package="";
$plan="";


$error="";
$success="";

if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location:indexx.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "select * from customer where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
        header("location: indexx.php");
        exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $attendees=$row["attendees"];
    $number=$row["number"];
    $dateTime=$row["dateTime"];
    $plan=$row["plan"];
    $package=$row["package"];
    $message=$row["message"];
    $city=$row["city"];
    $address=$row["address"];


}
else{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $plan=$_POST["plan"];
    $package=$_POST["package"];
    $message=$_POST["message"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $dateTime=$_POST["dateTime"];
    $attendees=$_POST["attendees"];



    $sql = "update customer set name='$name', email='$email', number='$number',message='$message', attendees='$attendees', dateTime='$dateTime', address='$address', plan='$plan', package='$package', city='$city' where id='$id'";
    $result = $conn->query($sql);

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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
    <div class="container-fluid">
        <pre>                         </pre>
        <a  class="btn btn-primary nav-link active"style="margin-left: 400px; margin-right: 29px;" background-color="#a3780a" href="indexx.php">Back</a>
        <a class="navbar-brand" href="indexx.php">RESERVATION CONTROL</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="indexx.php">         </a>

                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-primary nav-link active" background-color="#a3780a" href="create.php">Add New</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">>

    <form method="post">

        <br><br><div class="container mt-5">

            <div class="text-center">
                <h1 class="dispaly=5 mb-5">  Update RESERVATIONS </h1>
            </div><br>
            <table border="1" width="100%">
                <tr>
                    <td> <label> NAME: </label> </td>
                    <td> <input type="text" value="<?php echo $name; ?>" placeholder="enter your name" name="name"  class="form-control"> </td>
                    <td> <label> EMAIL: </label></td>
                    <td> <input type="email" placeholder="enter your email" value="<?php echo $email; ?>"name="email" class="form-control"> </td>

                </tr>
                <tr>
                    <td><label> NUMBER: </label></td>
                    <td> <input type="number" placeholder="enter your number" value="<?php echo $number; ?>"name="number" class="form-control"> </td>
                    <td> <label> # ATTENDEES: </label></td>
                    <td><input type="number" placeholder="Select the number" value="<?php echo $attendees; ?>"name="attendees" min="100" max="500"  class="form-control"> </td>

                </tr>
                <tr>
                    <td> <label> DATE/TIME: </label></td>
                    <td><input type="datetime-local"value="<?php echo $dateTime; ?>" id="Test_DatetimeLocal" name="dateTime"  class="form-control"> </td>
                    <td> <label> PLAN: </label></td>
                    <td> <select name="plan" value="<?php echo $plan; ?>"class="form-control" id="planid">
                            <option value="basic" onclick="check()">basic</option>
                            <option value="premium" onclick="check()">premium</option>
                            <option value="ultimate" onclick="check()">ultimate</option>
                        </select></td>
                </tr>
                <tr>
                    <td> <label> PACKAGE: </label></td>
                    <td>    <select name="package"value="<?php echo $package; ?>" class="form-control">
                            <option value="package one">package one</option>
                            <option value="package two">package two</option>
                            <option value="package three">package three</option>
                        </select> </td>
                    <td> <label> CITY: </label></td>
                    <td><select name="city"value="<?php echo $city; ?>" class="form-control">
                            <option value="Nablus">Nablus</option>
                            <option value="Jenin">Jenin</option>
                            <option value="Ramallah">Ramallah</option>
                            <option value="Tulakarm">Tulakarm</option>
                            <option value="Qalqilya">Qalqilya</option>

                        </select> </td>
                </tr>
                <tr>
                    <td> <label> ADDRESS: </label></td>
                    <td> <textarea name="address" value="<?php echo $address; ?>"placeholder="enter your address" required cols="15" rows="5" class="form-control"></textarea> </td>
                    <td> <label> MESSAGE: </label></td>
                    <td><textarea name="message" placeholder="enter your message" value="<?php echo $message; ?>" cols="15" rows="5" class="form-control"></textarea></td>
                </tr>
            </table>

            <button class="btn btn-dark" type="submit" name="submit"> Submit </button>
            <a class="btn btn-dark" type="submit" name="cancel" href="indexx.php"> Cancel </a><br>

        </div>
    </form>
</div>
</body>
</html>