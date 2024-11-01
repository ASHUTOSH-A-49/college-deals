<?php

include ('connect.php');
session_start();
$user_email = $_SESSION['Email'];


if(isset($_POST['update_profile'])){

    $old_pass = $_POST['old_pass'];
    $update_pass = $_POST['update_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
        if($update_pass != $old_pass){
            echo '<div class="message">'.$update_pass.'</div>';
        }
        elseif($new_pass != $confirm_pass){
            echo '<div class="message">Confirm password not matched</div>';
        }
        else{
            mysqli_query($conn, "UPDATE `users` SET Password='$confirm_pass' WHERE users.Email='$user_email' ") or die("query failed");
            echo '<div class="message">password updated successfully</div>';
        }
    }
    $image = $_FILES['update_pic']['name'];
    $image_tmp_name = $_FILES['update_pic']['tmp_name'];
    $image_folder = './profile-pics/'.$image;
    
    if(!empty($image)){
        $image_update_query = mysqli_query($conn, "UPDATE `users` SET users.profile_pic='$image' WHERE users.Email='$user_email' ") or die("query failed");
        if($image_update_query){
            move_uploaded_file($image_tmp_name,$image_folder);
        }
        echo '<div class="message">Profile pic updated successfully</div>';
    }


}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style class="css">
        @media (max-width:650px){
            .user-details form .form-inner{
                flex-wrap:wrap;
                gap:0;
            }
            .user-details form .form-inner .input-box{
                min-width: 100%;
            }
        }
        .container{
            width: 100vw;
            height: 100vh;
            display:flex

        }
        .profile{
            width: auto;
            height:auto;
            margin:auto;
            background-color:yellow;
        }
        .profile-pic{
            display:flex;
            margin:auto;
            object-fit:contain;
            height:200px;
            width:200px;
            border-radius:50%;
        }
        .btn{
            font-size: 1.1rem;
            padding: 8px 0;
            border-radius: 5px;
            outline: none;
            border: none;
            width: 100%;
            background:rgb(27, 92, 212) ;
            color: white;
            cursor: pointer;
            transition: 0.9s;
            margin-bottom:15px;

        }
        .btn:hover{
            background:#20047b;

        }
        .delete-btn{
            text-decoration:none;
        }
        .delete-btn{
            display:block;
            font-size: 1.1rem;
            padding: 8px 0;
            border-radius: 5px;
            outline: none;
            border: none;
            width: 100%;
            background:rgb(255, 129, 26) ;
            color: white;
            cursor: pointer;
            transition: 0.9s;
        }
        .delete-btn:hover{
            background:#c63800;

        }
        .user-details form{
            text-align:center;
            margin-left:2%;
            margin-right:2%;
        }
        .user-details form .form-inner{
            display:flex;
            justify-content:space-between;
            gap:15px;
        }
        .user-details form .form-inner .input-box{
            width: 50%;
        }
        .user-details form .form-inner .input-box span{
            text-align:left;
            display:block;
            font-size:17px;
            margin-top:5px;
        }
        .user-details form .form-inner .input-box .box{
            width: 90%;
            border-radius:5px;
            background-color:var(--light-bg);
            padding:12px 14px;
            font-size:17px;
            color:var(--black);
            margin-top:10px;
        }
        .message{
            display:inline;
            font-size: 1.1rem;
            padding: 8px 0;
            border-radius: 5px;
            outline: none;
            border: none;
            /* width: 100%; */
            background:rgb(255, 129, 26) ;
            color: white;
            cursor: pointer;
            transition: 0.9s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="profile-pic">
                <?php
                $select = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$user_email'");
                if (mysqli_num_rows($select) > 0){
                    $fetch = mysqli_fetch_assoc($select);
                }

                if ($fetch['profile_pic'] == ''){
                    echo '<img src="assets/usersample.png" style="object-fit:contain;
                            height:100%;
                            width:100%;
                            border-radius:50%;">';
                }
                else{
                    echo '<img style="object-fit:contain;
                            height:100%;
                            width:100%;
                            border-radius:50%;" src="profile-pics/'.$fetch['profile_pic'].'">';
                }
                // if(isset($message)){
                //     foreach($message as $mess){
                //         echo '<div class="message">'.$mess.'</div>';
                //     }
                // }

                ?>

                
            </div>
            <div class="user-details">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-inner">
                        <div class="input-box">
                            <span>Change username:</span>
                            <input type="text" name='update_name' value="<?php echo $fetch['Name'] ?>" class="box" readonly >
                            <span>your Email:</span>
                            <input type="Email" name='user_Email' value="<?php echo $fetch['Email'] ?>" class="box" readonly>
                            <span>Update your Profile pic:</span>
                            <input type="file" name='update_pic' accept = "image/jpg, image/jpeg, image/png"  class="box">
                        </div>
                        <div class="input-box">
                            <input type="hidden" name="old_pass" value= "<?php echo $fetch['Password'] ?>" >
                            <span>old password:</span>
                            <input type="password" name="update_pass" placeholder="Enter previous password" class="box" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <span>new password:</span>
                            <input type="password" name="new_pass" placeholder="Enter new password" class="box" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <span>confirm new password:</span>
                            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                        </div>
                    </div>
                    <input type="submit" value="update profile"  name="update_profile" class="btn">
                    <a href="buyerview.php" class = "delete-btn">go back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>