<?php include "./dashboard/z_db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>

  <link href="./assets/css/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/footer_2.css" />
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/secondsection.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-... ">
  </link>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
  <!-- slick Carousel CDN -->
  <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>


  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> -->
</head>

<body id="body" onscroll="handleScroll()" onresize="handleResize()">
  <!-- -----------------------------------------------first Section (Visible Navbar)---------------------------------------------------------------- -->
  <div class="firstSec">
    <!-- -----------------------------------------------------Navbar Header part---------------------------------------------------------------------- -->
    <div class="firstSectionContainer" id="firstSectionContainer">
      <h1 class="DigitusLogo">
        <a href="index.php"><img src="./assets/digituslogo/mainlogo.png" class="logoImage" alt="Digitus" /></a>
      </h1>

      <div class="bx bx-menu" id="menu-icon"></div>
<ul class="navmenu">
  <li>
    <a class="factLinkContainer" href="#"></a>
  </li>
  <li>
    <div class="addOption" onmouseover="showDropdown()">
      <span onmouseleave="hideDropdown()" class="navBarOpt">Services</span>
      <div onmouseleave="hideDropdown()" id="dropdown1" class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl">
        <div class="dropdownvisible">
          <div class="dropdiv">
              <div class="dropdownheading">
               <span >Diverse digital solutions for businesses: software, IT, marketing, and more.</span>
              </div>
              <div class="dropdownlist">
                <a style="text-decoration: none" href="edi.php">
                  <div class="yellowColorFontThird">EDP</div>
                </a>
                <a style="text-decoration: none" href="edp.php">
                  <div class="yellowColorFontThird">EDI</div>
                </a>
                <a style="text-decoration: none" href="cx.php">
                  <div class="yellowColorFontThird">CX</div>
                </a>
                <a style="text-decoration: none" href="bi.php">
                  <div class="yellowColorFontThird">BI</div>
                </a>
              </div>
           </div>
        </div>
      </div>
    </div>
  </li>
  <li>
<div class="addOption" id="firstDropdownButton" onmouseover="showDropdown2()">
  <span onmouseleave="hideDropdown2()" class="navBarOpt">Expertise</span>
  <div onmouseleave="hideDropdown2()" id="dropdown2" class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl">
    <div class="dropdownvisible">
      <div class="dropdiv">
        <div class="dropdownheading">
          <span >Diverse digital solutions for businesses: software, IT, marketing, and more.</span>
        </div>
        <div class="dropdownlist">
          <a style="text-decoration: none" href="technology.php">
            <div class="yellowColorFontThird">Technology</div>
          </a>
          <a style="text-decoration: none" href="partnership.php">
            <div class="yellowColorFontThird">Partnership</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

  </li>
  <li>
    <div class="addOption">
      <a style="text-decoration: none;color:inherit" href="solution.php">
      <span class="navBarOpt">Accelerators</span>
</a>
    </div>
  </li>
  <li>
    <div class="addOption">
      <span class="navBarOpt">People</span>
    </div>
  </li>
  <li>
    <div class="addOption">
      <span class="navBarOpt">About Us</span>
    </div>
  </li>
  <li>
    <div class="addOption">
      <span class="navBarOpt">Contact Us</span>
    </div>
  </li>
