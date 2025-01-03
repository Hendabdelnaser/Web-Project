<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>

<!-- header section start -->
<section class="header">

    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a class="logout" href="login.php" style="color: red; font-weight: bold; text-decoration: none;">Logout</a>
    </nav>

    <div class="user-info">
    <?php 
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT user_register.* FROM `user_register` WHERE user_register.email='$email'");
            if ($row = mysqli_fetch_array($query)) {
                echo "Welcome, " . $row['name'] ;
            }
        }
        ?>

    </div>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section end -->

<!-- home section strat -->

<section class="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                         <span>explore, discover, travel</span>
                         <h3>travel around the world</h3>
                         <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>


                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                     <div class="content">
                         <span>explore, discover, travel</span>
                         <h3>discover the new places</h3>
                         <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                         <div class="content">
                              <span>explore, discover, travel</span>
                              <h3>make your tour worthwhile</h3>
                             <a href="package.php" class="btn">discover more</a>
                        </div>
                 </div>
        

       

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


</section>

<!-- home section end -->

<!-- services section start -->

<section class="services">

    <h1 class="heading-title">our services </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>
    </div>

</section>


<!-- services section end -->







<!-- footer section start -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="home.php"><i class="fas fa-angle-right"></i> about us</a>
            <a href="home.php"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="home.php"><i class="fas fa-angle-right"></i> terms of use</a>
          
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="home.php"><i class="fas fa-phone"></i> 15388</a>
            <a href="home.php"><i class="fas fa-envelope"></i> Egypttravels@gmail.com</a>
            <a href="home.php"><i class="fas fa-map"></i> cairo, egypt - 400104</a>
          
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="home.php"><i class="fab fa-facebook-f"></i> facebook</a> 
            <a href="home.php"><i class="fab fa-instagram"></i> instagram</a>
            <a href="home.php"><i class="fab fa-linkedin"></i> linkedin</a>



        </div>
   
    </div>

    <div class="credit"> created by <span> Web Team</span> | all rights reserved! </div>

</section>

   


 <!-- footer section end -->

 <!-- fome about section start -->
<section class="home-about">
   <div class="image">
    <img src="images/about.jpg" alt="">
   </div>
   <div class="content">
    <h3>about us</h3>
    <p>We are a passionate team 
        of travel experts who share
         a common goal: to curate memorable
         travel experiences for our clients.
          With years of experience in the industry, 
          we bring a deep understanding of both local
           and international travel, offering personalized
            services that cater to each traveler’s unique needs</p>
            <a href="about.php" class="btn">read more</a>
   </div>
</section>

 <!-- fome about section end -->


 <!-- home packages section start -->

 <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <?php
            // Connect to the database
            $connection = mysqli_connect("localhost", "root", "", "travel");

            // Fetch only the first three packages
            $query = "SELECT * FROM adminpanel LIMIT 3";
            $result = mysqli_query($connection, $query);

            // Display the packages
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='box'>";
                    echo "<div class='image'>";
                    echo "<img src='images/" . $row['package image'] . "' alt='Package Image'>";
                    echo "</div>";
                    echo "<div class='content'>";
                    echo "<h3>" . $row['package name'] . "</h3>";
                    echo "<p>" . $row['package description'] . "</p>";
                    echo "<a href='book.php' class='btn'>book now</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No packages found.</p>";
            }
            ?>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

  <!-- home packages section end -->

  <!-- home offer section start -->  

  <section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Don't miss out on this chance to travel for less. Discover our top destinations and save big!"</p>
        <a href="book.php" class="btn">book now</a>
    </div>
  </section>

<!-- home offer section end -->



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js?v=1"></script>


</body>
</html>