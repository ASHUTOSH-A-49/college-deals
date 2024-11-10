<?php

session_start();

include_once "connect.php";

$outgoing_id = $_SESSION['Email'];
$searchTerm = mysqli_real_escape_string($conn,$_POST['searchTerm']);

$sql = "SELECT * FROM `users` WHERE NOT users.Email = '$outgoing_id' AND (Name like '%{$searchTerm}%')";

$output = "";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    include_once"data.php";

}else{
    $output .= 'No user found related to your search term';
}

echo $output;



?>