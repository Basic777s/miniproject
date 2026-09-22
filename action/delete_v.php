<?php

$id = $_GET["id"];

include "connect.php";

$sql = "DELETE FROM agents WHERE id = '$id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../manage_v.php");
    exit;
}