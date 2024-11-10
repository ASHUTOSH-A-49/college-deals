<?php
session_start();

include_once "connect.php";
if(!isset($_SESSION['Email'])){
    header("location:home.php");
}

include_once "header.php";


?>
<body>

    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                // include_once "search.php";
                // include_once "data.php";
                $user_Email = mysqli_real_escape_string($conn,$_GET['Email_']);


                // to check the url array 
                // print_r($_GET);

                $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE users.Email = '{$user_Email}'");

                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);
                }else{
                    header("location: sellerview.php");
                }
                ?>


                <a href="sellerview.php" class = "back-icon"><i class="fas fa-arrow-left"></i></a>
                <?php 
                $select = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='{$user_Email}'");
                if (mysqli_num_rows($select) > 0){
                    $fetch = mysqli_fetch_assoc($select);
                }

                if ($fetch['profile_pic'] == ''){
                    echo '<img src="assets/usersample.png">';
                }
                else{
                    echo '<img  src="profile-pics/'.$fetch['profile_pic'].'">';
                } ?>
                <div class = "details">
                    <span><?php
                        if(isset($_SESSION['Email'])){
                            
                            $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='{$user_Email}'");
                            while ($row=mysqli_fetch_array($query)) {
                                echo $row['Name'];
                            }
                        }
                        ?></span>
                    <p><?php
                        if(isset($_SESSION['Email'])){
                            
                            $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='{$user_Email}'");
                            while ($row=mysqli_fetch_array($query)) {
                                echo $row['Status'];
                            }
                        }
                        ?></p>
                </div>
            </header>
            <div class="chat-box">

            </div>
            <form action="#" class = "typing-area">
                <input type="text"  class="incoming_id" name ="incoming_id" value = "<?php echo $user_Email ?>" hidden>
                <input type="text" name = "message" class = "input-field" placeholder = "Type a message here..." autocomplete ="off">
                <button><i class = "fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
<script src="chat.js"></script>
</body>
</html>
