<?php
// session_start();
include('sellerpost2.php');
include ('connect.php');
$user_email = $_SESSION['Email'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Deals</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4dcb19159e.js" crossorigin="anonymous"></script>
    <style>
        @media (max-width:800px){
            .deals{
                /* flex-direction: column;
                flex-wrap:wrap; */
                /* display:inline; */
                width:100vw;
                flex-direction:column;
                

            }
            .orders{
                /* display:inline; */
                width:80vw;
                height:auto;
            }
        }
        body {
            width: 100%;
            /* padding: 30px; */
            /* margin: 100px; */
        }

        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            background-color: rgb(222, 226, 233);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            /* margin: 0 0; */
            position: sticky;
            top: 0;
            left: 0;
            height: 90px;
            /* width: 100vw; */
            margin: auto;
            /* border: 2px solid black; */
            /* width: fit-content; */
        }

        #navbar {
            display: flex;
            align-items: center;

        }

        #navbar li {
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a {
            text-decoration: none;
            font-size: 16;
            font-weight: 600;
            color: rgb(29, 29, 29);
        }

        #navbar li a.active {
            color: rgb(25, 5, 201);
        }

        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 2px;
            background-color: rgb(25, 5, 201);
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        #header a img {
            height: 80px;
            width: 80px;
        }

        .title {
            position: absolute;
            padding: 10%;
        }


        .user-pic{
            cursor:pointer;

        }

        .sub-menu-wrap{
            position:absolute;
            top:100%;
            right:0%;
            width:320px;
            max-height:0px;
            /* display:none; */
            visibility:hidden;
            transition: max-height 0.8s;


        }
        .sub-menu-wrap.open-menu{
            visibility:visible;
            height:400px;
        }
        .sub-menu{
            background:#fff;
            padding: 20px;
            margin: 12px;

        }
        .user-info{
            display:flex;
            align-items:center;

        }
        .user-info p{
            font-weight:500;
        }
        .sub-menu hr{
            width: 100%;
            border:0px;
            height:1px;
            background:#ccc;
            margin: 15px 10px;
        }
        
        .sub-menu p{
            width: 100%;
        }
        .sub-menu-link{
            display:flex;
            align-items:center;
            text-decoration:none;
            color:#525252;
            margin: 12px;
            padding:5px;
        }
        .sub-menu-link:hover p{
            color: #000;
            font-weight:600px;
        } 





        .separator {
            height: 20px;

        }

        .deals {
            /* margin: 20px; */
            width: 95vw;
            height: 100vw;
            background-color: rgb(255, 253, 247);
            border-radius: 20px;
            margin: auto;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 50px;
            flex-wrap: wrap;
        }

        .orders {
            height: auto;
            width: 20vw;
            background-color: rgb(255, 255, 255);
            padding: 10px;
            border: 0.1px solid black;
            border-radius: 15px;
            font-size: larger;

        }

        .orders:hover {
            box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
        }

        .images {
            /* margin: auto; */
            /* position: relative; */
            margin-left: 3%;
            border-radius: 15px;
            height: 50%;
            width: 90%;
            background-color: rgba(222, 226, 233, 0.844);
            overflow:hidden;
        }

        /* .prodname {
            margin: 5%;
        }

        .descrip {
            margin: 5%;
        }

        .msg {
            margin: 0 5%;
            height: 5%;
            width: 50%;
            border: 0.5px solid black;
            border-radius: 7px;
        } */

        /* .wrapper {
            height: 100%;
            width: 100%;
            overflow: hidden;
            border-radius: 5%;
        }

        .wrapper-holder {
            display: grid;
            grid-template-columns: repeat(4, 100%);
            height: 100%;
            width: 100%;
            animation: slider 30s ease-in-out infinite alternate;
        } */

        /* .slider-img1 {
            background-image: url('city.jpeg');
        }

        .slider-img2 {
            background-image: url('koala.jpeg');
        }

        .slider-img3 {
            background-image: url('bird-thumbnail.jpg');
        }

        .slider-img4 {
            background-image: url('koala.jpeg');
        } */

        /* .button-holder .button {
            background-color: white;
            width: 15px;
            height: 15px;
            border-radius: 15px;
            display: inline-block;
            margin: 0.3rem;
        }

        .images .button-holder {
            position: absolute;
            left: 25%;
            bottom: 0%;

        }

        @keyframes slider {
            0% {
                transform: translateX(0%);
            }

            10% {
                transform: translateX(-100%);
            }

            20% {
                transform: translateX(-100%);
            }

            30% {
                transform: translateX(-200%);
            }

            40% {
                transform: translateX(-200%);
            }

            50% {
                transform: translateX(-200%);
            }

            60% {
                transform: translateX(-300%);
            }

            70% {
                transform: translateX(-300%);
            }

            80% {
                transform: translateX(-300%);
            }

            90% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(0%);
            }
        }

        .button:hover {
            box-shadow: 0px 0px 7px 4px rgba(0, 255, 255, 0.6);
        } */



         /* ----------------chatmodal--------------  */
       #toggle{
        visibility: hidden;
        opacity: 0;
        position: relative;
        z-index: -1;
      }
      
      #toggle:checked ~ dialog {
        display: block;
      }
      
      label{
        background: skyblue;
        color: white;
        padding: .5em 1em;
        border-radius: 4px;
      }
      @keyframes appear {
        0%{
          opacity: 0;
          transform: translateY(-10px);
        }
      }
      
      dialog{
        animation: appear 350ms ease-in 1;
        margin-top: 40%;
        overflow-y:scroll;
        max-width: 500px;
      }
      
      /* -----------chat------------------  */
      .wrapper{
          background: #fff;
          max-width:450px;
          width:100%;
          border-radius:16px;
          box-shadow: 0 0 128px 0 rgba(0,0,0,0.1)
                      0 32px 64px -48px rgba(0,0,0,0.5);
      }
      .users{
          padding:25px 30px;
      
      }
      .chathead{
      display:flex;
      align-items:center;
      padding-bottom:20px;
      border-bottom:1px solid #e6e6e6;
      justify-content: space-between;
      
      }
      .wrapper img{
          object-fit:cover;
          border-radius:50%;
      
      }
      .chathead img{
          height:50px;
          width:50px;
      
      }
      :is(.users,.user-list) .content{
          display:flex;
          align-items:center;
      }
      
      :is(.users, .users-list)  .content .details{
          color:#000;
          margin-left:20px;
      
      }
      
      :is(.users, .user-list) .details span{
          font-size:18px;
          font-weight:500;
      }
      
      .users .search{
          margin:20px 0;
          display: flex;
          position:relative;
          align-items:center;
          justify-content: space-between;
      }
      
      .users .search .text{
          font-size:18px;
      
      }
      
      .users .search input{
          position:absolute;
          height:42px;
          width: calc(100% - 50px);
          font-size: 16px;
          padding:0 13px;
          border: 1px solid #e6e6e6;
          outline:none;
          border-radius: 5px 0 0 5px;
          opacity:0;
          pointer-events:none;
          transition: all 0.2s ease;
      }
      
      .users .search input.show{
          opacity:1;
          pointer-events:auto;
      
      }
      .users .search button{
          position: relative;
          z-index:1;
          width:47px;
          height:42px;
          font-size:17px;
          cursor:pointer;
          border:none;
          background:#fff;
          color:#3E424B;
          outline:none;
          border-radius: 0 5px 5px 0;
          transition: all 0.2s ease;
      
      }
      
      .users .search button.active{
          background:#3E424B;
          color:#fff;
      
      }
      
      .search button.active i::before{
          content:'\f00d';
      
      }
      .users-list{
          max-height:350px;
          overflow-y:auto;
      
      }
      
      :is(.users-list, .chat-box)::-webkit-scrollbar{
          width: 0px;
      
      }
      
      .details p{
          color: #67676a;
      } 
       .users-list a{
          padding-bottom:10px;
          margin-bottom:15px;
          padding-right:15px;
          border-bottom-color:#f1f1f1;
      }
      .users-list a:last-child{
          margin-bottom:0px;
          border-bottom:none;
      
      }
      .users-list a img{
          height:40px;
          width:40px;
      
      }
      .users-list a .details p{
          color:#67676a
      }
      .users-list a .status-dot{
          font-size:12px;
          color:#468669;
          padding-left:10px;
      }
      .users-list a .status-dot.offline{
          color:#ccc;
      }









    </style>
