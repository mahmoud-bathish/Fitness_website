<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fitness</title>
      <link rel="icon" href="https://cdn.pixabay.com/photo/2016/03/25/02/13/abstract-1278077_960_720.jpg">
    <link rel="stylesheet" href="./Style/index.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  </head>
  <body>
      <header>
          <nav class="container">
              <a href="" class="logo">Fit<span style="color:#F78604">ness</span></a>
              <div class="links">
                  <ul>
                      <li><a href="./home.php" class="nav-link">Home</a></li>
                      <li><a href="../Programs/programs.php" class="nav-link">Programs</a></li>
                      <li><a href="../BMICalculator/BMICalculator.php" class="nav-link">BMICalculator</a></li>
                  </ul>
                  <?php
                    session_start();

                    if (isset($_SESSION['isLoggedIn'])&& $_SESSION['isLoggedIn'] == 1) {
                        echo "<button style='pointer-events: none;' class='btn'>".$_SESSION["name"]."</button>";
                    } else {
                        echo "<a href='login.html' class='btn'>Login</a>";
                    }
                  ?>
              </div>
          </nav>
      </header>
      <main>
      <section class="landing" style="position:relative;">
        <div class="container"  >
            <div class="back" style="z-index:-1;"> 
              <div class="left"></div>
              <!-- <div class="right"></div> -->
            </div>
            <div class="front">
                <div class="text">
                    <div style="font-size:38px;">SHAPE YOUR <br><span style="background-color:#F78604;">IDEAL BODY</span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque optio esse asperiores incidunt vel nihil.</p>
                    <button class="btn" style="padding: 22px 30px">SingUp</button>
                </div>
                <div class="image">
                    <div class="image-container">
                        <img src="../assets/imgs/coach-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
          </div>
        </section>
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
                         echo "  <div class='info'>";
                         echo '   <a href="readArticle.php?articleID=' . $row["articleID"] . '"">Read More</a>';
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
              <span id="prevBtn" class="prev" style="padding:15px;cursor:pointer;"><i style="font-size:30px;color:white;" class="uil uil-angle-left-b"></i></span>
            </div>
            <div class="" style="position:relative;height:70vh;width:80%;">
                    <?php
                    require_once '../Connection/connection.php';
                    $query = "SELECT * FROM Testimonials";

                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "  <div class='slide' style='background-color: rgba(255,255,255,0.6);box-shadow: 0 5px 20px 0.1px rgba(0,0,0,0.01);height:100%;";
                            echo"    backdrop-filter: blur(15px);border-radius:10px;opacity:0;width:100%;height:100%;position:absolute;display:flex;align-items:center;justify-content:center;'>";
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
              <span id="nextBtn" class="next" style="padding:15px;cursor:pointer;"><i style="font-size:30px;color:white;" class="uil uil-angle-right-b"></i></span>
            </div>
          </div>
        </section>

        <section class="success-stories">
                <!-- Start Gallery -->
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
      <!-- End Gallery -->
            
        </section>
        <section class="section-margin ">

        </section>
        <section class="newsletter">
            <div class="subscribe section-margin">
                <div class="container">


                  <form action="AddNewsLetterEmail.php" method="post">
                    <i class="far fa-envelope fa-lg"></i>
                    <input type="email" name="Email" placeholder="Your Email" />
                    <input type="submit" value="Subscribe" style="cursor:pointer;" />
                  </form>
                  <p>
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blan dit aliquet elit, eget tincidunt.
                  </p>
                </div>
              </div>
        </section>
        <section class="contact" id="contact">
            <div class="container section-margin">
                <div class="contact-info">
                    <h1 class="heading">Contact US</h1>
                    <p class="text">Contact US Via Gmail <br>or directly send a message </p>
                    <a href="mailto:mahmoudbathish23@gmail.com" class="mail">ourCompany@gmail.com <i class="uil uil-arrow-right"></i></a>
                    <ul class="social-media">
                        <li>
                            <a href="https://www.linkedin.com/in/mahmoud-bathish" class="social-link">
                              <i class="uil uil-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/mahmoud-bathish" class="social-link">
                                <i class="uil uil-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/mahmoud-bathish" class="social-link">
                                <i class="uil uil-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact-form">
                    <h3>Send a message</h3>
                    <input type="text" class="form-input" name="Client-Name" placeholder="Your Name" id="clientName" required>
                    <input type="email" class="form-input" name="Client-Email" placeholder="Your Email" id="clientEmail" required>
                    <textarea class="form-input" name="project-message" placeholder="Message" id="clientMessage" required></textarea>
                    <input type="submit" onclick="sendMail()" value="send" class="btn">
                </div>
            </div>
        </section>
      </main>
      <footer>
          <div class="footer">
              <div class="footer-container container">
                <img style="width: 150px; border-radius: 50%; object-fit: fill;" src="../assets/imgs/logoo.png" alt="Logo" />
                <p>We Are Social</p>
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
      if (index < 0) index = 0;
      Array.from(testimonials).forEach(x => x.style.opacity = 0);
      testimonials[index].style.opacity = 1;
  }

  function nextSlide() {
      index++;
      if (index >= testimonials.length) index = testimonials.length - 1;
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