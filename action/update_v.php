<?php

$name = $_POST["name"];
$age = $_POST["age"];
$radiant = $_POST["radiant"];
$id = $_POST['id'];

include "connect.php";

$sql = "UPDATE `agents` 
        SET
        `name`='$name',
        `age`='$age',
        `radiant`='$radiant'
        WHERE id = '$id' ";

        echo $sql;

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../manage_v.php");
    exit;
}