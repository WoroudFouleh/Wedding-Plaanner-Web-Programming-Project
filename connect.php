<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js
"></script>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = new mysqli('localhost', 'root', '', 'connect');
    if ($con) {
        $sql = "SELECT * FROM `data` WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        if ($result)
        {
            $num = mysqli_num_rows($result);
            if ($num > 0)
            {
                include 'index.php';
                include 'errorpass.php';

            }

            else if(!($num>0))
            {
                $sql = "insert into `data` (fullName,phoneNumber,email,password) values ('$name','$phonenumber','$email','$password')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    include 'index.php';
                    include 'signsuccess.php';

                }
            }
        }
    }

}
?>