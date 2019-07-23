<?php

$course_id = $_POST["course_id"];
$title = $_POST["title"];
$isbn  = $_POST["isbn"];
$edition = $_POST["edition"];
$writter_name = $_POST["writter_name"];
$date  = $_POST["date"];
$price = $_POST["price"];


$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}

$sql = "INSERT INTO admin (course_id,title,isbn,edition,writter_name,date,price)
values('".$course_id."','".$title."','".$isbn."','".$edition."','".$writter_name."','".$date."','".$price."')";


if($conn->query($sql) === TRUE){
    header('Location: /projectfile/complete.html');
}
else{
	
    header('Location: /projectfile/trydonate.html');
}

$conn->close();

?>