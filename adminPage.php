
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        body{
            background : url("images/ff.jpeg") no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

        }
    </style>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel ="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    <link rel="stylesheet" href="./style.css">-->
</head>
<body style="color:white; background-color:#1d2630; ">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <pre>                                  </pre>
        <a  class="btn btn-light nav-link active"style="margin-left: 400px; margin-right: 29px;" background-color="#a3780a" font-weight="bold" href="home3.php">Back</a>
        <a class="navbar-brand" href="indexx.php">OUR CUSTOMERS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="adminPage.php">         </a>

                </li>
            </ul>
        </div>
    </div>
</nav>
<pre>


</pre>

      <div class="main row justify-content-center">
          <form action="customertable.php" method="POST" id="customer-form" class="row justify-content-center mb-4" autocomplete="off">
              <div class="col-8 mb-3">
                  <label for="fullName" style="font-weight: bold; color:black;">Full Name</label>
                  <input class="form-control" id="fullName" type="text" placeholder="Enter Full Name">
              </div>
              <div class="col-8 mb-3">
                  <label for="phoneNumber" style="font-weight: bold; color:black;">Phone Number</label>
                  <input class="form-control" id="phoneNumber" type="text" placeholder="Enter Phone Number">
              </div>
              <div class="col-8 mb-3">
                  <label for="email" style="font-weight: bold; color:black;">Email</label>
                  <input class="form-control" id="email" type="text" placeholder="Enter Email">
              </div>
              <div class="col-8 mb-3">
                  <label for="password"  style="font-weight: bold; color:black;">Password</label>
                  <input class="form-control" id="password" type="text" placeholder="Enter Password">
              </div>
              <div class="col-8">
                  <input class="btn btn-dark add-btn" type="submit" value="Add">
              </div>
          </form>
          <div class="col-8 mt-5">
              <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="customer-list">

                  <?php
                  include('customertable.php');
                  $con = new mysqli('localhost', 'root', '', 'connect');
                  $query=mysqli_query($con,"select * from `data`");
                  while($row=mysqli_fetch_array($query)){
                      ?>
                      <tr>
                          <td><?php echo $row['fullName']; ?></td>
                          <td><?php echo $row['phoneNumber']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['password']; ?></td>
                          <td>
                              <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                          </td>
                      </tr>

                      <?php
                  }
                  ?>











<!--                  <tr>-->
<!--                      <td>Jaber Darawsheh</td>-->
<!--                      <td>059559662</td>-->
<!--                      <td>darawsheh@gmail.com</td>-->
<!--                      <td>20252</td>-->
<!--                      <td>-->
<!--                          <a href="#" class="btn btn-warning btn-sm edit">Edit</a>-->
<!--                          <a href="#" class="btn btn-danger btn-sm delete">Delete</a>-->
<!--                      </td>-->
<!--                  </tr>-->



                  </tbody>
              </table>
              <a href="home3.php"  class="btn btn-dark add-btn">Back</a>
          </div>
      </div>

  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="mmm.js"></script>

</body>
</html>