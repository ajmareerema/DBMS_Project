<?php


$userid = $_POST['userid'];
$password = $_POST['password'];
 

$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}

$query = "SELECT * FROM student where id='".$userid."' AND password='".$password."'";
$result = $conn->query($query);

if($result->num_rows==1){
    
   header('Location: /projectfile/search.html');
}
else{
   header('Location: /projectfile/logtry.html');
}

?>