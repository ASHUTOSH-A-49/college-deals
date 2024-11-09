<?php
// include ('register.php');
// include ('connect.php');
session_start();
if(isset($_SESSION['Email'])){
    include_once "connect.php";
    $user_email = $_SESSION['Email'];
    $logout_id = mysqli_real_escape_string($conn,$user_email);

    if(isset($logout_id)){
        $status = "Offline now";
        $sql = mysqli_query($conn,"UPDATE users SET status = '{$status}' WHERE  users.Email = '{$user_email}'");
    }
    if($sql){
        session_unset();
        session_destroy();
        header("location: home.html");
    }
}


// session_destroy();
// header("location: home.html")


?>