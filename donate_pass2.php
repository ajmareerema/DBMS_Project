<?php



$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}



$query = "INSERT INTO book(course_id,title,writter_name)
			SELECT course_id,title,writter_name
			FROM admin";


if($conn->query($query) === TRUE)
{
    echo "complete";
}
else{
	
    echo "TRY AGAIN";
}

$conn->close();

?>