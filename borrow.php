<!DOCTYPE html>
<html>
<head>
  <title> show book list</title>
  <style type="text/css">

    table
    {
      border-collapse: collapse;
      width: 100%;
      color: black;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
    }
    body
    {
      background-image: url("piic.png");
      background-repeat: no-repeat;
      background-size: cover;
    }
    th
    {
      background-color: #d96459;
      color: black;
    }
   
    


}
  </style>
</head>
<body>
  <table>
    <tr>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>TITLE</th>
      <th>WRITTER_NAME</th>
      <th>PRICE</th>
     

    </tr>

    <?php


$con=mysqli_connect("localhost","root","","student_book_exchange");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$sql="SELECT name,email,title,writter_name,price
FROM student AS p INNER JOIN book_donate as q INNER JOIN book as m
ON q.id=p.id AND q.isbn=m.isbn";
$result=mysqli_query($con,$sql);

if ($result-> num_rows > 0)
{
  while ($row = $result-> fetch_assoc())
  {
    # code...
    echo "<tr>  <td>".$row["name"]."</td> 
                <td>".$row["email"]."</td>
                <td>".$row["title"]."</td>
                <td>".$row["writter_name"]."</td>
                <td>".$row["price"]."</td> 
                 </tr>";
  }
  echo "</table>";
}
else
{
  echo "0 result";
}

mysqli_close($con);
?>
  </table>

</body>
</html>

