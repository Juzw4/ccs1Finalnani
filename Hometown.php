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
<link rel="stylesheet" href="hometown.css">
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


<div class="highlights">
			<div class="list">
					<div class="item active">
							<img src="img1.jpg">
							<div class="content">
							<p> <b>Highlights </b></p>
							<h2> <b>Pantawan</b></h2>
							<p> 
								The Pantawan is part of a waterfront development on Dumaguete's famous Rizal Boulevard. The area is commonly known as "Pantawan" (which means "viewpoint" or "vantage point" in Filipino) because it provides breathtaking views of the sea and the neighboring island of Siquijor. They offer a space for locals to socialize, appreciate nature, and participate in leisure activities.
							</p>

							</div>
					</div>
					
					<div class="item">
							<img src="img2.jpg">
							<div class="content">
							<p> <b>Highlights </b></p>
							<h2><b>Silliman</b></h2>
							<p> 
								The Silliman University Luce Auditorium is a prominent cultural and performance venue located in Dumaguete City, Philippines, on the campus of Silliman University, one of the country's oldest and most prestigious private universities. The Luce Auditorium was inaugurated in 1983 thanks to a generous donation from the Luce Foundation, which contributed to its construction. The auditorium is named for Dr. James Henry Luce, a prominent player in Silliman University's history and a major supporter of the university's arts and cultural programs.
							</p>

							</div>
					</div>
					
					<div class="item">
							<img src="img3.jpg">
							<div class="content">
							<p><b>Highlights</b></p>
							<h2> Cathedral</h2>
							<p> 
								The Dumaguete Cathedral (also known as St. Catherine of Alexandria Cathedral) and Belltower are historic structures in Negros Oriental's capital, Dumaguete City. The Cathedral was initially completed in 1754 and is dedicated to St. Catherine of Alexandria, the city's patron saint. The Dumaguete Belltower, near the cathedral, was built in 1811 as a watchtower to guard the town from pirate attacks and other hazards. 							</div>
					</div>
			</div>
		<div class="arrow">
			<button id="prev"><</button>
			<button id="next">></button>
		</div>

		<div class="preview">
			<div class="item active"> <img src="img1.jpg"> <div class="content"><b>Pantawan 2 Peoples Park </b></div></div>
			<div class="item"> <img src="img2.jpg"> <div class="content"><b>Silliman University Luce auditorium </b></div> </div>
			<div class="item"> <img src="img3.jpg"> <div class="content"><b>Saint Catherine of Alexandria Cathedral </b></div> </div>
			
			

		</div>
			
</div>
<script>
 
	document.getElementById('redirectBtn').addEventListener('click', function() {
window.location.href = 'dumaguete.html'; 
	});
</script>

<script src="Highlights.js"></script>

</body> 
</html>