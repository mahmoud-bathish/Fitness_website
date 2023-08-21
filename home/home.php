<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fitness</title>
      <link rel="stylesheet" href="./Style/Home.css">
      <link rel="stylesheet" href="../Shared_Style/Header.css">
      <!-- Icons -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
  input[type="email"] {
    outline:none;
    border:#;
  }
  .subscribe form input[type="email"] {
    caret-color: #fff;
  }
  .btn:hover{
    background: #F78604;
  }


  /* Global Rules */
*, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
  --text-color: white;
  --bg-color:#111715;
  --card-color:black;
  --primary-color: #F78604;
}


html {
    scroll-behavior: smooth;
}

body {
    background-color: #111715;
    font-family: "Inter", sans-serif;
    transition: 0.3s background-color;
}

a {
    text-decoration:none;
}

ul {
    list-style: none;
}
/* reusable */
.container {
    position: relative;
    width: 100%;
    max-width: 75rem;
    padding: 0 1.5rem;
    margin: 0 auto;
}


.logo {
    margin-right: 1.5rem;
    transition: 0.3s;
    font-family: "Arbil Fatface",cursive;
    font-size: 1.5rem;
    color: var(--text-color);
    letter-spacing: 1px;
    font-weight: bold;
    transition: 0.3s;
}

.logo span {
    color: var(--main-color-1);
}


.sub-heading {
    color: var(--heading-color);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-left: 3px solid var(--main-color-2);
    padding: 0.13rem 0.75rem;
    margin-bottom: 1rem;
    font-weight: 500;
    transition: 0.3s color;
}

.heading {
    color: var(--heading-color);
    font-size: 3rem;
    font-family: "Abril Fatface", cursive;
    line-height: 1.3;
    transition: 0.3s color;
}

.text {
    color: var(--text-color);
    font-size: 0.9rem;
    margin: 2rem 0;
    line-height: 2.3;
    transition: 0.3s color;
}


.section {
    position: relative;
    padding: var(--section-padding) 0;
}
  /* Global */
  .section-margin{
    margin-bottom: 100px;
    margin-top: 100px;
  }


/* Start Articles */
.articles {
    position: relative;
  }
  .articles .container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 40px;
  }
  .articles .box {
    box-shadow: 0 2px 15px rgb(0 0 0 / 10%);
    background-color: white;
    border-radius: 6px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .articles .box:hover {
    transform: translateY(-10px);
    box-shadow: 0 2px 15px rgb(0 0 0 / 20%);
  }
  .articles .box img {
    width: 100%;
    max-width: 100%;
  }
  .articles .box .content {
    padding: 20px;
  }
  .articles .box .content h3 {
    margin: 0;
  }
  .articles .box .content p {
    margin: 10px 0 0;
    line-height: 1.5;
    color: #777;
  }
  .articles .box .info {
    padding: 20px;
    border-top: 1px solid #e6e6e7;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .articles .box .info a {
    color: var(--main-color);
    font-weight: bold;
  }
  .articles .box .info i {
    color: var(--main-color);
  }
  .articles .box:hover .info i {
    animation: moving-arrow 0.6s linear infinite;
  }
.main-title {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
    font-family: "Poppins", sans-serif;
    color: var(--text-color);
  }
  /* End Articles */

/* Start Contact */
.contact .container {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    column-gap: 4rem;
}

.mail {
    color: var(--text-color);
    font-weight: 500;
    font-size: 1.1rem;
}

.mail i {
    display: inline-block;
    font-size: 1.5rem;
    margin-left: 2px;
    transform: translateY(3px);
    transition: 0.3s margin-left;
}

.mail:hover {
    color: var(--primary-color);
}

.mail:hover i {
    margin-left: 10px;
}

.contact-form {
    background-color: #79807c;
    border-radius: 20px;
    padding: 3.5rem 3rem;
    display: flex;
    flex-direction: column;
    transition: 0.3s background-color;

}

.contact-form h3 {
    font-size: 1.5rem;
    font-weight: 500;
    margin-bottom: 1.6rem;
    line-height: 0.9;
    transition: 0.3s color;
}

.contact-info ul {
    display: flex;
    width: 50%;
    justify-content: center;
    margin-top: 20px;
}
.contact-info .text,
.contact-info .heading {
  color: var(--text-color);
}

.form-input {
    display: inline-block;
    padding: 0.9rem 1.5rem;
    background-color:  rgba(255,255,255,0.6);
    border: 2px solid var(--bg-color);
    width: 100%;
    border-radius: 7px;
    font-family: inherit;
    color: var(--heading-color);
    font-weight: 500;
    font-size: 0.85rem;
    outline: none;
    transition: 0.3s;
}

.form-input::placeholder {
}

.form-input:hover {
    filter: brightness(97%);
}

.form-input:valid,
.form-input:focus {
    filter: brightness(100%);
    background-color: hsl(var(257),100%,97%);
    border-color: var(--primary-color);
}

textarea.form-input {
    resize:none;
    min-height: 170px;
}

.contact-form .form-input {
    margin-bottom: 1.5rem;
}

footer {
    padding: 0 0;
}

footer .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

footer .social-media {
    display: flex;
}

.social-link {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    margin-left: 1rem;
    /* background-color: black; */
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    font-size: 30px;
}
.social-link:hover {
    color: var(--primary-color);

}


.btn {
    display: inline-block;
    padding: 0.9rem 1.75rem;
    border-radius: 7px;
    background-color: var(--primary-color);
    color: #fff;
    font-size: .85rem;
    letter-spacing: 0.4px;
    text-transform: capitalize;
    transition: 0.3s;
    border: none;
    outline: none;
    transition: 0.3s;
    font-family: inherit;
    cursor: pointer;
}

.btn:hover {
    background-color: rgb(247, 69, 69);
}

/* End Contact */


/* Start Footer */
.footer-social-link{
  font-size: 24px;
  color: white;
  transition: 0.3s;
}
.footer-social-link:hover {
  color: var(--primary-color);
}

.footer {
    padding-top: calc(var(--section-padding) / 2);
    padding-bottom: calc(var(--section-padding) / 2);
    background-image: url("../assets/imgs/cat-01.jpg");
    background-size: cover;
    position: relative;
    color: white;
    text-align: center;
  }
  .footer::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(0 0 0 / 70%);
  }
  .footer .container {
    position: relative;
  }
  .footer img {
    margin-bottom: 20px;
  }
  .footer p:not(.copyright) {
    text-transform: uppercase;
    padding: 20px;
    border-bottom: 1px solid white;
    font-size: 22px;
    /* width: fit-content; */
    margin: 20px auto;
  }
  .footer .social-icons i {
    padding: 10px 15px;
  }
  .footer .copyright {
    margin-top: 60px;
  }
  .footer .copyright span {
    font-weight: bold;
    color: var(--primary-color);
  }

  .footer-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  /* End Footer */
