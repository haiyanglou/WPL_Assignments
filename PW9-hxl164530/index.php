<?php
session_start();

$con=mysqli_connect("localhost","root","root","PW9");
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$query = "SELECT * FROM Book;";

$result = mysqli_query($con,$query);

 if (mysqli_num_rows($result) > 0) {
  
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        
        $results[] = array(
            '<br>Book-id' => ($row['Book-id']),
            'title' => ($row['title']),
            'year' => ($row['year']),
            'price' => ($row['price']),
            'category' => ($row['category'])
            );
        }
    echo json_encode($results, JSON_PRETTY_PRINT). "</n>";
    }

/*
 $arr = array();
 while($arr = mysqli_fetch_all($result, MYSQLI_ASSOC)) { 
 echo json_encode($arr, JSON_PRETTY_PRINT). "</n>";
 }
*/

mysqli_close($con);
?>