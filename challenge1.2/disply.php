<?php

$host = "localhost";
$user = "blog";
$pass = "blog";
$db = "blog";

$conn = mysqli_connect($host,$user,$pass,$db);

if ($conn) {
echo "success";
}

$blogPosts = mysqli_query($conn, "SELECT * FROM posts");

while($row = mysqli_fetch_assoc($blogPosts)){
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['content'] . "</p>";
}
?>   