/* Start Subscribe */
.subscribe {
    padding-top: 100px;
    padding-bottom: 100px;
    background-image: url("../assets/imgs/cat-01.jpg");
    background-size: cover;
    position: relative;
    color: white;
  }
  .subscribe::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(0 0 0 / 50%);
  }
  .subscribe .container {
    position: relative;
    display: flex;
    align-items: center;
  }
  .subscribe form {
    display: flex;
    position: relative;
    width: 500px;
    max-width: 100%;
  }
  .subscribe form i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 25px;
  }
  .subscribe form input[type="email"] {
    border: 1px solid white;
    background: none;
    padding: 20px 20px 20px 60px;
    caret-color: #fff;
    width: calc(100% - 130px);
  }
  .subscribe form input[type="submit"] {
    width: 130px;
    background-color: var(--primary-color);
    color: white;
    padding: 10px 20px;
    border: 1px solid white;
    margin-left: 10px;
    /* border-left: none; */
    text-transform: uppercase;
  }
  .subscribe form input[type="email"]:focus,
  .subscribe form input[type="submit"]:focus {
    outline: none;
  }
  .subscribe form ::placeholder {
    color: white;
  }
  .subscribe p {
    line-height: 2;
    margin-left: 50px;
  }
  /* End Subscribe */



  /* Start Gallery */
.gallery {
    position: relative;
    background-color: var(--section-background);
  }
  .gallery .container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 40px;
  }
  .gallery .box {
    padding: 15px;
    background-color: white;
    box-shadow: 0px 12px 20px 0px rgb(0 0 0 / 13%), 0px 2px 4px 0px rgb(0 0 0 / 12%);
  }
  .gallery .box .image {
    position: relative;
    overflow: hidden;
  }
  .gallery .box .image::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgb(255 255 255 / 20%);
    width: 0;
    height: 0;
    opacity: 0;
    z-index: 2;
  }
  .gallery .box .image:hover::before {
    animation: flashing 0.7s;
  }
  .gallery .box img {
    max-width: 100%;
    transition: 0.3s;
  }
  .gallery .box .image:hover img {
    transform: rotate(5deg) scale(1.1);
  }
  /* End Gallery */

  /* Start Landing */

  .landing{
    height: 100vh;
    position: relative;
  }

  .landing .back {
    display: flex;
    z-index: 1;
  }

  .landing .back .left {
    background-color: var(--bg-color);
    width: 75%;
    height: 100vh;
}

.landing .back .right {
    background-color: #F78604;
    width: 25%;
    height: 100vh;
}

