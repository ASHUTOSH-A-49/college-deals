<?php

while($row = mysqli_fetch_assoc($query)){
    // $sql2 = "SELECT * FROM `messages` WHERE (messages.incoming_msg_id = '{$row['Email']}' OR messages.outgoing_msg_id = '{$row['Email']}' AND messages.outgoing_msg_id ='{$outgoing_id}' OR messages.incoming_msg_id ='{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1";

    $sql2 = "SELECT * FROM `messages` WHERE ((messages.incoming_msg_id = '{$row['Email']}' OR messages.outgoing_msg_id = '{$row['Email']}') AND (messages.incoming_msg_id ='{$outgoing_id}' OR messages.outgoing_msg_id ='{$outgoing_id}')) ORDER BY msg_id DESC LIMIT 1";

    $query2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($query2);
    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No message available";
    (strlen($result) > 28)  ? $msg = substr($result,0,28) . '...'
    :$msg = $result;

    if(isset($row2['outgoing_msg_id'])){
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: "
        : $you = "";
    }else{
        $you = "";
    }

    ($row['Status'] =="Offline now") ? $offline = "offline" : $offline = "";
    ($outgoing_id == $row['Email']) ?$hid_me = "hide" : $hid_me = "";

    $output .= '<a href = "chat.php?Email ='.$row['Email'].'" style = "text-decoration:none;">
    <div class = "content">
    <img src = "profile-pics/'.$row['profile_pic'].'" alt = "">
    
        <div class = "details">
            <span>'.$row['Name'].'</span>
            <p>'. $you. $msg .'</p>
        </div>
    </div>
    
    <div class = "stat">'.$row['Status'].'</div>

    </a>';
}


// <img src = "profile-pics/'.$row['profile_pic'].'" alt = "">
