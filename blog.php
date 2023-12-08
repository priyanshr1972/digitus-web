
<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/blogstyle.css">
    <link rel="stylesheet" href="./assets/css/secondsection.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/css/footer_2.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>
    </head>
<body  id="body" onscroll="handleScroll()">
  <div class="firstSec">
    <div   class="firstSectionContainer" id="firstSectionContainer">
      <h1 class="DigitusLogo"> 
          <a href="index.php"><img src="./assets/images/mainlogo.png" class="logoImage" alt="Digitus" height="90x"></a> </h1>
      <div class="bx bx-menu " id="menu-icon" > </div>
      <ul class="navmenu">
          <li><a class="factLinkContainer" href="/expertise/facturation-electronique/">  Electronic invoicing 2024</a></li>
          <li>
              <div class="addOption" id="firstDropdownButton" onmouseover="showDropdown()">
              <span onmouseleave="hideDropdown()" class="navBarOpt">Expertise</span>
              <span onmouseleave="hideDropdown()" id="dropdown1"
                class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl">
                <div class="dropdownContainer">
                  <div class="firstDropdownSection">
                    <div class="dropdownHeader">NOTRE EXPERTISE</div>
                    <div>Optimize your B2B data exchanges to benefit your productivity in line with your sectoral
                      requirements</div>
                  </div>
                  <div class="secondDropdownSection">
                    <a style="text-decoration: none;" href="edipul.php"><div>EDI- Electronic Data Interchange</div></a>
                    <div>Electronic invoicing</div>
                  </div>
                </div>
              </span>
            </div></li>
          <li> <div class="addOption" onmouseover="showDropdown2()">
        <span onmouseleave="hideDropdown2()" class="navBarOpt">Solutions</span>
        <span onmouseleave="hideDropdown2()" id="dropdown2"
          class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl">
          <div class="dropdownContainer">
            <div class="firstDropdownSection">
              <div class="dropdownHeader">NOS SOLUTIONS</div>
              <div>Catalyze collaboration within your ecosystem through a wide range of dematerialization solutions
                adapted to your needs</div>
            </div>
            <div class="secondDropdownSection2nd">
              <div>Nos solutions</div>
              <hr>
              <div class="dropdownSeperator">
                <div class="rightOptionsForDropdown">
                  <div class="blackColorFont">On premise</div>
                  <div class="yellowColorFont">TradeXpress</div>
                  <div class="yellowColorFont">IBM Sterling</div>
                  <div class="yellowColorFont">Cleo</div>
                </div>
                <a style="text-decoration: none;" href="hubtimize.php"><div>
                  <div class="blackColorFont">Cloud</div>
                  <div class="yellowColorFont">Hubtimize®</div>
                </div></a>
              </div>
            </div>
          </div>
        </span>
      </div></li>
      <li> <div class="addOption" onmouseover="showDropdown3()">
        <span onmouseleave="hideDropdown3()" class="navBarOpt">Services</span>
        <div onmouseleave="hideDropdown3()" id="dropdown3"
          class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl">
          <div class="dropdownContainer">
            <div class="firstDropdownSection">
              <div class="dropdownHeader">NOS SERVICES</div>
              <div>Optimize your B2B data exchanges to benefit your productivity in line with your sectoral
                requirements</div>
            </div>
            <div class="secondDropdownSection3rd">
              <div>Nos Services</div>
              <hr>
              <div class="dropdownSeperator3rd">
                <a style="text-decoration: none;" href="edi.php"> <div class="yellowColorFontThird">EDP</div> </a>
                <a style="text-decoration: none;" href="edp.php"> <div class="yellowColorFontThird">EDI</div> </a>
                <a style="text-decoration: none;" href="cx.php"> <div class="yellowColorFontThird">CX</div> </a>
                <a style="text-decoration: none;" href="bi.php"> <div class="yellowColorFontThird">BI</div> </a>
   
              </div>
            </div>
          </div>
        </div>
      </div></li>

          <li><a href="blog.php" style="text-decoration: none;"> <div class="addOption">
              Blog
             </div></a></li>

          <li><a href="contact.php" style="text-decoration: none;">   <div class="navButton ">
              Get Demo
            </div></a></li>
            <li><div class="fropt" >
              <select name="cars" id="cars" class="addOption" style="border:none;">
                <option value="volvo" >En</option>
                <option value="saab">Fr</option>
                <option value="mercedes">Tr</option>
              </select>
            </div></li>
      </ul>

    </div >

    <div class="header_main_body" >
    <div>
      <div data-aos="fade-down" data-aos-duration="1500" class="header_main_body_logo2">
        <img alt="ISO 27001 Logo" src="./assets/images/iso-27001 (1).webp" width="160" height="74" decoding="async" data-nimg="1" class="header_main_body_logo3" loading="lazy" style="color: transparent;">
      </div>
      <h1 data-aos="fade-up" data-aos-easing="ease-in-out-cubic" class="header_main_body_heading">La dématérialisation<br>au service de votre business</h1>
      <h2 data-aos="fade-up" data-aos-duration="1500" class="header_main_body_heading_two">Esalink vous accompagne dans la digitalisation de vos flux B2B</h2>
      <div data-aos="fade-up" data-aos-duration="1500" class="header_main_body_buttons">
        <a class="header_main_body_buttons_one" >Trouver votre solution EDI</a>
        <a class="header_main_body_buttons_one">Passer à la facturation électronique</a>
      </div>
      <div class="header_main_body_photos">
        <div class="header_main_body_photos_include">
         
            <img alt="Logo Generix Group Blanc " data-aos="fade-up" data-aos-duration="900"  src="./assets/images/Qlik_Logo.svg.png" decoding="async" data-nimg="1" loading="lazy" style="color: transparent;">
          
        </div>  
        <div class="header_main_body_photos_include">
         
            <img alt="Logo Generix Group Blanc" data-aos="fade-up" data-aos-duration="900"  src="./assets/images/Oracle_logo.svg.png"  decoding="async" data-nimg="1" loading="lazy" style="color: transparent;">
          
        </div>
        <div class="header_main_body_photos_include">
         
            <img alt="Logo Generix Group Blanc" data-aos="fade-up" data-aos-duration="900"  src="./assets/images/Liferay-logo-full-color-2x.png" decoding="async" data-nimg="1" loading="lazy" style="color: transparent;">
          
        </div>
        <div class="header_main_body_photos_include">
         
          <img alt="Logo Generix Group Blan" data-aos="fade-up" data-aos-duration="900"  src="./assets/images/power-bi_logo.webp"  decoding="async" data-nimg="1" loading="lazy" style="color: transparent;">
        
      </div>
        <div class="header_main_body_photos_include">
         
            <img alt="Logo Generix Group Blanc " data-aos="fade-up" data-aos-duration="900"  src="./assets/images/PTC_Windchill.png" decoding="async" data-nimg="1" loading="lazy" style="color: transparent;">
          
        </div>
      </div>
    </div>
  </div>
  <div class="crossOver" data-aos="zoom-in-up" data-aos-duration="900" >
    <div class="overLapContainer">
      <div class="blackContainer"> I would like</div>
      <div class="whiteCont">Det Support fro my EDI solution</div>
      <div class="lastCont">I go</div>
    </div>
  </div>
