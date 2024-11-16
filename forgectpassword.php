<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
$con = new mysqli('localhost', 'root', '', 'formlog');
$email = $_POST['email'];
$password = $_POST['password'];
// Check connection
if ($con) {
    $sql = "SELECT *FROM `data` WHERE email='$email'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $sql = "insert into `data` (password) values ('$password')";
        }
    }
    else
    {
       echo "User does not exist";
    }
}


}
?>
