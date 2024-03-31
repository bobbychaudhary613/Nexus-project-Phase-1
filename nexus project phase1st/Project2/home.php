<?php
session_start();
if(!isset($_SESSION['p11']))
{
header("location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


  <?php  
          
	    echo '<h1>Welcome</h1>';  echo  '<h1>'. $_SESSION['p11'] . '</h1>';     
	   
	  ?><h1> This is your account </h1>
    <header>
        <h1>Welcome to Our Restaurant</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Reservation</a></li>
        </ul>
    </nav>
    <main>
        <section id="menu">
            <h2>Menu</h2>
            <div class="menu-item">
                <h3>Appetizers</h3>
                <p>Appetizer 1 - $5.99</p>
                <p>Appetizer 2 - $6.99</p>
            </div>
            <div class="menu-item">
                <h3>Main Food</h3>
                <p>Main Course 1 - $12.99</p>
                <p>Main Course 2 - $14.99</p>
            </div>
            <div class="menu-item">
                <h3>Simple Food</h3>
                <p>Dessert 1 - $4.99</p>
                <p>Dessert 2 - $5.99</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Restaurant Website. All rights reserved.</p>
    </footer>
</body>
</html>
