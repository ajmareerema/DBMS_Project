<?php

$Delete_isbn  = $_POST["Delete_isbn"];



$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}


$sql = "INSERT INTO admin (Delete_isbn)
values('".$Delete_isbn."')";


if($conn->query($sql) === TRUE){
    echo "complete";
}
else{
	
    echo "not complete";
}

$conn->close();

?>