</div>

  <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
  <div   class="hidden_Navbar">
    <div
      data-aos="zoom-in-up"
      data-aos-duration="900"
      class="hidden_Navbar_firstSectionContainer"
      id="hidden_Navbar_firstSectionContainer"
    >
      <div id="hidden_Navbar_menu-icon">
         <div class="bx bx-menu bx-x"></div>
      </div>
  
      <h1 class="hidden_Navbar_DigitusLogo">
        <a href="index.php"
          ><img
            src="./assets/images/mainlogo.png"
            class="logoImage"
            alt="Digitus"
            height="90x"
        /></a>
      </h1>
      <div class="hidden_navmenu">
        <ul class="hidden_navmenu-ul">
          <li>
            <button id="button_expertise" class="hidden_Navbar_button">
              <a href="#">Expertise</a>
              <i
                class="fa fa-caret-down hidden_Navbar_drop_icon"
                aria-hidden="true"
              ></i>
            </button>
            <div id="dropdown_expertise" class="dropdown_division">
              <ul class="dropdown_unorderedlist">
                <li class="dropdown_unordered_heading yellowTextHiddenNavbar">
                  Notre expertise
                </li>
                <a style="text-decoration: none;color: orange;" href="edipul.php"><li class="dropdownitem">
                  EDI- Electronic Data Interchange
                </li></a>
                <li class="dropdownitem">Electronic invoicing</li>
                <li class="dropdownitem">
                  WebEDI : Portail Client / Fournisseur
                </li>
              </ul>
            </div>
          </li>
          <li>
            <button id="button_solution" class="hidden_Navbar_button">
              <a href="#">Solutions</a>
              <i
                class="fa fa-caret-down hidden_Navbar_drop_icon"
                aria-hidden="true"
              ></i>
            </button>
            <div id="dropdown_solution" class="dropdown_division">
              <ul class="dropdown_unorderedlist">
                <li class="dropdown_unordered_heading">Nos solutions</li>
                <li class="dropdownitem yellowTextHiddenNavbar">
                  On premise
                </li>
                <li class="dropdownitem">TradeXpress</li>
                <li class="dropdownitem">IBM Sterling</li>
                <li class="dropdownitem">Cleo</li>
                <li class="dropdownitem yellowTextHiddenNavbar">Cloud</li>
                <a style="text-decoration: none; color: orange;" href="hubtimize.php"><li class="dropdownitem">Hubtimize®</li></a>
              </ul>
            </div>
          </li>
  
          <li>
            <button id="button_services" class="hidden_Navbar_button">
              <a href="#">Services</a>
              <i
                class="fa fa-caret-down hidden_Navbar_drop_icon"
                aria-hidden="true"
              ></i>
            </button>
            <div id="dropdown_services" class="dropdown_division">
              <ul class="dropdown_unorderedlist">
                <li class="dropdown_unordered_heading">Nos services</li>
                <a style="text-decoration: none;color: orange;" href="edi.php"> <li class="yellowColorFontThird">EDP</li> </a>
                <a style="text-decoration: none;color: orange;" href="edp.php"> <li class="yellowColorFontThird">EDI</li> </a>
                <a style="text-decoration: none;color: orange;" href="cx.php"> <li class="yellowColorFontThird">CX</li> </a>
                <a style="text-decoration: none;color: orange;" href="bi.php"> <li class="yellowColorFontThird">BI</li> </a>
   
              </ul>
            </div>
          </li>
  
          <li>
            <button class="hidden_Navbar_button" disabled>
              <a href="blog.php"> Blog</a>
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
        <select name="cars" id="cars"  style="border: none">
          <option value="volvo">En</option>
          <option value="saab">Fr</option>
          <option value="mercedes">Tr</option>
        </select>
      </div>
    </div>
  </div>
      <div class="container-1">
        <div class="buttons">
            <a href="#" class="myButton ">All Categories</a>
            <a href="#" class="myButton">Digitus News</a>
            <a href="#" class="myButton">Electronic invocing</a>
            <a href="#" class="myButton">Guide</a>
            <a href="#" class="myButton">EDI</a>
        </div>

        <div class="card-container">
            <div class="card" id="1">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Digitus News, Electronic Invocing</p>
                    <img src="./assets/images/TRANSFORMATION-DIGITALE.jpg" alt="Image 1">
                </div>
              <div class="container">
                <p class="card-para">10/27/2023</p>
                <a class="card-title" href="#">The latest electronic invoicing calendar: the essential things to remember</a>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
    
            <div class="card" id="2">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Digitus News</p>
                    <img src="./assets/images/Guide-facturation-electronique.jpg" alt="Image 2">
                </div>
                <div class="container">
                  <p class="card-para">09/18/2023</p>
                  <a class="card-title" href="#">Digitus x IBM x Satisco: a winning synergy of B2B integration</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="3">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Guide, EDI</p>
                    <img src="./assets/images/EDI.jpg" alt="Image 3">
                </div>
                <div class="container">
                  <p class="card-para">05/09/2023</p>
                  <a class="card-title" href="#">EDI: understand everything about Electronic Data Interchange</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="4">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Electronic invocing, Guide </p>
                    <img src="./assets/images/Guide-facturation-electronique.jpg" alt="Image 4">
                </div>
                <div class="container">
                  <p class="card-para">02/05/2023</p>
                  <a class="card-title" href="#">Switch to electronic invoicing: the complete guide for your business</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="5">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Digitus News</p>
                    <img src="./assets/images/secondcomponent.jpg" alt="Image 5">
                </div>
                <div class="container">
                  <p class="card-para">04/25/2023</p>
                  <a class="card-title" href="#">SER, Digitus GED partner</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="6">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Electronic invocing, EDI</p>
                    <img src="./assets/images/TRANSFORMATION-DIGITALE.jpg" alt="Image 6">
                </div>
                <div class="container">
                  <p class="card-para">04/18/2023</p>
                  <a class="card-title" href="#">Electronic invoicing, a vector of digital transformation for your business</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="7">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Electronic invocing</p>
                    <img src="./assets/images/Systeme-de-Facturation-electronique-B2B-France.jpg" alt="Image 7">
                </div>
                <div class="container">
                  <p class="card-para">04/11/2023</p>
                  <a class="card-title" href="#">B2B electronic invoicing in France: Everything you need to know about the “Y” diagram of the Clearance model.</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="8">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">EDI</p>
                    <img src="./assets/images/AS2-Digit.jpg" alt="Image 8">
                </div>
                <div class="container">
                  <p class="card-para">04/04/2023</p>
                  <a class="card-title" href="#">AS2: Secure protocol for the exchange of EDI data between companies</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="9">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Electronic invocing</p>
                    <img src="./assets/images/Factur-X.jpg" alt="Image 9">
                </div>
                <div class="container">
                  <p class="card-para">03/28/2023</p>
                  <a class="card-title" href="#">Factur-X, an essential standard for electronic invoicing</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
    
            <div class="card" id="10">
                <div class="upper-text">
                    <p class="upr-txt">Digitus</p>
                    <p class="lwr-txt">Digitus News, EDI</p>
                    <img src="./assets/images/O2C.jpg" alt="Image 10">
                </div>
                <div class="container">
                  <p class="card-para">03/21/2023</p>
                  <a class="card-title" href="#">The digitalization of Order to Cash: challenges and advantages for companies</a>
                  <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-2">
        <h2 class="heading-2">Stay informed of our news!</h2>
        <div class="newsletter-container">
            <div class="news-gif">
                <img src="./assets/images/newsletter.gif" alt="newsletter gif">
            </div>
            <div class="news-content">
                <h1 class="news-heading">Newsletter Subscription</h1>
                <p class="news-text">Click the button and enter your email to receive our latest information.</p>
                <button class="news-btn">Subscribe to the newsletter</button>
                <div>
                    <p class="news-text">By transmitting your email address, you agree that the information entered will be collected, used, exploited and processed by Digitus to enable the sending of the newsletter.</p>
                </div>
            </div>
        </div>
    </div>
  
    <section class="home_contacter">
      <div class="home_texter">
        <div>
          <span data-aos="fade-down" data-aos-duration="900"
            class="inline-block text-xs text-gray-50 uppercase aos-init aos-animate">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">A question ? </font>
              <font style="vertical-align: inherit;">A project ?</font>
            </font>
          </span>
        </div>
        <h2 data-aos="fade-up" data-aos-duration="500">Enter your contact details to be quickly contacted by a
          specialist</h2>
        <p data-aos="fade-up" data-aos-duration="500">We are here to advise you on all your dematerialization
          projects.</p>
        <div style="margin-top: 40px" class="hideonph">
          <canvas style="border: 1px solid #000;background-color: white;border-radius: 3px;" class="captcha">captcha
            text</canvas>
    
          <p style="margin-bottom: 12px;">captcha code above</p>
        </div>
        <br>
    
      </div>
      <div data-aos="fade-up" data-aos-duration="500" class="home_inputer">
        <div class="home_wti">
          <input style="color:black;" type="text" placeholder="First Name *">
          <input style="color:black;" type="text" placeholder="Last Name *">
        </div>
        <input style="color:black;" type="email" placeholder="E-mail *">
        <div class="home_wti">
          <input style="color:black;" type="text" placeholder="Business *">
          <input style="color:black;" type="text" placeholder="Phone *">
        </div>
        <div class="center">
          <div id="captchaBackground">
    
            <input placeholder="Enter Captha*" style="color:black;" id="textBox" type="text" name="text">
    
            <div class="hideondesk">
              <canvas style="border: 1px solid #000;background-color: white;border-radius: 3px;" class="captcha">captcha
                text</canvas>
    
              <p style="margin-bottom: 12px;">captcha code above</p>
              <!-- <br> -->
            </div>
    
            <div id="buttons">
              <button id="refreshButton" type="submit">Refresh</button>
              <input style="color:black;" id="submitButton" type="submit">
            </div>
    
            <span id="output"></span>
          </div>
        </div>
        <p>The personal data collected will be used by Digitus to process the requests made and/or manage the
          services requested. You can exercise your rights of access, rectification, opposition and portability of
          your data in accordance with the provisions stipulated in the confidentiality policy.</p>
        <!-- <button class="home_sendbtn">Send</button> -->
    
      </div>
    </section>
    <footer class="footer_Priyansh">
      <div class="container">
        <div class="row">
          <div class="footer_Priyansh-col">
            <h4>Monitoring</h4>
            <ul>
              <li><a href="#">Database Administration</a></li>
              <li><a href="#">QAD Installation</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">health</a></li>
            </ul>
          </div>
          <div class="footer_Priyansh-col">
            <h4>EDI Offerings</h4>
            <ul>
              <li><a href="#">EDI Translation</a></li>
              <li><a href="#">Consulting &amp; Assessment</a></li>
              <li><a href="#">Migrations/Upgrade</a></li>
              <li><a href="#">Business support</a></li>
              
            </ul>
          </div>
          <div class="footer_Priyansh-col">
            <h4>Offerings</h4>
            <ul>
              <li><a href="#">Business Intelligence</a></li>
              <li><a href="#">Modern Data Platform</a></li>
              <li><a href="#">Data Lifecycle</a></li>
              <li><a href="#">Data Intelligence</a></li>
            </ul>
          </div>
          <div class="footer_Priyansh-col">
            
            <h4 style="margin-left: 10px;">follow us</h4>
            <div style="margin-left: 10px;" class="social-links">
            <?php
                            $q = "SELECT * FROM  social ORDER BY id DESC LIMIT 5";
                            $r123 = mysqli_query($con, $q);

                            while ($ro = mysqli_fetch_array($r123)) {

                                $id = "$ro[id]";
                                $fa = "$ro[fa]";
                                $social_link = "$ro[social_link]";

                                print "<a href='$social_link'><i class='fab $fa'></i></a>";
                            }
                            ?>
              <img  class="footer_Priyansh_image"loading="lazy" src="./assets/images/mainlogo.png" alt="">

            </div>
            
  
          </div>
          <li style="box-sizing:border-box;align-items:center;margin: auto;color: #ffffff;">© Copyright 2023 Digitus. All Rights Reserved.</li>
        </div>
      </div>
    </footer>
    <script src="./assets/script/cptcha.js"></script>
    <script src="./assets/script/index.js"></script>
    <script>
        document.querySelectorAll('.card').forEach(e => e.addEventListener('click', ()=> {
            window.location.href = 'blogape.php'
        }))
    </script>

<script src="./assets/script/handlescroll.js"></script>
</body>
</html>
