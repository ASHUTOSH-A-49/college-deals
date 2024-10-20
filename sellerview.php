<?php
// session_start();
include('sellerpost2.php');
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
                <li><a href="contactsellerview.php">Contact</a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                <li>
                    <p> Hello,
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
                </li>
            </ul>

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


    
</body>

</html>