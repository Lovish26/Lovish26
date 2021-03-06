<?php 
  $showAlert = false;
  if($_SERVER["REQUEST_METHOD"] == 'POST') {
    include 'partials/_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `query` (`user_name`, `user_email`, `user_project`, `user_message`, `timestamp`) VALUES ('$name', '$email', '$project', '$message', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if($result) {
      $showAlert = true;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="script.js"></script>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="media.css?v=<?php echo time(); ?> ">
  <script src="https://kit.fontawesome.com/722021f5b4.js" crossorigin="anonymous"></script>
  <title>Portfolio</title>
</head>

</svg>

<body>
  <?php 
    if($showAlert) {
      echo '<div class="alert-success flex">
      <p><span>Success!</span> Your message has been sent successfully.</p>
      <button class="alert-btn"><i class="fas fa-times"></i></button>
    </div>
  ';
    }
  ?>

  <header>
    <div class="nav-bar">
      <nav class="nav-section container flex">
        <div>
          <p><a class="nav-link" style="color: #15aabf" href="">Lovish</a></p>
        </div>

        <div class="nav-sm-screen ml-auto">
          <ul>
            <li><a class="nav-link" href="#home"> Home</a></li>
            <li><a class="nav-link" href="#about"> About</a></li>
            <li><a class="nav-link" href="#skills"> Skills</a></li>
            <li><a class="nav-link" href="#portfolio"> Portfolio</a></li>
            <li><a class="nav-link" href="#contact-me"> Contact Me</a></li>
          </ul>
          <button class="nav-btn nav-close"><i class=" fas fa-times"></i></button>
        </div>
        <button class="nav-btn nav-ham"><i class=" fas fa-bars"></i></button>
      </nav>
    </div>
  </header>

  <main class="main-section">
    <div class="home" id="home">
      <div class="main-container container grid">
        <div class="one social-handles flex">
          <a href="https://www.linkedin.com/in/lovish-kamboj-7537bb180/"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://www.instagram.com/lost_boy_026/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100006826517251"><i class="fab fa-facebook"></i></a>
        </div>

        <div class="two">
          <h1>Hi, I'am <span>Lovish</span></h1>
          <h2>Frontend Developer</h2>
          <p>I've ability to create innovative, creative, responsive & interactive web designs while optimising web
            performance.</p>
          <button><a class="btn btn--main-home flex" href="#contact-me">Contact Me<i
                class="fas fa-caret-right"></i></a></button>
        </div>

        <div class="three">
          <svg class="home-blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">

            <path fill="#15aabf"
              d="M62.3,-23.4C69.8,2.8,57.4,32.4,35,48.9C12.5,65.3,-19.9,68.7,-39.6,54.4C-59.2,40.2,-66.1,8.2,-57.3,-19.7C-48.6,-47.6,-24.3,-71.6,1.6,-72.1C27.4,-72.6,54.8,-49.6,62.3,-23.4Z"
              transform="translate(100 100)">
            </path>
            <image class="home--blog-img" x="-5" y="-10" xlink:href="img/software-development.png" alt="image">
          </svg>

        </div>
      </div>
    </div>


    <div class="about-section" id="about">
      <div class="about-container container">
        <h1 style="text-align: center">About Me</h1>
        <h3 style="text-align: center">My introduction</h3>
        <div class="about-text-content grid grid--col-2">
          <img src="img/about-img.png" alt="about-img">
          <div>
            <p>Hi! I'm Lovish from Yamunanagar, Haryana. I
              did my Engineering in 2021 and currently interested in getting a job as Web Developer. If you'd like to
              hire me,
              or
              have
              any
              enquiries, I'll be <a href="#contact-me" style="color:#15aabf">delighted to hear from you.</a>
            </p>
            <button><a class="btn about-btn flex" href="resume.pdf" download>Download CV<i
                  class="fas fa-download"></i></a></button>
          </div>
        </div>

      </div>
    </div>


    <div class="skill-section" id="skills">
      <div class="container skill-container">
        <h1 style="text-align: center">Skills</h1>
        <h3 style="text-align: center">My technical skills</h3>

        <div class="skill-content grid grid--col-2">
          <!-- Skill item starts here -->
          <div class="grid-item show-text">
            <div class="flex skill-flex" style=" margin-bottom: 3.2rem;">
              <i class="skill-icon fas fa-code"></i>
              <h2>Frontend Developer</h2>
              <button class="skill-btn" id="dropdown-btn">
                <span class="down-icon">
                  <i class="fas fa-angle-down"></i>
                </span>
                <span class="up-icon">
                  <i class="fas fa-angle-up"></i>
                </span>
              </button>
            </div>
            <div class="skills ">
              <div class="skills-text-box flex">
                <h3>HTML</h3>
                <p>90%</p>
              </div>
              <div class="skill-bar skill--bar-1" style=""></div>
              <div class="skills-text-box flex">
                <h3>CSS</h3>
                <p>85%</p>
              </div>
              <div class="skill-bar skill--bar-2"></div>
              <div class="skills-text-box flex">
                <h3>JavaScript</h3>
                <p>70%</p>
              </div>
              <div class="skill-bar skill--bar-3"></div>
              <div class="skills-text-box flex">
                <h3>Bootstrap</h3>
                <p>80%</p>
              </div>
              <div class="skill-bar skill--bar-4"></div>
            </div>
          </div>
          <!-- Skill item ends here -->

          <!-- Skill item starts here -->
          <div class="grid-item">
            <div class="flex skill-flex" style=" margin-bottom: 3.2rem;">
              <i class="skill-icon fas fa-swatchbook"></i>
              <h2>Designer</h2>
              <button class="skill-btn" id="dropdown-btn">
                <span class="down-icon">
                  <i class="fas fa-angle-down"></i>
                </span>
                <span class="up-icon">
                  <i class="fas fa-angle-up"></i>
                </span>
              </button>
            </div>
            <div class="skills">
              <div class="skills-text-box flex">
                <h3>Photoshop</h3>
                <p>75%</p>
              </div>
              <div class="skill-bar skill--bar-1-2" style=""></div>
              <div class="skills-text-box flex">
                <h3>Illustrator</h3>
                <p>90%</p>
              </div>
              <div class="skill-bar skill--bar-2-2"></div>

            </div>
          </div>
          <!-- Skill item ends here -->

          <!-- Skill item starts here -->
          <div class="grid-item">
            <div class="flex skill-flex" style=" margin-bottom: 3.2rem;">
              <i class="skill-icon fas fa-laptop-code"></i>
              <h2>Backend Developer</h2>
              <button class="skill-btn" id="dropdown-btn">
                <span class="down-icon">
                  <i class="fas fa-angle-down"></i>
                </span>
                <span class="up-icon">
                  <i class="fas fa-angle-up"></i>
                </span>
              </button>
            </div>
            <div class="skills">
              <div class="skills-text-box flex">
                <h3>PHP</h3>
                <p>80%</p>
              </div>
              <div class="skill-bar skill--bar-1-1" style=""></div>
              <div class="skills-text-box flex">
                <h3>MySQL</h3>
                <p>85%</p>
              </div>
              <div class="skill-bar skill--bar-2-1"></div>

            </div>
          </div>
          <!-- Skill item ends here -->




        </div>
      </div>
    </div>



    <div class="portfolio-section" id="portfolio">
      <div class="container portfolio-container">
        <h1 style="text-align: center">Portfolio</h1>
        <h3 style="text-align: center">Most recent work</h3>

        <div class="cards-container grid">
          <!-- Card item starts here -->
          <div class="card">
            <img class="card-img" src="img/omnifood.jpg" alt="omnifood">
            <div class="card-text">
              <h2>Omnifood</h2>
              <p>Omnifood is a responsive one-page landing website featuring the fictitious food delivery company.</p>
              <a class="card-btn" href="https://omnifood-lovish.netlify.app/">Demo<i
                  class="fas fa-long-arrow-alt-right"></i></a>
            </div>
          </div>
          <!-- Card item ends here -->

          <!-- Card item starts here -->
          <div class="card">
            <img class="card-img" src="img/forkify.jpg" alt="forkify">
            <div class="card-text">
              <h2>Forkify</h2>
              <p>Forkify is a recipe web application that allows users to look up recipes and compile their own
                cookbook.</p>
              <a class="card-btn" href="https://forkify-lovish.netlify.app/">Demo<i
                  class="fas fa-long-arrow-alt-right"></i></a>
            </div>
          </div>
          <!-- Card item ends here -->





        </div>
      </div>
    </div>

    <div class="contact-section" id="contact-me">
      <div class="container contact-container">
        <h1 style="text-align: center">Contact Me</h1>
        <h3 style="text-align: center">Get in touch</h3>

        <div class="form-container grid">
          <form action="/portfolio/index.php" method="post">
            <div class="flex form-flex">
              <div class="mb-3">
                <input type="text" class="form-control input-name" id="name" placeholder="Name" name="name"
                  aria-describedby="name" required>
              </div>
              <div class="mb-3">
                <input type="email" placeholder="Email" class="form-control input-email" id="email" name="email"
                  required>
              </div>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control input-project" placeholder="Project" id="floatingTextarea2" name="project"
                required></textarea>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control input-message" placeholder="Message" id="floatingTextarea2" rows="5"
                name="message" required></textarea>
            </div>
            <button type="submit" class="btn form-btn btn-primary">Send Message<i
                class="form-icon fas fa-paper-plane"></i></button>
          </form>

          <div class="contact-text-container flex">
            <!-- Contact item starts here -->
            <div class="contact-item flex">
              <i class="contact-icon fas fa-envelope"></i>
              <div class="contact-text">
                <h1>Email</h1>
                <p>coc2610199914@gmail.com</p>
              </div>
            </div>
            <!-- Contact item ends here -->

            <!-- Contact item starts here -->
            <div class="contact-item flex">
              <i class="contact-icon fas fa-phone-square-alt"></i>
              <div class="contact-text">
                <h1>Contact</h1>
                <p>+91-8901115385</p>
              </div>
            </div>
            <!-- Contact item ends here -->

            <!-- Contact item starts here -->
            <div class="contact-item flex">
              <i class="contact-icon fas fa-compass"></i>
              <div class="contact-text">
                <h1>Location</h1>
                <p>HUDA - Sector-17, Yamunanagar</p>
              </div>
            </div>
            <!-- Contact item ends here -->
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="footer-section">
    <div class="footer-grid grid container">
      <div>
        <h1>Lovish</h1>
        <p>Frontend Developer</p>
      </div>
      <ul class="footer-link-list flex">
        <li><a class="footer-link" href="#skills">Skills</a></li>
        <li><a class="footer-link" href="#portfolio">Portfolio</a></li>
        <li><a class="footer-link" href="#contact-me">Contact me</a></li>
      </ul>
      <ul class="footer-social-links flex">
        <li><a href="https://www.facebook.com/profile.php?id=100006826517251"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li><a href="https://www.instagram.com/lost_boy_026/"><i class="fab fa-instagram-square"></i></a></li>
        <li><a href="https://www.linkedin.com/in/lovish-kamboj-7537bb180/"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
    <p class="copyright"> ??? Lovish. All rights reserved</p>
  </footer>

</body>

</html>