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

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section starts -->
<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">

            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="enter your phone" name="phone">
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="enter your address" name="addres">
            </div>
            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
    
</section>


<!-- booking section ends  -->


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