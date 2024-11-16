<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body{
            background : url("images/ff.jpeg") no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <pre>                        </pre>
        <a  class="btn btn-primary nav-link active"style="margin-left: 400px; margin-right: 29px;" background-color="#a3780a" href="home3.php">Back</a>
        <a class="navbar-brand" href="indexx.php">  RESERVATION CONTROL</a>
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
<div class="container my-4">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>NUMBER</th>
            <th>EMAIL</th>
            <th>PLAN</th>

            <th>PACKAGE</th>
            <th>DATE/TIME</th>
            <th>CITY</th>
            <th>ADDRESS</th>
            <th>MESSAGE</th>
            <th>ATTENDEES</th>
            <th></th>


        </tr>
        </thead>
        <tbody>
        <?php
        global $conn;
        include "connection.php";
        $sql = "select * from customer";
        $result = $conn->query($sql);
        if(!$result){
            die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
            echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[name]</td>
        <td>$row[number]</td>
        <td>$row[email]</td>
        <td>$row[plan]</td>
        <td>$row[package]</td>

        <td>$row[dateTime]</td>
        <td>$row[city]</td>
        <td>$row[address]</td>
        <td>$row[message]</td>
        <td>$row[attendees]</td>
        <td>
                  <a class='btn btn-success'  href='edit1.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete1.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
        ?>
        </tbody>
    </table>

</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>