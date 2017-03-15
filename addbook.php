<?php

session_start();



if(isset($_POST['title']) &&
isset($_POST['author']) &&
isset($_POST['genre']) &&
isset($_POST['pages']) &&
isset($_POST['language']) &&
isset($_POST['review']) &&
isset($_POST['grade'])){


$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$pages = $_POST['pages'];
$language = $_POST['language'];
$review = $_POST['review'];
$grade = $_POST['grade'];

$dbc = mysqli_connect("localhost","root","","laskuppen");

$query = "INSERT INTO books (title,author,pages,genre,language) VALUES ('$title','$author',$pages,'$genre','$language');";
mysqli_query($dbc,$query);


// hämta högsta id


//lägg in i reviews


}
else{


}

?>