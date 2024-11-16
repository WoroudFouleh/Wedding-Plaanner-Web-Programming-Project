<?php
global $conn;
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from `customer` where id=$id";
    $conn->query($sql);
}
header('location:indexx.php');
exit;
?>
