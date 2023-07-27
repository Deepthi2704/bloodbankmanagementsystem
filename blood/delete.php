<?php
    include "connection1.php";
    if(isset($_GET['id']))
    {
    $id=$_GET['id'];
    $sql="DELETE from `don` where id=$id ";
    $conn->query($sql);
    }
    header('location:/blood/admin.php');
    exit;
?>