.landing .front {
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    height: 100vh;
  }

  .landing .front .text {
    display: flex;
    align-items: start;
    justify-content: center;
    flex-direction: column;
    padding-left: 20px;
  }

  .landing .front .text div {
    font-size: 36px;
    line-height: 1.3;
  }

  .landing .front .text p {
    width: 70%;
    line-height: 1.3;
    padding: 20px 0;
  }

  .landing .front .text button{
    padding: 10px;
  }

  /* End Landing */



</style>
  </head>
  <body>
      <header>
          <nav class="container">
              <a class="logo">Fit<span style="color:#F78604">ness</span></a>
              <div class="links">
                  <ul>
                      <li><a href="./Home.php" class="nav-link">Home</a></li>
                      <li><a href="../Programs/Programs.php" class="nav-link">Programs</a></li>
                      <li><a href="../BMICalculator/BMICalculator.php" class="nav-link">BMICalculator</a></li>
                  </ul>
                  <?php
                    session_start();
                    if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1) {
                      echo "<a href='../Admin/Programs/Programs.php' style='margin-right:10px;' class='btn'>Dashboard</a>";  

                    }
                    

                    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == 1) {
                      echo "<a href='../Authentication/Logout.php' class='btn'>Logout</a>";  
                    } else {
                        echo "<a href='../Authentication/Login.html' class='btn'>Login</a>";
                    }
                  ?>
              </div>
          </nav>
      </header>
      <main>
      <section class="landing" style="position:relative;">
        <div class="container">
            <div class="front">
                <div class="text">
                    <div style="font-size:38px;">SHAPE YOUR IDEAL BODY<br><span style="background-color:#F78604;">AT HOME</span></div>
                    <p>Get Out Of Your Comfort Zone And Make Yourself Stronger Than Your Excuses.</p>
                    <button class="btn" style="padding: 22px 30px">SingUp</button>
                </div>
                <!-- <div class="image">
                    <div class="image-container">
                        <img src="../assets/imgs/coach-removebg-preview.png" alt="">
                    </div>
                </div> -->
            </div>
          </div>
        </section>
        <!-- Start Articles -->
        <section>
            <div class="container section-margin">
              <div class="articles" id="articles">
                <h2 class="main-title">Articles</h2>
                <div class="container">
                  <?php 
                    require_once '../Connection/connection.php';                     
                    $query = "SELECT * FROM articles";

                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                         echo "<div class='box'>";
                         echo "  <img src=" . $row["ImageUrl"] . " alt='' />";
                         echo "  <div class='content'>";
                         echo "    <h3>" . $row["Title"] . "</h3>";
                         echo "    <p style='-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical; overflow:hidden;'>" . $row["Description"] . "</p>";
                         echo "  </div>";
                         echo "  <div class='info' style='color:#F78604;'>";
                         echo '   <a href="ReadArticle.php?articleID=' . $row["articleID"] . '"">Read More</a>';
                         echo "    <i class='fas fa-long-arrow-alt-right'></i>";
                         echo "  </div>";
                         echo "</div> ";
                        }
                    }
                  ?>
                </div>
              </div>
              <div class="spikes"></div>
            </div>
              <!-- End Articles -->
        </section>
        <!-- start testemonilas -->
        <section  >
          <div class="container" style="display:flex;width:90%;justify-content:center;gap:2%;" >
            <div class="previous" style="display:flex;align-items:center;justify-content:center;">
              <span id="prevBtn" class="prev" style="cursor:pointer;"><i style="font-size:30px;color:white;" class="uil uil-angle-left-b"></i></span>
            </div>
            <div class="" style="position:relative;height:70vh;width:80%;">
                    <?php
                    require_once '../Connection/connection.php';
                    $query = "SELECT * FROM Testimonials";

                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "  <div class='slide' style='background-color: rgba(255,255,255,0.6);box-shadow: 0 5px 20px 0.1px rgba(0,0,0,0.01);height:100%;";
                            echo "   backdrop-filter: blur(15px);border-radius:10px;opacity:0;width:100%;height:100%;position:absolute;display:flex;align-items:center;justify-content:center;'>";
                            echo "    <div style='display:flex;justify-content:center;flex-direction:column;align-items:center;width:100%;'>";
                            echo "      <div style='width:100%;display:flex;justify-content:center;margin-bottom:20px;'>";
                            echo "      <img src='" .$row["pictureUrl"]. "'  style='width:100px;height:100px;border-radius:50%;'>";
                            echo "      </div>";
                            echo "      <div style='height:50%;;white-space: normal;text-align:center;width:80%;font-size:22px;line-height:1.4;'>" . $row["comment"] . "</div>";
                            echo "    </div>";
                            echo "  </div>";
                        }
                    }
                    ?>
            </div>
            <div class="nextt" style="display:flex;align-items:center;justify-content:center;">
              <span id="nextBtn" class="next" style="cursor:pointer;"><i style="font-size:30px;color:white;" class="uil uil-angle-right-b"></i></span>
            </div>
          </div>
        </section>

      <!-- Start Gallery -->
        <section class="success-stories">
          <div class="container section-margin">
            <div class="gallery" id="gallery">
              <h2 class="main-title">Gallery</h2>
              <div class="container">
                <div class="box">
                  <div class="image">
                    <img src="../assets/imgs/cat-01.jpg" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="image">
                    <img src="../assets/imgs/cat-02.jpg" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="image">
                    <img src="../assets/imgs/cat-03.jpg" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="image">
                    <img src="../assets/imgs/cat-04.jpg" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="image">
                    <img src="../assets/imgs/cat-05.jpg" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="image">
                    <img src="../assets/imgs/cat-06.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- End Gallery -->
            
        <section class="newsletter">
            <div class="subscribe section-margin">
                <div class="container">


                  <form action="AddNewsLetterEmail.php" method="post">
                    <input style='color:white;font-size:15px;'type="email" name="Email" placeholder="Your Email" />
                    <input type="submit" value="Subscribe" style="cursor:pointer;" />
                  </form>
                  <p>
                    Enter your email to receive our website updates.
                  </p>
                </div>
              </div>
        </section>
        <section class="contact" id="contact">
            <div class="container section-margin">
                <div class="contact-info">
                    <h1 style="font-size:40px;color:white;">Contact US</h1>
                    <p class="text">Contact US Via Gmail <br>or directly send a message </p>
                    <a href="mailto:Fitness@gmail.com" class="mail">fitness@gmail.com <i class="uil uil-arrow-right"></i></a>
                    <ul class="social-media">
                        <li>
                            <a href="https://www.linkedin.com/" class="social-link">
                              <i class="uil uil-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/" class="social-link">
                                <i class="uil uil-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/" class="social-link">
                                <i class="uil uil-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact-form">
                    <h3>Send a message</h3>
                    <form action="AddContactInfo.php" method='post'>
                      <input type="text" class="form-input" name="Name" placeholder="Your Name" id="clientName" required>
                      <input type="email" class="form-input" name="Email" placeholder="Your Email" id="clientEmail" required>
                      <textarea class="form-input" name="message" placeholder="Message" id="clientMessage" required></textarea>
                      <input type="submit" onclick="sendMail()" value="send" class="btn" style="width:100%;">
                    </form>
                </div>
            </div>
        </section>
      </main>
      <footer>
          <div class="footer">
              <div class="footer-container container">
                <p>Folow Us</p>
                <div class="social-icons">
                <a href="https://youtube.com" class="footer-social-link">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://youtube.com" class="footer-social-link">
                    <i class="uil uil-facebook"></i>
                </a>
                <a href="https://youtube.com" class="footer-social-link">
                    <i class="uil uil-twitter"></i>
                </a>

                </div>
                <p class="copyright">&copy; 2023 <span>Fitness</span> All Right Reserved</p>
              </div>
            </div>
      </footer>
  <script>
  let index = 0;
  let testimonials = document.getElementsByClassName('slide');
  let prevBtn = document.getElementById('prevBtn');
  let nextBtn = document.getElementById('nextBtn');
  index = Math.floor(testimonials.length / 2);
  testimonials[index].style.opacity = 1; // Changed index to 0

  prevBtn.addEventListener('click', () => {
      prevSlide();
  });

  nextBtn.addEventListener('click', () => {
      nextSlide();
  });

  function prevSlide() {

      index--;
      if (index <= 0) {
        prevBtn.style.cursor = 'auto';
        index = 0;
      }
      nextBtn.style.cursor = 'pointer';
      Array.from(testimonials).forEach(x => x.style.opacity = 0);
      testimonials[index].style.opacity = 1;
  }

  function nextSlide() {
      index++;
      if (index >= testimonials.length - 1) {
        nextBtn.style.cursor = 'auto';
        index = testimonials.length - 1;
      }
      prevBtn.style.cursor = 'pointer';
      Array.from(testimonials).forEach(x => x.style.opacity = 0);
      testimonials[index].style.opacity = 1;
  }
<?php

          // PHP code to generate the JavaScript code dynamically
          echo 'const header = document.querySelector("header");';
          echo 'function navbar() {';
          echo '  header.classList.toggle("scrolled", window.pageYOffset > 0);';
          echo '}';
          echo 'navbar();';
          echo 'window.addEventListener("scroll", navbar);';
        ?>

    </script>
  </body>
</html>