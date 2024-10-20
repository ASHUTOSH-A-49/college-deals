<?php
include('sellerpost2.php');
if(isset($_SESSION['Email'])){
    $Email = $_SESSION['Email'];
    $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
    while ($row=mysqli_fetch_array($query)) {
        $row1 = $row['Email'];
    }
}

if(isset($_SESSION['Email'])){
    $Email = $_SESSION['Email'];
    $query = mysqli_query($conn,"SELECT * FROM `users` WHERE users.Email='$Email'");
    while ($row=mysqli_fetch_array($query)) {
        $row2 = $row['Name'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        @media (max-width:800px){
            .img{
                display: none;
            }
            .contact-inputs{
                width: 80px;
            }
            .cont{
                align-items: left;
                justify-content: flex-start;
            }
            .form{
                margin-left: 5%;
            }
        }
        *{
            box-sizing: border-box;
        }
        body {
            /* background: url("assets/gradient background.jpg");
            /* background-repeat: no-repeat; */ 
            /* font-family: 'Outfit'; */
            height: 100vh;
            background-size: cover;
            background: linear-gradient(rgb(255, 213, 249),rgb(254, 112, 174));
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

        .cont {
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .img {
            height: 60vh;
            width: 40vw;
            margin: 5%;
        }

        .form {
            
            height: 60%;
            width: 40vw;
            margin: 5%;
            color: #000000;
            font-weight: 900;
        }
        .contact-form{
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: start;
        }

        .contact-form-title {
            color: #8c1fa8;
        }
        .contact-form-title hr{
            border: none;
            width: 220px;
            height: 4px;
            background-color: #8c1fa8;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .contact-inputs{
            width: 400px;
            height: 50px;
            border: none;
            outline: none;
            font-weight: 500;
            padding-left: 25px;
            border-radius: 20px;
            color: #666;
        }
        .contact-form textarea{
            height: 140px;
            /* border-radius: 20px; */
            padding-top: 15px;
        }
        .contact-inputs:focus{
            border: 2px solid rgb(255, 146, 12);
        }
        .contact-form button{
            padding: 15px,30px;
            font-size: 16px;
            border: none;
            color: #ffffff;
            border-radius: 50px;
            background: linear-gradient(270deg,rgb(255, 205, 54),rgb(255, 130, 84));
            cursor: pointer;
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
                <li><a href="buyerview.php" >Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="contactbuyer.php" class="active">Contact</a></li>
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
    
    <div class="cont">
        <div class="img">
            <img src="assets/contact-us2.png" alt="">
        </div>
        <div class="form">
            <form action="https://api.web3forms.com/submit" method="post" class="contact-form">
                <div class="contact-form-title">
                    <h2>Any Queries/ Complaints</h2>
                    <hr>


                </div>
                <input type="hidden" name="access_key" value="f2701ce4-09f8-4507-b0fd-7d3f35265493">

                <input type="text" name="name" class="contact-inputs" placeholder="your Name" value="<?php echo htmlspecialchars($row1); ?>" readonly>
                <input type="email" name="email" class="contact-inputs" placeholder="your Email" value="<?php echo htmlspecialchars($row2); ?>" readonly>
                <label for="issue">Choose your topic or issue</label>
                <select id="issue" class="contact-inputs" name="issue">
                    <option value="Seller related complaint" >Seller related complaint</option>
                    <option value="buyer related complaints">buyer related complaints</option>
                    <option value="feedback">feedback</option>
                    <option value="suggestions">suggestions</option>
                    
                </select>
                

                <textarea name="message"  class="contact-inputs" id="" placeholder="describe your complaint/suggestions" required></textarea>
                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                
                <button type="submit" >submit</button>
            </form>
        </div>

    </div>

</body>
