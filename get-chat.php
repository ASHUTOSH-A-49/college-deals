<?php

session_start();
if(isset($_SESSION['Email'])){
    include_once "connect.php";

    $outgoing_id = $_SESSION['Email'];
    $incoming_id = mysqli_real_escape_string($conn,$_POST['incoming_id_']);

    // checking data sent to post 
    // print_r($_POST);
    // echo "$outgoing_id";

    $output = "";
    $sql = "SELECT * FROM messages LEFT JOIN users ON users.Email = messages.outgoing_msg_id WHERE (outgoing_msg_id = '{$outgoing_id}' AND incoming_msg_id = '{$incoming_id}') OR (outgoing_msg_id = '{$incoming_id}' AND incoming_msg_id  = '{$outgoing_id}') ORDER BY msg_id";

    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_assoc($query)){
            if($row['outgoing_msg_id'] === $outgoing_id){
                $output .= '<div class = "chat outgoing">
                            <div class = "details">
                            <p>'.$row['msg'].'</p>
                            </div>
                            </div>';
            }else{
                $output .= '<div class = "chat incoming">
                <img src = "profile-pics/'.$row['profile_pic'].'" alt = "">
                <div class = "details">
                <p>'.$row['msg'].'</p>
                </div>
                </div>';
            }
        }
    }else{
        $output .= '<div class = "text">No message are available. Once you send the message they will appear here. </div>';
    }
    echo $output;
}else{
    header("location: ../home.php");
}


?>



