<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/contactstyle.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/secondsection.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/footer_2.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
  <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>
  

</head>

<body id="body" onscroll="handleScroll()">

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

    <!-- contact us section -->

    <section class="contact-section">
        <div class="flex-box">
            <div class="contact-left-side">
                <div>
                    <div class="contact-top">
                        <h2 class="contact-header">
                            <font>
                                Let's stay in
                            </font>
                            <label class="orange">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit; color: orange;">
                                        touch
                                    </font>
                                </font>
                            </label>
                        </h2>
                        <p class="contact-1para">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Our team is available from 9 a.m. to 6 p.m. and will be happy to discuss the needs
                                    of your structure with you.
                                </font>
                            </font>
                        </p>
                    </div>
                    <div class="contact-email">
                        <img src="./assets/images/mailicon.png" alt="icon" class="blue-image {
                                filter: grayscale(100%) sepia(100%) hue-rotate(180deg);
                              }">
                        <p><a href="mailto:contact@esalink.com">contact@esalink.com</a></p>
                    </div>
                    <div class="con-counrty">
                        <div class="con-cn-logo">
                            <img src="./assets/images/fr.6a3e73fa.svg" alt="logo">
                        </div>
                        <div class="con-text">
                            <h3 class="h3">France</h3>
                            <p class="p">
                                <font>
                                    2 rue Jules Méline, 51430 Bezannes
                                </font>
                            </p>
                            <p class="p">
                                <a href="tel:+33326356287">+33 3 26 35 62 87</a>
                            </p>
                        </div>
                    </div>
                    <div class="con-counrty">
                        <div class="con-cn-logo">
                            <img src="./assets/images/uk.e38acaa1.svg" alt="logo">
                        </div>
                        <div class="con-text">
                            <h3 class="h3">UK</h3>
                            <p class="p">235 Vauxhall Bridge Road, SW1V1EJ London</p>
                            <p class="p"><a href="tel:+14953893995">+1 (495) 389 3995</a></p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="right-side">
                <div class="form">
                    <h2 class="h2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Contact us
                            </font>
                        </font>
                    </h2>
                    <form >
                        <div class="input-box">
                            <input type="text" name="FirstName" placeholder="First Name *">
                            <input type="text" name="SecondName" placeholder="Second Name *">
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Email *">
                            <input type="tel" name="tel" placeholder="phone *">
                        </div>
                        <div class="input-box">
                            <input type="text" name="company" placeholder="Business *" style="width: 88%;">
                        </div>
                        <div class="input-textarea">
                            <textarea name="Message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="contact-btn">
                            <button>
                                <font style="vertical-align: inherit;">SEND</font>
                            </button>
                        </div>
                        <div class="form-bottom">
                            <p>
                                <font>By clicking on the "Send" button, you agree to </font> <br> our
                                <a href="#">Terms & Conditions</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

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
              <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script>
        AOS.init();
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="./assets/script/handlescroll.js"></script>
    <script src="./assets/script/faq.js"></script>
    

</body>

</html>