</ul>

    </div>

    
    <!-- ----------------------------------------------------------------------Header main body------------------------------------------------- -->
    <div class="header_main_body">

      <div class="header_main_body_part1">
        <!-- <div
            data-aos="fade-down"
            data-aos-duration="1500"
            class="header_main_body_logo2"
          
            <img
              alt="ISO 27001 Logo"
              src="./assets/Hubtimize/iso-27001_white.webp"
              width="160"
              height="74"
              decoding="async"
              data-nimg="1"
              class="header_main_body_logo3"
              loading="lazy"
              style="color: transparent"
            />
          </div> -->

        <?php
        $q = "SELECT * FROM  static ORDER BY id DESC";


        $r123 = mysqli_query($con, $q);

        while ($ro = mysqli_fetch_array($r123)) {

          $id = "$ro[id]";
          $slide_title = "$ro[stitle]";
          $stext = "$ro[stext]";


          print "
				 <h1
          data-aos='fade-up'
          data-aos-easing='ease-in-out-cubic'
          class='header_main_body_heading'
        >
           $slide_title
        </h1>
        <h2
          data-aos='fade-up'
          data-aos-duration='1500'
          class='header_main_body_heading_two'
        >
       $stext
        </h2>
          
          ";
        }
        ?>




        <section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
          <div class="header_main_body_photos slider">


            <?php
            $q = "SELECT * FROM tools ORDER BY id DESC";
            $r123 = mysqli_query($con, $q);

            while ($ro = mysqli_fetch_array($r123)) {
              $id = $ro['id'];
              $name = $ro['name'];
              $ufile = ($ro['ufile']); // Use trim to remove leading and trailing whitespaces

              // Assuming that 'uploads/testimony/' is the correct path, adjust it if needed
              $filePath = "./dashboard/uploads/testimony/" . $ufile;

              if (file_exists($filePath)) {
                print '
            <div class="header_main_body_photos_include slide-in-right slide">
                <img alt="Logo Generix Group Blanc" src="' . $filePath . '" decoding="async" data-nimg="1" loading="lazy" style="color: transparent" />
            </div>';
              } else {
                print 'Image not found: ' . $filePath;
              }
            }
            ?>



            <!-- <div class="header_main_body_photos_include slide-in-right slide">
              <img alt="Logo Generix Group Blanc" src="./assets/images/Oracle_logo.svg.png" decoding="async" data-nimg="1" loading="lazy" style="color: transparent" />
            </div>
            <div class="header_main_body_photos_include slide-in-right slide">
              <img alt="Logo Generix Group Blanc" src="./assets/images/Liferay-logo-full-color-2x.png" decoding="async" data-nimg="1" loading="lazy" style="color: transparent" />
            </div>
            <div class="header_main_body_photos_include slide-in-right slide">
              <img alt="Logo Generix Group Blan" src="./assets/images/power-bi_logo.webp" decoding="async" data-nimg="1" loading="lazy" style="color: transparent" />
            </div>
            <div class="header_main_body_photos_include slide-in-right slide">
              <img alt="Logo Generix Group Blanc " src="./assets/images/PTC_Windchill.png" decoding="async" data-nimg="1" loading="lazy" style="color: transparent" />
            </div> -->
          </div>
        </section>
        <script>
          $(document).ready(function() {
            $('.header_main_body_photos').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 1500,
              arrows: false,
              dots: false,
              pauseOnHover: false,
              prevArrow: false,
              nextArrow: false,
              responsive: [{
                breakpoint: 768,
                settings: {
                  slidesToShow: 3
                }
              }, {
                breakpoint: 520,
                settings: {
                  slidesToShow: 2
                }
              }]
            });
          });
        </script>





      </div>
      <div class="digitusBackgroundglobe">
        <img alt="Globe" data-aos="fade-up" data-aos-duration="800" src="./assets/digituslogo/colorlogoball.png" class="digitusBackgroundglobe_image">
      </div>
    </div>



  </div>
  <!-- ----------------------------------------------- First Section Visible Navbar End Here---------------------------------------------- -->
  <!-- ---------------------------------------------------------Hidden Navbar for mobile device-------------------------------------------------------------- -->
  <div class="hidden_Navbar">
    <div data-aos="zoom-in-up" data-aos-duration="900" class="hidden_Navbar_firstSectionContainer" id="hidden_Navbar_firstSectionContainer">
      <div id="hidden_Navbar_menu-icon">
        <div class="bx bx-menu bx-x"></div>
      </div>

      <h1 class="hidden_Navbar_DigitusLogo">
        <a href="index.php"><img src="./assets/images/mainlogo.png" class="hiddenlogoImage" alt="Digitus" /></a>
      </h1>

      <div class="hidden_navmenu">
        <ul class="hidden_navmenu-ul">
          <li>
            <button id="button_expertise" class="hidden_Navbar_button">
              <a href="#">Services</a>
              <i class="fa fa-caret-down hidden_Navbar_drop_icon" aria-hidden="true"></i>
            </button>
            <div id="dropdown_expertise" class="dropdown_division">
                <ul class="dropdown_unorderedlist">
             
                <a style="text-decoration: none; color: orange" href="edi.php">
                  <li class="yellowColorFontThird">EDP</li>
                </a>
                <a style="text-decoration: none; color: orange" href="edp.php">
                  <li class="yellowColorFontThird">EDI</li>
                </a>
                <a style="text-decoration: none; color: orange" href="cx.php">
                  <li class="yellowColorFontThird">CX</li>
                </a>
                <a style="text-decoration: none; color: orange" href="bi.php">
                  <li class="yellowColorFontThird">BI</li>
                </a>
              </ul>
            </div>
          </li>

          <li>
            <button id="button_solution" class="hidden_Navbar_button">
              <a href="#">Expertise</a>
              <i class="fa fa-caret-down hidden_Navbar_drop_icon" aria-hidden="true"></i>
            </button>
            <div id="dropdown_solution" class="dropdown_division">
                <ul class="dropdown_unorderedlist">

                <a style="text-decoration: none; color: orange" href="edi.php">
                  <li class="yellowColorFontThird">Technology</li>
                </a>
                <a style="text-decoration: none; color: orange" href="edp.php">
                  <li class="yellowColorFontThird">Partnership</li>
                </a>
               
              </ul>
            </div>
          </li>

          <li>
            <button class="hidden_Navbar_button" disabled>
              <a href="blog.php"> Accelators</a>
            </button>
          </li>

          <li>
            <button class="hidden_Navbar_button" disabled>
              <a href="blog.php"> People</a>
            </button>
          </li>
            <li>
            <button class="hidden_Navbar_button" disabled>
              <a href="blog.php"> About Us</a>
            </button>
          </li>
            <li>
            <button class="hidden_Navbar_button" disabled>
              <a href="blog.php"> Contact Us</a>
            </button>
          </li>
        </ul>
      </div>

      <div class="getDemoButton">
        <a href="contact.php" style="text-decoration: none">
          Get Demo
        </a>
      </div>

      <div class="hidden_Navbar_fropt">
        <select name="cars" id="cars" style="border: none">
          <option value="volvo">En</option>
          <option value="saab">Fr</option>
          <option value="mercedes">Tr</option>
        </select>
      </div>
    </div>
  </div>

  <!-- -------------------------------------------------------------------hidden Navbar End Here-------------------------------------------------------------------- -->
  <!-- -------------------------------------------------------------------second Section part here------------------------------------------------------------------ -->
  <div class="secondSection">
    <div class="secondHeader" data-aos="zoom-in-up" data-aos-duration="900">
      Speed up your <span class="yellowFont">flows</span>
    </div>
    <div class="secondBodyContainer" data-aos="fade-up" data-aos-duration="900">
      <div class="secCircleCont">
        <img id="circleImg" src="./assets/images/IMAGES/circle.png" alt="" />
      </div>
      <div class="secondSecDescriptionContainer" data-aos="fade-up" data-aos-duration="900">
        <div class="descHeaderSec">
          We support you in all stages of your dematerialization projects
        </div>
        <div class="secHrCont">
          <hr class="secHr" />
        </div>
        <div class="secDescSec" onclick="showCircleDiv('secDesc1')">
          <?php
          $query = "SELECT * FROM  speedflow where id='1' ";
          $result = mysqli_query($con, $query);

          while ($row = mysqli_fetch_array($result)) {
            $port_title1 = "$row[port_title]";
            $port_detail1 = "$row[port_detail]";
          }

          print '<div class="secDescHeader">' . $port_title1 . '</div>'; ?>
          <div class="secondCircleDesc activeCircle" id="secDesc1">
            <?php print '<div class="secDescText">' . $port_detail1 . '</div>';
            ?>
            <div class="circleButtonCont">
              <button>Initiating an EDI project</button>
            </div>
          </div>
        </div>
        <div class="secHrCont">
          <hr class="secHr" />
        </div>
        <div class="secDescSec" onclick="showCircleDiv('secDesc2')">
          <?php
          $query = "SELECT * FROM  speedflow where id='2' ";
          $result = mysqli_query($con, $query);

          while ($row = mysqli_fetch_array($result)) {
            $port_title2 = "$row[port_title]";
            $port_detail2 = "$row[port_detail]";
          }

          print '<div class="secDescHeader">' . $port_title2 . '</div>'; ?>
          <div class="secondCircleDesc" id="secDesc2">

            <?php print '<div class="secDescText">' . $port_detail2 . '</div>';
            ?>
            <div class="circleButtonCont">
              <button>Get Support</button>
            </div>
          </div>
        </div>
        <div class="secHrCont">
          <hr class="secHr" />
        </div>
        <div class="secDescSec" onclick="showCircleDiv('secDesc3')">
          <?php
          $query = "SELECT * FROM  speedflow where id='3' ";
          $result = mysqli_query($con, $query);

          while ($row = mysqli_fetch_array($result)) {
            $port_title3 = "$row[port_title]";
            $port_detail3 = "$row[port_detail]";
          }

          print '<div class="secDescHeader">' . $port_title3 . '</div>'; ?>
          <div class="secondCircleDesc" id="secDesc3">
            <?php print '<div class="secDescText">' . $port_detail3 . '</div>';
            ?>

            <div class="circleButtonCont">
              <button>Find your EDI solution</button>
            </div>
          </div>
        </div>
        <div class="secHrCont">
          <hr class="secHr" />
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------------corousal customer part-----------------------------------------------------  -->
  <div class="buildingCorousalConatiner" data-aos="fade-up" data-aos-duration="900">
    <div class="corusalHeaderAndCorusalContainer" data-aos="fade-up" data-aos-duration="900">
      <div class="corousalContainerHeader">
        Customers who already trust our EDI services
      </div>
    </div>
    <div>
      <div class="carousel-container">
        <div class="carousel">
          <div class="carousel-inner">
            <?php
            $q = "SELECT * FROM customer ORDER BY id DESC";
            $r123 = mysqli_query($con, $q);

            while ($ro = mysqli_fetch_array($r123)) {
              $id = $ro['id'];
              $name = $ro['name'];
              $ufile = ($ro['ufile']); // Use trim to remove leading and trailing whitespaces

              // Assuming that 'uploads/testimony/' is the correct path, adjust it if needed
              $filePath = "./dashboard/uploads/testimony/" . $ufile;

              if (file_exists($filePath)) {
                print '
            <div class="carousel-item">
                <img class="carousel-image" src="' . $filePath . '" alt="Image 1" />
            </div>';
              } else {
                print 'Image not found: ' . $filePath;
              }
            }
            ?>




            <!-- </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img2.svg" alt="Image 2" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img1.svg" alt="Image 3" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img4.webp" alt="Image 4" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img5.webp" alt="Image 5" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img6.webp" alt="Image 6" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img7.svg" alt="Image 7" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img8.svg" alt="Image 8" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img9.webp" alt="Image 9" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img10.webp" alt="Image 10" />
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img11.webp" alt="Image 11" />
            </div> -->

            <!-- Add more carousel items here for a total of 10 -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------------Main Page Hubtimize Part-----------------------------------------------------  -->

  <div class="navSecondSection">
    <div class="headerForHybtimize" data-aos="fade-up" data-aos-duration="400">
      <h1 class="discoverHeader">
        Discover <span style="color: #ee7752">HUBTIMIZE® </span>
      </h1>
    </div>
    <h2 class="discoverHeaderDesc" data-aos="fade-up" data-aos-duration="200">
      THE LATEST CLOUD SOLUTION AT THE HEART OF YOUR BUSINESS
    </h2>

    <span class="learnMoreButton" data-aos="fade-up" data-aos-duration="200">Learn more</span>
    <div class="laptopBackgroundContainer">
      <div class="nonScreenTextCont" data-aos="slide-right" data-aos-duration="900">
        <div class="gradientHeader">HUBTIMIZE</div>
        <div class="gradSubHead">Trade OptimizeR</div>
        <div class="gradSubHead">Solution All-in-One</div>
        <div class="gradSubHead">100% Saas</div>
        <div class="gradSubHead">E-invoice</div>
        <div class="gradSubHead">EDI</div>

        <div>
          <img class="gradEsa" src="./assets/images/mainlogo.png" alt="" />
        </div>
        <div class="discroverButton">Discover Hubtimize®</div>
      </div>
      <div class="screenImageCont" data-aos="zoom-in-up" data-aos-duration="900" style="width: 70%">
        <img class="screenImage" src="./assets/images/screens_3500x1500.webp" alt="" />
      </div>
    </div>
    <div class="innvationSection">
      <div class="innnovationHeader" data-aos="fade-up" data-aos-duration="400">
        Why you should choose <span class="yellowColorFont">Digitus?</span>
      </div>
      <div class="innovationDesc" data-aos="fade-up" data-aos-duration="400">
        A B2B integration solution that combines cutting-edge technologies
        with user experience.
      </div>
      <div class="requestBtn" data-aos="zoom-in" data-aos-duration="900">
        REQUEST A DEMO
      </div>
      <div class="gridItemsForInnov" data-aos="zoom-in" data-aos-duration="900">
        <div class="rightAlignedPadded bottomLine">
          <div class="headerGridInnov rightSide blue">Design</div>
          <div class="gridDescription rightSide">
            A modern and intuitive interface combining <br />
            efficiency and simplicity.
          </div>
        </div>
        <div class="bottomLine">
          <div class="headerGridInnov red">Implementation</div>
          <div class="gridDescription">
            A tailor-made use that fully meets your needs.
          </div>
        </div>
        <div class="rightAlignedPadded">
          <div class="headerGridInnov rightSide blue">EDI Management</div>
          <div class="gridDescription rightSide">
            A powerful operating core
          </div>
        </div>
        <div>
          <div class="headerGridInnov red">B2B Integration</div>
          <div class="gridDescription">Flawless data protection.</div>
        </div>
      </div>
    </div>
    <div class="thirdSectionMajorContainer">
      <div class="headerContainerThird">
        <span class="yellowColorFont" data-aos="fade-up" data-aos-duration="900">HUBTIMIZE®</span>
        was specially designed based on direct feedback from EDI users.
      </div>
      <div class="thirdCardSecContainer" data-aos="zoom-in" data-aos-duration="900">
        <div class="cardsForThirdSection">
          <div class="iconContThird">
            <img class="thirdCardIcons" src="./assets/images/IMAGES/searchIcon.png" alt="" />
          </div>
          <div class="headerContThird">R&D Innovation</div>
          <div class="descriptionCardCont">
            HUBTIMIZE® was developed by experts in their fields and listening
            to the latest user requirements.
          </div>
        </div>
        <div class="cardsForThirdSection" data-aos="zoom-in" data-aos-duration="900">
          <div class="iconContThird">
            <img class="thirdCardIcons" src="./assets/images/IMAGES/pencilIcon.png" alt="" />
          </div>
          <div class="headerContThird">User experience</div>
          <div class="descriptionCardCont">
            A modern and intuitive interface, usable by both technical and
            non-technical profiles. All the information at your fingertips in
            just a few clicks. Technical support accessible live thanks to the
            integrated chat.
          </div>
        </div>
        <div class="cardsForThirdSection" data-aos="zoom-in" data-aos-duration="900">
          <div class="iconContThird">
            <img class="thirdCardIcons" src="./assets/images/IMAGES/clockIcon.png" alt="" />
          </div>
          <div class="headerContThird">High availability</div>
          <div class="descriptionCardCont">
            A robust solution co-developed with IBM and hosted on AWS.
            HUBTIMIZE® offers you the highest standards of performance and
            safety thanks to certified cutting-edge technologies. Foolproof
            high availability.
          </div>
        </div>
      </div>
    </div>

    <div class="fourthSectionContainer">
      <div class="forthHeaderContainer">
        <div class="first4thHeader">A single platform</div>
        <div class="secHeader4th">
          <span class="yellowColorFont">HUBTIMIZE</span> B2B Solution
        </div>
        <div class="fourthSubheaderCont">
          <div>
            Automate – make reliable – accelerate your B2B and B2G exchanges.
          </div>
          <div>Reduce errors – delays – costs</div>
        </div>
      </div>
      <div class="circleContainer">
        <div class="circleSectionCards" data-aos="fade-down" data-aos-duration="900">
          <div class="circleForIcons greenBack">
            <img class="fourthIconContainer" src="./assets/images/IMAGES/books.svg" alt="" />
          </div>
          <div class="cardDetailsContainer" data-aos="fade-up" data-aos-duration="900">
            <div class="detailsHeader">E-invoicing</div>
            <div class="detailsDesc">
              Electronic invoicing and archiving in compliance with legal
              requirements.
            </div>
            <span class="learnMoreBtn"> Learn More </span>
          </div>
        </div>
        <div class="circleSectionCards" data-aos="fade-down" data-aos-duration="900">
          <div class="circleForIcons yellowBack">
            <img class="fourthIconContainer" src="./assets/images/IMAGES/buildings.svg" alt="" />
          </div>
          <div class="cardDetailsContainer" data-aos="fade-up" data-aos-duration="900">
            <div class="detailsHeader">Partner Portal</div>
            <div class="detailsDesc">
              WebEDI access to bring all your partners into your ecosystem.
            </div>
            <span class="learnMoreBtn"> Learn More </span>
          </div>
        </div>
        <div class="circleSectionCards" data-aos="fade-down" data-aos-duration="900">
          <div class="circleForIcons redBack">
            <img class="fourthIconContainer" src="./assets/images/IMAGES/graph.svg" alt="" />
          </div>
          <div class="cardDetailsContainer" data-aos="fade-up" data-aos-duration="900">
            <div class="detailsHeader">Data Intelligence</div>
            <div class="detailsDesc">
              Customizable data on all your commercial flows and the KPIs of
              your ecosystem.
            </div>
            <span class="learnMoreBtn"> Learn More </span>
          </div>
        </div>
        <div class="circleSectionCards" data-aos="fade-down" data-aos-duration="900">
          <div class="circleForIcons greenBack">
            <img class="fourthIconContainer" src="./assets/images/IMAGES/books.svg" alt="" />
          </div>
          <div class="cardDetailsContainer" data-aos="fade-up" data-aos-duration="900">
            <div class="detailsHeader">E-invoicing</div>
            <div class="detailsDesc">
              Electronic invoicing and archiving in compliance with legal
              requirements.
            </div>
            <span class="learnMoreBtn"> Learn More </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="secondHomePageSection">
    <div class="secondSectionHeaderContainer" data-aos="zoom-in-up" data-aos-duration="900">
      <div>Need</div>
      <div class="colouredTextHeader">ON PREMISE solutions?</div>
      <div class="subheaderContainer">
        DISCOVER OUR CERTIFIED PARTNER SOLUTIONS
      </div>
    </div>
    <div class="secondSectionCorousalContainer">
      <div class="corosalContainer">
        <div class="corousalItem" id="corousal1">
          <img class="corusalImage" src="./assets/images/IMAGES/corousal1.webp" alt="" />
          <div class="corousalImageContent">
            <img class="toBeVanished1" src="./assets/images/IMAGES/IBM.svg" alt="" />
            <div class="textForCorusalImage toBeVanished1">
              IBM Sterling B2B Integrator
            </div>
            <div class="corousalBottomContent">
              <img class="toBeVanished21" src="./assets/images/IMAGES/IBM.svg" alt="" />
              <div class="bottomContentForCorousal toBeVanished21">
                Integrate your B2B and EDI processes into a single gateway
                supporting data transformation. Flexible, solid and secure, a
                flagship solution without compromise on performance and
                covering a wide range of certified communication protocols.
              </div>
              <img class="circleImageForCrousal toBeVanished21" src="./assets/images/IMAGES/circle.svg" alt="" />
            </div>
          </div>
        </div>
        <div class="corousalItem" id="corousal2">
          <img class="corusalImage" src="./assets/images/IMAGES/corousal2.webp" alt="" />
          <div class="corousalImageContent">
            <img class="toBeVanished2" src="./assets/images/IMAGES/CLEO.svg" alt="" />
            <div class="textForCorusalImage toBeVanished2">CIC</div>
            <div class="corousalBottomContent">
              <img class="toBeVanished22" src="./assets/images/IMAGES/CLEO.svg" alt="" />
              <div class="bottomContentForCorousal toBeVanished22">
                Integrate your B2B and EDI processes into a single gateway
                supporting data transformation. Flexible, solid and secure, a
                flagship solution without compromise on performance and
                covering a wide range of certified communication protocols.
              </div>
              <img class="circleImageForCrousal toBeVanished22" src="./assets/images/IMAGES/circle.svg" alt="" />
            </div>
          </div>
        </div>
        <div class="corousalItem" id="corousal3">
          <img class="corusalImage" src="./assets/images/IMAGES/corousal3.webp" alt="" />
          <div class="corousalImageContent">
            <img class="toBeVanished3" src="./assets/images/IMAGES/GENERIX.svg" alt="" />
            <div class="textForCorusalImage toBeVanished3">TradeXpress</div>
            <div class="corousalBottomContent">
              <img class="toBeVanished23" src="./assets/images/IMAGES/GENERIX.svg" alt="" />
              <div class="bottomContentForCorousal toBeVanished23">
                Integrate your B2B and EDI processes into a single gateway
                supporting data transformation. Flexible, solid and secure, a
                flagship solution without compromise on performance and
                covering a wide range of certified communication protocols.
              </div>
              <img class="circleImageForCrousal toBeVanished23" src="./assets/images/IMAGES/circle.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ------------------------------------------------------ section client testimonial------------------------------------------------------------- -->
    <section>
      <div class="gtco-testimonials">
        <h2> Client: <span class="yellowColorFont">Testimonials</span> </h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
        
            <!-- php for clients  -->
            <?php
            $q = "SELECT * FROM  testimony ORDER BY id DESC";


            $r123 = mysqli_query($con, $q);

            while ($ro = mysqli_fetch_array($r123)) {

              $id = "$ro[id]";
              $name = "$ro[name]";
              $ufile = "$ro[ufile]";
              $position = "$ro[position]";
              $message = "$ro[message]";
              // dashboard/uploads/testimony/2909avatar.jpg
              
              print " 
  <div>
  <div class='card text-center'><img class='card-img-top' src='dashboard/uploads/testimony/$ufile' alt='image'>
              <div class='card-body'>
              
                 
                <h5>$name <br />
                  <span> $position </span>
                </h5>
                <p class='card-text'>“ $message ” </p>
              </div>
            </div>
            </div>
          
				 
				";
            }
            ?>
             

            <!-- php for clients -->



            <!-- <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body">
                <h5>Ronne Galle <br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
        <div>
            
          
          <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body">
                <h5>Ronne Galle <br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
        <div>



            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
              <div class="card-body">
                <h5>Missy Limana<br />
                  <span> Engineer </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
          <div>

            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
              <div class="card-body">
                <h5>Martha Brown<br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div>
          </div>
          <div>


            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
              <div class="card-body">
                <h5>Hanna Lisem<br />
                  <span> Project Manager </span>
                </h5>
                <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                  impedit quo minus id quod maxime placeat ” </p>
              </div>
            </div> -->


        </div>
      </div>

      <script>
        (function() {
          "use strict";

          var carousels = function() {
            $(".owl-carousel1").owlCarousel({
              loop: true,
              center: true,
              margin: 0,
              responsiveClass: true,
              nav: false,
              responsive: {
                0: {
                  items: 1,
                  nav: false
                },
                680: {
                  items: 2,
                  nav: false,
                  loop: false
                },
                1000: {
                  items: 3,
                  nav: true
                }
              }
            });
          };

          (function($) {
            carousels();
          })(jQuery);
        })();
      </script>


    </section>





    <!-- ------------------------------------------------------ section client testimonial end------------------------------------------------------------- -->

    <!-- ------------------------------------------------------ section About us------------------------------------------------------------- -->
    
    
    
    <!-- ------------------------------------------------------ section About us-end------------------------------------------------------------ -->




    <!-- <div class="secondSecSection">
        <div
          class="secondHeaderForSec"
          data-aos="zoom-in-up"
          data-aos-duration="900"
        >
          Client, <span class="colouredTextHeader"> solutions</span>
        </div> -->
    <!-- <div
          class="subHeaderDorSecSection"
          data-aos="zoom-in-up"
          data-aos-duration="900"
        >
          You are ?
        </div>
        <div class="switchSectionContainer">
          <div
            class="directswitch switchSectionButton"
            data-aos="fade-up"
            data-aos-duration="900"
          >
            <span> Director of the information systems </span>
            <div class="secHrCont">
              <hr class="secHr" />
            </div>
          </div>
          <div
            class="adminswitch switchSectionButton"
            data-aos="fade-up"
            data-aos-duration="900"
          >
            <span> Administrative and financial director </span>
            <div class="secHrCont">
              <hr class="secHr" />
            </div>
          </div>
        </div> -->
    <!-- </div> -->
    <!-- -----------------------------------------------------------Switch Content Part----------------------------------------------------------- -->

    <!-- <div class="switchCOntentCont">
        
      
      <div class="switchContentContainer switchComp activeSwitchCont"> 
     
             
          <div class="switchContentText">
          <div class="secDescSec">
                 
          <?php
          // $q="SELECT * FROM  sol ORDER BY id DESC";
          // $r123 = mysqli_query($con,$q);
          // while($ro = mysqli_fetch_array($r123)){
          //   $id="$ro[id]";
          //   $blog_title="$ro[blog_title]";
          //   $blog_desc="$ro[blog_desc]";
          //   print "

          //   <div class='secDescHeader2nd issuesnew'>
          //   <span>$blog_title</span
          //   >
          //   <div class='iconarrow'>
          //     <i class='fa-solid fa-arrow-right'></i>
          //   </div>
          // </div>

          // <div class='secondCircleDesc2nd activeCircle2nd' id='secDesc2nd1'>
          //   <div class='secDescText2nd'>
          //   $blog_desc 
          //   </div>
          //  </div>
          //  <br>
          //  ";}
          ?>

       
        </div>

        </div>
