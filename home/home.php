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

  header .container {
    display:flex;
    justify-content:space-between;
    padding:15px 0;
  }
  header .container .links{
    display:flex;
    gap:10px;
  }
  header .container ul{
    display:flex;

  }
  header .container ul li{
    text-decoration:none;
    padding: 0 10px;
    line-height: 40px;
    
  }
  header .container ul li a{
    color:#fff;
  }
  header .container ul li a:hover{
    color:#F78604;
  }
  
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
            <div class="front" style='height:80vh;'>
                <div class="text">
                    <div style="font-size:38px;">SHAPE YOUR IDEAL BODY<br><span style="background-color:#F78604;">AT HOME</span></div>
                    <p>Get Out Of Your Comfort Zone And Make Yourself Stronger Than Your Excuses.</p>
                    <a class="btn" href="../Authentication/Register.html" style="padding: 12px 30px">SingUp</a>
                </div>
                <div class="image">
                    <div class="image-container">
                        <img src="../assets/imgs/coach-removebg-preview.png" alt="">
                    </div>
                </div>
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
                            echo "  <div class='slide' style='background-color: #222427;box-shadow: 0 5px 20px 0.1px rgba(0,0,0,0.01);height:100%;";
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
        <!-- <section class="success-stories">
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
        </section> -->
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
                <div class="contact-form" style='background:black;color:white;'>
                    <h3>Send a message</h3>
                    <form action="AddContactInfo.php" method='post'>
                      <input style='background-color:white;' type="text" class="form-input" name="Name" placeholder="Your Name" id="clientName" required>
                      <input style='background-color:white;' type="email" class="form-input" name="Email" placeholder="Your Email" id="clientEmail" required>
                      <textarea style='background-color:white;' class="form-input" name="message" placeholder="Message" id="clientMessage" required></textarea>
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