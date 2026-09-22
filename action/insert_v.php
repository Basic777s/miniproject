<?php

$name = $_POST["name"];
$age = $_POST["age"];
$radiant = $_POST["radiant"];
$id = $_POST["id"];

include "connect.php";

$sql = "INSERT INTO `agents`
        (`name`, `age`, `radiant`, `id`) 
        VALUES 
        ('$name','$age','$radiant','$id')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../index.php");
    exit;
}