<?php
// $host='localhost';
// $user= 'root';
// $pass='';
// $db='college-deals';
// $conn=new mysqli($host,$user,$pass,$db);
// echo "<pre>";
// print_r(getPost());
// print_r($row1);
session_start();
include("connect.php");

error_reporting(0);

$msg = "";
if (isset($_POST['upload'])) {

$title = $_POST['post_title'];
$desc = $_POST['post_desc'];
$date = date('Y-m-d', strtotime($_POST['purchase_date']));
$price = $_POST['price'];
$filename = $_FILES["post_img"]["name"];
$tempname = $_FILES["post_img"]["tmp_name"];
$folder = "./posts/" . $filename;
// $post = new Post();
// $posts = $post->get_posts($Id);



if(isset($_SESSION['Email'])){
    $Email = $_SESSION['Email'];
    $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
    while ($row=mysqli_fetch_array($query)) {
        $row1 = $row['Email'];
    }
}

$db1 = mysqli_connect("localhost", "root", "", "college-deals");

// Get all the submitted data from the form
$sql = "INSERT INTO posts (Email,post_img,post_title,post_desc,purchase_date,Price) VALUES ('$row1','$filename','$title','$desc','$date','$price')";

// Execute query
mysqli_query($db1, $sql);

// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    ?>
    <img src="assets/cutegirl.png" alt="#" style="height: 100px; width: 100px;">
    <?php
} else {
    echo "<h3>&nbsp; Failed to upload image!</h3>";
}
}


//collect posts

// function get_posts($row1)
// {
    
//     $query = "select * from posts Where Email='$row1' order by post_date";
//     $DB = new Database();
//     $result = $DB->read($query);

//     if ($result){
//         return $result;
//     }else{
//         return false;
//     }


// }

// function get_user($row1){
//     $query2 = "select * from posts Where Email='$row1' limit 1";
//     $DB = new Database();
//     $result = $DB->read($query2);

//     if ($result){
//         return $result[0];
        
//     }else{
//         return false;
//     }
// }

function getPost(){
    global $conn;
    $query = "SELECT posts.Email,posts.post_title,posts.post_img,posts.post_desc,posts.purchase_date,posts.post_date,posts.Price ,users.Name,users.Email,users.Phone FROM posts JOIN users ON users.Email = posts.Email";

    $run = mysqli_query($conn,$query);
    return mysqli_fetch_all($run,true);
}


$posts = getPost();
    

function getPostbuyer(){
    global $conn;
    $query = "SELECT posts.Email,posts.post_title,posts.post_img,posts.post_desc,posts.purchase_date,posts.post_date,posts.Price ,users.Name,users.Email,users.Phone FROM posts JOIN users ON users.Email = posts.Email WHERE NOT users.Email = '{$_SESSION['Email']}' ";

    $run = mysqli_query($conn,$query);
    return mysqli_fetch_all($run,true);
}


$postsbuyer = getPostbuyer();
    



?>