</div>
</div> -->

    <!-- <div class="secDescHeader2nd issuesnew">
                <span
                  >Choose efficiency by digitalizing and automating all your B2B
                  flows</span
                >
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              
              <div class="secondCircleDesc2nd activeCircle2nd" id="secDesc2nd1">
                <div class="secDescText2nd">
                  Optimize and secure the functioning of your ecosystem by
                  minimizing any human intervention. Unlock your productivity
                  potential.
                </div>
               </div>

            </div>
          </div>
      </div> -->



    <!-- <div class="secDescSec">
              <div class="secDescHeader2nd issuesnew">
                <span> Manage your EDI flows with peace of mind </span>
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <div class="secondCircleDesc2nd" id="secDesc2nd2">
                <div class="secDescText2nd">
                  Manage your EDI flows with peace of mind.
                </div>
                <div class="secDescText2nd">
                  Monitor, control and trace your financial or supply chain
                  exchanges and at each stage of your activity.
                </div>
              </div>
            </div> -->


    <!-- <div class="secDescSec"> -->
    <!-- <div class="secDescHeader2nd issuesnew">
                <span> Take Back Control Through Flexibility </span>
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <div class="secondCircleDesc2nd" id="secDesc2nd3">
                <div class="secDescText2nd">
                  Streamline the integration of your new partners and start
                  communicating without wasting time. Gain autonomy and
                  efficiency in your commercial exchanges:
                </div>
                <ul>
                  <li class="listContent">
                    Optimization of data exchanges with your partners, seamless
                    interoperability
                  </li>
                  <li class="listContent">
                    Responsiveness to different requests and requests
                  </li>
                  <li class="listContent">
                    Improvement of your customer relations: efficiency,
                    reliability, security and responsiveness
                  </li>
                  <li class="listContent">
                    Anticipation: staying ahead of your competitors
                  </li>
                  <li class="listContent">
                    Easy integration of partners (VSE – SME – GE) into your
                    ecosystem through a single EDI platform.
                  </li>
                </ul>
              </div>
            </div> -->





    <!-- <div class="switchContentContainer2nd switchComp">
          <div class="switchContentText">
            <div class="secDescSec">


            <?php
            // $q="SELECT * FROM  sol1 ORDER BY id DESC";
            // $r123 = mysqli_query($con,$q);
            // while($ro = mysqli_fetch_array($r123)){
            //   $id="$ro[id]";
            //   $blog_title="$ro[blog_title]";
            //   $blog_desc="$ro[blog_desc]";



            //     print " <div class='secDescHeader2nd'>
            //   <span>  $blog_title </span>

            //   <div class='iconarrow'>
            //     <i class='fa-solid fa-arrow-right'></i>
            //   </div>
            // </div>
            // <div
            //   class='secondCircleDesc2nd2nd activeCircle2nd2nd'
            //   id='secDesc2nd12nd'
            // > 
            //   <div class='secDescText2nd'>
            //   $blog_desc
            //   </div>
            // </div> ";

            //      }





            ?> -->


    <!-- <div class="secDescHeader2nd">
                <span>Switch to electronic invoicing</span>
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <div
                class="secondCircleDesc2nd2nd activeCircle2nd2nd"
                id="secDesc2nd12nd"
              >
                <div class="secDescText2nd">
                  Opt now for tax dematerialization to reduce your costs and
                  automate the processing of your supplier and customer
                  invoices.
                </div>
              </div> -->


    <!--             
            </div> -->



    <!-- <div class="secDescSec">
              <div class="secDescHeader2nd">
                <span> Be in line with the tax regulations of tomorrow </span>
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <div class="secondCircleDesc2nd2nd" id="secDesc2nd22nd">
                <div class="secDescText2nd">
                  Electronic invoicing and its archiving will gradually become
                  mandatory from mid-2024.
                </div>
                <div class="secDescText2nd">
                  Following the reform carried out by the DGFiP and the Finance
                  Law, all companies will have to receive and issue their B2B
                  and B2G invoices exclusively in electronic format.
                </div>
                <div class="secDescText2nd">
                  Ensure automated and secure communication with the Chorus Pro
                  Public Billing Platform.
                </div>
              </div>
            </div>
            <div class="secDescSec">
              <div class="secDescHeader2nd">
                <span> Simplify your management </span>
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <div class="secondCircleDesc2nd2nd" id="secDesc2nd32nd">
                <div class="secDescText2nd">
                  Access a global and intelligent vision of your activity with
                  real-time traceability. Optimize your commercial management
                  costs.
                </div>
              </div>
            </div>
            <div class="secDescSec">
              <div class="secDescHeader2nd">
                <span>
                  Improve your competitiveness by managing your exchanges
                </span>
                <div class="iconarrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <div class="secondCircleDesc2nd2nd" id="secDesc2nd42nd">
                <div class="secDescText2nd">
                  Streamline your entire invoicing process by automating your
                  exchanges with your partners.
                </div>
                <div class="secDescText2nd">
                  Reduce the risks of errors and non-compliance and thus
                  neutralize payment delays to the benefit of your cash flow.
                </div>
              </div>
            </div> -->


    <!-- </div>
        </div>


      </div>
    </div> -->
    <!-- -------------------------------------------------------------------------home Ebook--------------------------------------------------------------- -->
    <!-- <section class="home_ebook">
      <div class="home_ebook1">
        <p data-aos="fade-up" data-aos-duration="500">E-Book</p>
        <h1 data-aos="fade-up" data-aos-duration="800">
          The essentials of dematerialization in our e-book “Know everything
          about Electronic Invoicing”
        </h1>
      </div>
      <div data-aos="fade-right" data-aos-duration="800" class="home_ebook2">
        <button class="home_down">
          <h2>Download</h2>
        </button>
      </div>
    </section> -->
    <!-- ----------------------------------------------------------------------Home FAQ Part------------------------------------------------------------------ -->




    <!--     
    
    
    
    
    
    
    
    <section class="home_faq">
      <h2 style="margin-top: 31px" data-aos="fade-up" data-aos-duration="500">
        A question ? Check out our <span>FAQ</span>
      </h2>
      <div class="home_faqchoice">
        <div data-aos="fade-up" data-aos-duration="500" class="edibar">
          <h4>EDI</h4>
          <hr class="active" />
        </div>
        <div data-aos="fade-up" data-aos-duration="500" class="taxbar">
          <h4>Tax dematerialization</h4>
          <hr />
        </div>
      </div>


     


      
          
    
   

     <div class="EDIFAQ">
    
    
   

