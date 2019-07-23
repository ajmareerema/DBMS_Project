<?php
$con=mysqli_connect("localhost","root","","student_book_exchange");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT name, email FROM student";

if ($result=mysqli_query($con,$sql))
  {
  // Get field information for all fields
  while ($fieldinfo=mysqli_fetch_field($result))
    {
     printf("Name: %s\n",$fieldinfo->name);
     echo "<br />";
     printf("Table: %s\n",$fieldinfo->table);

     echo "<hr />";
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>