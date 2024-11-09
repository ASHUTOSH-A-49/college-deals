<?php
include 'connect.php';



$ran_id = rand(time(),100000000);
$status = "Online";




if(isset($_POST['signup'])){
    $Name=$_POST['Fname'];
    $Email=$_POST['Email'];
    $Password=$_POST['password'];
    $Phone=$_POST['Phone'];

    $checkEmail = "SELECT * FROM users where Email='$Email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo"Email Address Already Exists !";
    }
    else{
        $insertquery="INSERT INTO users(Name,Email,Password,Phone,Status)
                      VALUES('$Name','$Email','$Password','$Phone','$status')";
            if($conn->query($insertquery)==TRUE){
                
                header("location: home.html");
            }
            else{
                echo "Error:".$conn->error;
            }
    }
}

if(isset($_POST['signin'])){
    $Email=$_POST['Email'];
    $Password=$_POST['password'];
    $sql= "SELECT * FROM users WHERE Email='$Email' and Password='$Password'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        session_start();
        
        $row=$result->fetch_assoc();
        $_SESSION['Email'] = $row['Email'];
        $status = "Online";
        $sql2 = mysqli_query($conn,"UPDATE users SET status = '{$status}' WHERE  users.Email = '{$_SESSION['Email']}'");
        if ($sql2){

        }else{
            echo"something went wrong please try again";
        }
        header("location: choice.html");
        exit();
    }else{
    echo "Not found, incorrect Email or Password";

    
}
}




?>