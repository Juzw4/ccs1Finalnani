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
<link rel="stylesheet" href="gallery.css">

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

    <table class="ht">
        <tr>
            <td class="empty"></td>
            <td><img src="g1.jpg" alt="Image 1"></td>
            <td class="empty"></td>
            <td><img src="g2.jpg" alt="Image 2"></td>
            <td class="empty"></td>
        </tr>
        <tr>
            <td><img src="g3.jpg" alt="Image 3"></td>
            <td class="empty"></td>
            <td><img src="g4.jpg" alt="Image 4"></td>
            <td class="empty"></td>
            <td><img src="g5.jpg" alt="Image 5"></td>
        </tr>
        <tr>
            <td><img src="g6.jpg" alt="Image 6"></td>
            <td class="empty"></td>
            <td class="empty"></td>
            <td class="empty"></td>
            <td><img src="g7.jpg" alt="Image 7"></td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td><img src="g8.jpg" alt="Image 8"></td>
            <td class="empty"></td>
            <td><img src="g9.jpg" alt="Image 9"></td>
            <td class="empty"></td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td class="empty"></td>
            <td><img src="g10.jpg" alt="Image 10"></td>
            <td class="empty"></td>
            <td class="empty"></td>
        </tr>
    </table>




</body> 
</html>