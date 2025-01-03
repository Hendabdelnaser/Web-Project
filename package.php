<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section end -->

<div class="heading" style="background:url(images/header-bg-2.jpg) no-repeat">
    <h1>packages</h1>
</div>

<!-- packages section starts -->
<section class="packages">

    <h1 class="heading-title">top destinations</h1>

    <div class="box-container">
        <?php
        // Connect to the database
        $connection = mysqli_connect("localhost", "root", "", "travel");

        // Fetch the packages
        $query = "SELECT * FROM adminpanel";
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

    <div class="load-more"><span class="btn">Load More</span></div>
</section>
<!-- packages section ends -->

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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js?v=1"></script>

</body>
</html>
