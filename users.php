<?php

session_start();
include_once "connect.php";

$outgoing_id = $_SESSION['Email'];

$sql = "SELECT * FROM users WHERE NOT Email = {$outgoing_id} ORDER BY Email DESC";

$query = mysqli_query($conn,$sql);

$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "No users are available to chat";
}elseif(){
    include_once "data.php";
    
}

echo $output;

?>