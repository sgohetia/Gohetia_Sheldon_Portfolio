<!DOCTYPE html>
<html lang="en">

<?php

require_once('includes/connect.php');

$query = "SELECT * FROM projects WHERE project_id =".$_GET['id'];

$results = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($results);
?>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/sg-logo.svg" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />

    <title>Sheldon Gohetia - Portfolio</title>
  </head>

  <body>
    <h2 class="hidden">This is the menu burger for mobile</h2>
    <div class="nav__toggle" id="nav-toggle">
      <i class="ri-menu-line"></i>
    </div>
    <aside class="sidebar" id="sidebar">
      <h2 class="hidden">This is for the side bar navigation menu</h2>
      <nav class="nav">
        <div class="nav__logo">
          <h3 class="hidden">This is for my logo</h3>
          <a href="index.php"
            ><img src="images/mylogo.svg" alt="Sheldon Logo"
          /></a>
        </div>

        <div class="nav__menu">
          <h4 class="hidden">This is the menu list</h4>
          <div class="menu" id="main-header">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#intro" class="nav__link active-link">Intro</a>
              </li>
              <li class="nav__item">
                <a href="#problem" class="nav__link">Problem</a>
              </li>
              <li class="nav__item">
                <a href="#role" class="nav__link">Role</a>
              </li>
              <li class="nav__item">
                <a href="#concept" class="nav__link">Concept</a>
              </li>
              <li class="nav__item">
                <a href="#process" class="nav__link">Process</a>
              </li>
              <li class="nav__item">
                <a href="#deliverable" class="nav__link">Deliverable</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="btn__share">
          <h5 class="hidden">
            This is for portfolio url copy to clipboard if clicked so easy to
            share
          </h5>
          <a href="index.php" class="back-home-btn"
            ><i
              class="ri-arrow-left-circle-fill social__share"
              title="Go to Home"
            ></i
          ></a>
        </div>

        <div class="nav__close" id="nav-close">
          <i class="ri-close-large-line"></i>
        </div>
      </nav>
    </aside>

    <main class="main">
      <section class="home-casestudy" id="intro" style="background: url('images/<?php echo $row['hero_image'];?>'); background-size: cover; background-position: center center; height: 100vh;">
        <h2 class="hidden">This is for the home section</h2>
        <div class="home__container container grid">
          <div class="home__social">
            <h3 class="hidden">This is for my social links</h3>
            <span class="home__social-follow">Go Home</span>
            <div class="home__social-links">
              <a href="index.php" class="home__social-link">
                <i class="ri-home-3-fill" title="Go to Home"></i>
              </a>
            </div>
          </div>
          <h3 class="hidden">This is my hero image for mobile</h3>
          <div class="home__data">
            <h3 class="hidden">This is my case study info</h3>
            <h1 class="home__title"><?php echo $row['project_name'];?></h1>
            <h3 class="home__subtitle"><?php echo $row['title'];?></h3>
            <p class="home__description">
            <?php echo $row['case_description'];?>
            </p>
            <i class="ri-arrow-down-wide-fill social__share"></i>
          </div>
        </div>
      </section>

      <section class="about section" id="problem">
        <h1 class="hidden">This is for my about me section</h1>
        <h2 data-heading="Case Study" class="section__title">
          Problem Statement
        </h2>

        <div class="about__container container grid">
          <h3 class="hidden">This is for project image</h3>
          <img src="images/pS-img.jpg" alt="" class="case__img" />

          <div class="about__data">
            <h2 class="hidden">This is for the problem brief</h2>
            <p class="about__description">
            <?php echo $row['problem_statement'];?><br><br>
            <?php echo $row['2nd_paragraph'];?>
            </p>
          </div>
        </div>
      </section>

      <section class="work section" id="role">
        <h1 class="hidden">This is for my work or project showcase section</h1>
        <h2 data-heading="Case Study" class="section__title">My Role</h2>
        <div class="about__container container grid">
          <img src="images/img-role.jpg" alt="" class="about__img" />
          <div class="about__data">
            <p class="about__description">
            <?php echo $row['role_description'];?> <br><br>
            <?php echo $row['2nd_paragraph'];?>
            </p>
          </div>
        </div>
      </section>

      <section class="services section" id="concept">
        <h1 class="hidden">This is for the services that I can offer.</h1>
        <h2 data-heading="Case Study" class="section__title">
          Project Concept
        </h2>

        <div class="about__container container grid">
          <img src="images/<?php echo $row['designconcept_img'];?>" alt="" class="about__img" />
          <div class="about__data">
            <p class="about__description">
            <?php echo $row['concepts'];?><br><br>
            </p>
          </div>
        </div>
      </section>

      <section class="skills section" id="process">
        <h1 class="hidden">
          This is for the skills and tools showcase section
        </h1>
        <h2 data-heading="Case Study" class="section__title">Design Process</h2>

        <div class="about__container container grid">
          <img src="images/<?php echo $row['dprocess_img1'];?>" alt="" class="about__img" />
          <img src="images/<?php echo $row['dprocess_img2'];?>" alt="" class="about__img" />
          <div class="about__data">
            <p class="about__description">
            <?php echo $row['design_process'];?>
            </p>
          </div>
        </div>
      </section>

      <section class="qualification section" id="deliverable">
        <h1 class="hidden">This is for the experience and education</h1>
        <h2 data-heading="Case Study" class="section__title">
          Final Deliverable
        </h2>

        <div class="about__container container grid">
          <img src="images/<?php echo $row['deliverable_img'];?>" alt="" class="about__img" />
          <div class="about__data">
            <p class="about__description">
            <?php echo $row['final_deliverable'];?>
            </p>
          </div>
        </div>
      </section>

      <footer class="footer">
        <h2 class="hidden">This is for the footer</h2>
        <div class="footer__bg">
          <div class="footer__container container grid">
            <div>
            <img
                src="images/footer-img.png"
                alt="Sheldon Logo"
                class="img__footer"
              />
            </div>

            <ul class="footer__links">
              <li>
                <a href="#services" class="footer__link">Services</a>
              </li>
              <li>
                <a href="#work" class="footer__link">Work</a>
              </li>
              <li>
                <a href="#contact" class="footer__link">Contact</a>
              </li>
            </ul>

            <div class="footer__socials">
              <a href="#" target="_blank" class="footer__social">
                <i class="ri-facebook-fill"></i>
              </a>
              <a href="#" target="_blank" class="footer__social">
                <i class="ri-github-fill"></i>
              </a>
              <a href="#" target="_blank" class="footer__social">
                <i class="ri-linkedin-fill"></i>
              </a>
            </div>
          </div>

          <p class="footer__copy">
            &#169; Sheldon P. Gohetia. All right reserved
          </p>
        </div>
      </footer>
    </main>

    <!--========== SCROLL UP ==========-->

    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
