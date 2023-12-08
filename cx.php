<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/styletma.css" />
  <link rel="stylesheet" href="./assets/css/secondsection.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/footer_2.css">
  <link rel="stylesheet" href="./assets/css/footer.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
  <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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

    
  <div class="tmaMainContainer">
    <div data-aos="fade-up" class="tmaMainpart1">
      <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
      </div>
      <div class="tmaSubpart1">
        <h1>Entrust the <span>maintainance and supervision</span> of your <span>edi</span> <br> system to your experts
        </h1>
      </div>
      <div class="tmaSubpart2">
        <div data-aos="fade-up" class="tmaSubpart2div">
          <p>Your EDI - EAI platform is a central tool in the proper functioning  your organization. Effective
            management of your EDI ecosystem is crucial to the productivity of your business.
            Digitus, official provider of several publishers,  you with proven expertise in the maintenance
            and supervision of your EDI ecosystem. <br><br>
            Our certified specialists on TradeXpress® / TradeXpress® Infinity / IBM Sterling® B2B Integrator and Cleo
            Integration Cloud solutions are working to continually ensure efficient operation of your EDI / EAI
            platform. <br> <br>
            We adapt to your needs to allow your teams to refocus on high added value activities focused on the core
            business.</p>
          <button  class="tmaSubpart2button">INITIATE A TMA REQUEST</button>
        </div>

        <img src="./assets/images/IMAGES/photo1rish.webp" alt=" " class="uncle-part-1">

      </div>

    </div>
    <!---  Tma Section 1 end  --->

    <!-- Tma Section 2 start  -->

    <div data-aos="fade-up" class="tmaMainpart2">  
      <div data-aos="fade-up" class="tmaMainpart2subdiv">
          <div class="tmaMainpart2sub1">
              <h1>TMA - Outsourced EDI Maintenance</h1>
          </div >
          <div data-aos="fade-up" class="tmaMainpart2sub2">
              <div class="tmaMainpart2sub2divpara">
                  <img class="tmaMainpart2icon" src="./assets/images/IMAGES/ICON1rish.svg" alt="">
                  <p>TMA refers to the outsourcing of skills, for the management of your projects or maintenance support: we take care of everything, for you and according to your specificities!</p>
              </div>
              <div  class="tmaMainpart2sub2divpara">
                  <img class="tmaMainpart2icon" src="./assets/images/IMAGES/icon2rish.svg" alt="">
                  <p>So that you can concentrate on your core busiDigitus mobilizes a team of specialists for the Application Maintenance (TMA) of your platform.</p>
              </div >
              <div class="tmaMainpart2sub2divpara"> 
                  <img class="tmaMainpart2icon" src="./assets/images/IMAGES/icon3rish.svg" alt="">
                  <p>Benefit from the knowledge and synergies developed by our company, in a single contract.</p>
              </div>
              <div class="tmaMainpart2sub2divpara">
                  <img class="tmaMainpart2icon" src="./assets/images/IMAGES/icon4rish.svg" alt="">
                  <p>With TMA, your platform is maintained and supervised continuously and tickets are processed over a minimum time range from 9:00 am to 6:00 pm or beyond with a transparent on-call system. Users continually receive a rapid response tailored to their needs. <br><br>

                      Choosing TMA ensures that IT departments and Technical Managers can quickly process development and deployment requests.</p>
              </div>
          </div>
          <div data-aos="fade-up" class="tmaMainpart2sub3">
              <button>BUILD A TAILOR </button>
          </div>
      </div>
  </div>

  <!-- Tma Section 2 end  -->

  <!-- Tma Section 3 start  -->

    <div class="tmaMainpart3">
      <div class="tmaMainpart3Subpartmax">
        <div data-aos="fade-up" class="tmaMainpart3sub1">
          <h1>Satisfaction at <span>the</span> heart of our <span>service</span> </h1>
        </div>
        <div data-aos="fade-up" class="tmaMainpart3sub2">
          <img class="tmaMainpart3sub2img" src="./assets/images/IMAGES/image3rish.webp" alt="">
          <div data-aos="fade-right" class="tmaMainpart3sub2listandpara">
            <ul class="tmaMainpart3sub2ul">
              <li>A team of consultants certified on TMA object technologies</li>
              <li>The assurance of maximum responsiveness</li>
              <li>Specific monitoring and management tools</li>
              <li>A one-stop shop for the project</li>
              <li>A transparent, high-quality service</li>
            </ul>
            <br>
            <br>
            <br>
            <p>By outsourcing the evolving maintenance of their platform to business experts, our clients' IT teams
              can move forward on </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Tma Section 3 end  -->

    <!-- Tma Section 4 start  -->
    <div data-aos="fade-up" class="tmaMainpart454">
      <div data-aos="fade-up" class="tmaMainpart454subpart">
        <h1 style="font-size: 40px;color:rgb(74, 69, 69);text-align: center;">Why use TMA <span
            style="color :orange">for</span> your EDI platform?</h1>
      </div>
      <div data-aos="fade-up" class="tma_Container_Tma_card_priyansh">
        <div class="Tma_card_priyansh">
          <svg fill="#FFA500" class="Tma_card_priyansh_icon" class="rishabhhoverpara1"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997">
            <defs>
              <clipPath id="5b15604c1f">
                <path d="M 0 15.886719 L 75 15.886719 L 75 59.386719 L 0 59.386719 Z M 0 15.886719 "
                  clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <g clip-path="url(#5b15604c1f)">
              <path
                d="M 23.574219 20.085938 L 18.472656 15.835938 L 0.558594 37.554688 L 18.472656 59.285156 L 23.574219 55.035156 L 9.167969 37.554688 Z M 21.023438 40.886719 L 27.648438 40.886719 L 27.648438 34.21875 L 21.023438 34.21875 Z M 54.140625 34.21875 L 47.519531 34.21875 L 47.519531 40.886719 L 54.140625 40.886719 Z M 34.269531 40.886719 L 40.894531 40.886719 L 40.894531 34.21875 L 34.269531 34.21875 Z M 56.691406 15.820312 L 51.589844 20.070312 L 65.996094 37.554688 L 51.589844 55.019531 L 56.691406 59.269531 L 74.609375 37.554688 Z M 56.691406 15.820312 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg>
          <h2>Tailor-made support</h2>
          <p> Database Administration
            - QAD Installation
            - Proactive application health
            monitoring
          </p>

        </div>

        <div class="Tma_card_priyansh">
          <svg fill="#FFA500" class="Tma_card_priyansh_icon" class="rishabhhoverpara2"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997">
            <defs>
              <clipPath id="91c330f784">
                <path d="M 34 61 L 41 61 L 41 67.5 L 34 67.5 Z M 34 61 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="72b6d60d1a">
                <path d="M 56 7.5 L 64 7.5 L 64 18 L 56 18 Z M 56 7.5 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="103af9cc2f">
                <path d="M 43 55 L 58 55 L 58 67.5 L 43 67.5 Z M 43 55 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="6114efa34c">
                <path d="M 11 7.5 L 19 7.5 L 19 18 L 11 18 Z M 11 7.5 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="5cbfc2f080">
                <path d="M 17 55 L 32 55 L 32 67.5 L 17 67.5 Z M 17 55 " clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <path
              d="M 44.902344 26.054688 C 45.164062 26.074219 45.410156 26.171875 45.59375 26.351562 L 47.464844 28.1875 C 47.953125 28.671875 47.953125 29.449219 47.464844 29.933594 L 38.535156 38.957031 L 36.175781 41.285156 C 35.6875 41.769531 34.894531 41.769531 34.40625 41.285156 L 27.589844 34.492188 C 27.105469 34.003906 27.105469 33.214844 27.589844 32.726562 L 29.496094 30.804688 C 29.980469 30.316406 30.765625 30.316406 31.25 30.804688 L 35.304688 34.84375 L 43.679688 26.496094 C 43.992188 26.191406 44.464844 26.019531 44.902344 26.054688 Z M 37.515625 13.652344 C 37.414062 13.652344 37.308594 13.675781 37.222656 13.714844 L 20.4375 20.984375 C 20.070312 21.113281 19.820312 21.464844 19.820312 21.851562 L 19.820312 26.757812 C 19.820312 34.175781 22.03125 40.007812 25.457031 44.222656 C 28.894531 48.445312 32.886719 51.519531 37.527344 54.042969 C 42.179688 51.519531 46.167969 48.453125 49.597656 44.222656 C 53.027344 39.996094 55.238281 34.171875 55.238281 26.757812 L 55.238281 21.851562 C 55.238281 21.457031 54.996094 21.113281 54.617188 20.984375 L 37.832031 13.714844 C 37.722656 13.664062 37.617188 13.648438 37.515625 13.652344 Z M 37.515625 13.652344 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 67.742188 13.433594 C 70.265625 15.808594 71.457031 18.511719 71.320312 20.984375 C 71.183594 23.4375 69.71875 25.59375 67.441406 26.585938 C 65.164062 27.578125 63.148438 27.253906 61.675781 26.015625 C 60.1875 24.761719 59.230469 22.640625 59.238281 19.953125 C 59.238281 19.40625 59.648438 19.339844 59.957031 19.449219 C 61.980469 20.210938 63.65625 20.867188 65.058594 22.171875 C 64.453125 19.082031 65.933594 15.941406 66.894531 13.617188 C 67.058594 13.207031 67.480469 13.191406 67.742188 13.433594 Z M 67.742188 13.433594 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 73.175781 39.628906 C 73.953125 43.003906 73.429688 45.910156 71.941406 47.890625 C 70.464844 49.855469 68.046875 50.832031 65.601562 50.398438 C 63.152344 49.957031 61.65625 48.570312 61.125 46.71875 C 60.585938 44.851562 60.96875 42.554688 62.476562 40.332031 C 62.78125 39.875 63.164062 40.042969 63.351562 40.3125 C 64.605469 42.066406 65.640625 43.539062 66.082031 45.398438 C 67.292969 42.5 70.273438 40.710938 72.363281 39.308594 C 72.738281 39.0625 73.089844 39.28125 73.175781 39.628906 Z M 73.175781 39.628906 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 67.785156 53.0625 C 67.042969 56.441406 65.324219 58.851562 63.128906 60 C 60.957031 61.140625 58.34375 60.988281 56.324219 59.546875 C 54.304688 58.101562 53.546875 56.210938 53.859375 54.316406 C 54.171875 52.398438 55.507812 50.484375 57.824219 49.113281 C 58.296875 48.839844 58.566406 49.152344 58.625 49.476562 C 59.007812 51.601562 59.304688 53.371094 58.902344 55.242188 C 61.242188 53.136719 64.703125 52.800781 67.195312 52.425781 C 67.636719 52.359375 67.863281 52.714844 67.785156 53.0625 Z M 67.785156 53.0625 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#91c330f784)">
              <path
                d="M 40.710938 64.242188 C 40.710938 66 39.285156 67.425781 37.527344 67.425781 C 35.769531 67.425781 34.34375 66 34.34375 64.242188 C 34.34375 62.484375 35.769531 61.0625 37.527344 61.0625 C 39.285156 61.0625 40.710938 62.484375 40.710938 64.242188 Z M 40.710938 64.242188 "
                fill-opacity="1" fill-rule="evenodd"></path>
            </g>
            <g clip-path="url(#72b6d60d1a)">
              <path
                d="M 61.8125 17.820312 C 57.300781 16.398438 56.902344 13.390625 56.902344 8.554688 C 56.902344 7.5625 57.070312 7.460938 57.832031 7.621094 C 62.917969 8.6875 64.960938 13.367188 63.089844 17.375 C 62.78125 18.023438 62.402344 18.003906 61.8125 17.820312 Z M 61.8125 17.820312 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path
              d="M 72.457031 25.644531 C 74.398438 28.507812 74.964844 31.410156 74.289062 33.789062 C 73.617188 36.152344 71.714844 37.941406 69.273438 38.410156 C 66.832031 38.878906 64.9375 38.121094 63.773438 36.585938 C 62.601562 35.042969 62.125 32.753906 62.726562 30.136719 C 62.851562 29.605469 63.265625 29.628906 63.542969 29.808594 C 65.34375 30.996094 66.835938 31.996094 67.921875 33.578125 C 68.003906 30.433594 70.140625 27.695312 71.589844 25.632812 C 71.84375 25.269531 72.257812 25.34375 72.457031 25.644531 Z M 72.457031 25.644531 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#103af9cc2f)">
              <path
                d="M 57.820312 63.472656 C 55.578125 66.109375 52.929688 67.433594 50.449219 67.425781 C 47.992188 67.410156 45.761719 66.058594 44.652344 63.839844 C 43.542969 61.621094 43.765625 59.59375 44.925781 58.058594 C 46.105469 56.515625 48.183594 55.445312 50.867188 55.320312 C 51.414062 55.296875 51.507812 55.703125 51.40625 56.011719 C 50.75 58.070312 50.179688 59.777344 48.949219 61.238281 C 52 60.472656 55.21875 61.800781 57.597656 62.628906 C 58.019531 62.78125 58.050781 63.195312 57.820312 63.472656 Z M 57.820312 63.472656 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path
              d="M 7.316406 13.433594 C 4.789062 15.808594 3.605469 18.511719 3.738281 20.984375 C 3.875 23.4375 5.335938 25.59375 7.621094 26.585938 C 9.898438 27.578125 11.914062 27.253906 13.382812 26.015625 C 14.867188 24.761719 15.832031 22.640625 15.816406 19.953125 C 15.816406 19.40625 15.40625 19.339844 15.101562 19.449219 C 13.078125 20.210938 11.402344 20.867188 10 22.171875 C 10.609375 19.082031 9.121094 15.941406 8.167969 13.617188 C 8 13.207031 7.574219 13.191406 7.316406 13.433594 Z M 7.316406 13.433594 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 1.882812 39.628906 C 1.109375 43.003906 1.628906 45.910156 3.113281 47.890625 C 4.59375 49.855469 7.015625 50.832031 9.460938 50.398438 C 11.90625 49.957031 13.398438 48.570312 13.933594 46.71875 C 14.472656 44.851562 14.089844 42.554688 12.582031 40.332031 C 12.277344 39.875 11.898438 40.042969 11.703125 40.3125 C 10.449219 42.066406 9.417969 43.539062 8.984375 45.398438 C 7.769531 42.5 4.785156 40.710938 2.691406 39.308594 C 2.324219 39.0625 1.964844 39.28125 1.882812 39.628906 Z M 1.882812 39.628906 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 7.269531 53.0625 C 8.015625 56.441406 9.738281 58.851562 11.925781 60 C 14.109375 61.140625 16.714844 60.988281 18.734375 59.546875 C 20.757812 58.101562 21.511719 56.210938 21.199219 54.316406 C 20.886719 52.398438 19.554688 50.484375 17.238281 49.113281 C 16.765625 48.839844 16.496094 49.152344 16.4375 49.476562 C 16.054688 51.601562 15.753906 53.371094 16.15625 55.242188 C 13.816406 53.136719 10.355469 52.800781 7.863281 52.425781 C 7.425781 52.359375 7.191406 52.714844 7.269531 53.0625 Z M 7.269531 53.0625 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#6114efa34c)">
              <path
                d="M 13.246094 17.820312 C 17.753906 16.398438 18.160156 13.390625 18.160156 8.554688 C 18.160156 7.5625 17.988281 7.460938 17.226562 7.621094 C 12.140625 8.6875 10.097656 13.367188 11.972656 17.375 C 12.277344 18.023438 12.652344 18.003906 13.246094 17.820312 Z M 13.246094 17.820312 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path
              d="M 2.601562 25.644531 C 0.660156 28.507812 0.0976562 31.410156 0.769531 33.789062 C 1.445312 36.152344 3.347656 37.941406 5.789062 38.410156 C 8.226562 38.878906 10.121094 38.121094 11.289062 36.585938 C 12.460938 35.042969 12.929688 32.753906 12.332031 30.136719 C 12.207031 29.605469 11.792969 29.628906 11.523438 29.808594 C 9.714844 30.996094 8.222656 31.996094 7.140625 33.578125 C 7.054688 30.433594 4.917969 27.695312 3.472656 25.632812 C 3.214844 25.269531 2.804688 25.34375 2.601562 25.644531 Z M 2.601562 25.644531 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#5cbfc2f080)">
              <path
                d="M 17.238281 63.472656 C 19.480469 66.109375 22.128906 67.433594 24.605469 67.425781 C 27.0625 67.410156 29.300781 66.058594 30.410156 63.839844 C 31.519531 61.621094 31.292969 59.59375 30.128906 58.058594 C 28.949219 56.515625 26.878906 55.445312 24.1875 55.320312 C 23.640625 55.296875 23.554688 55.703125 23.652344 56.011719 C 24.308594 58.070312 24.875 59.777344 26.113281 61.238281 C 23.054688 60.472656 19.84375 61.800781 17.464844 62.628906 C 17.042969 62.78125 17.003906 63.195312 17.238281 63.472656 Z M 17.238281 63.472656 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg>
          <h2> Regular piloting</h2>
          <p>Green / Brown Field
            - Consulting & Assessment
            - Implementation of Modules
            - Core Model Roll-outs
            - Migrations </p>

        </div>
        <div class="Tma_card_priyansh">
          <svg fill="#FFA500" class="Tma_card_priyansh_icon" class="rishabhhoverpara3"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997">
            <defs>
              <clipPath id="4630d64030">
                <path d="M 2.53125 24 L 16 24 L 16 38 L 2.53125 38 Z M 2.53125 24 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="25c9f9d673">
                <path d="M 59 23 L 72.28125 23 L 72.28125 37 L 59 37 Z M 59 23 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="d12969dec5">
                <path d="M 2.53125 39 L 72.28125 39 L 72.28125 75 L 2.53125 75 Z M 2.53125 39 " clip-rule="nonzero">
                </path>
              </clipPath>
            </defs>
            <g clip-path="url(#4630d64030)">
              <path
                d="M 8.820312 24.917969 L 8.835938 24.917969 C 9.246094 24.917969 9.648438 24.957031 10.046875 25.035156 C 10.445312 25.117188 10.835938 25.234375 11.210938 25.390625 C 11.585938 25.546875 11.945312 25.738281 12.285156 25.964844 C 12.621094 26.191406 12.9375 26.449219 13.222656 26.738281 C 13.511719 27.027344 13.769531 27.34375 13.996094 27.679688 C 14.222656 28.019531 14.414062 28.378906 14.570312 28.757812 C 14.726562 29.132812 14.84375 29.523438 14.921875 29.925781 C 15 30.324219 15.042969 30.730469 15.042969 31.136719 L 15.042969 31.15625 C 15.042969 31.5625 15 31.96875 14.921875 32.367188 C 14.84375 32.769531 14.726562 33.15625 14.570312 33.535156 C 14.414062 33.914062 14.222656 34.269531 13.996094 34.609375 C 13.769531 34.949219 13.511719 35.265625 13.222656 35.554688 C 12.9375 35.84375 12.621094 36.101562 12.285156 36.328125 C 11.945312 36.554688 11.585938 36.746094 11.210938 36.902344 C 10.835938 37.058594 10.445312 37.175781 10.046875 37.257812 C 9.648438 37.335938 9.246094 37.375 8.835938 37.375 L 8.820312 37.375 C 8.414062 37.375 8.007812 37.335938 7.609375 37.257812 C 7.210938 37.175781 6.820312 37.058594 6.445312 36.902344 C 6.070312 36.746094 5.710938 36.554688 5.375 36.328125 C 5.035156 36.101562 4.722656 35.84375 4.433594 35.554688 C 4.144531 35.265625 3.886719 34.949219 3.660156 34.609375 C 3.433594 34.269531 3.246094 33.914062 3.089844 33.535156 C 2.933594 33.15625 2.816406 32.769531 2.734375 32.367188 C 2.65625 31.96875 2.617188 31.5625 2.617188 31.15625 L 2.617188 31.136719 C 2.617188 30.730469 2.65625 30.324219 2.734375 29.925781 C 2.816406 29.523438 2.933594 29.132812 3.089844 28.757812 C 3.246094 28.378906 3.433594 28.019531 3.660156 27.679688 C 3.886719 27.34375 4.144531 27.027344 4.433594 26.738281 C 4.722656 26.449219 5.035156 26.191406 5.375 25.964844 C 5.710938 25.738281 6.070312 25.546875 6.445312 25.390625 C 6.820312 25.234375 7.210938 25.117188 7.609375 25.035156 C 8.007812 24.957031 8.414062 24.917969 8.820312 24.917969 Z M 8.820312 24.917969 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path
              d="M 36.15625 0 L 36.171875 0 C 36.578125 0 36.984375 0.0390625 37.382812 0.121094 C 37.78125 0.199219 38.171875 0.316406 38.546875 0.472656 C 38.921875 0.628906 39.28125 0.820312 39.617188 1.046875 C 39.957031 1.273438 40.269531 1.53125 40.558594 1.820312 C 40.847656 2.109375 41.105469 2.425781 41.332031 2.765625 C 41.558594 3.105469 41.75 3.460938 41.902344 3.839844 C 42.058594 4.21875 42.175781 4.605469 42.257812 5.007812 C 42.335938 5.40625 42.375 5.8125 42.375 6.21875 L 42.375 6.238281 C 42.375 6.644531 42.335938 7.050781 42.257812 7.453125 C 42.175781 7.851562 42.058594 8.242188 41.902344 8.617188 C 41.75 8.996094 41.558594 9.355469 41.332031 9.695312 C 41.105469 10.035156 40.847656 10.347656 40.558594 10.636719 C 40.269531 10.925781 39.957031 11.183594 39.617188 11.410156 C 39.28125 11.636719 38.921875 11.828125 38.546875 11.984375 C 38.171875 12.140625 37.78125 12.257812 37.382812 12.339844 C 36.984375 12.417969 36.578125 12.457031 36.171875 12.457031 L 36.15625 12.457031 C 35.746094 12.457031 35.34375 12.417969 34.945312 12.339844 C 34.546875 12.257812 34.15625 12.140625 33.78125 11.984375 C 33.40625 11.828125 33.046875 11.636719 32.707031 11.410156 C 32.371094 11.183594 32.054688 10.925781 31.769531 10.636719 C 31.480469 10.347656 31.222656 10.035156 30.996094 9.695312 C 30.769531 9.355469 30.578125 8.996094 30.421875 8.617188 C 30.265625 8.242188 30.148438 7.851562 30.070312 7.453125 C 29.992188 7.050781 29.953125 6.644531 29.953125 6.238281 L 29.953125 6.21875 C 29.953125 5.8125 29.992188 5.40625 30.070312 5.007812 C 30.148438 4.605469 30.265625 4.21875 30.421875 3.839844 C 30.578125 3.460938 30.769531 3.105469 30.996094 2.765625 C 31.222656 2.425781 31.480469 2.109375 31.769531 1.820312 C 32.054688 1.53125 32.371094 1.273438 32.707031 1.046875 C 33.046875 0.820312 33.40625 0.628906 33.78125 0.472656 C 34.15625 0.316406 34.546875 0.199219 34.945312 0.121094 C 35.34375 0.0390625 35.746094 0 36.15625 0 Z M 36.15625 0 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#25c9f9d673)">
              <path
                d="M 65.976562 23.671875 L 65.992188 23.671875 C 66.398438 23.671875 66.804688 23.710938 67.203125 23.789062 C 67.601562 23.871094 67.992188 23.988281 68.367188 24.144531 C 68.742188 24.300781 69.101562 24.492188 69.4375 24.71875 C 69.777344 24.945312 70.089844 25.203125 70.378906 25.492188 C 70.667969 25.78125 70.925781 26.097656 71.152344 26.4375 C 71.378906 26.773438 71.566406 27.132812 71.722656 27.511719 C 71.878906 27.886719 71.996094 28.277344 72.078125 28.679688 C 72.15625 29.078125 72.195312 29.484375 72.195312 29.890625 L 72.195312 29.910156 C 72.195312 30.316406 72.15625 30.722656 72.078125 31.121094 C 71.996094 31.523438 71.878906 31.914062 71.722656 32.289062 C 71.566406 32.667969 71.378906 33.023438 71.152344 33.363281 C 70.925781 33.703125 70.667969 34.019531 70.378906 34.308594 C 70.089844 34.597656 69.777344 34.855469 69.4375 35.082031 C 69.101562 35.308594 68.742188 35.5 68.367188 35.65625 C 67.992188 35.8125 67.601562 35.929688 67.203125 36.011719 C 66.804688 36.089844 66.398438 36.128906 65.992188 36.128906 L 65.976562 36.128906 C 65.566406 36.128906 65.164062 36.089844 64.765625 36.011719 C 64.367188 35.929688 63.976562 35.8125 63.601562 35.65625 C 63.226562 35.5 62.867188 35.308594 62.527344 35.082031 C 62.191406 34.855469 61.875 34.597656 61.589844 34.308594 C 61.300781 34.019531 61.042969 33.703125 60.816406 33.363281 C 60.589844 33.023438 60.398438 32.667969 60.242188 32.289062 C 60.085938 31.914062 59.96875 31.523438 59.890625 31.121094 C 59.8125 30.722656 59.769531 30.316406 59.769531 29.910156 L 59.769531 29.890625 C 59.769531 29.484375 59.8125 29.078125 59.890625 28.679688 C 59.96875 28.277344 60.085938 27.886719 60.242188 27.511719 C 60.398438 27.132812 60.589844 26.773438 60.816406 26.4375 C 61.042969 26.097656 61.300781 25.78125 61.589844 25.492188 C 61.875 25.203125 62.191406 24.945312 62.527344 24.71875 C 62.867188 24.492188 63.226562 24.300781 63.601562 24.144531 C 63.976562 23.988281 64.367188 23.871094 64.765625 23.789062 C 65.164062 23.710938 65.566406 23.671875 65.976562 23.671875 Z M 65.976562 23.671875 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path
              d="M 7.824219 19.542969 C 7.464844 20.167969 7.121094 20.804688 6.796875 21.453125 L 9.023438 22.5625 C 9.320312 21.964844 9.636719 21.375 9.972656 20.796875 C 12.277344 16.839844 15.285156 13.535156 19.007812 10.875 L 20.574219 14.011719 L 26.386719 5.289062 L 16.214844 5.289062 L 17.882812 8.628906 C 13.730469 11.523438 10.375 15.164062 7.824219 19.542969 Z M 7.824219 19.542969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 65.722656 20.042969 L 64.5 10.074219 L 61.265625 12.222656 C 57.269531 8.308594 52.597656 5.542969 47.25 3.925781 L 46.535156 6.3125 C 51.3125 7.753906 55.519531 10.195312 59.148438 13.625 L 56.480469 15.394531 Z M 65.722656 20.042969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path
              d="M 22.496094 36.128906 C 22.496094 37.109375 22.589844 38.082031 22.78125 39.046875 C 22.972656 40.007812 23.257812 40.945312 23.632812 41.851562 C 24.003906 42.757812 24.464844 43.621094 25.007812 44.433594 C 25.554688 45.25 26.171875 46.007812 26.863281 46.699219 C 27.554688 47.394531 28.308594 48.015625 29.121094 48.558594 C 29.9375 49.105469 30.796875 49.566406 31.699219 49.941406 C 32.605469 50.316406 33.539062 50.601562 34.496094 50.792969 C 35.457031 50.984375 36.425781 51.078125 37.40625 51.078125 C 38.386719 51.078125 39.355469 50.984375 40.316406 50.792969 C 41.273438 50.601562 42.207031 50.316406 43.113281 49.941406 C 44.015625 49.566406 44.875 49.105469 45.691406 48.558594 C 46.503906 48.015625 47.257812 47.394531 47.949219 46.699219 C 48.640625 46.007812 49.257812 45.25 49.804688 44.433594 C 50.347656 43.621094 50.808594 42.757812 51.179688 41.851562 C 51.554688 40.945312 51.839844 40.007812 52.03125 39.046875 C 52.222656 38.082031 52.316406 37.109375 52.316406 36.128906 C 52.316406 35.148438 52.222656 34.175781 52.03125 33.214844 C 51.839844 32.25 51.554688 31.316406 51.179688 30.410156 C 50.808594 29.5 50.347656 28.640625 49.804688 27.824219 C 49.257812 27.007812 48.640625 26.253906 47.949219 25.558594 C 47.257812 24.863281 46.503906 24.246094 45.691406 23.699219 C 44.875 23.152344 44.015625 22.691406 43.113281 22.316406 C 42.207031 21.941406 41.273438 21.65625 40.316406 21.464844 C 39.355469 21.273438 38.386719 21.179688 37.40625 21.179688 C 36.425781 21.179688 35.457031 21.273438 34.496094 21.464844 C 33.539062 21.65625 32.605469 21.941406 31.699219 22.316406 C 30.796875 22.691406 29.9375 23.152344 29.121094 23.699219 C 28.308594 24.246094 27.554688 24.863281 26.863281 25.558594 C 26.171875 26.253906 25.554688 27.007812 25.007812 27.824219 C 24.464844 28.640625 24.003906 29.5 23.632812 30.410156 C 23.257812 31.316406 22.972656 32.25 22.78125 33.214844 C 22.589844 34.175781 22.496094 35.148438 22.496094 36.128906 Z M 30.6875 37.617188 L 35.070312 40.839844 L 44.972656 28.925781 L 46.878906 30.519531 L 36.230469 43.335938 C 36.128906 43.457031 36.007812 43.554688 35.871094 43.632812 C 35.730469 43.707031 35.582031 43.753906 35.425781 43.773438 C 35.269531 43.792969 35.113281 43.78125 34.960938 43.742188 C 34.808594 43.703125 34.667969 43.636719 34.542969 43.542969 L 29.214844 39.625 Z M 30.6875 37.617188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#d12969dec5)">
              <path
                d="M 3.273438 46.65625 L 5.535156 46.65625 C 5.890625 46.664062 6.238281 46.722656 6.578125 46.84375 C 6.917969 46.960938 7.226562 47.128906 7.511719 47.34375 C 7.796875 47.5625 8.039062 47.820312 8.242188 48.113281 C 8.445312 48.410156 8.597656 48.730469 8.699219 49.074219 C 9.21875 50.707031 9.871094 52.285156 10.664062 53.804688 C 10.835938 54.117188 10.957031 54.453125 11.023438 54.804688 C 11.089844 55.160156 11.097656 55.511719 11.050781 55.867188 C 11.003906 56.226562 10.902344 56.5625 10.746094 56.886719 C 10.589844 57.210938 10.386719 57.5 10.136719 57.757812 L 8.53125 59.363281 C 11.074219 63.140625 14.230469 66.296875 18 68.835938 L 19.609375 67.230469 C 19.867188 66.980469 20.15625 66.777344 20.480469 66.621094 C 20.804688 66.464844 21.144531 66.363281 21.5 66.316406 C 21.855469 66.269531 22.207031 66.277344 22.5625 66.34375 C 22.914062 66.410156 23.246094 66.53125 23.5625 66.703125 C 25.082031 67.496094 26.65625 68.148438 28.289062 68.667969 C 28.632812 68.769531 28.953125 68.917969 29.25 69.121094 C 29.542969 69.324219 29.800781 69.566406 30.019531 69.851562 C 30.238281 70.136719 30.402344 70.449219 30.523438 70.785156 C 30.640625 71.125 30.703125 71.472656 30.707031 71.832031 L 30.707031 74.09375 C 35.171875 74.980469 39.640625 74.980469 44.105469 74.09375 L 44.105469 71.832031 C 44.109375 71.472656 44.171875 71.125 44.289062 70.785156 C 44.40625 70.449219 44.574219 70.136719 44.792969 69.851562 C 45.011719 69.566406 45.265625 69.324219 45.5625 69.121094 C 45.859375 68.917969 46.179688 68.769531 46.523438 68.667969 C 48.152344 68.148438 49.730469 67.496094 51.25 66.703125 C 51.566406 66.53125 51.898438 66.410156 52.25 66.34375 C 52.605469 66.277344 52.957031 66.269531 53.3125 66.316406 C 53.667969 66.363281 54.007812 66.464844 54.332031 66.621094 C 54.65625 66.777344 54.945312 66.980469 55.203125 67.230469 L 56.8125 68.835938 C 60.582031 66.296875 63.738281 63.140625 66.28125 59.363281 L 64.675781 57.757812 C 64.425781 57.5 64.222656 57.210938 64.066406 56.886719 C 63.910156 56.5625 63.808594 56.226562 63.761719 55.867188 C 63.714844 55.511719 63.722656 55.160156 63.789062 54.804688 C 63.855469 54.453125 63.976562 54.117188 64.148438 53.804688 C 64.941406 52.285156 65.59375 50.707031 66.113281 49.074219 C 66.214844 48.730469 66.367188 48.410156 66.570312 48.113281 C 66.773438 47.820312 67.015625 47.5625 67.300781 47.34375 C 67.585938 47.128906 67.894531 46.960938 68.234375 46.84375 C 68.574219 46.726562 68.921875 46.664062 69.277344 46.65625 L 71.539062 46.65625 C 71.972656 44.445312 72.191406 42.214844 72.195312 39.960938 L 59.613281 39.960938 C 59.535156 40.636719 59.425781 41.304688 59.285156 41.972656 C 59.148438 42.636719 58.980469 43.296875 58.78125 43.945312 C 58.582031 44.597656 58.355469 45.238281 58.097656 45.867188 C 57.839844 46.496094 57.558594 47.113281 57.242188 47.714844 C 56.929688 48.320312 56.59375 48.910156 56.226562 49.480469 C 55.859375 50.054688 55.46875 50.609375 55.050781 51.144531 C 54.636719 51.683594 54.195312 52.199219 53.734375 52.695312 C 53.269531 53.191406 52.785156 53.667969 52.277344 54.121094 C 51.769531 54.574219 51.246094 55 50.699219 55.40625 C 50.15625 55.8125 49.59375 56.191406 49.011719 56.542969 C 48.433594 56.894531 47.835938 57.222656 47.226562 57.519531 C 46.617188 57.820312 45.996094 58.089844 45.363281 58.332031 C 44.730469 58.574219 44.085938 58.789062 43.433594 58.972656 C 42.777344 59.152344 42.117188 59.308594 41.453125 59.429688 C 40.785156 59.554688 40.113281 59.644531 39.4375 59.707031 C 38.761719 59.769531 38.085938 59.800781 37.40625 59.800781 C 36.726562 59.800781 36.050781 59.769531 35.375 59.707031 C 34.699219 59.644531 34.027344 59.554688 33.359375 59.429688 C 32.695312 59.308594 32.035156 59.152344 31.378906 58.972656 C 30.726562 58.789062 30.082031 58.574219 29.449219 58.332031 C 28.816406 58.089844 28.195312 57.820312 27.585938 57.519531 C 26.976562 57.222656 26.378906 56.894531 25.800781 56.542969 C 25.21875 56.191406 24.65625 55.8125 24.113281 55.40625 C 23.566406 55 23.042969 54.574219 22.535156 54.121094 C 22.027344 53.667969 21.542969 53.191406 21.078125 52.695312 C 20.617188 52.199219 20.175781 51.683594 19.761719 51.144531 C 19.34375 50.609375 18.953125 50.054688 18.585938 49.480469 C 18.21875 48.910156 17.882812 48.320312 17.570312 47.714844 C 17.253906 47.113281 16.972656 46.496094 16.714844 45.867188 C 16.457031 45.238281 16.230469 44.597656 16.03125 43.945312 C 15.832031 43.296875 15.664062 42.636719 15.527344 41.972656 C 15.386719 41.304688 15.277344 40.636719 15.199219 39.960938 L 2.617188 39.960938 C 2.621094 42.214844 2.839844 44.445312 3.273438 46.65625 Z M 3.273438 46.65625 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg>
          <h2>Comprehensive management</h2>
          <p> Business support & Maintenance
            - Proactive Process Monitoring
            - Minor Enhancements
            - Bug Fixes and Patches</p>
        </div>
        <div class="Tma_card_priyansh">
          <svg fill="#FFA500" class="Tma_card_priyansh_icon" class="rishabhhoverpara4"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997">
            <defs>
              <clipPath id="5b15604c1f">
                <path d="M 0 15.886719 L 75 15.886719 L 75 59.386719 L 0 59.386719 Z M 0 15.886719 "
                  clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <g clip-path="url(#5b15604c1f)">
              <path
                d="M 23.574219 20.085938 L 18.472656 15.835938 L 0.558594 37.554688 L 18.472656 59.285156 L 23.574219 55.035156 L 9.167969 37.554688 Z M 21.023438 40.886719 L 27.648438 40.886719 L 27.648438 34.21875 L 21.023438 34.21875 Z M 54.140625 34.21875 L 47.519531 34.21875 L 47.519531 40.886719 L 54.140625 40.886719 Z M 34.269531 40.886719 L 40.894531 40.886719 L 40.894531 34.21875 L 34.269531 34.21875 Z M 56.691406 15.820312 L 51.589844 20.070312 L 65.996094 37.554688 L 51.589844 55.019531 L 56.691406 59.269531 L 74.609375 37.554688 Z M 56.691406 15.820312 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg>
          <h2>Budgetary control</h2>
          <p>Supplier Portal driven EDI for
            small business suppliers
            - Integration/Interfaces
            - API driven third-party web
            interfaces</p>
        </div>

      </div>
    </div>

    <!-- Tma Section 4 end  -->

    <!-- Tma Section 5 start  -->

    <div class="tmaMainpart4">
      <div data-aos="fade-up" class="tmaMainpart4sub1">
        <h1><span>The keys to TMA</span> management</h1>
      </div>
      <div class="tmaMainpart4sub2">
        <div>
          
          <p data-aos="fade-up"><strong>Confidentiality:</strong> Security is at the heart of our concerns. All
            elements exchanged between Digitus and your services are subject to confidentiality clauses.
            Remote connections are secure. Digitus holds ISO2701 certification which confirms the high standards of
            data protection inherent to its scope of activity</p>
        </div>
        <div><img data-aos="fade-up" class="tmaMainpart4icon" src="./assets/images/IMAGES/icon5rish.svg" alt=""></div>
        <div><img data-aos="fade-right" class="tmaMainpart4icon" src="./assets/images/IMAGES/icon6rish.svg" alt=""></div>
        <div>
          <p data-aos="fade-right"><strong>Collaboration:</strong> In order to ensure qualitative and efficient work,
            it is necessary to work hand in hand with your IT department and the professions inherent to your
            activity.
            Transparency and communication are the basis of good management in TMA. A dedicated project manager and
            monthly Steering Committees will allow precise and rigorous monitoring of your activity.</p>
        </div>
      </div>
    </div>
    <!-- Tma Section 5 end  -->

    <!-- Tma Section 6 start  -->

    <div class="tmparts">
      <div class="tmparts2">


        <div class="tmparthead">
          <h1 data-aos="fade-up">
            Un service d'accompagnement complet
          </h1>
        </div>
        <div class="div4tm">
          <div data-aos="fade-up" class="div41">
            <div class="div411">
              <div><img src="./assets/images/IMAGES/prakh.png"></div>
              <div>SUPERVISION</div>
              <p>Une supervision régulière de votre plateforme dans le périmètre des engagements de la prestation
                sur-m</p>
            </div>
            <div class="div411">
              <div><img src="./assets/images/IMAGES/pr.png"></div>
              <div>SUPERVISION</div>
              <p>Une supervision régulière de votre plateforme dans le périmètre des engagements de la prestation
                sur-m</p>
            </div>
            <div class="div411">
              <div><img src="./assets/images/IMAGES/p.png"></div>
              <div>SUPERVISION</div>
              <p>Une supervision régulière de votre plateforme dans le périmètre des engagements de la prestation
                sur-m</p>
            </div>
            <div class="div411">
              <div><img src="./assets/images/IMAGES/pra.png"></div>
              <div>SUPERVISION</div>
              <p>Une supervision régulière de votre plateforme dans le périmètre des engagements de la prestation
                sur-m</p>
            </div>

          </div>
          <div data-aos="fade-up" class="div41111">
            <div>
              <h2>Support et consulting aux utilisateurs</h2>
            </div>
            <div>
              <p>Assistance directe aux utilisateurs sur l’exploitation et le fonctionnement de votre plateforme EDI.
              </p>
            </div>
            <div class="div41111mainpart1">
              <div class="div41111part1">
                <ul>
                  <li>Continuous application monitoring</li>
                  <li>Monitoring et reporting des flux</li>
                  <li>Installation, migration and optimization </li>
                </ul>
              </div>
              <div class="div41111part2"><img src="./assets/images/IMAGES/groupiconrish.svg" alt=""></div>
              <div class="div41111part3">
                <ul>
                  <li>Onboarding assistance for business partners</li>
                  <li>Establishment of new links with partners</li>
                  <li>Project management and integration</li>
                </ul>
              </div>
            </div>
            
          </div>
          
        </div data-aos="fade-up">
        
      </div>
      <button class="button-design">Get A Personalized Quote</button>
    </div>
    
  </div>

  <!-------------------------------------------------- Tma Section 6 end  --------------------------------------------------------------------->

  <!-------------------------------------------------- Tma Section 6 end  --------------------------------------------------------------------->

