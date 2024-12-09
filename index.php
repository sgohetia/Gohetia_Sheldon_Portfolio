<!DOCTYPE html>
<html lang="en">
<?php 
  //connect to running database server and the speicific database
  // include("includes/connect.php");
  require_once("includes/connect.php");
  //creat a query to run in SQL
  $query = 'SELECT project_id AS projects, project_name, title, description, project_image, problem_statement, role, concepts, design_process, final_deliverable, data_category, tools, case_description, class_animation, hero_image, 2nd_paragraph, designconcept_img, deliverable_img, role_description, dprocess_img1, dprocess_img2  FROM projects';
  //run the query to get back the content
  $results = mysqli_query($connect,$query);
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
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="css/main.css" />

    <title>Sheldon Gohetia - Portfolio</title>
  </head>

  <body>
    <!-- <div class="loader">
      <video class="loader__video" autoplay muted loop playsinline>
        <source src="video/pageload.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div> -->
    <h2 class="hidden">This is the menu burger for mobile</h2>
    <div class="nav__toggle" id="nav-toggle">
      <i class="ri-menu-line"></i>
    </div>
    <aside class="sidebar" id="sidebar">
      <h2 class="hidden">This is for the side bar navigation menu</h2>
      <nav class="nav">
        <div class="nav__logo">
          <h3 class="hidden">This is for my logo</h3>
          <a href="index.html"
            ><img src="images/mylogo.svg" alt="Sheldon Logo"
          /></a>
        </div>

        <div class="nav__menu">
          <h4 class="hidden">This is the menu list</h4>
          <div class="menu" id="main-header">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#home" class="nav__link active-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#about" class="nav__link">About</a>
              </li>
              <li class="nav__item">
                <a href="#work" class="nav__link">Work</a>
              </li>
              <li class="nav__item">
                <a href="#services" class="nav__link">Services</a>
              </li>
              <li class="nav__item">
                <a href="#skills" class="nav__link">Skills</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="btn__share" data-copy-url title="Copy Portfolio URL">
          <h5 class="hidden">
            This button copies the portfolio URL to the clipboard for easy
            sharing when clicked.
          </h5>
          <i class="ri-clipboard-fill social__share"></i>
        </div>

        <div class="nav__close" id="nav-close">
          <i class="ri-close-large-line"></i>
        </div>
      </nav>
    </aside>

    <main class="main">
      <section class="home" id="home">
      <div id="sheldon-code-cells"></div>
        <h2 class="hidden">This is for the home section</h2>
        <div class="home__container container grid">
          <div class="home__social">
            <h3 class="hidden">This is for my social links</h3>
            <span class="home__social-follow">Follow Me</span>
            <div class="home__social-links">
              <a href="#" target="_blank" class="home__social-link">
                <i class="ri-instagram-line"></i>
              </a>
              <a href="#" target="_blank" class="home__social-link">
                <i class="ri-github-fill"></i>
              </a>
              <a href="#" target="_blank" class="home__social-link">
                <i class="ri-linkedin-fill"></i>
              </a>
            </div>
          </div>
          <h3 class="hidden">This is my hero image for mobile</h3>
          <img
            src="images/home-img.png"
            alt="Sheldon Gohetia"
            class="home__img"
          />

          <div class="home__data">
            <h3 class="hidden">This is my intro info</h3>
            <h1 class="home__title">
              Hi, I'm <span class="fullname">Sheldon</span>
            </h1>
            <h3 class="home__subtitle">UX and Backend Developer</h3>
            <p class="home__description">
              A passionate UX and Backend Developer specializing in crafting
              intuitive user experiences and building robust, dynamic, and
              responsive websites.
            </p>
            <a href="#contact" class="button"
              ><i class="ri-user-line button__icon"></i>
              Contact Me Now
            </a>
          </div>

          <div class="my__info">
            <h3 class="hidden">This is for my contact info</h3>
            <div class="info__item">
              <i class="ri-messenger-line info__icon"></i>

              <div>
                <h3 class="info__title">Messenger</h3>
                <span class="info__subtitle">sg.fb</span>
              </div>
            </div>

            <div class="info__item">
              <i class="ri-whatsapp-line info__icon"></i>

              <div>
                <h3 class="info__title">Whatsapp</h3>
                <span class="info__subtitle">999-888-777</span>
              </div>
            </div>

            <div class="info__item">
              <i class="ri-mail-unread-line info__icon"></i>

              <div>
                <h3 class="info__title">Email</h3>
                <span class="info__subtitle">sheldongohetia.ca@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <h1 class="hidden">This is for my about me section</h1>
        <h2 data-heading="My Intro" class="section__title">About Me</h2>

        <div class="about__container container grid">
          <h3 class="hidden">This is for my demo reel</h3>
          <div class="demo-reel">
            <video
              id="player"
              class="about__img player"
              controls
              preload="metadata"
              muted
              poster="images/thumbnail.jpg"
            >
              <source src="video/mydemo-reel.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="about__data">
            <h2 class="hidden">This is for my about me intro</h2>
            <h3 class="about__heading">
              Hi, I'm <span class="fullname">Sheldon Gohetia</span>
            </h3>
            <p class="about__description">
              I'm a UX and Backend Developer with over 5 years of experience,
              dedicated to delivering seamless digital solutions. Combining a
              passion for intuitive design and efficient functionality, I create
              user-friendly interfaces and robust backend systems that enhance
              engagement. From concept to deployment, I prioritize details that
              elevate brands and ensure impactful user experiences.
            </p>
            <div class="about__info grid">
              <h4 class="hidden">
                This is to showcase my years of experience, number of projects
                and activeness
              </h4>
              <div class="about__box">
                <i class="ri-award-fill about__icon"></i>
                <h3 class="about__title">Experience</h3>
                <span class="about__subtitle">5 + Years</span>
              </div>

              <div class="about__box">
                <i class="ri-suitcase-fill about__icon"></i>
                <h3 class="about__title">Completed</h3>
                <span class="about__subtitle">10 + Projects</span>
              </div>

              <div class="about__box">
                <i class="ri-phone-fill about__icon"></i>
                <h3 class="about__title">Contact Me</h3>
                <span class="about__subtitle">Anytime</span>
              </div>
            </div>
            <a
              href="document/Sheldon_Gohetia_Resume.pdf"
              class="button"
              download="sgohetia_resume.pdf"
              ><i class="ri-file-fill button__icon"></i>
              Download CV
            </a>
          </div>
        </div>
      </section>

      <section class="work section" id="work">
        <h1 class="hidden">This is for my work or project showcase section</h1>
        <h2 data-heading="My Portfolio" class="section__title">
          Featured Projects
        </h2>

        <div class="work__filters">
          <h3 class="hidden">This is for the filter feature.</h3>
          <span class="work__item active-work" data-filter="all">All</span>
          <span class="work__item" data-filter="backend">Backend</span>
          <span class="work__item" data-filter="design">UI/UX</span>
          <span class="work__item" data-filter="motion">Motion</span>
        </div>

        <div class="work__container container grid">
        <?php
            while($row = mysqli_fetch_array($results)) {
            echo'    
            <h3 class="hidden">This is for the projects content.</h3>
            <div class="work__card mix '.$row['class_animation'].'" data-category="'.$row['data_category'].'">
              <img src="images/'.$row['project_image'].'" alt="" class="work__img" />
                <h3 class="work__title">'.$row['title'].'</h3>
                  <span class="work__button">View Details
                    <i class="ri-arrow-right-line work__button-icon"></i>
                  </span>
                <div class="portfolio__item-details">
                  <h3 class="details__title">'.$row['project_name'].'</h3>
                  <p class="details__description">
                    '.$row['description'].'
                  </p>
                  <ul class="details__info">
                    <li>Tools - <span>'.$row['tools'].'</span></li>
                    <li>Role - <span>'.$row['role'].'</span></li>
                    <li>
                      View - <span><a href="casestudy.php?id='.$row['projects'].'">Case Study</a></span>
                    </li>
                  </ul>
                </div>
              </div>';
            }
          ?>
        </div>
      </section>

      <div class="portfolio__popup">
        <h2 class="hidden">This is for the popup window or modal.</h2>
        <div class="portfolio__popup-inner">
          <div class="portfolio__popup-content grid">
            <span class="portfolio__popup-close"
              ><i class="ri-close-large-line"></i
            ></span>
            <div class="pp__thumbnail">
              <img
                src="images/work-2.jpg"
                alt=""
                class="portfolio__popup-img"
              />
            </div>
            <div class="portfolio__popup-info">
              <div class="portfolio__popup-subtitle">
                Featured - <span>Design</span>
              </div>
              <div class="portfolio__popup-body">
                <h3 class="details__title">App for tecnology and services</h3>
                <p class="details__description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Earum impedit voluptatibus minima.
                </p>
                <ul class="details__info">
                  <li>Created - <span>4 dec 2020</span></li>
                  <li>Tools - <span>html css</span></li>
                  <li>Role - <span>frontend</span></li>
                  <li>
                    View - <span><a href="casestudy.html">case study</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="services section" id="services">
        <h1 class="hidden">This is for the services that I can offer.</h1>
        <h2 data-heading="Services" class="section__title">What I Offer</h2>

        <div class="services__container container grid">
          <h3 class="hidden">This is for the service content</h3>
          <div class="services__content">
            <div>
              <i class="ri-layout-grid-fill services__icon"></i>
              <h3 class="services__title">
                Motion <br />
                Design
              </h3>
            </div>

            <span class="services__button">
              View Details
              <i class="ri-arrow-right-line services__button-icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <i class="ri-close-large-line services__modal-close"></i>

                <h3 class="services__modal-title">Motion Design</h3>
                <p class="services__modal-description">
                  Creative motion designer with over a year of experience in
                  crafting dynamic animations and visuals that bring ideas to
                  life.
                </p>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">Logo Animation.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">Background Animations.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">UI/UX Animation.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">Product Demo Videos.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Video Editing and Motion Enhancements.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">Infographic Animation.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">Character Animation.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      3D Animation and Motion Graphics.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">Interactive Animations.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services__content">
            <div>
              <i class="ri-expand-left-right-line services__icon"></i>
              <h3 class="services__title">
                Backend <br />
                Development
              </h3>
            </div>

            <span class="services__button">
              View Details
              <i class="ri-arrow-right-line services__button-icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <i class="ri-close-large-line services__modal-close"></i>

                <h3 class="services__modal-title">Backend Development</h3>
                <p class="services__modal-description">
                  Experienced backend developer with over 3 years in building
                  robust, scalable server-side applications.
                </p>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Backend Performance Optimization.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Payment Gateway Integration.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Content Management System (CMS) Development.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Database Migration and Maintenance.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Database Design and Management.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      API Development and Integration.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services__content">
            <div>
              <i class="ri-image-edit-fill services__icon"></i>
              <h3 class="services__title">
                UI/UX <br />
                Design
              </h3>
            </div>

            <span class="services__button">
              View Details
              <i class="ri-arrow-right-line services__button-icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <i class="ri-close-large-line services__modal-close"></i>

                <h3 class="services__modal-title">UI/UX Design</h3>
                <p class="services__modal-description">
                  Experienced UI/UX designer with over 5 years of expertise in
                  creating user-centered, visually engaging digital experiences.
                </p>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Wireframing and Prototyping.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Responsive and Adaptive Design.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      User Research and Analysis.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Interaction Design and Animation.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Usability Testing and Iteration.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Design System and Style Guide Creation.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      Brand Identity and Visual Design.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      UI/UX Consultation and Strategy.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="ri-checkbox-fill services__modal-icon"></i>
                    <p class="services__modal-info">
                      User Interface (UI) Design and User Experience (UX)
                      Design.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="skills section" id="skills">
        <h1 class="hidden">
          This is for the skills and tools showcase section
        </h1>
        <h2 data-heading="My Abilities" class="section__title">My Expertise</h2>

        <div class="skills__container container grid">
          <div class="skills__tabs">
            <div class="skills__header skills__active" data-target="#design">
              <i class="ri-image-edit-fill skills__icon"></i>

              <div>
                <h1 class="skills__title">UI/UX designer</h1>
                <span class="skills__subtitle">More than 5 years</span>
              </div>

              <i class="ri-arrow-down-s-line skills__arrow"></i>
            </div>

            <div class="skills__header" data-target="#backend">
              <i class="ri-expand-left-right-line skills__icon"></i>

              <div>
                <h1 class="skills__title">Backend developer</h1>
                <span class="skills__subtitle">More than 3 years</span>
              </div>

              <i class="ri-arrow-down-s-line skills__arrow"></i>
            </div>

            <div class="skills__header" data-target="#digital">
              <i class="ri-artboard-fill skills__icon"></i>

              <div>
                <h1 class="skills__title">Digital Artist</h1>
                <span class="skills__subtitle">More than 4 years</span>
              </div>

              <i class="ri-arrow-down-s-line skills__arrow"></i>
            </div>

            <div class="skills__header" data-target="#motion">
              <i class="ri-box-3-fill skills__icon"></i>

              <div>
                <h1 class="skills__title">Motion designer</h1>
                <span class="skills__subtitle">More than 1 years</span>
              </div>

              <i class="ri-arrow-down-s-line skills__arrow"></i>
            </div>
          </div>

          <div class="skills__content">
            <h3 class="hidden">This is for the tools Icon content</h3>
            <div class="skills__group skills__active" data-content id="design">
              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="icon__logo">
                    <img src="images/html-1.svg" alt="html" />
                    <img src="images/css-3.svg" alt="css" />
                    <img src="images/tailwind-css-2.svg" alt="tailwind" />
                    <img src="images/sass-1.svg" alt="sass" />
                    <img src="images/logo-javascript.svg" alt="JavaScript" />
                    <img src="images/photoshop.svg" alt="Photoshop" />
                    <img
                      src="images/adobe-illustrator-cc-3.svg"
                      alt="Illustrator"
                    />
                    <img src="images/figma-icon.svg" alt="figma" />
                    <img src="images/adobe-xd-2.svg" alt="adobe-xd" />
                  </div>
                </div>
              </div>
            </div>

            <div class="skills__group" data-content id="backend">
              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="icon__logo">
                    <img src="images/php.svg" alt="Php" />
                    <img src="images/mysql.svg" alt="MySQL" />
                    <img src="images/c--4.svg" alt="C#" />
                  </div>
                </div>
              </div>
            </div>

            <div class="skills__group" data-content id="digital">
              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="icon__logo">
                    <img src="images/procreate.svg" alt="procreate" />
                    <img src="images/photoshop.svg" alt="Photoshop" />
                    <img
                      src="images/adobe-illustrator-cc-3.svg"
                      alt="Illustrator"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="skills__group" data-content id="motion">
              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="icon__logo">
                    <img src="images/procreate.svg" alt="procreate" />
                    <img src="images/cinema4d.svg" alt="cinema4d" />
                    <img src="images/after-effects.svg" alt="After Effects" />
                    <img src="images/premiere-pro.svg" alt="Premier" />
                    <img src="images/blender-2.svg" alt="blender" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="qualification section">
        <h1 class="hidden">This is for the experience and education</h1>
        <h2 data-heading="My Journey" class="section__title">Qualification</h2>

        <div class="qualification__container container grid">
          <div class="experience">
            <h3 class="qualification__title">
              <i class="ri-suitcase-line"></i> Experience
            </h3>

            <div class="timeline">
              <div class="timeline__item">
                <div class="circle__dot"></div>
                <h3 class="timeline__title">NCR ATLEOS, Philippines</h3>
                <p class="timeline__text">
                  Firmware Hardware System Integration Engineer
                </p>
                <span class="timeline__date"
                  ><i class="ri-calendar-2-line"></i>
                  2022 - 2023
                </span>
              </div>

              <div class="timeline__item">
                <div class="circle__dot"></div>
                <h3 class="timeline__title">
                  Southern Leyte State University, Philippines
                </h3>
                <p class="timeline__text">Part-time Computer Professor</p>
                <span class="timeline__date"
                  ><i class="ri-calendar-2-line"></i>
                  2021 - 2022
                </span>
              </div>

              <div class="timeline__item">
                <div class="circle__dot"></div>
                <h3 class="timeline__title">
                  Paynamics Technologies Inc., Philippines
                </h3>
                <p class="timeline__text">
                  Web designer and Customer Integration System Support
                </p>
                <span class="timeline__date"
                  ><i class="ri-calendar-2-line"></i>
                  2015 - 2019
                </span>
              </div>
            </div>
          </div>

          <div class="education">
            <h3 class="qualification__title">
              <i class="ri-graduation-cap-line"></i> Education
            </h3>

            <div class="timeline">
              <div class="timeline__item">
                <div class="circle__dot"></div>
                <h3 class="timeline__title">
                  Fanshawe College, London ON Canada
                </h3>
                <p class="timeline__text">Interactive Media Design</p>
                <span class="timeline__date"
                  ><i class="ri-calendar-2-line"></i>
                  2024 - Present
                </span>
              </div>

              <div class="timeline__item">
                <div class="circle__dot"></div>
                <h3 class="timeline__title">
                  University of Cebu main campus, Philippines
                </h3>
                <p class="timeline__text">
                  Bachelor of Science in Computer Engineering
                </p>
                <span class="timeline__date"
                  ><i class="ri-calendar-2-line"></i>
                  2011 - 2015
                </span>
              </div>

              <div class="timeline__item">
                <div class="circle__dot"></div>
                <h3 class="timeline__title">
                  Technical Education and Skills Development Authority,
                  Philippines
                </h3>
                <p class="timeline__text">
                  National Certificate in Computer System Servicing
                </p>
                <span class="timeline__date"
                  ><i class="ri-calendar-2-line"></i>
                  2022 - 2027
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials section">
        <h1 class="hidden">This is for the clients feedback</h1>
        <h2 data-heading="My clients feedback" class="section__title">
          Testimonials
        </h2>
        <div class="testimonials__container container">
          <div class="testimonials__wrapper">
            <div class="testimonial__card t-card1">
              <div class="testimonial__quote">
                <i class="bx bxs-quote-alt-left"></i>
              </div>
              <p class="testimonial__description">
                Working with Sheldon was a game-changer! The website is not just
                visually stunning but incredibly user-friendly. Our customers
                love the new interface!
              </p>
              <h3 class="testimonial__date">October 22, 2024</h3>
              <div class="testimonial__profile">
                <img
                  src="images/m-fb.jpg"
                  alt=""
                  class="testimonial__profile-img"
                />

                <div class="testimonial__profile-data">
                  <span class="testimonial__profile-name"
                    >Mark Elliot Zuckerberg</span
                  >
                  <span class="testimonial__profile-detail"
                    >CEO of the Meta Platforms, Inc. (formerly Facebook,
                    Inc.)</span
                  >
                </div>
              </div>
            </div>

            <div class="testimonial__card t-card2">
              <div class="testimonial__quote">
                <i class="bx bxs-quote-alt-left"></i>
              </div>
              <p class="testimonial__description">
                The animations Sheldon created brought our brand to life! The
                attention to detail and creativity were beyond impressive.
                Absolutely thrilled with the outcome!
              </p>
              <h3 class="testimonial__date">November 13, 2024</h3>
              <div class="testimonial__profile">
                <img
                  src="images/musk.jpg"
                  alt=""
                  class="testimonial__profile-img"
                />

                <div class="testimonial__profile-data">
                  <span class="testimonial__profile-name">Elon Reeve Musk</span>
                  <span class="testimonial__profile-detail"
                    >Serial Entrepreneur and CEO across multiple ventures</span
                  >
                </div>
              </div>
            </div>

            <div class="testimonial__card t-card2">
              <div class="testimonial__quote">
                <i class="bx bxs-quote-alt-left"></i>
              </div>
              <p class="testimonial__description">
                Sheldon delivered a seamless, reliable backend solution that's
                optimized our processes. Fast, efficient, and always on
                point—couldn't be happier with the results!
              </p>
              <h3 class="testimonial__date">September 7,2024</h3>
              <div class="testimonial__profile">
                <img
                  src="images/jensen.jpg"
                  alt=""
                  class="testimonial__profile-img"
                />

                <div class="testimonial__profile-data">
                  <span class="testimonial__profile-name"
                    >Jen-Hsun "Jensen" Huang</span
                  >
                  <span class="testimonial__profile-detail"
                    >CEO of the NVIDIA Corporation</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="pagination">
            <button class="prev">Prev</button>
            <button class="next">Next</button>
          </div>
        </div>
      </section>

      <section class="contact section" id="contact">
        <h1 class="hidden">This is for the contact section</h1>
        <h2 data-heading="Get in touch" class="section__title">Contact Me</h2>

        <div class="contact__container container grid">
          <div class="contact__content">
            <div class="contact__info">
              <div class="contact__card c-email">
                <i class="ri-mail-unread-line contact__card-icon"></i>
                <h3 class="contact__card-title">Email</h3>
                <span class="contact__card-data"
                  >sheldongohetia.ca@gmail.com</span
                >
                <a href="mailto:sheldongohetia.ca@gmail.com" class="contact__button">
                  Email me
                  <i class="ri-arrow-right-line contact__button-icon"></i>
                </a>
              </div>

              <div class="contact__card c-whatsapp">
                <i class="ri-whatsapp-line contact__card-icon"></i>
                <h3 class="contact__card-title">Whatsapp</h3>
                <span class="contact__card-data">999-888-777</span>
                <a
                  href="#"
                  class="contact__button"
                >
                  Call me
                  <i class="ri-arrow-right-line contact__button-icon"></i>
                </a>
              </div>

              <div class="contact__card c-msgr">
                <i class="ri-messenger-line contact__card-icon"></i>
                <h3 class="contact__card-title">Messenger</h3>
                <span class="contact__card-data">sg.fb</span>
                <a href="#" class="contact__button">
                  Message me
                  <i class="ri-arrow-right-line contact__button-icon"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="contact__content">
            <form method="post" action="sendmail.php" class="contact__form">
              <div class="input__container i-user">
                <input type="text" class="input" name="name" id="name"/>
                <label for="name">Username</label>
                <span>Username</span>
              </div>
              <div class="input__container i-email">
                <input type="email" class="input" name="email" id="email"/>
                <label for="email">Email</label>
                <span>Email</span>
              </div>
              <div class="input__container i-phone">
                <input type="tel" class="input" name="phone" id="phone"/>
                <label for="phone">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input__container textarea">
                <textarea name="comments" id="comments" class="input"></textarea>
                <label for="comments">Message</label>
                <span>Message</span>
              </div>
              <button type="submit" class="button i-btn" value="send">
                <i class="uil uil-navigator button__icon"></i>
                Send Message
              </button>
            </form>
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
                <i class="ri-instagram-line"></i>
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

    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
