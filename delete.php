<?php
$con = new mysqli('localhost', 'root', '', 'formlog');
$id=$_GET['id'];
mysqli_query($con,"delete from `data` where userid='$id'");
?>