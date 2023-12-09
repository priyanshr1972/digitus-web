<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digitus-technologies</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href=" " type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/technology.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"/>
    <link rel="stylesheet" href="./assets/css/secondsection.css">
    <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>

    <link href="./assets/css/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/footer_2.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <!-- Fontawesome CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <span class="navBarOpt">Accelerators</span>
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
  <!-- 
    - #HEADER
  -->

  <!-- header -->





  <main class="mainTechnology">
    <article>

      <!-- 
        - #HERO
      -->

      <section class="tech-hero" id="home">
        <div class="tech-container">

          <div class="tech-hero-content">

            <!-- <p class="hero-subtitle">We Are Product Designer From UK</p> -->

            <h2 class="tech-h2 tech-hero-title">Best Technologies & Development Agency</h2>

            <p class="tech-hero-text">
              At Digitus , we pride ourselves on being at the forefront of cutting-edge web development technologies, and ReactJS is no exception. As a leading ReactJS web development service provider, we are dedicated to helping businesses leverage the power of this robust JavaScript library to build stunning, dynamic, and high-performance web applications.

We have a team of skilled ReactJS developers who are known to streamline your web development process by using reusable components.
            </p>


          </div>

          <figure class="tech-hero-banner">
            <img src="https://dmlab.edu.gr/assets/media/2019/09/Web_Development.png" width="694" height="529" loading="lazy" alt="hero-banner"
              class="tech-w-101 tech-banner-animation">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="tech-section about" id="about">
        <div class="tech-container">

          <!-- <figure class="tech-about-banner">
            <img src="https://developer.apple.com/home/images/tile-macos-14/macos-14-c-large_2x.png" width="700" height="532" loading="lazy" alt="about banner"
              class="tech-w-101 tech-banner-animation">
            
          </figure> -->
          <section class="crousel_sec3">
      <div class="prev">
        <a onclick="prevSlide()">&#10094;</a>
      </div>

      <div class="slideshow-container">
        <div class="mySlides fade">
          <img class="crousel_image" src="assets/images/crousel1.webp" />
        </div>
        <div class="mySlides fade">
          <img class="crousel_image" src="assets/images/crousel2.webp" />
        </div>
        <div class="mySlides fade">
          <img class="crousel_image" src="assets/images/crousel3.webp" />
        </div>
        <div class="mySlides fade">
          <img class="crousel_image" src="assets/images/crousel4.webp" />
        </div>
        <div class="mySlides fade">
          <img class="crousel_image" src="assets/images/crousel5.webp" />
        </div>
        <div style="text-align: center; margin: -5vh">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
      <div class="next">
        <a onclick="showSlides()">&#10095;</a>
      </div>

      <script src="./assets/script/crousel.js"></script>
    </section>

          <div class="tech-about-content">

            <h2 class="tech-h2 tech-section-title underline">Responsive Web Development</h2>

            <p class="tech-about-text">
              In dictum aliquam turpis lacinia iaculis. Fusce vel malesuada magna. Nulla vel maximus risus. Donec
              volutpat metus
              lacinia risus accumsan, ac bibendum libero efficitur. Pellentesque nec nisi sit amet magna tempus
              hendrerit ut a odio.
            </p>

            <p class="tech-about-text">
              Praesent rhoncus commodo tortor, id pulvinar nisl blandit at. Nulla facilisi. Quisque turpis ante,
              vehicula condimentum
              arcu.
            </p>

            <ul class="tech-stats-list">

              <li class="tech-stats-card">
                <p class="tech-h3 tech-stats-title">9875</p>

                <p class="tech-stats-text">Satisfied Clients</p>
              </li>

              <li class="tech-stats-card">
                <p class="tech-h3 tech-stats-title">7894</p>

                <p class="tech-stats-text">Project Lunched</p>
              </li>

              <li class="tech-stats-card">
                <p class="tech-h3 tech-stats-title">65</p>

                <p class="tech-stats-text">Years Completed</p>
              </li>

            </ul>

          </div>

        </div>
      </section>


      <section class="tech-section tech-about" id="about">
        <div class="tech-container">

          <figure class="tech-about-banner">
            <!-- <img src="https://developer.apple.com/home/images/tile-macos-14/macos-14-c-large_2x.png" width="700" height="532" loading="lazy" alt="about banner"
              class="w-101 banner-animation"> -->
              <img id="ii" src="https://developer.apple.com/home/images/tile-ios-17/ios-17-large_2x.png?1" width="700" height="532" loading="lazy" alt="about banner"
              class="tech-w-101 tech-banner-animation"> 
          </figure>

          <div class="tech-about-content">

            <h2 class="tech-h2 tech-section-title underline">Our Mobile application</h2>

            <p class="tech-about-text">
              In dictum aliquam turpis lacinia iaculis. Fusce vel malesuada magna. Nulla vel maximus risus. Donec
              volutpat metus
              lacinia risus accumsan, ac bibendum libero efficitur. Pellentesque nec nisi sit amet magna tempus
              hendrerit ut a odio.
            </p>

            <p class="tech-about-text">
              Praesent rhoncus commodo tortor, id pulvinar nisl blandit at. Nulla facilisi. Quisque turpis ante,
              vehicula condimentum
              arcu.
            </p>

            <ul class="tech-stats-list">

              <li class="tech-stats-card">
                <p class="tech-h3 tech-stats-title">9875</p>

                <p class="tech-stats-text">Satisfied Clients</p>
              </li>

              <li class="tech-stats-card">
                <p class="tech-h3 tech-stats-title">7894</p>

                <p class="tech-stats-text">Project Lunched</p>
              </li>

              <li class="tech-stats-card">
                <p class="tech-h3 tech-stats-title">65</p>

                <p class="tech-stats-text">Years Completed</p>
              </li>

            </ul>

          </div>
          
        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="tech-section tech-service" id="services">
        <div class="tech-container">

          <h2 class="tech-h2 tech-section-title underline">Our Speciallization</h2>

          <ul class="tech-service-list">

            <li>
              <div class="tech-service-card">

                <div class="tech-card-icon">
                  <ion-icon name="telescope-outline"></ion-icon>
                </div>

                <h3 class="tech-h3 tech-title">Strategy & Research</h3>

                <p class="tech-text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <!-- <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="tech-service-card">

                <div class="tech-card-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>

                <h3 class="tech-h3 tech-title">APP Development</h3>

                <p class="tech-text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <!-- <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="tech-service-card">

                <div class="tech-card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="tech-h3 tech-title">Web Solution</h3>

                <p class="tech-text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <!-- <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> -->

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="tech-section tech-features" id="features">
        <div class="tech-container ">

          <h2 class="tech-h2 tech-section-title underline">Our Features</h2>

          <ul class="tech-features-list">

            <li>
              <div class="tech-features-card">

                <div class="tech-icon">
                  <ion-icon name="bulb-outline"></ion-icon>
                </div>

                <div class="tech-content">
                  <h3 class="tech-h3 tech-title">Idea & Analysis</h3>

                  <p class="tech-text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
              
            </li>

            <li>
              <div class="tech-features-card">

                <div class="tech-icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div class="tech-content">
                  <h3 class="tech-h3 tech-title">Designing</h3>

                  <p class="tech-text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="tech-features-banner">
            <img src="https://developer.apple.com/visionos/work-with-apple/images/contact-1_2x.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="tech-w-100 tech-banner-animation">
          </figure>

          <ul class="tech-features-list">

            <li>
              <div class="tech-features-card">

                <div class="tech-icon">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="tech-content">
                  <h3 class="tech-h3 tech-title">Development</h3>

                  <p class="tech-text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="tech-features-card">

                <div class="tech-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="tech-content">
                  <h3 class="tech-h3 tech-title">Testing & Lunching</h3>

                  <p class="tech-text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      
      
      
      
      <section class="tech-section tech-blog" id="blog">
        <div class="tech-container">

          <h2 class="tech-h2 tech-section-title underline">Why Choose Our ReactJS Web Development Service?</h2>

          <ul class="tech-blog-list">
            
            
            
            <li>
              <div class="tech-blog-card">

                <figure class="tech-banner">
                  <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2wKJztzWwuajL-78OGkv-O9LqFHBxPCJzVg&usqp=CAU"alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="tech-content">

                  <h3 class="tech-h3 tech-title">
                    <a href="#">
                      Vestibulum massa arcu, consectetu pellentesque scelerisque.
                    </a>
                  </h3>

                  <p class="tech-text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="tech-meta">

                    <div class="tech-publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="tech-comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="tech-share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>



            <li>
              <div class="tech-blog-card">

                <figure class="tech-banner">
                  <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg1GxYtIgkPmtJoi2P4kuIbG9efaEF2lo5heeDN_xZ8Bb_KHxi8Hlsf7dPXWGafTFujwo&usqp=CAU"alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="tech-content">

                  <h3 class="tech-h3 tech-title">
                    <a href="#">
                      Vestibulum massa arcu, consectetu pellentesque scelerisque.
                    </a>
                  </h3>

                  <p class="tech-text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="tech-meta">

                    <div class="tech-publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="tech-comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="tech-share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>
           

           



            <li>
              <div class="tech-blog-card">

                <figure class="tech-banner">
                  <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCsVMGAkro4HkfcEPL4yUaOYVLBnXKJezc5g&usqp=CAU"alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="tech-content">

                  <h3 class="tech-h3 tech-title">
                    <a href="#">
                      Vestibulum massa arcu, consectetu pellentesque scelerisque.
                    </a>
                  </h3>

                  <p class="tech-text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="tech-meta">

                    <div class="tech-publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="tech-comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="tech-share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>



            <li>
              <div class="tech-blog-card">

                <figure class="tech-banner">
                  <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKQ6pZQDCdI-yF3yB1Zlxty2nvNXrY2DfDnQ&usqp=CAU"alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="tech-content">

                  <h3 class="tech-h3 tech-title">
                    <a href="#">
                      Vestibulum massa arcu, consectetu pellentesque scelerisque.
                    </a>
                  </h3>

                  <p class="tech-text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="tech-meta">

                    <div class="tech-publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="tech-comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="tech-share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>




            

          </ul>

        </div>
      </section>

    </article>
  </main>





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

    <script src="./assets/script/handlescroll.js"></script>
    <!-- for Navba/assetsr Part -->
    <script src="./assets/script/cptcha.js"></script>
    <!-- for captcha Part -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>