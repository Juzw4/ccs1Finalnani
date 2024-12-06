<?php
session_start();

// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"]; // Store username in session
    header("Location: Home.php"); // Redirect to home page
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="cs.css">
    <title>Login Page</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
	background-color: rgb(33, 37, 41,1);
}

        .left-container {
            width: 400px;
			display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
			border-radius: 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
			padding: 20px;
			margin: 25px;
			margin-left: 160px;
        }

        .login-form {
            width: 90%;
            max-width: 300px;
            text-align: center;
        }

        .login-form h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .login-form form {
            display: flex;
            flex-direction: column;
			font-size: 14px;
			margin-bottom: 20px;
        }

        .login-form input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            padding: 10px;
            font-size: 14px;
            color: #fff;
            background-color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
			
        }

        .login-form button:hover {
            background-color: #333;
        }

        .right-container {
            flex-grow: 1;
			width: 500px;
			display: flex;
			margin: 10px;
			margin-left: 240px;
			overflow: hidden;
        }
.HLs {
    width: 700px; 
    height: 930px; 
    object-fit: cover; 
    border-radius: 5px; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    border: 1px solid #ccc; 
	margin-left: 20px;
	margin: 40px;
	transition: opacity 1s ease-in-out;
	opacity: 0;
	position: absolute;
           
}		

.HLs.active{
	opacity: 1;
}
    </style>
</head>
<body>
    <div class="left-container">
        <div class="login-form">
            <h1>Welcome!</h1>
            <p>Please enter your details</p>
            <form action="index.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" >Log in</button>
            </form>
        </div>
    </div>
    <div class="right-container">
			<img class="HLs" src="img3.jpg">
			<img class="HLs" src="img2.jpg">
			<img class="HLs" src="img1.jpg">	
				<script>
				let slideIndex = 0;
const slides=document.getElementsByClassName("HLs");

function carousel() {
  var i;
  var slides = document.getElementsByClassName("HLs");
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1;}
  slides[slideIndex-1].classList.add("active");
  setTimeout(carousel, 2500);
}
carousel();
				</script>
    </div>
</body>
</html>