</head>

<body>
    <section id="header">
        <a href="#"><img src="logo-modified.jpg" alt="#"></a>
        <div class="title">
            <h1>College Deals</h1>
        </div>


        <div>
            <ul id="navbar">
                <li><a href="buyerview.php" class="active">Home</a></li>
                <li><a href="#">Shop</a></li>
                <input type="checkbox" id="toggle">
    <label for="toggle">Open Messages</label>

    <dialog>
    
    <div class="wrapper">
        <section class="users">
            <div class="chathead">
                <div class="content">

                    
                    <!-- <img src="assets/usersample.png" alt=""> -->
                    <?php
                        $select = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$user_email'");
                        if (mysqli_num_rows($select) > 0){
                            $fetch = mysqli_fetch_assoc($select);
                        }
        
                        if ($fetch['profile_pic'] == ''){
                            echo '<img src="assets/usersample.png" style="width:70px; height:70px;">';
                        }
                        else{
                            echo '<img style="width:70px; height:70px;" src="profile-pics/'.$fetch['profile_pic'].'">';
                        }
                        // <img src="assets/usersample.png" style="width:70px; height:70px;"alt="#">
                        ?>
                    <div class="details">
                        <span>
                        <?php
                        if(isset($_SESSION['Email'])){
                            $Email = $_SESSION['Email'];
                            $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
                            while ($row=mysqli_fetch_array($query)) {
                                echo $row['Name'];
                            }
                        }
                        ?>
                        </span>
                        <p><?php if(isset($_SESSION['Email'])){
                            $Email = $_SESSION['Email'];
                            $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
                            while ($row=mysqli_fetch_array($query)) {
                                echo $row['Status'];
                            }
                        }?></p>
                    </div>
                </div>
                
            </div>
            <div class="search">
                <span class="text">
                    Select an user to start
                </span>
                <input type="text" placeholder = "Enter name to search...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>
    
  
    <label for="toggle">close messages</label>
    </dialog>
                <li><a href="contactbuyer.php">Contact</a></li>
                <img src="assets/user-nav.png" class="user-pic" alt="" style="height:30px; width:30px;"  onclick="toggleMenu();">
            </ul>
            <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                        <?php
                        $select = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$user_email'");
                        if (mysqli_num_rows($select) > 0){
                            $fetch = mysqli_fetch_assoc($select);
                        }
        
                        if ($fetch['profile_pic'] == ''){
                            echo '<img src="assets/usersample.png" style="width:70px; height:70px;">';
                        }
                        else{
                            echo '<img style="width:70px; height:70px;" src="profile-pics/'.$fetch['profile_pic'].'">';
                        }
                        // <img src="assets/usersample.png" style="width:70px; height:70px;"alt="#">
                        ?>
                        <p>
                        <?php
                        if(isset($_SESSION['Email'])){
                            $Email = $_SESSION['Email'];
                            $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
                            while ($row=mysqli_fetch_array($query)) {
                                echo $row['Name'];
                            }
                        }
                        ?>
                        </p>
                        </div>
                        <hr>
                        <a href="edit_profile.php" class="sub-menu-link">
                        <i class="fa-solid fa-user"></i>
                            <p>Edit Profile</p>
                            <span>
                            </span>
                        </a>
                        <a href="logout.php" class="sub-menu-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Logout</p>
                            <span>
                            </span>
                        </a>

                    </div>
                </div>
        </div>
    </section>
    <div class="separator"></div>
    <section id="body">
        <div class="deals">
            <!-- <div class="orders">
                <div class="images">
                    <div class="wrapper">
                        <div class="wrapper-holder">
                            <div class="slider-img1"><img src="" alt="#"></div>
                            <div class="slider-img2"><img src="" alt="#"></div>
                            <div class="slider-img3"><img src="" alt="#"></div>
                            
                        </div>
                    </div>
                    <div class="button-holder">
                        <a href="#slider-img1" class="button"></a>
                        <a href="#slider-img2" class="button"></a>
                        <a href="#slider-img3" class="button"></a>
                    </div>
                </div>
                <div class="username">
                    <h3>Posted By</h3>
                    <?=$post['Name']?>
                </div>
                <div class="prodname">
                    <h2> <?=$post['post_title']?></h2>
                </div>
                <div class="descrip">
                    <?=$post['post_desc']?>
                </div>
                <div class="item_price">
                    <h3>Price = ₹<?=$post['Price']?></h3>
                </div>
            </div> -->
            <?php
        // include("post.php");
        // global $posts;
        
        foreach($postsbuyer as $post)
        {
            // if($post['Email'] == $Email){

            
        ?>

        
            <div class="orders">
                <div class="images">
                    <img src="posts/<?=$post['post_img']?>" alt="#" style="max-width: 300px;
            max-height: 300px;">
                </div>
                <div class="posted-date">
                    <h4>Posted at :<?=$post['post_date']?></h4>
                    
                </div>
                <div class="username">
                    <h3>Posted By :</h3>
                    <?=$post['Name']?>
                </div>
                <div class="prodname">
                    <h2> <?=$post['post_title']?></h2>
                </div>
                <div class="descrip">
                    <?=$post['post_desc']?>
                </div>
                <div class="purchase-date">
                <h4>Purchased on :<?=$post['purchase_date']?></h4>
                
                </div>
                <div class="item_price">
                    <h3>Price = ₹<?=$post['Price']?></h3>
                </div>
                <button class = "chatsellerbtn" style = "padding:0 0; font-size:large;  height:20px; display:flex; align-items:center;">
                <div class = "contactseller">
                    <?php
                    $post_id = $post['Email'];
                    $sql = "SELECT * FROM `users` WHERE users.Email = '$post_id'";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($query);
                    
                    ?>
                    <h6><a href = "chatbuyer.php?Email =<?php echo $row['Email'];?>" style = "text-decoration:none; color:black;">Contact Seller</a></h6>
                    </button>
                </div>
            </div>
        

        
        <?php
        // }
        }
        ?>


        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="custom.js"></script> -->
    <script src="users.js"></script>
    
    <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
</body>

</html>