<?php



$conn = mysqli_connect("localhost", "root", "", "student_book_exchange");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}



$query = "INSERT INTO book_donate(date,price,edition)
			SELECT date,price,edition
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