<!-------------------------------------------------- Tma Section 6 end  --------------------------------------------------------------------->
<!-- -------------------------------------------------------vidhi section-------------------------------------------------------------- -->
<section class="service099">
  <div class="service1" data-aos="fade-up">
    <h2 class="tmaheader">L'organisation <span class="changecolheader"> TMA </span>chez Digitus</h2>
    
    <p class="servicep">
      Our EDI maintenance &amp; supervision unit adapts to your configurations and requirements through
      personalized SLAs.
    </p>
    
    <div class="cards-ser" data-aos="fade-up">
      <div class="card" id="card1" data-aos="fade-up">
        <div class="card-title">Support Cell - TMA</div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span>Swift qualification and redirection to sub-cells for complex issues.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> A team of certified experts on the technologies subject to TMA.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> Responsive handling of blocking requests and emergency tickets.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> Swift intervention on server incidents.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> A one-stop shop for projects and specific requests.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> Ensuring maximum responsiveness and qualitative resolution.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> Privileged access to the highest level of support offered by each of the publishers.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> Urgent intervention and standby on the priority line.
        </div>
        <div class="card-text">
          <span class="checkmark"><i class="fas fa-check"></i>
          </span> A single point of contact for all technologies supported by the Supplier (e.g., Invoice
          Manager, TradeXpress, IBM Sterling B2B Integrator, Cleo Cloud Integrators, ITX, WTX, etc).
        </div>
      </div>
      <div class="card" id="card2" data-aos="fade-right">
        <p class="card-text cardch">
          Our bilingual teams located entirely in France provide the TMA service from 9:00 a.m. to 6:00
          p.m. with an emergency number for on-call services.
        </p>
        <div class="cards65">
          <svg class="svg11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="f6d4ae6034">
                <path d="M 33.75 59 L 46.792969 59 L 46.792969 71.40625 L 33.75 71.40625 Z M 33.75 59 "
                  clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <path fill="#FFA500"
              d="M 15.351562 50.148438 C 6.664062 41.476562 6.664062 27.3125 15.351562 18.652344 C 24.042969 9.980469 38.171875 9.980469 46.855469 18.652344 L 49.277344 21.058594 L 44.972656 21.058594 C 43.308594 21.058594 41.953125 22.417969 41.953125 24.074219 C 41.953125 25.730469 43.308594 27.085938 44.972656 27.085938 L 56.609375 27.085938 C 58.269531 27.085938 59.625 25.730469 59.625 24.074219 L 59.625 12.46875 C 59.625 10.8125 58.269531 9.453125 56.609375 9.453125 C 54.945312 9.453125 53.582031 10.8125 53.582031 12.46875 L 53.582031 16.765625 L 51.167969 14.351562 C 40.0625 3.351562 22.074219 3.351562 11.046875 14.425781 C 0.015625 25.433594 0.015625 43.441406 11.046875 54.441406 C 16.183594 59.566406 22.757812 62.277344 29.484375 62.652344 C 30.085938 60.621094 31.070312 58.589844 32.5 56.625 C 26.304688 57 20.039062 54.816406 15.351562 50.148438 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 34.015625 21.738281 C 34.015625 20.078125 32.65625 18.726562 30.992188 18.726562 C 29.328125 18.726562 27.972656 20.078125 27.972656 21.738281 L 27.972656 32.132812 L 20.867188 34.097656 C 19.28125 34.546875 18.300781 36.207031 18.75 37.789062 C 19.132812 39.148438 20.34375 39.972656 21.699219 39.972656 C 22 39.972656 22.230469 39.972656 22.527344 39.820312 L 31.828125 37.335938 C 33.105469 36.960938 34.015625 35.753906 34.015625 34.394531 L 34.015625 21.738281 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#f6d4ae6034)">
              <path fill="#FFA500"
                d="M 40.214844 65.671875 C 39.753906 65.671875 39.378906 65.289062 39.457031 64.914062 C 39.457031 64.160156 39.53125 62.882812 39.753906 61.371094 L 37.488281 59.109375 C 34.164062 63.027344 33.789062 68.605469 33.789062 70.644531 C 33.789062 71.09375 34.164062 71.46875 34.546875 71.394531 C 36.585938 71.394531 42.175781 70.941406 46.105469 67.625 L 43.839844 65.367188 C 42.253906 65.59375 40.964844 65.671875 40.214844 65.671875 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#FFA500"
              d="M 63.554688 47.808594 C 61.824219 49.542969 58.953125 49.542969 57.214844 47.808594 C 55.472656 46.074219 55.472656 43.210938 57.214844 41.476562 C 58.953125 39.75 61.824219 39.75 63.554688 41.476562 C 65.371094 43.210938 65.371094 46.074219 63.554688 47.808594 Z M 74.363281 32.066406 C 74.289062 31.308594 73.683594 30.78125 73.007812 30.707031 C 69.757812 30.332031 60.382812 30.101562 50.941406 38.015625 C 49.882812 38.839844 48.597656 39.367188 47.316406 39.070312 C 45.277344 38.695312 41.953125 38.621094 39.304688 41.253906 L 35.902344 44.722656 C 35 45.625 35.226562 47.28125 36.4375 47.808594 L 42.097656 50.371094 L 40.0625 53.609375 C 39.609375 54.363281 39.6875 55.417969 40.359375 56.023438 L 49.277344 64.839844 C 49.957031 65.519531 50.941406 65.59375 51.699219 65.144531 L 54.945312 63.105469 L 57.519531 68.757812 C 58.046875 69.964844 59.625 70.261719 60.613281 69.285156 L 64.015625 65.816406 C 66.65625 63.179688 66.582031 59.863281 66.207031 57.832031 C 65.976562 56.550781 66.429688 55.195312 67.261719 54.140625 C 74.96875 44.648438 74.746094 35.304688 74.363281 32.066406 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>

          <svg class="svg11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#FFA500"
              d="M 52.28125 33.757812 C 53.777344 36.90625 54.722656 40.375 54.722656 44.152344 C 54.722656 57.300781 44.089844 67.929688 30.945312 67.929688 C 17.796875 67.929688 7.160156 57.222656 7.160156 44.152344 C 7.089844 31 17.796875 20.292969 30.945312 20.292969 C 34.644531 20.292969 38.1875 21.160156 41.335938 22.734375 L 45.746094 16.988281 C 41.335938 14.542969 36.300781 13.210938 30.945312 13.210938 C 13.859375 13.210938 0 27.066406 0 44.074219 C 0 61.082031 13.859375 75.019531 30.945312 75.019531 C 47.953125 75.019531 61.808594 61.160156 61.808594 44.074219 C 61.808594 38.71875 60.46875 33.757812 58.109375 29.347656 L 52.28125 33.757812 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 30.945312 33.054688 C 31.726562 33.054688 32.519531 33.125 33.308594 33.285156 L 37.875 27.300781 C 35.746094 26.4375 33.382812 25.886719 30.945312 25.886719 C 20.945312 25.886719 12.753906 34.074219 12.753906 44.074219 C 12.675781 54.152344 20.867188 62.335938 30.945312 62.335938 C 40.941406 62.335938 49.132812 54.152344 49.132812 44.152344 C 49.132812 41.710938 48.65625 39.351562 47.792969 37.226562 L 41.8125 41.789062 C 41.964844 42.578125 42.046875 43.363281 42.046875 44.152344 C 42.046875 50.292969 37.082031 55.253906 30.945312 55.253906 C 24.800781 55.253906 19.84375 50.21875 19.84375 44.074219 C 19.84375 37.929688 24.800781 33.054688 30.945312 33.054688 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 74.71875 10.53125 C 74.484375 9.980469 73.933594 9.589844 73.300781 9.589844 L 65.507812 9.589844 L 65.507812 1.789062 C 65.507812 1.160156 65.117188 0.605469 64.566406 0.375 C 64.015625 0.136719 63.304688 0.296875 62.910156 0.6875 L 54.648438 8.878906 C 54.328125 9.191406 54.167969 9.589844 54.167969 9.980469 L 54.167969 15.414062 L 33.148438 39.039062 C 32.4375 38.71875 31.726562 38.558594 30.945312 38.558594 C 27.875 38.558594 25.429688 41 25.429688 44.074219 C 25.429688 47.144531 27.875 49.582031 30.945312 49.582031 C 34.011719 49.582031 36.453125 47.144531 36.453125 44.074219 C 36.453125 43.289062 36.300781 42.578125 35.980469 41.867188 L 59.605469 20.84375 L 65.039062 20.84375 C 65.429688 20.84375 65.828125 20.691406 66.140625 20.371094 L 74.332031 12.1875 C 74.796875 11.789062 74.957031 11.082031 74.71875 10.53125 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
        </div>
        <p class="card-text">
          Depending on your SLA, we commit to:

        <ul class="ser4">
          <li>Take tickets within 1 to 3 hours.</li>
          <li>Provide a response within 1 hour to 1 day.</li>
        </ul>
        </p>
      </div>
    </div>
  </div>
  <!-- TMA L organization end----------------------------- -->
  <!-- TMA NOS ENgaement Starting ------------------------- -->

  <div class="service1" data-aos="fade-up">
    <h2 class="tmaheader">
      TMA : Nos<span class="changecolheader"> engagements </span></h2>
    <br>
    <p class="servicep1">
      Convinced of the effectiveness of this method, the TMA Digitus team is committed to the following
      results:
    </p>

    <div class="ser00" data-aos="fade-up">
      <div class="ser01">
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#ff914d"
              d="M 22.5 22.5 C 20.433594 22.5 18.75 24.183594 18.75 26.25 C 18.75 26.324219 18.757812 26.398438 18.769531 26.472656 L 20.898438 38.171875 C 21.214844 39.914062 22.699219 41.191406 24.457031 41.246094 L 30 42.289062 L 30 65.292969 C 29.328125 65.121094 28.652344 64.933594 28 64.714844 L 27.207031 67.085938 C 28.019531 67.359375 28.859375 67.601562 29.703125 67.808594 L 30 66.609375 L 30 70.625 C 30 73.039062 31.960938 75 34.375 75 C 35.601562 75 36.703125 74.492188 37.5 73.675781 C 38.296875 74.492188 39.398438 75 40.625 75 C 43.039062 75 45 73.039062 45 70.625 L 45 42.292969 L 50.714844 41.25 C 52.351562 41.195312 53.773438 40.074219 54.207031 38.488281 L 57.457031 26.578125 C 57.484375 26.472656 57.5 26.359375 57.5 26.25 C 57.5 24.183594 55.816406 22.5 53.75 22.5 C 51.746094 22.5 50.105469 24.078125 50.003906 26.058594 L 48.066406 32.84375 C 47.914062 33.378906 47.421875 33.75 46.863281 33.75 L 42.46875 33.75 C 43.261719 32.703125 43.75 31.414062 43.75 30 C 43.75 26.554688 40.945312 23.75 37.5 23.75 C 34.054688 23.75 31.25 26.554688 31.25 30 C 31.25 31.414062 31.738281 32.703125 32.53125 33.75 L 28.417969 33.75 C 27.800781 33.75 27.269531 33.289062 27.183594 32.675781 L 26.25 26.152344 C 26.195312 24.128906 24.535156 22.5 22.5 22.5 Z M 33.75 30 C 33.75 27.933594 35.433594 26.25 37.5 26.25 C 39.566406 26.25 41.25 27.933594 41.25 30 C 41.25 32.066406 39.566406 33.75 37.5 33.75 C 35.433594 33.75 33.75 32.066406 33.75 30 Z M 28.417969 36.25 L 46.863281 36.25 C 48.53125 36.25 50.011719 35.132812 50.46875 33.53125 L 52.453125 26.59375 C 52.484375 26.484375 52.5 26.367188 52.5 26.25 C 52.5 25.5625 53.058594 25 53.75 25 C 54.390625 25 54.921875 25.488281 54.992188 26.109375 L 51.796875 37.828125 C 51.648438 38.371094 51.152344 38.75 50.589844 38.75 C 50.515625 38.75 50.441406 38.757812 50.367188 38.769531 L 43.523438 40.019531 C 42.929688 40.128906 42.5 40.644531 42.5 41.25 L 42.5 70.625 C 42.5 71.660156 41.660156 72.5 40.625 72.5 C 39.589844 72.5 38.75 71.660156 38.75 70.625 L 38.75 53.75 L 36.25 53.75 L 36.25 70.625 C 36.25 71.660156 35.410156 72.5 34.375 72.5 C 33.339844 72.5 32.5 71.660156 32.5 70.625 L 32.5 41.25 C 32.5 40.648438 32.070312 40.132812 31.480469 40.019531 L 24.816406 38.769531 C 24.742188 38.757812 24.664062 38.75 24.585938 38.75 C 23.984375 38.75 23.464844 38.320312 23.355469 37.722656 L 21.253906 26.15625 C 21.300781 25.511719 21.84375 25 22.5 25 C 23.191406 25 23.75 25.5625 23.75 26.25 C 23.75 26.308594 23.753906 26.367188 23.761719 26.425781 L 24.707031 33.03125 C 24.96875 34.867188 26.5625 36.25 28.417969 36.25 Z M 28.417969 36.25 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 11.25 22.5 C 17.453125 22.5 22.5 17.453125 22.5 11.25 C 22.5 5.046875 17.453125 0 11.25 0 C 5.046875 0 0 5.046875 0 11.25 C 0 17.453125 5.046875 22.5 11.25 22.5 Z M 11.25 2.5 C 16.074219 2.5 20 6.425781 20 11.25 C 20 16.074219 16.074219 20 11.25 20 C 6.425781 20 2.5 16.074219 2.5 11.25 C 2.5 6.425781 6.425781 2.5 11.25 2.5 Z M 11.25 2.5 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 10 13.75 L 15 13.75 L 15 11.25 L 11.25 11.25 L 11.25 6.25 L 8.75 6.25 L 8.75 12.5 C 8.75 13.191406 9.308594 13.75 10 13.75 Z M 10 13.75 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 73.75 12.5 L 72.5 12.5 L 72.5 1.25 C 72.5 0.558594 71.941406 0 71.25 0 L 48.75 0 C 48.058594 0 47.5 0.558594 47.5 1.25 L 47.5 12.5 L 46.25 12.5 C 45.558594 12.5 45 13.058594 45 13.75 C 45 17.195312 47.804688 20 51.25 20 L 68.75 20 C 72.195312 20 75 17.195312 75 13.75 C 75 13.058594 74.441406 12.5 73.75 12.5 Z M 50 2.5 L 70 2.5 L 70 12.5 L 50 12.5 Z M 68.75 17.5 L 51.25 17.5 C 49.621094 17.5 48.230469 16.453125 47.714844 15 L 72.285156 15 C 71.769531 16.453125 70.378906 17.5 68.75 17.5 Z M 68.75 17.5 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d" d="M 53.75 6.25 L 56.25 6.25 L 56.25 10 L 53.75 10 Z M 53.75 6.25 " fill-opacity="1"
              fill-rule="nonzero"></path>
            <path fill="#ff914d" d="M 58.75 5 L 61.25 5 L 61.25 10 L 58.75 10 Z M 58.75 5 " fill-opacity="1"
              fill-rule="nonzero"></path>
            <path fill="#ff914d" d="M 63.75 6.25 L 66.25 6.25 L 66.25 10 L 63.75 10 Z M 63.75 6.25 " fill-opacity="1"
              fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 1.25 75 L 18.75 75 C 19.441406 75 20 74.441406 20 73.75 L 20 56.25 C 20 55.871094 19.828125 55.511719 19.53125 55.273438 L 13.28125 50.273438 C 13.058594 50.097656 12.785156 50 12.5 50 L 1.25 50 C 0.558594 50 0 50.558594 0 51.25 L 0 73.75 C 0 74.441406 0.558594 75 1.25 75 Z M 2.5 52.5 L 12.0625 52.5 L 17.5 56.851562 L 17.5 72.5 L 2.5 72.5 Z M 2.5 52.5 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 61.25 47.5 C 53.667969 47.5 47.5 53.667969 47.5 61.25 C 47.5 65.726562 49.660156 69.695312 52.976562 72.207031 C 52.984375 72.214844 52.988281 72.226562 52.996094 72.230469 C 53.050781 72.269531 53.105469 72.304688 53.160156 72.34375 C 53.382812 72.507812 53.605469 72.664062 53.835938 72.8125 C 53.949219 72.882812 54.058594 72.949219 54.171875 73.015625 C 54.394531 73.148438 54.617188 73.285156 54.851562 73.410156 C 55.050781 73.515625 55.253906 73.605469 55.457031 73.703125 C 55.710938 73.820312 55.964844 73.933594 56.226562 74.035156 C 56.492188 74.140625 56.761719 74.242188 57.035156 74.332031 C 57.175781 74.378906 57.320312 74.417969 57.464844 74.457031 C 57.730469 74.53125 57.996094 74.605469 58.269531 74.664062 C 58.414062 74.695312 58.558594 74.726562 58.703125 74.753906 C 58.992188 74.804688 59.285156 74.851562 59.578125 74.886719 C 59.707031 74.902344 59.835938 74.921875 59.96875 74.933594 C 60.390625 74.976562 60.820312 75 61.25 75 C 61.679688 75 62.109375 74.976562 62.53125 74.933594 C 62.664062 74.921875 62.792969 74.902344 62.921875 74.886719 C 63.214844 74.851562 63.507812 74.808594 63.796875 74.753906 C 63.941406 74.726562 64.085938 74.695312 64.230469 74.664062 C 64.503906 74.605469 64.769531 74.535156 65.035156 74.457031 C 65.179688 74.417969 65.324219 74.378906 65.464844 74.332031 C 65.738281 74.246094 66.007812 74.140625 66.273438 74.035156 C 66.535156 73.933594 66.789062 73.820312 67.042969 73.703125 C 67.246094 73.609375 67.449219 73.515625 67.648438 73.410156 C 67.882812 73.289062 68.105469 73.152344 68.328125 73.015625 C 68.441406 72.949219 68.550781 72.882812 68.664062 72.8125 C 68.894531 72.664062 69.117188 72.507812 69.339844 72.34375 C 69.394531 72.304688 69.449219 72.273438 69.503906 72.234375 C 69.511719 72.226562 69.515625 72.214844 69.523438 72.207031 C 72.839844 69.695312 75 65.726562 75 61.25 C 75 53.667969 68.832031 47.5 61.25 47.5 Z M 55 70.589844 L 55 67.5 C 55 64.742188 57.242188 62.5 60 62.5 L 62.5 62.5 C 65.257812 62.5 67.5 64.742188 67.5 67.5 L 67.5 70.589844 C 67.035156 70.902344 66.550781 71.175781 66.046875 71.410156 C 63.035156 72.820312 59.460938 72.820312 56.453125 71.410156 C 56.453125 71.410156 56.453125 71.410156 56.449219 71.410156 C 55.949219 71.175781 55.464844 70.902344 55 70.589844 Z M 61.25 60 C 59.871094 60 58.75 58.878906 58.75 57.5 C 58.75 56.121094 59.871094 55 61.25 55 C 62.628906 55 63.75 56.121094 63.75 57.5 C 63.75 58.878906 62.628906 60 61.25 60 Z M 70 68.304688 L 70 67.5 C 70 64.320312 68.011719 61.605469 65.210938 60.515625 C 65.855469 59.675781 66.25 58.636719 66.25 57.5 C 66.25 54.742188 64.007812 52.5 61.25 52.5 C 58.492188 52.5 56.25 54.742188 56.25 57.5 C 56.25 58.636719 56.644531 59.675781 57.289062 60.515625 C 54.488281 61.605469 52.5 64.320312 52.5 67.5 L 52.5 68.304688 C 50.941406 66.375 50 63.921875 50 61.25 C 50 55.046875 55.046875 50 61.25 50 C 67.453125 50 72.5 55.046875 72.5 61.25 C 72.5 63.921875 71.558594 66.375 70 68.304688 Z M 70 68.304688 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d" d="M 5 56.25 L 13.75 56.25 L 13.75 58.75 L 5 58.75 Z M 5 56.25 " fill-opacity="1"
              fill-rule="nonzero"></path>
            <path fill="#ff914d" d="M 5 61.25 L 15 61.25 L 15 63.75 L 5 63.75 Z M 5 61.25 " fill-opacity="1"
              fill-rule="nonzero"></path>
            <path fill="#ff914d" d="M 5 66.25 L 15 66.25 L 15 68.75 L 5 68.75 Z M 5 66.25 " fill-opacity="1"
              fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 44.734375 4.558594 C 43.886719 4.363281 43.027344 4.207031 42.175781 4.082031 L 41.820312 6.558594 C 42.605469 6.671875 43.398438 6.816406 44.179688 6.996094 Z M 44.734375 4.558594 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 25.390625 8.792969 L 24.382812 6.507812 C 23.59375 6.855469 22.808594 7.238281 22.046875 7.652344 L 23.238281 9.851562 C 23.941406 9.46875 24.667969 9.113281 25.390625 8.792969 Z M 25.390625 8.792969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 37.5 6.25 C 38.148438 6.25 38.792969 6.269531 39.433594 6.3125 L 39.59375 3.816406 C 38.902344 3.773438 38.203125 3.75 37.5 3.75 L 36.996094 3.753906 L 37.035156 6.253906 Z M 37.5 6.25 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 29.921875 7.214844 L 29.289062 4.796875 C 28.457031 5.011719 27.621094 5.265625 26.800781 5.550781 L 27.625 7.914062 C 28.378906 7.648438 29.152344 7.417969 29.921875 7.214844 Z M 29.921875 7.214844 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 34.640625 6.382812 L 34.402344 3.894531 C 33.542969 3.976562 32.675781 4.09375 31.828125 4.242188 L 32.261719 6.703125 C 33.042969 6.566406 33.84375 6.460938 34.640625 6.382812 Z M 34.640625 6.382812 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 9.5 47.046875 C 9.214844 46.304688 8.953125 45.542969 8.730469 44.777344 L 6.332031 45.484375 C 6.578125 46.316406 6.859375 47.144531 7.171875 47.949219 Z M 9.5 47.046875 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 5.199219 32.625 L 7.683594 32.902344 C 7.769531 32.109375 7.890625 31.3125 8.042969 30.53125 L 5.589844 30.054688 C 5.425781 30.898438 5.296875 31.765625 5.199219 32.625 Z M 5.199219 32.625 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 5 36.25 C 5 36.773438 5.011719 37.296875 5.035156 37.8125 L 7.535156 37.695312 C 7.511719 37.21875 7.5 36.734375 7.5 36.25 C 7.5 35.929688 7.503906 35.613281 7.515625 35.296875 L 5.015625 35.214844 C 5.003906 35.558594 5 35.902344 5 36.25 Z M 5 36.25 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 8.140625 42.453125 C 7.976562 41.667969 7.84375 40.871094 7.742188 40.085938 L 5.261719 40.402344 C 5.371094 41.253906 5.515625 42.117188 5.695312 42.964844 Z M 8.140625 42.453125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 9.328125 25.910156 L 6.984375 25.046875 C 6.683594 25.863281 6.414062 26.695312 6.183594 27.523438 L 8.59375 28.191406 C 8.804688 27.429688 9.050781 26.660156 9.328125 25.910156 Z M 9.328125 25.910156 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 22.425781 65.050781 C 23.195312 65.453125 23.984375 65.828125 24.777344 66.164062 L 25.753906 63.863281 C 25.023438 63.554688 24.296875 63.207031 23.585938 62.835938 Z M 22.425781 65.050781 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 66.632812 43.449219 L 69.058594 44.046875 C 69.207031 43.441406 69.339844 42.828125 69.453125 42.207031 L 66.996094 41.75 C 66.890625 42.324219 66.769531 42.890625 66.632812 43.449219 Z M 66.632812 43.449219 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 67.226562 32.191406 C 67.335938 32.984375 67.410156 33.789062 67.453125 34.578125 L 69.953125 34.445312 C 69.90625 33.585938 69.820312 32.714844 69.707031 31.859375 Z M 67.226562 32.191406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 69.992188 37.042969 L 67.492188 36.984375 C 67.472656 37.769531 67.421875 38.578125 67.339844 39.378906 L 69.828125 39.632812 C 69.917969 38.765625 69.972656 37.894531 69.992188 37.042969 Z M 69.992188 37.042969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 64.449219 23.050781 C 64.796875 23.765625 65.125 24.503906 65.417969 25.242188 L 67.742188 24.328125 C 67.425781 23.523438 67.074219 22.722656 66.691406 21.949219 Z M 64.449219 23.050781 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 66.207031 27.511719 C 66.4375 28.265625 66.640625 29.046875 66.8125 29.832031 L 69.253906 29.296875 C 69.070312 28.445312 68.847656 27.597656 68.601562 26.78125 Z M 66.207031 27.511719 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <p class="servicep ">
            Maintaining the operational conditions of your EDI / EAI applications
          </p>
        </div>

        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="6c24050b98">
                <path d="M 13 63 L 59 63 L 59 73.875 L 13 73.875 Z M 13 63 " clip-rule="nonzero">
                </path>
              </clipPath>
            </defs>
            <path fill="#ff914d"
              d="M 37.5 29.40625 C 32.253906 29.40625 27.945312 33.660156 27.945312 38.964844 C 27.945312 44.210938 32.253906 48.519531 37.5 48.519531 C 42.746094 48.519531 47.054688 44.265625 47.054688 38.964844 C 47.054688 33.714844 42.746094 29.40625 37.5 29.40625 Z M 37.5 46.3125 C 33.46875 46.3125 30.152344 42.996094 30.152344 38.964844 C 30.152344 34.929688 33.46875 31.617188 37.5 31.617188 C 41.53125 31.617188 44.847656 34.929688 44.847656 38.964844 C 44.847656 42.996094 41.53125 46.3125 37.5 46.3125 Z M 37.5 46.3125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 62.414062 46.972656 C 62.136719 45.757812 61.417969 44.765625 60.425781 44.210938 L 57.9375 42.773438 C 58.160156 41.503906 58.269531 40.234375 58.269531 39.019531 C 58.269531 37.195312 58.105469 35.59375 57.664062 33.992188 L 60.148438 32.5 C 62.359375 31.230469 63.074219 28.855469 61.914062 26.8125 L 59.871094 23.277344 C 59.042969 21.894531 57.496094 20.957031 55.894531 20.957031 C 55.175781 20.957031 54.457031 21.121094 53.796875 21.507812 L 50.976562 23.164062 C 48.824219 21.289062 46.339844 19.90625 43.578125 19.078125 L 43.578125 15.929688 C 43.578125 13.386719 41.863281 11.566406 39.542969 11.566406 L 35.457031 11.566406 C 32.96875 11.511719 30.871094 13.554688 30.871094 15.929688 L 30.871094 19.242188 C 28.21875 20.128906 25.734375 21.5625 23.578125 23.550781 L 20.929688 22.003906 C 20.15625 21.5625 19.328125 21.34375 18.496094 21.34375 C 17.0625 21.34375 15.847656 22.0625 15.128906 23.332031 L 13.085938 26.867188 C 12.53125 27.859375 12.3125 29.074219 12.585938 30.234375 C 12.863281 31.453125 13.582031 32.445312 14.632812 33.054688 L 17.226562 34.488281 C 16.894531 35.980469 16.730469 37.472656 16.730469 39.019531 C 16.730469 40.457031 16.894531 41.945312 17.171875 43.328125 L 14.851562 44.652344 C 12.640625 45.925781 11.925781 48.300781 13.085938 50.34375 L 15.128906 53.878906 C 15.957031 55.257812 17.503906 56.199219 19.105469 56.199219 C 19.824219 56.199219 20.542969 56.03125 21.203125 55.644531 L 23.46875 54.320312 C 25.734375 56.417969 28.496094 57.964844 31.421875 58.851562 L 31.421875 61.226562 C 31.421875 63.765625 33.136719 65.589844 35.457031 65.589844 L 39.542969 65.589844 C 42.03125 65.589844 44.128906 63.601562 44.128906 61.171875 L 44.074219 58.628906 C 47 57.632812 49.707031 56.03125 51.917969 53.878906 L 54.070312 55.148438 C 54.84375 55.589844 55.671875 55.8125 56.503906 55.8125 C 57.9375 55.8125 59.152344 55.09375 59.871094 53.824219 L 61.914062 50.289062 C 62.523438 49.347656 62.6875 48.078125 62.414062 46.972656 Z M 60.039062 49.238281 L 57.992188 52.773438 C 57.605469 53.492188 56.945312 53.65625 56.503906 53.65625 C 56.058594 53.65625 55.617188 53.546875 55.175781 53.269531 L 51.53125 51.171875 L 50.921875 51.78125 C 48.660156 54.15625 45.785156 55.921875 42.636719 56.804688 L 41.808594 57.027344 L 41.917969 61.226562 C 41.917969 62.386719 40.8125 63.378906 39.542969 63.378906 L 35.457031 63.378906 C 34.128906 63.378906 33.632812 62.21875 33.632812 61.226562 L 33.632812 57.191406 L 32.804688 56.972656 C 29.65625 56.144531 26.726562 54.484375 24.410156 52.164062 L 23.800781 51.558594 L 20.101562 53.710938 C 19.824219 53.878906 19.492188 53.988281 19.105469 53.988281 C 18.277344 53.988281 17.449219 53.492188 17.007812 52.773438 L 14.960938 49.238281 C 14.300781 48.078125 15.074219 47.085938 15.957031 46.585938 L 19.714844 44.433594 L 19.492188 43.605469 C 19.105469 42.113281 18.941406 40.566406 18.941406 39.019531 C 18.941406 37.417969 19.160156 35.816406 19.546875 34.214844 L 19.769531 33.382812 L 15.679688 31.121094 C 15.183594 30.84375 14.851562 30.347656 14.742188 29.738281 C 14.574219 29.132812 14.6875 28.46875 15.019531 27.972656 L 17.0625 24.4375 C 17.449219 23.71875 18.109375 23.550781 18.554688 23.550781 C 18.996094 23.550781 19.4375 23.664062 19.878906 23.9375 L 23.964844 26.3125 L 24.574219 25.707031 C 26.894531 23.441406 29.433594 21.949219 32.363281 21.121094 L 33.082031 20.902344 L 33.082031 15.929688 C 33.082031 14.769531 34.1875 13.773438 35.457031 13.773438 L 39.542969 13.773438 C 40.871094 13.773438 41.367188 14.933594 41.367188 15.984375 L 41.421875 20.84375 L 42.25 21.066406 C 45.234375 21.839844 47.941406 23.332031 50.148438 25.375 L 50.757812 25.925781 L 54.957031 23.441406 C 55.230469 23.277344 55.5625 23.164062 55.949219 23.164062 C 56.777344 23.164062 57.605469 23.664062 58.050781 24.378906 L 60.09375 27.914062 C 60.753906 29.074219 59.980469 30.070312 59.097656 30.566406 L 55.121094 32.886719 L 55.398438 33.714844 C 55.894531 35.375 56.117188 37.03125 56.117188 38.964844 C 56.117188 40.34375 55.949219 41.726562 55.671875 43.050781 L 55.507812 43.824219 L 59.375 46.035156 C 59.871094 46.3125 60.203125 46.808594 60.3125 47.414062 C 60.425781 48.078125 60.3125 48.6875 60.039062 49.238281 Z M 60.039062 49.238281 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 18 11.566406 C 18.222656 11.566406 18.441406 11.511719 18.664062 11.34375 C 28.71875 4.164062 42.582031 3.445312 53.464844 9.355469 L 49.929688 10.847656 L 61.363281 13.941406 L 55.34375 3.722656 L 54.84375 7.644531 C 43.132812 1.125 28.21875 1.84375 17.335938 9.578125 C 16.839844 9.90625 16.730469 10.625 17.0625 11.125 C 17.28125 11.398438 17.667969 11.566406 18 11.566406 Z M 18 11.566406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 8.332031 22.613281 L 9.824219 26.148438 L 12.917969 14.714844 L 2.644531 20.734375 L 6.566406 21.230469 C 0.046875 32.941406 0.765625 47.855469 8.5 58.738281 C 8.71875 59.015625 9.050781 59.179688 9.382812 59.179688 C 9.605469 59.179688 9.824219 59.125 10.046875 58.960938 C 10.542969 58.628906 10.652344 57.910156 10.324219 57.414062 C 3.140625 47.359375 2.367188 33.550781 8.332031 22.613281 Z M 8.332031 22.613281 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#6c24050b98)">
              <path fill="#ff914d"
                d="M 56.390625 65.753906 C 46.339844 72.9375 32.472656 73.652344 21.535156 67.742188 L 25.070312 66.253906 L 13.636719 63.160156 L 19.65625 73.378906 L 20.15625 69.457031 C 25.457031 72.4375 31.421875 73.875 37.390625 73.875 C 44.570312 73.875 51.695312 71.71875 57.664062 67.523438 C 58.160156 67.191406 58.269531 66.472656 57.9375 65.976562 C 57.550781 65.535156 56.890625 65.421875 56.390625 65.753906 Z M 56.390625 65.753906 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ff914d"
              d="M 66.5 18.414062 C 66.167969 17.917969 65.449219 17.808594 64.953125 18.136719 C 64.457031 18.46875 64.347656 19.1875 64.675781 19.683594 C 71.859375 29.738281 72.578125 43.605469 66.667969 54.484375 L 65.175781 50.949219 L 62.082031 62.386719 L 72.300781 56.363281 L 68.378906 55.867188 C 74.953125 44.210938 74.234375 29.296875 66.5 18.414062 Z M 66.5 18.414062 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <p class="servicep">
            Facilitate the management of resources and/or your infrastructure
          </p>
        </div>
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#ff914d"
              d="M 37.5 72.5 C 18.199219 72.5 2.5 56.800781 2.5 37.5 C 2.5 18.199219 18.199219 2.5 37.5 2.5 C 56.800781 2.5 72.5 18.199219 72.5 37.5 C 72.5 56.800781 56.800781 72.5 37.5 72.5 Z M 37.5 0 C 16.820312 0 0 16.820312 0 37.5 C 0 58.179688 16.820312 75 37.5 75 C 58.179688 75 75 58.179688 75 37.5 C 75 16.820312 58.179688 0 37.5 0 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 37.5 67.5 C 21.375 67.5 8.1875 54.714844 7.53125 38.75 L 18.960938 38.75 C 20.796875 38.75 22.371094 37.34375 22.636719 35.46875 C 23.640625 28.074219 30.027344 22.5 37.5 22.5 C 40.222656 22.5 42.910156 23.265625 45.234375 24.664062 C 40.328125 27.695312 34.980469 31.179688 33.085938 33.070312 C 31.902344 34.253906 31.253906 35.824219 31.253906 37.496094 C 31.25 39.167969 31.898438 40.738281 33.082031 41.917969 C 34.257812 43.09375 35.824219 43.746094 37.496094 43.746094 C 37.5 43.746094 37.5 43.746094 37.503906 43.746094 C 39.175781 43.746094 40.746094 43.09375 41.929688 41.914062 C 43.816406 40.019531 47.304688 34.671875 50.335938 29.761719 C 51.386719 31.507812 52.085938 33.445312 52.363281 35.472656 C 52.625 37.34375 54.203125 38.75 56.039062 38.75 L 67.464844 38.75 C 66.8125 54.714844 53.621094 67.5 37.5 67.5 Z M 53.730469 24.160156 C 53.988281 23.71875 54.070312 23.230469 54.003906 22.761719 L 59.566406 17.203125 C 64.222656 22.261719 67.164062 28.921875 67.464844 36.25 L 56.039062 36.25 C 55.433594 36.25 54.929688 35.777344 54.839844 35.132812 C 54.457031 32.347656 53.402344 29.695312 51.78125 27.402344 C 52.488281 26.234375 53.152344 25.132812 53.730469 24.160156 Z M 50.785156 24.214844 C 45.730469 32.644531 41.882812 38.417969 40.160156 40.140625 C 39.449219 40.855469 38.503906 41.246094 37.5 41.246094 C 37.5 41.246094 37.5 41.246094 37.496094 41.246094 C 36.492188 41.246094 35.554688 40.859375 34.847656 40.152344 C 34.140625 39.441406 33.75 38.5 33.753906 37.5 C 33.753906 36.492188 34.144531 35.550781 34.859375 34.839844 C 36.582031 33.113281 42.351562 29.265625 50.785156 24.214844 Z M 38.75 7.535156 C 46.078125 7.832031 52.738281 10.777344 57.796875 15.433594 L 52.230469 20.996094 C 51.765625 20.925781 51.277344 21.011719 50.839844 21.269531 C 49.867188 21.851562 48.757812 22.515625 47.59375 23.222656 C 44.988281 21.386719 41.921875 20.28125 38.75 20.054688 Z M 26.054688 24.285156 L 17.203125 15.433594 C 22.261719 10.777344 28.921875 7.832031 36.25 7.535156 L 36.25 20.058594 C 32.398438 20.335938 28.847656 21.871094 26.054688 24.285156 Z M 24.296875 26.0625 C 22.128906 28.558594 20.632812 31.664062 20.160156 35.125 C 20.066406 35.777344 19.566406 36.25 18.960938 36.25 L 7.53125 36.25 C 7.835938 28.921875 10.777344 22.261719 15.433594 17.203125 Z M 37.5 5 C 19.578125 5 5 19.578125 5 37.5 C 5 55.417969 19.578125 70 37.5 70 C 55.417969 70 70 55.417969 70 37.5 C 70 19.578125 55.417969 5 37.5 5 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 32.132812 47.867188 C 31.644531 47.378906 30.855469 47.378906 30.367188 47.867188 L 27.5 50.730469 L 27.5 48.75 C 27.5 48.0625 26.9375 47.5 26.25 47.5 C 25.5625 47.5 25 48.0625 25 48.75 L 25 58.75 C 25 59.4375 25.5625 60 26.25 60 C 26.9375 60 27.5 59.4375 27.5 58.75 L 27.5 56.765625 L 30.367188 59.632812 C 30.609375 59.878906 30.925781 60 31.25 60 C 31.570312 60 31.890625 59.878906 32.132812 59.632812 C 32.621094 59.144531 32.621094 58.355469 32.132812 57.867188 L 28.015625 53.75 L 32.132812 49.632812 C 32.621094 49.144531 32.621094 48.355469 32.132812 47.867188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 46.25 47.5 C 45.5625 47.5 45 48.0625 45 48.75 L 45 58.75 C 45 59.4375 45.5625 60 46.25 60 C 46.9375 60 47.5 59.4375 47.5 58.75 L 47.5 48.75 C 47.5 48.0625 46.9375 47.5 46.25 47.5 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 38.75 52.5 L 37.5 52.5 L 37.5 50 L 38.75 50 C 39.4375 50 40 50.5625 40 51.25 C 40 51.9375 39.4375 52.5 38.75 52.5 Z M 38.75 47.5 L 36.25 47.5 C 35.5625 47.5 35 48.0625 35 48.75 L 35 58.75 C 35 59.4375 35.5625 60 36.25 60 C 36.9375 60 37.5 59.4375 37.5 58.75 L 37.5 55 L 38.75 55 C 40.820312 55 42.5 53.320312 42.5 51.25 C 42.5 49.179688 40.820312 47.5 38.75 47.5 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <p class="servicep">
            Improved service level through compliance with SLAs and KPIs
          </p>
        </div>
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="64380bfa70">
                <path d="M 11 2.90625 L 52 2.90625 L 52 44 L 11 44 Z M 11 2.90625 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="dfde8f1406">
                <path d="M 0 35 L 75 35 L 75 71.90625 L 0 71.90625 Z M 0 35 " clip-rule="nonzero">
                </path>
              </clipPath>
            </defs>
            <g clip-path="url(#64380bfa70)">
              <path fill="#ff914d"
                d="M 31.25 43.015625 C 42.339844 43.015625 51.363281 34.015625 51.363281 22.957031 C 51.363281 21.964844 51.289062 20.964844 51.140625 19.984375 C 51.039062 19.296875 50.402344 18.820312 49.707031 18.921875 C 49.019531 19.023438 48.542969 19.667969 48.644531 20.355469 C 48.773438 21.210938 48.835938 22.085938 48.835938 22.957031 C 48.835938 32.628906 40.949219 40.496094 31.25 40.496094 C 21.554688 40.496094 13.664062 32.628906 13.664062 22.957031 C 13.664062 13.289062 21.554688 5.417969 31.25 5.417969 C 34.296875 5.417969 37.296875 6.207031 39.929688 7.699219 C 40.535156 8.046875 41.308594 7.832031 41.652344 7.226562 C 41.996094 6.621094 41.785156 5.855469 41.179688 5.511719 C 38.167969 3.804688 34.734375 2.902344 31.25 2.902344 C 20.164062 2.902344 11.140625 11.898438 11.140625 22.957031 C 11.140625 34.015625 20.164062 43.015625 31.25 43.015625 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ff914d"
              d="M 22.902344 23.503906 C 22.425781 23 21.625 22.976562 21.117188 23.453125 C 20.613281 23.929688 20.585938 24.726562 21.066406 25.230469 L 26.25 30.714844 C 26.5 30.976562 26.835938 31.109375 27.171875 31.109375 C 27.457031 31.109375 27.742188 31.011719 27.976562 30.820312 L 51.847656 11.082031 C 52.386719 10.636719 52.460938 9.84375 52.015625 9.308594 C 51.570312 8.773438 50.773438 8.699219 50.238281 9.144531 L 27.277344 28.128906 L 22.902344 23.503906 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#dfde8f1406)">
              <path fill="#ff914d"
                d="M 70.710938 42.6875 C 69.46875 42.6875 68.460938 41.683594 68.460938 40.445312 C 68.460938 39.203125 69.46875 38.199219 70.710938 38.199219 C 71.953125 38.199219 72.960938 39.203125 72.960938 40.445312 C 72.960938 41.683594 71.953125 42.6875 70.710938 42.6875 Z M 64.660156 62.578125 C 64.457031 62.519531 64.238281 62.503906 64.019531 62.550781 L 33.824219 69.234375 C 32.222656 69.585938 30.519531 69.269531 29.160156 68.355469 L 4.308594 51.679688 C 3.453125 51.101562 2.878906 50.1875 2.738281 49.167969 C 2.597656 48.144531 2.902344 47.109375 3.570312 46.324219 C 4.652344 45.058594 6.453125 44.691406 7.949219 45.429688 L 26.375 54.519531 C 26.136719 55.449219 26.121094 56.441406 26.359375 57.429688 C 27.027344 60.1875 29.492188 62.054688 32.242188 62.054688 C 32.621094 62.054688 33.003906 62.019531 33.390625 61.945312 L 54.335938 57.949219 C 55.023438 57.820312 55.472656 57.160156 55.339844 56.476562 C 55.207031 55.792969 54.550781 55.347656 53.863281 55.476562 L 32.914062 59.472656 C 31.0625 59.832031 29.257812 58.671875 28.8125 56.835938 C 28.613281 56.011719 28.71875 55.175781 29.074219 54.457031 C 29.074219 54.453125 29.074219 54.453125 29.078125 54.449219 C 29.078125 54.445312 29.078125 54.441406 29.082031 54.4375 C 29.4375 53.722656 30.039062 53.125 30.820312 52.78125 L 49.410156 44.589844 C 52.132812 43.386719 55.210938 43.164062 58.078125 43.953125 L 64.324219 45.671875 C 64.433594 45.703125 64.546875 45.71875 64.660156 45.714844 Z M 64.660156 35.953125 L 64.660156 43.152344 L 58.75 41.527344 C 55.324219 40.585938 51.644531 40.851562 48.390625 42.285156 L 29.800781 50.476562 C 28.867188 50.886719 28.085938 51.507812 27.492188 52.261719 L 9.066406 43.171875 C 6.535156 41.921875 3.480469 42.542969 1.648438 44.695312 C 0.511719 46.023438 0 47.78125 0.238281 49.511719 C 0.476562 51.242188 1.445312 52.792969 2.898438 53.765625 L 27.75 70.445312 C 29.167969 71.394531 30.84375 71.894531 32.53125 71.894531 C 33.148438 71.894531 33.765625 71.828125 34.371094 71.695312 L 64.566406 65.007812 C 64.597656 65.003906 64.628906 64.992188 64.660156 64.984375 L 64.660156 69.476562 L 75 69.476562 L 75 35.953125 L 64.660156 35.953125 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg>
          <p class="servicep">
            Sustain the exchanges of your B2B ecosystem
          </p>
        </div>
      </div>

      <div class="ser01">

        <div class="ser010">

          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="ebfa8635ad">
                <path d="M 0 58 L 23 58 L 23 71.765625 L 0 71.765625 Z M 0 58 " clip-rule="nonzero">
                </path>
              </clipPath>
              <clipPath id="776772d3c9">
                <path d="M 22 58 L 53 58 L 53 71.765625 L 22 71.765625 Z M 22 58 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="ed94fcadf9">
                <path d="M 52 58 L 75 58 L 75 71.765625 L 52 71.765625 Z M 52 58 " clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <path fill="#ff914d"
              d="M 15.347656 57.71875 C 14.8125 57.71875 14.28125 57.664062 13.757812 57.558594 C 13.230469 57.453125 12.722656 57.296875 12.226562 57.089844 C 11.734375 56.886719 11.261719 56.632812 10.816406 56.332031 C 10.371094 56.035156 9.960938 55.695312 9.582031 55.316406 C 9.203125 54.933594 8.863281 54.519531 8.566406 54.074219 C 8.269531 53.625 8.015625 53.152344 7.8125 52.65625 C 7.605469 52.160156 7.453125 51.648438 7.347656 51.121094 C 7.242188 50.59375 7.1875 50.0625 7.1875 49.523438 L 7.1875 47.179688 C 7.1875 46.644531 7.242188 46.109375 7.34375 45.582031 C 7.449219 45.054688 7.605469 44.542969 7.808594 44.046875 C 8.015625 43.546875 8.265625 43.078125 8.5625 42.628906 C 8.859375 42.179688 9.199219 41.765625 9.578125 41.386719 C 9.957031 41.007812 10.371094 40.667969 10.816406 40.367188 C 11.261719 40.070312 11.730469 39.816406 12.226562 39.609375 C 12.722656 39.40625 13.230469 39.25 13.757812 39.144531 C 14.28125 39.039062 14.8125 38.988281 15.347656 38.988281 C 15.886719 38.988281 16.414062 39.039062 16.941406 39.144531 C 17.464844 39.25 17.976562 39.40625 18.472656 39.609375 C 18.96875 39.816406 19.4375 40.070312 19.882812 40.367188 C 20.328125 40.667969 20.742188 41.007812 21.121094 41.386719 C 21.5 41.765625 21.835938 42.179688 22.132812 42.628906 C 22.433594 43.078125 22.683594 43.546875 22.886719 44.046875 C 23.09375 44.542969 23.25 45.054688 23.351562 45.582031 C 23.457031 46.109375 23.511719 46.644531 23.511719 47.179688 L 23.511719 49.523438 C 23.507812 50.0625 23.457031 50.59375 23.351562 51.121094 C 23.246094 51.648438 23.089844 52.160156 22.886719 52.65625 C 22.679688 53.152344 22.429688 53.625 22.132812 54.074219 C 21.832031 54.519531 21.496094 54.933594 21.117188 55.316406 C 20.738281 55.695312 20.324219 56.035156 19.878906 56.332031 C 19.433594 56.632812 18.964844 56.886719 18.46875 57.089844 C 17.976562 57.296875 17.464844 57.453125 16.941406 57.558594 C 16.414062 57.664062 15.882812 57.71875 15.347656 57.71875 Z M 15.347656 41.328125 C 14.964844 41.328125 14.585938 41.367188 14.210938 41.441406 C 13.835938 41.515625 13.472656 41.628906 13.121094 41.777344 C 12.765625 41.921875 12.429688 42.101562 12.113281 42.316406 C 11.792969 42.53125 11.5 42.773438 11.230469 43.042969 C 10.957031 43.316406 10.71875 43.613281 10.503906 43.929688 C 10.292969 44.25 10.113281 44.585938 9.964844 44.941406 C 9.820312 45.296875 9.707031 45.664062 9.632812 46.039062 C 9.558594 46.417969 9.519531 46.796875 9.519531 47.179688 L 9.519531 49.523438 C 9.519531 49.90625 9.558594 50.289062 9.632812 50.664062 C 9.707031 51.042969 9.816406 51.40625 9.964844 51.761719 C 10.109375 52.117188 10.289062 52.457031 10.503906 52.773438 C 10.714844 53.09375 10.957031 53.390625 11.226562 53.660156 C 11.496094 53.933594 11.792969 54.175781 12.109375 54.390625 C 12.429688 54.601562 12.765625 54.785156 13.117188 54.929688 C 13.472656 55.078125 13.835938 55.1875 14.210938 55.265625 C 14.585938 55.339844 14.964844 55.375 15.347656 55.375 C 15.730469 55.375 16.109375 55.339844 16.484375 55.265625 C 16.863281 55.1875 17.226562 55.078125 17.578125 54.929688 C 17.933594 54.785156 18.269531 54.601562 18.585938 54.390625 C 18.90625 54.175781 19.199219 53.933594 19.472656 53.660156 C 19.742188 53.390625 19.984375 53.09375 20.195312 52.773438 C 20.410156 52.457031 20.589844 52.117188 20.734375 51.761719 C 20.882812 51.40625 20.992188 51.042969 21.066406 50.664062 C 21.140625 50.289062 21.179688 49.90625 21.179688 49.523438 L 21.179688 47.179688 C 21.175781 46.796875 21.140625 46.417969 21.066406 46.039062 C 20.988281 45.664062 20.878906 45.296875 20.734375 44.941406 C 20.585938 44.585938 20.40625 44.25 20.195312 43.929688 C 19.980469 43.613281 19.738281 43.316406 19.46875 43.042969 C 19.199219 42.773438 18.902344 42.53125 18.585938 42.316406 C 18.269531 42.101562 17.933594 41.921875 17.578125 41.777344 C 17.226562 41.628906 16.859375 41.515625 16.484375 41.441406 C 16.109375 41.367188 15.730469 41.328125 15.347656 41.328125 Z M 15.347656 41.328125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#ebfa8635ad)">
              <path fill="#ff914d"
                d="M 1.359375 71.765625 C 1.203125 71.765625 1.054688 71.734375 0.914062 71.675781 C 0.769531 71.617188 0.644531 71.53125 0.535156 71.421875 C 0.425781 71.3125 0.339844 71.1875 0.28125 71.042969 C 0.222656 70.898438 0.191406 70.75 0.191406 70.59375 L 0.191406 65.652344 C 0.191406 65 0.292969 64.363281 0.503906 63.746094 C 0.710938 63.128906 1.015625 62.5625 1.414062 62.050781 C 1.816406 61.535156 2.285156 61.101562 2.832031 60.746094 C 3.375 60.390625 3.964844 60.132812 4.59375 59.976562 C 8.136719 59.1875 11.722656 58.824219 15.347656 58.886719 C 17.335938 58.882812 19.316406 58.976562 21.292969 59.171875 C 21.449219 59.1875 21.59375 59.230469 21.730469 59.304688 C 21.867188 59.378906 21.984375 59.476562 22.082031 59.59375 C 22.179688 59.714844 22.25 59.851562 22.292969 60 C 22.339844 60.148438 22.351562 60.300781 22.335938 60.453125 C 22.320312 60.609375 22.277344 60.753906 22.203125 60.890625 C 22.132812 61.027344 22.035156 61.144531 21.914062 61.242188 C 21.796875 61.339844 21.664062 61.414062 21.515625 61.457031 C 21.367188 61.503906 21.214844 61.515625 21.0625 61.5 C 19.160156 61.3125 17.257812 61.222656 15.347656 61.230469 C 11.910156 61.167969 8.511719 61.507812 5.152344 62.25 C 4.773438 62.34375 4.421875 62.496094 4.097656 62.710938 C 3.769531 62.925781 3.488281 63.1875 3.25 63.496094 C 3.011719 63.804688 2.832031 64.140625 2.707031 64.511719 C 2.582031 64.882812 2.523438 65.261719 2.523438 65.652344 L 2.523438 70.59375 C 2.523438 70.75 2.496094 70.898438 2.4375 71.042969 C 2.375 71.1875 2.292969 71.3125 2.183594 71.421875 C 2.074219 71.53125 1.949219 71.617188 1.804688 71.675781 C 1.664062 71.734375 1.511719 71.765625 1.359375 71.765625 Z M 1.359375 71.765625 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ff914d"
              d="M 37.5 57.71875 C 36.964844 57.71875 36.433594 57.664062 35.910156 57.558594 C 35.382812 57.453125 34.875 57.296875 34.378906 57.089844 C 33.882812 56.886719 33.414062 56.632812 32.96875 56.332031 C 32.523438 56.035156 32.109375 55.695312 31.730469 55.316406 C 31.351562 54.933594 31.015625 54.519531 30.71875 54.074219 C 30.417969 53.625 30.167969 53.152344 29.960938 52.65625 C 29.757812 52.160156 29.601562 51.648438 29.496094 51.121094 C 29.390625 50.59375 29.339844 50.0625 29.339844 49.523438 L 29.339844 47.179688 C 29.339844 46.644531 29.390625 46.109375 29.496094 45.582031 C 29.601562 45.054688 29.753906 44.542969 29.960938 44.046875 C 30.164062 43.546875 30.417969 43.078125 30.714844 42.628906 C 31.011719 42.179688 31.351562 41.765625 31.730469 41.386719 C 32.109375 41.007812 32.519531 40.667969 32.964844 40.367188 C 33.410156 40.070312 33.882812 39.816406 34.375 39.609375 C 34.871094 39.40625 35.382812 39.25 35.90625 39.144531 C 36.433594 39.039062 36.964844 38.988281 37.5 38.988281 C 38.035156 38.988281 38.566406 39.039062 39.09375 39.144531 C 39.617188 39.25 40.128906 39.40625 40.621094 39.609375 C 41.117188 39.816406 41.589844 40.070312 42.035156 40.367188 C 42.480469 40.667969 42.890625 41.007812 43.269531 41.386719 C 43.648438 41.765625 43.988281 42.179688 44.285156 42.628906 C 44.582031 43.078125 44.835938 43.546875 45.039062 44.046875 C 45.246094 44.542969 45.398438 45.054688 45.503906 45.582031 C 45.609375 46.109375 45.660156 46.644531 45.660156 47.179688 L 45.660156 49.523438 C 45.660156 50.0625 45.609375 50.59375 45.503906 51.121094 C 45.398438 51.648438 45.242188 52.160156 45.039062 52.65625 C 44.832031 53.152344 44.582031 53.625 44.28125 54.074219 C 43.984375 54.519531 43.648438 54.933594 43.269531 55.316406 C 42.890625 55.695312 42.476562 56.035156 42.03125 56.332031 C 41.585938 56.632812 41.117188 56.886719 40.621094 57.089844 C 40.125 57.296875 39.617188 57.453125 39.089844 57.558594 C 38.566406 57.664062 38.035156 57.71875 37.5 57.71875 Z M 37.5 41.328125 C 37.117188 41.328125 36.738281 41.367188 36.363281 41.441406 C 35.988281 41.515625 35.625 41.628906 35.269531 41.777344 C 34.917969 41.921875 34.582031 42.101562 34.261719 42.316406 C 33.945312 42.53125 33.652344 42.773438 33.378906 43.042969 C 33.109375 43.316406 32.867188 43.613281 32.65625 43.929688 C 32.441406 44.25 32.261719 44.585938 32.117188 44.941406 C 31.96875 45.296875 31.859375 45.664062 31.785156 46.039062 C 31.707031 46.417969 31.671875 46.796875 31.671875 47.179688 L 31.671875 49.523438 C 31.671875 49.90625 31.707031 50.289062 31.78125 50.664062 C 31.859375 51.042969 31.96875 51.40625 32.113281 51.761719 C 32.261719 52.117188 32.441406 52.457031 32.652344 52.773438 C 32.867188 53.09375 33.109375 53.390625 33.378906 53.660156 C 33.648438 53.933594 33.941406 54.175781 34.261719 54.390625 C 34.578125 54.601562 34.914062 54.785156 35.269531 54.929688 C 35.621094 55.078125 35.988281 55.1875 36.363281 55.265625 C 36.738281 55.339844 37.117188 55.375 37.5 55.375 C 37.882812 55.375 38.261719 55.339844 38.636719 55.265625 C 39.011719 55.1875 39.378906 55.078125 39.730469 54.929688 C 40.085938 54.785156 40.421875 54.601562 40.738281 54.390625 C 41.058594 54.175781 41.351562 53.933594 41.621094 53.660156 C 41.890625 53.390625 42.132812 53.09375 42.347656 52.773438 C 42.558594 52.457031 42.738281 52.117188 42.886719 51.761719 C 43.03125 51.40625 43.140625 51.042969 43.21875 50.664062 C 43.292969 50.289062 43.328125 49.90625 43.328125 49.523438 L 43.328125 47.179688 C 43.328125 46.796875 43.292969 46.417969 43.214844 46.039062 C 43.140625 45.664062 43.03125 45.296875 42.882812 44.941406 C 42.738281 44.585938 42.558594 44.25 42.34375 43.929688 C 42.132812 43.613281 41.890625 43.316406 41.621094 43.042969 C 41.347656 42.773438 41.054688 42.53125 40.738281 42.316406 C 40.417969 42.101562 40.082031 41.921875 39.730469 41.777344 C 39.375 41.628906 39.011719 41.515625 38.636719 41.441406 C 38.261719 41.367188 37.882812 41.328125 37.5 41.328125 Z M 37.5 41.328125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#776772d3c9)">
              <path fill="#ff914d"
                d="M 51.488281 71.765625 C 51.335938 71.765625 51.1875 71.734375 51.042969 71.675781 C 50.902344 71.617188 50.773438 71.53125 50.664062 71.421875 C 50.554688 71.3125 50.472656 71.1875 50.414062 71.042969 C 50.355469 70.898438 50.324219 70.75 50.324219 70.59375 L 50.324219 65.652344 C 50.328125 65.261719 50.265625 64.882812 50.140625 64.511719 C 50.015625 64.140625 49.835938 63.804688 49.597656 63.496094 C 49.359375 63.1875 49.078125 62.925781 48.753906 62.710938 C 48.425781 62.5 48.074219 62.34375 47.699219 62.25 C 44.339844 61.507812 40.941406 61.167969 37.5 61.230469 C 34.0625 61.167969 30.660156 61.507812 27.300781 62.25 C 26.925781 62.34375 26.574219 62.496094 26.25 62.710938 C 25.921875 62.925781 25.640625 63.1875 25.402344 63.496094 C 25.164062 63.804688 24.984375 64.140625 24.859375 64.511719 C 24.734375 64.882812 24.671875 65.261719 24.675781 65.652344 L 24.675781 70.59375 C 24.675781 70.75 24.644531 70.898438 24.585938 71.042969 C 24.527344 71.1875 24.445312 71.3125 24.335938 71.421875 C 24.226562 71.53125 24.097656 71.617188 23.957031 71.675781 C 23.8125 71.734375 23.664062 71.765625 23.511719 71.765625 C 23.355469 71.765625 23.207031 71.734375 23.0625 71.675781 C 22.921875 71.617188 22.792969 71.53125 22.683594 71.421875 C 22.574219 71.3125 22.492188 71.1875 22.433594 71.042969 C 22.375 70.898438 22.34375 70.75 22.34375 70.59375 L 22.34375 65.652344 C 22.339844 65 22.445312 64.363281 22.652344 63.746094 C 22.863281 63.128906 23.167969 62.5625 23.566406 62.050781 C 23.964844 61.535156 24.4375 61.101562 24.984375 60.746094 C 25.527344 60.390625 26.117188 60.132812 26.746094 59.976562 C 30.289062 59.1875 33.871094 58.824219 37.5 58.886719 C 41.128906 58.824219 44.710938 59.1875 48.253906 59.976562 C 48.886719 60.132812 49.472656 60.390625 50.019531 60.746094 C 50.5625 61.101562 51.035156 61.535156 51.433594 62.050781 C 51.832031 62.5625 52.136719 63.128906 52.347656 63.746094 C 52.554688 64.363281 52.660156 65 52.65625 65.652344 L 52.65625 70.59375 C 52.65625 70.75 52.625 70.898438 52.566406 71.042969 C 52.507812 71.1875 52.425781 71.3125 52.316406 71.421875 C 52.207031 71.53125 52.078125 71.617188 51.9375 71.675781 C 51.792969 71.734375 51.644531 71.765625 51.488281 71.765625 Z M 51.488281 71.765625 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ff914d"
              d="M 59.652344 57.71875 C 59.117188 57.71875 58.585938 57.664062 58.058594 57.558594 C 57.535156 57.453125 57.023438 57.296875 56.53125 57.089844 C 56.035156 56.886719 55.566406 56.632812 55.121094 56.332031 C 54.675781 56.035156 54.261719 55.695312 53.882812 55.316406 C 53.503906 54.933594 53.167969 54.519531 52.867188 54.074219 C 52.570312 53.625 52.320312 53.152344 52.113281 52.65625 C 51.910156 52.160156 51.753906 51.648438 51.648438 51.121094 C 51.542969 50.59375 51.492188 50.0625 51.488281 49.523438 L 51.488281 47.179688 C 51.488281 46.644531 51.542969 46.109375 51.648438 45.582031 C 51.75 45.054688 51.90625 44.542969 52.113281 44.046875 C 52.316406 43.546875 52.566406 43.078125 52.867188 42.628906 C 53.164062 42.179688 53.5 41.765625 53.878906 41.386719 C 54.257812 41.007812 54.671875 40.667969 55.117188 40.367188 C 55.5625 40.070312 56.03125 39.816406 56.527344 39.609375 C 57.023438 39.40625 57.535156 39.25 58.058594 39.144531 C 58.585938 39.039062 59.113281 38.988281 59.652344 38.988281 C 60.1875 38.988281 60.71875 39.039062 61.242188 39.144531 C 61.769531 39.25 62.277344 39.40625 62.773438 39.609375 C 63.269531 39.816406 63.738281 40.070312 64.183594 40.367188 C 64.628906 40.667969 65.042969 41.007812 65.421875 41.386719 C 65.800781 41.765625 66.140625 42.179688 66.4375 42.628906 C 66.734375 43.078125 66.984375 43.546875 67.191406 44.046875 C 67.394531 44.542969 67.550781 45.054688 67.65625 45.582031 C 67.757812 46.109375 67.8125 46.644531 67.8125 47.179688 L 67.8125 49.523438 C 67.8125 50.0625 67.757812 50.59375 67.652344 51.121094 C 67.546875 51.648438 67.394531 52.160156 67.1875 52.65625 C 66.984375 53.152344 66.730469 53.625 66.433594 54.074219 C 66.136719 54.519531 65.796875 54.933594 65.417969 55.316406 C 65.039062 55.695312 64.628906 56.035156 64.183594 56.332031 C 63.738281 56.632812 63.265625 56.886719 62.773438 57.089844 C 62.277344 57.296875 61.769531 57.453125 61.242188 57.558594 C 60.71875 57.664062 60.1875 57.71875 59.652344 57.71875 Z M 59.652344 41.328125 C 59.269531 41.328125 58.890625 41.367188 58.515625 41.441406 C 58.140625 41.515625 57.773438 41.628906 57.421875 41.777344 C 57.066406 41.921875 56.730469 42.101562 56.414062 42.316406 C 56.097656 42.53125 55.800781 42.773438 55.53125 43.042969 C 55.261719 43.316406 55.019531 43.613281 54.804688 43.929688 C 54.59375 44.25 54.414062 44.585938 54.265625 44.941406 C 54.121094 45.296875 54.011719 45.664062 53.933594 46.039062 C 53.859375 46.417969 53.824219 46.796875 53.820312 47.179688 L 53.820312 49.523438 C 53.820312 49.90625 53.859375 50.289062 53.933594 50.664062 C 54.007812 51.042969 54.117188 51.40625 54.265625 51.761719 C 54.410156 52.117188 54.589844 52.457031 54.804688 52.773438 C 55.015625 53.09375 55.257812 53.390625 55.527344 53.660156 C 55.800781 53.933594 56.09375 54.175781 56.414062 54.390625 C 56.730469 54.601562 57.066406 54.785156 57.421875 54.929688 C 57.773438 55.078125 58.136719 55.1875 58.515625 55.265625 C 58.890625 55.339844 59.269531 55.375 59.652344 55.375 C 60.035156 55.375 60.414062 55.339844 60.789062 55.265625 C 61.164062 55.1875 61.527344 55.078125 61.882812 54.929688 C 62.234375 54.785156 62.570312 54.601562 62.890625 54.390625 C 63.207031 54.175781 63.503906 53.933594 63.773438 53.660156 C 64.042969 53.390625 64.285156 53.09375 64.496094 52.773438 C 64.710938 52.457031 64.890625 52.117188 65.035156 51.761719 C 65.183594 51.40625 65.292969 51.042969 65.367188 50.664062 C 65.441406 50.289062 65.480469 49.90625 65.480469 49.523438 L 65.480469 47.179688 C 65.480469 46.796875 65.441406 46.417969 65.367188 46.039062 C 65.292969 45.664062 65.179688 45.296875 65.035156 44.941406 C 64.886719 44.585938 64.707031 44.25 64.496094 43.929688 C 64.28125 43.613281 64.042969 43.316406 63.769531 43.042969 C 63.5 42.773438 63.207031 42.53125 62.886719 42.316406 C 62.570312 42.101562 62.234375 41.921875 61.878906 41.777344 C 61.527344 41.628906 61.164062 41.515625 60.789062 41.441406 C 60.414062 41.367188 60.035156 41.328125 59.652344 41.328125 Z M 59.652344 41.328125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#ed94fcadf9)">
              <path fill="#ff914d"
                d="M 73.640625 71.765625 C 73.488281 71.765625 73.335938 71.734375 73.195312 71.675781 C 73.050781 71.617188 72.925781 71.53125 72.816406 71.421875 C 72.707031 71.3125 72.625 71.1875 72.5625 71.042969 C 72.503906 70.898438 72.476562 70.75 72.476562 70.59375 L 72.476562 65.652344 C 72.476562 65.261719 72.417969 64.882812 72.292969 64.511719 C 72.167969 64.140625 71.988281 63.804688 71.75 63.496094 C 71.511719 63.1875 71.230469 62.925781 70.902344 62.710938 C 70.578125 62.5 70.226562 62.34375 69.851562 62.25 C 66.488281 61.507812 63.089844 61.167969 59.652344 61.230469 C 57.742188 61.222656 55.839844 61.3125 53.9375 61.5 C 53.785156 61.515625 53.632812 61.503906 53.484375 61.457031 C 53.335938 61.414062 53.203125 61.339844 53.085938 61.242188 C 52.964844 61.144531 52.867188 61.027344 52.792969 60.890625 C 52.722656 60.753906 52.675781 60.609375 52.660156 60.453125 C 52.644531 60.300781 52.660156 60.148438 52.707031 60 C 52.75 59.851562 52.820312 59.714844 52.917969 59.59375 C 53.015625 59.476562 53.132812 59.378906 53.269531 59.304688 C 53.40625 59.230469 53.550781 59.1875 53.707031 59.171875 C 55.683594 58.976562 57.664062 58.882812 59.652344 58.886719 C 63.277344 58.824219 66.863281 59.1875 70.40625 59.976562 C 71.035156 60.132812 71.625 60.390625 72.167969 60.746094 C 72.714844 61.101562 73.1875 61.535156 73.585938 62.050781 C 73.984375 62.5625 74.289062 63.128906 74.496094 63.746094 C 74.707031 64.363281 74.808594 65 74.808594 65.652344 L 74.808594 70.59375 C 74.808594 70.75 74.777344 70.898438 74.71875 71.042969 C 74.660156 71.1875 74.574219 71.3125 74.464844 71.421875 C 74.355469 71.53125 74.230469 71.617188 74.085938 71.675781 C 73.945312 71.734375 73.796875 71.765625 73.640625 71.765625 Z M 73.640625 71.765625 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ff914d"
              d="M 58.523438 37.816406 C 58.398438 37.816406 58.277344 37.796875 58.15625 37.757812 C 58.007812 37.707031 57.878906 37.632812 57.761719 37.53125 C 57.644531 37.429688 57.550781 37.308594 57.480469 37.171875 C 57.414062 37.03125 57.371094 36.886719 57.359375 36.730469 C 57.351562 36.574219 57.367188 36.425781 57.417969 36.277344 C 58.257812 33.726562 58.601562 31.109375 58.453125 28.429688 C 58.300781 25.746094 57.664062 23.1875 56.539062 20.75 C 56.476562 20.609375 56.4375 20.460938 56.433594 20.304688 C 56.425781 20.152344 56.449219 20 56.503906 19.855469 C 56.554688 19.707031 56.632812 19.578125 56.738281 19.464844 C 56.84375 19.347656 56.964844 19.257812 57.105469 19.195312 C 57.246094 19.128906 57.394531 19.09375 57.546875 19.085938 C 57.703125 19.078125 57.851562 19.101562 57.996094 19.15625 C 58.144531 19.210938 58.273438 19.289062 58.386719 19.394531 C 58.5 19.5 58.589844 19.621094 58.65625 19.761719 C 59.273438 21.105469 59.761719 22.492188 60.117188 23.929688 C 60.476562 25.363281 60.695312 26.820312 60.78125 28.296875 C 60.863281 29.773438 60.808594 31.242188 60.613281 32.710938 C 60.421875 34.175781 60.09375 35.609375 59.628906 37.015625 C 59.550781 37.253906 59.410156 37.445312 59.207031 37.59375 C 59.003906 37.742188 58.773438 37.816406 58.523438 37.816406 Z M 58.523438 37.816406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 18.847656 18.792969 C 18.386719 18.789062 18.046875 18.585938 17.824219 18.179688 C 17.605469 17.777344 17.617188 17.378906 17.867188 16.988281 C 18.621094 15.808594 19.476562 14.703125 20.429688 13.675781 C 21.382812 12.648438 22.417969 11.714844 23.539062 10.871094 C 24.660156 10.03125 25.84375 9.296875 27.09375 8.671875 C 28.347656 8.046875 29.644531 7.535156 30.988281 7.144531 C 32.328125 6.75 33.695312 6.480469 35.085938 6.335938 C 36.476562 6.191406 37.871094 6.167969 39.265625 6.273438 C 40.660156 6.378906 42.03125 6.609375 43.386719 6.964844 C 44.738281 7.316406 46.050781 7.789062 47.320312 8.378906 C 47.457031 8.445312 47.582031 8.535156 47.6875 8.648438 C 47.789062 8.761719 47.867188 8.894531 47.921875 9.039062 C 47.976562 9.183594 48 9.335938 47.992188 9.492188 C 47.984375 9.644531 47.949219 9.792969 47.882812 9.933594 C 47.820312 10.074219 47.730469 10.199219 47.613281 10.304688 C 47.5 10.410156 47.371094 10.488281 47.226562 10.539062 C 47.082031 10.59375 46.929688 10.617188 46.777344 10.609375 C 46.621094 10.605469 46.476562 10.570312 46.335938 10.503906 C 45.191406 9.972656 44.011719 9.546875 42.792969 9.230469 C 41.578125 8.910156 40.339844 8.703125 39.085938 8.609375 C 37.832031 8.515625 36.578125 8.53125 35.324219 8.664062 C 34.074219 8.792969 32.84375 9.035156 31.632812 9.390625 C 30.425781 9.742188 29.257812 10.203125 28.132812 10.765625 C 27.007812 11.332031 25.9375 11.992188 24.929688 12.746094 C 23.921875 13.503906 22.988281 14.34375 22.132812 15.269531 C 21.273438 16.195312 20.507812 17.1875 19.828125 18.253906 C 19.597656 18.613281 19.269531 18.792969 18.847656 18.792969 Z M 18.847656 18.792969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 16.476562 37.816406 C 16.226562 37.816406 15.996094 37.742188 15.792969 37.59375 C 15.589844 37.445312 15.449219 37.253906 15.371094 37.015625 C 14.507812 34.402344 14.113281 31.71875 14.191406 28.964844 C 14.269531 26.214844 14.808594 23.558594 15.816406 20.996094 C 15.871094 20.851562 15.953125 20.722656 16.0625 20.613281 C 16.167969 20.5 16.292969 20.414062 16.4375 20.351562 C 16.578125 20.289062 16.726562 20.257812 16.882812 20.257812 C 17.035156 20.253906 17.183594 20.28125 17.328125 20.339844 C 17.472656 20.394531 17.601562 20.476562 17.710938 20.585938 C 17.820312 20.695312 17.90625 20.820312 17.96875 20.960938 C 18.03125 21.105469 18.0625 21.253906 18.066406 21.410156 C 18.066406 21.5625 18.039062 21.714844 17.984375 21.859375 C 17.078125 24.164062 16.589844 26.554688 16.523438 29.03125 C 16.453125 31.507812 16.804688 33.925781 17.582031 36.277344 C 17.628906 36.425781 17.648438 36.574219 17.636719 36.730469 C 17.625 36.886719 17.585938 37.03125 17.515625 37.171875 C 17.449219 37.308594 17.355469 37.429688 17.238281 37.53125 C 17.121094 37.632812 16.988281 37.707031 16.84375 37.757812 C 16.722656 37.796875 16.601562 37.816406 16.476562 37.816406 Z M 16.476562 37.816406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 49.617188 37.816406 C 49.410156 37.816406 49.214844 37.765625 49.035156 37.65625 C 48.902344 37.582031 48.789062 37.480469 48.691406 37.355469 C 48.597656 37.234375 48.53125 37.097656 48.492188 36.945312 C 48.453125 36.796875 48.441406 36.644531 48.464844 36.492188 C 48.484375 36.335938 48.53125 36.195312 48.609375 36.058594 C 49.121094 35.167969 49.519531 34.230469 49.804688 33.242188 C 50.09375 32.257812 50.261719 31.25 50.308594 30.222656 C 50.355469 29.199219 50.28125 28.179688 50.089844 27.171875 C 49.894531 26.164062 49.585938 25.191406 49.160156 24.257812 C 49.089844 24.113281 49.050781 23.964844 49.039062 23.808594 C 49.03125 23.648438 49.054688 23.496094 49.105469 23.347656 C 49.160156 23.199219 49.238281 23.066406 49.34375 22.949219 C 49.449219 22.832031 49.574219 22.742188 49.71875 22.675781 C 49.859375 22.609375 50.011719 22.574219 50.167969 22.570312 C 50.324219 22.5625 50.476562 22.589844 50.625 22.648438 C 50.769531 22.703125 50.902344 22.789062 51.015625 22.898438 C 51.128906 23.007812 51.214844 23.132812 51.277344 23.28125 C 51.78125 24.382812 52.148438 25.53125 52.375 26.726562 C 52.605469 27.917969 52.695312 29.121094 52.636719 30.335938 C 52.582031 31.546875 52.382812 32.738281 52.042969 33.902344 C 51.703125 35.070312 51.230469 36.179688 50.628906 37.230469 C 50.402344 37.621094 50.066406 37.816406 49.617188 37.816406 Z M 49.617188 37.816406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 25.382812 37.816406 C 24.933594 37.816406 24.597656 37.621094 24.371094 37.230469 C 23.972656 36.535156 23.628906 35.816406 23.34375 35.066406 C 23.058594 34.316406 22.832031 33.550781 22.667969 32.765625 C 22.5 31.980469 22.398438 31.1875 22.359375 30.386719 C 22.316406 29.585938 22.339844 28.785156 22.425781 27.988281 C 22.511719 27.1875 22.65625 26.402344 22.867188 25.628906 C 23.078125 24.855469 23.34375 24.101562 23.671875 23.371094 C 24 22.636719 24.382812 21.9375 24.820312 21.265625 C 25.261719 20.597656 25.75 19.964844 26.285156 19.371094 C 26.824219 18.777344 27.40625 18.230469 28.027344 17.730469 C 28.652344 17.226562 29.3125 16.78125 30.007812 16.382812 C 30.703125 15.988281 31.421875 15.648438 32.171875 15.367188 C 32.917969 15.085938 33.683594 14.863281 34.46875 14.703125 C 35.25 14.542969 36.039062 14.445312 36.839844 14.410156 C 37.636719 14.375 38.433594 14.40625 39.226562 14.496094 C 40.019531 14.585938 40.800781 14.742188 41.570312 14.957031 C 42.339844 15.171875 43.089844 15.449219 43.816406 15.78125 C 43.957031 15.847656 44.078125 15.9375 44.183594 16.050781 C 44.289062 16.164062 44.371094 16.292969 44.421875 16.441406 C 44.476562 16.585938 44.5 16.738281 44.496094 16.890625 C 44.492188 17.046875 44.457031 17.195312 44.390625 17.335938 C 44.328125 17.476562 44.238281 17.601562 44.125 17.707031 C 44.011719 17.8125 43.882812 17.894531 43.734375 17.949219 C 43.589844 18.003906 43.441406 18.027344 43.285156 18.019531 C 43.132812 18.015625 42.984375 17.980469 42.84375 17.914062 C 42.230469 17.632812 41.597656 17.398438 40.945312 17.214844 C 40.292969 17.035156 39.632812 16.902344 38.960938 16.828125 C 38.289062 16.75 37.617188 16.722656 36.941406 16.753906 C 36.265625 16.785156 35.597656 16.867188 34.933594 17 C 34.273438 17.136719 33.625 17.324219 32.992188 17.5625 C 32.359375 17.800781 31.75 18.085938 31.160156 18.421875 C 30.574219 18.757812 30.015625 19.136719 29.488281 19.5625 C 28.960938 19.984375 28.46875 20.449219 28.011719 20.949219 C 27.558594 21.453125 27.144531 21.988281 26.773438 22.554688 C 26.402344 23.121094 26.078125 23.714844 25.800781 24.332031 C 25.523438 24.953125 25.296875 25.589844 25.121094 26.246094 C 24.941406 26.898438 24.816406 27.5625 24.746094 28.238281 C 24.671875 28.914062 24.652344 29.589844 24.6875 30.269531 C 24.722656 30.945312 24.808594 31.617188 24.949219 32.28125 C 25.089844 32.945312 25.277344 33.59375 25.519531 34.226562 C 25.761719 34.863281 26.050781 35.472656 26.390625 36.058594 C 26.46875 36.195312 26.515625 36.339844 26.535156 36.492188 C 26.558594 36.644531 26.546875 36.796875 26.507812 36.949219 C 26.46875 37.097656 26.402344 37.234375 26.308594 37.359375 C 26.210938 37.480469 26.097656 37.582031 25.964844 37.660156 C 25.785156 37.765625 25.589844 37.816406 25.382812 37.816406 Z M 25.382812 37.816406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 37.5 36.644531 C 37.039062 36.644531 36.585938 36.601562 36.136719 36.511719 C 35.683594 36.421875 35.246094 36.289062 34.824219 36.109375 C 34.398438 35.933594 33.996094 35.71875 33.613281 35.460938 C 33.230469 35.207031 32.878906 34.914062 32.554688 34.589844 C 32.230469 34.261719 31.9375 33.90625 31.683594 33.523438 C 31.429688 33.140625 31.214844 32.734375 31.039062 32.308594 C 30.863281 31.882812 30.730469 31.445312 30.640625 30.992188 C 30.550781 30.539062 30.503906 30.082031 30.503906 29.621094 C 30.503906 29.160156 30.550781 28.703125 30.640625 28.25 C 30.730469 27.800781 30.863281 27.359375 31.039062 26.933594 C 31.214844 26.507812 31.429688 26.101562 31.683594 25.71875 C 31.9375 25.335938 32.230469 24.980469 32.554688 24.65625 C 32.878906 24.328125 33.230469 24.039062 33.613281 23.78125 C 33.996094 23.523438 34.398438 23.308594 34.824219 23.132812 C 35.246094 22.957031 35.683594 22.824219 36.136719 22.734375 C 36.585938 22.640625 37.039062 22.597656 37.5 22.597656 C 37.65625 22.597656 37.804688 22.628906 37.945312 22.6875 C 38.089844 22.746094 38.214844 22.832031 38.324219 22.941406 C 38.433594 23.050781 38.519531 23.175781 38.578125 23.320312 C 38.636719 23.464844 38.664062 23.613281 38.664062 23.769531 C 38.664062 23.921875 38.636719 24.074219 38.578125 24.214844 C 38.519531 24.359375 38.433594 24.484375 38.324219 24.597656 C 38.214844 24.707031 38.089844 24.789062 37.945312 24.851562 C 37.804688 24.910156 37.65625 24.9375 37.5 24.9375 C 37.195312 24.9375 36.890625 24.96875 36.589844 25.027344 C 36.289062 25.089844 36 25.175781 35.714844 25.296875 C 35.433594 25.414062 35.164062 25.558594 34.910156 25.726562 C 34.65625 25.898438 34.417969 26.09375 34.203125 26.308594 C 33.984375 26.527344 33.792969 26.765625 33.621094 27.019531 C 33.453125 27.277344 33.308594 27.546875 33.191406 27.828125 C 33.074219 28.113281 32.984375 28.40625 32.925781 28.707031 C 32.867188 29.007812 32.835938 29.3125 32.835938 29.621094 C 32.835938 29.929688 32.867188 30.234375 32.925781 30.535156 C 32.984375 30.835938 33.074219 31.128906 33.191406 31.414062 C 33.308594 31.699219 33.453125 31.96875 33.621094 32.222656 C 33.792969 32.480469 33.984375 32.714844 34.203125 32.933594 C 34.417969 33.148438 34.65625 33.34375 34.910156 33.515625 C 35.164062 33.6875 35.433594 33.832031 35.714844 33.949219 C 36 34.066406 36.289062 34.152344 36.589844 34.214844 C 36.890625 34.273438 37.195312 34.304688 37.5 34.304688 C 37.804688 34.304688 38.109375 34.273438 38.410156 34.214844 C 38.710938 34.152344 39 34.066406 39.285156 33.949219 C 39.566406 33.832031 39.835938 33.6875 40.089844 33.515625 C 40.34375 33.34375 40.582031 33.148438 40.796875 32.933594 C 41.015625 32.714844 41.207031 32.480469 41.378906 32.222656 C 41.546875 31.96875 41.691406 31.699219 41.808594 31.414062 C 41.925781 31.128906 42.015625 30.835938 42.074219 30.535156 C 42.132812 30.234375 42.164062 29.929688 42.164062 29.621094 C 42.164062 29.464844 42.191406 29.316406 42.253906 29.171875 C 42.3125 29.03125 42.394531 28.902344 42.503906 28.792969 C 42.613281 28.683594 42.738281 28.597656 42.882812 28.539062 C 43.027344 28.480469 43.175781 28.449219 43.328125 28.449219 C 43.484375 28.449219 43.632812 28.480469 43.773438 28.539062 C 43.917969 28.597656 44.042969 28.683594 44.152344 28.792969 C 44.261719 28.902344 44.347656 29.03125 44.40625 29.171875 C 44.464844 29.316406 44.496094 29.464844 44.496094 29.621094 C 44.496094 30.082031 44.449219 30.539062 44.359375 30.992188 C 44.269531 31.445312 44.136719 31.882812 43.960938 32.308594 C 43.785156 32.734375 43.570312 33.140625 43.3125 33.523438 C 43.058594 33.90625 42.769531 34.261719 42.445312 34.585938 C 42.121094 34.914062 41.765625 35.203125 41.382812 35.460938 C 41.003906 35.714844 40.601562 35.933594 40.175781 36.109375 C 39.75 36.285156 39.316406 36.417969 38.863281 36.507812 C 38.414062 36.601562 37.960938 36.644531 37.5 36.644531 Z M 37.5 36.644531 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 37.5 30.792969 C 37.265625 30.792969 37.046875 30.726562 36.851562 30.59375 C 36.65625 30.464844 36.511719 30.289062 36.421875 30.070312 C 36.332031 29.851562 36.3125 29.625 36.355469 29.394531 C 36.402344 29.160156 36.507812 28.960938 36.675781 28.792969 L 47.167969 18.257812 C 47.277344 18.152344 47.402344 18.070312 47.546875 18.011719 C 47.6875 17.957031 47.835938 17.929688 47.988281 17.929688 C 48.140625 17.929688 48.289062 17.960938 48.429688 18.019531 C 48.570312 18.078125 48.695312 18.164062 48.800781 18.273438 C 48.910156 18.378906 48.996094 18.503906 49.054688 18.648438 C 49.113281 18.789062 49.144531 18.9375 49.144531 19.089844 C 49.144531 19.242188 49.117188 19.390625 49.0625 19.535156 C 49.003906 19.675781 48.921875 19.804688 48.816406 19.914062 L 38.324219 30.449219 C 38.097656 30.679688 37.820312 30.792969 37.5 30.792969 Z M 37.5 30.792969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 52.65625 20.257812 L 47.992188 20.257812 C 47.839844 20.257812 47.6875 20.226562 47.546875 20.167969 C 47.402344 20.109375 47.277344 20.023438 47.167969 19.914062 C 47.058594 19.804688 46.976562 19.675781 46.914062 19.535156 C 46.855469 19.390625 46.828125 19.242188 46.828125 19.085938 L 46.828125 14.402344 C 46.828125 14.078125 46.941406 13.804688 47.167969 13.574219 L 54.164062 6.550781 C 54.332031 6.382812 54.527344 6.277344 54.761719 6.230469 C 54.992188 6.183594 55.214844 6.207031 55.433594 6.296875 C 55.652344 6.386719 55.824219 6.53125 55.957031 6.730469 C 56.089844 6.925781 56.152344 7.140625 56.152344 7.378906 L 56.152344 10.890625 L 59.652344 10.890625 C 59.886719 10.890625 60.101562 10.957031 60.296875 11.089844 C 60.496094 11.21875 60.636719 11.394531 60.726562 11.613281 C 60.816406 11.832031 60.839844 12.058594 60.792969 12.289062 C 60.75 12.523438 60.640625 12.722656 60.476562 12.890625 L 53.480469 19.914062 C 53.253906 20.140625 52.976562 20.257812 52.65625 20.257812 Z M 49.160156 17.914062 L 52.171875 17.914062 L 56.835938 13.230469 L 54.988281 13.230469 C 54.832031 13.230469 54.683594 13.203125 54.542969 13.144531 C 54.398438 13.082031 54.273438 13 54.164062 12.890625 C 54.054688 12.78125 53.96875 12.652344 53.910156 12.507812 C 53.851562 12.367188 53.820312 12.214844 53.820312 12.0625 L 53.820312 10.203125 L 49.160156 14.886719 Z M 49.160156 17.914062 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <p class="servicep">
            Concentration of internal teams on strategic projects
          </p>
        </div>
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#ff914d"
              d="M 13.042969 24.457031 L 16.535156 24.457031 C 16.714844 25.15625 17 25.808594 17.394531 26.410156 C 17.789062 27.015625 18.273438 27.539062 18.84375 27.980469 C 19.410156 28.421875 20.039062 28.761719 20.71875 28.996094 C 21.402344 29.230469 22.105469 29.347656 22.824219 29.347656 C 23.546875 29.347656 24.25 29.230469 24.933594 28.996094 C 25.613281 28.761719 26.238281 28.421875 26.808594 27.980469 C 27.378906 27.539062 27.863281 27.015625 28.257812 26.410156 C 28.652344 25.808594 28.9375 25.15625 29.117188 24.457031 L 61.957031 24.457031 C 62.171875 24.457031 62.378906 24.414062 62.582031 24.332031 C 62.78125 24.25 62.957031 24.132812 63.109375 23.980469 C 63.261719 23.824219 63.378906 23.648438 63.460938 23.449219 C 63.546875 23.25 63.585938 23.042969 63.585938 22.824219 C 63.585938 22.609375 63.546875 22.402344 63.460938 22.203125 C 63.378906 22.003906 63.261719 21.824219 63.109375 21.671875 C 62.957031 21.519531 62.78125 21.402344 62.582031 21.320312 C 62.378906 21.238281 62.171875 21.195312 61.957031 21.195312 L 29.117188 21.195312 C 28.9375 20.496094 28.652344 19.84375 28.257812 19.242188 C 27.863281 18.636719 27.378906 18.113281 26.808594 17.671875 C 26.238281 17.230469 25.613281 16.890625 24.933594 16.65625 C 24.25 16.421875 23.546875 16.304688 22.824219 16.304688 C 22.105469 16.304688 21.402344 16.421875 20.71875 16.65625 C 20.039062 16.890625 19.410156 17.230469 18.84375 17.671875 C 18.273438 18.113281 17.789062 18.636719 17.394531 19.242188 C 17 19.84375 16.714844 20.496094 16.535156 21.195312 L 13.042969 21.195312 C 12.828125 21.195312 12.621094 21.238281 12.417969 21.320312 C 12.21875 21.402344 12.042969 21.519531 11.890625 21.671875 C 11.738281 21.824219 11.621094 22.003906 11.539062 22.203125 C 11.453125 22.402344 11.414062 22.609375 11.414062 22.824219 C 11.414062 23.042969 11.453125 23.25 11.539062 23.449219 C 11.621094 23.648438 11.738281 23.824219 11.890625 23.980469 C 12.042969 24.132812 12.21875 24.25 12.417969 24.332031 C 12.621094 24.414062 12.828125 24.457031 13.042969 24.457031 Z M 22.824219 19.566406 C 23.257812 19.566406 23.675781 19.648438 24.074219 19.8125 C 24.472656 19.980469 24.824219 20.214844 25.132812 20.519531 C 25.4375 20.824219 25.671875 21.179688 25.839844 21.578125 C 26.003906 21.976562 26.085938 22.394531 26.085938 22.824219 C 26.085938 23.257812 26.003906 23.675781 25.839844 24.074219 C 25.671875 24.472656 25.4375 24.824219 25.132812 25.132812 C 24.824219 25.4375 24.472656 25.671875 24.074219 25.839844 C 23.675781 26.003906 23.257812 26.085938 22.824219 26.085938 C 22.394531 26.085938 21.976562 26.003906 21.578125 25.839844 C 21.179688 25.671875 20.824219 25.4375 20.519531 25.132812 C 20.214844 24.824219 19.980469 24.472656 19.8125 24.074219 C 19.648438 23.675781 19.566406 23.257812 19.566406 22.824219 C 19.566406 22.394531 19.648438 21.976562 19.8125 21.578125 C 19.980469 21.179688 20.214844 20.824219 20.519531 20.519531 C 20.824219 20.214844 21.179688 19.980469 21.578125 19.8125 C 21.976562 19.648438 22.394531 19.566406 22.824219 19.566406 Z M 22.824219 19.566406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 61.957031 50.542969 L 58.464844 50.542969 C 58.285156 49.84375 58 49.191406 57.605469 48.589844 C 57.210938 47.984375 56.726562 47.460938 56.15625 47.019531 C 55.589844 46.578125 54.960938 46.238281 54.28125 46.003906 C 53.597656 45.769531 52.894531 45.652344 52.175781 45.652344 C 51.453125 45.652344 50.75 45.769531 50.066406 46.003906 C 49.386719 46.238281 48.761719 46.578125 48.191406 47.019531 C 47.621094 47.460938 47.136719 47.984375 46.742188 48.589844 C 46.347656 49.191406 46.0625 49.84375 45.882812 50.542969 L 13.042969 50.542969 C 12.828125 50.542969 12.621094 50.585938 12.417969 50.667969 C 12.21875 50.75 12.042969 50.867188 11.890625 51.019531 C 11.738281 51.175781 11.621094 51.351562 11.539062 51.550781 C 11.453125 51.75 11.414062 51.957031 11.414062 52.175781 C 11.414062 52.390625 11.453125 52.597656 11.539062 52.796875 C 11.621094 52.996094 11.738281 53.175781 11.890625 53.328125 C 12.042969 53.480469 12.21875 53.597656 12.417969 53.679688 C 12.621094 53.761719 12.828125 53.804688 13.042969 53.804688 L 45.882812 53.804688 C 46.0625 54.503906 46.347656 55.15625 46.742188 55.757812 C 47.136719 56.363281 47.621094 56.886719 48.191406 57.328125 C 48.761719 57.769531 49.386719 58.109375 50.066406 58.34375 C 50.75 58.578125 51.453125 58.695312 52.175781 58.695312 C 52.894531 58.695312 53.597656 58.578125 54.28125 58.34375 C 54.960938 58.109375 55.589844 57.769531 56.15625 57.328125 C 56.726562 56.886719 57.210938 56.363281 57.605469 55.757812 C 58 55.15625 58.285156 54.503906 58.464844 53.804688 L 61.957031 53.804688 C 62.171875 53.804688 62.378906 53.761719 62.582031 53.679688 C 62.78125 53.597656 62.957031 53.480469 63.109375 53.328125 C 63.261719 53.175781 63.378906 52.996094 63.460938 52.796875 C 63.546875 52.597656 63.585938 52.390625 63.585938 52.175781 C 63.585938 51.957031 63.546875 51.75 63.460938 51.550781 C 63.378906 51.351562 63.261719 51.175781 63.109375 51.019531 C 62.957031 50.867188 62.78125 50.75 62.582031 50.667969 C 62.378906 50.585938 62.171875 50.542969 61.957031 50.542969 Z M 52.175781 55.433594 C 51.742188 55.433594 51.324219 55.351562 50.925781 55.1875 C 50.527344 55.019531 50.175781 54.785156 49.867188 54.480469 C 49.5625 54.175781 49.328125 53.820312 49.160156 53.421875 C 48.996094 53.023438 48.914062 52.605469 48.914062 52.175781 C 48.914062 51.742188 48.996094 51.324219 49.160156 50.925781 C 49.328125 50.527344 49.5625 50.175781 49.867188 49.867188 C 50.175781 49.5625 50.527344 49.328125 50.925781 49.160156 C 51.324219 48.996094 51.742188 48.914062 52.175781 48.914062 C 52.605469 48.914062 53.023438 48.996094 53.421875 49.160156 C 53.820312 49.328125 54.175781 49.5625 54.480469 49.867188 C 54.785156 50.175781 55.019531 50.527344 55.1875 50.925781 C 55.351562 51.324219 55.433594 51.742188 55.433594 52.175781 C 55.433594 52.605469 55.351562 53.023438 55.1875 53.421875 C 55.019531 53.820312 54.785156 54.175781 54.480469 54.480469 C 54.175781 54.785156 53.820312 55.019531 53.421875 55.1875 C 53.023438 55.351562 52.605469 55.433594 52.175781 55.433594 Z M 52.175781 55.433594 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 61.957031 35.871094 L 44.023438 35.871094 C 43.949219 35.878906 43.875 35.894531 43.804688 35.914062 C 43.628906 35.210938 43.34375 34.550781 42.953125 33.941406 C 42.558594 33.332031 42.074219 32.804688 41.503906 32.359375 C 40.933594 31.910156 40.304688 31.570312 39.617188 31.332031 C 38.929688 31.09375 38.226562 30.976562 37.5 30.976562 C 36.773438 30.976562 36.070312 31.09375 35.382812 31.332031 C 34.695312 31.570312 34.066406 31.910156 33.496094 32.359375 C 32.925781 32.804688 32.441406 33.332031 32.046875 33.941406 C 31.65625 34.550781 31.371094 35.210938 31.195312 35.914062 C 31.125 35.894531 31.050781 35.878906 30.976562 35.871094 L 13.042969 35.871094 C 12.828125 35.871094 12.621094 35.910156 12.417969 35.992188 C 12.21875 36.078125 12.042969 36.195312 11.890625 36.347656 C 11.738281 36.5 11.621094 36.675781 11.539062 36.875 C 11.453125 37.074219 11.414062 37.285156 11.414062 37.5 C 11.414062 37.714844 11.453125 37.925781 11.539062 38.125 C 11.621094 38.324219 11.738281 38.5 11.890625 38.652344 C 12.042969 38.804688 12.21875 38.921875 12.417969 39.007812 C 12.621094 39.089844 12.828125 39.128906 13.042969 39.128906 L 30.976562 39.128906 C 31.050781 39.121094 31.125 39.105469 31.195312 39.085938 C 31.371094 39.789062 31.65625 40.449219 32.046875 41.058594 C 32.441406 41.667969 32.925781 42.195312 33.496094 42.640625 C 34.066406 43.089844 34.695312 43.429688 35.382812 43.667969 C 36.070312 43.90625 36.773438 44.023438 37.5 44.023438 C 38.226562 44.023438 38.929688 43.90625 39.617188 43.667969 C 40.304688 43.429688 40.933594 43.089844 41.503906 42.640625 C 42.074219 42.195312 42.558594 41.667969 42.953125 41.058594 C 43.34375 40.449219 43.628906 39.789062 43.804688 39.085938 C 43.875 39.105469 43.949219 39.121094 44.023438 39.128906 L 61.957031 39.128906 C 62.171875 39.128906 62.378906 39.089844 62.582031 39.007812 C 62.78125 38.921875 62.957031 38.804688 63.109375 38.652344 C 63.261719 38.5 63.378906 38.324219 63.460938 38.125 C 63.546875 37.925781 63.585938 37.714844 63.585938 37.5 C 63.585938 37.285156 63.546875 37.074219 63.460938 36.875 C 63.378906 36.675781 63.261719 36.5 63.109375 36.347656 C 62.957031 36.195312 62.78125 36.078125 62.582031 35.992188 C 62.378906 35.910156 62.171875 35.871094 61.957031 35.871094 Z M 37.5 40.761719 C 37.066406 40.761719 36.652344 40.679688 36.253906 40.511719 C 35.851562 40.347656 35.5 40.113281 35.195312 39.804688 C 34.886719 39.5 34.652344 39.148438 34.488281 38.746094 C 34.320312 38.347656 34.238281 37.933594 34.238281 37.5 C 34.238281 37.066406 34.320312 36.652344 34.488281 36.253906 C 34.652344 35.851562 34.886719 35.5 35.195312 35.195312 C 35.5 34.886719 35.851562 34.652344 36.253906 34.488281 C 36.652344 34.320312 37.066406 34.238281 37.5 34.238281 C 37.933594 34.238281 38.347656 34.320312 38.746094 34.488281 C 39.148438 34.652344 39.5 34.886719 39.804688 35.195312 C 40.113281 35.5 40.347656 35.851562 40.511719 36.253906 C 40.679688 36.652344 40.761719 37.066406 40.761719 37.5 C 40.761719 37.933594 40.679688 38.347656 40.511719 38.746094 C 40.347656 39.148438 40.113281 39.5 39.804688 39.804688 C 39.5 40.113281 39.148438 40.347656 38.746094 40.511719 C 38.347656 40.679688 37.933594 40.761719 37.5 40.761719 Z M 37.5 40.761719 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 37.5 0 C 36.273438 0 35.046875 0.0585938 33.824219 0.179688 C 32.601562 0.300781 31.390625 0.480469 30.183594 0.71875 C 28.980469 0.960938 27.789062 1.257812 26.613281 1.613281 C 25.4375 1.972656 24.285156 2.382812 23.148438 2.855469 C 22.015625 3.324219 20.90625 3.847656 19.824219 4.429688 C 18.738281 5.007812 17.6875 5.636719 16.667969 6.320312 C 15.644531 7.003906 14.660156 7.734375 13.710938 8.511719 C 12.761719 9.292969 11.851562 10.113281 10.984375 10.984375 C 10.113281 11.851562 9.292969 12.761719 8.511719 13.710938 C 7.734375 14.660156 7.003906 15.644531 6.320312 16.667969 C 5.636719 17.6875 5.007812 18.738281 4.429688 19.824219 C 3.847656 20.90625 3.324219 22.015625 2.855469 23.148438 C 2.382812 24.285156 1.972656 25.4375 1.613281 26.613281 C 1.257812 27.789062 0.960938 28.980469 0.71875 30.183594 C 0.480469 31.390625 0.300781 32.601562 0.179688 33.824219 C 0.0585938 35.046875 0 36.273438 0 37.5 C 0 38.726562 0.0585938 39.953125 0.179688 41.175781 C 0.300781 42.398438 0.480469 43.609375 0.71875 44.816406 C 0.960938 46.019531 1.257812 47.210938 1.613281 48.386719 C 1.972656 49.5625 2.382812 50.714844 2.855469 51.851562 C 3.324219 52.984375 3.847656 54.09375 4.429688 55.175781 C 5.007812 56.261719 5.636719 57.3125 6.320312 58.332031 C 7.003906 59.355469 7.734375 60.339844 8.511719 61.289062 C 9.292969 62.238281 10.113281 63.148438 10.984375 64.015625 C 11.851562 64.886719 12.761719 65.707031 13.710938 66.488281 C 14.660156 67.265625 15.644531 67.996094 16.667969 68.679688 C 17.6875 69.363281 18.738281 69.992188 19.824219 70.570312 C 20.90625 71.152344 22.015625 71.675781 23.148438 72.144531 C 24.285156 72.617188 25.4375 73.027344 26.613281 73.386719 C 27.789062 73.742188 28.980469 74.039062 30.183594 74.28125 C 31.390625 74.519531 32.601562 74.699219 33.824219 74.820312 C 35.046875 74.941406 36.273438 75 37.5 75 C 38.726562 75 39.953125 74.941406 41.175781 74.820312 C 42.398438 74.699219 43.609375 74.519531 44.816406 74.28125 C 46.019531 74.039062 47.210938 73.742188 48.386719 73.386719 C 49.5625 73.027344 50.714844 72.617188 51.851562 72.144531 C 52.984375 71.675781 54.09375 71.152344 55.175781 70.570312 C 56.261719 69.992188 57.3125 69.363281 58.332031 68.679688 C 59.355469 67.996094 60.339844 67.265625 61.289062 66.488281 C 62.238281 65.707031 63.148438 64.886719 64.015625 64.015625 C 64.886719 63.148438 65.707031 62.238281 66.488281 61.289062 C 67.265625 60.339844 67.996094 59.355469 68.679688 58.332031 C 69.363281 57.3125 69.992188 56.261719 70.570312 55.175781 C 71.152344 54.09375 71.675781 52.984375 72.144531 51.851562 C 72.617188 50.714844 73.027344 49.5625 73.386719 48.386719 C 73.742188 47.210938 74.039062 46.019531 74.28125 44.816406 C 74.519531 43.609375 74.699219 42.398438 74.820312 41.175781 C 74.941406 39.953125 75 38.726562 75 37.5 C 75 36.273438 74.9375 35.046875 74.816406 33.824219 C 74.695312 32.605469 74.511719 31.390625 74.273438 30.1875 C 74.03125 28.984375 73.734375 27.792969 73.375 26.617188 C 73.019531 25.445312 72.605469 24.289062 72.132812 23.15625 C 71.664062 22.023438 71.140625 20.914062 70.558594 19.832031 C 69.980469 18.75 69.347656 17.695312 68.667969 16.675781 C 67.984375 15.65625 67.253906 14.671875 66.476562 13.722656 C 65.695312 12.773438 64.871094 11.863281 64.003906 10.996094 C 63.136719 10.128906 62.226562 9.304688 61.277344 8.523438 C 60.328125 7.746094 59.34375 7.015625 58.324219 6.332031 C 57.304688 5.652344 56.25 5.019531 55.167969 4.441406 C 54.085938 3.859375 52.976562 3.335938 51.84375 2.867188 C 50.710938 2.394531 49.554688 1.980469 48.382812 1.625 C 47.207031 1.265625 46.015625 0.96875 44.8125 0.726562 C 43.609375 0.488281 42.394531 0.304688 41.175781 0.183594 C 39.953125 0.0625 38.726562 0 37.5 0 Z M 37.5 71.738281 C 36.378906 71.738281 35.261719 71.683594 34.144531 71.574219 C 33.027344 71.464844 31.921875 71.300781 30.820312 71.082031 C 29.71875 70.863281 28.632812 70.589844 27.5625 70.265625 C 26.488281 69.9375 25.433594 69.5625 24.398438 69.132812 C 23.359375 68.703125 22.347656 68.226562 21.359375 67.695312 C 20.371094 67.167969 19.410156 66.589844 18.476562 65.96875 C 17.546875 65.347656 16.644531 64.679688 15.777344 63.96875 C 14.910156 63.253906 14.082031 62.503906 13.289062 61.710938 C 12.496094 60.917969 11.746094 60.089844 11.03125 59.222656 C 10.320312 58.355469 9.652344 57.453125 9.03125 56.523438 C 8.40625 55.589844 7.832031 54.628906 7.304688 53.640625 C 6.773438 52.652344 6.296875 51.640625 5.867188 50.601562 C 5.4375 49.566406 5.0625 48.511719 4.734375 47.4375 C 4.410156 46.367188 4.136719 45.28125 3.917969 44.179688 C 3.699219 43.078125 3.535156 41.972656 3.425781 40.855469 C 3.316406 39.738281 3.261719 38.621094 3.261719 37.5 C 3.261719 36.378906 3.316406 35.261719 3.425781 34.144531 C 3.535156 33.027344 3.699219 31.921875 3.917969 30.820312 C 4.136719 29.71875 4.410156 28.632812 4.734375 27.5625 C 5.0625 26.488281 5.4375 25.433594 5.867188 24.398438 C 6.296875 23.359375 6.773438 22.347656 7.304688 21.359375 C 7.832031 20.371094 8.40625 19.410156 9.03125 18.476562 C 9.652344 17.546875 10.320312 16.644531 11.03125 15.777344 C 11.746094 14.910156 12.496094 14.082031 13.289062 13.289062 C 14.082031 12.496094 14.910156 11.746094 15.777344 11.03125 C 16.644531 10.320312 17.546875 9.652344 18.476562 9.03125 C 19.410156 8.40625 20.371094 7.832031 21.359375 7.304688 C 22.347656 6.773438 23.359375 6.296875 24.398438 5.867188 C 25.433594 5.4375 26.488281 5.0625 27.5625 4.734375 C 28.632812 4.410156 29.71875 4.136719 30.820312 3.917969 C 31.921875 3.699219 33.027344 3.535156 34.144531 3.425781 C 35.261719 3.316406 36.378906 3.261719 37.5 3.261719 C 38.621094 3.261719 39.738281 3.316406 40.855469 3.425781 C 41.972656 3.535156 43.078125 3.699219 44.179688 3.917969 C 45.28125 4.136719 46.367188 4.410156 47.4375 4.734375 C 48.511719 5.0625 49.566406 5.4375 50.601562 5.867188 C 51.640625 6.296875 52.652344 6.773438 53.640625 7.304688 C 54.628906 7.832031 55.589844 8.40625 56.523438 9.03125 C 57.453125 9.652344 58.355469 10.320312 59.222656 11.03125 C 60.089844 11.746094 60.917969 12.496094 61.710938 13.289062 C 62.503906 14.082031 63.253906 14.910156 63.96875 15.777344 C 64.679688 16.644531 65.347656 17.546875 65.96875 18.476562 C 66.589844 19.410156 67.167969 20.371094 67.695312 21.359375 C 68.226562 22.347656 68.703125 23.359375 69.132812 24.398438 C 69.5625 25.433594 69.9375 26.488281 70.265625 27.5625 C 70.589844 28.632812 70.863281 29.71875 71.082031 30.820312 C 71.300781 31.921875 71.464844 33.027344 71.574219 34.144531 C 71.683594 35.261719 71.738281 36.378906 71.738281 37.5 C 71.738281 38.621094 71.683594 39.738281 71.570312 40.855469 C 71.460938 41.96875 71.292969 43.078125 71.074219 44.175781 C 70.855469 45.277344 70.582031 46.363281 70.257812 47.433594 C 69.929688 48.507812 69.550781 49.5625 69.121094 50.597656 C 68.691406 51.632812 68.214844 52.644531 67.683594 53.632812 C 67.15625 54.621094 66.582031 55.582031 65.957031 56.511719 C 65.335938 57.445312 64.667969 58.34375 63.957031 59.210938 C 63.246094 60.078125 62.492188 60.90625 61.699219 61.699219 C 60.90625 62.492188 60.078125 63.246094 59.210938 63.957031 C 58.34375 64.667969 57.445312 65.335938 56.511719 65.957031 C 55.582031 66.582031 54.621094 67.15625 53.632812 67.683594 C 52.644531 68.214844 51.632812 68.691406 50.597656 69.121094 C 49.5625 69.550781 48.507812 69.929688 47.433594 70.257812 C 46.363281 70.582031 45.277344 70.855469 44.175781 71.074219 C 43.078125 71.292969 41.96875 71.460938 40.855469 71.570312 C 39.738281 71.683594 38.621094 71.738281 37.5 71.738281 Z M 37.5 71.738281 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <p class="servicep">
            Control, identification and reduction of technical debt
          </p>
        </div>
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#ff914d"
              d="M 37.5 75 C 16.824219 75 0 58.175781 0 37.5 C 0 16.824219 16.824219 0 37.5 0 C 58.175781 0 75 16.824219 75 37.5 C 75 58.175781 58.175781 75 37.5 75 Z M 37.5 3.570312 C 18.792969 3.570312 3.570312 18.792969 3.570312 37.5 C 3.570312 56.207031 18.792969 71.429688 37.5 71.429688 C 56.207031 71.429688 71.429688 56.207031 71.429688 37.5 C 71.429688 18.792969 56.207031 3.570312 37.5 3.570312 Z M 37.5 3.570312 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 37.5 9.574219 C 26.4375 9.574219 17.4375 18.566406 17.4375 29.621094 C 17.4375 35.011719 19.554688 40.070312 23.410156 43.871094 L 23.410156 63.910156 C 23.410156 64.457031 23.703125 64.960938 24.179688 65.230469 C 24.65625 65.496094 25.242188 65.488281 25.707031 65.203125 L 37.5 58.0625 L 49.292969 65.203125 C 49.53125 65.347656 49.800781 65.421875 50.078125 65.421875 C 50.335938 65.421875 50.59375 65.355469 50.820312 65.230469 C 51.296875 64.960938 51.589844 64.453125 51.589844 63.910156 L 51.589844 43.871094 C 55.445312 40.066406 57.5625 35.011719 57.5625 29.621094 C 57.5625 18.566406 48.5625 9.574219 37.5 9.574219 Z M 37.5 12.734375 C 46.820312 12.734375 54.402344 20.308594 54.402344 29.621094 C 54.402344 38.929688 46.820312 46.507812 37.5 46.507812 C 28.179688 46.507812 20.597656 38.929688 20.597656 29.621094 C 20.597656 20.308594 28.179688 12.734375 37.5 12.734375 Z M 26.4375 46.332031 C 29.726562 48.511719 33.542969 49.664062 37.5 49.664062 C 41.457031 49.664062 45.273438 48.511719 48.5625 46.332031 L 48.5625 61.222656 L 38.285156 55 C 38.046875 54.855469 37.777344 54.78125 37.5 54.78125 C 37.222656 54.78125 36.953125 54.855469 36.714844 55 L 26.4375 61.222656 Z M 26.4375 46.332031 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 25.152344 32.609375 L 30.054688 38.101562 C 30.378906 38.464844 30.765625 38.753906 31.203125 38.960938 C 31.703125 39.207031 32.261719 39.335938 32.8125 39.335938 C 33.699219 39.335938 34.554688 39.011719 35.21875 38.429688 L 49.101562 26.25 C 49.832031 25.609375 50.269531 24.722656 50.332031 23.753906 C 50.390625 22.78125 50.066406 21.847656 49.417969 21.121094 L 49.398438 21.101562 C 48.066406 19.632812 45.777344 19.5 44.28125 20.8125 L 33.113281 30.605469 L 30.601562 27.792969 C 29.273438 26.304688 26.96875 26.164062 25.46875 27.480469 C 24.734375 28.121094 24.296875 29.007812 24.238281 29.976562 C 24.175781 30.945312 24.5 31.882812 25.152344 32.609375 Z M 32.414062 35.996094 L 27.507812 30.503906 C 27.421875 30.410156 27.382812 30.296875 27.394531 30.171875 C 27.402344 30.046875 27.453125 29.941406 27.550781 29.855469 C 27.636719 29.777344 27.753906 29.738281 27.875 29.738281 C 28.019531 29.738281 28.152344 29.796875 28.246094 29.898438 L 32.84375 35.046875 L 46.367188 23.1875 C 46.5625 23.015625 46.886719 23.035156 47.058594 23.226562 C 47.144531 23.320312 47.183594 23.433594 47.175781 23.558594 C 47.167969 23.683594 47.117188 23.789062 47.019531 23.875 L 33.136719 36.050781 C 32.988281 36.179688 32.769531 36.207031 32.558594 36.105469 C 32.503906 36.082031 32.457031 36.042969 32.414062 35.996094 Z M 32.414062 35.996094 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <p class="servicep">
            Increase in quality of service by specializing in intervention teams
          </p>
        </div>

        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="6ac8969f73">
                <path d="M 0 32.757812 L 42.253906 32.757812 L 42.253906 74.996094 L 0 74.996094 Z M 0 32.757812 "
                  clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="e7338aeb53">
                <path d="M 32.367188 0 L 74.996094 0 L 74.996094 42.542969 L 32.367188 42.542969 Z M 32.367188 0 "
                  clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <path fill="#ff914d"
              d="M 20.136719 61.574219 C 19.125 61.503906 18.304688 61.367188 17.675781 61.164062 C 17.050781 60.957031 16.582031 60.773438 16.273438 60.601562 L 16.992188 58.597656 C 17.441406 58.820312 17.988281 59.027344 18.628906 59.207031 C 19.269531 59.390625 19.996094 59.484375 20.8125 59.484375 C 21.785156 59.484375 22.457031 59.339844 22.832031 59.050781 C 23.203125 58.761719 23.390625 58.378906 23.390625 57.898438 C 23.390625 57.574219 23.3125 57.292969 23.160156 57.054688 C 23.003906 56.816406 22.785156 56.601562 22.503906 56.421875 C 22.222656 56.238281 21.886719 56.070312 21.5 55.914062 C 21.113281 55.757812 20.6875 55.597656 20.222656 55.425781 C 19.785156 55.273438 19.351562 55.097656 18.925781 54.898438 C 18.496094 54.703125 18.105469 54.460938 17.761719 54.171875 C 17.417969 53.882812 17.140625 53.535156 16.929688 53.125 C 16.714844 52.714844 16.609375 52.214844 16.609375 51.625 C 16.609375 50.652344 16.898438 49.828125 17.476562 49.144531 C 18.054688 48.460938 18.941406 48.019531 20.136719 47.824219 L 20.136719 45.457031 L 22.335938 45.457031 L 22.335938 47.738281 C 23.011719 47.792969 23.617188 47.890625 24.152344 48.023438 C 24.6875 48.15625 25.109375 48.289062 25.417969 48.414062 L 24.890625 50.503906 C 24.484375 50.351562 24 50.203125 23.445312 50.0625 C 22.886719 49.921875 22.25 49.851562 21.53125 49.851562 C 20.773438 49.851562 20.203125 49.988281 19.820312 50.261719 C 19.441406 50.539062 19.25 50.914062 19.25 51.394531 C 19.25 51.675781 19.308594 51.910156 19.421875 52.101562 C 19.53125 52.289062 19.703125 52.460938 19.925781 52.605469 C 20.152344 52.753906 20.425781 52.894531 20.75 53.03125 C 21.074219 53.164062 21.441406 53.300781 21.847656 53.441406 C 22.425781 53.667969 22.972656 53.902344 23.488281 54.148438 C 24 54.394531 24.449219 54.683594 24.828125 55.015625 C 25.207031 55.347656 25.507812 55.738281 25.726562 56.1875 C 25.945312 56.636719 26.054688 57.171875 26.054688 57.792969 C 26.054688 58.722656 25.765625 59.523438 25.1875 60.199219 C 24.609375 60.878906 23.660156 61.3125 22.335938 61.511719 L 22.335938 64.152344 L 20.136719 64.152344 L 20.136719 61.574219 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 53.179688 26.929688 C 52.109375 26.855469 51.238281 26.710938 50.578125 26.492188 C 49.914062 26.277344 49.417969 26.078125 49.089844 25.902344 L 49.847656 23.777344 C 50.328125 24.015625 50.902344 24.230469 51.582031 24.425781 C 52.261719 24.621094 53.03125 24.714844 53.898438 24.714844 C 54.925781 24.714844 55.636719 24.5625 56.03125 24.257812 C 56.425781 23.953125 56.625 23.546875 56.625 23.039062 C 56.625 22.695312 56.542969 22.398438 56.378906 22.144531 C 56.214844 21.890625 55.984375 21.667969 55.683594 21.472656 C 55.386719 21.28125 55.03125 21.101562 54.625 20.9375 C 54.214844 20.773438 53.761719 20.601562 53.269531 20.421875 C 52.808594 20.257812 52.351562 20.074219 51.894531 19.863281 C 51.441406 19.65625 51.03125 19.398438 50.664062 19.09375 C 50.300781 18.789062 50.007812 18.417969 49.78125 17.984375 C 49.558594 17.554688 49.445312 17.023438 49.445312 16.398438 C 49.445312 15.371094 49.753906 14.496094 50.363281 13.769531 C 50.976562 13.046875 51.914062 12.582031 53.179688 12.375 L 53.179688 9.871094 L 55.507812 9.871094 L 55.507812 12.285156 C 56.222656 12.34375 56.863281 12.445312 57.429688 12.585938 C 57.996094 12.726562 58.441406 12.867188 58.769531 13 L 58.210938 15.214844 C 57.78125 15.050781 57.269531 14.894531 56.679688 14.742188 C 56.089844 14.59375 55.417969 14.519531 54.65625 14.519531 C 53.851562 14.519531 53.25 14.664062 52.84375 14.957031 C 52.441406 15.246094 52.242188 15.644531 52.242188 16.152344 C 52.242188 16.449219 52.300781 16.699219 52.421875 16.902344 C 52.539062 17.101562 52.71875 17.28125 52.957031 17.4375 C 53.195312 17.59375 53.488281 17.742188 53.828125 17.886719 C 54.171875 18.027344 54.558594 18.171875 54.992188 18.320312 C 55.601562 18.558594 56.179688 18.808594 56.726562 19.070312 C 57.269531 19.332031 57.742188 19.636719 58.144531 19.988281 C 58.546875 20.335938 58.863281 20.75 59.09375 21.226562 C 59.328125 21.707031 59.441406 22.273438 59.441406 22.925781 C 59.441406 23.910156 59.136719 24.761719 58.523438 25.476562 C 57.914062 26.191406 56.90625 26.652344 55.507812 26.863281 L 55.507812 29.65625 L 53.179688 29.65625 L 53.179688 26.929688 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 44.15625 70.347656 L 70.316406 70.316406 L 70.347656 44.15625 L 63.292969 51.210938 L 28.847656 13.53125 L 12.914062 29.464844 L 50.589844 63.914062 Z M 74.117188 74.117188 L 34.957031 74.164062 L 45.210938 63.914062 L 7.53125 29.464844 L 28.847656 8.152344 L 63.292969 45.828125 L 74.164062 34.957031 L 74.117188 74.117188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#6ac8969f73)">
              <path fill="#ff914d"
                d="M 42.214844 60.917969 L 39.183594 57.886719 C 38.390625 60.832031 36.84375 63.613281 34.539062 65.917969 C 27.519531 72.9375 16.097656 72.9375 9.078125 65.917969 C 2.058594 58.898438 2.058594 47.480469 9.078125 40.460938 C 11.386719 38.152344 14.164062 36.605469 17.109375 35.816406 L 14.082031 32.785156 C 11.226562 33.863281 8.609375 35.546875 6.386719 37.769531 C 2.269531 41.886719 0 47.363281 0 53.1875 C 0 59.015625 2.269531 64.492188 6.386719 68.609375 C 10.507812 72.730469 15.984375 74.996094 21.808594 74.996094 C 27.632812 74.996094 33.109375 72.730469 37.230469 68.609375 C 39.453125 66.390625 41.132812 63.769531 42.214844 60.917969 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <g clip-path="url(#e7338aeb53)">
              <path fill="#ff914d"
                d="M 53.1875 0 C 47.363281 0 41.886719 2.269531 37.769531 6.386719 C 35.3125 8.84375 33.511719 11.785156 32.460938 14.996094 L 35.578125 18.109375 C 36.265625 14.796875 37.894531 11.644531 40.460938 9.078125 C 47.476562 2.058594 58.898438 2.058594 65.917969 9.078125 C 72.9375 16.097656 72.9375 27.519531 65.917969 34.539062 C 63.351562 37.105469 60.199219 38.730469 56.886719 39.421875 L 60.003906 42.535156 C 63.210938 41.484375 66.152344 39.6875 68.609375 37.230469 C 72.730469 33.109375 74.996094 27.632812 74.996094 21.808594 C 74.996094 15.984375 72.730469 10.507812 68.609375 6.386719 C 64.492188 2.269531 59.015625 0 53.1875 0 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg>
          <p class="servicep">Management and reduction of maintenance costs (better control of budgets)
          </p>
        </div>

      </div>

      <a href="#" class="ser90">
        <button class="btn">
          <div class="btn01">
            <p>
              GET A TAILOR-MADE QUOTE
            </p>
          </div>
        </button>
      </a>
    </div>
    <!-- ----------------------------TMA NO's Engagement end--------------------------------- -->
    <!----------------------------TMA outcome  ---------------------------------------->
    <div class="ser6yg" data-aos="fade-up">
      <h2 class="tmaheader">
        Outsource the
        <span class="changecolheader">
          maintenance
        </span>
        of your applications
      </h2>
      <p class="servicep">
        We support you with B2B integration solutions, tax dematerialization and the management and
        coordination of all your EDI projects.

      </p>
      <p class="servicep">
        With extensive expertise in EDI Solutions (TradeXpress®, IBM Sterling B2B Integrator® and ClC® and
        Hubtimize®), Digitus is able to optimize your various management processes through:
      </p>

      <div class="ser01" data-aos="fade-up">
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#FFA500"
              d="M 37.492188 0.0078125 C 47.847656 0.0078125 57.222656 4.203125 64.011719 10.988281 C 70.796875 17.773438 74.996094 27.148438 74.996094 37.507812 C 74.996094 47.859375 70.796875 57.234375 64.011719 64.023438 C 57.222656 70.8125 47.851562 75.007812 37.492188 75.007812 C 27.140625 75.007812 17.765625 70.808594 10.976562 64.023438 C 4.1875 57.238281 -0.0078125 47.859375 -0.0078125 37.507812 C -0.0078125 27.152344 4.191406 17.777344 10.976562 10.988281 C 17.761719 4.203125 27.140625 0.0078125 37.492188 0.0078125 Z M 62.539062 12.460938 C 56.128906 6.054688 47.273438 2.089844 37.492188 2.089844 C 27.714844 2.089844 18.859375 6.054688 12.449219 12.460938 C 6.039062 18.871094 2.078125 27.726562 2.078125 37.507812 C 2.078125 47.285156 6.039062 56.140625 12.449219 62.550781 C 18.859375 68.960938 27.710938 72.921875 37.492188 72.921875 C 47.273438 72.921875 56.128906 68.960938 62.539062 62.550781 C 68.945312 56.140625 72.910156 47.289062 72.910156 37.507812 C 72.910156 27.726562 68.945312 18.871094 62.539062 12.460938 Z M 62.539062 12.460938 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 50.675781 27.054688 L 47.945312 24.324219 L 42.617188 29.652344 L 39.984375 27.019531 L 39.429688 35.570312 L 47.980469 35.015625 L 45.347656 32.382812 Z M 50.675781 27.054688 "
              fill-opacity="1" fill-rule="evenodd"></path>
            <path fill="#FFA500"
              d="M 27.042969 50.6875 L 24.3125 47.957031 L 29.640625 42.628906 L 27.007812 39.996094 L 35.558594 39.441406 L 35.003906 47.992188 L 32.371094 45.359375 Z M 27.042969 50.6875 "
              fill-opacity="1" fill-rule="evenodd"></path>
            <path fill="#FFA500"
              d="M 27.042969 24.324219 L 24.3125 27.054688 L 29.640625 32.382812 L 27.007812 35.015625 L 35.558594 35.570312 L 35.003906 27.019531 L 32.371094 29.652344 Z M 27.042969 24.324219 "
              fill-opacity="1" fill-rule="evenodd"></path>
            <path fill="#FFA500"
              d="M 50.675781 47.957031 L 47.945312 50.6875 L 42.617188 45.359375 L 39.984375 47.992188 L 39.429688 39.441406 L 47.980469 39.996094 L 45.347656 42.628906 Z M 50.675781 47.957031 "
              fill-opacity="1" fill-rule="evenodd"></path>
            <path fill="#FFA500"
              d="M 37.492188 60.945312 C 24.550781 60.945312 14.054688 50.449219 14.054688 37.507812 C 14.054688 24.5625 24.550781 14.070312 37.492188 14.070312 C 50.4375 14.070312 60.929688 24.5625 60.929688 37.507812 C 60.929688 50.449219 50.4375 60.945312 37.492188 60.945312 Z M 18.085938 37.507812 C 18.085938 48.226562 26.773438 56.914062 37.492188 56.914062 C 48.214844 56.914062 56.902344 48.226562 56.902344 37.507812 C 56.902344 26.785156 48.214844 18.097656 37.492188 18.097656 C 26.773438 18.097656 18.085938 26.785156 18.085938 37.507812 Z M 18.085938 37.507812 "
              fill-opacity="1" fill-rule="evenodd"></path>
          </svg>
          <span class="span89">
            The Service Center
          </span>
        </div>
        <div class="ser010" data-aos="fade-up">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#FFA500"
              d="M 48.707031 21.542969 C 48.871094 21.542969 49.03125 21.511719 49.183594 21.449219 C 49.332031 21.386719 49.46875 21.296875 49.582031 21.179688 C 49.699219 21.0625 49.789062 20.929688 49.851562 20.777344 C 49.914062 20.628906 49.945312 20.46875 49.945312 20.304688 C 49.945312 19.980469 49.976562 19.65625 50.039062 19.335938 C 50.101562 19.011719 50.195312 18.703125 50.320312 18.398438 C 50.445312 18.097656 50.597656 17.808594 50.777344 17.539062 C 50.960938 17.265625 51.164062 17.015625 51.394531 16.78125 C 51.628906 16.550781 51.878906 16.34375 52.148438 16.164062 C 52.421875 15.980469 52.707031 15.828125 53.007812 15.699219 C 53.3125 15.574219 53.621094 15.480469 53.941406 15.417969 C 54.261719 15.351562 54.585938 15.320312 54.914062 15.320312 C 55.242188 15.320312 55.566406 15.351562 55.886719 15.414062 C 56.207031 15.476562 56.515625 15.570312 56.820312 15.695312 C 57.121094 15.820312 57.410156 15.972656 57.679688 16.15625 C 57.953125 16.335938 58.203125 16.542969 58.4375 16.773438 C 58.667969 17.003906 58.875 17.253906 59.054688 17.527344 C 59.238281 17.796875 59.390625 18.085938 59.515625 18.386719 C 59.640625 18.6875 59.738281 19 59.800781 19.320312 C 59.863281 19.640625 59.898438 19.964844 59.898438 20.292969 C 59.898438 20.617188 59.867188 20.941406 59.800781 21.261719 C 59.738281 21.582031 59.644531 21.894531 59.519531 22.195312 C 59.394531 22.5 59.242188 22.785156 59.058594 23.058594 C 58.878906 23.328125 58.671875 23.582031 58.441406 23.8125 C 58.210938 24.042969 57.957031 24.25 57.6875 24.433594 C 57.414062 24.613281 57.128906 24.765625 56.824219 24.890625 C 56.523438 25.015625 56.210938 25.113281 55.890625 25.175781 C 55.570312 25.238281 55.246094 25.269531 54.921875 25.269531 C 54.757812 25.269531 54.597656 25.300781 54.449219 25.367188 C 54.296875 25.429688 54.164062 25.515625 54.046875 25.632812 C 53.929688 25.75 53.839844 25.882812 53.777344 26.035156 C 53.714844 26.1875 53.683594 26.34375 53.683594 26.507812 C 53.683594 26.671875 53.714844 26.828125 53.777344 26.980469 C 53.839844 27.132812 53.929688 27.265625 54.046875 27.382812 C 54.164062 27.496094 54.296875 27.585938 54.449219 27.648438 C 54.597656 27.710938 54.757812 27.742188 54.921875 27.742188 C 55.410156 27.742188 55.894531 27.695312 56.371094 27.597656 C 56.851562 27.503906 57.316406 27.363281 57.765625 27.175781 C 58.214844 26.988281 58.644531 26.757812 59.050781 26.484375 C 59.457031 26.214844 59.832031 25.90625 60.175781 25.558594 C 60.519531 25.214844 60.828125 24.835938 61.101562 24.429688 C 61.371094 24.023438 61.597656 23.597656 61.785156 23.144531 C 61.972656 22.695312 62.113281 22.230469 62.207031 21.75 C 62.300781 21.269531 62.347656 20.785156 62.347656 20.296875 C 62.347656 19.808594 62.300781 19.328125 62.203125 18.847656 C 62.109375 18.371094 61.96875 17.90625 61.78125 17.453125 C 61.59375 17.003906 61.363281 16.574219 61.09375 16.167969 C 60.820312 15.761719 60.511719 15.386719 60.167969 15.042969 C 59.820312 14.699219 59.445312 14.390625 59.039062 14.117188 C 58.632812 13.847656 58.203125 13.617188 57.753906 13.433594 C 57.300781 13.246094 56.835938 13.105469 56.359375 13.007812 C 55.878906 12.914062 55.394531 12.867188 54.90625 12.867188 C 54.417969 12.867188 53.933594 12.914062 53.457031 13.011719 C 52.976562 13.105469 52.511719 13.246094 52.0625 13.433594 C 51.609375 13.621094 51.183594 13.851562 50.777344 14.121094 C 50.371094 14.394531 49.996094 14.703125 49.648438 15.046875 C 49.304688 15.394531 48.996094 15.769531 48.726562 16.175781 C 48.453125 16.582031 48.226562 17.007812 48.039062 17.460938 C 47.851562 17.910156 47.710938 18.375 47.617188 18.855469 C 47.519531 19.332031 47.472656 19.816406 47.472656 20.304688 C 47.472656 20.46875 47.503906 20.628906 47.566406 20.777344 C 47.628906 20.929688 47.71875 21.0625 47.835938 21.179688 C 47.949219 21.296875 48.085938 21.386719 48.234375 21.449219 C 48.386719 21.511719 48.542969 21.542969 48.707031 21.542969 Z M 48.707031 21.542969 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 37.488281 21.191406 C 38.035156 21.191406 38.578125 21.136719 39.117188 21.03125 C 39.652344 20.925781 40.171875 20.765625 40.679688 20.558594 C 41.183594 20.347656 41.664062 20.089844 42.121094 19.785156 C 42.574219 19.484375 42.996094 19.136719 43.382812 18.75 C 43.769531 18.363281 44.117188 17.941406 44.417969 17.488281 C 44.722656 17.03125 44.980469 16.550781 45.191406 16.046875 C 45.398438 15.539062 45.558594 15.019531 45.664062 14.484375 C 45.769531 13.945312 45.824219 13.40625 45.824219 12.855469 C 45.824219 12.308594 45.769531 11.769531 45.664062 11.230469 C 45.558594 10.695312 45.398438 10.171875 45.191406 9.667969 C 44.980469 9.160156 44.722656 8.683594 44.417969 8.226562 C 44.117188 7.773438 43.769531 7.351562 43.382812 6.964844 C 42.996094 6.578125 42.574219 6.230469 42.121094 5.925781 C 41.664062 5.625 41.183594 5.367188 40.679688 5.15625 C 40.171875 4.949219 39.652344 4.789062 39.117188 4.683594 C 38.578125 4.574219 38.035156 4.523438 37.488281 4.523438 C 36.941406 4.523438 36.402344 4.574219 35.863281 4.683594 C 35.328125 4.789062 34.804688 4.949219 34.300781 5.15625 C 33.792969 5.367188 33.3125 5.625 32.859375 5.925781 C 32.402344 6.230469 31.984375 6.578125 31.597656 6.964844 C 31.210938 7.351562 30.863281 7.773438 30.558594 8.226562 C 30.253906 8.683594 30 9.160156 29.789062 9.667969 C 29.582031 10.171875 29.421875 10.695312 29.316406 11.230469 C 29.207031 11.769531 29.15625 12.308594 29.15625 12.855469 C 29.15625 13.402344 29.210938 13.945312 29.316406 14.480469 C 29.425781 15.019531 29.582031 15.539062 29.792969 16.046875 C 30.003906 16.550781 30.257812 17.03125 30.5625 17.484375 C 30.867188 17.941406 31.210938 18.359375 31.597656 18.746094 C 31.984375 19.132812 32.40625 19.480469 32.863281 19.785156 C 33.316406 20.089844 33.796875 20.34375 34.300781 20.554688 C 34.808594 20.765625 35.328125 20.921875 35.863281 21.03125 C 36.402344 21.136719 36.941406 21.191406 37.488281 21.191406 Z M 37.488281 7.003906 C 37.875 7.003906 38.257812 7.042969 38.632812 7.117188 C 39.011719 7.195312 39.378906 7.304688 39.734375 7.453125 C 40.089844 7.597656 40.425781 7.78125 40.746094 7.992188 C 41.066406 8.207031 41.363281 8.453125 41.636719 8.722656 C 41.90625 8.996094 42.152344 9.292969 42.363281 9.613281 C 42.578125 9.933594 42.757812 10.269531 42.90625 10.625 C 43.054688 10.980469 43.164062 11.347656 43.238281 11.726562 C 43.316406 12.105469 43.351562 12.484375 43.351562 12.871094 C 43.351562 13.257812 43.3125 13.636719 43.238281 14.015625 C 43.164062 14.390625 43.050781 14.757812 42.902344 15.113281 C 42.757812 15.46875 42.574219 15.808594 42.359375 16.128906 C 42.148438 16.449219 41.902344 16.742188 41.632812 17.015625 C 41.359375 17.289062 41.0625 17.53125 40.742188 17.746094 C 40.421875 17.957031 40.082031 18.136719 39.726562 18.285156 C 39.371094 18.433594 39.003906 18.542969 38.628906 18.617188 C 38.25 18.691406 37.867188 18.730469 37.484375 18.730469 C 37.097656 18.730469 36.714844 18.691406 36.339844 18.617188 C 35.960938 18.539062 35.59375 18.429688 35.238281 18.28125 C 34.882812 18.132812 34.546875 17.953125 34.226562 17.738281 C 33.90625 17.523438 33.609375 17.277344 33.339844 17.007812 C 33.066406 16.734375 32.824219 16.4375 32.609375 16.117188 C 32.398438 15.796875 32.21875 15.457031 32.070312 15.101562 C 31.921875 14.746094 31.8125 14.378906 31.738281 14 C 31.664062 13.625 31.628906 13.242188 31.628906 12.855469 C 31.628906 12.472656 31.667969 12.09375 31.742188 11.714844 C 31.820312 11.339844 31.933594 10.972656 32.078125 10.617188 C 32.226562 10.265625 32.410156 9.925781 32.621094 9.609375 C 32.835938 9.289062 33.078125 8.992188 33.351562 8.722656 C 33.625 8.449219 33.917969 8.207031 34.238281 7.996094 C 34.558594 7.78125 34.894531 7.601562 35.25 7.453125 C 35.605469 7.304688 35.972656 7.195312 36.347656 7.121094 C 36.726562 7.042969 37.105469 7.007812 37.488281 7.003906 Z M 37.488281 7.003906 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 54.921875 54.703125 C 54.757812 54.703125 54.597656 54.734375 54.449219 54.796875 C 54.296875 54.863281 54.164062 54.949219 54.046875 55.066406 C 53.929688 55.183594 53.839844 55.316406 53.777344 55.46875 C 53.714844 55.621094 53.683594 55.777344 53.683594 55.941406 L 53.683594 64.511719 C 53.683594 64.675781 53.714844 64.835938 53.777344 64.984375 C 53.839844 65.136719 53.929688 65.269531 54.046875 65.386719 C 54.164062 65.503906 54.296875 65.589844 54.449219 65.65625 C 54.597656 65.71875 54.757812 65.75 54.921875 65.75 C 55.085938 65.75 55.242188 65.71875 55.394531 65.65625 C 55.546875 65.589844 55.679688 65.503906 55.796875 65.386719 C 55.910156 65.269531 56 65.136719 56.0625 64.984375 C 56.125 64.835938 56.15625 64.675781 56.15625 64.511719 L 56.15625 55.941406 C 56.15625 55.777344 56.125 55.621094 56.0625 55.46875 C 56 55.316406 55.910156 55.183594 55.796875 55.066406 C 55.679688 54.949219 55.546875 54.863281 55.394531 54.796875 C 55.242188 54.734375 55.085938 54.703125 54.921875 54.703125 Z M 54.921875 54.703125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 20.429688 29.875 L 10.929688 29.875 C 10.402344 29.878906 9.894531 29.980469 9.40625 30.183594 C 8.917969 30.386719 8.488281 30.671875 8.113281 31.046875 C 7.742188 31.421875 7.453125 31.851562 7.25 32.339844 C 7.046875 32.828125 6.945312 33.335938 6.945312 33.863281 L 6.945312 46.660156 C 6.945312 46.921875 6.96875 47.179688 7.023438 47.433594 C 7.074219 47.691406 7.148438 47.941406 7.25 48.179688 C 7.351562 48.421875 7.472656 48.652344 7.621094 48.867188 C 7.765625 49.085938 7.929688 49.285156 8.113281 49.472656 C 8.300781 49.65625 8.5 49.820312 8.71875 49.964844 C 8.9375 50.109375 9.164062 50.234375 9.40625 50.332031 C 9.648438 50.433594 9.898438 50.507812 10.152344 50.558594 C 10.410156 50.609375 10.667969 50.636719 10.929688 50.636719 C 11.449219 50.628906 11.953125 50.53125 12.433594 50.335938 L 12.433594 60.144531 C 12.433594 60.308594 12.464844 60.464844 12.527344 60.617188 C 12.589844 60.769531 12.679688 60.902344 12.796875 61.019531 C 12.914062 61.132812 13.046875 61.222656 13.199219 61.285156 C 13.347656 61.347656 13.507812 61.378906 13.671875 61.378906 C 13.835938 61.378906 13.992188 61.347656 14.144531 61.285156 C 14.296875 61.222656 14.429688 61.132812 14.546875 61.019531 C 14.660156 60.902344 14.75 60.769531 14.8125 60.617188 C 14.875 60.464844 14.90625 60.308594 14.90625 60.144531 L 14.90625 39.046875 C 14.90625 38.882812 14.875 38.722656 14.8125 38.570312 C 14.75 38.421875 14.660156 38.285156 14.546875 38.171875 C 14.429688 38.054688 14.296875 37.964844 14.144531 37.902344 C 13.992188 37.839844 13.835938 37.808594 13.671875 37.808594 C 13.507812 37.808594 13.347656 37.839844 13.199219 37.902344 C 13.046875 37.964844 12.914062 38.054688 12.796875 38.171875 C 12.679688 38.285156 12.589844 38.421875 12.527344 38.570312 C 12.464844 38.722656 12.433594 38.882812 12.433594 39.046875 L 12.433594 46.660156 C 12.417969 46.847656 12.371094 47.027344 12.285156 47.199219 C 12.203125 47.371094 12.089844 47.519531 11.953125 47.648438 C 11.8125 47.777344 11.652344 47.875 11.476562 47.945312 C 11.300781 48.015625 11.117188 48.046875 10.925781 48.046875 C 10.734375 48.046875 10.550781 48.015625 10.375 47.945312 C 10.199219 47.875 10.039062 47.777344 9.898438 47.648438 C 9.761719 47.519531 9.648438 47.371094 9.566406 47.199219 C 9.480469 47.027344 9.433594 46.847656 9.417969 46.660156 L 9.417969 33.8125 C 9.417969 33.609375 9.453125 33.417969 9.53125 33.230469 C 9.609375 33.046875 9.71875 32.882812 9.859375 32.742188 C 10 32.597656 10.164062 32.488281 10.351562 32.414062 C 10.535156 32.335938 10.730469 32.296875 10.929688 32.296875 L 20.429688 32.296875 C 20.59375 32.296875 20.75 32.265625 20.902344 32.203125 C 21.054688 32.140625 21.1875 32.050781 21.304688 31.933594 C 21.417969 31.820312 21.507812 31.6875 21.570312 31.535156 C 21.632812 31.382812 21.664062 31.226562 21.664062 31.0625 C 21.664062 30.898438 21.632812 30.738281 21.570312 30.589844 C 21.507812 30.4375 21.417969 30.304688 21.304688 30.1875 C 21.1875 30.070312 21.054688 29.980469 20.902344 29.917969 C 20.75 29.855469 20.59375 29.824219 20.429688 29.824219 Z M 20.429688 29.875 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 20.058594 27.742188 C 20.222656 27.742188 20.378906 27.710938 20.53125 27.648438 C 20.683594 27.585938 20.816406 27.5 20.933594 27.382812 C 21.050781 27.265625 21.140625 27.132812 21.203125 26.980469 C 21.265625 26.828125 21.296875 26.671875 21.296875 26.507812 C 21.296875 26.34375 21.265625 26.1875 21.203125 26.035156 C 21.140625 25.882812 21.050781 25.75 20.933594 25.632812 C 20.816406 25.515625 20.683594 25.425781 20.53125 25.363281 C 20.378906 25.300781 20.222656 25.269531 20.058594 25.269531 C 19.734375 25.269531 19.410156 25.238281 19.089844 25.175781 C 18.769531 25.109375 18.460938 25.015625 18.160156 24.890625 C 17.859375 24.765625 17.574219 24.609375 17.300781 24.429688 C 17.03125 24.246094 16.78125 24.042969 16.550781 23.8125 C 16.320312 23.578125 16.117188 23.328125 15.933594 23.058594 C 15.753906 22.785156 15.601562 22.5 15.476562 22.199219 C 15.355469 21.898438 15.261719 21.585938 15.195312 21.265625 C 15.132812 20.949219 15.101562 20.625 15.101562 20.296875 C 15.101562 19.972656 15.136719 19.648438 15.199219 19.332031 C 15.265625 19.011719 15.359375 18.699219 15.484375 18.398438 C 15.609375 18.097656 15.761719 17.8125 15.941406 17.542969 C 16.125 17.269531 16.332031 17.019531 16.5625 16.789062 C 16.792969 16.558594 17.042969 16.355469 17.3125 16.175781 C 17.585938 15.992188 17.871094 15.839844 18.171875 15.714844 C 18.472656 15.59375 18.785156 15.496094 19.105469 15.433594 C 19.421875 15.371094 19.746094 15.339844 20.070312 15.339844 C 20.398438 15.339844 20.722656 15.371094 21.039062 15.4375 C 21.359375 15.5 21.671875 15.59375 21.972656 15.71875 C 22.273438 15.84375 22.558594 15.996094 22.828125 16.179688 C 23.101562 16.359375 23.351562 16.566406 23.582031 16.796875 C 23.8125 17.027344 24.015625 17.277344 24.199219 17.546875 C 24.378906 17.820312 24.53125 18.105469 24.65625 18.40625 C 24.78125 18.707031 24.875 19.019531 24.9375 19.335938 C 25.003906 19.65625 25.035156 19.980469 25.035156 20.304688 C 25.035156 20.46875 25.066406 20.628906 25.128906 20.777344 C 25.191406 20.929688 25.28125 21.0625 25.394531 21.179688 C 25.511719 21.296875 25.644531 21.386719 25.796875 21.449219 C 25.949219 21.511719 26.105469 21.542969 26.269531 21.542969 C 26.433594 21.542969 26.59375 21.511719 26.742188 21.449219 C 26.894531 21.386719 27.027344 21.296875 27.144531 21.179688 C 27.261719 21.0625 27.351562 20.929688 27.414062 20.777344 C 27.476562 20.628906 27.507812 20.46875 27.507812 20.304688 C 27.507812 19.816406 27.460938 19.332031 27.367188 18.851562 C 27.269531 18.371094 27.128906 17.90625 26.945312 17.453125 C 26.757812 17 26.527344 16.570312 26.257812 16.164062 C 25.984375 15.757812 25.675781 15.378906 25.332031 15.035156 C 24.984375 14.6875 24.609375 14.378906 24.203125 14.105469 C 23.796875 13.835938 23.367188 13.605469 22.914062 13.417969 C 22.464844 13.230469 22 13.085938 21.519531 12.992188 C 21.039062 12.894531 20.554688 12.847656 20.066406 12.847656 C 19.574219 12.847656 19.089844 12.894531 18.613281 12.988281 C 18.132812 13.082031 17.664062 13.226562 17.214844 13.410156 C 16.761719 13.597656 16.332031 13.828125 15.925781 14.097656 C 15.519531 14.371094 15.140625 14.679688 14.796875 15.023438 C 14.449219 15.371094 14.140625 15.746094 13.867188 16.152344 C 13.597656 16.558594 13.367188 16.988281 13.179688 17.441406 C 12.992188 17.894531 12.847656 18.359375 12.753906 18.839844 C 12.65625 19.316406 12.609375 19.800781 12.609375 20.292969 C 12.609375 20.78125 12.65625 21.265625 12.753906 21.746094 C 12.847656 22.226562 12.988281 22.691406 13.175781 23.144531 C 13.363281 23.59375 13.59375 24.023438 13.863281 24.433594 C 14.136719 24.839844 14.445312 25.214844 14.789062 25.5625 C 15.136719 25.90625 15.511719 26.214844 15.917969 26.488281 C 16.324219 26.757812 16.753906 26.988281 17.207031 27.175781 C 17.660156 27.363281 18.125 27.503906 18.605469 27.601562 C 19.085938 27.695312 19.570312 27.742188 20.058594 27.742188 Z M 20.058594 27.742188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 37.488281 0 C 36.261719 0 35.035156 0.0585938 33.816406 0.179688 C 32.59375 0.300781 31.378906 0.480469 30.175781 0.71875 C 28.972656 0.960938 27.78125 1.257812 26.605469 1.613281 C 25.433594 1.972656 24.277344 2.382812 23.144531 2.855469 C 22.007812 3.324219 20.898438 3.847656 19.816406 4.425781 C 18.734375 5.003906 17.683594 5.636719 16.660156 6.316406 C 15.640625 7 14.65625 7.730469 13.707031 8.511719 C 12.757812 9.289062 11.847656 10.113281 10.980469 10.980469 C 10.113281 11.847656 9.289062 12.757812 8.511719 13.707031 C 7.730469 14.65625 7 15.640625 6.316406 16.660156 C 5.636719 17.683594 5.003906 18.734375 4.425781 19.816406 C 3.847656 20.898438 3.324219 22.007812 2.855469 23.144531 C 2.382812 24.277344 1.972656 25.433594 1.613281 26.605469 C 1.257812 27.78125 0.960938 28.972656 0.71875 30.175781 C 0.480469 31.378906 0.300781 32.59375 0.179688 33.816406 C 0.0585938 35.035156 0 36.261719 0 37.488281 C 0 38.71875 0.0585938 39.941406 0.179688 41.164062 C 0.300781 42.386719 0.480469 43.597656 0.71875 44.804688 C 0.960938 46.007812 1.257812 47.199219 1.613281 48.371094 C 1.972656 49.546875 2.382812 50.703125 2.855469 51.835938 C 3.324219 52.972656 3.847656 54.078125 4.425781 55.164062 C 5.003906 56.246094 5.636719 57.296875 6.316406 58.316406 C 7 59.339844 7.730469 60.324219 8.511719 61.273438 C 9.289062 62.222656 10.113281 63.128906 10.980469 64 C 11.847656 64.867188 12.757812 65.691406 13.707031 66.46875 C 14.65625 67.25 15.640625 67.980469 16.660156 68.660156 C 17.683594 69.34375 18.734375 69.972656 19.816406 70.550781 C 20.898438 71.132812 22.007812 71.65625 23.144531 72.125 C 24.277344 72.59375 25.433594 73.007812 26.605469 73.363281 C 27.78125 73.722656 28.972656 74.019531 30.175781 74.257812 C 31.378906 74.5 32.59375 74.679688 33.816406 74.800781 C 35.035156 74.917969 36.261719 74.980469 37.488281 74.980469 C 38.71875 74.980469 39.941406 74.917969 41.164062 74.800781 C 42.386719 74.679688 43.597656 74.5 44.804688 74.257812 C 46.007812 74.019531 47.199219 73.722656 48.371094 73.363281 C 49.546875 73.007812 50.703125 72.59375 51.835938 72.125 C 52.972656 71.65625 54.078125 71.132812 55.164062 70.550781 C 56.246094 69.972656 57.296875 69.34375 58.316406 68.660156 C 59.339844 67.980469 60.324219 67.25 61.273438 66.46875 C 62.222656 65.691406 63.128906 64.867188 64 64 C 64.867188 63.128906 65.691406 62.222656 66.46875 61.273438 C 67.25 60.324219 67.980469 59.339844 68.660156 58.316406 C 69.34375 57.296875 69.972656 56.246094 70.550781 55.164062 C 71.132812 54.078125 71.65625 52.972656 72.125 51.835938 C 72.59375 50.703125 73.007812 49.546875 73.363281 48.371094 C 73.722656 47.199219 74.019531 46.007812 74.257812 44.804688 C 74.5 43.597656 74.679688 42.386719 74.800781 41.164062 C 74.917969 39.941406 74.980469 38.71875 74.980469 37.488281 C 74.976562 36.261719 74.917969 35.039062 74.796875 33.816406 C 74.671875 32.59375 74.492188 31.382812 74.253906 30.179688 C 74.011719 28.976562 73.714844 27.785156 73.355469 26.613281 C 73 25.4375 72.585938 24.28125 72.113281 23.148438 C 71.644531 22.015625 71.121094 20.90625 70.539062 19.824219 C 69.960938 18.742188 69.332031 17.691406 68.648438 16.671875 C 67.964844 15.652344 67.234375 14.667969 66.457031 13.71875 C 65.679688 12.769531 64.855469 11.859375 63.988281 10.992188 C 63.117188 10.125 62.210938 9.300781 61.261719 8.523438 C 60.3125 7.742188 59.328125 7.011719 58.308594 6.332031 C 57.289062 5.648438 56.238281 5.019531 55.152344 4.4375 C 54.070312 3.859375 52.964844 3.335938 51.828125 2.863281 C 50.695312 2.394531 49.542969 1.980469 48.367188 1.625 C 47.195312 1.265625 46.003906 0.96875 44.800781 0.726562 C 43.597656 0.488281 42.382812 0.304688 41.164062 0.183594 C 39.941406 0.0625 38.71875 0 37.488281 0 Z M 2.472656 37.488281 C 2.472656 36.34375 2.527344 35.199219 2.640625 34.054688 C 2.753906 32.914062 2.921875 31.78125 3.144531 30.65625 C 3.371094 29.53125 3.648438 28.417969 3.980469 27.320312 C 4.3125 26.222656 4.699219 25.144531 5.140625 24.085938 C 5.578125 23.027344 6.066406 21.988281 6.609375 20.976562 C 7.148438 19.964844 7.738281 18.984375 8.375 18.03125 C 9.011719 17.074219 9.695312 16.15625 10.421875 15.269531 C 11.152344 14.382812 11.921875 13.53125 12.730469 12.722656 C 13.542969 11.910156 14.390625 11.140625 15.277344 10.414062 C 16.164062 9.683594 17.085938 9.003906 18.039062 8.367188 C 18.992188 7.726562 19.976562 7.140625 20.988281 6.597656 C 22 6.058594 23.035156 5.566406 24.09375 5.128906 C 25.15625 4.691406 26.234375 4.304688 27.332031 3.96875 C 28.429688 3.636719 29.542969 3.359375 30.667969 3.136719 C 31.792969 2.910156 32.925781 2.742188 34.066406 2.632812 C 35.207031 2.519531 36.351562 2.460938 37.5 2.460938 C 38.648438 2.460938 39.792969 2.519531 40.933594 2.632812 C 42.074219 2.742188 43.207031 2.910156 44.332031 3.136719 C 45.457031 3.359375 46.570312 3.636719 47.667969 3.96875 C 48.765625 4.304688 49.84375 4.691406 50.90625 5.128906 C 51.964844 5.566406 53 6.058594 54.011719 6.597656 C 55.023438 7.140625 56.007812 7.726562 56.960938 8.367188 C 57.914062 9.003906 58.835938 9.683594 59.722656 10.414062 C 60.609375 11.140625 61.457031 11.910156 62.269531 12.722656 C 63.078125 13.53125 63.847656 14.382812 64.578125 15.269531 C 65.304688 16.15625 65.988281 17.074219 66.625 18.03125 C 67.261719 18.984375 67.851562 19.964844 68.390625 20.976562 C 68.933594 21.988281 69.421875 23.027344 69.859375 24.085938 C 70.300781 25.144531 70.6875 26.222656 71.019531 27.320312 C 71.351562 28.417969 71.628906 29.53125 71.855469 30.65625 C 72.078125 31.78125 72.246094 32.914062 72.359375 34.054688 C 72.472656 35.199219 72.527344 36.34375 72.527344 37.488281 C 72.527344 38.636719 72.472656 39.78125 72.359375 40.921875 C 72.246094 42.066406 72.078125 43.199219 71.855469 44.324219 C 71.628906 45.449219 71.351562 46.558594 71.019531 47.65625 C 70.6875 48.753906 70.300781 49.835938 69.859375 50.894531 C 69.421875 51.953125 68.933594 52.988281 68.390625 54 C 67.851562 55.011719 67.261719 55.996094 66.625 56.949219 C 65.988281 57.902344 65.304688 58.824219 64.578125 59.710938 C 63.847656 60.597656 63.078125 61.445312 62.269531 62.257812 C 61.457031 63.070312 60.609375 63.839844 59.722656 64.566406 C 58.835938 65.292969 57.914062 65.976562 56.960938 66.613281 C 56.007812 67.25 55.023438 67.839844 54.011719 68.382812 C 53 68.921875 51.964844 69.410156 50.90625 69.851562 C 49.84375 70.289062 48.765625 70.675781 47.667969 71.007812 C 46.570312 71.34375 45.457031 71.621094 44.332031 71.84375 C 43.207031 72.066406 42.074219 72.234375 40.933594 72.347656 C 39.792969 72.460938 38.648438 72.515625 37.5 72.515625 C 36.351562 72.515625 35.207031 72.460938 34.066406 72.347656 C 32.925781 72.234375 31.792969 72.066406 30.667969 71.84375 C 29.542969 71.621094 28.429688 71.34375 27.332031 71.007812 C 26.234375 70.675781 25.15625 70.289062 24.09375 69.851562 C 23.035156 69.410156 22 68.921875 20.988281 68.382812 C 19.976562 67.839844 18.992188 67.25 18.039062 66.613281 C 17.085938 65.976562 16.164062 65.292969 15.277344 64.566406 C 14.390625 63.839844 13.542969 63.070312 12.730469 62.257812 C 11.921875 61.445312 11.152344 60.597656 10.421875 59.710938 C 9.695312 58.824219 9.011719 57.902344 8.375 56.949219 C 7.738281 55.996094 7.148438 55.011719 6.609375 54 C 6.066406 52.988281 5.578125 51.953125 5.140625 50.894531 C 4.699219 49.835938 4.3125 48.753906 3.980469 47.65625 C 3.648438 46.558594 3.371094 45.449219 3.144531 44.324219 C 2.921875 43.199219 2.753906 42.066406 2.640625 40.921875 C 2.527344 39.78125 2.472656 38.636719 2.472656 37.488281 Z M 2.472656 37.488281 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 47.925781 23.921875 L 27.054688 23.921875 C 26.765625 23.921875 26.480469 23.949219 26.199219 24.003906 C 25.917969 24.0625 25.640625 24.144531 25.375 24.253906 C 25.109375 24.363281 24.859375 24.5 24.617188 24.660156 C 24.378906 24.820312 24.15625 25 23.953125 25.203125 C 23.75 25.40625 23.566406 25.628906 23.40625 25.867188 C 23.246094 26.105469 23.113281 26.359375 23 26.625 C 22.890625 26.890625 22.808594 27.164062 22.75 27.445312 C 22.695312 27.726562 22.664062 28.011719 22.664062 28.300781 L 22.664062 42.980469 C 22.667969 43.398438 22.726562 43.804688 22.84375 44.203125 C 22.964844 44.605469 23.136719 44.980469 23.359375 45.328125 C 23.585938 45.679688 23.855469 45.992188 24.171875 46.265625 C 24.484375 46.539062 24.832031 46.761719 25.210938 46.9375 L 25.210938 67.542969 C 25.210938 67.703125 25.242188 67.863281 25.304688 68.015625 C 25.367188 68.164062 25.457031 68.296875 25.570312 68.414062 C 25.6875 68.53125 25.820312 68.621094 25.972656 68.683594 C 26.125 68.746094 26.28125 68.777344 26.445312 68.777344 C 26.609375 68.777344 26.765625 68.746094 26.917969 68.683594 C 27.070312 68.621094 27.203125 68.53125 27.320312 68.414062 C 27.433594 68.296875 27.523438 68.164062 27.585938 68.015625 C 27.648438 67.863281 27.683594 67.703125 27.683594 67.542969 L 27.683594 47.285156 C 28.121094 47.226562 28.542969 47.09375 28.9375 46.894531 L 28.9375 68.53125 C 28.9375 68.695312 28.96875 68.851562 29.03125 69.003906 C 29.097656 69.15625 29.183594 69.289062 29.300781 69.40625 C 29.417969 69.519531 29.550781 69.609375 29.703125 69.671875 C 29.851562 69.734375 30.011719 69.765625 30.175781 69.765625 C 30.339844 69.765625 30.496094 69.734375 30.648438 69.671875 C 30.800781 69.609375 30.933594 69.519531 31.050781 69.40625 C 31.164062 69.289062 31.253906 69.15625 31.316406 69.003906 C 31.378906 68.851562 31.410156 68.695312 31.410156 68.53125 L 31.410156 34.277344 C 31.410156 34.113281 31.378906 33.953125 31.316406 33.800781 C 31.253906 33.652344 31.164062 33.515625 31.050781 33.402344 C 30.933594 33.285156 30.800781 33.195312 30.648438 33.132812 C 30.496094 33.070312 30.339844 33.039062 30.175781 33.039062 C 30.011719 33.039062 29.851562 33.070312 29.703125 33.132812 C 29.550781 33.195312 29.417969 33.285156 29.300781 33.402344 C 29.183594 33.515625 29.097656 33.652344 29.03125 33.800781 C 28.96875 33.953125 28.9375 34.113281 28.9375 34.277344 L 28.9375 42.980469 C 28.921875 43.222656 28.859375 43.449219 28.757812 43.667969 C 28.652344 43.882812 28.511719 44.074219 28.335938 44.238281 C 28.160156 44.402344 27.957031 44.527344 27.734375 44.613281 C 27.511719 44.703125 27.277344 44.746094 27.039062 44.746094 C 26.796875 44.746094 26.566406 44.703125 26.339844 44.613281 C 26.117188 44.527344 25.917969 44.402344 25.742188 44.238281 C 25.566406 44.074219 25.425781 43.882812 25.320312 43.667969 C 25.214844 43.449219 25.15625 43.222656 25.136719 42.980469 L 25.136719 28.300781 C 25.136719 28.046875 25.1875 27.804688 25.28125 27.570312 C 25.378906 27.335938 25.515625 27.132812 25.695312 26.953125 C 25.875 26.773438 26.082031 26.636719 26.3125 26.539062 C 26.546875 26.441406 26.789062 26.394531 27.042969 26.394531 L 47.925781 26.394531 C 48.179688 26.394531 48.421875 26.441406 48.65625 26.539062 C 48.890625 26.636719 49.09375 26.773438 49.273438 26.953125 C 49.453125 27.132812 49.589844 27.335938 49.6875 27.570312 C 49.785156 27.804688 49.832031 28.046875 49.832031 28.300781 L 49.832031 42.980469 C 49.8125 43.222656 49.753906 43.449219 49.648438 43.667969 C 49.542969 43.882812 49.40625 44.074219 49.226562 44.238281 C 49.050781 44.402344 48.851562 44.527344 48.628906 44.613281 C 48.402344 44.703125 48.171875 44.746094 47.929688 44.746094 C 47.691406 44.746094 47.457031 44.703125 47.234375 44.613281 C 47.011719 44.527344 46.808594 44.402344 46.632812 44.238281 C 46.457031 44.074219 46.316406 43.882812 46.214844 43.667969 C 46.109375 43.449219 46.046875 43.222656 46.03125 42.980469 L 46.03125 34.277344 C 46.03125 34.113281 46 33.953125 45.933594 33.804688 C 45.871094 33.652344 45.78125 33.519531 45.667969 33.402344 C 45.550781 33.289062 45.417969 33.199219 45.265625 33.136719 C 45.113281 33.074219 44.957031 33.042969 44.792969 33.042969 C 44.628906 33.042969 44.472656 33.074219 44.320312 33.136719 C 44.171875 33.199219 44.035156 33.289062 43.921875 33.402344 C 43.804688 33.519531 43.714844 33.652344 43.652344 33.804688 C 43.589844 33.953125 43.558594 34.113281 43.558594 34.277344 L 43.558594 68.417969 C 43.558594 68.582031 43.589844 68.738281 43.652344 68.890625 C 43.714844 69.039062 43.804688 69.175781 43.921875 69.289062 C 44.035156 69.40625 44.171875 69.496094 44.320312 69.558594 C 44.472656 69.621094 44.628906 69.652344 44.792969 69.652344 C 44.957031 69.652344 45.113281 69.621094 45.265625 69.558594 C 45.417969 69.496094 45.550781 69.40625 45.667969 69.289062 C 45.78125 69.175781 45.871094 69.039062 45.933594 68.890625 C 46 68.738281 46.03125 68.582031 46.03125 68.417969 L 46.03125 46.894531 C 46.425781 47.09375 46.847656 47.226562 47.285156 47.285156 L 47.285156 67.429688 C 47.285156 67.59375 47.320312 67.75 47.382812 67.902344 C 47.445312 68.050781 47.535156 68.1875 47.648438 68.300781 C 47.765625 68.417969 47.898438 68.507812 48.050781 68.570312 C 48.203125 68.632812 48.359375 68.664062 48.523438 68.664062 C 48.6875 68.664062 48.84375 68.632812 48.996094 68.570312 C 49.148438 68.507812 49.28125 68.417969 49.398438 68.300781 C 49.511719 68.1875 49.601562 68.050781 49.664062 67.902344 C 49.726562 67.75 49.757812 67.59375 49.757812 67.429688 L 49.757812 46.9375 C 50.136719 46.761719 50.484375 46.539062 50.796875 46.265625 C 51.113281 45.992188 51.382812 45.679688 51.609375 45.328125 C 51.832031 44.980469 52.003906 44.605469 52.125 44.203125 C 52.242188 43.804688 52.300781 43.398438 52.304688 42.980469 L 52.304688 28.300781 C 52.304688 28.011719 52.273438 27.726562 52.21875 27.445312 C 52.160156 27.164062 52.078125 26.890625 51.96875 26.625 C 51.859375 26.359375 51.722656 26.109375 51.5625 25.871094 C 51.402344 25.632812 51.222656 25.410156 51.019531 25.207031 C 50.816406 25.003906 50.59375 24.824219 50.355469 24.664062 C 50.117188 24.503906 49.863281 24.367188 49.601562 24.257812 C 49.335938 24.148438 49.0625 24.0625 48.78125 24.007812 C 48.496094 23.949219 48.214844 23.921875 47.925781 23.921875 Z M 47.925781 23.921875 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 37.488281 52.367188 C 37.324219 52.367188 37.167969 52.398438 37.015625 52.460938 C 36.863281 52.523438 36.730469 52.613281 36.617188 52.726562 C 36.5 52.84375 36.410156 52.976562 36.347656 53.128906 C 36.285156 53.28125 36.253906 53.4375 36.253906 53.601562 L 36.253906 69.210938 C 36.253906 69.375 36.285156 69.53125 36.347656 69.683594 C 36.410156 69.835938 36.5 69.96875 36.617188 70.085938 C 36.730469 70.199219 36.863281 70.289062 37.015625 70.351562 C 37.167969 70.414062 37.324219 70.445312 37.488281 70.445312 C 37.652344 70.445312 37.8125 70.414062 37.960938 70.351562 C 38.113281 70.289062 38.246094 70.199219 38.363281 70.085938 C 38.480469 69.96875 38.570312 69.835938 38.632812 69.683594 C 38.695312 69.53125 38.726562 69.375 38.726562 69.210938 L 38.726562 53.570312 C 38.722656 53.410156 38.6875 53.253906 38.625 53.109375 C 38.558594 52.960938 38.46875 52.828125 38.351562 52.71875 C 38.238281 52.605469 38.105469 52.519531 37.957031 52.457031 C 37.804688 52.394531 37.652344 52.367188 37.488281 52.367188 Z M 37.488281 52.367188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 20.058594 54.703125 C 19.894531 54.703125 19.738281 54.734375 19.585938 54.796875 C 19.433594 54.863281 19.300781 54.949219 19.183594 55.066406 C 19.066406 55.183594 18.980469 55.316406 18.917969 55.46875 C 18.851562 55.621094 18.820312 55.777344 18.820312 55.941406 L 18.820312 64.511719 C 18.820312 64.675781 18.851562 64.835938 18.917969 64.984375 C 18.980469 65.136719 19.066406 65.269531 19.183594 65.386719 C 19.300781 65.503906 19.433594 65.589844 19.585938 65.65625 C 19.738281 65.71875 19.894531 65.75 20.058594 65.75 C 20.222656 65.75 20.378906 65.71875 20.53125 65.65625 C 20.683594 65.589844 20.816406 65.503906 20.933594 65.386719 C 21.046875 65.269531 21.136719 65.136719 21.199219 64.984375 C 21.261719 64.835938 21.292969 64.675781 21.292969 64.511719 L 21.292969 55.941406 C 21.292969 55.777344 21.261719 55.621094 21.199219 55.46875 C 21.136719 55.316406 21.046875 55.183594 20.933594 55.066406 C 20.816406 54.949219 20.683594 54.863281 20.53125 54.796875 C 20.378906 54.734375 20.222656 54.703125 20.058594 54.703125 Z M 20.058594 54.703125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 62.542969 50.335938 C 63.027344 50.53125 63.527344 50.628906 64.046875 50.636719 C 64.574219 50.628906 65.078125 50.523438 65.558594 50.320312 C 66.042969 50.117188 66.46875 49.828125 66.835938 49.457031 C 67.207031 49.085938 67.492188 48.65625 67.691406 48.171875 C 67.890625 47.6875 67.992188 47.183594 67.996094 46.660156 L 67.996094 33.8125 C 67.988281 33.292969 67.882812 32.792969 67.679688 32.3125 C 67.476562 31.832031 67.1875 31.410156 66.820312 31.042969 C 66.453125 30.675781 66.027344 30.390625 65.546875 30.1875 C 65.070312 29.988281 64.570312 29.882812 64.046875 29.875 L 54.601562 29.875 C 54.4375 29.875 54.28125 29.90625 54.128906 29.96875 C 53.976562 30.035156 53.84375 30.121094 53.726562 30.238281 C 53.613281 30.355469 53.523438 30.488281 53.460938 30.640625 C 53.398438 30.789062 53.367188 30.949219 53.367188 31.113281 C 53.367188 31.277344 53.398438 31.433594 53.460938 31.585938 C 53.523438 31.738281 53.613281 31.871094 53.726562 31.988281 C 53.84375 32.101562 53.976562 32.191406 54.128906 32.253906 C 54.28125 32.316406 54.4375 32.347656 54.601562 32.347656 L 64.101562 32.347656 C 64.300781 32.347656 64.496094 32.386719 64.679688 32.464844 C 64.867188 32.542969 65.027344 32.652344 65.171875 32.792969 C 65.3125 32.933594 65.421875 33.097656 65.5 33.285156 C 65.578125 33.46875 65.613281 33.664062 65.613281 33.863281 L 65.613281 46.660156 C 65.597656 46.847656 65.550781 47.027344 65.464844 47.199219 C 65.382812 47.371094 65.269531 47.519531 65.132812 47.648438 C 64.992188 47.777344 64.832031 47.875 64.65625 47.945312 C 64.480469 48.015625 64.296875 48.046875 64.105469 48.046875 C 63.914062 48.046875 63.730469 48.015625 63.554688 47.945312 C 63.378906 47.875 63.21875 47.777344 63.078125 47.648438 C 62.941406 47.519531 62.828125 47.371094 62.746094 47.199219 C 62.660156 47.027344 62.613281 46.847656 62.597656 46.660156 L 62.597656 39.046875 C 62.597656 38.882812 62.566406 38.722656 62.503906 38.570312 C 62.4375 38.421875 62.351562 38.285156 62.234375 38.171875 C 62.117188 38.054688 61.984375 37.964844 61.832031 37.902344 C 61.679688 37.839844 61.523438 37.808594 61.359375 37.808594 C 61.195312 37.808594 61.039062 37.839844 60.886719 37.902344 C 60.734375 37.964844 60.601562 38.054688 60.484375 38.171875 C 60.371094 38.285156 60.28125 38.421875 60.21875 38.570312 C 60.15625 38.722656 60.125 38.882812 60.125 39.046875 L 60.125 60.070312 C 60.125 60.234375 60.15625 60.394531 60.21875 60.546875 C 60.28125 60.695312 60.371094 60.832031 60.484375 60.945312 C 60.601562 61.0625 60.734375 61.152344 60.886719 61.214844 C 61.039062 61.277344 61.195312 61.308594 61.359375 61.308594 C 61.523438 61.308594 61.679688 61.277344 61.832031 61.214844 C 61.984375 61.152344 62.117188 61.0625 62.234375 60.945312 C 62.351562 60.832031 62.4375 60.695312 62.503906 60.546875 C 62.566406 60.394531 62.597656 60.234375 62.597656 60.070312 Z M 62.542969 50.335938 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <span class="span89">
            Third Party Maintenance
          </span>
        </div>
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="d48f4a377b">
                <path d="M 0 17 L 75 17 L 75 72.75 L 0 72.75 Z M 0 17 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="4280cb0637">
                <path d="M 29 2.25 L 46 2.25 L 46 27 L 29 27 Z M 29 2.25 " clip-rule="nonzero">
                </path>
              </clipPath>
            </defs>
            <g clip-path="url(#d48f4a377b)">
              <path fill="#FFA500"
                d="M 70.6875 72.675781 L 4.3125 72.675781 C 1.929688 72.675781 0 70.746094 0 68.476562 L 0 22.296875 C 0 19.914062 1.929688 17.984375 4.3125 17.984375 L 30.636719 17.984375 C 31.316406 17.984375 31.769531 18.4375 31.769531 19.117188 C 31.769531 19.800781 31.316406 20.253906 30.636719 20.253906 L 4.3125 20.253906 C 3.175781 20.253906 2.269531 21.160156 2.269531 22.296875 L 2.269531 68.476562 C 2.269531 69.609375 3.175781 70.40625 4.3125 70.40625 L 70.6875 70.40625 C 71.824219 70.40625 72.730469 69.496094 72.730469 68.476562 L 72.730469 22.296875 C 72.730469 21.160156 71.824219 20.253906 70.6875 20.253906 L 44.25 20.253906 C 43.570312 20.253906 43.117188 19.800781 43.117188 19.117188 C 43.117188 18.4375 43.570312 17.984375 44.25 17.984375 L 70.6875 17.984375 C 73.070312 17.984375 75 19.914062 75 22.296875 L 75 68.476562 C 74.886719 70.746094 72.957031 72.675781 70.6875 72.675781 Z M 70.6875 72.675781 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <g clip-path="url(#4280cb0637)">
              <path fill="#FFA500"
                d="M 44.25 26.722656 L 30.636719 26.722656 C 29.953125 26.722656 29.5 26.265625 29.5 25.585938 L 29.5 10.269531 C 29.5 5.84375 33.019531 2.324219 37.441406 2.324219 C 41.867188 2.324219 45.386719 5.84375 45.386719 10.269531 L 45.386719 25.585938 C 45.386719 26.265625 44.933594 26.722656 44.25 26.722656 Z M 31.769531 24.453125 L 43.117188 24.453125 L 43.117188 10.269531 C 43.117188 7.089844 40.621094 4.59375 37.441406 4.59375 C 34.265625 4.59375 31.769531 7.089844 31.769531 10.269531 Z M 31.769531 24.453125 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#FFA500"
              d="M 37.441406 14.921875 C 35.058594 14.921875 33.132812 12.992188 33.132812 10.609375 C 33.132812 8.226562 35.058594 6.296875 37.441406 6.296875 C 39.824219 6.296875 41.753906 8.226562 41.753906 10.609375 C 41.753906 12.992188 39.824219 14.921875 37.441406 14.921875 Z M 37.441406 8.566406 C 36.308594 8.566406 35.402344 9.472656 35.402344 10.609375 C 35.402344 11.742188 36.308594 12.652344 37.441406 12.652344 C 38.578125 12.652344 39.484375 11.742188 39.484375 10.609375 C 39.484375 9.472656 38.578125 8.566406 37.441406 8.566406 Z M 37.441406 8.566406 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 18.949219 45.214844 C 13.957031 45.214844 9.984375 41.132812 9.984375 36.25 C 9.984375 31.371094 14.070312 27.289062 18.949219 27.289062 C 23.941406 27.289062 27.914062 31.371094 27.914062 36.25 C 27.914062 41.128906 23.941406 45.214844 18.949219 45.214844 Z M 18.949219 29.445312 C 15.203125 29.445312 12.253906 32.507812 12.253906 36.136719 C 12.253906 39.769531 15.316406 42.832031 18.949219 42.832031 C 22.578125 42.832031 25.644531 39.769531 25.644531 36.136719 C 25.644531 32.507812 22.691406 29.445312 18.949219 29.445312 Z M 18.949219 29.445312 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 32.335938 59.851562 L 5.671875 59.851562 C 4.992188 59.851562 4.539062 59.398438 4.539062 58.71875 L 4.539062 56.789062 C 4.539062 50.660156 9.53125 45.667969 15.65625 45.667969 L 22.351562 45.667969 C 28.480469 45.667969 33.472656 50.660156 33.472656 56.789062 L 33.472656 58.71875 C 33.472656 59.398438 33.019531 59.851562 32.335938 59.851562 Z M 6.808594 57.582031 L 31.203125 57.582031 L 31.203125 56.789062 C 31.203125 51.910156 27.230469 47.9375 22.351562 47.9375 L 15.65625 47.9375 C 10.777344 47.9375 6.808594 51.910156 6.808594 56.789062 Z M 6.808594 57.582031 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 32.335938 65.640625 L 5.671875 65.640625 C 4.992188 65.640625 4.539062 65.183594 4.539062 64.503906 C 4.539062 63.824219 4.992188 63.371094 5.671875 63.371094 L 32.335938 63.371094 C 33.019531 63.371094 33.472656 63.824219 33.472656 64.503906 C 33.472656 65.183594 33.019531 65.640625 32.335938 65.640625 Z M 32.335938 65.640625 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 66.71875 35.230469 L 39.710938 35.230469 C 39.03125 35.230469 38.578125 34.777344 38.578125 34.097656 C 38.578125 33.414062 39.03125 32.960938 39.710938 32.960938 L 66.832031 32.960938 C 67.511719 32.960938 67.964844 33.414062 67.964844 34.097656 C 67.851562 34.777344 67.398438 35.230469 66.71875 35.230469 Z M 66.71875 35.230469 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 66.71875 45.328125 L 39.710938 45.328125 C 39.03125 45.328125 38.578125 44.875 38.578125 44.195312 C 38.578125 43.511719 39.03125 43.058594 39.710938 43.058594 L 66.832031 43.058594 C 67.511719 43.058594 67.964844 43.511719 67.964844 44.195312 C 67.964844 44.875 67.398438 45.328125 66.71875 45.328125 Z M 66.71875 45.328125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 66.71875 55.539062 L 39.710938 55.539062 C 39.03125 55.539062 38.578125 55.085938 38.578125 54.40625 C 38.578125 53.726562 39.03125 53.273438 39.710938 53.273438 L 66.832031 53.273438 C 67.511719 53.273438 67.964844 53.726562 67.964844 54.40625 C 67.964844 55.085938 67.398438 55.539062 66.71875 55.539062 Z M 66.71875 55.539062 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#FFA500"
              d="M 66.71875 65.640625 L 39.710938 65.640625 C 39.03125 65.640625 38.578125 65.183594 38.578125 64.503906 C 38.578125 63.824219 39.03125 63.371094 39.710938 63.371094 L 66.832031 63.371094 C 67.511719 63.371094 67.964844 63.824219 67.964844 64.503906 C 67.851562 65.183594 67.398438 65.640625 66.71875 65.640625 Z M 66.71875 65.640625 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <span class="span89">
            The Authority
          </span>
        </div>
        <div class="ser010">
          <svg class="svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="fc4c47c9d6">
                <path d="M 10.3125 10.226562 L 74.910156 10.226562 L 74.910156 75 L 10.3125 75 Z M 10.3125 10.226562 "
                  clip-rule="nonzero"></path>
              </clipPath>
            </defs>
            <g clip-path="url(#fc4c47c9d6)">
              <path fill="#FFA500"
                d="M 27.609375 51.429688 C 31.738281 51.429688 34.664062 47.566406 34.054688 44.125 L 41.625 44.125 L 41.625 51.515625 C 38.53125 52.121094 36.207031 54.871094 36.207031 58.226562 C 36.207031 61.582031 38.53125 64.332031 41.625 64.933594 L 41.625 72.25 L 13.5 72.25 L 13.5 44.125 L 21.160156 44.125 C 20.984375 48.765625 24.167969 51.429688 27.609375 51.429688 Z M 42.234375 62.441406 C 40.253906 62.097656 38.789062 60.378906 38.789062 58.226562 C 38.789062 56.078125 40.253906 54.359375 42.234375 54.011719 C 43.351562 53.839844 44.210938 52.808594 44.210938 51.695312 L 44.210938 44.125 L 51.773438 44.125 C 52.980469 44.125 53.925781 43.265625 54.097656 42.140625 C 54.445312 40.171875 56.160156 38.707031 58.3125 38.707031 C 60.464844 38.707031 62.179688 40.171875 62.527344 42.140625 C 62.699219 43.265625 63.644531 44.125 64.851562 44.125 L 72.335938 44.125 L 72.335938 72.25 L 44.210938 72.25 L 44.210938 64.765625 C 44.210938 63.648438 43.351562 62.617188 42.234375 62.441406 Z M 51.519531 27.527344 C 51.519531 24.167969 48.9375 20.902344 44.210938 20.988281 L 44.210938 13.328125 L 72.335938 13.328125 L 72.335938 41.453125 L 65.023438 41.453125 C 64.417969 38.359375 61.667969 36.035156 58.3125 36.035156 C 54.957031 36.035156 52.207031 38.359375 51.609375 41.453125 L 44.210938 41.453125 L 44.210938 33.972656 C 47.644531 34.578125 51.519531 31.652344 51.519531 27.527344 Z M 72.675781 10.839844 L 43.863281 10.839844 C 42.660156 10.839844 41.625 11.785156 41.625 13.070312 L 41.625 21.5 C 41.625 22.878906 42.917969 23.738281 44.039062 23.652344 C 46.613281 23.484375 48.164062 24.597656 48.679688 26.234375 C 49.796875 29.417969 46.785156 32.078125 44.210938 31.394531 C 42.832031 31.046875 41.539062 31.992188 41.539062 33.371094 L 41.539062 41.542969 L 33.371094 41.542969 C 31.992188 41.542969 30.960938 42.832031 31.394531 44.203125 C 32.078125 46.789062 29.414062 49.710938 26.234375 48.679688 C 24.769531 48.167969 23.648438 46.789062 23.648438 44.898438 C 23.648438 44.039062 23.824219 43.433594 23.308594 42.746094 C 22.875 42.054688 22.277344 41.628906 21.503906 41.628906 L 13.074219 41.628906 C 11.871094 41.628906 10.839844 42.574219 10.839844 43.867188 L 10.839844 72.761719 C 10.839844 73.96875 11.785156 75 13.074219 75 C 14.707031 75 73.539062 75 72.675781 75 C 73.878906 75 74.910156 74.054688 74.910156 72.761719 L 74.910156 13.15625 C 74.910156 11.785156 73.964844 10.839844 72.675781 10.839844 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#FFA500"
              d="M 36.207031 16.597656 C 36.207031 18.75 34.75 20.46875 32.769531 20.8125 C 31.652344 20.988281 30.792969 22.019531 30.792969 23.136719 L 30.792969 30.707031 L 23.222656 30.707031 C 22.019531 30.707031 21.074219 31.566406 20.898438 32.6875 C 20.554688 34.664062 18.835938 36.121094 16.683594 36.121094 C 14.535156 36.121094 12.816406 34.664062 12.46875 32.6875 C 12.296875 31.566406 11.351562 30.707031 10.144531 30.707031 L 2.667969 30.707031 L 2.667969 2.582031 L 30.792969 2.582031 L 30.792969 10.0625 C 30.792969 11.265625 31.652344 12.210938 32.769531 12.382812 C 34.75 12.644531 36.207031 14.449219 36.207031 16.597656 Z M 9.972656 33.285156 C 10.578125 36.382812 13.328125 38.707031 16.683594 38.707031 C 20.039062 38.707031 22.789062 36.382812 23.394531 33.285156 L 31.21875 33.285156 C 32.425781 33.285156 33.457031 32.339844 33.457031 31.046875 L 33.457031 23.222656 C 36.554688 22.617188 38.875 19.867188 38.875 16.511719 C 38.875 13.15625 36.554688 10.40625 33.457031 9.808594 L 33.457031 2.238281 C 33.457031 1.03125 32.511719 0 31.21875 0 L 2.324219 0 C 1.117188 0 0.0859375 0.945312 0.0859375 2.238281 L 0.0859375 31.132812 C 0.0859375 32.339844 1.03125 33.371094 2.324219 33.371094 L 9.972656 33.285156 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg>
          <span class="span89">
            Application Acceptance
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ----------------------------------------vidhi section end ----------------------------------------------------------------------- -->
<!-- ------------------------Crawseels----------------------- -->
<div class="buildingCorousalConatiner" style="margin-top: 2rem;">
  <div class="corusalHeaderAndCorusalContainer">
    <div class="corousalContainerHeader">Our EDI customers trust us</div>
  </div>
  <div>
    <div class="carousel-container">
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img3.webp" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img2.svg" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img1.svg" alt="Image 3">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img4.webp" alt="Image 4">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img5.webp" alt="Image 5">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img6.webp" alt="Image 6">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img7.svg" alt="Image 7">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img8.svg" alt="Image 8">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img9.webp" alt="Image 9">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img10.webp" alt="Image 10">
          </div>
          <div class="carousel-item">
            <img class="carousel-image" src="./assets/images/IMAGES/corousalImages/img11.webp" alt="Image 11">
          </div>

          <!-- Add more carousel items here for a total of 10 -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- -------------------------------Rohit Section TMA is For You---------------------------------------------------------- -->
<section class="TMAst">
  <div class="TMAStdi">
    <h2 data-aos="fade-up" class="tmaheader">
      Is TMA for you
      <span class="changecolheader"> ? </span>
    </h2>
    <div class="TMasec">
      <img data-aos="fade-up" class="imag" src="./assets/images/IMAGES/tma.webp" />
      <div data-aos="fade-right" class="ste1">
        <div class="para">
          <p>
            We ensure the continuity of your EDI/EAI platform through a comprehensive management of issues related
            to flows, messages and documents exchanged with your partners.
            <br />
            <br />
            At Digitus, we offer scalable maintenance taking into account your specific requests for a fast and
            qualitative deployment.

            <br />
            <br />
            We are here to support organizations in ensuring optimal flow management and their EDI ecosystem. To
            gain fluidity and serenity, refocus your IT teams on higher value-added tasks while guaranteeing
            excellence in the management and supervision of your EDI platform, choose the Digitus TMA.
          </p>
        </div>
        <br>
        <br>
        <a class="btttn" href="#">Tell us about your need</a>
      </div>
    </div>
  </div>
</section>
<!-- --------------------Rohit Section1 TMA End--------------------------------------------------------------------------- -->
<!-- ----------------------Rohit Scection2 Project TMA-------------------------------------------------------------------- -->
<section class="TMAst2">
  <h2 data-aos="fade-up" class="tmaheader">
    Initiating a <span class="changecolheader">projet TMA</span> avec
    with Digitus, how does it work?
  </h2>
  <div data-aos="fade-up" class="temlist">
    <ol class="ollist">
      <li class="lis55">
        <div class="tmali">
          <div class="circle">
            <div>1</div>
          </div>
          <div class="hrline">
            <hr />
          </div>
        </div>
        <ul class="litstyle">
          <li class="lis55">getting to know your EDI configuration</li>
          <li class="lis55">identification of the intervention perimeter</li>
          <li class="lis55">referencing needs and objectives</li>
          <li class="lis55">technology watch</li>
          <li class="lis55">drafting of the TMA quality plan</li>
          <li class="lis55">agreement on deliverables</li>
          <li class="lis55">definition of ticketing mechanisms for different environments</li>
          <li class="lis55">configuration of TMA tools and access</li>
        </ul>
      </li>
      <li>
        <div class="tmali lis">
          <div class="circle2">
            <div>2</div>
          </div>
          <div class="hrline">
            <hr />
          </div>
        </div>
        <ul class="litstyle l12 ">
          <li class="lis55">
            assisted handling of requests and incidents for the preparation and adaptation of the TMA Digitus team
          </li>
          <li class="lis55" v>
            delivery of documentation inherent to the audit and advice phase </li>
          <li class="lis55">readjustment to the specificities observed</li>
        </ul>
      </li>
      <li>
        <div class="tmali lis3">
          <div class="circle3">
            <div>3</div>
          </div>
          <div class="hrline">
            <hr />
          </div>
        </div>
        <ul class="litstyle l12">
          <li class="lis55">performance of services within the defined scope</li>
          <li class="lis55">regular reporting</li>
          <li class="lis55">scalable and proactive maintenance</li>
          <li class="lis55">transparency and obligation of result</li>
          <li class="lis55">constant updating of information documentation</li>
        </ul>
      </li>
    </ol>
  </div>
</section>
<!-- ---------------------------------------------Rohit Scection2 Project TMA end ----------------------------------------------------- -->
<!-- -----------------------------------------------Rohit Scection3 Ebook -------------------------------------------------------------- -->
<section class="home_ebook">
  <div class="home_ebook1">
    <p data-aos="fade-up" data-aos-duration="500">E-Book</p>
    <h1 data-aos="fade-up" data-aos-duration="800">
      The essentials of dematerialization in our e-book “Know everything about Electronic Invoicing”
    </h1>
  </div>
  <div data-aos="fade-right" data-aos-duration="800" class="home_ebook2">
    <button class="home_down">
      <h2>Download</h2>
    </button>
  </div>
</section>
<!-- ---------------------------------------Rohit Scection3 ebook end ----------------------------------------------------------------- -->
<!-- --------------------------------------Rohit Scection4 Cards ---------------------------------------------------------------------- -->
<section class="TMAst3">
  <h2 data-aos="fade-up" class="tmaheader">
    Find our other
    <span class="changecolheader"> services </span>
  </h2>
  <div data-aos="fade-up" class="div4tm5">
    <div class="div4113">
      <div class="div4114"><b>Audit</b></div>
      <p><b> Audit </b>
        <br />
        Our teams thoroughly diagnose your initial configuration or your current EDI system through a methodical
        audit.
      </p>
    </div>
    <div class="div4113">
      <div class="div4114"><b>Management</b></div>
      <p><b> Management </b>
        <br />
        One or more of our Digitus experts join your team to directly support you in the management of your EDI or
        tax dematerialization issues.
      </p>
    </div>
    <div class="div4113">
      <div class="div4114"><b>Formations EDI</b></div>
      <p><b> Formations EDI </b>
        <br />
        Building on our experience with a multitude of known solutions, we offer several educational training
        courses to introduce and specialize your teams - your clients in the professions and specificities of EDI.
      </p>
    </div>
  </div>
</section>
<!-- ------------------------------------Rohit Scection4 Cards end ------------------------------------------------------------------- -->
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
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <script src="./assets/script/cptcha.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="./assets/script/faq.js"></script>
      <script src="./assets/script/handlescroll.js"></script>
      <script src="./assets/script/scecondHomeSec.js"></script>
  </body>