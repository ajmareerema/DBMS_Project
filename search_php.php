<?php


$search = $_POST['search'];


$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}

$query = "SELECT * FROM book where course_id='".$search."'";
$result = $conn->query($query);

if($result->num_rows==1){
    header('Location: /projectfile/option.html');
}
else{
    header('Location: /projectfile/searchTry.html');
}

?>