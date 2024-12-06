<?php
session_start(); // Start the session

// Check if the username session variable exists
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    $username = "Guest"; // Default value if session variable is not set
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:  rgb(33, 37, 41,1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(108, 117, 125,0.3);
			position: relative;
			z-index:100;
           
			
        }

        .header .greeting {
            font-size: 20px;
			font-family: Verdana;
        }

        .header nav {
            display: flex;
            gap: 20px;
        }

        .header nav a {
            text-decoration: none;
            color: #000;
            font-size: 20px;
			font-family: Monaco;
        }

        .header nav a:hover {
           border-radius:10px;
			color: white;
		background-color: rgb(108, 117, 125);
        }
		


        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-form {
            flex: 1;
            margin-right: 40px;
			
        }

        .contact-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact-form input, 
        .contact-form textarea {
            width: 70%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form input[type="tel"] {
            display: inline-block;
            width: calc(50% - 10px);
            margin-right: 10px;
        }

        .contact-form textarea {
            height: 100px;
            resize: none;
        }

        .contact-form input[type="submit"] {
            width: auto;
            background-color: #d6d5d4;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #b3b3b3;
        }

        .contact-info {
            flex: 0.5;
            padding: 20px;
            background-color: rgb(108, 117, 125);
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0);
			height: 400px;
        }

        .contact-info h2 {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 20px;
            margin-bottom: 20px;
            color: #eee;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
        }

        .contact-info ul li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-info ul li span {
            margin-right: 10px;
            font-size: 18px;
        }

        .contact-info ul li a {
            text-decoration: none;
            color: #000;
        }

        .contact-info ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="greeting">Hi <?php echo htmlspecialchars($username); ?></div>
        <nav>
            <a href="Home.php">Home</a>
            <a href="Hometown.php">Dumaguete</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Log out </a>
        </nav>
    </header>
	<br>
    <div class="container">
        <div class="contact-form">
            <form action="process_form.php" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <textarea name="message" placeholder="Message" required></textarea><br>
                <input type="submit" value="SUBMIT">
            </form>
        </div>
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>
                Contact us for questions, technical assistance, or collaboration opportunities via the contact information provided.
            </p><br>
            <ul>
                <li><span>📱</span> +123-456-7890</li><br>
                <li><span>✉️</span> <a href="craigdestrada@su.edu.ph">craigdestrada@su.edu.ph</a></li><br>
                <li><span>🏠</span> Purok Orchids, Daro, Dumaguete City</li>
            </ul>
        </div>
    </div>
</body>
</html>
