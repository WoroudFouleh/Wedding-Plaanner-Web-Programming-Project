<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = new mysqli('localhost', 'root', '', 'connect');
    if ($con)
    {
        $sql = "SELECT * FROM `data` WHERE email='$email' and password ='$password' ";
        $result = mysqli_query($con, $sql);
        $sqla = "SELECT * FROM `data` WHERE email='$email' and password ='$password' and type='1'";
        $resulta = mysqli_query($con, $sqla);
        if ($result)
        {
            $num1 = mysqli_num_rows($result);
            if ($num1 > 0) {
                include 'home.php';
                include 'customerlog.php';
            }
            else
            {
                include 'index.php';
                include 'userAlreadyExist.php';
            }
        }

        if($resulta)
            {
                $num2 = mysqli_num_rows($resulta);
                if ($num2 > 0)
                {
                    include 'home3.php';
                    include 'loginsuccess.php';

                }
                else if ($num2 < 0)
                {
                    include 'index.php';
                    include 'userAlreadyExist.php';
                }

            }
    }

    else
    {
        die(mysqli_error($con));
    }
}
?>