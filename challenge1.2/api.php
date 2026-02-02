<?php

$host = "localhost";
$user = "blog";
$pass = "blog";
$db = "blog";

$conn = mysqli_connect($host,$user,$pass,$db);

if ($conn) {
echo "success";
}

$title = $_POST["title"];
$content = $_POST["content"];

$sql = "INSERT INTO posts (title, content) VALUES ('$title','$content')";

mysqli_query($conn,$sql);

?>

