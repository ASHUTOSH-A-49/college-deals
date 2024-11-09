<?php
// session_start();
include('sellerpost2.php');
include ('connect.php');
$user_email = $_SESSION['Email'];
// echo "<pre>";
// print_r(getPost());

//collect posts

// $post = new Post();
// $Id = $_SESSION['Id'];
// $posts = $post->get_posts($Id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Deals</title>
    <script src="https://kit.fontawesome.com/4dcb19159e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <style>
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


        }

        .orders:hover {
            box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
        }

        .images {
            /* margin: auto; */
            /* position: cente; */
            /* padding: 10px; */
            margin: 2%;
            border-radius: 15px;
            height: 50%;
            width: 85%;
            background-color: rgba(222, 226, 233, 0.844);
            overflow:hidden;
        }

        /* .images img{
            max-width: 300px;
            max-height: 300px;
        } */



        /* ----------------chatmodal--------------  */
  #toggle{
  visibility: hidden;
  opacity: 0;
  position: relative;
  /* z-index: -1; */
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
  margin-top:  30%;
  max-width: 500px;
}

/* -----------chat------------------  */
.wrapper{
    background: #fff;
    max-width:450px;
    width:100%
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
    background#3E424B;
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
    margin-bottom:0px
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
                <li><button type="button" id="create-btn"  class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addpost">
                        <!-- onclick="myfunction()" -->
                        <i class="fa-solid fa-plus"></i>
                    </button></li>
                <li><a href="sellerview.php" class="active">Home</a></li>
                <!-- <li><a href="#">My items</a></li> -->
                <!-- <li><a href="#">About</a></li> -->
              
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

                <li><a href="contactsellerview.php">Contact</a></li>
            
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
    <div class="modal fade" id="addpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="post_img" style="display: none;" alt="#">
                    
                    
                    <form method="post" action="sellerpost2.php" enctype="multipart/form-data">
                        <div class="my-3">
                        <input class="form-control" name="post_img" type="file" id="select_post_img">
                    </div>
                    <!-- <img src="" id="post_img2" style="display: none;" alt="#">
                    <div class="my-3">
                        <input class="form-control" name="post_img2" type="file" id="select_post_img2">
                    </div>
                    <img src="" id="post_img3" style="display: none;" alt="#">
                    <div class="my-3">
                        <input class="form-control" name="post_img3" type="file" id="select_post_img3">
                    </div> -->
                    <div class="mb3">
                        <label for="name_item" class="">Name of Item</label>
                        <textarea name="post_title" class="form-control" id="name_item"></textarea>
                    </div>
                    <div class="mb4">
                        <label for="descr_item" class="">Description</label>
                        <textarea name="post_desc" class="form-control" id="descr_item" placeholder="describe about its condition"></textarea>
                    </div>
                    <div class="mb4">
                        <label for="purchase-date" class="">Purchase Date</label>
                        <input type="date" name="purchase_date" class="form-control" id="purchase-date" ></input>

                        <label for="number">Price</label>
                        <input type="number" name ="price" id="price"></input>
                        
                            
                            <button type="submit" class="btn btn-primary" name="upload">Post</button>
                        
                    </div>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>
    <!-- <div class="chatmodal"> -->
        

    <!-- </div> -->

    <section class="mains">
        <div class="separator"></div>
        <div class="deals">
        <?php
        // include("post.php");
        // global $posts;
        $Email = $_SESSION['Email'];
        $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
        while ($row=mysqli_fetch_array($query)) {
            $row1 = $row['Email'];
        }
        foreach($posts as $post)
        {
            
            if($post['Email'] == $row1){

            
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
            </div>
        

        
        <?php
        // }
        }
    }
        ?>
        </div>
        <!-- <div class="deals">
            <div class="orders">
                <div class="images">
                </div>
                <div class="prodname">
                    <h1>Test Product</h1>
                </div>
                <div class="descrip">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, natus a. Consequuntur doloremque
                    incidunt sint quia pariatur, unde odit.
                </div>
            </div> -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="custom.js"></script>
    <script src="users.js"></script>
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>


    
</body>

</html>