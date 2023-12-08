<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partnership</title>

    <link rel="stylesheet" href="./assets/css/partnership.css">
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
          <a style="text-decoration: none" href="edi.php">
            <div class="yellowColorFontThird">Technology</div>
          </a>
          <a style="text-decoration: none" href="edp.php">
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


    <section class="partnership_hero_section">
        <img src="./assets/images/hero.jpg" alt="">
        <div class="partnership_hero_content">
            <div class="partnership_hero_headings">
                <h1>Welcome To The Business</h1>
                <h1>Corporate Solutions!</h1>
            </div>
            <div class="partnership_hero_btns">
                <a class="partnership_hero_read" href="#">Read More</a>
                <a class="partnership_hero_get" href="#">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->

    <section class="partnership_solutions">
        <div class="partnership_solutions_section">
            <div class="partnership_solutions_left">
                <div>
                    <i class="fa-regular fa-handshake fa-2xl" style="color: #0de7bc;"></i>
                </div>
                <h1>Partnership Bussiness Corporate Solutions-Leads To Magazine Bussiness</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum maxime nulla deleniti eaque doloremque
                    dolorem suscipit, aliquid adipisci, ex blanditiis voluptate repudiandae atque nisi excepturi? Autem
                    nobis suscipit exercitationem nisi.</p>
                <p>Cupiditate, modi expedita esse dignissimos maiores iusto aliquid harum sapiente repellat nisi iste
                    facere id dolorem explicabo rem, consequatur sit voluptas tenetur? Distinctio in dolores cupiditate
                    et officiis atque quo magnam. Magni ad ex debitis delectus. Facere eaque laborum quo iste, quos ex
                    pariatur debitis! Inventore, commodi optio, necessitatibus dolorum ipsum explicabo iste, sapiente
                    quo sed odit voluptatum placeat perferendis quaerat dolorem iusto accusamus ea sint architecto
                    neque. Maxime iusto earum enim nulla!</p>
            </div>
            <div class="partnership_solutions_right">
                <img src="./assets/images/solutionrightimg.jpg" alt="solutions image">
            </div>
        </div>
    </section>


    <!-- Work Based Projects Section -->

    <section class="partnership_projects">
        <div class="partnership_projects_section">
            <div class="partnership_projects_headings">
                <h5>BUSINESS SOLUTIONS</h5>
                <h1>Work Based Projects</h1>
            </div>
            <div class="partnership_projects_cards_container">
                <div class="partnership_projects_card">
                    <div>
                        <i class="fa-solid fa-p fa-xl" style="color: #f25a07;"></i>
                    </div>
                    <h2>Product Based</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                    <a href="#">Know more</a>
                </div>
                <div class="partnership_projects_card">
                    <div>
                        <i class="fa-regular fa-handshake fa-2xl" style="color: #f25a07;"></i>
                    </div>
                    <h2>Product Based</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                    <a href="#">Know more</a>
                </div>
                <div class="partnership_projects_card">
                    <div>
                        <i class="fa-solid fa-cube fa-xl" style="color: #f25a07;"></i>
                    </div>
                    <h2>Product Based</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                    <a href="#">Know more</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Business Services Section -->

    <section class="partnership_services">
        <div class="partnership_services_section">
            <div class="partnership_services_headings">
                <h5>BUSINESS SOLUTIONS</h5>
                <h1>Our Business Services</h1>
            </div>
            <div class="partnership_services_cards_container">
                <div class="partnership_services_card">
                    <div class="partnership_services_card_img">
                        <img src="./assets/images/services-1.jpg" alt="">
                    </div>
                    <h2>Product Discussion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                </div>
                <div class="partnership_services_card">
                    <div class="partnership_services_card_img">
                        <img src="./assets/images/services-2.jpg" alt="">
                    </div>
                    <h2>Business Planning</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                </div>
                <div class="partnership_services_card">
                    <div class="partnership_services_card_img">
                        <img src="./assets/images/services-3.jpg" alt="">
                    </div>
                    <h2>Modern Solutions</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Innovation Leader Section -->

    <section class="partnership_innovation">
        <div class="partnership_innovation_section">
            <div class="partnership_innovation_headings">
                <h5>BUSINESS SOLUTIONS</h5>
                <h1>Are You An Innovative Leader</h1>
            </div>
            <div class="partnership_innovation_content">
                <div class="partnership_innovation_data">
                    <div>
                        <i class="fa-solid fa-2xl fa-briefcase" style="color: #ffffff;"></i>
                        <h1>12</h1>
                    </div>
                    <p>Years Of Experience</p>
                </div>
                <div class="partnership_innovation_data">
                    <div>
                        <i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i>
                        <h1>120</h1>
                    </div>
                    <p>Our Agents</p>
                </div>
                <div class="partnership_innovation_data">
                    <div>
                        <i class="fa-regular fa-face-smile fa-2xl" style="color: #ffffff;"></i>
                        <h1>1280</h1>
                    </div>
                    <p>Happy Customers</p>
                </div>
                <div class="partnership_innovation_data">
                    <div>
                        <i class="fa-solid fa-users fa-2xl" style="color: #ffffff;"></i>
                        <h1>1020</h1>
                    </div>
                    <p>Our Clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership & Business Corporate Solutions Section -->

    <section class="partnership_business_section">
        <div class="partnership_business_img">
            <img src="./assets/images/tree.jpg" alt="">
        </div>
        <div class="partnership_business_content">
            <div>
                <h1>Partnership & Business</h1>
                <h1>Corporate Solutions</h1>
            </div>
            <div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem quidem vitae veniam, vel officiis molestiae earum sequi adipisci quasi nihil natus corporis molestias Lorem, ipsum dolor sit  ratione modi fuga blanditiis consequatur, quibusdam architecto!</p>
            </div>
            <div class="partnership_business_btns">
                <a href="#">Read More</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Our Business Blog Section -->

    <section class="partnership_blog" style="margin-bottom: 55vh;">
        <div class="partnership_blog_section">
            <div class="partnership_blog_headings">
                <h5>BUSINESS SOLUTIONS</h5>
                <h1>Our Business Services</h1>
            </div>
            <div class="partnership_blog_cards_container">
                <div class="partnership_blog_card">
                    <div class="partnership_blog_card_img">
                        <img src="./assets/images/blog-1.jpg" alt="">
                    </div>
                    <p>29 May 2019</p>
                    <h2>Product Discussion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                        <div class="partnership_blog_card_link">
                            <a href="#"><i class="fa-solid fa-xl fa-arrow-right" style="color: #ffffff;"></i></a>
                        </div>
                </div>
                <div class="partnership_blog_card">
                    <div class="partnership_blog_card_img">
                        <img src="./assets/images/blog-2.jpg" alt="">
                    </div>
                    <p>29 May 2019</p>
                    <h2>Business Planning</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque
                        quisquam mollitia nam porro eligendi debitis</p>
                        <div class="partnership_blog_card_link">
                            <a href="#"><i class="fa-solid fa-xl fa-arrow-right" style="color: #ffffff;"></i></a>
                        </div>
                </div>
                <div class="partnership_blog_card">
                    <div class="partnership_blog_card_img">
                        <img src="./assets/images/blog-3.jpg" alt="">
                    </div>
                    <p>29 May 2019</p>
                    <h2>Modern Solutions</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati magni, id illo sit neque quisquam mollitia nam porro eligendi debitis</p>
                    <div class="partnership_blog_card_link">
                        <a href="#"><i class="fa-solid fa-xl fa-arrow-right" style="color: #ffffff;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>