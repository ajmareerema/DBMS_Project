<?php

$id = $_POST["id"];
$name = $_POST["name"];
$email=$_POST["email"];
$password = $_POST["password"];


$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}


$sql = "INSERT INTO student (id,name,email,password)
values('".$id."','".$name."','".$email."','".$password."')";


if($conn->query($sql) === TRUE){
    header('Location: /projectfile/log.html');
}
else{
    header('Location: /projectfile/reg.html');
}

$conn->close();

?>