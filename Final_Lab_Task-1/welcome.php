<?php
session_start();
    // Check if the form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_SESSION['name']))
{
  unset($_SESSION['name']);
  header("Location: login_1.php");

}

} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="assets/img/logo.png" type="image/png" />

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Reliable Online Studio</title>
  </head>
  <body class= "dark-theme">

  <?php include('includes/header.php');?>

    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home" id="home">
        <img src="img/shawon1.jpg" alt="" class="home__img" />

        <div class="home__container container grid">
          <div class="home__data">
            <span class="home__data-subtitle">Capturing Moments</span>
            <h1 class="home__data-title">
              A great<br> <b> Marketplace </b> with <br> new <b>Oputunities <br />

          <div class="home__social">
            <a
              href="https://www.facebook.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-facebook-box-fill"></i>
            </a>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-instagram-fill"></i>
            </a>
            <a
              href="https://twitter.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-twitter-fill"></i>
            </a>
          </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              More About <br />
              Reliable Online Studio
            </h2>
            <p class="about__description" id= "aboutInfo">
              
            </p>
            <a href="#" class="button">Make a try</a>
          </div>

          <div class="about__img">
            <div class="about__img-overlay">
              <img src="assets/img/bapon003.jpg" alt="" class="about__img-one" />
            </div>

            <div class="about__img-overlay">
              <img src="assets/img/bapon6.jpg" alt="" class="about__img-two" />
            </div>
          </div>
        </div>
      </section>

      <!--==================== Explore ====================-->
      <section class="discover section" id="explore">
        <h2 class="section__title">
          Explore the most <br />
          popular essence
        </h2>

        <div class="discover__container container swiper-container">
          <div class="swiper-wrapper">
            <!--==================== Explore 1 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/bapon1.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Portfolio</h2>
                <span class="discover__description">Capture Yourself</span>
              </div>
            </div>

            <!--==================== Explore 2 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/wedding001.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Wedding</h2>
                <span class="discover__description">To have and to hold</span>
              </div>
            </div>

            <!--==================== Explore 3 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/wild.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Wild</h2>
                <span class="discover__description">One touch of nature</span>
              </div>
            </div>

            <!--==================== Explore 4 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/bapon7.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Fashion</h2>
                <span class="discover__description">Fashion fade, style is eternal</span>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!--==================== Package ====================-->
      <section class="place section" id="packages">
        <h2 class="section__title">Most Popular Pckages</h2>

        <div class="place__container container grid">
          <!--==================== Package CARD 1 ====================-->
          <div class="place__card">
            <img src="assets/img/gold.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
              </span>

              <div class="place__data">
                <h3 class="place__title">Gold</h3>
                <!-- <span class="place__subtitle">Indonesia</span> -->
                <span class="place__price">$10/Moth</span>
              </div>
            </div>
          </div>

          <!--==================== Package CARD 2 ====================-->
          <div class="place__card">
            <img src="assets/img/Premium1.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
              </span>

              <div class="place__data">
                <h3 class="place__title">Premium</h3>
                <span class="place__price">$15/Month</span>
              </div>
            </div>
          </div>

          <!--==================== Package CARD 3 ====================-->
          <div class="place__card">
            <img src="assets/img/silver1.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
              </span>

              <div class="place__data">
                <h3 class="place__title">Silver</h3>
                <span class="place__price">$5/Month</span>
              </div>
            </div>
          </div>

        </div>
      </section>

    <!--==================== FOOTER ====================-->
    
        <?php include('includes/footer.php');?>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="main.js"></script>
  </body>
</html>
