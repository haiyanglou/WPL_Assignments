<?php
session_start();
$key = trim($_SERVER['PATH_INFO'],'/');

$con=mysqli_connect("localhost","root","root","HW4");
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

if ($key) {
$query = "SELECT * FROM Book WHERE Book_id = $key";
$result = mysqli_query($con,$query);

 if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $results->title = $row['title'];
        $results->year = $row['year'];
        $results->price = $row['price'];
        $results->category = $row['category'];
        
        $query = "SELECT Author_Name FROM Book_Authors, Authors WHERE Book_Authors.Book_id = $key AND Book_Authors.Author_id = Authors.Author_id";
        
        $author = mysqli_query($con,$query);
    
        if (mysqli_num_rows($author) > 1){
        	$output = array();
        	while ($row = mysqli_fetch_array($author, MYSQLI_ASSOC)) {
        		$output[] = $row;
        }
        $results->authors = $output;
    } 
        else {
    	$results->author = mysqli_fetch_array($author, MYSQLI_ASSOC)['Author_Name'];
    }

    echo json_encode($results, JSON_PRETTY_PRINT). "</n>";
    }
    else {
    	echo "EMPTY SET";
    }
}

else {
$query = "SELECT * FROM Book;";
$result = mysqli_query($con,$query);

 if (mysqli_num_rows($result) > 0) {
  
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        
        $results[] = array(
            //'Book_id' => ($row['Book_id']),
            'title' => ($row['title']),
            //'year' => ($row['year']),
            'price' => ($row['price']),
            'category' => ($row['category'])
            );
        }
    echo json_encode($results, JSON_PRETTY_PRINT). "</n>";
    }
}

mysqli_close($con);
?>