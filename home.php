<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Deals</title>
    <script src="https://kit.fontawesome.com/4dcb19159e.js" crossorigin="anonymous"></script>
    <style>
/* ----------------------------**------------------------**------------------------------**-------------------------------**--------------------- */
        /* THIS IS THE ACTUAL HOMEPAGE THAT APPEARS WHEN OPENED THE SITE  */
/* ----------------------------------**--------------------**-----------------------------**-----------------**-------------------------------- */
        body{
            width: 100%;
            background-color: #c9d6ff;
            background: linear-gradient(to right #dde3f9,#c9d6ff );
            font-family: "poppins","sans-serif";
            /* padding: 30px; */
            /* margin: 100px; */
        }
        .container{
            background-color: white;
            width: 450px;
            /* height:300px ; */
            padding: 1.5rem;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0,1, 0.9);
        }
        form{
            margin: 0 2rem;
        }
        .form-title{
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 1.3rem;
            margin-bottom: 0.4rem;

        }
        input{
            color: inherit;
            width: 100%;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #757575;
            padding-left: 1.5rem;
            font-size: 15px;
        }
        .input-group{
            padding:1% 0;
            position: relative;
        }
        .input-group i{
            position: absolute;
            color: black;

        }
        input:focus{
            background-color: transparent;
            outline: transparent;
            border-bottom: 2px solid hsl(327,90%,28%);
        }
        input::placeholder{
            color: transparent;

        }
        label{
            color: #757575;
            position: relative;
            left: 1.2em;
            top: -1.3em;
            cursor: auto;
            transition: 0.3s ease all;

        }
        input:focus~label,input:not(:placeholder-shown)~label{
            top: -3em;
            color: hsl(327,90%,28%);
            font-size: 15px;
        }
        #header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            background-color:rgb(222, 226, 233);
            box-shadow: 0 5px 15px rgba(0,0,0,0.06);
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
        #navbar{
            display: flex;
            align-items: center;
            
        }
        #navbar li{
            list-style: none;
            padding: 0 20px;
            position: relative;
        }
        #navbar li a{
            text-decoration: none;
            font-size: 16;
            font-weight: 600;
            color: rgb(29, 29, 29);
        }
        .recover{
            text-align: right;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .recover a{
            text-decoration: none;
            color:rgb(125, 125, 235);
        }
        .recover:hover{
            color: blue;
            text-decoration: underline;
        }
        .btn{
            font-size: 1.1rem;
            padding: 8px 0;
            border-radius: 5px;
            outline: none;
            border: none;
            width: 100%;
            background:rgb(125, 125, 235) ;
            color: white;
            cursor: pointer;
            transition: 0.9s;

        }
        .btn:hover{
            background:#07001f;

        }
        /* #navbar li a.active{
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
        } */
        #header a img{
            height: 100px;
            width: 100px;
        }
        .title{
            position: absolute;
            padding: 10%;
        }
        button{
            color: rgb(125, 125, 235);
            border: none;
            background: transparent;
            font-size: 1rem;
            font-weight: bold;
        }
        button:hover{
            text-decoration: underline;
            color: blue;

        }
        .choice{
            background-color: white;
            width: 450px;
            /* height:300px ; */
            padding: 0.5rem;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0,1, 0.9);
            text-align: center;

        }
        .optn1{
            background-color:rgb(39, 255, 78);
            width: 100px;
            margin: 20px auto;
            padding: 0.5rem;
            box-shadow: 0 5px 15px rgba(0, 0,1, 0.9);
            text-align: center;
            border-radius: 10px;
        }
        .optn2{
            background-color:rgb(255, 6, 6);
            width: 100px;
            margin: 20px auto;
            padding: 0.5rem;
            box-shadow: 0 5px 15px rgba(0, 0,1, 0.9);
            text-align: center;
            border-radius: 10px;
            color: white;
        }
        
        .optn1 button a{
            text-decoration: none;
            color: #07001f;
        }
        .optn2 button a{
            color: white;
            text-decoration: none;
            color: #07001f;
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
                <li><button class="signup"><a href="Signup.HTML">Sign up</a></li></button>
            </ul>
        </div>
        </section>
        <section class="login">
            <div class="container" id="signin" class="signin" >
                <h1 class="form-title">Login</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="Email" id="Email" placeholder="Email">
                        <label for="Email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name = "password" id="password" placeholder="password" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <label for="password">password</label>
                    </div>
                    <p class="recover">
                        <a href="#">Recover password</a>
                    </p>
                    <input type="submit"   class="btn" value="login" name="signin" >
                    <div class="links">
                        <p>Don't have an account yet?</p>
                        <button id="signupbutton" ><a href="Signup.php">Sign Up</a></button>
                    </div>         
                </form>
        </section>
        
        <Section id='choice'>
            <div class="choice" style="display: none;">
                <h1>You are willing to?</h1>
                <div class="optn1"><button><a href="buyerview.html">BUY</a></button></div>
                <div class="optn2"><button><a href="#">SELL</a></button></div>

            </div>
        </Section>

    <script src="signup-login.js"></script>
</body>
</html>