//         else if($id >=4){
//           print " 
          

//           <div class='01stsecfaq'>
          
// <div class='1stQ'>
    
//   <div class='queshead'>


//     <h3>$blog_title </h3>







     







       
// 				   $q="SELECT * FROM  blog1 ORDER BY id DESC";  


//                $r123 = mysqli_query($con,$q);

// while($ro = mysqli_fetch_array($r123))
// {

// 	$id="$ro[id]";
// 	$blog_title="$ro[blog_title]";
//     $blog_desc="$ro[blog_desc]";


//   print " 
  
//   <div class='t $id stQ'>
//   <div class='queshead'>
//     <h3>$blog_title</h3>
//     <div class='iconarrow'>
//       <i class='fa-solid fa-arrow-right'></i>
//     </div>
//   </div>
//   <div class='FAQAnswers'>
//     <p>
//     $blog_desc
    
//     </p>
//   </div>
//   <hr class='alwaysacthr'/>
// </div>";




//   }
  ?>

         




        </div>
      </div>
    </section> -->
    <!-- -----------------------------------------------------------------------------home Contact form part--------------------------------------------------------- -->
    <section class="home_contacter">
      <div class="home_texter">
        <div>
          <span data-aos="fade-down" data-aos-duration="900" class="inline-block text-xs text-gray-50 uppercase aos-init aos-animate">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit">A question ? </font>
              <font style="vertical-align: inherit">A project ?</font>
            </font>
          </span>
        </div>
        <h2 data-aos="fade-up" data-aos-duration="500">
          Enter your contact details to be quickly contacted by a specialist
        </h2>
        <p data-aos="fade-up" data-aos-duration="500">
          We are here to advise you on all your dematerialization projects.
        </p>
        <div style="margin-top: 40px" class="hideonph">
          <canvas style="
              border: 1px solid #000;
              background-color: white;
              border-radius: 3px;
            " class="captcha">captcha text</canvas>

          <p style="margin-bottom: 12px">captcha code above</p>
        </div>
        <br />
      </div>
      <div data-aos="fade-up" data-aos-duration="500" class="home_inputer">
        <div class="home_wti">
          <input style="color: black" type="text" placeholder="First Name *" />
          <input style="color: black" type="text" placeholder="Last Name *" />
        </div>
        <input style="color: black" type="email" placeholder="E-mail *" />
        <div class="home_wti">
          <input style="color: black" type="text" placeholder="Business *" />
          <input style="color: black" type="text" placeholder="Phone *" />
        </div>
        <div class="center">
          <div id="captchaBackground">
            <input placeholder="Enter Captha*" style="color: black" id="textBox" type="text" name="text" />

            <div class="hideondesk">
              <canvas style="
                  border: 1px solid #000;
                  background-color: white;
                  border-radius: 3px;
                " class="captcha">captcha text</canvas>

              <p style="margin-bottom: 12px">captcha code above</p>
              <!-- <br> -->
            </div>

            <div id="buttons">
              <button id="refreshButton" type="submit">Refresh</button>
              <input style="color: black" id="submitButton" type="submit" />
            </div>

            <span id="output"></span>
          </div>
        </div>
        <p>
          The personal data collected will be used by Digitus to process the
          requests made and/or manage the services requested. You can exercise
          your rights of access, rectification, opposition and portability of
          your data in accordance with the provisions stipulated in the
          confidentiality policy.
        </p>
        <!-- <button class="home_sendbtn">Send</button> -->
      </div>
    </section>




    <!-- ------------------------------------------------------------------footer part----------------------------------------------------------------- -->
    <footer class="footer_Priyansh">
      <div class="container">
        <div class="row">
          <div class="footer_Priyansh-col">
            <h4>Company</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">privacy policy</a></li>

            </ul>
          </div>
          <div class="footer_Priyansh-col">
            <h4>Services</h4>
            <ul>
              <li><a href="#">EDI </a></li>
              <li><a href="#">Consulting &amp; Assessment</a></li>
              <li><a href="#">Migrations/Upgrade</a></li>

            </ul>
          </div>
          <div class="footer_Priyansh-col">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Prodcts</a></li>
              <li><a href="#">Get Demo</a></li>
              <li><a href="#">Email:digitus@gmail.com</a></li>

            </ul>
          </div>
          <div class="footer_Priyansh-col">
            <h4>Address</h4>
            <ul>
              <li><a href="#">INNOVATION VALLEY, Hill No :3,</a></li>
              <li><a href="#">IT-SEZ, Rushikonda, Visakhapatnam,</a></li>
              <li><a href="#">Andhra Pradesh - 530048</a></li>
              <li><a href="#">Contact no.:9999999999</a></li>


            </ul>
          </div>

        </div>
      </div>
      <hr class="Footer_hr">
      <div class="style-0">
        <div class="style-1">
          <a href="#" class="style-2"><img src="./assets/digituslogo/footerlogo.png" alt="" class="style-3" /></a>
        </div>
        <div class="style-4">Copyright © Digitus software private limited. All Rights Reserved.
        </div>
        <div class="style-5">
          <!-- php work -->

          <?php
          $q = "SELECT * FROM  social ORDER BY id DESC";


          $r123 = mysqli_query($con, $q);

          while ($ro = mysqli_fetch_array($r123)) {

            $id = "$ro[id]";
            $name = "$ro[name]";
            $social_link = "$ro[social_link]";
            $fa = "$ro[fa]";

            print "
  <a href='$social_link' class='social-link'><i class='$fa'></i></a>
				  ";
          }
          ?>







          <!-- php work -->





          <!-- <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-link"><i
                class="fab fa-instagram"></i></a>
        <a href="#" class="social-link"><i class="fab fa-tumblr"></i></a>
        <a href="#" class="social-link"><i
                class="fab fa-pinterest"></i></a> -->
        </div>
      </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- this script use for animation part -->

    <script>
      AOS.init();
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./assets/script/index.js"></script>
    <!-- for customer carousel -->
    <script src="./assets/script/faq.js"></script>
    <!-- for home /assetsFaq Part -->
    <script src="./assets/script/scecondHomeSec.js"></script>
    <!-- for home /assetsPart -->
    <script src="./assets/script/handlescroll.js"></script>
    <!-- for Navba/assetsr Part -->
    <script src="./assets/script/cptcha.js"></script>
    <!-- for captcha Part -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   

</body>

</html>