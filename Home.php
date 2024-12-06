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
<link rel="stylesheet" href="Home.css">
</head>
<body>

    <header class="header">
        <div class="greeting">Hi <?php echo htmlspecialchars($username); ?> ! </div>
        <nav>
            <a href="Home.php">Home</a>
            <a href="Hometown.php">Dumaguete</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Log out </a>
        </nav>
    </header>


<div class="home">
<div class="contents"> <img class="p1"src="BG.jpg"></div>
<div class="contents"> <b>Dumaguete city</b><br><br> Dumaguete, known as the "City of Gentle People," is a charming coastal city in Negros Oriental, Philippines, celebrated for its warm hospitality and relaxed vibe. It is home to Silliman University, a historic institution with a picturesque seaside campus, and the scenic Rizal Boulevard, perfect for waterfront strolls and stunning sunsets. Dumaguete serves as a gateway to breathtaking natural attractions, including Apo Island, famous for its vibrant marine life and excellent diving spots.
 The city blends its rich cultural heritage with modern amenities, making it a favorite destination for tourists and expats alike.
 <br><br><br><br><img class="p2"src="g2.jpg"  width="200px" height="200px">  &nbsp;&nbsp;&nbsp;	 <img class="p2"src="g4.jpg" width="200px" height="200px"> &nbsp;&nbsp;&nbsp; <img class="p2"src="Gbg.jpg" width="200px" height="200px">
 <button class= "cta" id="cta"> Read More </button>

 </div>

 

</div>

<script>
    
    document.getElementById('cta').addEventListener('click', function() {
window.location.href = 'Hometown.php'; 
    });
</script>
</body> 
</html>