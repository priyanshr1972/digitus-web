<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script
      src="https://kit.fontawesome.com/81831682c9.js"
      crossorigin="anonymous"
    ></script>
  <link rel="stylesheet" href="./assets/css/edipul.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="./assets/css/secondsection.css">
  <link rel="stylesheet" href="./assets/css/footer_2.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
 -->
 <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

  <!-- the Computerized Data Exchange (EDI)  start-->

  <section id="what-edi" class="py-12 lg:py-24 overflow-hidden">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap items-center -m-6">
        <div class="w-full lg:w-1/2 p-6 lg:pr-10">
          <div data-aos="fade-right" data-aos-duration="2500">
            <h2 data-aos="fade-right" data-aos-duration="2500"
              class="mb-6 font-heading font-bold text-5xl sm:text-6xl text-gray-900 leading-title aos-init aos-animate">
              Qu'est-ce que <label class="text-digitus-orange">l'Échange de Données Informatisé</label>
              (EDI) ?</h2>
            <p data-aos="fade-up" data-aos-duration="500" class="lg:mb-9 text-base text-gray-900 aos-init aos-animate">
              Vous échangez quotidiennement
              une multitude de <label class="text-digitus-orange">documents et de données</label> avec vos
              <label class="text-digitus-orange">partenaires</label> commerciaux (fournisseurs, clients,
              banques, transporteurs…). La gestion des informations échangées demande rigueur, réactivité,
              efficacité, coût et temps de traitement.<br><br>Le moindre retard, erreur de saisie, imprévu
              en tout genre impact directement votre <label class="text-digitus-orange">productivité</label> et votre
              <label class="text-digitus-orange">trésorerie</label>.<br><br>Industrialisation,
              Automatisation, maîtrise de la Supply-Chain, Traçabilité, Archivage, Digitalisation et
              Productivité sont autant de défis actuels auxquels vous devez faire face afin de rester
              compétitif dans votre secteur d’activité.
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quasi iste soluta consequuntur qui ab a eum
              mollitia, nobis ex consequatur autem explicabo, voluptas quo aspernatur placeat earum! Aliquam, nesciunt.
              Odio ipsa assumenda quo ullam? Corrupti harum ab commodi cum officiis quia numquam, reiciendis consequatur
              quos aliquid qui dolore alias veniam optio facere ipsam quibusdam tempore excepturi laboriosam! Corrupti
              aperiam eum asperiores eaque tenetur libero voluptatibus animi, aut cum rerum minima, quam repudiandae
              quibusdam expedita, cumque voluptatum alias veniam doloribus omnis reiciendis! Ex, deleniti at? Assumenda
              neque hic dignissimos odit magnam ratione nulla, sequi dolorem doloremque eaque ad, provident repellat.
            </p>
            </p>
          </div>
        </div>
        <div class="w-full lg:w-1/2 p-6">
          <div class="mx-auto divide-y">
            <div data-aos="fade-up" data-aos-duration="500" class="w-full py-5 flex items-center group aos-init">
              <div class="w-auto ml-2 mr-2">
                <div
                  class="w-8 h-8 border-2 rounded-full group-hover:bg-digitus-orange group-hover:text-white border-digitus-orange flex justify-center items-center text-digitus-orange font-semibold">
                  1</div>
              </div><a class="flex-1 p-2.5 " href="#what-edi">
                <h3 class="font-heading font-semibold text-lg text-gray-900">Qu'est-ce que l'échange de
                  données informatisé ?</h3>
              </a><a href="#what-edi" class="hidden group-hover:block w-auto p-2.5 font-semibold text-lg">Go</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="900" class="w-full py-5 flex items-center group aos-init">
              <div class="w-auto ml-2 mr-2">
                <div
                  class="w-8 h-8 border-2 rounded-full group-hover:bg-digitus-orange group-hover:text-white border-digitus-orange flex justify-center items-center text-digitus-orange font-semibold">
                  2</div>
              </div><a class="flex-1 p-2.5" href="#edi-accelerateur">
                <h3 class="font-heading font-semibold text-lg text-gray-900">L'EDI comme accélérateur de
                  business</h3>
              </a><a href="#edi-accelerateur" class="hidden group-hover:block w-auto p-2.5 font-semibold text-lg">Go</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1300" class="w-full py-5 flex items-center group aos-init">
              <div class="w-auto ml-2 mr-2">
                <div
                  class="w-8 h-8 border-2 rounded-full group-hover:bg-digitus-orange group-hover:text-white border-digitus-orange flex justify-center items-center text-digitus-orange font-semibold">
                  3</div>
              </div><a class="flex-1 p-2.5" href="#edi-dematerialiser">
                <h3 class="font-heading font-semibold text-lg text-gray-900">Dématérialiser vos
                  documents papiers et données commerciales</h3>
              </a><a href="#edi-dematerialiser"
                class="hidden group-hover:block w-auto p-2.5 font-semibold text-lg">Go</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1700" class="w-full py-5 flex items-center group aos-init">
              <div class="w-auto ml-2 mr-2">
                <div
                  class="w-8 h-8 border-2 rounded-full group-hover:bg-digitus-orange group-hover:text-white border-digitus-orange flex justify-center items-center text-digitus-orange font-semibold">
                  4</div>
              </div><a class="flex-1 p-2.5" href="#edi-echange">
                <h3 class="font-heading font-semibold text-lg text-gray-900">L'échange de données
                  informatisé, ça marche comment ?</h3>
              </a><a href="#edi-echange" class="hidden group-hover:block w-auto p-2.5 font-semibold text-lg">Go</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="2100" class="w-full py-5 flex items-center group aos-init">
              <div class="w-auto ml-2 mr-2">
                <div
                  class="w-8 h-8 border-2 rounded-full group-hover:bg-digitus-orange group-hover:text-white border-digitus-orange flex justify-center items-center text-digitus-orange font-semibold">
                  5</div>
              </div><a class="flex-1 p-2.5" href="#edi-document">
                <h3 class="font-heading font-semibold text-lg text-gray-900">Un document EDI, c'est quoi
                  ?</h3>
              </a><a href="#edi-document" class="hidden group-hover:block w-auto p-2.5 font-semibold text-lg">Go</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- the Computerized Data Exchange (EDI)  end -->

  <!--  84 % and 30% part start-->
  <section class="bg-slate-50 py-12">
    <div class="container mx-auto">
      <div class="max-w-5xl mx-auto">
        <div class="flex flex-wrap justify-center divide-y md:divide-y-0 md:divide-x divide-gray-200">
          <div class="w-full md:w-1/2 p-6 text-center">
            <h2 data-aos="fade-up" data-aos-duration="500"
              class="flex items-center justify-center mb-3 font-heading font-bold text-12xl sm:text-13xl md:text-14xl xl:text-15xl text-center text-transparent bg-clip-text bg-gradient-blue aos-init aos-animate">
              <label class="text-8xl"></label>
              <div>84</div>%
            </h2>
            <h3 data-aos="fade-up" data-aos-duration="600"
              class="mb-3 font-heading text-center text-gray-900 text-lg aos-init">Des entreprises
              manquent de visibilité et de coordination dans leur business*</h3>
          </div>
          <div class="w-full md:w-1/2 p-6 text-center">
            <h2 data-aos="fade-up" data-aos-duration="500"
              class="flex items-center justify-center mb-3 font-heading font-bold text-12xl sm:text-13xl md:text-14xl xl:text-15xl text-center text-transparent bg-clip-text bg-gradient-green aos-init">
              <label class="text-8xl"></label>
              <div>30</div>%
            </h2>
            <h3 data-aos="fade-up" data-aos-duration="600"
              class="mb-3 font-heading text-center text-gray-900 text-lg aos-init">Des factures sont
              bloquées à cause d'erreurs de paiement*</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  84 % and 30% part end-->

  <!-- Accelerator your business  start-->
  <section id="edi-accelerateur" class="pt-18 bg-white relative z-10">
    <div class="container px-4 mx-auto">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center aos-init aos-animate">
        L’EDI accélérateur de votre <label class="text-digitus-tradexpress">business</label></h2>
      <p data-aos="fade-up" data-aos-duration="500"
        class="mt-8 mb-16 text-lg mx-auto text-center text-gray-600 aos-init aos-animate">Que vous soyez une
        PME, une ETI ou une Grande entreprise. l'Échange de Données Informatisé (EDI) est un levier
        incontournable de croissance pour votre structure</p>
      <div data-aos="fade-up" data-aos-duration="500"
        class="flex flex-col md:flex-row items-center justify-center gap-12 md:gap-4 mt-18 mb-12 text-gray-400 max-w-6xl mx-auto aos-init">
        <div class="activeTabsTMASecure w-1/4 flex flex-col items-center gap-4 cursor-pointer"><svg fill="#9ca3af"
            class="h-26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <g clip-path="url(#552cdcbb81)">
              <path
                d="M 52.988281 25.953125 C 52.304688 25.269531 51.277344 25.441406 50.59375 26.125 L 33.824219 45.375 L 24.230469 35.75 C 23.550781 35.066406 22.523438 35.066406 21.835938 35.75 C 21.15625 36.4375 21.15625 37.46875 21.835938 38.160156 L 32.789062 49.15625 C 32.964844 49.328125 32.964844 49.328125 33.136719 49.328125 C 33.136719 49.328125 33.304688 49.328125 33.304688 49.5 C 33.476562 49.5 33.644531 49.667969 33.992188 49.667969 C 34.164062 49.667969 34.503906 49.667969 34.671875 49.5 L 34.84375 49.328125 C 35.019531 49.328125 35.019531 49.15625 35.191406 49.15625 L 53.164062 28.527344 C 53.675781 27.675781 53.675781 26.644531 52.988281 25.953125 Z M 37.414062 6.703125 C 29.195312 6.703125 21.496094 9.96875 15.679688 15.816406 C 3.691406 27.84375 3.691406 47.4375 15.679688 59.640625 C 21.496094 65.3125 29.195312 68.578125 37.414062 68.578125 C 45.625 68.578125 53.332031 65.3125 59.152344 59.464844 C 71.128906 47.4375 71.128906 27.84375 59.152344 15.640625 C 53.332031 9.96875 45.625 6.703125 37.414062 6.703125 Z M 37.414062 72.011719 C 28.339844 72.011719 19.613281 68.398438 13.277344 61.875 C -0.0703125 48.46875 -0.0703125 26.644531 13.277344 13.234375 C 19.613281 6.875 28.339844 3.269531 37.414062 3.269531 C 46.484375 3.269531 55.210938 6.875 61.546875 13.40625 C 74.898438 26.8125 74.898438 48.636719 61.546875 62.046875 C 55.210938 68.398438 46.484375 72.011719 37.414062 72.011719 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg><label class="text-center">Fiabiliser</label></div>
        <div class=" w-1/4 flex flex-col items-center gap-4 cursor-pointer"><svg fill="#9ca3af" class="h-26"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <g clip-path="url(#0e0f47ada5)">
              <path
                d="M 33.730469 19.570312 C 32.765625 19.570312 31.980469 18.789062 31.980469 17.820312 C 31.980469 16.855469 32.765625 16.070312 33.730469 16.070312 L 51.65625 16.070312 L 51.65625 7.011719 C 51.65625 6.042969 52.441406 5.261719 53.40625 5.261719 C 53.949219 5.261719 54.4375 5.503906 54.757812 5.894531 L 74.347656 26.414062 C 74.992188 27.089844 74.984375 28.152344 74.347656 28.820312 L 54.671875 49.425781 C 54.007812 50.125 52.902344 50.152344 52.203125 49.488281 C 51.84375 49.144531 51.660156 48.683594 51.660156 48.226562 L 51.65625 48.226562 L 51.65625 39.167969 L 21.597656 39.167969 C 20.632812 39.167969 19.847656 38.382812 19.847656 37.414062 L 19.847656 30.964844 L 4.335938 47.214844 L 19.847656 63.460938 L 19.847656 57.011719 C 19.847656 56.042969 20.632812 55.261719 21.597656 55.261719 L 41.273438 55.261719 C 42.242188 55.261719 43.027344 56.042969 43.027344 57.011719 C 43.027344 57.976562 42.242188 58.761719 41.273438 58.761719 L 23.351562 58.761719 L 23.351562 67.820312 L 23.347656 67.820312 C 23.347656 68.28125 23.164062 68.742188 22.804688 69.085938 C 22.101562 69.75 21 69.722656 20.335938 69.023438 L 0.660156 48.417969 C 0.0234375 47.75 0.015625 46.6875 0.660156 46.011719 L 20.246094 25.492188 C 20.570312 25.105469 21.054688 24.859375 21.59375 24.859375 C 22.5625 24.859375 23.347656 25.644531 23.347656 26.609375 L 23.347656 35.667969 L 53.40625 35.667969 C 54.371094 35.667969 55.15625 36.453125 55.15625 37.417969 L 55.15625 43.871094 L 70.667969 27.621094 L 55.15625 11.375 L 55.15625 17.824219 C 55.15625 18.789062 54.371094 19.574219 53.40625 19.574219 L 33.730469 19.574219 Z M 33.730469 19.570312 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
          </svg><label class="text-center">Fluidifier</label></div>
        <div class=" w-1/4 flex flex-col items-center gap-6 cursor-pointer"><svg fill="#9ca3af" class="h-26"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <g clip-path="url(#2ca1e1e2fb)">
              <path
                d="M 27.609375 51.429688 C 31.738281 51.429688 34.664062 47.566406 34.054688 44.125 L 41.625 44.125 L 41.625 51.515625 C 38.53125 52.121094 36.207031 54.871094 36.207031 58.226562 C 36.207031 61.582031 38.53125 64.332031 41.625 64.933594 L 41.625 72.25 L 13.5 72.25 L 13.5 44.125 L 21.160156 44.125 C 20.984375 48.765625 24.167969 51.429688 27.609375 51.429688 Z M 42.234375 62.441406 C 40.253906 62.097656 38.789062 60.378906 38.789062 58.226562 C 38.789062 56.078125 40.253906 54.359375 42.234375 54.011719 C 43.351562 53.839844 44.210938 52.808594 44.210938 51.695312 L 44.210938 44.125 L 51.773438 44.125 C 52.980469 44.125 53.925781 43.265625 54.097656 42.140625 C 54.445312 40.171875 56.160156 38.707031 58.3125 38.707031 C 60.464844 38.707031 62.179688 40.171875 62.527344 42.140625 C 62.699219 43.265625 63.644531 44.125 64.851562 44.125 L 72.335938 44.125 L 72.335938 72.25 L 44.210938 72.25 L 44.210938 64.765625 C 44.210938 63.648438 43.351562 62.617188 42.234375 62.441406 Z M 51.519531 27.527344 C 51.519531 24.167969 48.9375 20.902344 44.210938 20.988281 L 44.210938 13.328125 L 72.335938 13.328125 L 72.335938 41.453125 L 65.023438 41.453125 C 64.417969 38.359375 61.667969 36.035156 58.3125 36.035156 C 54.957031 36.035156 52.207031 38.359375 51.609375 41.453125 L 44.210938 41.453125 L 44.210938 33.972656 C 47.644531 34.578125 51.519531 31.652344 51.519531 27.527344 Z M 72.675781 10.839844 L 43.863281 10.839844 C 42.660156 10.839844 41.625 11.785156 41.625 13.070312 L 41.625 21.5 C 41.625 22.878906 42.917969 23.738281 44.039062 23.652344 C 46.613281 23.484375 48.164062 24.597656 48.679688 26.234375 C 49.796875 29.417969 46.785156 32.078125 44.210938 31.394531 C 42.832031 31.046875 41.539062 31.992188 41.539062 33.371094 L 41.539062 41.542969 L 33.371094 41.542969 C 31.992188 41.542969 30.960938 42.832031 31.394531 44.203125 C 32.078125 46.789062 29.414062 49.710938 26.234375 48.679688 C 24.769531 48.167969 23.648438 46.789062 23.648438 44.898438 C 23.648438 44.039062 23.824219 43.433594 23.308594 42.746094 C 22.875 42.054688 22.277344 41.628906 21.503906 41.628906 L 13.074219 41.628906 C 11.871094 41.628906 10.839844 42.574219 10.839844 43.867188 L 10.839844 72.761719 C 10.839844 73.96875 11.785156 75 13.074219 75 C 14.707031 75 73.539062 75 72.675781 75 C 73.878906 75 74.910156 74.054688 74.910156 72.761719 L 74.910156 13.15625 C 74.910156 11.785156 73.964844 10.839844 72.675781 10.839844 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path
              d="M 36.207031 16.597656 C 36.207031 18.75 34.75 20.46875 32.769531 20.8125 C 31.652344 20.988281 30.792969 22.019531 30.792969 23.136719 L 30.792969 30.707031 L 23.222656 30.707031 C 22.019531 30.707031 21.074219 31.566406 20.898438 32.6875 C 20.554688 34.664062 18.835938 36.121094 16.683594 36.121094 C 14.535156 36.121094 12.816406 34.664062 12.46875 32.6875 C 12.296875 31.566406 11.351562 30.707031 10.144531 30.707031 L 2.667969 30.707031 L 2.667969 2.582031 L 30.792969 2.582031 L 30.792969 10.0625 C 30.792969 11.265625 31.652344 12.210938 32.769531 12.382812 C 34.75 12.644531 36.207031 14.449219 36.207031 16.597656 Z M 9.972656 33.285156 C 10.578125 36.382812 13.328125 38.707031 16.683594 38.707031 C 20.039062 38.707031 22.789062 36.382812 23.394531 33.285156 L 31.21875 33.285156 C 32.425781 33.285156 33.457031 32.339844 33.457031 31.046875 L 33.457031 23.222656 C 36.554688 22.617188 38.875 19.867188 38.875 16.511719 C 38.875 13.15625 36.554688 10.40625 33.457031 9.808594 L 33.457031 2.238281 C 33.457031 1.03125 32.511719 0 31.21875 0 L 2.324219 0 C 1.117188 0 0.0859375 0.945312 0.0859375 2.238281 L 0.0859375 31.132812 C 0.0859375 32.339844 1.03125 33.371094 2.324219 33.371094 L 9.972656 33.285156 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg><label class="text-center">Automatiser</label></div>
        <div class=" w-1/4 flex flex-col items-center gap-6 cursor-pointer"><svg fill="#9ca3af" class="h-26"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <g mask="url(#8d110c4f39)">
              <g transform="matrix(1, 0, 0, 1, -0.000000000000000056, -0.000000000000001893)">
                <g clip-path="url(#0d5e986f38)">
                  <path
                    d="M 68.074219 40.574219 C 68.074219 43.898438 67.519531 47.046875 66.566406 50.050781 L 70.375 52.261719 C 71.722656 48.632812 72.4375 44.683594 72.4375 40.574219 C 72.4375 23.683594 60.136719 9.554688 43.945312 6.710938 L 43.945312 11.132812 C 57.679688 13.976562 68.074219 26.054688 68.074219 40.574219 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 9.1875 50.050781 C 8.15625 47.046875 7.679688 43.898438 7.679688 40.574219 C 7.679688 26.054688 18.074219 13.894531 31.808594 11.132812 L 31.808594 6.710938 C 15.539062 9.554688 3.234375 23.683594 3.234375 40.574219 C 3.234375 44.683594 3.953125 48.632812 5.296875 52.261719 L 9.1875 50.050781 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 37.839844 70.660156 C 28.871094 70.660156 20.773438 66.789062 15.296875 60.550781 L 11.410156 62.761719 C 17.761719 70.257812 27.203125 75 37.839844 75 C 48.386719 75 57.914062 70.257812 64.265625 62.761719 L 60.457031 60.550781 C 54.902344 66.789062 46.800781 70.660156 37.839844 70.660156 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 60.933594 43.417969 C 61.011719 42.472656 61.09375 41.527344 61.09375 40.574219 C 61.09375 31.027344 55.214844 22.816406 46.882812 19.261719 L 44.347656 22.890625 C 51.566406 25.582031 56.722656 32.445312 56.722656 40.574219 C 56.722656 41.6875 56.648438 42.707031 56.488281 43.820312 L 60.933594 43.417969 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 31.328125 22.890625 L 28.789062 19.261719 C 20.457031 22.816406 14.585938 31.027344 14.585938 40.574219 C 14.585938 41.527344 14.660156 42.472656 14.742188 43.417969 L 19.1875 43.820312 C 19.03125 42.785156 18.953125 41.6875 18.953125 40.574219 C 18.871094 32.527344 24.105469 25.582031 31.328125 22.890625 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 37.839844 63.792969 C 43.074219 63.792969 47.914062 62.054688 51.882812 59.132812 L 49.980469 55.105469 C 46.722656 57.867188 42.4375 59.527344 37.839844 59.527344 C 33.234375 59.527344 29.03125 57.867188 25.699219 55.105469 L 23.789062 59.132812 C 27.761719 61.96875 32.597656 63.792969 37.839844 63.792969 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 31.570312 16.738281 L 36.882812 24.394531 C 37.363281 25.027344 38.234375 25.027344 38.710938 24.394531 L 44.023438 16.738281 C 44.5 16.027344 44.023438 15 43.074219 15 L 40.0625 15 L 40.0625 2.289062 C 40.0625 1.023438 39.023438 0 37.761719 0 C 36.488281 0 35.457031 1.023438 35.457031 2.289062 L 35.457031 15 L 32.4375 15 C 31.648438 15 31.09375 16.027344 31.570312 16.738281 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <path
                    d="M 18.234375 57.949219 C 18.710938 58.734375 19.820312 58.660156 20.21875 57.867188 L 24.1875 49.5 C 24.507812 48.785156 24.023438 48 23.234375 47.921875 L 13.953125 47.132812 C 13.074219 47.046875 12.4375 48 12.914062 48.785156 L 14.425781 51.394531 L 3.398438 57.707031 C 2.285156 58.339844 1.882812 59.765625 2.519531 60.863281 C 3.15625 61.96875 4.589844 62.367188 5.699219 61.738281 L 16.730469 55.425781 L 18.234375 57.949219 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                  <g clip-path="url(#942e030f84)">
                    <path
                      d="M 72.355469 57.707031 L 61.328125 51.394531 L 62.832031 48.785156 C 63.316406 48 62.679688 47.046875 61.800781 47.132812 L 52.519531 47.921875 C 51.722656 48 51.246094 48.785156 51.566406 49.5 L 55.535156 57.867188 C 55.933594 58.660156 57.042969 58.734375 57.519531 57.949219 L 59.023438 55.34375 L 70.054688 61.65625 C 71.164062 62.289062 72.597656 61.894531 73.234375 60.789062 C 73.789062 59.765625 73.46875 58.339844 72.355469 57.707031 "
                      fill-opacity="1" fill-rule="nonzero"></path>
                  </g>
                  <path
                    d="M 31.882812 39.15625 C 32.679688 38.371094 33.953125 38.371094 34.742188 39.15625 L 36.246094 40.65625 L 40.773438 36.160156 C 41.566406 35.371094 42.832031 35.371094 43.628906 36.160156 C 44.425781 36.949219 44.425781 38.210938 43.628906 39 L 37.679688 44.917969 C 37.285156 45.316406 36.800781 45.550781 36.246094 45.550781 C 35.691406 45.550781 35.214844 45.316406 34.820312 44.917969 L 31.882812 42 C 31.09375 41.207031 31.09375 39.945312 31.882812 39.15625 Z M 37.839844 52.5 C 44.425781 52.5 49.820312 47.214844 49.820312 40.574219 C 49.820312 33.945312 44.425781 28.65625 37.839844 28.65625 C 31.253906 28.65625 25.851562 33.945312 25.851562 40.574219 C 25.851562 47.214844 31.253906 52.5 37.839844 52.5 "
                    fill-opacity="1" fill-rule="nonzero"></path>
                </g>
              </g>
            </g>
          </svg><label class="text-center">Optimiser</label>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="500" class="max-w-7xl mx-auto text-gray-800 aos-init">
        <ul></ul>
        <p class=" text-center ">C’est le moyen le plus rapide et le plus fiable pour échanger vos documents
          commerciaux de manière <label class="text-digitus-orange">automatisée</label> et en <label
            class="text-digitus-orange">parfaite intégration</label> avec vos systèmes d'information.
          Obtenez facilement un acquittement de non-répudiation sur la réception, l'<label
            class="text-digitus-orange">intégrité</label>, la <label class="text-digitus-orange">confidentialité</label>
          et la bonne intégration de vos messages.</p>
      </div>
      <br /><br />
    </div>
  </section>
  <!-- Accelerator your business  END-->

  <!-- commercial data are dematerialized Start -->
  <section id="edi-dematerialiser" class="-mt-56 sm:-mt-36 md:-mt-18 xl:mt-0 bg-img-edi-demat relative">
    <div class="container px-4 mx-auto max-w-5xl pt-72 sm:pt-44 pb-12 text-white">
      <div class="mx-auto">
        <div>
          <h2 data-aos="fade-up" data-aos-duration="500"
            class="text-white text-center leading-title mt-24 md:mt-12 xl:mt-8 font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold aos-init aos-animate">
            Grâce à <label class="text-digitus-orange">l'EDI</label>, vos
            documents-papiers et
            données
            commerciaux sont <label class="text-digitus-orange">dématérialisés</label></h2>
        </div>
        <div data-aos="fade-up" data-aos-duration="500"
          class="flex flex-wrap gap-12 justify-center items-center mt-12 aos-init aos-animate">
          <ul class="smallmcheckulgreen">
            <li>Bon de commande</li>
            <li>Facture</li>
            <li>Avis d’expédition</li>
            <li>Etat des stocks</li>
            <li>Confirmation de réservation</li>
          </ul>
          <ul class="smallmcheckulgreen">
            <li>Etat d'inventaire</li>
            <li>Accusé de réception de livraison</li>
            <li>Statut de transport</li>
            <li>Demande de retour</li>
            <li>Ordre de livraison</li>
          </ul>
          <ul class="smallmcheckulgreen">
            <li>Confirmation de réception</li>
            <li>Modification de commande</li>
            <li>Confirmation des réceptions</li>
            <li>Catalogues</li>
            <li>Réservation ferme</li>
          </ul>
          <ul class="smallmcheckulgreen">
            <li>Prévisions de livraison</li>
            <li>Ordre de prestation logistique</li>
            <li>Avis de réception</li>
            <li>Contrat de transport</li>
            <li>et d'autres encore...</li>
          </ul>
        </div>
        <div data-aos="fade-up" data-aos-duration="500" class="aos-init"><img alt="Calendar | digitus"
            src="./assets/images/days.b30bd321.svg" width="100" height="27" decoding="async" data-nimg="1"
            class="w-2/3 xl:w-1/2 mx-auto mt-8 z-20 relative" loading="lazy" style="color:transparent">
        </div>
        <p class="mt-8 aos-init" data-aos="fade-up" data-aos-duration="500">Le passage à <label
            class="text-digitus-orange font-semibold">l’EDI</label> (Electronic Data Interchange) signifie
          la <label class="text-digitus-orange font-semibold">minimisation des interventions manuelles</label>
          dans vos processus d'échanges B2B. Les données peuvent être <label
            class="text-digitus-orange font-semibold">transmises, vérifiées et traitées</label> entre
          partenaires commerciaux au-delà des contraintes d'interopérabilités entre les systèmes
          d'informations.<br><br>A titre d’exemple, la gestion d’une commande papier mettant +/- 4 jours à
          être traitée de manière classique est réduite à une heure avec la mise en place d’une Solution EDI.
        </p>
      </div>
    </div>
  </section>
   <!-- commercial data are dematerialized End -->

   <!-- electronic data interchange work Start -->
  <section id="edi-echange" class="py-24 bg-white relative">
    <div class="container px-4 mx-auto max-w-7xl">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center aos-init aos-animate">
        L’échange de données informatisé, <label class="text-digitus-tradexpress">ça fonctionne comment
          ?</label></h2>
      <div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-12">
        <div data-aos="fade-up" data-aos-duration="500" class="hidden md:block w-1/4 aos-init aos-animate">
          <img alt="digitus EDI Excellence | digitus" src="./assets/images/edi.308aff61.svg" width="552" height="362"
            decoding="async" data-nimg="1" class="w-full z-20 relative" loading="lazy" style="color: transparent;">
        </div>
        <div data-aos="fade-right" data-aos-duration="500" class="xl:pl-12 md:w-3/4 aos-init aos-animate">Le
          fonctionnement de l’EDI repose sur un principe logique.<br><br>Par exemple, via l’EDI, des données
          spécifiques de l’application de gestion de stock de votre partenaire commercial peuvent être
          automatiquement sollicitées. Elles seront transmises et intégrées en quelques instants dans le
          système informatique du destinataire.<br><br>Les informations sont dans un premier temps
          transformées dans un format <label class="text-digitus-orange">EDI standardisé</label>, qui seront
          rendues lisibles, exploitables et transmissibles par une multitude de protocoles tels que l’AS2, le
          X400, FTPS et d'autres qui vous relient à vos partenaires commerciaux.<br><br>Grâce à l’EDI, tout
          type de documents et données peuvent être aisément <label class="text-digitus-orange">échangés</label>, <label
            class="text-digitus-orange">contrôlés</label> et <label class="text-digitus-orange">intégrés</label> entre
          les partenaires, les ERP et tous les
          écosystèmes informatiques.<br><br>Un large panel de formats et de syntaxes de message existe dans le
          monde de l’EDI. Ils permettent l’envoie, l'intégration tout en assurant fiabilité, sécurité et
          traçabilité.</div>
      </div>
    </div>
  </section>
  <!-- electronic data interchange work End -->


<!-- EDI standards and formats Start -->
  <section class="py-24 bg-white relative">
    <div class="container px-4 mx-auto max-w-6xl">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center">
        Quels sont <label class="text-digitus-tradexpress">les normes et formats</label> EDI ?</h2>
      <p data-aos="fade-up" data-aos-duration="500" class="text-center mt-8"><label
          class="text-digitus-tradexpress">L’EDIFACT</label> et le <label class="text-digitus-tradexpress">XML</label>
        constituent une partie des normes internationales de
        l’EDI.
        Cependant, bien d’autres formats et nomenclatures spécifiques sont aujourd’hui utilisés en fonction des
        secteurs et des régions.</p>
      <div data-aos="fade-up" data-aos-duration="500" class="mt-12 max-w-5xl mx-auto ">
        <div data-aos="fade-up" data-aos-duration="500"
          class="ml-6 sm:ml-0 md:ml-[80px] lg:ml-[153px] flex flex-col sm:flex-row xl:gap-12 sm:justify-center sm:items-center mt-12">
          <ul class="sm:w-1/3 smallmcheckulgreen">
            <li>Open Trans</li>
            <li>Factur-X</li>
            <li>XRechnung</li>
            <li>ZugFerd</li>
            <li>ANSI X.12</li>
            <li>SWIFT</li>
          </ul>
          <ul class="sm:w-1/3 smallmcheckulgreen">
            <li>MS Dynamics</li>
            <li>cXML</li>
            <li>EDIFACT</li>
            <li>all EDIFACT Subsets</li>
            <li>SAP IDOC Flat + XML</li>
            <li>VDA</li>
          </ul>
          <ul class="sm:w-1/3 smallmcheckulgreen">
            <li>Odette</li>
            <li>SAP XI XML</li>
            <li>BMECat</li>
            <li>PDF</li>
            <li>PDF/a</li>
            <li>Flat Files</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- EDI standards and formats End -->


<!-- EDIFACT standard Start -->
  <section class="bg-img-edifact relative">
    <div class="container px-4 mx-auto pt-12 pb-12 ">
      <div class="mx-auto">
        <h2 data-aos="fade-up" data-aos-duration="500"
          class="text-center leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold">
          La <label class="text-digitus-orange">norme EDIFACT</label>, c’est quoi ?</h2>
        <div data-aos="fade-up" data-aos-duration="500"
          class="max-w-5xl mx-auto bg-white bg-opacity-20 text-white rounded-xl mt-8 mb-8 p-12">
          <p>Le format de message le plus connu à l’échelle internationale est <label
              class="text-digitus-orange">l’EDIFACT</label> mais il en existe d’autres comme <label
              class="text-digitus-orange">ANSI X.12, ODETTE, SWIFT, ZUGFeRD</label> et d’autres utilisés
            dans
            certains secteurs.<br /><br />La norme EDIFACT est appliquée en Europe et à travers le monde.
            Elle
            permet une parfaite communication des informations avec vos partenaires commerciaux, quelles que
            soient
            les règles en vigueur dans leur pays. Grâce à cette norme internationale et intersectorielle,
            tous les
            documents commerciaux peuvent être dématérialisés via l’EDI, en garantissant l’interopérabilité
            des
            systèmes d’information.<br /><br />Il existe au total plus de 200 types de messages EDIFACT
            uniques qui
            sont reconnus et utilisés de la même manière à l’échelle internationale.</p>
          <div class="flex flex-col md:flex-row gap-8 mt-8">
            <ul class="md:w-1/2 smallmcheckulgreen">
              <li>ORDERS (commande)</li>
              <li>ORDCHG (Modification de commande)</li>
              <li>ORDRSP (Réponse à la commande)</li>
              <li>INVOIC (Factures)</li>
              <li>HANMOV (Ordre de livraison)</li>
            </ul>
            <ul class="md:w-1/2 smallmcheckulgreen">
              <li>PRICAT (Catalogue de prix)</li>
              <li>DESADV (Avis d’expédition)</li>
              <li>RECADV (Confirmation de réception)</li>
              <li>Etc. (les offres, documents de transport, extraits de compte et une multitude d’autres
                messages)
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- EDIFACT standard END -->


  <!-- electronic data interchange work Start -->
  <section class="py-24 bg-white relative">
    <div class="container px-4 mx-auto">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center">
        L’échange de données informatisé, <label class="text-digitus-tradexpress">ça fonctionne comment
          ?</label>
      </h2>
      <div class="flex flex-col xl:flex-row justify-center items-center gap-8 mt-18">
        <div data-aos="fade-up" data-aos-duration="500" class="xl:w-1/2"><img alt="Hubtimize | digitus"
            src="./assets/images/hub.jpg" width="800" height="298" decoding="async" data-nimg="1" class="w-full z-20 relative"
            loading="lazy" style="color:transparent" /></div>
        <div data-aos="fade-right" data-aos-duration="500" class="xl:pl-12 xl:w-1/2">
          <p class="text-justify">Chez <label class="text-digitus-tradexpress">Digitus</label>, nous proposons
            l’EDI
            sous sa meilleure forme et de la manière la plus adaptée à votre configuration. Par exemple, un
            document
            commercial comme une <label class="text-digitus-tradexpress">facture</label> (INVOICE) contenant
            toutes
            les informations nécessaires est généré depuis l’ERP ou l’application de gestion de stock de
            l’émetteur.
          </p>
          <div class="flex flex-col md:flex-row gap-12 mt-8">
            <p class="text-justify">Le module de traducteur EDI prend en charge la conversion des données
              dans le
              format convenu avec le destinataire et entame la transmission du message EDI à travers le
              protocole de
              communication dédié.</p>
            <p class="text-justify">A la réception du message EDI chez le destinataire, les données sont
              ainsi
              adaptées aux exigences structurelles et y sont directement intégrées pour être traitées
              automatiquement.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- electronic data interchange work End -->


  <!-- The benefits of EDI Start -->
  <section id="benefices-directs" class="py-18 bg-slate-50 relative">
    <div class="container px-4 mx-auto">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center">
        <label class="text-digitus-tradexpress">Les bénéfices</label> de l&#x27;EDI
      </h2>
      <p data-aos="fade-up" data-aos-duration="500" class="text-center mt-8 mx-auto">L’EDI joue un rôle
        fondamental
        dans le bon fonctionnement de votre <label class="text-digitus-tradexpress">business</label>, la <label
          class="text-digitus-tradexpress">numérisation</label> de votre entreprise, la réduction des coûts et
        l’efficacité des <label class="text-digitus-tradexpress">flux</label> de travail <label
          class="text-digitus-tradexpress">B2B</label>. Grâce à l’utilisation d’un langage commun et aux
        échanges
        standardisés, tirez parti de la technologie pour augmenter votre productivité :</p>
      <div class="mt-12">
        <div data-aos="fade-up" data-aos-duration="500"
          class="flex flex-col md:flex-row items-center justify-center gap-12 md:gap-4 mt-18 mb-12 text-gray-400 mx-auto">
          <div class="activeTabsIBMSecure w-1/4 flex flex-col items-center gap-4 cursor-pointer"><svg fill="#9ca3af"
              class="h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <defs>
                <clipPath id="7beb2fed34">
                  <path d="M 13 6 L 73.6875 6 L 73.6875 75 L 13 75 Z M 13 6 " clip-rule="nonzero">
                  </path>
                </clipPath>
                <clipPath id="0da7e0742b">
                  <path d="M 1.6875 36 L 28 36 L 28 42 L 1.6875 42 Z M 1.6875 36 " clip-rule="nonzero"></path>
                </clipPath>
              </defs>
              <g clip-path="url(#7beb2fed34)">
                <path
                  d="M 21.089844 18.429688 C 26.058594 14.429688 32.382812 12.035156 39.265625 12.035156 C 55.230469 12.035156 68.195312 24.929688 68.195312 40.8125 C 68.195312 56.695312 55.230469 69.59375 39.265625 69.59375 C 30.707031 69.59375 23.007812 65.886719 17.710938 60 C 16.742188 58.921875 15.078125 58.832031 13.996094 59.792969 C 12.914062 60.757812 12.820312 62.414062 13.789062 63.488281 C 20.050781 70.449219 29.148438 74.824219 39.265625 74.824219 C 58.132812 74.824219 73.457031 59.585938 73.457031 40.8125 C 73.457031 22.042969 58.132812 6.800781 39.265625 6.800781 C 31.128906 6.800781 23.652344 9.636719 17.785156 14.363281 C 16.65625 15.269531 16.480469 16.917969 17.390625 18.042969 C 18.304688 19.164062 19.960938 19.335938 21.089844 18.429688 Z M 21.089844 18.429688 "
                  fill-opacity="1" fill-rule="evenodd"></path>
              </g>
              <path
                d="M 38.390625 9.417969 L 38.390625 2.441406 C 38.390625 0.996094 37.210938 -0.175781 35.757812 -0.175781 C 34.308594 -0.175781 33.128906 0.996094 33.128906 2.441406 L 33.128906 9.417969 C 33.128906 10.863281 34.308594 12.035156 35.757812 12.035156 C 37.210938 12.035156 38.390625 10.863281 38.390625 9.417969 Z M 38.390625 9.417969 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <path
                d="M 45.402344 9.417969 L 45.402344 2.441406 C 45.402344 0.996094 44.222656 -0.175781 42.773438 -0.175781 C 41.320312 -0.175781 40.140625 0.996094 40.140625 2.441406 L 40.140625 9.417969 C 40.140625 10.863281 41.320312 12.035156 42.773438 12.035156 C 44.222656 12.035156 45.402344 10.863281 45.402344 9.417969 Z M 45.402344 9.417969 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <path
                d="M 62.164062 18.246094 L 67.125 13.3125 C 68.148438 12.289062 68.148438 10.632812 67.125 9.609375 C 66.097656 8.59375 64.433594 8.59375 63.40625 9.609375 L 58.445312 14.546875 C 57.417969 15.566406 57.417969 17.226562 58.445312 18.246094 C 59.472656 19.265625 61.140625 19.265625 62.164062 18.246094 Z M 62.164062 18.246094 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <path
                d="M 70.929688 12.800781 L 63.917969 5.824219 C 62.894531 4.804688 61.222656 4.804688 60.199219 5.824219 C 59.171875 6.84375 59.171875 8.503906 60.199219 9.523438 L 67.214844 16.5 C 68.238281 17.523438 69.90625 17.523438 70.929688 16.5 C 71.957031 15.480469 71.957031 13.820312 70.929688 12.800781 Z M 70.929688 12.800781 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <path
                d="M 32.253906 5.058594 L 46.277344 5.058594 C 47.730469 5.058594 48.910156 3.886719 48.910156 2.441406 C 48.910156 0.996094 47.730469 -0.175781 46.277344 -0.175781 L 32.253906 -0.175781 C 30.800781 -0.175781 29.621094 0.996094 29.621094 2.441406 C 29.621094 3.886719 30.800781 5.058594 32.253906 5.058594 Z M 32.253906 5.058594 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <path
                d="M 36.636719 21.628906 L 36.636719 39.070312 C 36.636719 39.765625 36.914062 40.429688 37.40625 40.917969 L 47.925781 51.382812 C 48.949219 52.40625 50.621094 52.40625 51.644531 51.382812 C 52.671875 50.363281 52.671875 48.703125 51.644531 47.6875 L 41.894531 37.984375 C 41.894531 37.984375 41.894531 21.628906 41.894531 21.628906 C 41.894531 20.183594 40.71875 19.011719 39.265625 19.011719 C 37.8125 19.011719 36.636719 20.183594 36.636719 21.628906 Z M 36.636719 21.628906 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <g clip-path="url(#0da7e0742b)">
                <path
                  d="M 4.199219 41.6875 L 25.238281 41.6875 C 26.691406 41.6875 27.867188 40.515625 27.867188 39.070312 C 27.867188 37.625 26.691406 36.453125 25.238281 36.453125 L 4.199219 36.453125 C 2.746094 36.453125 1.570312 37.625 1.570312 39.070312 C 1.570312 40.515625 2.746094 41.6875 4.199219 41.6875 Z M 4.199219 41.6875 "
                  fill-opacity="1" fill-rule="evenodd"></path>
              </g>
              <path
                d="M 14.71875 29.476562 L 25.238281 29.476562 C 26.691406 29.476562 27.867188 28.304688 27.867188 26.859375 C 27.867188 25.417969 26.691406 24.246094 25.238281 24.246094 L 14.71875 24.246094 C 13.265625 24.246094 12.089844 25.417969 12.089844 26.859375 C 12.089844 28.304688 13.265625 29.476562 14.71875 29.476562 Z M 14.71875 29.476562 "
                fill-opacity="1" fill-rule="evenodd"></path>
              <path
                d="M 14.71875 53.894531 L 25.238281 53.894531 C 26.691406 53.894531 27.867188 52.722656 27.867188 51.277344 C 27.867188 49.835938 26.691406 48.664062 25.238281 48.664062 L 14.71875 48.664062 C 13.265625 48.664062 12.089844 49.835938 12.089844 51.277344 C 12.089844 52.722656 13.265625 53.894531 14.71875 53.894531 Z M 14.71875 53.894531 "
                fill-opacity="1" fill-rule="evenodd"></path>
            </svg><label class="text-center">Gain de temps</label></div>
          <div class=" w-1/4 flex flex-col items-center gap-4 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <path
                d="M 10.175781 29.070312 C 10.175781 28.421875 10.699219 27.898438 11.34375 27.898438 L 40.832031 27.898438 C 41.476562 27.898438 42 28.421875 42 29.070312 C 42 29.71875 41.476562 30.242188 40.832031 30.242188 L 11.34375 30.242188 C 10.699219 30.242188 10.175781 29.71875 10.175781 29.070312 Z M 37.6875 62.789062 L 11.34375 62.789062 C 10.699219 62.789062 10.175781 63.3125 10.175781 63.960938 C 10.175781 64.609375 10.699219 65.132812 11.34375 65.132812 L 37.6875 65.132812 C 38.332031 65.132812 38.855469 64.609375 38.855469 63.960938 C 38.855469 63.3125 38.332031 62.789062 37.6875 62.789062 Z M 11.34375 21.519531 L 32.511719 21.519531 C 33.15625 21.519531 33.679688 20.996094 33.679688 20.347656 C 33.679688 19.699219 33.15625 19.175781 32.511719 19.175781 L 11.34375 19.175781 C 10.699219 19.175781 10.175781 19.699219 10.175781 20.347656 C 10.175781 20.996094 10.699219 21.519531 11.34375 21.519531 Z M 74.015625 71.136719 L 71.027344 74.226562 C 70.527344 74.742188 69.867188 75 69.203125 75 C 68.566406 75 67.929688 74.761719 67.4375 74.28125 L 59.699219 66.746094 C 59.484375 67 59.167969 67.160156 58.808594 67.160156 L 52.164062 67.160156 L 52.164062 73.828125 C 52.164062 74.476562 51.644531 75 50.996094 75 L 1.175781 75 C 0.53125 75 0.0078125 74.476562 0.0078125 73.828125 L 0.0078125 9.011719 C 0.0078125 8.367188 0.53125 7.839844 1.175781 7.839844 L 7.820312 7.839844 L 7.820312 1.171875 C 7.820312 0.523438 8.34375 0 8.988281 0 L 50.738281 0 C 51.046875 0 51.34375 0.125 51.5625 0.34375 L 59.636719 8.445312 C 59.855469 8.664062 59.976562 8.964844 59.976562 9.273438 L 59.976562 39.503906 C 61.21875 41.808594 61.925781 44.445312 61.925781 47.242188 C 61.925781 50.351562 61.054688 53.261719 59.542969 55.738281 L 62.847656 58.992188 C 63.167969 58.84375 63.515625 58.761719 63.878906 58.757812 C 64.558594 58.753906 65.199219 59 65.683594 59.472656 L 73.960938 67.535156 C 74.964844 68.511719 74.988281 70.128906 74.015625 71.136719 Z M 58.164062 57.664062 C 57.851562 58.042969 57.523438 58.40625 57.175781 58.753906 L 60.078125 61.613281 L 61.101562 60.554688 Z M 59.59375 47.242188 C 59.59375 39.546875 53.355469 33.285156 45.6875 33.285156 C 38.019531 33.285156 31.785156 39.546875 31.785156 47.242188 C 31.785156 54.9375 38.019531 61.199219 45.6875 61.199219 C 53.355469 61.199219 59.59375 54.9375 59.59375 47.242188 Z M 44.09375 15.941406 L 48.179688 15.941406 L 44.09375 11.839844 Z M 51.90625 8.101562 L 55.992188 8.101562 L 51.90625 4 Z M 10.15625 7.839844 L 42.925781 7.839844 C 43.234375 7.839844 43.53125 7.964844 43.75 8.183594 L 51.824219 16.285156 C 52.042969 16.507812 52.164062 16.804688 52.164062 17.113281 L 52.164062 32.296875 C 54.257812 33.214844 56.117188 34.558594 57.640625 36.222656 L 57.640625 10.445312 L 50.738281 10.445312 C 50.09375 10.445312 49.570312 9.921875 49.570312 9.273438 L 49.570312 2.34375 L 10.15625 2.34375 Z M 49.832031 65.988281 L 49.832031 63.003906 C 48.507812 63.355469 47.121094 63.542969 45.6875 63.542969 C 40.117188 63.542969 35.191406 60.714844 32.265625 56.410156 L 11.34375 56.410156 C 10.699219 56.410156 10.175781 55.886719 10.175781 55.238281 C 10.175781 54.589844 10.699219 54.066406 11.34375 54.066406 L 30.941406 54.066406 C 30.042969 52.117188 29.515625 49.960938 29.453125 47.6875 L 11.34375 47.6875 C 10.699219 47.6875 10.175781 47.164062 10.175781 46.515625 C 10.175781 45.867188 10.699219 45.34375 11.34375 45.34375 L 29.558594 45.34375 C 29.828125 43.039062 30.578125 40.875 31.703125 38.964844 L 11.34375 38.964844 C 10.699219 38.964844 10.175781 38.441406 10.175781 37.792969 C 10.175781 37.144531 10.699219 36.621094 11.34375 36.621094 L 33.378906 36.621094 C 36.359375 33.148438 40.773438 30.941406 45.6875 30.941406 C 47.121094 30.941406 48.507812 31.128906 49.832031 31.480469 L 49.832031 18.285156 L 42.925781 18.285156 C 42.28125 18.285156 41.757812 17.761719 41.757812 17.113281 L 41.757812 10.183594 L 2.34375 10.183594 L 2.34375 72.65625 L 49.832031 72.65625 Z M 57.640625 64.816406 L 57.640625 62.496094 L 55.40625 60.292969 C 54.410156 61.046875 53.320312 61.683594 52.164062 62.191406 L 52.164062 64.816406 Z M 72.332031 69.21875 L 64.054688 61.15625 C 64.007812 61.109375 63.953125 61.097656 63.914062 61.097656 C 63.875 61.101562 63.816406 61.109375 63.769531 61.160156 L 60.78125 64.25 C 60.707031 64.328125 60.707031 64.464844 60.785156 64.539062 L 69.0625 72.601562 C 69.140625 72.675781 69.273438 72.671875 69.347656 72.597656 L 72.339844 69.503906 C 72.414062 69.425781 72.410156 69.292969 72.332031 69.21875 Z M 57.679688 47.242188 C 57.679688 53.878906 52.300781 59.277344 45.6875 59.277344 C 39.078125 59.277344 33.699219 53.878906 33.699219 47.242188 C 33.699219 40.605469 39.078125 35.207031 45.6875 35.207031 C 52.300781 35.207031 57.679688 40.605469 57.679688 47.242188 Z M 55.34375 47.242188 C 55.34375 41.898438 51.011719 37.550781 45.6875 37.550781 C 40.363281 37.550781 36.03125 41.898438 36.03125 47.242188 C 36.03125 52.585938 40.363281 56.933594 45.6875 56.933594 C 51.011719 56.933594 55.34375 52.585938 55.34375 47.242188 Z M 55.34375 47.242188 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </svg><label class="text-center">Rapidité et traçabilité des échanges</label></div>
          <div class=" w-1/4 flex flex-col items-center gap-6 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <defs>
                <clipPath id="de2f1aa789">
                  <path d="M 34 54 L 41 54 L 41 74.578125 L 34 74.578125 Z M 34 54 " clip-rule="nonzero"></path>
                </clipPath>
                <clipPath id="45281d48b8">
                  <path d="M 34 0.328125 L 41 0.328125 L 41 21 L 34 21 Z M 34 0.328125 " clip-rule="nonzero"></path>
                </clipPath>
              </defs>
              <g clip-path="url(#de2f1aa789)">
                <path
                  d="M 38.660156 67.847656 L 38.660156 54.855469 L 36.339844 54.855469 L 36.339844 67.847656 C 35.003906 68.3125 34.015625 69.589844 34.015625 71.097656 C 34.015625 73.011719 35.582031 74.578125 37.5 74.578125 C 39.417969 74.578125 40.984375 73.011719 40.984375 71.097656 C 40.984375 69.589844 39.996094 68.3125 38.660156 67.847656 Z M 37.5 72.257812 C 36.859375 72.257812 36.339844 71.734375 36.339844 71.097656 C 36.339844 70.460938 36.859375 69.9375 37.5 69.9375 C 38.140625 69.9375 38.660156 70.460938 38.660156 71.097656 C 38.660156 71.734375 38.140625 72.257812 37.5 72.257812 Z M 37.5 72.257812 "
                  fill-opacity="1" fill-rule="nonzero"></path>
              </g>
              <path
                d="M 60.730469 54.855469 C 59.222656 54.855469 57.945312 55.839844 57.480469 57.175781 L 50.277344 57.175781 L 50.277344 51.375 L 47.953125 51.375 L 47.953125 57.175781 C 47.953125 58.453125 49 59.496094 50.277344 59.496094 L 57.480469 59.496094 C 57.945312 60.832031 59.222656 61.816406 60.730469 61.816406 C 62.648438 61.816406 64.21875 60.25 64.21875 58.335938 C 64.21875 56.421875 62.648438 54.855469 60.730469 54.855469 Z M 60.730469 59.496094 C 60.09375 59.496094 59.570312 58.972656 59.570312 58.335938 C 59.570312 57.699219 60.09375 57.175781 60.730469 57.175781 C 61.371094 57.175781 61.894531 57.699219 61.894531 58.335938 C 61.894531 58.972656 61.371094 59.496094 60.730469 59.496094 Z M 60.730469 59.496094 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <g clip-path="url(#45281d48b8)">
                <path
                  d="M 36.339844 7.058594 L 36.339844 20.050781 L 38.660156 20.050781 L 38.660156 7.058594 C 39.996094 6.59375 40.984375 5.316406 40.984375 3.808594 C 40.984375 1.894531 39.417969 0.328125 37.5 0.328125 C 35.582031 0.328125 34.015625 1.894531 34.015625 3.808594 C 34.015625 5.316406 35.003906 6.59375 36.339844 7.058594 Z M 37.5 2.648438 C 38.140625 2.648438 38.660156 3.171875 38.660156 3.808594 C 38.660156 4.445312 38.140625 4.96875 37.5 4.96875 C 36.859375 4.96875 36.339844 4.445312 36.339844 3.808594 C 36.339844 3.171875 36.859375 2.648438 37.5 2.648438 Z M 37.5 2.648438 "
                  fill-opacity="1" fill-rule="nonzero"></path>
              </g>
              <path
                d="M 14.265625 16.570312 C 15.777344 16.570312 17.054688 15.585938 17.519531 14.25 L 24.722656 14.25 L 24.722656 20.050781 L 27.046875 20.050781 L 27.046875 14.25 C 27.046875 12.972656 26 11.929688 24.722656 11.929688 L 17.519531 11.929688 C 17.054688 10.59375 15.777344 9.609375 14.265625 9.609375 C 12.351562 9.609375 10.78125 11.175781 10.78125 13.089844 C 10.78125 15.003906 12.351562 16.570312 14.265625 16.570312 Z M 14.265625 11.929688 C 14.90625 11.929688 15.429688 12.453125 15.429688 13.089844 C 15.429688 13.726562 14.90625 14.25 14.265625 14.25 C 13.628906 14.25 13.105469 13.726562 13.105469 13.089844 C 13.105469 12.453125 13.628906 11.929688 14.265625 11.929688 Z M 14.265625 11.929688 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 50.277344 14.25 L 57.480469 14.25 C 57.945312 15.585938 59.222656 16.570312 60.730469 16.570312 C 62.648438 16.570312 64.21875 15.003906 64.21875 13.089844 C 64.21875 11.175781 62.648438 9.609375 60.730469 9.609375 C 59.222656 9.609375 57.945312 10.59375 57.480469 11.929688 L 50.277344 11.929688 C 49 11.929688 47.953125 12.972656 47.953125 14.25 L 47.953125 20.050781 L 50.277344 20.050781 Z M 60.730469 11.929688 C 61.371094 11.929688 61.894531 12.453125 61.894531 13.089844 C 61.894531 13.726562 61.371094 14.25 60.730469 14.25 C 60.09375 14.25 59.570312 13.726562 59.570312 13.089844 C 59.570312 12.453125 60.09375 11.929688 60.730469 11.929688 Z M 60.730469 11.929688 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 44.46875 50.214844 L 42.144531 50.214844 L 42.144531 49.054688 L 54.34375 49.054688 C 56.261719 49.054688 57.828125 47.488281 57.828125 45.574219 L 57.828125 25.851562 C 57.828125 23.9375 56.261719 22.371094 54.34375 22.371094 L 20.65625 22.371094 C 18.738281 22.371094 17.171875 23.9375 17.171875 25.851562 L 17.171875 45.574219 C 17.171875 47.488281 18.738281 49.054688 20.65625 49.054688 L 32.851562 49.054688 L 32.851562 50.214844 L 30.53125 50.214844 C 29.890625 50.214844 29.367188 50.738281 29.367188 51.375 C 29.367188 52.011719 29.890625 52.535156 30.53125 52.535156 L 44.46875 52.535156 C 45.109375 52.535156 45.632812 52.011719 45.632812 51.375 C 45.632812 50.738281 45.109375 50.214844 44.46875 50.214844 Z M 39.824219 49.054688 L 39.824219 50.214844 L 35.175781 50.214844 L 35.175781 49.054688 Z M 19.496094 45.574219 L 19.496094 25.851562 C 19.496094 25.214844 20.019531 24.691406 20.65625 24.691406 L 54.34375 24.691406 C 54.980469 24.691406 55.503906 25.214844 55.503906 25.851562 L 55.503906 45.574219 C 55.503906 46.210938 54.980469 46.734375 54.34375 46.734375 L 20.65625 46.734375 C 20.019531 46.734375 19.496094 46.210938 19.496094 45.574219 Z M 19.496094 45.574219 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 44.703125 32.753906 C 44.933594 31.769531 44.703125 30.609375 43.890625 29.855469 L 43.425781 29.332031 C 42.84375 28.75 42.03125 28.402344 41.273438 28.402344 C 41.042969 28.402344 40.753906 28.460938 40.519531 28.519531 C 39.9375 27.589844 39.011719 27.011719 37.847656 27.011719 L 37.152344 27.011719 C 36.046875 27.011719 35.0625 27.589844 34.539062 28.519531 C 34.304688 28.460938 34.015625 28.402344 33.78125 28.402344 C 32.96875 28.402344 32.214844 28.75 31.632812 29.332031 L 31.109375 29.796875 C 30.296875 30.609375 30.066406 31.710938 30.296875 32.695312 C 29.367188 33.277344 28.789062 34.203125 28.789062 35.363281 L 28.789062 36.0625 C 28.789062 37.164062 29.367188 38.148438 30.296875 38.671875 C 30.066406 39.65625 30.296875 40.816406 31.109375 41.570312 L 31.632812 42.09375 C 32.214844 42.675781 33.027344 43.023438 33.78125 43.023438 C 34.015625 43.023438 34.304688 42.964844 34.539062 42.90625 C 35.0625 43.777344 36.046875 44.414062 37.152344 44.414062 L 37.847656 44.414062 C 38.953125 44.414062 39.9375 43.835938 40.460938 42.90625 C 40.695312 42.964844 40.984375 43.023438 41.21875 43.023438 C 42.03125 43.023438 42.785156 42.675781 43.367188 42.09375 L 43.890625 41.570312 C 44.703125 40.757812 44.933594 39.65625 44.703125 38.671875 C 45.574219 38.148438 46.210938 37.164062 46.210938 36.0625 L 46.210938 35.363281 C 46.210938 34.203125 45.632812 33.277344 44.703125 32.753906 Z M 43.890625 36.0625 C 43.890625 36.46875 43.597656 36.757812 43.25 36.757812 L 42.320312 36.757812 C 42.203125 37.335938 41.972656 37.859375 41.625 38.382812 L 42.261719 39.019531 C 42.496094 39.25 42.496094 39.714844 42.203125 39.949219 L 41.683594 40.46875 C 41.507812 40.644531 41.332031 40.703125 41.160156 40.703125 C 40.984375 40.703125 40.867188 40.644531 40.753906 40.527344 L 40.113281 39.890625 C 39.648438 40.179688 39.066406 40.410156 38.488281 40.585938 L 38.488281 41.511719 C 38.488281 41.863281 38.195312 42.152344 37.789062 42.152344 L 37.09375 42.152344 C 36.6875 42.152344 36.394531 41.863281 36.394531 41.511719 L 36.394531 40.585938 C 35.816406 40.46875 35.292969 40.238281 34.769531 39.890625 L 34.132812 40.527344 C 34.015625 40.644531 33.839844 40.703125 33.726562 40.703125 C 33.550781 40.703125 33.375 40.644531 33.203125 40.46875 L 32.679688 39.949219 C 32.390625 39.65625 32.390625 39.25 32.621094 39.019531 L 33.261719 38.382812 C 32.96875 37.917969 32.738281 37.335938 32.5625 36.757812 L 31.632812 36.757812 C 31.285156 36.757812 30.996094 36.46875 30.996094 36.0625 L 30.996094 35.363281 C 30.996094 34.957031 31.285156 34.667969 31.632812 34.667969 L 32.5625 34.667969 C 32.679688 34.089844 32.910156 33.566406 33.261719 33.042969 L 32.621094 32.40625 C 32.390625 32.175781 32.390625 31.710938 32.679688 31.476562 L 33.203125 30.957031 C 33.375 30.78125 33.550781 30.722656 33.726562 30.722656 C 33.898438 30.722656 34.015625 30.78125 34.132812 30.898438 L 34.769531 31.535156 C 35.234375 31.246094 35.816406 31.015625 36.394531 30.839844 L 36.394531 29.910156 C 36.394531 29.5625 36.6875 29.273438 37.09375 29.273438 L 37.789062 29.273438 C 38.195312 29.273438 38.488281 29.5625 38.488281 29.910156 L 38.488281 30.839844 C 39.066406 30.957031 39.589844 31.1875 40.113281 31.535156 L 40.753906 30.898438 C 40.867188 30.78125 41.042969 30.722656 41.160156 30.722656 C 41.332031 30.722656 41.507812 30.78125 41.683594 30.957031 L 42.203125 31.476562 C 42.496094 31.769531 42.496094 32.175781 42.261719 32.40625 L 41.625 33.042969 C 41.914062 33.507812 42.148438 34.089844 42.320312 34.667969 L 43.25 34.667969 C 43.597656 34.667969 43.890625 34.957031 43.890625 35.363281 Z M 43.890625 36.0625 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 37.5 32.230469 C 35.582031 32.230469 34.015625 33.796875 34.015625 35.710938 C 34.015625 37.628906 35.582031 39.191406 37.5 39.191406 C 39.417969 39.191406 40.984375 37.628906 40.984375 35.710938 C 40.984375 33.796875 39.417969 32.230469 37.5 32.230469 Z M 37.5 36.871094 C 36.859375 36.871094 36.339844 36.351562 36.339844 35.710938 C 36.339844 35.074219 36.859375 34.550781 37.5 34.550781 C 38.140625 34.550781 38.660156 35.074219 38.660156 35.710938 C 38.660156 36.351562 38.140625 36.871094 37.5 36.871094 Z M 37.5 36.871094 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 25.304688 32.230469 L 22.980469 32.230469 C 22.339844 32.230469 21.816406 32.753906 21.816406 33.390625 C 21.816406 34.03125 22.339844 34.550781 22.980469 34.550781 L 25.304688 34.550781 C 25.941406 34.550781 26.464844 34.03125 26.464844 33.390625 C 26.464844 32.753906 25.941406 32.230469 25.304688 32.230469 Z M 25.304688 32.230469 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 25.304688 36.871094 L 22.980469 36.871094 C 22.339844 36.871094 21.816406 37.394531 21.816406 38.03125 C 21.816406 38.671875 22.339844 39.191406 22.980469 39.191406 L 25.304688 39.191406 C 25.941406 39.191406 26.464844 38.671875 26.464844 38.03125 C 26.464844 37.394531 25.941406 36.871094 25.304688 36.871094 Z M 25.304688 36.871094 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 52.019531 32.230469 L 49.695312 32.230469 C 49.058594 32.230469 48.535156 32.753906 48.535156 33.390625 C 48.535156 34.03125 49.058594 34.550781 49.695312 34.550781 L 52.019531 34.550781 C 52.660156 34.550781 53.183594 34.03125 53.183594 33.390625 C 53.183594 32.753906 52.660156 32.230469 52.019531 32.230469 Z M 52.019531 32.230469 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 52.019531 36.871094 L 49.695312 36.871094 C 49.058594 36.871094 48.535156 37.394531 48.535156 38.03125 C 48.535156 38.671875 49.058594 39.191406 49.695312 39.191406 L 52.019531 39.191406 C 52.660156 39.191406 53.183594 38.671875 53.183594 38.03125 C 53.183594 37.394531 52.660156 36.871094 52.019531 36.871094 Z M 52.019531 36.871094 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 7.878906 42.09375 C 7.878906 42.246094 7.847656 42.394531 7.789062 42.539062 C 7.730469 42.679688 7.648438 42.804688 7.539062 42.914062 C 7.429688 43.023438 7.304688 43.105469 7.160156 43.164062 C 7.019531 43.222656 6.871094 43.253906 6.71875 43.253906 C 6.5625 43.253906 6.414062 43.222656 6.273438 43.164062 C 6.128906 43.105469 6.003906 43.023438 5.894531 42.914062 C 5.785156 42.804688 5.703125 42.679688 5.644531 42.539062 C 5.585938 42.394531 5.554688 42.246094 5.554688 42.09375 C 5.554688 41.941406 5.585938 41.792969 5.644531 41.648438 C 5.703125 41.507812 5.785156 41.382812 5.894531 41.273438 C 6.003906 41.164062 6.128906 41.082031 6.273438 41.023438 C 6.414062 40.964844 6.5625 40.933594 6.71875 40.933594 C 6.871094 40.933594 7.019531 40.964844 7.160156 41.023438 C 7.304688 41.082031 7.429688 41.164062 7.539062 41.273438 C 7.648438 41.382812 7.730469 41.507812 7.789062 41.648438 C 7.847656 41.792969 7.878906 41.941406 7.878906 42.09375 Z M 7.878906 42.09375 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 69.445312 42.09375 C 69.445312 42.246094 69.414062 42.394531 69.355469 42.539062 C 69.296875 42.679688 69.214844 42.804688 69.105469 42.914062 C 68.996094 43.023438 68.871094 43.105469 68.726562 43.164062 C 68.585938 43.222656 68.4375 43.253906 68.28125 43.253906 C 68.128906 43.253906 67.980469 43.222656 67.839844 43.164062 C 67.695312 43.105469 67.570312 43.023438 67.460938 42.914062 C 67.351562 42.804688 67.269531 42.679688 67.210938 42.539062 C 67.152344 42.394531 67.121094 42.246094 67.121094 42.09375 C 67.121094 41.941406 67.152344 41.792969 67.210938 41.648438 C 67.269531 41.507812 67.351562 41.382812 67.460938 41.273438 C 67.570312 41.164062 67.695312 41.082031 67.839844 41.023438 C 67.980469 40.964844 68.128906 40.933594 68.28125 40.933594 C 68.4375 40.933594 68.585938 40.964844 68.726562 41.023438 C 68.871094 41.082031 68.996094 41.164062 69.105469 41.273438 C 69.214844 41.382812 69.296875 41.507812 69.355469 41.648438 C 69.414062 41.792969 69.445312 41.941406 69.445312 42.09375 Z M 69.445312 42.09375 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 24.722656 57.175781 L 17.519531 57.175781 C 17.054688 55.839844 15.777344 54.855469 14.265625 54.855469 C 12.351562 54.855469 10.78125 56.421875 10.78125 58.335938 C 10.78125 60.25 12.351562 61.816406 14.265625 61.816406 C 15.777344 61.816406 17.054688 60.832031 17.519531 59.496094 L 24.722656 59.496094 C 26 59.496094 27.046875 58.453125 27.046875 57.175781 L 27.046875 51.375 L 24.722656 51.375 Z M 14.265625 59.496094 C 13.628906 59.496094 13.105469 58.972656 13.105469 58.335938 C 13.105469 57.699219 13.628906 57.175781 14.265625 57.175781 C 14.90625 57.175781 15.429688 57.699219 15.429688 58.335938 C 15.429688 58.972656 14.90625 59.496094 14.265625 59.496094 Z M 14.265625 59.496094 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 74.441406 34.4375 C 73.160156 32.695312 70.839844 31.652344 68.28125 31.652344 C 65.726562 31.652344 63.347656 32.695312 62.125 34.4375 C 61.71875 34.957031 61.835938 35.65625 62.359375 36.0625 C 62.882812 36.46875 63.578125 36.351562 63.984375 35.828125 C 64.796875 34.667969 66.484375 33.972656 68.28125 33.972656 C 70.082031 33.972656 71.769531 34.667969 72.582031 35.828125 C 72.8125 36.117188 73.160156 36.292969 73.511719 36.292969 C 73.742188 36.292969 73.976562 36.234375 74.207031 36.0625 C 74.730469 35.710938 74.847656 34.957031 74.441406 34.4375 Z M 74.441406 34.4375 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 68.28125 36.292969 C 66.425781 36.292969 64.738281 37.164062 63.8125 38.554688 C 63.460938 39.078125 63.636719 39.832031 64.160156 40.179688 C 64.683594 40.527344 65.4375 40.355469 65.785156 39.832031 C 66.25 39.078125 67.238281 38.613281 68.28125 38.613281 C 69.328125 38.613281 70.316406 39.078125 70.78125 39.832031 C 71.011719 40.179688 71.359375 40.355469 71.769531 40.355469 C 72 40.355469 72.175781 40.296875 72.40625 40.179688 C 72.929688 39.832031 73.105469 39.136719 72.753906 38.554688 C 71.824219 37.164062 70.140625 36.292969 68.28125 36.292969 Z M 68.28125 36.292969 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 2.417969 35.828125 C 3.230469 34.667969 4.917969 33.972656 6.71875 33.972656 C 8.515625 33.972656 10.203125 34.667969 11.015625 35.828125 C 11.246094 36.117188 11.597656 36.292969 11.945312 36.292969 C 12.175781 36.292969 12.410156 36.234375 12.640625 36.0625 C 13.164062 35.710938 13.28125 34.957031 12.875 34.4375 C 11.597656 32.695312 9.273438 31.652344 6.71875 31.652344 C 4.160156 31.652344 1.78125 32.695312 0.558594 34.4375 C 0.152344 34.957031 0.269531 35.65625 0.792969 36.0625 C 1.316406 36.46875 2.070312 36.351562 2.417969 35.828125 Z M 2.417969 35.828125 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 11.1875 38.554688 C 10.261719 37.164062 8.574219 36.292969 6.71875 36.292969 C 4.859375 36.292969 3.175781 37.164062 2.246094 38.554688 C 1.894531 39.078125 2.070312 39.832031 2.59375 40.179688 C 3.117188 40.527344 3.871094 40.355469 4.21875 39.832031 C 4.683594 39.078125 5.671875 38.613281 6.71875 38.613281 C 7.761719 38.613281 8.75 39.078125 9.214844 39.832031 C 9.445312 40.179688 9.796875 40.351562 10.203125 40.351562 C 10.433594 40.351562 10.609375 40.296875 10.839844 40.179688 C 11.363281 39.832031 11.539062 39.078125 11.1875 38.554688 Z M 11.1875 38.554688 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </svg> <label class="text-center">Automatisation du traitement</label></div>
          <div class=" w-1/4 flex flex-col items-center gap-6 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <defs>
                <clipPath id="541e3cc2f2">
                  <path d="M 24 0.601562 L 71 0.601562 L 71 38 L 24 38 Z M 24 0.601562 " clip-rule="nonzero"></path>
                </clipPath>
                <clipPath id="efd0f8f0d2">
                  <path
                    d="M 0.464844 34.3125 L 74.714844 34.3125 L 74.714844 74.058594 L 0.464844 74.058594 Z M 0.464844 34.3125 "
                    clip-rule="nonzero"></path>
                </clipPath>
              </defs>
              <g clip-path="url(#541e3cc2f2)">
                <path
                  d="M 48.0625 30.769531 C 47.078125 31.820312 45.042969 33.957031 43.371094 33.957031 L 43.269531 33.957031 C 41.65625 33.957031 39.6875 32.003906 38.609375 30.90625 L 28.289062 19.261719 C 28.269531 19.242188 28.253906 19.234375 28.234375 19.214844 C 26.683594 17.636719 26.714844 15.101562 28.304688 13.558594 C 29.078125 12.8125 30.09375 12.410156 31.171875 12.421875 C 32.246094 12.4375 33.253906 12.867188 34.003906 13.632812 L 42.144531 21.921875 C 42.429688 22.210938 42.824219 22.378906 43.230469 22.371094 C 43.640625 22.363281 44.027344 22.191406 44.308594 21.894531 L 60.273438 4.777344 C 60.96875 4.03125 61.933594 3.625 62.996094 3.640625 C 64.066406 3.65625 65.148438 4.097656 65.96875 4.851562 C 66.742188 5.566406 67.214844 6.632812 67.253906 7.777344 C 67.296875 8.921875 66.90625 10.023438 66.183594 10.796875 C 66.179688 10.800781 66.175781 10.789062 66.167969 10.792969 Z M 50.257812 32.773438 C 50.261719 32.765625 50.269531 32.785156 50.273438 32.777344 L 68.382812 12.792969 C 69.632812 11.449219 70.308594 9.582031 70.238281 7.664062 C 70.167969 5.734375 69.351562 3.917969 67.996094 2.671875 C 66.621094 1.40625 64.894531 0.699219 63.070312 0.675781 C 61.152344 0.648438 59.332031 1.390625 58.144531 2.761719 L 43.214844 18.734375 L 36.160156 11.5625 C 34.851562 10.230469 33.089844 9.484375 31.214844 9.460938 C 29.347656 9.4375 27.566406 10.140625 26.226562 11.441406 C 23.46875 14.113281 23.398438 18.515625 26.070312 21.265625 L 36.394531 32.933594 C 36.414062 32.953125 36.429688 32.929688 36.445312 32.949219 C 37.042969 33.554688 37.671875 34.105469 38.335938 34.695312 L 35.597656 34.695312 C 34.773438 34.695312 34.105469 35.351562 34.105469 36.171875 C 34.105469 36.988281 34.773438 37.644531 35.597656 37.644531 L 51.515625 37.644531 C 52.339844 37.644531 53.007812 36.988281 53.007812 36.171875 C 53.007812 35.351562 52.339844 34.695312 51.515625 34.695312 L 48.25 34.695312 C 48.945312 34.105469 49.613281 33.464844 50.257812 32.773438 "
                  fill-opacity="1" fill-rule="nonzero"></path>
              </g>
              <path d="M 56.621094 47.5625 C 56.625 47.566406 56.625 47.566406 56.625 47.566406 L 56.621094 47.5625 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <g clip-path="url(#efd0f8f0d2)">
                <path
                  d="M 63.789062 36.253906 L 54.472656 45.511719 C 54.402344 45.472656 54.332031 45.4375 54.261719 45.402344 C 54.261719 45.402344 54.257812 45.398438 54.253906 45.398438 C 54.246094 45.390625 54.238281 45.386719 54.226562 45.382812 C 53.414062 44.980469 52.546875 44.765625 51.648438 44.761719 C 51.238281 44.746094 47.140625 44.582031 46.132812 44.582031 C 46.128906 44.582031 46.121094 44.582031 46.117188 44.582031 C 45.417969 44.582031 44.71875 44.609375 43.976562 44.625 C 40.171875 44.703125 36.234375 44.785156 32.699219 43.867188 C 31.90625 43.660156 31.136719 43.4375 30.390625 43.222656 C 26.570312 42.121094 22.964844 41.078125 18.328125 42.667969 C 14.28125 44.050781 10.449219 46.726562 6.269531 51.085938 C 6.25 51.109375 6.21875 51.144531 6.199219 51.167969 L 0.816406 57.460938 C 0.316406 58.046875 0.351562 58.917969 0.898438 59.464844 L 0.90625 59.46875 C 1.519531 60.078125 2.53125 60.039062 3.09375 59.378906 L 8.445312 53.121094 C 12.277344 49.125 15.726562 46.695312 19.300781 45.472656 C 23.042969 44.191406 25.917969 45.019531 29.554688 46.074219 C 30.320312 46.292969 31.109375 46.523438 31.941406 46.738281 C 35.882812 47.761719 40.214844 47.671875 44.039062 47.59375 C 44.769531 47.578125 45.457031 47.5625 46.140625 47.558594 C 47.132812 47.558594 51.515625 47.730469 51.558594 47.730469 C 51.578125 47.734375 51.597656 47.734375 51.617188 47.734375 C 52.058594 47.734375 52.492188 47.835938 52.898438 48.039062 C 52.90625 48.039062 52.910156 48.042969 52.914062 48.042969 C 53.183594 48.175781 53.425781 48.347656 53.644531 48.566406 C 54.199219 49.121094 54.5 49.824219 54.5 50.578125 C 54.5 52.164062 53.207031 53.433594 51.617188 53.433594 L 31.6875 53.433594 C 30.890625 53.433594 30.195312 54.015625 30.140625 54.804688 C 30.082031 55.671875 30.773438 56.382812 31.632812 56.382812 L 51.617188 56.382812 C 54.851562 56.382812 57.484375 53.773438 57.484375 50.554688 C 57.484375 49.476562 57.1875 48.417969 56.621094 47.53125 L 56.621094 47.546875 C 56.621094 47.546875 56.621094 47.554688 56.621094 47.554688 L 56.621094 47.558594 L 65.902344 38.347656 C 67.230469 37.023438 69.394531 37.027344 70.726562 38.347656 C 71.371094 38.992188 71.730469 39.84375 71.730469 40.746094 C 71.730469 40.746094 71.730469 40.75 71.730469 40.75 C 71.730469 40.753906 71.730469 40.753906 71.730469 40.753906 C 71.730469 41.660156 71.371094 42.519531 70.726562 43.160156 L 50.613281 63.148438 C 49.835938 63.929688 48.796875 64.472656 47.703125 64.589844 C 47.546875 64.605469 47.386719 64.644531 47.230469 64.644531 L 22.824219 64.644531 C 22.429688 64.644531 22.046875 64.734375 21.769531 65.015625 L 15.15625 71.546875 C 14.570312 72.125 14.570312 73.054688 15.152344 73.632812 C 15.730469 74.207031 16.671875 74.230469 17.253906 73.65625 L 23.441406 67.597656 L 47.230469 67.597656 C 49.285156 67.597656 51.289062 66.707031 52.726562 65.265625 L 72.835938 45.269531 C 74.046875 44.066406 74.714844 42.457031 74.714844 40.761719 C 74.714844 39.066406 74.046875 37.464844 72.835938 36.261719 C 70.34375 33.785156 66.285156 33.777344 63.789062 36.253906 "
                  fill-opacity="1" fill-rule="nonzero"></path>
              </g>
            </svg> <label class="text-center">Fiabilité des informations</label></div>
        </div>
        <div data-aos="fade-up" data-aos-duration="500"
          class="flex flex-col md:flex-row items-center justify-center gap-12 md:gap-4 mt-18 mb-12 text-gray-400 mx-auto">
          <div class=" w-1/4 flex flex-col items-center gap-4 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <path
                d="M 16.089844 0.164062 C 15.316406 0.308594 14.761719 0.992188 14.773438 1.785156 L 14.773438 35.875 L 1.785156 35.875 C 1.121094 35.863281 0.503906 36.257812 0.25 36.871094 C -0.0078125 37.488281 0.136719 38.203125 0.617188 38.667969 L 36.332031 74.382812 C 36.636719 74.699219 37.0625 74.875 37.5 74.875 C 37.9375 74.875 38.363281 74.699219 38.667969 74.382812 L 74.382812 38.667969 C 74.863281 38.203125 75.007812 37.488281 74.75 36.871094 C 74.496094 36.257812 73.878906 35.863281 73.214844 35.875 L 60.226562 35.875 L 60.226562 1.785156 C 60.226562 0.890625 59.496094 0.164062 58.605469 0.164062 L 16.394531 0.164062 C 16.34375 0.164062 16.292969 0.164062 16.242188 0.164062 C 16.191406 0.164062 16.140625 0.164062 16.089844 0.164062 Z M 18.019531 3.410156 L 56.980469 3.410156 L 56.980469 37.5 C 56.980469 38.394531 57.710938 39.125 58.605469 39.125 L 69.257812 39.125 L 37.5 70.878906 L 5.742188 39.125 L 16.394531 39.125 C 17.289062 39.125 18.019531 38.394531 18.019531 37.5 Z M 39.730469 18.375 C 36.667969 18.375 34.171875 19.414062 32.222656 21.519531 C 30.480469 23.363281 29.292969 25.882812 28.671875 29.078125 L 26.59375 29.078125 L 25.578125 31.464844 L 28.417969 31.464844 C 28.394531 31.648438 28.367188 31.8125 28.367188 32.019531 L 28.367188 33.085938 C 28.367188 33.214844 28.394531 33.367188 28.417969 33.492188 L 26.644531 33.492188 L 25.578125 35.875 L 28.570312 35.875 C 29.664062 43.433594 33.367188 47.191406 39.730469 47.191406 C 41.988281 47.191406 44.03125 46.632812 45.769531 45.515625 L 45.769531 41.40625 C 44.679688 42.421875 43.785156 43.125 43.082031 43.484375 C 42.117188 43.980469 40.980469 44.246094 39.730469 44.246094 C 35.65625 44.246094 33.230469 41.464844 32.375 35.875 L 40.847656 35.875 L 41.863281 33.492188 L 32.171875 33.492188 C 32.148438 33.367188 32.121094 33.214844 32.121094 33.085938 L 32.121094 32.070312 C 32.121094 31.863281 32.148438 31.671875 32.171875 31.464844 L 42.421875 31.464844 L 43.433594 29.078125 L 32.425781 29.078125 C 32.871094 26.921875 33.59375 25.179688 34.609375 23.851562 C 35.882812 22.191406 37.480469 21.367188 39.429688 21.367188 C 41.324219 21.367188 43.1875 22.261719 45.007812 24.054688 L 46.785156 20.808594 C 44.445312 19.171875 42.097656 18.375 39.730469 18.375 Z M 39.730469 18.375 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </svg> <label class="text-center">Réduction des coûts</label></div>
          <div class=" w-1/4 flex flex-col items-center gap-4 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <defs>
                <clipPath id="c3e92d4375">
                  <path d="M 0 4.3125 L 75 4.3125 L 75 71.0625 L 0 71.0625 Z M 0 4.3125 " clip-rule="nonzero">
                  </path>
                </clipPath>
              </defs>
              <g clip-path="url(#c3e92d4375)">
                <path
                  d="M 14.6875 11.984375 L 35.785156 11.984375 L 35.785156 14.664062 L 14.6875 14.664062 Z M 13.234375 9.058594 C 12.847656 9.058594 12.476562 9.210938 12.207031 9.488281 C 11.933594 9.761719 11.78125 10.132812 11.78125 10.523438 L 11.78125 16.125 C 11.78125 16.515625 11.933594 16.886719 12.207031 17.160156 C 12.476562 17.433594 12.847656 17.589844 13.234375 17.589844 L 37.238281 17.589844 C 38.042969 17.589844 38.691406 16.933594 38.691406 16.125 L 38.691406 10.523438 C 38.691406 9.714844 38.042969 9.058594 37.238281 9.058594 Z M 17.230469 26.234375 C 16.425781 26.234375 15.773438 26.890625 15.773438 27.699219 C 15.773438 28.507812 16.425781 29.160156 17.230469 29.160156 L 33.0625 29.160156 C 33.867188 29.160156 34.519531 28.507812 34.519531 27.699219 C 34.519531 26.890625 33.867188 26.234375 33.0625 26.234375 L 17.253906 26.234375 C 17.246094 26.234375 17.238281 26.234375 17.230469 26.234375 Z M 12.808594 22.699219 C 12.394531 22.699219 11.980469 22.878906 11.695312 23.222656 L 9.40625 25.964844 L 7.722656 24.777344 C 7.46875 24.597656 7.175781 24.507812 6.886719 24.507812 C 6.429688 24.507812 5.980469 24.726562 5.695312 25.132812 C 5.234375 25.792969 5.394531 26.703125 6.050781 27.167969 L 8.824219 29.128906 C 9.078125 29.308594 9.371094 29.398438 9.660156 29.398438 C 10.078125 29.398438 10.488281 29.21875 10.773438 28.875 L 13.921875 25.105469 C 14.441406 24.484375 14.359375 23.5625 13.746094 23.042969 C 13.472656 22.8125 13.140625 22.699219 12.808594 22.699219 Z M 17.230469 42.15625 C 16.425781 42.15625 15.773438 42.8125 15.773438 43.621094 C 15.773438 44.429688 16.425781 45.082031 17.230469 45.082031 L 33.0625 45.085938 C 33.867188 45.085938 34.519531 44.429688 34.519531 43.621094 C 34.519531 42.8125 33.867188 42.15625 33.0625 42.15625 L 17.253906 42.15625 C 17.246094 42.15625 17.238281 42.15625 17.230469 42.15625 Z M 13.410156 38.6875 C 12.992188 38.6875 12.582031 38.863281 12.292969 39.210938 L 10.003906 41.953125 L 8.324219 40.761719 C 8.070312 40.582031 7.777344 40.496094 7.488281 40.496094 C 7.03125 40.496094 6.578125 40.714844 6.296875 41.117188 C 5.835938 41.78125 5.992188 42.691406 6.648438 43.15625 L 9.421875 45.117188 C 9.675781 45.296875 9.96875 45.382812 10.257812 45.382812 C 10.675781 45.382812 11.089844 45.203125 11.375 44.863281 L 14.523438 41.089844 C 15.039062 40.472656 14.960938 39.550781 14.34375 39.03125 C 14.070312 38.800781 13.738281 38.6875 13.410156 38.6875 Z M 65.3125 35.414062 C 64.984375 35.414062 64.652344 35.527344 64.378906 35.753906 L 55.710938 43.058594 L 53.15625 40.246094 C 52.867188 39.929688 52.476562 39.765625 52.082031 39.765625 C 51.730469 39.765625 51.378906 39.894531 51.101562 40.148438 C 50.507812 40.695312 50.464844 41.621094 51.007812 42.21875 L 54.503906 46.070312 C 54.789062 46.382812 55.183594 46.546875 55.578125 46.546875 C 55.90625 46.546875 56.238281 46.433594 56.511719 46.203125 L 66.25 37.996094 C 66.863281 37.480469 66.945312 36.554688 66.429688 35.9375 C 66.140625 35.589844 65.726562 35.414062 65.3125 35.414062 Z M 56.976562 23.722656 C 58.847656 25.210938 60.851562 26.722656 63.246094 27.925781 C 65.722656 29.171875 68.582031 30.066406 71.367188 30.894531 L 71.363281 30.894531 C 71.671875 39.015625 71.820312 46.472656 69.488281 51.160156 C 67.21875 55.730469 62.457031 57.828125 56.964844 60.050781 C 51.316406 57.613281 46.398438 55.320312 44.117188 50.734375 C 41.800781 46.074219 42.058594 38.871094 42.5 30.992188 C 45.035156 30.449219 47.695312 29.808594 50.171875 28.5625 C 52.636719 27.320312 54.875 25.507812 56.972656 23.722656 Z M 17.230469 58.078125 C 16.425781 58.078125 15.773438 58.734375 15.773438 59.542969 C 15.773438 60.351562 16.425781 61.007812 17.230469 61.007812 L 33.0625 61.007812 C 33.867188 61.007812 34.519531 60.351562 34.519531 59.542969 C 34.519531 58.734375 33.867188 58.082031 33.0625 58.082031 L 17.253906 58.082031 C 17.246094 58.078125 17.238281 58.078125 17.230469 58.078125 Z M 13.632812 54.449219 C 13.21875 54.449219 12.808594 54.625 12.519531 54.972656 L 10.230469 57.714844 L 8.546875 56.523438 C 8.292969 56.34375 8.003906 56.257812 7.714844 56.257812 C 7.253906 56.257812 6.804688 56.476562 6.523438 56.878906 C 6.058594 57.542969 6.21875 58.453125 6.875 58.917969 L 9.648438 60.878906 C 9.902344 61.058594 10.195312 61.144531 10.484375 61.144531 C 10.902344 61.144531 11.3125 60.964844 11.597656 60.621094 L 14.746094 56.851562 C 15.265625 56.234375 15.183594 55.3125 14.570312 54.792969 C 14.296875 54.5625 13.964844 54.449219 13.632812 54.449219 Z M 56.945312 20.363281 C 56.609375 20.363281 56.273438 20.480469 56 20.714844 C 53.578125 22.789062 51.324219 24.710938 48.871094 25.945312 C 46.429688 27.171875 43.734375 27.746094 40.816406 28.355469 C 40.171875 28.492188 39.699219 29.042969 39.660156 29.703125 C 39.203125 37.683594 38.660156 46.304688 41.515625 52.042969 C 44.4375 57.917969 50.761719 60.566406 56.375 62.980469 C 56.554688 63.058594 56.75 63.097656 56.945312 63.097656 C 57.128906 63.097656 57.3125 63.0625 57.484375 62.992188 C 62.960938 60.789062 69.160156 58.363281 72.089844 52.46875 C 74.9375 46.746094 74.550781 37.925781 74.230469 29.730469 C 74.207031 29.105469 73.789062 28.5625 73.1875 28.382812 L 73.164062 28.378906 C 70.023438 27.449219 67.042969 26.5625 64.546875 25.308594 C 62.066406 24.0625 60.023438 22.425781 57.851562 20.683594 C 57.585938 20.46875 57.265625 20.363281 56.945312 20.363281 Z M 49.027344 4.300781 C 49.027344 4.300781 49.027344 4.300781 49.023438 4.300781 L 1.523438 4.441406 C 0.722656 4.445312 0.0742188 5.097656 0.0742188 5.90625 L 0.0742188 69.59375 C 0.0742188 70.402344 0.726562 71.058594 1.53125 71.058594 L 49.027344 71.058594 C 49.414062 71.058594 49.785156 70.902344 50.058594 70.628906 C 50.328125 70.355469 50.484375 69.984375 50.484375 69.59375 L 50.484375 61.632812 C 50.484375 60.824219 49.832031 60.171875 49.027344 60.171875 C 48.226562 60.171875 47.574219 60.824219 47.574219 61.632812 L 47.574219 68.132812 L 2.984375 68.132812 L 2.984375 7.363281 L 47.574219 7.230469 L 47.574219 21.828125 C 47.574219 22.636719 48.226562 23.289062 49.027344 23.289062 C 49.832031 23.289062 50.484375 22.636719 50.484375 21.828125 L 50.484375 5.761719 C 50.484375 5.375 50.328125 5 50.054688 4.726562 C 49.78125 4.453125 49.414062 4.300781 49.027344 4.300781 Z M 49.027344 4.300781 "
                  fill-opacity="1" fill-rule="nonzero"></path>
              </g>
            </svg> <label class="text-center">Flux sécurisés</label></div>
          <div class=" w-1/4 flex flex-col items-center gap-6 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <path
                d="M 71.269531 50.582031 C 71.953125 49.726562 72.378906 48.660156 72.378906 47.484375 C 72.378906 44.730469 70.140625 42.492188 67.386719 42.492188 C 64.636719 42.492188 62.394531 44.730469 62.394531 47.484375 C 62.394531 48.660156 62.824219 49.726562 63.507812 50.582031 C 62.566406 51.023438 61.761719 51.691406 61.148438 52.515625 C 60.535156 51.691406 59.730469 51.023438 58.789062 50.582031 C 59.472656 49.726562 59.898438 48.660156 59.898438 47.484375 C 59.898438 44.730469 57.660156 42.492188 54.910156 42.492188 C 52.15625 42.492188 49.917969 44.730469 49.917969 47.484375 C 49.917969 48.660156 50.34375 49.726562 51.027344 50.582031 C 48.902344 51.582031 47.421875 53.722656 47.421875 56.21875 L 47.421875 62.457031 C 47.421875 62.929688 47.6875 63.363281 48.109375 63.574219 L 49.917969 64.476562 L 49.917969 73.691406 C 49.917969 74.378906 50.476562 74.9375 51.164062 74.9375 L 58.652344 74.9375 C 59.339844 74.9375 59.898438 74.378906 59.898438 73.691406 L 59.898438 64.476562 L 61.148438 63.855469 L 62.394531 64.476562 L 62.394531 73.691406 C 62.394531 74.378906 62.953125 74.9375 63.644531 74.9375 L 71.132812 74.9375 C 71.820312 74.9375 72.378906 74.378906 72.378906 73.691406 L 72.378906 64.476562 L 74.183594 63.574219 C 74.609375 63.363281 74.875 62.929688 74.875 62.457031 L 74.875 56.21875 C 74.875 53.722656 73.394531 51.582031 71.269531 50.582031 Z M 67.386719 44.988281 C 68.765625 44.988281 69.882812 46.105469 69.882812 47.484375 C 69.882812 48.859375 68.765625 49.980469 67.386719 49.980469 C 66.011719 49.980469 64.890625 48.859375 64.890625 47.484375 C 64.890625 46.105469 66.011719 44.988281 67.386719 44.988281 Z M 54.910156 44.988281 C 56.285156 44.988281 57.40625 46.105469 57.40625 47.484375 C 57.40625 48.859375 56.285156 49.980469 54.910156 49.980469 C 53.53125 49.980469 52.414062 48.859375 52.414062 47.484375 C 52.414062 46.105469 53.53125 44.988281 54.910156 44.988281 Z M 58.09375 62.589844 C 57.671875 62.800781 57.40625 63.234375 57.40625 63.707031 L 57.40625 72.441406 L 52.414062 72.441406 L 52.414062 63.707031 C 52.414062 63.234375 52.144531 62.800781 51.722656 62.589844 L 49.917969 61.6875 L 49.917969 56.21875 C 49.917969 54.15625 51.597656 52.476562 53.660156 52.476562 L 56.15625 52.476562 C 58.21875 52.476562 59.898438 54.15625 59.898438 56.21875 L 59.898438 61.6875 Z M 72.378906 61.6875 L 70.574219 62.589844 C 70.152344 62.800781 69.882812 63.234375 69.882812 63.707031 L 69.882812 72.441406 L 64.890625 72.441406 L 64.890625 63.707031 C 64.890625 63.234375 64.625 62.800781 64.203125 62.589844 L 62.394531 61.6875 L 62.394531 56.21875 C 62.394531 54.15625 64.074219 52.476562 66.140625 52.476562 L 68.636719 52.476562 C 70.699219 52.476562 72.378906 54.15625 72.378906 56.21875 Z M 72.378906 61.6875 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 37.4375 20.027344 C 40.878906 20.027344 43.675781 17.230469 43.675781 13.789062 C 43.675781 10.347656 40.878906 7.550781 37.4375 7.550781 C 33.996094 7.550781 31.199219 10.347656 31.199219 13.789062 C 31.199219 17.230469 33.996094 20.027344 37.4375 20.027344 Z M 37.4375 10.046875 C 39.5 10.046875 41.179688 11.726562 41.179688 13.789062 C 41.179688 15.855469 39.5 17.535156 37.4375 17.535156 C 35.375 17.535156 33.695312 15.855469 33.695312 13.789062 C 33.695312 11.726562 35.375 10.046875 37.4375 10.046875 Z M 37.4375 10.046875 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 25.964844 5.847656 C 25.480469 6.335938 25.480469 7.125 25.964844 7.613281 L 27.308594 8.957031 C 27.140625 9.3125 26.988281 9.675781 26.859375 10.046875 L 24.957031 10.046875 C 24.269531 10.046875 23.710938 10.605469 23.710938 11.292969 L 23.710938 16.285156 C 23.710938 16.972656 24.269531 17.535156 24.957031 17.535156 L 26.859375 17.535156 C 26.988281 17.90625 27.140625 18.269531 27.308594 18.621094 L 25.964844 19.964844 C 25.476562 20.453125 25.476562 21.242188 25.964844 21.730469 L 29.496094 25.261719 C 29.984375 25.75 30.773438 25.75 31.261719 25.261719 L 32.605469 23.917969 C 32.957031 24.085938 33.320312 24.238281 33.695312 24.371094 L 33.695312 26.269531 C 33.695312 26.957031 34.253906 27.515625 34.941406 27.515625 L 39.933594 27.515625 C 40.621094 27.515625 41.179688 26.957031 41.179688 26.269531 L 41.179688 24.371094 C 41.554688 24.238281 41.917969 24.085938 42.269531 23.917969 L 43.613281 25.261719 C 44.101562 25.75 44.890625 25.75 45.378906 25.261719 L 48.910156 21.730469 C 49.398438 21.242188 49.398438 20.453125 48.910156 19.964844 L 47.566406 18.621094 C 47.734375 18.269531 47.886719 17.90625 48.015625 17.535156 L 49.917969 17.535156 C 50.605469 17.535156 51.164062 16.972656 51.164062 16.285156 L 51.164062 11.292969 C 51.164062 10.605469 50.605469 10.046875 49.917969 10.046875 L 48.015625 10.046875 C 47.886719 9.675781 47.734375 9.3125 47.566406 8.957031 L 48.910156 7.613281 C 49.398438 7.125 49.398438 6.335938 48.910156 5.847656 L 45.378906 2.316406 C 44.890625 1.828125 44.101562 1.828125 43.613281 2.316406 L 42.269531 3.660156 C 41.917969 3.492188 41.554688 3.34375 41.179688 3.210938 L 41.179688 1.308594 C 41.179688 0.621094 40.621094 0.0625 39.933594 0.0625 L 34.941406 0.0625 C 34.253906 0.0625 33.695312 0.621094 33.695312 1.308594 L 33.695312 3.210938 C 33.320312 3.339844 32.957031 3.492188 32.605469 3.660156 L 31.261719 2.320312 C 30.773438 1.832031 29.984375 1.832031 29.496094 2.320312 Z M 31.492188 6.078125 C 31.894531 6.480469 32.519531 6.5625 33.007812 6.269531 C 33.707031 5.859375 34.460938 5.546875 35.253906 5.339844 C 35.804688 5.199219 36.191406 4.703125 36.191406 4.132812 L 36.191406 2.558594 L 38.683594 2.558594 L 38.683594 4.132812 C 38.683594 4.703125 39.070312 5.199219 39.621094 5.339844 C 40.414062 5.546875 41.167969 5.859375 41.867188 6.269531 C 42.355469 6.558594 42.980469 6.480469 43.382812 6.078125 L 44.496094 4.964844 L 46.261719 6.730469 L 45.148438 7.84375 C 44.746094 8.246094 44.667969 8.871094 44.957031 9.359375 C 45.371094 10.058594 45.679688 10.816406 45.886719 11.605469 C 46.027344 12.15625 46.523438 12.542969 47.09375 12.542969 L 48.667969 12.542969 L 48.667969 15.039062 L 47.09375 15.039062 C 46.523438 15.039062 46.027344 15.421875 45.886719 15.972656 C 45.679688 16.765625 45.371094 17.519531 44.957031 18.21875 C 44.667969 18.707031 44.746094 19.332031 45.148438 19.734375 L 46.261719 20.847656 L 44.496094 22.613281 L 43.382812 21.5 C 42.980469 21.097656 42.355469 21.019531 41.867188 21.308594 C 41.167969 21.722656 40.414062 22.035156 39.621094 22.238281 C 39.070312 22.378906 38.683594 22.875 38.683594 23.445312 L 38.683594 25.019531 L 36.191406 25.019531 L 36.191406 23.445312 C 36.191406 22.875 35.804688 22.378906 35.253906 22.238281 C 34.460938 22.035156 33.707031 21.722656 33.007812 21.308594 C 32.515625 21.019531 31.894531 21.097656 31.492188 21.5 L 30.378906 22.613281 L 28.613281 20.847656 L 29.726562 19.734375 C 30.128906 19.332031 30.207031 18.707031 29.917969 18.21875 C 29.503906 17.519531 29.195312 16.765625 28.988281 15.972656 C 28.847656 15.421875 28.351562 15.039062 27.78125 15.039062 L 26.207031 15.039062 L 26.207031 12.542969 L 27.78125 12.542969 C 28.351562 12.542969 28.847656 12.15625 28.988281 11.605469 C 29.195312 10.8125 29.503906 10.058594 29.917969 9.359375 C 30.207031 8.871094 30.128906 8.246094 29.726562 7.84375 L 28.613281 6.730469 L 30.378906 4.964844 Z M 31.492188 6.078125 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 67.597656 30.703125 C 67.855469 31.089844 68.296875 31.296875 68.765625 31.253906 C 69.226562 31.207031 69.621094 30.90625 69.796875 30.476562 L 74.785156 17.996094 C 74.941406 17.613281 74.894531 17.175781 74.660156 16.835938 C 74.429688 16.492188 74.042969 16.285156 73.628906 16.285156 L 59.898438 16.285156 C 59.441406 16.285156 59.015625 16.539062 58.800781 16.945312 C 58.582031 17.351562 58.605469 17.84375 58.863281 18.226562 L 60.558594 20.769531 L 36.292969 32.324219 L 29.394531 27.726562 C 29.035156 27.484375 28.578125 27.449219 28.183594 27.628906 L 0.730469 40.105469 C 0.40625 40.253906 0.160156 40.53125 0.0546875 40.871094 C -0.0507812 41.210938 -0.00390625 41.578125 0.175781 41.886719 L 3.921875 48.125 C 4.15625 48.511719 4.566406 48.730469 4.992188 48.730469 C 5.171875 48.730469 5.355469 48.691406 5.527344 48.613281 L 28.597656 37.683594 L 35.496094 42.28125 C 35.867188 42.527344 36.347656 42.558594 36.746094 42.359375 L 65.710938 27.878906 Z M 36.28125 39.804688 L 29.394531 35.214844 C 29.03125 34.96875 28.5625 34.9375 28.167969 35.125 L 5.480469 45.871094 L 3.039062 41.800781 L 28.585938 30.1875 L 35.5 34.792969 C 35.863281 35.039062 36.332031 35.070312 36.726562 34.882812 L 62.933594 22.402344 C 63.257812 22.246094 63.503906 21.957031 63.597656 21.609375 C 63.695312 21.257812 63.636719 20.886719 63.433594 20.585938 L 62.234375 18.78125 L 71.785156 18.78125 L 68.355469 27.347656 L 67.179688 25.578125 C 66.828125 25.054688 66.144531 24.871094 65.582031 25.152344 Z M 36.28125 39.804688 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 12.480469 73.691406 L 12.480469 59.960938 C 12.480469 59.273438 11.921875 58.714844 11.230469 58.714844 L 3.742188 58.714844 C 3.054688 58.714844 2.496094 59.273438 2.496094 59.960938 L 2.496094 73.691406 C 2.496094 74.378906 3.054688 74.9375 3.742188 74.9375 L 11.230469 74.9375 C 11.921875 74.9375 12.480469 74.378906 12.480469 73.691406 Z M 9.984375 72.441406 L 4.992188 72.441406 L 4.992188 61.210938 L 9.984375 61.210938 Z M 9.984375 72.441406 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 26.207031 74.9375 C 26.894531 74.9375 27.453125 74.378906 27.453125 73.691406 L 27.453125 53.722656 C 27.453125 53.035156 26.894531 52.476562 26.207031 52.476562 L 18.71875 52.476562 C 18.03125 52.476562 17.472656 53.035156 17.472656 53.722656 L 17.472656 73.691406 C 17.472656 74.378906 18.03125 74.9375 18.71875 74.9375 Z M 19.964844 54.972656 L 24.957031 54.972656 L 24.957031 72.441406 L 19.964844 72.441406 Z M 19.964844 54.972656 "
                fill-opacity="1" fill-rule="nonzero"></path>
              <path
                d="M 42.429688 73.691406 L 42.429688 47.484375 C 42.429688 46.792969 41.871094 46.234375 41.179688 46.234375 L 33.695312 46.234375 C 33.003906 46.234375 32.445312 46.792969 32.445312 47.484375 L 32.445312 73.691406 C 32.445312 74.378906 33.003906 74.9375 33.695312 74.9375 L 41.179688 74.9375 C 41.871094 74.9375 42.429688 74.378906 42.429688 73.691406 Z M 39.933594 72.441406 L 34.941406 72.441406 L 34.941406 48.730469 L 39.933594 48.730469 Z M 39.933594 72.441406 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </svg> <label class="text-center">Optimisation de votre activité</label></div>
          <div class=" w-1/4 flex flex-col items-center gap-6 cursor-pointer"><svg fill="#9ca3af" class="h-20"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
              <path
                d="M 14.488281 39.027344 C 14.488281 37.128906 16.027344 35.59375 17.921875 35.59375 C 18.230469 35.59375 18.519531 35.644531 18.800781 35.71875 L 25.546875 28.976562 C 25.472656 28.695312 25.417969 28.402344 25.417969 28.097656 C 25.417969 26.199219 26.957031 24.660156 28.855469 24.660156 C 30.75 24.660156 32.289062 26.199219 32.289062 28.097656 C 32.289062 28.402344 32.238281 28.691406 32.160156 28.972656 L 38.90625 35.71875 C 39.1875 35.644531 39.476562 35.59375 39.785156 35.59375 C 40.089844 35.59375 40.382812 35.644531 40.664062 35.71875 L 53.769531 22.613281 C 53.695312 22.332031 53.640625 22.039062 53.640625 21.734375 C 53.640625 19.835938 55.179688 18.300781 57.078125 18.300781 C 58.972656 18.300781 60.511719 19.835938 60.511719 21.734375 C 60.511719 23.632812 58.972656 25.171875 57.078125 25.171875 C 56.769531 25.171875 56.480469 25.117188 56.199219 25.042969 L 43.09375 38.148438 C 43.167969 38.429688 43.21875 38.722656 43.21875 39.027344 C 43.21875 40.925781 41.683594 42.460938 39.785156 42.460938 C 37.886719 42.460938 36.347656 40.925781 36.347656 39.027344 C 36.347656 38.722656 36.402344 38.429688 36.476562 38.148438 L 29.730469 31.402344 C 29.449219 31.480469 29.160156 31.53125 28.855469 31.53125 C 28.550781 31.53125 28.257812 31.480469 27.976562 31.402344 L 21.230469 38.148438 C 21.304688 38.429688 21.359375 38.722656 21.359375 39.027344 C 21.359375 40.925781 19.820312 42.460938 17.921875 42.460938 C 16.027344 42.460938 14.488281 40.925781 14.488281 39.027344 Z M 75 9.449219 L 75 51.3125 C 75 53.050781 73.585938 54.460938 71.851562 54.460938 L 47.519531 54.460938 L 47.519531 65.339844 L 51.8125 65.339844 C 52.761719 65.339844 53.53125 66.109375 53.53125 67.058594 C 53.53125 68.007812 52.761719 68.773438 51.8125 68.773438 L 23.1875 68.773438 C 22.238281 68.773438 21.46875 68.003906 21.46875 67.058594 C 21.46875 66.109375 22.238281 65.339844 23.1875 65.339844 L 27.480469 65.339844 L 27.480469 54.460938 L 3.148438 54.460938 C 1.414062 54.460938 0 53.050781 0 51.3125 L 0 9.449219 C 0 7.714844 1.414062 6.300781 3.148438 6.300781 L 71.851562 6.300781 C 73.585938 6.300781 75 7.714844 75 9.449219 Z M 71.566406 9.734375 L 3.433594 9.734375 L 3.433594 51.027344 L 71.566406 51.027344 Z M 71.566406 9.734375 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </svg> <label class="text-center">Monitoring</label></div>
        </div>
        <div data-aos="fade-up" data-aos-duration="500" class="mx-auto text-gray-800 max-w-4xl">
          <div class=" text-left " style="text-align: center;">L’EDI permet d’éviter les désagréments liés à la saisie
            de documents, tels
            que :
            <div class="flex flex-col md:flex-row">
              <ul class=" md:w-1/2" style="list-style: none;">
                <li>Retards</li>
                <li>Rupture de stock</li>
              </ul>
              <ul class=" md:w-1/2" style="list-style: none;">
                <li>Erreurs d’entrée</li>
                <li>Mauvaise interprétation des Données</li>
              </ul>
            </div><br />
            <div style="text-align: center;">En automatisant les informations, l’EDI vous permet de gagner en rapidité
              et
              d’éradiquer les
              retards.</div>
          </div>
          <div class="hidden text-left">L’EDI permet de :<ul class="smallmcheckulgreen">
              <li>Avoir une vision plus complète de vos échanges tout au long de la supply chain</li>
              <li>Suivre le parcours de tous vos documents commerciaux (bons de commande, factures, avis
                d’expédition…)</li>
            </ul>
          </div>
          <div class="hidden text-left">L’EDI permet de créer une connexion fiable, sécurisée et fluide entre
            votre
            outil de gestion commerciale (ERP), et celui de votre partenaire. Les données échangées sont
            ainsi
            automatiquement transformées dans le format adéquat, intégrées puis traitées dans votre ERP et
            celui de
            votre partenaire. L’intégration automatique évite un temps de traitement manuel et d’éventuels
            erreurs
            de saisie. Toutes les étapes Order to Cash se déclenchent automatiquement, et vous assurent une
            productivité maximale.<br /><br />Cette automatisation peut également se mettre en place avec
            des
            partenaires commerciaux qui n’auraient pas de Solution EDI, via la mise à disposition d’un accès
            sécurisé à un portail WebEDI.</div>
          <div class="hidden text-left">L’EDI vous permets une fiabilité de vos informations :<ul
              class="smallmcheckulgreen">
              <li>Interopérabilité de vos données échangées</li>
              <li>Systèmes d&#x27;acquittement personnalisables</li>
            </ul>
          </div>
          <div class="hidden text-left">
            <div class="flex flex-col md:flex-row">
              <div>L’EDI vous permettra de :<ul class="smallmcheckulgreen">
                  <li>Réduire les coûts de main-d’œuvre dus au traitement manuel (et lent) de vos
                    documents</li>
                  <li>Réduire les coûts dus aux erreurs</li>
                </ul><br />Toutes vos ressources seront ainsi mobilisées sur l’activité principale de
                votre
                entreprise :<ul class="smallmcheckulgreen md:w-1/2">
                  <li>Augmentation de votre productivité</li>
                  <li>Augmentation de votre rentabilité</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="hidden text-left">L’EDI garanti un échange sécurisé de vos informations et celles de vos
            partenaires. Les flux sont verrouillés de bout en bout, et vous garantissent :<ul
              class="smallmcheckulgreen">
              <li>La fiabilité des informations échangées</li>
              <li>L’impossibilité de modifier des données</li>
            </ul>
          </div>
          <div class="hidden text-left">L’EDI vous permets d’optimiser votre productivité :<ul
              class="smallmcheckulgreen">
              <li>Concentration sur les missions à valeurs ajoutées</li>
              <li>Accélération de vos échanges</li>
              <li>Amélioration des relations avec vos partenaires</li>
              <li>Augmentation de votre rentabilité avec un ROI conséquent </li>
            </ul>
          </div>
          <div class="hidden text-left">Les outils de monitoring permettent d’optimiser votre activité, grâce
            à une
            visibilité complète sur :<ul class="smallmcheckulgreen">
              <li>Le cycle de vie de vos transactions</li>
              <li>Les performances de vos partenaires</li>
              <li>Les tendances du marché</li>
            </ul><br />Cet outil sera votre allié pour :<ul class="smallmcheckulgreen">
              <li>Contrôler votre productivité</li>
              <li>Gagner en réactivité </li>
              <li>Minimiser l’impact commercial d’éventuels incidents</li>
              <li>Améliorer la satisfaction client</li>
            </ul>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="500" class="text-center mt-6"><i
          class="fa-solid fa-chevron-down text-[#37b89d] text-12xl mb-4"></i><svg class="h-26 mx-auto"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
          <defs>
            <clipPath id="2c065e051d">
              <path d="M 0 7.5 L 48 7.5 L 48 67.5 L 0 67.5 Z M 0 7.5 " clip-rule="nonzero"></path>
            </clipPath>
            <clipPath id="1f13b9c1a0">
              <path d="M 57 7.5 L 75 7.5 L 75 48 L 57 48 Z M 57 7.5 " clip-rule="nonzero"></path>
            </clipPath>
          </defs>
          <path fill="#37b89d"
            d="M 40.058594 20.261719 C 39.375 19.867188 38.671875 19.515625 37.945312 19.203125 C 37.222656 18.890625 36.480469 18.625 35.726562 18.402344 C 34.96875 18.179688 34.203125 18 33.425781 17.871094 C 32.648438 17.738281 31.863281 17.652344 31.078125 17.613281 C 30.289062 17.570312 29.503906 17.578125 28.714844 17.632812 C 27.929688 17.6875 27.148438 17.785156 26.375 17.933594 C 25.601562 18.078125 24.835938 18.269531 24.085938 18.507812 C 23.332031 18.746094 22.597656 19.023438 21.878906 19.347656 C 21.160156 19.671875 20.460938 20.039062 19.785156 20.445312 C 19.109375 20.851562 18.460938 21.296875 17.839844 21.777344 C 17.214844 22.261719 16.625 22.78125 16.0625 23.335938 C 15.5 23.886719 14.976562 24.472656 14.484375 25.089844 C 13.992188 25.707031 13.535156 26.347656 13.121094 27.019531 C 12.707031 27.6875 12.332031 28.378906 11.996094 29.09375 C 11.664062 29.808594 11.371094 30.539062 11.125 31.289062 C 10.878906 32.039062 10.675781 32.796875 10.519531 33.570312 L 13.011719 34.070312 C 13.152344 33.394531 13.328125 32.730469 13.546875 32.078125 C 13.761719 31.425781 14.015625 30.789062 14.308594 30.164062 C 14.601562 29.542969 14.929688 28.9375 15.292969 28.355469 C 15.65625 27.769531 16.054688 27.207031 16.484375 26.671875 C 16.914062 26.132812 17.375 25.625 17.863281 25.140625 C 18.351562 24.65625 18.871094 24.207031 19.414062 23.785156 C 19.957031 23.363281 20.523438 22.972656 21.113281 22.617188 C 21.703125 22.261719 22.3125 21.945312 22.9375 21.660156 C 23.566406 21.378906 24.207031 21.132812 24.863281 20.925781 C 25.519531 20.71875 26.1875 20.550781 26.863281 20.421875 C 27.539062 20.292969 28.21875 20.207031 28.90625 20.160156 C 29.59375 20.109375 30.28125 20.101562 30.96875 20.136719 C 31.65625 20.171875 32.335938 20.242188 33.015625 20.359375 C 33.695312 20.472656 34.363281 20.625 35.023438 20.820312 C 35.683594 21.011719 36.332031 21.242188 36.964844 21.511719 C 37.597656 21.78125 38.210938 22.089844 38.808594 22.429688 Z M 40.058594 20.261719 "
            fill-opacity="1" fill-rule="nonzero"></path>
          <path fill="#37b89d"
            d="M 30.078125 57.519531 C 33.640625 57.523438 36.96875 56.636719 40.058594 54.863281 L 38.808594 52.691406 C 38.210938 53.035156 37.597656 53.34375 36.964844 53.613281 C 36.332031 53.886719 35.683594 54.117188 35.023438 54.3125 C 34.359375 54.507812 33.691406 54.660156 33.011719 54.777344 C 32.332031 54.890625 31.648438 54.964844 30.960938 55 C 30.273438 55.035156 29.585938 55.027344 28.898438 54.980469 C 28.210938 54.933594 27.527344 54.84375 26.851562 54.714844 C 26.175781 54.589844 25.507812 54.421875 24.851562 54.214844 C 24.191406 54.007812 23.550781 53.761719 22.921875 53.480469 C 22.292969 53.195312 21.683594 52.875 21.09375 52.519531 C 20.503906 52.167969 19.9375 51.777344 19.394531 51.355469 C 18.847656 50.933594 18.332031 50.480469 17.839844 49.996094 C 17.347656 49.511719 16.890625 49 16.457031 48.464844 C 16.027344 47.925781 15.632812 47.363281 15.269531 46.777344 C 14.902344 46.195312 14.574219 45.589844 14.285156 44.964844 C 13.992188 44.339844 13.738281 43.703125 13.519531 43.046875 C 13.304688 42.394531 13.125 41.730469 12.988281 41.054688 L 10.492188 41.554688 C 10.722656 42.671875 11.042969 43.765625 11.460938 44.832031 C 11.878906 45.894531 12.382812 46.914062 12.972656 47.894531 C 13.5625 48.871094 14.234375 49.792969 14.984375 50.652344 C 15.734375 51.515625 16.550781 52.308594 17.4375 53.03125 C 18.324219 53.753906 19.265625 54.394531 20.261719 54.957031 C 21.253906 55.515625 22.292969 55.988281 23.371094 56.371094 C 24.445312 56.753906 25.546875 57.039062 26.675781 57.234375 C 27.800781 57.425781 28.933594 57.523438 30.078125 57.519531 Z M 30.078125 57.519531 "
            fill-opacity="1" fill-rule="nonzero"></path>
          <path fill="#37b89d"
            d="M 10.121094 37.5625 C 10.121094 38.023438 10.121094 38.472656 10.121094 38.921875 L 12.613281 38.699219 C 12.546875 37.941406 12.546875 37.183594 12.613281 36.425781 L 10.121094 36.203125 C 10.121094 36.652344 10.121094 37.101562 10.121094 37.5625 Z M 10.121094 37.5625 "
            fill-opacity="1" fill-rule="nonzero"></path>
          <g clip-path="url(#2c065e051d)">
            <path fill="#37b89d"
              d="M 1.261719 42.402344 C 1.085938 42.417969 0.917969 42.464844 0.761719 42.554688 C 0.601562 42.640625 0.472656 42.753906 0.363281 42.898438 C 0.257812 43.039062 0.183594 43.199219 0.144531 43.375 C 0.105469 43.550781 0.105469 43.722656 0.140625 43.898438 C 0.917969 47.613281 2.351562 51.054688 4.429688 54.226562 C 4.636719 54.539062 4.921875 54.722656 5.292969 54.777344 C 5.65625 54.832031 5.980469 54.746094 6.265625 54.515625 C 6.734375 54.144531 7.25 53.867188 7.820312 53.683594 C 8.390625 53.503906 8.972656 53.429688 9.570312 53.464844 C 10.164062 53.5 10.738281 53.636719 11.28125 53.882812 C 11.828125 54.125 12.3125 54.460938 12.734375 54.882812 C 13.15625 55.304688 13.488281 55.789062 13.734375 56.332031 C 13.976562 56.878906 14.117188 57.449219 14.152344 58.046875 C 14.183594 58.640625 14.109375 59.226562 13.929688 59.792969 C 13.75 60.363281 13.472656 60.882812 13.101562 61.351562 C 12.867188 61.640625 12.777344 61.96875 12.839844 62.335938 C 12.898438 62.699219 13.078125 62.980469 13.386719 63.183594 C 16.566406 65.277344 20.015625 66.714844 23.742188 67.5 C 23.914062 67.535156 24.085938 67.535156 24.261719 67.5 C 24.433594 67.460938 24.589844 67.390625 24.734375 67.285156 C 24.878906 67.179688 24.992188 67.050781 25.082031 66.898438 C 25.167969 66.742188 25.21875 66.578125 25.238281 66.402344 C 25.300781 65.804688 25.464844 65.234375 25.738281 64.695312 C 26.011719 64.160156 26.371094 63.6875 26.816406 63.285156 C 27.261719 62.878906 27.769531 62.570312 28.332031 62.355469 C 28.894531 62.136719 29.476562 62.03125 30.078125 62.03125 C 30.679688 62.03125 31.261719 62.136719 31.824219 62.355469 C 32.386719 62.570312 32.890625 62.878906 33.339844 63.285156 C 33.785156 63.6875 34.144531 64.160156 34.417969 64.695312 C 34.691406 65.234375 34.855469 65.804688 34.917969 66.402344 C 34.953125 66.773438 35.117188 67.066406 35.417969 67.289062 C 35.636719 67.445312 35.882812 67.527344 36.152344 67.523438 L 36.414062 67.523438 C 40.128906 66.746094 43.570312 65.316406 46.742188 63.234375 C 47.050781 63.03125 47.234375 62.75 47.292969 62.386719 C 47.351562 62.019531 47.265625 61.691406 47.03125 61.398438 C 46.652344 60.933594 46.375 60.417969 46.1875 59.847656 C 46.003906 59.277344 45.929688 58.695312 45.960938 58.097656 C 45.992188 57.5 46.132812 56.925781 46.375 56.378906 C 46.621094 55.832031 46.953125 55.347656 47.378906 54.925781 L 47.480469 54.839844 L 46.742188 53.777344 L 46.019531 52.769531 C 45.875 52.863281 45.746094 52.976562 45.632812 53.105469 C 45.078125 53.664062 44.621094 54.292969 44.269531 55 C 43.917969 55.703125 43.683594 56.445312 43.570312 57.226562 C 43.460938 58.007812 43.472656 58.785156 43.613281 59.558594 C 43.75 60.335938 44.007812 61.070312 44.386719 61.761719 C 42.125 63.097656 39.71875 64.089844 37.175781 64.742188 C 36.949219 63.988281 36.609375 63.285156 36.152344 62.640625 C 35.699219 61.992188 35.15625 61.433594 34.523438 60.964844 C 33.890625 60.492188 33.199219 60.132812 32.449219 59.886719 C 31.699219 59.636719 30.929688 59.515625 30.140625 59.515625 C 29.351562 59.515625 28.582031 59.636719 27.832031 59.886719 C 27.082031 60.132812 26.390625 60.492188 25.757812 60.964844 C 25.125 61.433594 24.582031 61.992188 24.125 62.640625 C 23.671875 63.285156 23.332031 63.988281 23.105469 64.742188 C 20.5625 64.09375 18.164062 63.101562 15.90625 61.761719 C 16.28125 61.0625 16.535156 60.324219 16.671875 59.546875 C 16.808594 58.765625 16.816406 57.984375 16.703125 57.203125 C 16.585938 56.421875 16.351562 55.675781 15.996094 54.96875 C 15.636719 54.261719 15.179688 53.628906 14.621094 53.070312 C 14.0625 52.507812 13.429688 52.050781 12.722656 51.695312 C 12.015625 51.339844 11.269531 51.105469 10.488281 50.988281 C 9.703125 50.875 8.921875 50.882812 8.144531 51.019531 C 7.363281 51.15625 6.625 51.410156 5.929688 51.78125 C 4.582031 49.523438 3.585938 47.121094 2.933594 44.574219 C 3.691406 44.34375 4.390625 44.003906 5.039062 43.550781 C 5.683594 43.097656 6.242188 42.554688 6.714844 41.921875 C 7.183594 41.285156 7.542969 40.59375 7.792969 39.847656 C 8.039062 39.097656 8.164062 38.328125 8.164062 37.539062 C 8.164062 36.746094 8.039062 35.976562 7.792969 35.230469 C 7.542969 34.480469 7.183594 33.789062 6.714844 33.15625 C 6.242188 32.519531 5.683594 31.976562 5.039062 31.523438 C 4.390625 31.070312 3.691406 30.730469 2.933594 30.503906 C 3.582031 27.957031 4.582031 25.558594 5.929688 23.304688 C 6.625 23.679688 7.363281 23.933594 8.144531 24.070312 C 8.921875 24.203125 9.703125 24.214844 10.488281 24.097656 C 11.269531 23.984375 12.015625 23.746094 12.722656 23.390625 C 13.429688 23.035156 14.0625 22.578125 14.621094 22.019531 C 15.179688 21.460938 15.636719 20.824219 15.996094 20.117188 C 16.351562 19.410156 16.585938 18.667969 16.703125 17.882812 C 16.816406 17.101562 16.808594 16.320312 16.671875 15.542969 C 16.535156 14.761719 16.28125 14.023438 15.90625 13.324219 C 18.160156 11.980469 20.5625 10.980469 23.105469 10.332031 C 23.332031 11.085938 23.671875 11.789062 24.125 12.433594 C 24.582031 13.082031 25.125 13.640625 25.757812 14.109375 C 26.390625 14.582031 27.082031 14.941406 27.832031 15.1875 C 28.582031 15.4375 29.351562 15.5625 30.140625 15.5625 C 30.929688 15.5625 31.699219 15.4375 32.449219 15.1875 C 33.199219 14.941406 33.890625 14.582031 34.523438 14.109375 C 35.15625 13.640625 35.699219 13.082031 36.152344 12.433594 C 36.609375 11.789062 36.949219 11.085938 37.175781 10.332031 C 39.722656 10.984375 42.125 11.980469 44.386719 13.324219 C 44.011719 14.015625 43.753906 14.75 43.617188 15.523438 C 43.476562 16.300781 43.464844 17.074219 43.578125 17.855469 C 43.6875 18.632812 43.921875 19.375 44.273438 20.078125 C 44.625 20.78125 45.078125 21.414062 45.632812 21.96875 C 45.753906 22.09375 45.886719 22.207031 46.03125 22.308594 L 47.542969 20.335938 L 47.441406 20.25 C 47.015625 19.824219 46.683594 19.339844 46.4375 18.796875 C 46.195312 18.25 46.054688 17.675781 46.023438 17.078125 C 45.992188 16.480469 46.066406 15.898438 46.25 15.328125 C 46.4375 14.757812 46.714844 14.238281 47.09375 13.773438 C 47.324219 13.488281 47.410156 13.164062 47.355469 12.800781 C 47.296875 12.4375 47.113281 12.15625 46.804688 11.953125 C 43.617188 9.847656 40.15625 8.40625 36.414062 7.625 C 36.242188 7.589844 36.066406 7.589844 35.894531 7.625 C 35.722656 7.664062 35.5625 7.734375 35.421875 7.839844 C 35.277344 7.945312 35.164062 8.074219 35.074219 8.226562 C 34.988281 8.382812 34.933594 8.546875 34.917969 8.722656 C 34.855469 9.320312 34.691406 9.890625 34.417969 10.429688 C 34.144531 10.964844 33.785156 11.4375 33.339844 11.839844 C 32.890625 12.242188 32.386719 12.554688 31.824219 12.769531 C 31.261719 12.988281 30.679688 13.09375 30.078125 13.09375 C 29.476562 13.09375 28.894531 12.988281 28.332031 12.769531 C 27.769531 12.554688 27.261719 12.242188 26.816406 11.839844 C 26.371094 11.4375 26.011719 10.964844 25.738281 10.429688 C 25.464844 9.890625 25.300781 9.320312 25.238281 8.722656 C 25.21875 8.546875 25.167969 8.382812 25.082031 8.226562 C 24.992188 8.074219 24.878906 7.945312 24.734375 7.839844 C 24.589844 7.734375 24.433594 7.664062 24.261719 7.625 C 24.085938 7.589844 23.914062 7.589844 23.742188 7.625 C 20.027344 8.40625 16.582031 9.839844 13.414062 11.929688 C 13.105469 12.128906 12.921875 12.414062 12.863281 12.777344 C 12.808594 13.140625 12.894531 13.464844 13.125 13.75 C 13.496094 14.21875 13.773438 14.734375 13.953125 15.304688 C 14.136719 15.875 14.210938 16.457031 14.175781 17.054688 C 14.140625 17.648438 14.003906 18.222656 13.757812 18.765625 C 13.515625 19.3125 13.179688 19.796875 12.757812 20.21875 C 12.335938 20.640625 11.851562 20.972656 11.308594 21.21875 C 10.761719 21.460938 10.191406 21.601562 9.59375 21.636719 C 8.996094 21.667969 8.414062 21.59375 7.84375 21.414062 C 7.277344 21.234375 6.757812 20.957031 6.289062 20.585938 C 6.003906 20.355469 5.679688 20.265625 5.316406 20.324219 C 4.949219 20.378906 4.660156 20.558594 4.457031 20.871094 C 2.363281 24.050781 0.925781 27.5 0.140625 31.226562 C 0.105469 31.398438 0.105469 31.570312 0.140625 31.746094 C 0.179688 31.917969 0.25 32.074219 0.355469 32.21875 C 0.460938 32.363281 0.589844 32.476562 0.742188 32.566406 C 0.898438 32.652344 1.0625 32.703125 1.238281 32.722656 C 1.835938 32.785156 2.40625 32.949219 2.945312 33.222656 C 3.480469 33.496094 3.953125 33.855469 4.355469 34.300781 C 4.757812 34.75 5.070312 35.253906 5.285156 35.816406 C 5.503906 36.378906 5.609375 36.960938 5.609375 37.5625 C 5.609375 38.164062 5.503906 38.746094 5.285156 39.308594 C 5.070312 39.871094 4.757812 40.375 4.355469 40.824219 C 3.953125 41.269531 3.480469 41.628906 2.945312 41.902344 C 2.40625 42.175781 1.835938 42.339844 1.238281 42.402344 Z M 1.261719 42.402344 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </g>
          <path fill="#37b89d"
            d="M 25.089844 32.574219 C 24.921875 32.574219 24.765625 32.605469 24.609375 32.667969 C 24.457031 32.730469 24.324219 32.820312 24.207031 32.9375 C 24.089844 33.054688 24 33.191406 23.9375 33.34375 C 23.871094 33.496094 23.839844 33.65625 23.839844 33.820312 L 23.839844 46.292969 C 23.839844 46.460938 23.871094 46.617188 23.9375 46.773438 C 24 46.925781 24.089844 47.058594 24.207031 47.175781 C 24.324219 47.292969 24.457031 47.382812 24.609375 47.445312 C 24.765625 47.511719 24.921875 47.542969 25.089844 47.542969 L 32.574219 47.542969 C 32.738281 47.542969 32.898438 47.511719 33.050781 47.445312 C 33.203125 47.382812 33.335938 47.292969 33.453125 47.175781 C 33.570312 47.058594 33.660156 46.925781 33.726562 46.773438 C 33.789062 46.617188 33.820312 46.460938 33.820312 46.292969 L 33.820312 33.820312 C 33.820312 33.65625 33.789062 33.496094 33.726562 33.34375 C 33.660156 33.191406 33.570312 33.054688 33.453125 32.9375 C 33.335938 32.820312 33.203125 32.730469 33.050781 32.667969 C 32.898438 32.605469 32.738281 32.574219 32.574219 32.574219 Z M 31.324219 45.046875 L 26.335938 45.046875 L 26.335938 35.066406 L 31.324219 35.066406 Z M 31.324219 45.046875 "
            fill-opacity="1" fill-rule="nonzero"></path>
          <path fill="#37b89d"
            d="M 46.292969 46.292969 L 46.292969 28.832031 C 46.292969 28.664062 46.261719 28.507812 46.199219 28.351562 C 46.136719 28.199219 46.046875 28.066406 45.929688 27.949219 C 45.8125 27.832031 45.675781 27.742188 45.523438 27.679688 C 45.371094 27.613281 45.210938 27.582031 45.046875 27.582031 L 37.5625 27.582031 C 37.398438 27.582031 37.238281 27.613281 37.085938 27.679688 C 36.933594 27.742188 36.796875 27.832031 36.679688 27.949219 C 36.5625 28.066406 36.472656 28.199219 36.410156 28.351562 C 36.347656 28.507812 36.316406 28.664062 36.316406 28.832031 L 36.316406 46.292969 C 36.316406 46.460938 36.347656 46.617188 36.410156 46.773438 C 36.472656 46.925781 36.5625 47.058594 36.679688 47.175781 C 36.796875 47.292969 36.933594 47.382812 37.085938 47.445312 C 37.238281 47.511719 37.398438 47.542969 37.5625 47.542969 L 45.046875 47.542969 C 45.210938 47.542969 45.371094 47.511719 45.523438 47.445312 C 45.675781 47.382812 45.8125 47.292969 45.929688 47.175781 C 46.046875 47.058594 46.136719 46.925781 46.199219 46.773438 C 46.261719 46.617188 46.292969 46.460938 46.292969 46.292969 Z M 43.800781 45.046875 L 38.808594 45.046875 L 38.808594 30.078125 L 43.800781 30.078125 Z M 43.800781 45.046875 "
            fill-opacity="1" fill-rule="nonzero"></path>
          <path fill="#37b89d"
            d="M 50.035156 47.542969 L 57.519531 47.542969 C 57.6875 47.542969 57.84375 47.511719 58 47.445312 C 58.152344 47.382812 58.285156 47.292969 58.402344 47.175781 C 58.519531 47.058594 58.609375 46.925781 58.671875 46.773438 C 58.738281 46.617188 58.769531 46.460938 58.769531 46.292969 L 58.769531 23.839844 C 58.769531 23.675781 58.738281 23.515625 58.671875 23.363281 C 58.609375 23.210938 58.519531 23.074219 58.402344 22.957031 C 58.285156 22.84375 58.152344 22.75 58 22.6875 C 57.84375 22.625 57.6875 22.59375 57.519531 22.59375 L 50.035156 22.59375 C 49.871094 22.59375 49.710938 22.625 49.558594 22.6875 C 49.40625 22.75 49.269531 22.84375 49.15625 22.957031 C 49.039062 23.074219 48.945312 23.210938 48.882812 23.363281 C 48.820312 23.515625 48.789062 23.675781 48.789062 23.839844 L 48.789062 46.292969 C 48.789062 46.460938 48.820312 46.617188 48.882812 46.773438 C 48.945312 46.925781 49.039062 47.058594 49.15625 47.175781 C 49.269531 47.292969 49.40625 47.382812 49.558594 47.445312 C 49.710938 47.511719 49.871094 47.542969 50.035156 47.542969 Z M 51.285156 25.089844 L 56.273438 25.089844 L 56.273438 45.046875 L 51.285156 45.046875 Z M 51.285156 25.089844 "
            fill-opacity="1" fill-rule="nonzero"></path>
          <g clip-path="url(#1f13b9c1a0)">
            <path fill="#37b89d"
              d="M 58.769531 20.097656 L 61.261719 20.097656 L 61.261719 46.292969 C 61.261719 46.460938 61.292969 46.617188 61.359375 46.773438 C 61.421875 46.925781 61.511719 47.058594 61.628906 47.175781 C 61.746094 47.292969 61.878906 47.382812 62.03125 47.445312 C 62.1875 47.511719 62.34375 47.542969 62.511719 47.542969 L 69.996094 47.542969 C 70.160156 47.542969 70.320312 47.511719 70.472656 47.445312 C 70.625 47.382812 70.761719 47.292969 70.875 47.175781 C 70.992188 47.058594 71.082031 46.925781 71.148438 46.773438 C 71.210938 46.617188 71.242188 46.460938 71.242188 46.292969 L 71.242188 20.097656 L 73.738281 20.097656 C 73.972656 20.097656 74.191406 20.035156 74.394531 19.914062 C 74.59375 19.789062 74.746094 19.621094 74.851562 19.410156 C 74.957031 19.199219 75 18.976562 74.980469 18.738281 C 74.957031 18.503906 74.875 18.292969 74.734375 18.101562 L 67.25 8.125 C 67.132812 7.964844 66.984375 7.84375 66.808594 7.757812 C 66.636719 7.667969 66.449219 7.625 66.253906 7.625 C 66.054688 7.625 65.871094 7.667969 65.695312 7.757812 C 65.519531 7.84375 65.371094 7.964844 65.253906 8.125 L 57.769531 18.101562 C 57.628906 18.292969 57.546875 18.503906 57.527344 18.742188 C 57.507812 18.976562 57.550781 19.203125 57.65625 19.414062 C 57.765625 19.621094 57.917969 19.789062 58.117188 19.914062 C 58.316406 20.035156 58.535156 20.097656 58.769531 20.097656 Z M 66.253906 10.957031 L 71.242188 17.605469 L 69.996094 17.605469 C 69.828125 17.605469 69.671875 17.636719 69.515625 17.699219 C 69.363281 17.761719 69.230469 17.851562 69.113281 17.96875 C 68.996094 18.085938 68.90625 18.222656 68.84375 18.375 C 68.777344 18.527344 68.746094 18.6875 68.746094 18.851562 L 68.746094 45.046875 L 63.757812 45.046875 L 63.757812 18.851562 C 63.757812 18.6875 63.726562 18.527344 63.664062 18.375 C 63.597656 18.222656 63.507812 18.085938 63.390625 17.96875 C 63.277344 17.851562 63.140625 17.761719 62.988281 17.699219 C 62.835938 17.636719 62.675781 17.605469 62.511719 17.605469 L 61.261719 17.605469 Z M 66.253906 10.957031 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </g>
        </svg>
        <p class="text-center text-[#37b89d] font-semibold text-lg mt-4">Augmentation de la productivité</p>
      </div>
    </div>
  </section>
  <!-- The benefits of EDI END -->


  <!-- commercial flows Start -->
  <section id="benefices-directs" class="pt-18 pb-20 bg-white relative">
    <div
      class="hidden xl:flex h-[400px] w-[400px] top-[134px] 2xl:top-[149px] -right-[184px] 2xl:-right-[80px] z-0 border-white opacity-30 border-8 rounded-full absolute items-center justify-center text-15xl font-medium text-white">
      2</div>
    <div class="container px-4 mx-auto max-w-6xl text-gray-800">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center leading-title">
        Avec <label class="text-digitus-tradexpress">Digitus, fiabilisez et accélérez</label> vos flux
        commerciaux
        avec vos partenaires</h2>
      <div class="mt-12 ">
        <div class="text-center" data-aos="fade-up" data-aos-duration="500">Digitus, partenaires d’<label
            class="text-digitus-tradexpress">IBM, Cléo et Générix</label> et développeur de sa propre
          solution
          <label class="text-digitus-tradexpress">Hubtimize</label>, vous propose des solutions EDI
          sécurisées,
          intuitives, et fiables pour digitaliser tous vos flux commerciaux.<br /><br />Catalyser vos échanges
          et
          dynamiser sur 360° votre écosystème BtoB :
        </div>
        <div data-aos="fade-up" data-aos-duration="500"
          class="flex flex-col sm:flex-row max-w-xl ml-[113px] md:ml-[157px] lg:ml-[334px] mt-4 mb-8">
          <ul class="sm:w-1/2 smallmcheckulgreen" >
            <li>Fournisseurs</li>
            <li>Clients</li>
            <li>Douanes</li>
          </ul>
          <ul class="sm:w-1/2 smallmcheckulgreen">
            <li>Transporteurs</li>
            <li>Etats</li>
            <li>Collectivités</li>
          </ul>
        </div>
        <div data-aos="fade-up" data-aos-duration="500" class="mt-4 text-center">Avec <label
            class="text-digitus-tradexpress">Digitus, L’EDI sera un levier de performance</label> dans la
          communication avec votre écosystème.</div>
      </div>
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center mt-12">Les
        <label class="text-digitus-tradexpress">opportunités</label> du digital et de l’EDI avec <label
          class="text-digitus-tradexpress">Digitus</label>
      </h2>
      <div data-aos="fade-up" data-aos-duration="500"
        class="flex flex-col md:flex-row items-start gap-14 mt-18 mb-12 opacity-80 mx-auto">
        <div class="w-full md:w-1/3 flex flex-col items-center gap-4"><svg fill="#ff914d" class="h-20"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <defs>
              <clipPath id="af0d4745d5">
                <path d="M 1 37 L 37 37 L 37 72.5625 L 1 72.5625 Z M 1 37 " clip-rule="nonzero"></path>
              </clipPath>
              <clipPath id="5720c90af9">
                <path d="M 39 37 L 75 37 L 75 72.5625 L 39 72.5625 Z M 39 37 " clip-rule="nonzero">
                </path>
              </clipPath>
            </defs>
            <g clip-path="url(#af0d4745d5)">
              <path fill="#ef6843"
                d="M 18.992188 72.554688 C 18.421875 72.554688 17.851562 72.527344 17.28125 72.472656 C 16.714844 72.414062 16.148438 72.332031 15.589844 72.21875 C 15.027344 72.105469 14.476562 71.96875 13.929688 71.800781 C 13.382812 71.636719 12.84375 71.441406 12.316406 71.222656 C 11.789062 71.003906 11.273438 70.757812 10.769531 70.488281 C 10.265625 70.21875 9.777344 69.921875 9.300781 69.601562 C 8.828125 69.285156 8.367188 68.941406 7.925781 68.578125 C 7.484375 68.214844 7.0625 67.828125 6.660156 67.421875 C 6.253906 67.019531 5.871094 66.59375 5.507812 66.148438 C 5.144531 65.707031 4.804688 65.246094 4.488281 64.765625 C 4.171875 64.289062 3.878906 63.796875 3.609375 63.292969 C 3.339844 62.785156 3.09375 62.265625 2.875 61.734375 C 2.65625 61.207031 2.464844 60.664062 2.300781 60.117188 C 2.132812 59.566406 1.996094 59.011719 1.882812 58.445312 C 1.773438 57.882812 1.6875 57.316406 1.632812 56.746094 C 1.574219 56.171875 1.546875 55.601562 1.546875 55.027344 C 1.546875 54.453125 1.574219 53.878906 1.632812 53.308594 C 1.6875 52.734375 1.769531 52.167969 1.882812 51.605469 C 1.992188 51.042969 2.132812 50.484375 2.296875 49.9375 C 2.464844 49.386719 2.65625 48.847656 2.875 48.316406 C 3.09375 47.785156 3.335938 47.265625 3.605469 46.761719 C 3.875 46.253906 4.167969 45.761719 4.484375 45.285156 C 4.804688 44.808594 5.144531 44.347656 5.503906 43.902344 C 5.867188 43.457031 6.25 43.035156 6.65625 42.628906 C 7.058594 42.222656 7.480469 41.835938 7.921875 41.472656 C 8.363281 41.109375 8.824219 40.765625 9.296875 40.445312 C 9.773438 40.128906 10.261719 39.832031 10.765625 39.5625 C 11.269531 39.292969 11.785156 39.046875 12.3125 38.828125 C 12.839844 38.605469 13.378906 38.414062 13.925781 38.246094 C 14.46875 38.082031 15.023438 37.941406 15.585938 37.828125 C 16.144531 37.71875 16.707031 37.632812 17.277344 37.578125 C 17.84375 37.519531 18.414062 37.492188 18.988281 37.492188 C 19.558594 37.492188 20.128906 37.519531 20.695312 37.578125 C 21.265625 37.632812 21.828125 37.71875 22.390625 37.832031 C 22.949219 37.941406 23.503906 38.082031 24.050781 38.25 C 24.59375 38.414062 25.132812 38.609375 25.660156 38.828125 C 26.1875 39.050781 26.703125 39.292969 27.207031 39.566406 C 27.710938 39.835938 28.199219 40.132812 28.675781 40.449219 C 29.148438 40.769531 29.609375 41.109375 30.050781 41.476562 C 30.492188 41.839844 30.914062 42.226562 31.316406 42.632812 C 31.722656 43.039062 32.105469 43.460938 32.464844 43.90625 C 32.828125 44.351562 33.167969 44.8125 33.484375 45.289062 C 33.800781 45.765625 34.09375 46.257812 34.363281 46.765625 C 34.632812 47.273438 34.878906 47.789062 35.09375 48.320312 C 35.3125 48.851562 35.507812 49.390625 35.671875 49.941406 C 35.835938 50.492188 35.976562 51.046875 36.085938 51.609375 C 36.199219 52.175781 36.28125 52.742188 36.335938 53.3125 C 36.394531 53.882812 36.421875 54.457031 36.421875 55.03125 C 36.417969 55.605469 36.390625 56.179688 36.335938 56.75 C 36.277344 57.320312 36.191406 57.886719 36.082031 58.449219 C 35.96875 59.011719 35.832031 59.566406 35.664062 60.117188 C 35.5 60.664062 35.304688 61.203125 35.085938 61.734375 C 34.867188 62.261719 34.625 62.78125 34.355469 63.285156 C 34.085938 63.792969 33.792969 64.285156 33.476562 64.761719 C 33.160156 65.238281 32.820312 65.699219 32.457031 66.140625 C 32.09375 66.585938 31.710938 67.007812 31.308594 67.414062 C 30.90625 67.820312 30.484375 68.207031 30.042969 68.570312 C 29.601562 68.933594 29.144531 69.273438 28.667969 69.59375 C 28.195312 69.914062 27.707031 70.207031 27.203125 70.476562 C 26.699219 70.75 26.183594 70.996094 25.65625 71.214844 C 25.128906 71.433594 24.59375 71.628906 24.046875 71.792969 C 23.503906 71.960938 22.949219 72.101562 22.390625 72.214844 C 21.832031 72.328125 21.265625 72.410156 20.699219 72.46875 C 20.132812 72.523438 19.5625 72.554688 18.992188 72.554688 Z M 18.992188 42.046875 C 18.144531 42.046875 17.308594 42.128906 16.476562 42.292969 C 15.648438 42.460938 14.839844 42.707031 14.058594 43.03125 C 13.277344 43.359375 12.535156 43.757812 11.828125 44.230469 C 11.125 44.703125 10.472656 45.242188 9.875 45.84375 C 9.277344 46.445312 8.742188 47.097656 8.273438 47.804688 C 7.800781 48.515625 7.40625 49.261719 7.082031 50.046875 C 6.757812 50.832031 6.511719 51.644531 6.347656 52.480469 C 6.183594 53.3125 6.101562 54.15625 6.101562 55.007812 C 6.101562 55.859375 6.183594 56.703125 6.347656 57.535156 C 6.511719 58.371094 6.757812 59.179688 7.082031 59.96875 C 7.40625 60.753906 7.800781 61.5 8.273438 62.207031 C 8.742188 62.917969 9.277344 63.570312 9.875 64.171875 C 10.472656 64.773438 11.125 65.3125 11.828125 65.785156 C 12.535156 66.257812 13.277344 66.65625 14.058594 66.984375 C 14.839844 67.308594 15.648438 67.554688 16.476562 67.71875 C 17.308594 67.886719 18.144531 67.96875 18.992188 67.96875 C 19.839844 67.96875 20.675781 67.886719 21.507812 67.71875 C 22.335938 67.554688 23.144531 67.308594 23.925781 66.984375 C 24.707031 66.65625 25.449219 66.257812 26.15625 65.785156 C 26.859375 65.3125 27.507812 64.773438 28.109375 64.171875 C 28.707031 63.570312 29.242188 62.917969 29.710938 62.207031 C 30.179688 61.5 30.578125 60.753906 30.902344 59.96875 C 31.226562 59.179688 31.472656 58.371094 31.636719 57.535156 C 31.800781 56.703125 31.882812 55.859375 31.882812 55.007812 C 31.882812 54.15625 31.800781 53.3125 31.636719 52.480469 C 31.472656 51.644531 31.226562 50.832031 30.902344 50.046875 C 30.578125 49.261719 30.179688 48.515625 29.710938 47.804688 C 29.242188 47.097656 28.707031 46.445312 28.109375 45.84375 C 27.507812 45.242188 26.859375 44.703125 26.15625 44.230469 C 25.449219 43.757812 24.707031 43.359375 23.925781 43.03125 C 23.144531 42.707031 22.335938 42.460938 21.507812 42.292969 C 20.675781 42.128906 19.839844 42.046875 18.992188 42.046875 Z M 18.992188 42.046875 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ef6843"
              d="M 13.707031 45.820312 C 12.902344 46.289062 12.171875 46.851562 11.515625 47.511719 C 10.859375 48.171875 10.300781 48.90625 9.835938 49.714844 C 9.371094 50.523438 9.019531 51.378906 8.78125 52.277344 C 8.539062 53.179688 8.421875 54.097656 8.421875 55.03125 C 8.421875 55.964844 8.539062 56.882812 8.78125 57.78125 C 9.019531 58.683594 9.375 59.539062 9.835938 60.34375 C 10.300781 61.152344 10.859375 61.886719 11.515625 62.546875 C 12.171875 63.207031 12.902344 63.769531 13.707031 64.234375 C 14.511719 64.699219 15.359375 65.054688 16.257812 65.292969 C 17.152344 65.535156 18.0625 65.65625 18.992188 65.65625 C 19.917969 65.65625 20.832031 65.535156 21.726562 65.292969 C 22.625 65.054688 23.472656 64.699219 24.277344 64.234375 C 25.082031 63.769531 25.8125 63.207031 26.46875 62.546875 C 27.125 61.886719 27.683594 61.152344 28.148438 60.347656 C 28.613281 59.539062 28.96875 58.683594 29.207031 57.78125 C 29.449219 56.882812 29.570312 55.964844 29.570312 55.03125 C 29.570312 54.097656 29.449219 53.179688 29.210938 52.277344 C 28.96875 51.375 28.617188 50.523438 28.152344 49.714844 C 27.6875 48.90625 27.125 48.171875 26.46875 47.511719 C 25.8125 46.851562 25.082031 46.289062 24.277344 45.820312 C 23.472656 45.355469 22.625 45.003906 21.726562 44.761719 C 20.832031 44.519531 19.917969 44.398438 18.992188 44.398438 C 18.0625 44.398438 17.152344 44.519531 16.257812 44.761719 C 15.359375 45.003906 14.511719 45.355469 13.707031 45.820312 Z M 13.707031 45.820312 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <g clip-path="url(#5720c90af9)">
              <path fill="#ef6843"
                d="M 57.394531 72.554688 C 56.824219 72.554688 56.253906 72.527344 55.683594 72.472656 C 55.117188 72.414062 54.550781 72.332031 53.992188 72.21875 C 53.429688 72.105469 52.878906 71.96875 52.332031 71.800781 C 51.785156 71.636719 51.246094 71.441406 50.71875 71.222656 C 50.191406 71.003906 49.675781 70.757812 49.171875 70.488281 C 48.667969 70.21875 48.179688 69.921875 47.703125 69.601562 C 47.230469 69.285156 46.769531 68.941406 46.328125 68.578125 C 45.886719 68.214844 45.464844 67.828125 45.058594 67.421875 C 44.65625 67.019531 44.273438 66.59375 43.910156 66.148438 C 43.546875 65.707031 43.207031 65.246094 42.890625 64.765625 C 42.574219 64.289062 42.28125 63.796875 42.011719 63.292969 C 41.742188 62.785156 41.496094 62.265625 41.277344 61.734375 C 41.058594 61.207031 40.867188 60.664062 40.703125 60.117188 C 40.535156 59.566406 40.398438 59.011719 40.285156 58.445312 C 40.171875 57.882812 40.089844 57.316406 40.035156 56.746094 C 39.976562 56.171875 39.949219 55.601562 39.949219 55.027344 C 39.949219 54.453125 39.976562 53.878906 40.035156 53.308594 C 40.089844 52.734375 40.171875 52.167969 40.285156 51.605469 C 40.394531 51.042969 40.535156 50.484375 40.699219 49.9375 C 40.867188 49.386719 41.058594 48.847656 41.277344 48.316406 C 41.496094 47.785156 41.738281 47.265625 42.007812 46.761719 C 42.277344 46.253906 42.570312 45.761719 42.886719 45.285156 C 43.203125 44.808594 43.542969 44.347656 43.90625 43.902344 C 44.269531 43.457031 44.652344 43.035156 45.054688 42.628906 C 45.460938 42.222656 45.882812 41.835938 46.324219 41.472656 C 46.765625 41.109375 47.222656 40.765625 47.699219 40.445312 C 48.175781 40.128906 48.664062 39.832031 49.167969 39.5625 C 49.671875 39.292969 50.1875 39.046875 50.714844 38.828125 C 51.242188 38.605469 51.78125 38.414062 52.324219 38.246094 C 52.871094 38.082031 53.425781 37.941406 53.984375 37.828125 C 54.546875 37.71875 55.109375 37.632812 55.679688 37.578125 C 56.246094 37.519531 56.816406 37.492188 57.386719 37.492188 C 57.960938 37.492188 58.53125 37.519531 59.097656 37.578125 C 59.667969 37.632812 60.230469 37.71875 60.789062 37.832031 C 61.351562 37.941406 61.90625 38.082031 62.449219 38.25 C 62.996094 38.414062 63.535156 38.609375 64.0625 38.828125 C 64.589844 39.050781 65.105469 39.292969 65.609375 39.566406 C 66.113281 39.835938 66.601562 40.132812 67.078125 40.449219 C 67.550781 40.769531 68.011719 41.109375 68.453125 41.476562 C 68.894531 41.839844 69.316406 42.226562 69.71875 42.632812 C 70.121094 43.039062 70.503906 43.460938 70.867188 43.90625 C 71.230469 44.351562 71.570312 44.8125 71.886719 45.289062 C 72.203125 45.765625 72.496094 46.257812 72.765625 46.765625 C 73.035156 47.273438 73.277344 47.789062 73.496094 48.320312 C 73.714844 48.851562 73.90625 49.390625 74.074219 49.941406 C 74.238281 50.492188 74.378906 51.046875 74.488281 51.609375 C 74.601562 52.175781 74.683594 52.742188 74.738281 53.3125 C 74.792969 53.882812 74.824219 54.457031 74.824219 55.03125 C 74.820312 55.605469 74.792969 56.179688 74.734375 56.75 C 74.679688 57.320312 74.59375 57.886719 74.484375 58.449219 C 74.371094 59.011719 74.234375 59.566406 74.066406 60.117188 C 73.898438 60.664062 73.707031 61.203125 73.488281 61.734375 C 73.269531 62.261719 73.027344 62.78125 72.757812 63.285156 C 72.488281 63.792969 72.195312 64.285156 71.878906 64.761719 C 71.558594 65.238281 71.222656 65.699219 70.859375 66.140625 C 70.496094 66.585938 70.113281 67.007812 69.710938 67.414062 C 69.308594 67.820312 68.886719 68.207031 68.445312 68.570312 C 68.003906 68.933594 67.546875 69.273438 67.070312 69.59375 C 66.597656 69.914062 66.109375 70.207031 65.605469 70.476562 C 65.101562 70.75 64.585938 70.996094 64.058594 71.214844 C 63.53125 71.433594 62.996094 71.628906 62.449219 71.792969 C 61.90625 71.960938 61.351562 72.101562 60.792969 72.214844 C 60.234375 72.328125 59.667969 72.410156 59.101562 72.46875 C 58.535156 72.523438 57.964844 72.554688 57.394531 72.554688 Z M 57.394531 42.046875 C 56.546875 42.046875 55.710938 42.128906 54.878906 42.292969 C 54.046875 42.460938 53.242188 42.707031 52.460938 43.03125 C 51.679688 43.359375 50.933594 43.757812 50.230469 44.230469 C 49.527344 44.703125 48.875 45.242188 48.277344 45.84375 C 47.679688 46.445312 47.144531 47.097656 46.675781 47.804688 C 46.203125 48.515625 45.808594 49.261719 45.484375 50.046875 C 45.160156 50.832031 44.914062 51.644531 44.75 52.480469 C 44.585938 53.3125 44.503906 54.15625 44.503906 55.007812 C 44.503906 55.859375 44.585938 56.703125 44.75 57.535156 C 44.914062 58.371094 45.160156 59.179688 45.484375 59.96875 C 45.808594 60.753906 46.203125 61.5 46.675781 62.207031 C 47.144531 62.917969 47.679688 63.570312 48.277344 64.171875 C 48.875 64.773438 49.527344 65.3125 50.230469 65.785156 C 50.933594 66.257812 51.679688 66.65625 52.460938 66.984375 C 53.242188 67.308594 54.046875 67.554688 54.878906 67.71875 C 55.710938 67.886719 56.546875 67.96875 57.394531 67.96875 C 58.242188 67.96875 59.078125 67.886719 59.910156 67.71875 C 60.738281 67.554688 61.546875 67.308594 62.328125 66.984375 C 63.109375 66.65625 63.851562 66.257812 64.554688 65.785156 C 65.261719 65.3125 65.910156 64.773438 66.511719 64.171875 C 67.109375 63.570312 67.644531 62.917969 68.113281 62.207031 C 68.582031 61.5 68.980469 60.753906 69.304688 59.96875 C 69.628906 59.179688 69.875 58.371094 70.039062 57.535156 C 70.203125 56.703125 70.285156 55.859375 70.285156 55.007812 C 70.285156 54.15625 70.203125 53.3125 70.039062 52.480469 C 69.875 51.644531 69.628906 50.832031 69.304688 50.046875 C 68.980469 49.261719 68.582031 48.515625 68.113281 47.804688 C 67.644531 47.097656 67.109375 46.445312 66.511719 45.84375 C 65.910156 45.242188 65.261719 44.703125 64.554688 44.230469 C 63.851562 43.757812 63.109375 43.359375 62.328125 43.03125 C 61.546875 42.707031 60.738281 42.460938 59.910156 42.292969 C 59.078125 42.128906 58.242188 42.046875 57.394531 42.046875 Z M 57.394531 42.046875 "
                fill-opacity="1" fill-rule="nonzero"></path>
            </g>
            <path fill="#ef6843"
              d="M 52.109375 45.820312 C 51.304688 46.289062 50.574219 46.851562 49.917969 47.511719 C 49.257812 48.171875 48.699219 48.90625 48.234375 49.714844 C 47.769531 50.523438 47.417969 51.375 47.175781 52.277344 C 46.933594 53.179688 46.816406 54.097656 46.816406 55.03125 C 46.816406 55.964844 46.9375 56.882812 47.175781 57.78125 C 47.417969 58.683594 47.769531 59.539062 48.234375 60.347656 C 48.699219 61.152344 49.261719 61.886719 49.917969 62.546875 C 50.574219 63.207031 51.304688 63.769531 52.109375 64.234375 C 52.910156 64.699219 53.761719 65.054688 54.65625 65.292969 C 55.554688 65.535156 56.464844 65.65625 57.394531 65.65625 C 58.320312 65.65625 59.234375 65.535156 60.128906 65.292969 C 61.027344 65.054688 61.875 64.699219 62.679688 64.234375 C 63.484375 63.769531 64.210938 63.207031 64.867188 62.546875 C 65.523438 61.886719 66.085938 61.152344 66.546875 60.34375 C 67.011719 59.539062 67.363281 58.683594 67.605469 57.78125 C 67.84375 56.882812 67.964844 55.964844 67.964844 55.03125 C 67.964844 54.097656 67.847656 53.179688 67.605469 52.277344 C 67.367188 51.378906 67.015625 50.523438 66.550781 49.714844 C 66.085938 48.90625 65.527344 48.171875 64.871094 47.511719 C 64.214844 46.851562 63.484375 46.289062 62.679688 45.820312 C 61.875 45.355469 61.027344 45.003906 60.128906 44.761719 C 59.234375 44.519531 58.320312 44.398438 57.394531 44.398438 C 56.464844 44.398438 55.554688 44.519531 54.65625 44.761719 C 53.761719 45.003906 52.910156 45.355469 52.109375 45.820312 Z M 52.109375 45.820312 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 38.167969 39.234375 C 37.597656 39.234375 37.027344 39.207031 36.460938 39.152344 C 35.890625 39.09375 35.328125 39.011719 34.769531 38.898438 C 34.207031 38.785156 33.65625 38.648438 33.109375 38.480469 C 32.5625 38.3125 32.027344 38.121094 31.5 37.902344 C 30.972656 37.679688 30.457031 37.4375 29.953125 37.164062 C 29.449219 36.894531 28.960938 36.601562 28.484375 36.28125 C 28.011719 35.960938 27.554688 35.621094 27.113281 35.257812 C 26.671875 34.894531 26.25 34.507812 25.84375 34.101562 C 25.441406 33.695312 25.058594 33.273438 24.695312 32.828125 C 24.335938 32.386719 23.996094 31.925781 23.675781 31.445312 C 23.359375 30.96875 23.066406 30.476562 22.796875 29.972656 C 22.527344 29.464844 22.285156 28.949219 22.066406 28.417969 C 21.847656 27.886719 21.65625 27.347656 21.492188 26.796875 C 21.324219 26.25 21.1875 25.695312 21.074219 25.128906 C 20.964844 24.566406 20.878906 24 20.824219 23.429688 C 20.769531 22.859375 20.742188 22.285156 20.742188 21.710938 C 20.742188 21.136719 20.769531 20.566406 20.824219 19.996094 C 20.878906 19.421875 20.964844 18.855469 21.074219 18.292969 C 21.1875 17.730469 21.324219 17.175781 21.492188 16.625 C 21.65625 16.078125 21.847656 15.535156 22.066406 15.007812 C 22.285156 14.476562 22.527344 13.957031 22.796875 13.453125 C 23.066406 12.945312 23.359375 12.453125 23.675781 11.976562 C 23.996094 11.5 24.335938 11.039062 24.695312 10.597656 C 25.058594 10.152344 25.441406 9.726562 25.84375 9.320312 C 26.25 8.917969 26.671875 8.53125 27.113281 8.167969 C 27.554688 7.804688 28.011719 7.460938 28.484375 7.144531 C 28.960938 6.824219 29.449219 6.527344 29.953125 6.257812 C 30.457031 5.988281 30.972656 5.742188 31.5 5.523438 C 32.027344 5.304688 32.5625 5.109375 33.109375 4.945312 C 33.65625 4.777344 34.207031 4.636719 34.769531 4.527344 C 35.328125 4.414062 35.890625 4.332031 36.460938 4.273438 C 37.027344 4.21875 37.597656 4.191406 38.167969 4.191406 C 38.738281 4.191406 39.308594 4.21875 39.878906 4.273438 C 40.445312 4.332031 41.007812 4.414062 41.570312 4.527344 C 42.128906 4.636719 42.683594 4.777344 43.226562 4.945312 C 43.773438 5.109375 44.3125 5.304688 44.839844 5.523438 C 45.367188 5.742188 45.882812 5.988281 46.382812 6.257812 C 46.886719 6.527344 47.375 6.824219 47.851562 7.144531 C 48.324219 7.460938 48.785156 7.804688 49.226562 8.167969 C 49.667969 8.53125 50.089844 8.917969 50.492188 9.320312 C 50.894531 9.726562 51.277344 10.152344 51.640625 10.597656 C 52.003906 11.039062 52.34375 11.5 52.660156 11.976562 C 52.976562 12.453125 53.269531 12.945312 53.539062 13.453125 C 53.808594 13.957031 54.050781 14.476562 54.269531 15.007812 C 54.488281 15.535156 54.679688 16.078125 54.847656 16.625 C 55.011719 17.175781 55.152344 17.730469 55.261719 18.292969 C 55.375 18.855469 55.457031 19.421875 55.511719 19.996094 C 55.570312 20.566406 55.597656 21.136719 55.597656 21.710938 C 55.597656 22.285156 55.566406 22.859375 55.511719 23.429688 C 55.457031 24 55.371094 24.566406 55.257812 25.128906 C 55.148438 25.691406 55.007812 26.246094 54.84375 26.796875 C 54.675781 27.347656 54.484375 27.886719 54.265625 28.414062 C 54.046875 28.945312 53.804688 29.464844 53.535156 29.96875 C 53.265625 30.476562 52.972656 30.964844 52.65625 31.445312 C 52.335938 31.921875 52 32.378906 51.636719 32.824219 C 51.273438 33.265625 50.890625 33.691406 50.488281 34.097656 C 50.085938 34.503906 49.660156 34.886719 49.222656 35.253906 C 48.78125 35.617188 48.320312 35.957031 47.847656 36.277344 C 47.375 36.59375 46.882812 36.890625 46.382812 37.160156 C 45.878906 37.429688 45.363281 37.675781 44.835938 37.898438 C 44.308594 38.117188 43.773438 38.308594 43.226562 38.476562 C 42.679688 38.644531 42.128906 38.78125 41.566406 38.894531 C 41.007812 39.007812 40.445312 39.09375 39.875 39.148438 C 39.308594 39.207031 38.738281 39.234375 38.167969 39.234375 Z M 38.167969 8.726562 C 37.324219 8.726562 36.484375 8.808594 35.652344 8.976562 C 34.824219 9.140625 34.015625 9.386719 33.234375 9.714844 C 32.453125 10.039062 31.710938 10.4375 31.007812 10.910156 C 30.300781 11.382812 29.652344 11.921875 29.054688 12.523438 C 28.453125 13.125 27.917969 13.777344 27.449219 14.488281 C 26.980469 15.195312 26.582031 15.941406 26.257812 16.726562 C 25.933594 17.515625 25.691406 18.324219 25.523438 19.160156 C 25.359375 19.992188 25.277344 20.835938 25.277344 21.6875 C 25.277344 22.539062 25.359375 23.382812 25.523438 24.214844 C 25.691406 25.050781 25.933594 25.863281 26.257812 26.648438 C 26.582031 27.433594 26.980469 28.179688 27.449219 28.890625 C 27.917969 29.597656 28.453125 30.25 29.054688 30.851562 C 29.652344 31.453125 30.300781 31.992188 31.007812 32.464844 C 31.710938 32.9375 32.453125 33.335938 33.234375 33.664062 C 34.015625 33.988281 34.824219 34.234375 35.652344 34.402344 C 36.484375 34.566406 37.324219 34.648438 38.167969 34.648438 C 39.015625 34.648438 39.855469 34.566406 40.683594 34.402344 C 41.515625 34.234375 42.320312 33.988281 43.101562 33.664062 C 43.882812 33.335938 44.628906 32.9375 45.332031 32.464844 C 46.035156 31.992188 46.6875 31.453125 47.285156 30.851562 C 47.882812 30.25 48.417969 29.597656 48.886719 28.890625 C 49.359375 28.179688 49.753906 27.433594 50.078125 26.648438 C 50.402344 25.863281 50.648438 25.050781 50.8125 24.214844 C 50.976562 23.382812 51.0625 22.539062 51.0625 21.6875 C 51.0625 20.835938 50.976562 19.992188 50.8125 19.160156 C 50.648438 18.324219 50.402344 17.515625 50.078125 16.726562 C 49.753906 15.941406 49.359375 15.195312 48.886719 14.488281 C 48.417969 13.777344 47.882812 13.125 47.285156 12.523438 C 46.6875 11.921875 46.035156 11.382812 45.332031 10.910156 C 44.628906 10.4375 43.882812 10.039062 43.101562 9.714844 C 42.320312 9.386719 41.515625 9.140625 40.683594 8.976562 C 39.855469 8.808594 39.015625 8.726562 38.167969 8.726562 Z M 38.167969 8.726562 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 32.882812 12.507812 C 32.078125 12.976562 31.347656 13.539062 30.691406 14.199219 C 30.035156 14.855469 29.476562 15.589844 29.011719 16.398438 C 28.550781 17.207031 28.195312 18.058594 27.957031 18.960938 C 27.71875 19.863281 27.597656 20.78125 27.597656 21.710938 C 27.597656 22.644531 27.71875 23.5625 27.957031 24.464844 C 28.199219 25.367188 28.550781 26.21875 29.015625 27.027344 C 29.476562 27.835938 30.039062 28.570312 30.695312 29.230469 C 31.351562 29.890625 32.078125 30.457031 32.882812 30.921875 C 33.6875 31.390625 34.539062 31.742188 35.433594 31.984375 C 36.332031 32.226562 37.246094 32.347656 38.171875 32.347656 C 39.101562 32.347656 40.015625 32.226562 40.910156 31.984375 C 41.808594 31.742188 42.660156 31.390625 43.460938 30.921875 C 44.265625 30.457031 44.996094 29.890625 45.652344 29.230469 C 46.308594 28.570312 46.867188 27.835938 47.332031 27.027344 C 47.796875 26.21875 48.148438 25.367188 48.386719 24.464844 C 48.628906 23.5625 48.746094 22.644531 48.75 21.710938 C 48.75 20.78125 48.628906 19.863281 48.386719 18.960938 C 48.148438 18.058594 47.796875 17.207031 47.332031 16.398438 C 46.867188 15.589844 46.308594 14.855469 45.652344 14.199219 C 44.996094 13.539062 44.265625 12.976562 43.460938 12.507812 C 42.660156 12.042969 41.808594 11.6875 40.910156 11.441406 C 40.015625 11.199219 39.101562 11.078125 38.171875 11.078125 C 37.242188 11.078125 36.332031 11.199219 35.433594 11.441406 C 34.535156 11.6875 33.6875 12.042969 32.882812 12.507812 Z M 32.882812 12.507812 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 57.394531 55.4375 L 18.992188 55.4375 C 18.882812 55.433594 18.789062 55.394531 18.710938 55.316406 C 18.632812 55.238281 18.589844 55.144531 18.589844 55.03125 C 18.589844 54.921875 18.628906 54.824219 18.707031 54.746094 C 18.785156 54.667969 18.878906 54.625 18.992188 54.625 L 57.394531 54.625 C 57.503906 54.625 57.601562 54.667969 57.679688 54.746094 C 57.757812 54.824219 57.796875 54.921875 57.796875 55.03125 C 57.792969 55.144531 57.753906 55.238281 57.675781 55.316406 C 57.597656 55.394531 57.503906 55.433594 57.394531 55.4375 Z M 57.394531 55.4375 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 57.394531 51.984375 C 57.796875 51.984375 58.183594 52.0625 58.554688 52.21875 C 58.925781 52.371094 59.253906 52.59375 59.535156 52.878906 C 59.820312 53.164062 60.039062 53.492188 60.191406 53.867188 C 60.347656 54.238281 60.421875 54.628906 60.421875 55.03125 C 60.421875 55.4375 60.347656 55.824219 60.191406 56.199219 C 60.039062 56.570312 59.820312 56.898438 59.535156 57.1875 C 59.253906 57.472656 58.925781 57.691406 58.554688 57.847656 C 58.183594 58 57.796875 58.078125 57.394531 58.078125 C 56.992188 58.078125 56.605469 58 56.234375 57.847656 C 55.863281 57.691406 55.535156 57.472656 55.25 57.1875 C 54.96875 56.898438 54.75 56.570312 54.59375 56.199219 C 54.441406 55.824219 54.363281 55.4375 54.363281 55.03125 C 54.363281 54.628906 54.441406 54.238281 54.59375 53.867188 C 54.75 53.492188 54.96875 53.164062 55.25 52.878906 C 55.535156 52.59375 55.863281 52.371094 56.234375 52.21875 C 56.605469 52.0625 56.992188 51.984375 57.394531 51.984375 Z M 57.394531 51.984375 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 22.023438 55.03125 C 22.023438 55.4375 21.945312 55.824219 21.789062 56.199219 C 21.636719 56.570312 21.417969 56.898438 21.132812 57.1875 C 20.851562 57.472656 20.523438 57.691406 20.152344 57.847656 C 19.78125 58 19.394531 58.078125 18.992188 58.078125 C 18.589844 58.078125 18.203125 58 17.832031 57.847656 C 17.460938 57.691406 17.132812 57.472656 16.851562 57.1875 C 16.566406 56.898438 16.347656 56.570312 16.191406 56.199219 C 16.039062 55.824219 15.960938 55.4375 15.960938 55.03125 C 15.960938 54.628906 16.039062 54.238281 16.191406 53.867188 C 16.347656 53.492188 16.566406 53.164062 16.851562 52.878906 C 17.132812 52.59375 17.460938 52.371094 17.832031 52.21875 C 18.203125 52.0625 18.589844 51.984375 18.992188 51.984375 C 19.394531 51.984375 19.78125 52.0625 20.152344 52.21875 C 20.523438 52.371094 20.851562 52.59375 21.132812 52.878906 C 21.417969 53.164062 21.636719 53.492188 21.789062 53.867188 C 21.945312 54.238281 22.023438 54.628906 22.023438 55.03125 Z M 22.023438 55.03125 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 18.992188 55.4375 C 18.921875 55.433594 18.851562 55.414062 18.789062 55.378906 C 18.695312 55.324219 18.632812 55.238281 18.605469 55.128906 C 18.578125 55.023438 18.589844 54.917969 18.644531 54.820312 L 37.824219 21.507812 C 37.871094 21.398438 37.953125 21.328125 38.066406 21.289062 C 38.179688 21.253906 38.289062 21.265625 38.390625 21.328125 C 38.496094 21.386719 38.558594 21.476562 38.582031 21.59375 C 38.609375 21.710938 38.585938 21.816406 38.515625 21.914062 L 19.339844 55.226562 C 19.261719 55.363281 19.148438 55.433594 18.992188 55.4375 Z M 18.992188 55.4375 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 35.574219 20.1875 C 35.773438 19.839844 36.035156 19.539062 36.355469 19.292969 C 36.671875 19.046875 37.027344 18.875 37.414062 18.769531 C 37.800781 18.664062 38.195312 18.636719 38.59375 18.691406 C 38.992188 18.742188 39.367188 18.871094 39.714844 19.074219 C 40.0625 19.277344 40.359375 19.535156 40.605469 19.859375 C 40.847656 20.179688 41.023438 20.535156 41.125 20.925781 C 41.230469 21.316406 41.253906 21.710938 41.203125 22.113281 C 41.148438 22.511719 41.023438 22.886719 40.820312 23.238281 C 40.621094 23.585938 40.359375 23.882812 40.039062 24.128906 C 39.71875 24.375 39.367188 24.550781 38.976562 24.652344 C 38.589844 24.757812 38.195312 24.785156 37.796875 24.730469 C 37.398438 24.675781 37.027344 24.546875 36.679688 24.34375 C 36.332031 24.144531 36.035156 23.882812 35.789062 23.5625 C 35.546875 23.242188 35.371094 22.886719 35.269531 22.496094 C 35.164062 22.109375 35.140625 21.710938 35.191406 21.3125 C 35.246094 20.914062 35.371094 20.539062 35.574219 20.1875 Z M 35.574219 20.1875 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 16.375 53.5 C 16.171875 53.851562 16.046875 54.226562 15.992188 54.625 C 15.9375 55.027344 15.964844 55.421875 16.066406 55.8125 C 16.171875 56.203125 16.347656 56.558594 16.589844 56.878906 C 16.835938 57.199219 17.128906 57.460938 17.476562 57.664062 C 17.824219 57.863281 18.199219 57.992188 18.597656 58.046875 C 18.996094 58.097656 19.386719 58.074219 19.777344 57.96875 C 20.164062 57.867188 20.515625 57.691406 20.835938 57.445312 C 21.15625 57.199219 21.414062 56.902344 21.617188 56.554688 C 21.820312 56.203125 21.945312 55.828125 22 55.429688 C 22.050781 55.027344 22.027344 54.632812 21.921875 54.242188 C 21.820312 53.851562 21.644531 53.496094 21.402344 53.175781 C 21.15625 52.855469 20.863281 52.59375 20.515625 52.390625 C 20.167969 52.1875 19.792969 52.058594 19.394531 52.007812 C 18.996094 51.953125 18.605469 51.980469 18.214844 52.082031 C 17.828125 52.1875 17.472656 52.363281 17.152344 52.609375 C 16.835938 52.851562 16.574219 53.152344 16.375 53.5 Z M 16.375 53.5 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 57.484375 55.4375 C 57.335938 55.425781 57.230469 55.355469 57.160156 55.226562 L 37.933594 21.914062 C 37.882812 21.816406 37.871094 21.714844 37.902344 21.609375 C 37.929688 21.5 37.992188 21.421875 38.089844 21.363281 C 38.183594 21.308594 38.285156 21.296875 38.390625 21.324219 C 38.5 21.351562 38.582031 21.414062 38.636719 21.507812 L 57.835938 54.820312 C 57.890625 54.917969 57.90625 55.023438 57.878906 55.128906 C 57.851562 55.238281 57.789062 55.324219 57.691406 55.378906 C 57.625 55.414062 57.558594 55.433594 57.484375 55.4375 Z M 57.484375 55.4375 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 35.664062 23.242188 C 35.460938 22.894531 35.332031 22.519531 35.277344 22.117188 C 35.226562 21.71875 35.25 21.324219 35.351562 20.933594 C 35.457031 20.542969 35.628906 20.1875 35.871094 19.863281 C 36.117188 19.542969 36.410156 19.28125 36.757812 19.078125 C 37.105469 18.875 37.480469 18.746094 37.875 18.691406 C 38.273438 18.640625 38.667969 18.664062 39.054688 18.765625 C 39.445312 18.871094 39.800781 19.042969 40.117188 19.289062 C 40.4375 19.535156 40.699219 19.832031 40.902344 20.179688 C 41.101562 20.53125 41.230469 20.90625 41.285156 21.304688 C 41.335938 21.707031 41.3125 22.101562 41.210938 22.492188 C 41.109375 22.882812 40.933594 23.238281 40.691406 23.558594 C 40.445312 23.878906 40.152344 24.140625 39.804688 24.34375 C 39.457031 24.546875 39.085938 24.675781 38.6875 24.726562 C 38.289062 24.78125 37.894531 24.757812 37.507812 24.652344 C 37.121094 24.550781 36.765625 24.375 36.445312 24.132812 C 36.125 23.886719 35.867188 23.589844 35.664062 23.242188 Z M 35.664062 23.242188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 54.863281 56.554688 C 55.066406 56.902344 55.324219 57.203125 55.644531 57.445312 C 55.964844 57.691406 56.316406 57.867188 56.707031 57.972656 C 57.09375 58.074219 57.488281 58.101562 57.886719 58.046875 C 58.28125 57.992188 58.65625 57.867188 59.003906 57.664062 C 59.351562 57.460938 59.648438 57.199219 59.890625 56.878906 C 60.136719 56.558594 60.308594 56.203125 60.414062 55.8125 C 60.515625 55.421875 60.542969 55.027344 60.488281 54.625 C 60.433594 54.226562 60.308594 53.851562 60.105469 53.5 C 59.90625 53.152344 59.644531 52.855469 59.328125 52.609375 C 59.007812 52.363281 58.652344 52.1875 58.265625 52.085938 C 57.878906 51.980469 57.484375 51.953125 57.085938 52.007812 C 56.6875 52.0625 56.316406 52.1875 55.96875 52.390625 C 55.621094 52.59375 55.324219 52.855469 55.078125 53.175781 C 54.835938 53.496094 54.660156 53.851562 54.558594 54.242188 C 54.453125 54.632812 54.429688 55.027344 54.480469 55.429688 C 54.535156 55.832031 54.664062 56.207031 54.863281 56.554688 Z M 54.863281 56.554688 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 31.382812 26.742188 L 31.617188 27.511719 L 35.382812 26.355469 L 36.257812 30.210938 L 37.039062 30.023438 L 35.96875 25.332031 Z M 31.382812 26.742188 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 56.128906 46.007812 L 55.347656 45.828125 L 54.46875 49.683594 L 50.707031 48.519531 L 50.472656 49.289062 L 55.058594 50.707031 Z M 56.128906 46.007812 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ffffff"
              d="M 27.332031 58.3125 L 27.878906 57.722656 L 24.996094 55.03125 L 27.878906 52.335938 L 27.339844 51.75 L 23.828125 55.03125 Z M 27.332031 58.3125 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg> <label class="text-center font-medium mt-2">Libérer vos flux</label>
          <p class="text-center">Etablissez une connexion avec tous vos partenaires commerciaux.</p>
        </div>
        <div class="w-full md:w-1/3 flex flex-col items-center gap-4"><svg fill="#ff914d" class="h-20"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#ff914d"
              d="M 36.558594 33.808594 L 36.558594 41.238281 L 3.273438 41.238281 C 3.429688 40.007812 3.507812 38.769531 3.503906 37.523438 C 3.507812 36.28125 3.429688 35.042969 3.273438 33.808594 Z M 36.558594 33.808594 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f5b86f"
              d="M 26.886719 42.886719 L 31.914062 42.886719 C 31.703125 43.492188 31.460938 44.085938 31.183594 44.667969 C 30.90625 45.246094 30.59375 45.804688 30.25 46.347656 C 29.90625 46.890625 29.53125 47.410156 29.128906 47.910156 C 28.722656 48.40625 28.289062 48.878906 27.832031 49.328125 C 27.371094 49.773438 26.886719 50.195312 26.378906 50.585938 C 25.871094 50.976562 25.339844 51.335938 24.789062 51.664062 C 24.238281 51.992188 23.667969 52.285156 23.085938 52.546875 C 22.5 52.808594 21.902344 53.035156 21.289062 53.226562 C 20.675781 53.417969 20.054688 53.574219 19.425781 53.691406 C 18.796875 53.808594 18.160156 53.890625 17.523438 53.933594 C 16.882812 53.976562 16.242188 53.984375 15.601562 53.953125 C 14.964844 53.921875 14.328125 53.851562 13.695312 53.746094 C 13.0625 53.640625 12.441406 53.496094 11.824219 53.316406 C 11.207031 53.136719 10.605469 52.921875 10.015625 52.671875 C 9.425781 52.421875 8.851562 52.140625 8.296875 51.820312 C 7.738281 51.503906 7.203125 51.152344 6.683594 50.773438 C 6.167969 50.394531 5.675781 49.984375 5.207031 49.542969 C 4.742188 49.105469 4.300781 48.640625 3.886719 48.152344 C 3.472656 47.660156 3.085938 47.148438 2.734375 46.613281 C 2.378906 46.078125 2.058594 45.523438 1.769531 44.949219 C 1.480469 44.375 1.222656 43.785156 1.003906 43.183594 C 0.78125 42.578125 0.597656 41.964844 0.449219 41.339844 C 0.300781 40.714844 0.191406 40.085938 0.113281 39.445312 C 0.0390625 38.808594 0.00390625 38.167969 0.00390625 37.523438 C 0.00390625 36.882812 0.0390625 36.242188 0.113281 35.605469 C 0.191406 34.964844 0.300781 34.335938 0.449219 33.710938 C 0.597656 33.085938 0.78125 32.46875 1.003906 31.867188 C 1.222656 31.261719 1.480469 30.675781 1.769531 30.101562 C 2.058594 29.527344 2.378906 28.972656 2.734375 28.4375 C 3.085938 27.902344 3.472656 27.390625 3.886719 26.898438 C 4.300781 26.410156 4.742188 25.945312 5.207031 25.503906 C 5.675781 25.066406 6.167969 24.65625 6.683594 24.277344 C 7.203125 23.894531 7.738281 23.546875 8.296875 23.230469 C 8.851562 22.910156 9.425781 22.628906 10.015625 22.375 C 10.605469 22.125 11.207031 21.910156 11.824219 21.730469 C 12.441406 21.554688 13.0625 21.410156 13.695312 21.304688 C 14.328125 21.199219 14.964844 21.128906 15.601562 21.097656 C 16.242188 21.066406 16.882812 21.070312 17.523438 21.117188 C 18.160156 21.160156 18.796875 21.242188 19.425781 21.359375 C 20.054688 21.476562 20.675781 21.632812 21.289062 21.824219 C 21.902344 22.015625 22.5 22.242188 23.085938 22.503906 C 23.667969 22.765625 24.238281 23.058594 24.789062 23.386719 C 25.339844 23.714844 25.871094 24.074219 26.378906 24.464844 C 26.886719 24.855469 27.371094 25.273438 27.832031 25.722656 C 28.289062 26.171875 28.722656 26.644531 29.128906 27.140625 C 29.53125 27.640625 29.90625 28.160156 30.25 28.703125 C 30.59375 29.246094 30.90625 29.804688 31.183594 30.382812 C 31.460938 30.964844 31.703125 31.554688 31.914062 32.164062 L 26.886719 32.164062 C 26.691406 31.773438 26.46875 31.394531 26.230469 31.03125 C 25.988281 30.664062 25.730469 30.3125 25.449219 29.976562 C 25.171875 29.640625 24.875 29.320312 24.558594 29.015625 C 24.242188 28.710938 23.914062 28.425781 23.566406 28.160156 C 23.21875 27.894531 22.859375 27.648438 22.484375 27.421875 C 22.109375 27.195312 21.726562 26.992188 21.328125 26.808594 C 20.929688 26.625 20.527344 26.464844 20.109375 26.324219 C 19.695312 26.1875 19.277344 26.074219 18.847656 25.980469 C 18.421875 25.890625 17.988281 25.824219 17.554688 25.78125 C 17.121094 25.738281 16.683594 25.71875 16.246094 25.726562 C 15.8125 25.730469 15.375 25.761719 14.941406 25.816406 C 14.507812 25.871094 14.078125 25.949219 13.65625 26.050781 C 13.230469 26.152344 12.8125 26.277344 12.402344 26.429688 C 11.992188 26.578125 11.589844 26.75 11.195312 26.941406 C 10.804688 27.136719 10.425781 27.351562 10.058594 27.585938 C 9.691406 27.824219 9.335938 28.078125 8.996094 28.355469 C 8.65625 28.632812 8.332031 28.925781 8.027344 29.238281 C 7.71875 29.546875 7.429688 29.875 7.160156 30.21875 C 6.890625 30.5625 6.640625 30.921875 6.410156 31.292969 C 6.179688 31.667969 5.96875 32.050781 5.78125 32.445312 C 5.59375 32.839844 5.425781 33.246094 5.285156 33.660156 C 5.140625 34.074219 5.023438 34.492188 4.925781 34.921875 C 4.828125 35.347656 4.757812 35.78125 4.707031 36.214844 C 4.660156 36.648438 4.636719 37.085938 4.636719 37.523438 C 4.636719 37.964844 4.660156 38.398438 4.707031 38.835938 C 4.757812 39.269531 4.828125 39.703125 4.925781 40.128906 C 5.023438 40.554688 5.140625 40.976562 5.285156 41.390625 C 5.425781 41.804688 5.59375 42.210938 5.78125 42.605469 C 5.96875 43 6.179688 43.382812 6.410156 43.753906 C 6.640625 44.128906 6.890625 44.484375 7.160156 44.828125 C 7.429688 45.175781 7.71875 45.5 8.027344 45.8125 C 8.332031 46.125 8.65625 46.417969 8.996094 46.695312 C 9.335938 46.96875 9.691406 47.226562 10.058594 47.460938 C 10.425781 47.699219 10.804688 47.914062 11.195312 48.109375 C 11.589844 48.300781 11.992188 48.472656 12.402344 48.621094 C 12.8125 48.769531 13.230469 48.898438 13.65625 49 C 14.078125 49.101562 14.507812 49.179688 14.941406 49.234375 C 15.375 49.289062 15.8125 49.320312 16.246094 49.324219 C 16.683594 49.332031 17.121094 49.3125 17.554688 49.269531 C 17.988281 49.226562 18.421875 49.160156 18.847656 49.070312 C 19.277344 48.976562 19.695312 48.863281 20.109375 48.726562 C 20.527344 48.585938 20.929688 48.425781 21.328125 48.242188 C 21.726562 48.058594 22.109375 47.855469 22.484375 47.628906 C 22.859375 47.402344 23.21875 47.15625 23.566406 46.890625 C 23.914062 46.621094 24.242188 46.339844 24.558594 46.035156 C 24.875 45.730469 25.171875 45.410156 25.449219 45.074219 C 25.730469 44.738281 25.988281 44.386719 26.230469 44.019531 C 26.46875 43.65625 26.691406 43.277344 26.886719 42.886719 Z M 26.886719 42.886719 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f5b86f"
              d="M 23.535156 37.523438 C 23.535156 37.996094 23.488281 38.460938 23.398438 38.921875 C 23.304688 39.378906 23.171875 39.828125 22.992188 40.261719 C 22.8125 40.695312 22.59375 41.105469 22.332031 41.496094 C 22.074219 41.886719 21.777344 42.25 21.445312 42.582031 C 21.113281 42.914062 20.753906 43.210938 20.367188 43.46875 C 19.976562 43.730469 19.566406 43.949219 19.132812 44.128906 C 18.699219 44.308594 18.253906 44.445312 17.796875 44.539062 C 17.335938 44.628906 16.871094 44.675781 16.402344 44.675781 C 15.933594 44.675781 15.472656 44.628906 15.011719 44.539062 C 14.554688 44.445312 14.109375 44.308594 13.675781 44.128906 C 13.242188 43.949219 12.832031 43.730469 12.441406 43.46875 C 12.050781 43.210938 11.691406 42.914062 11.363281 42.582031 C 11.03125 42.25 10.734375 41.886719 10.472656 41.496094 C 10.214844 41.105469 9.996094 40.695312 9.816406 40.261719 C 9.636719 39.828125 9.5 39.378906 9.410156 38.921875 C 9.320312 38.460938 9.273438 37.996094 9.273438 37.523438 C 9.273438 37.054688 9.320312 36.589844 9.410156 36.128906 C 9.5 35.667969 9.636719 35.222656 9.816406 34.789062 C 9.996094 34.355469 10.214844 33.941406 10.472656 33.554688 C 10.734375 33.164062 11.03125 32.800781 11.363281 32.46875 C 11.691406 32.136719 12.050781 31.839844 12.441406 31.582031 C 12.832031 31.320312 13.242188 31.097656 13.675781 30.917969 C 14.109375 30.738281 14.554688 30.605469 15.011719 30.511719 C 15.472656 30.421875 15.933594 30.375 16.402344 30.375 C 16.871094 30.375 17.335938 30.421875 17.796875 30.511719 C 18.253906 30.605469 18.699219 30.738281 19.132812 30.917969 C 19.566406 31.097656 19.976562 31.320312 20.367188 31.582031 C 20.753906 31.839844 21.113281 32.136719 21.445312 32.46875 C 21.777344 32.800781 22.074219 33.164062 22.332031 33.554688 C 22.59375 33.941406 22.8125 34.355469 22.992188 34.789062 C 23.171875 35.222656 23.304688 35.667969 23.398438 36.128906 C 23.488281 36.589844 23.535156 37.054688 23.535156 37.523438 Z M 23.535156 37.523438 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 66.949219 37.359375 L 66.949219 29.515625 L 70.96875 33.4375 L 74.992188 37.359375 L 70.96875 41.28125 L 66.949219 45.199219 Z M 66.949219 37.359375 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ff914d"
              d="M 69.484375 33.808594 L 69.484375 41.238281 L 36.199219 41.238281 C 36.507812 38.761719 36.507812 36.285156 36.199219 33.808594 Z M 69.484375 33.808594 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f18642"
              d="M 59.8125 42.886719 L 64.835938 42.886719 C 64.628906 43.492188 64.382812 44.085938 64.105469 44.667969 C 63.828125 45.246094 63.515625 45.804688 63.171875 46.347656 C 62.828125 46.890625 62.457031 47.410156 62.050781 47.910156 C 61.648438 48.40625 61.214844 48.878906 60.753906 49.328125 C 60.292969 49.773438 59.808594 50.195312 59.300781 50.585938 C 58.792969 50.976562 58.261719 51.335938 57.710938 51.664062 C 57.160156 51.992188 56.59375 52.285156 56.007812 52.546875 C 55.421875 52.808594 54.824219 53.035156 54.210938 53.226562 C 53.601562 53.417969 52.980469 53.574219 52.347656 53.691406 C 51.71875 53.808594 51.085938 53.890625 50.445312 53.933594 C 49.804688 53.976562 49.167969 53.984375 48.527344 53.953125 C 47.886719 53.921875 47.25 53.851562 46.617188 53.746094 C 45.988281 53.640625 45.363281 53.496094 44.746094 53.316406 C 44.132812 53.136719 43.53125 52.921875 42.9375 52.671875 C 42.347656 52.421875 41.777344 52.140625 41.21875 51.820312 C 40.660156 51.503906 40.125 51.152344 39.609375 50.773438 C 39.09375 50.394531 38.601562 49.984375 38.132812 49.542969 C 37.664062 49.105469 37.222656 48.640625 36.808594 48.152344 C 36.394531 47.660156 36.011719 47.148438 35.65625 46.613281 C 35.300781 46.078125 34.980469 45.523438 34.691406 44.949219 C 34.402344 44.375 34.148438 43.785156 33.925781 43.183594 C 33.707031 42.578125 33.523438 41.964844 33.375 41.339844 C 33.222656 40.714844 33.113281 40.085938 33.039062 39.445312 C 32.964844 38.808594 32.925781 38.167969 32.925781 37.523438 C 32.925781 36.882812 32.964844 36.242188 33.039062 35.605469 C 33.113281 34.964844 33.222656 34.335938 33.375 33.710938 C 33.523438 33.085938 33.707031 32.46875 33.925781 31.867188 C 34.148438 31.261719 34.402344 30.675781 34.691406 30.101562 C 34.980469 29.527344 35.300781 28.972656 35.65625 28.4375 C 36.011719 27.902344 36.394531 27.390625 36.808594 26.898438 C 37.222656 26.410156 37.664062 25.945312 38.132812 25.503906 C 38.601562 25.066406 39.09375 24.65625 39.609375 24.277344 C 40.125 23.894531 40.660156 23.546875 41.21875 23.230469 C 41.777344 22.910156 42.347656 22.628906 42.9375 22.375 C 43.53125 22.125 44.132812 21.910156 44.746094 21.730469 C 45.363281 21.554688 45.988281 21.410156 46.617188 21.304688 C 47.25 21.199219 47.886719 21.128906 48.527344 21.097656 C 49.167969 21.066406 49.804688 21.070312 50.445312 21.117188 C 51.085938 21.160156 51.71875 21.242188 52.347656 21.359375 C 52.980469 21.476562 53.601562 21.632812 54.210938 21.824219 C 54.824219 22.015625 55.421875 22.242188 56.007812 22.503906 C 56.59375 22.765625 57.160156 23.058594 57.710938 23.386719 C 58.261719 23.714844 58.792969 24.074219 59.300781 24.464844 C 59.808594 24.855469 60.292969 25.273438 60.753906 25.722656 C 61.214844 26.171875 61.648438 26.644531 62.050781 27.140625 C 62.457031 27.640625 62.828125 28.160156 63.171875 28.703125 C 63.515625 29.246094 63.828125 29.804688 64.105469 30.382812 C 64.382812 30.964844 64.628906 31.554688 64.835938 32.164062 L 59.8125 32.164062 C 59.613281 31.773438 59.394531 31.394531 59.152344 31.03125 C 58.914062 30.664062 58.652344 30.3125 58.375 29.976562 C 58.09375 29.640625 57.796875 29.320312 57.480469 29.015625 C 57.167969 28.710938 56.835938 28.425781 56.488281 28.160156 C 56.140625 27.894531 55.78125 27.648438 55.40625 27.421875 C 55.035156 27.195312 54.648438 26.992188 54.25 26.808594 C 53.855469 26.625 53.449219 26.464844 53.035156 26.324219 C 52.621094 26.1875 52.199219 26.074219 51.769531 25.980469 C 51.34375 25.890625 50.914062 25.824219 50.476562 25.78125 C 50.042969 25.738281 49.609375 25.71875 49.171875 25.726562 C 48.734375 25.730469 48.296875 25.761719 47.867188 25.816406 C 47.433594 25.871094 47.003906 25.949219 46.578125 26.050781 C 46.152344 26.152344 45.734375 26.277344 45.324219 26.429688 C 44.914062 26.578125 44.511719 26.75 44.121094 26.941406 C 43.730469 27.136719 43.347656 27.351562 42.980469 27.585938 C 42.613281 27.824219 42.257812 28.078125 41.917969 28.355469 C 41.582031 28.632812 41.257812 28.925781 40.949219 29.238281 C 40.644531 29.546875 40.355469 29.875 40.085938 30.21875 C 39.8125 30.5625 39.5625 30.921875 39.332031 31.292969 C 39.101562 31.667969 38.894531 32.050781 38.703125 32.445312 C 38.515625 32.839844 38.351562 33.246094 38.207031 33.660156 C 38.066406 34.074219 37.945312 34.492188 37.847656 34.921875 C 37.753906 35.347656 37.679688 35.78125 37.632812 36.214844 C 37.582031 36.648438 37.558594 37.085938 37.558594 37.523438 C 37.558594 37.964844 37.582031 38.398438 37.632812 38.835938 C 37.679688 39.269531 37.753906 39.703125 37.847656 40.128906 C 37.945312 40.554688 38.066406 40.976562 38.207031 41.390625 C 38.351562 41.804688 38.515625 42.210938 38.703125 42.605469 C 38.894531 43 39.101562 43.382812 39.332031 43.753906 C 39.5625 44.128906 39.8125 44.484375 40.085938 44.828125 C 40.355469 45.175781 40.644531 45.5 40.949219 45.8125 C 41.257812 46.125 41.582031 46.417969 41.917969 46.695312 C 42.257812 46.96875 42.613281 47.226562 42.980469 47.460938 C 43.347656 47.699219 43.730469 47.914062 44.121094 48.109375 C 44.511719 48.300781 44.914062 48.472656 45.324219 48.621094 C 45.734375 48.769531 46.152344 48.898438 46.578125 49 C 47.003906 49.101562 47.433594 49.179688 47.867188 49.234375 C 48.296875 49.289062 48.734375 49.320312 49.171875 49.324219 C 49.609375 49.332031 50.042969 49.3125 50.476562 49.269531 C 50.914062 49.226562 51.34375 49.160156 51.769531 49.070312 C 52.199219 48.976562 52.621094 48.863281 53.035156 48.726562 C 53.449219 48.585938 53.855469 48.425781 54.25 48.242188 C 54.648438 48.058594 55.035156 47.855469 55.40625 47.628906 C 55.78125 47.402344 56.140625 47.15625 56.488281 46.890625 C 56.835938 46.621094 57.167969 46.339844 57.480469 46.035156 C 57.796875 45.730469 58.09375 45.410156 58.375 45.074219 C 58.652344 44.738281 58.914062 44.386719 59.152344 44.019531 C 59.394531 43.65625 59.613281 43.277344 59.8125 42.886719 Z M 59.8125 42.886719 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f18642"
              d="M 56.457031 37.523438 C 56.457031 37.996094 56.414062 38.460938 56.320312 38.921875 C 56.230469 39.378906 56.09375 39.828125 55.914062 40.261719 C 55.734375 40.695312 55.515625 41.105469 55.257812 41.496094 C 54.996094 41.886719 54.699219 42.25 54.371094 42.582031 C 54.039062 42.914062 53.679688 43.210938 53.289062 43.46875 C 52.898438 43.730469 52.488281 43.949219 52.054688 44.128906 C 51.625 44.308594 51.175781 44.445312 50.71875 44.539062 C 50.257812 44.628906 49.796875 44.675781 49.328125 44.675781 C 48.859375 44.675781 48.394531 44.628906 47.9375 44.539062 C 47.476562 44.445312 47.03125 44.308594 46.597656 44.128906 C 46.164062 43.949219 45.753906 43.730469 45.367188 43.46875 C 44.976562 43.210938 44.617188 42.914062 44.285156 42.582031 C 43.953125 42.25 43.65625 41.886719 43.398438 41.496094 C 43.136719 41.105469 42.917969 40.695312 42.738281 40.261719 C 42.558594 39.828125 42.425781 39.378906 42.332031 38.921875 C 42.242188 38.460938 42.195312 37.996094 42.195312 37.523438 C 42.195312 37.054688 42.242188 36.589844 42.332031 36.128906 C 42.425781 35.667969 42.558594 35.222656 42.738281 34.789062 C 42.917969 34.355469 43.136719 33.941406 43.398438 33.554688 C 43.65625 33.164062 43.953125 32.800781 44.285156 32.46875 C 44.617188 32.136719 44.976562 31.839844 45.367188 31.582031 C 45.753906 31.320312 46.164062 31.097656 46.597656 30.917969 C 47.03125 30.738281 47.476562 30.605469 47.9375 30.511719 C 48.394531 30.421875 48.859375 30.375 49.328125 30.375 C 49.796875 30.375 50.257812 30.421875 50.71875 30.511719 C 51.175781 30.605469 51.625 30.738281 52.054688 30.917969 C 52.488281 31.097656 52.898438 31.320312 53.289062 31.582031 C 53.679688 31.839844 54.039062 32.136719 54.371094 32.46875 C 54.699219 32.800781 54.996094 33.164062 55.257812 33.554688 C 55.515625 33.941406 55.734375 34.355469 55.914062 34.789062 C 56.09375 35.222656 56.230469 35.667969 56.320312 36.128906 C 56.414062 36.589844 56.457031 37.054688 56.457031 37.523438 Z M 56.457031 37.523438 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg> <label class="text-center font-medium mt-2">Nouveaux services</label>
          <p class="text-center">De nouveaux services numériques complémentaires vous aideront dans la
            rapidité, la
            fluidité de vos échanges.</p>
        </div>
        <div class="w-full md:w-1/3 flex flex-col items-center gap-4"><svg fill="#ff914d" class="h-20"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 74.999997" version="1.0">
            <path fill="#ef6843"
              d="M 48.757812 54.769531 C 48.167969 55.136719 47.5625 55.472656 46.941406 55.78125 C 46.316406 56.089844 45.679688 56.363281 45.03125 56.609375 C 44.378906 56.851562 43.71875 57.0625 43.046875 57.242188 C 42.378906 57.421875 41.699219 57.570312 41.015625 57.679688 C 40.328125 57.792969 39.640625 57.871094 38.949219 57.917969 C 38.253906 57.960938 37.5625 57.972656 36.867188 57.949219 C 36.171875 57.925781 35.484375 57.867188 34.792969 57.773438 C 34.105469 57.683594 33.425781 57.558594 32.75 57.398438 C 32.074219 57.238281 31.40625 57.046875 30.75 56.824219 C 30.089844 56.597656 29.445312 56.34375 28.816406 56.054688 C 28.183594 55.765625 27.566406 55.449219 26.964844 55.101562 C 26.367188 54.75 25.78125 54.375 25.21875 53.96875 C 24.65625 53.5625 24.113281 53.128906 23.59375 52.667969 C 23.070312 52.210938 22.574219 51.726562 22.097656 51.21875 C 21.625 50.710938 21.179688 50.179688 20.757812 49.625 C 20.335938 49.074219 19.941406 48.503906 19.574219 47.910156 L 9.261719 54.332031 C 9.835938 55.261719 10.457031 56.160156 11.117188 57.027344 C 11.78125 57.894531 12.484375 58.730469 13.230469 59.53125 C 13.976562 60.328125 14.757812 61.089844 15.578125 61.8125 C 16.398438 62.535156 17.25 63.214844 18.136719 63.851562 C 19.023438 64.488281 19.9375 65.082031 20.882812 65.632812 C 21.828125 66.179688 22.796875 66.679688 23.789062 67.132812 C 24.785156 67.585938 25.796875 67.988281 26.832031 68.339844 C 27.863281 68.695312 28.910156 68.996094 29.976562 69.246094 C 31.039062 69.496094 32.109375 69.691406 33.191406 69.835938 C 34.273438 69.980469 35.359375 70.070312 36.449219 70.109375 C 37.542969 70.144531 38.632812 70.128906 39.722656 70.058594 C 40.8125 69.988281 41.894531 69.867188 42.972656 69.691406 C 44.046875 69.511719 45.113281 69.285156 46.167969 69.003906 C 47.222656 68.722656 48.261719 68.390625 49.285156 68.003906 C 50.308594 67.621094 51.308594 67.1875 52.289062 66.707031 C 53.265625 66.222656 54.21875 65.695312 55.148438 65.117188 Z M 48.757812 54.769531 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f18642"
              d="M 45.207031 4.234375 L 42.433594 16.070312 C 43.445312 16.308594 44.4375 16.621094 45.40625 17.007812 C 46.371094 17.390625 47.304688 17.847656 48.207031 18.371094 C 49.109375 18.894531 49.964844 19.480469 50.78125 20.128906 C 51.59375 20.78125 52.355469 21.488281 53.066406 22.25 C 53.777344 23.011719 54.429688 23.824219 55.019531 24.683594 C 55.613281 25.539062 56.136719 26.4375 56.597656 27.375 C 57.054688 28.3125 57.441406 29.277344 57.761719 30.269531 C 58.078125 31.265625 58.320312 32.273438 58.488281 33.304688 C 58.65625 34.335938 58.75 35.371094 58.765625 36.414062 C 58.78125 37.457031 58.71875 38.496094 58.582031 39.53125 C 58.445312 40.5625 58.234375 41.582031 57.945312 42.585938 C 57.660156 43.589844 57.300781 44.566406 56.871094 45.515625 C 56.441406 46.464844 55.941406 47.378906 55.378906 48.253906 C 54.8125 49.132812 54.1875 49.960938 53.5 50.746094 C 52.8125 51.527344 52.070312 52.257812 51.277344 52.933594 C 50.484375 53.609375 49.644531 54.21875 48.757812 54.769531 L 55.148438 65.105469 C 56.539062 64.238281 57.863281 63.277344 59.113281 62.214844 C 60.363281 61.15625 61.527344 60.007812 62.609375 58.777344 C 63.691406 57.542969 64.675781 56.238281 65.566406 54.859375 C 66.457031 53.480469 67.238281 52.042969 67.917969 50.550781 C 68.59375 49.054688 69.160156 47.519531 69.613281 45.941406 C 70.0625 44.363281 70.398438 42.761719 70.613281 41.136719 C 70.828125 39.507812 70.925781 37.875 70.898438 36.234375 C 70.875 34.59375 70.730469 32.960938 70.464844 31.34375 C 70.203125 29.722656 69.820312 28.132812 69.320312 26.566406 C 68.824219 25.003906 68.210938 23.488281 67.488281 22.011719 C 66.765625 20.539062 65.941406 19.128906 65.011719 17.777344 C 64.082031 16.425781 63.054688 15.152344 61.9375 13.953125 C 60.820312 12.75 59.621094 11.640625 58.339844 10.617188 C 57.058594 9.59375 55.707031 8.671875 54.289062 7.851562 C 52.875 7.027344 51.402344 6.3125 49.882812 5.707031 C 48.359375 5.101562 46.800781 4.609375 45.207031 4.234375 Z M 45.207031 4.234375 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f5b86f"
              d="M 16.957031 31.886719 C 17.117188 31.210938 17.308594 30.542969 17.53125 29.886719 C 17.757812 29.226562 18.015625 28.582031 18.300781 27.949219 C 18.589844 27.316406 18.90625 26.699219 19.257812 26.097656 C 19.605469 25.5 19.980469 24.914062 20.386719 24.351562 C 20.792969 23.785156 21.222656 23.242188 21.683594 22.722656 C 22.140625 22.199219 22.625 21.703125 23.132812 21.226562 C 23.636719 20.753906 24.167969 20.304688 24.71875 19.882812 C 25.269531 19.460938 25.839844 19.066406 26.429688 18.699219 C 27.019531 18.335938 27.625 18 28.25 17.691406 C 28.871094 17.386719 29.507812 17.109375 30.15625 16.867188 C 30.808594 16.621094 31.46875 16.410156 32.136719 16.230469 C 32.808594 16.050781 33.484375 15.90625 34.171875 15.792969 C 34.855469 15.679688 35.542969 15.601562 36.234375 15.558594 C 36.929688 15.511719 37.621094 15.5 38.316406 15.523438 C 39.007812 15.546875 39.699219 15.605469 40.386719 15.695312 C 41.074219 15.785156 41.757812 15.910156 42.433594 16.070312 L 45.207031 4.234375 C 43.609375 3.859375 41.996094 3.601562 40.363281 3.46875 C 38.730469 3.332031 37.09375 3.316406 35.457031 3.421875 C 33.824219 3.523438 32.203125 3.75 30.601562 4.09375 C 29 4.4375 27.429688 4.898438 25.894531 5.476562 C 24.363281 6.050781 22.878906 6.738281 21.445312 7.53125 C 20.011719 8.328125 18.640625 9.226562 17.339844 10.222656 C 16.039062 11.21875 14.816406 12.308594 13.675781 13.488281 C 12.535156 14.664062 11.484375 15.921875 10.527344 17.253906 C 9.574219 18.585938 8.71875 19.984375 7.96875 21.441406 C 7.214844 22.902344 6.578125 24.410156 6.046875 25.960938 C 5.519531 27.515625 5.105469 29.101562 4.808594 30.714844 C 4.515625 32.332031 4.339844 33.957031 4.28125 35.601562 C 4.226562 37.242188 4.289062 38.875 4.476562 40.507812 C 4.660156 42.140625 4.964844 43.75 5.386719 45.335938 C 5.804688 46.921875 6.34375 48.46875 6.992188 49.976562 C 7.640625 51.484375 8.398438 52.933594 9.261719 54.332031 L 19.574219 47.925781 C 18.839844 46.742188 18.230469 45.496094 17.742188 44.191406 C 17.25 42.882812 16.894531 41.542969 16.671875 40.167969 C 16.445312 38.792969 16.355469 37.40625 16.40625 36.011719 C 16.453125 34.617188 16.636719 33.242188 16.957031 31.886719 Z M 16.957031 31.886719 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f5b86f"
              d="M 43.484375 10.277344 L 45.496094 0.179688 L 51.371094 6.527344 L 57.25 12.882812 L 49.363281 16.625 L 41.46875 20.375 Z M 43.484375 10.277344 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#f18642"
              d="M 51.953125 59.636719 L 57.320312 68.417969 L 48.695312 67.757812 L 40.078125 67.09375 L 43.328125 58.972656 L 46.585938 50.851562 Z M 51.953125 59.636719 "
              fill-opacity="1" fill-rule="nonzero"></path>
            <path fill="#ef6843"
              d="M 14.585938 51.199219 L 5.625 56.246094 L 7.585938 39.035156 L 15.5625 42.597656 L 23.539062 46.152344 Z M 14.585938 51.199219 "
              fill-opacity="1" fill-rule="nonzero"></path>
          </svg> <label class="text-center font-medium mt-2">Développer son économie</label>
          <p class="text-center">Avec la fiabilité et la rapidité de vos flux EDI, optimisez l’économie de
            votre
            entreprise.</p>
        </div>
      </div>
    </div>
  </section>
<!-- commercial flows END -->


<!-- Benefits of EDI Start -->
  <section class="py-24 bg-slate-50 relative">
    <div class="container px-4 mx-auto">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center">
        <label class="text-digitus-tradexpress">Les Bénéfices</label> de l’EDI, selon votre <label
          class="text-digitus-tradexpress">métier*</label>
      </h2>
      <div data-aos="fade-up" data-aos-duration="500" class="mt-12 max-w-6xl mx-auto">
        <p>Tirez parti des différents bénéfices de l’Echange de Données Informatisé, quel que soit votre métier
          !<br /><br />En <label class="text-digitus-tradexpress">digitalisant</label> vos flux B2B grâce à
          l’EDI
          avec vos partenaires commerciaux, vous gagnez de nombreux avantages à forts impacts financiers en
          plus
          d’un gain considérable dans votre productivité. Chaque document transféré par EDI équivaut à une
          économie
          directe et un gain de temps dans sa prise en compte, traitement et intégration. En délaissant le
          format
          papier dans vos échanges, vous pouvez <label class="text-digitus-tradexpress">économiser 80% de vos
            coûts</label> inhérents au format papier et au traitement manuel.<br /><br />Vous trouverez ici
          les
          bénéfices propres à chaque corps de métier, vous permettant de convaincre aisément tous les
          départements
          métiers à inclure dans votre projet, afin d’optimiser au maximum les objectifs attendus :</p>
      </div>
      <div data-aos="fade-up" data-aos-duration="500" class="flex flex-col lg:flex-row gap-8 mt-18">
        <div class="flex gap-8 lg:w-1/3">
          <div class="hidden lg:block my-8 w-1/3"><img alt="Personne qui est directeur général | digitus"
              srcSet="./assets/images/generalmanager.webp 1x, ./assets/images/generalmanager.webp 2x"
              src="./assets/images/generalmanager.webp" width="200" height="200" decoding="async" data-nimg="1" loading="lazy"
              style="color:transparent" /></div>
          <div class=" w-2/3"><label class="text-digitus-orange text-2xl font-semibold">Directeur
              général</label>
            <ul class=" marker:text-gray-500 list-outside list-disc leading-7 ml-5 mt-2">
              <li>amélioration de l’image de l’entreprise</li>
              <li>augmentation du ROI et du service client</li>
              <li>visibilité des opérations en cours</li>
              <li>optimisation de la chaîne de valeur</li>
            </ul>
          </div>
        </div>
        <div class="flex gap-8 lg:w-1/3">
          <div class="hidden lg:block my-8 w-1/3"><img alt="Personne qui est commercial | digitus"
              srcSet="./assets/images/commercial.webp 1x, ./assets/images/commercial.webp 2x" src="./assets/images/commercial.webp"
              width="200" height="200" decoding="async" data-nimg="1" loading="lazy" style="color:transparent" />
          </div>
          <div class=" w-2/3"><label class="text-digitus-orange text-2xl font-semibold">Commercial</label>
            <ul class=" marker:text-gray-500 list-outside list-disc leading-7 ml-5 mt-2">
              <li>Processus commerciaux fluides et transparents</li>
              <li>diminution des coûts</li>
              <li>fiabilité des informations </li>
              <li>traçabilité des commandes et opérations</li>
              <li>augmentation de la productivité</li>
            </ul>
          </div>
        </div>
        <div class="flex gap-8 lg:w-1/3">
          <div class="hidden lg:block my-8 w-1/3"><img alt="Personne qui est acheteur | digitus"
              srcSet="./assets/images/buyer.webp 1x, ./assets/images/buyer.webp 2x" src="./assets/images/buyer.webp " width="200"
              height="200" decoding="async" data-nimg="1" loading="lazy" style="color:transparent" />
          </div>
          <div class=" w-2/3"><label class="text-digitus-orange text-2xl font-semibold">Acheteur</label>
            <ul class=" marker:text-gray-500 list-outside list-disc leading-7 ml-5 mt-2">
              <li>mise en place d’un process de référencement et de catalogage</li>
              <li>automatisation de l’intégration des données</li>
              <li>gain de temps dans le traitement des données</li>
              <li>traçabilité facilitant le contrôle des données</li>
              <li>archivage fiable des documents</li>
            </ul>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="500" class="flex flex-col lg:flex-row gap-8 mt-12">
        <div class="flex gap-8 lg:w-1/3">
          <div class="hidden lg:block my-8 w-1/3"><img alt="Personne qui est logisticien | digitus"
              srcSet="./assets/images/logisticien.webp 1x, ./assets/images/logisticien.webp 2x" src="./assets/images/logisticien.webp"
              width="200" height="200" decoding="async" data-nimg="1" class="w-full" loading="lazy"
              style="color:transparent" /></div>
          <div class="w-2/3"><label class="text-digitus-orange text-2xl font-semibold">Logisticien</label>
            <ul class=" marker:text-gray-500 list-outside list-disc leading-7 ml-5 mt-2">
              <li>meilleure planification des opérations</li>
              <li>réduction en moyenne de 30% des délais de livraison pour les clients</li>
              <li>fiabilité des commandes, accélération des traitement et réduction de la manutention
              </li>
              <li>amélioration du service client </li>
              <li>fluidification des flux </li>
            </ul>
          </div>
        </div>
        <div class="flex gap-8 lg:w-1/3">
          <div class="hidden lg:block my-8 w-1/3"><img alt="Personne qui est administrateur | digitus"
              srcSet="./assets/images/Administrator.webp, ./assets/images/Administrator.webp 2x" src="./assets/images/Administrator.webp"
              width="200" height="200" decoding="async" data-nimg="1" class="w-full" loading="lazy"
              style="color:transparent" /></div>
          <div class="w-2/3"><label class="text-digitus-orange text-2xl font-semibold">Administrateur</label>
            <ul class=" marker:text-gray-500 list-outside list-disc leading-7 ml-5 mt-2">
              <li>Augmentation de la réactivité </li>
              <li>Revalorisation des tâches </li>
              <li>Diminution des coûts liés aux tâches administratives</li>
              <li>Optimisation de la trésorerie</li>
              <li>Intégration automatique des données</li>
            </ul>
          </div>
        </div>
        <div class="flex gap-8 lg:w-1/3">
          <div class="hidden lg:block my-8 w-1/3"><img alt="Personne qui est DSI | digitus"
              srcSet="./assets/images/dsi.webp 1x, ./assets/images/dsi.webp 2x" src="./assets/images/dsi.webp" width="200" height="200"
              decoding="async" data-nimg="1" class="w-full" loading="lazy" style="color:transparent" />
          </div>
          <div class="w-2/3"><label class="text-digitus-orange text-2xl font-semibold">DSI</label>
            <ul class=" marker:text-gray-500 list-outside list-disc leading-7 ml-5 mt-2">
              <li>Parfaite traçabilité et maîtrise des process annexes</li>
              <li>Optimisation de la sécurisation des informations </li>
              <li>Mise en place de processus clairs et robustes</li>
              <li>Automatisation à haute valeur ajouté</li>
            </ul>
          </div>
        </div>
      </div><a data-aos="fade-up" data-aos-duration="500" class="flex justify-center " href="/solutions/"><button
          class="requestBtn">
          <div
            class="absolute top-0 left-0 transform -translate-x-full group-hover:-translate-x-0 h-full w-full transition ease-in-out duration-500 bg-gradient-indigo">
          </div>
          Découvrir les solutions EDI proposées par Digitus
        </button></a>
    </div>
  </section>
  <!-- Benefits of EDI End -->

  <!-- e-book  Start -->
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
  <!-- e-book  END -->


  <!--  EDI connection Start -->
  <section class="py-12 md:py-24 bg-white relative">
    <div class="container px-4 mx-auto">
      <h2 data-aos="fade-up" data-aos-duration="500"
        class="text-gray-700 leading-title font-heading text-4xl opacity-80 md:text-5xl xl:text-6xl font-semibold text-center aos-init aos-animate">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">How to build your </font>
        </font><label class="text-digitus-tradexpress">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">EDI connection?</font>
          </font>
        </label>
      </h2>
      <div class="flex flex-col xl:flex-row justify-center items-center gap-8 mt-18">
        <div data-aos="fade-up" data-aos-duration="500" class="xl:pr-12 xl:w-1/3 aos-init aos-animate">
          <p class="text-justify">
            <font style="vertical-align: inherit;"></font><label class="text-digitus-orange">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Digitus's</font>
              </font>
            </label>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> EDI experts </font>
              <font style="vertical-align: inherit;">support you in all phases of your EDI projects.
              </font>
              <font style="vertical-align: inherit;">From establishing specifications to </font>
            </font><label class="text-digitus-orange">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">technical support</font>
              </font>
            </label>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> through integration </font>
            </font><label class="text-digitus-orange">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">,</font>
              </font>
            </label>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> we analyze your EDI potential with you and for you
                and
                will establish the best action plans based on your EDI requirements. </font>
            </font><br><br>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;" class="">Digitus ensures, through a multitude of
                adjustments and in-depth tests, the perfect integration of your current and future
                partners
                to allow you complete satisfaction with your EDI solution.</font>
            </font>
          </p>
          <div class="text-center mt-8"><a
              class="inline-block group p-0.5 font-heading text-base text-gray-700 font-bold hover:bg-[#98d9eb] overflow-hidden rounded-md bg-[#98d9eb]"
              href="/contact/?src=edi&amp;name=une_question_contactez_nous">
              <div class="relative py-2 px-6 bg-white rounded">
                <div
                  class="absolute top-0 left-0 transform -translate-x-full group-hover:-translate-x-0 h-full w-full transition ease-in-out duration-500 bg-[#98d9eb]">
                </div><span class="relative z-10">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">A question ? </font>
                    <font style="vertical-align: inherit;">Contact us!</font>
                  </font>
                </span>
              </div>
            </a></div>
        </div>
        <div data-aos="fade-right" data-aos-duration="500" class="hidden md:block xl:w-2/3 aos-init aos-animate">
          <img alt="Schema EDI |  digitus" srcset="./assets/images/ediconnection.jpg 1x, ./assets/images/ediconnection.jpg 2x"
            src="./assets/images/ediconnection.jpg" width="1606" height="630" decoding="async" data-nimg="1"
            class="w-full z-20 relative" loading="lazy" style="color:transparent">
        </div>
      </div>
    </div>
  </section>
<!--  EDI connection END -->


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
    <div class="o1stsecfaq">
      <div class="1stQ">
        <div class="queshead">
          <h3>What is the difference between EDI and API?</h3>
          <div class="iccrxx">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            Electronic Data Interchange (EDI) is Middleware. Through its
            gateway function, it facilitates the communication of
            information between two companies. The Application Programming
            Interface (API), on the other hand, corresponds to specific
            access that is granted to the services of an application.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
      <div class="2ndQ">
        <div class="queshead">
          <h3>What is the difference between EDI and EAI?</h3>
          <div class="iccrxx">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            Electronic Data Interchange (EDI) is a middleware: a means of
            “gateway” which facilitates the communication of information
            between two companies. Enterprise Application Integration (EAI)
            is internal middleware within a company, which allows its
            different software programs to communicate with each other.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
      <div class="3rdQ">
        <div class="queshead">
          <h3>What is EDI used for?</h3>
          <div class="iconarrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            Electronic Data Interchange (EDI) is used to optimize the
            exchange of information between companies through electronic
            data transfers. To communicate correctly and facilitate data
            processing, it is essential to speak the same language that we
            find today through well-defined standards, protocols and EDI
            formats. EDI is a common language allowing the information
            received to be processed in an understandable manner by its
            internal commercial management software. EDI acts entirely on
            the incoming and outgoing flows of your company. For more
            information on this, see the IDE tab.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
    </div>
    <div class="o2ndsecfaq">
      <div class="4rdQ">
        <div class="queshead">
          <h3>How long does it take to deploy an EDI project?</h3>
          <div class="iccrxx">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            The time required to complete an EDI project depends on the
            scale and complexity of the desired configurations. The number
            of incoming and outgoing flows, the number of contacts
            (partners) and the current state of your Information systems as
            well as other parameters are all factors to take into account to
            evaluate the workload. A project can therefore last a few weeks
            or several months. In most cases, an audit will be necessary to
            properly prepare the ground and understand the workings and
            dynamics of your company. Go to the Audit tab to find out more,
            or contact us to find out more about this.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
      <div class="5rdQ">
        <div class="queshead">
          <h3>How to Migrate your EDI Solution?</h3>
          <div class="iconarrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            Before any migration, it is essential to carry out an Audit of
            your current EDI solution. For a successful migration, all
            incoming and outgoing flows must be identified, their volume,
            and current operating concerns must be understood. The key to
            success lies in the fluidity of exchanges between internal
            services and external companies, but also in our ability to
            understand the parameters and functioning of your company and
            your current configuration. Thanks to their in-depth knowledge
            of the wide range of EDI solutions, our EsaLink experts will
            carry out your migration without difficulty. For more
            information, see the Migration tab.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
    </div>
  </div>
  <div class="TAXFAQ">
    <div class="o1stsecfaq">
      <div class="t1stQ">
        <div class="queshead">
          <h3>How to Dematerialize an Invoice?</h3>
          <div class="iconarrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            The dematerialization of an invoice takes place thanks to the
            implementation of a tool which automates its certification which
            is based on the norms, standards and formats inherent to the
            compliance requirements established by the DGFiP. Two cases of
            dematerialized invoices are possible: Structured (XML, EDI) and
            Unstructured (pdf, jpeg). The structured invoice is drawn up
            following the GS1 recommendations (EN 16931 standard), and
            allows all mandatory information to appear. The GS1
            specifications allow you to find the same types of information
            in an invoice, regardless of the issuing company. The
            unstructured invoice is based on an electronic signature of the
            issuer. By signing the invoice, he accepts responsibility for
            its content and commits to the information detailed therein.
            These two methods of electronic invoices constitute original and
            accounting documents. It is therefore no longer necessary and
            will soon be impossible to send a paper invoice in B2B. For more
            information on this subject, consult the Dematerialization tab.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
      <div class="2ndQ">
        <div class="queshead">
          <h3>
            Is it up to the supplier or the customer to dematerialize?
          </h3>
          <div class="iccrxx">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            Two scenarios exist: 1. The supplier issues dematerialized
            invoices because it has implemented a dematerialization tool.
            The customer therefore automatically receives a compliant
            invoice, and does not need to install a dematerialization tool
            since the certification work has already been carried out on the
            supplier side. 2. The supplier does not benefit from a
            dematerialization tool. He then sends paper invoices, or
            “classic” PDF (uncertified). The client then dematerializes the
            invoices received in order to integrate them more easily into
            their commercial management tool. In this case, the compliant
            accounting document is found with the client (since it is
            certified compliant on their side). The archiving of electronic
            invoices, according to accounting law, is 10 years. Please note,
            by 2024, all invoices issued in B2B must be dematerialized. For
            more information on this subject, consult the Dematerialization
            tab.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
    </div>
    <div class="o2ndsecfaq">
      <div class="3rdQ">
        <div class="queshead">
          <h3>How long does it take to integrate tax dematerialization?</h3>
          <div class="iccrxx">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            Switching to electronic invoicing requires analyzing your
            company's constraints and contractual obligations. The
            integration time of a dematerialization solution varies from one
            company to another depending on its EDI needs. Would you like to
            know more about this? Contact us to analyze your needs together.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
      <div class="4rdQ">
        <div class="queshead">
          <h3>
            What is the difference between an Electronic and a
            Paperless Invoice?
          </h3>
          <div class="iccrxx">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="FAQAnswers">
          <p>
            The electronic invoice must comply with a certain number of
            legal conditions in order to be certified as compliant and serve
            as an original accounting document (Reliable Audit Trail).
            Whether we use the term “electronic” or “dematerialized”
            invoice, the same compliance obligations apply. It is therefore
            the same thing that meets the concept of tax dematerialization.
          </p>
        </div>
        <hr class="alwaysacthr" />
      </div>
    </div>
  </div>
</section>

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
        <li style="box-sizing:border-box;align-items:center;margin: auto;color: #ffffff;">© Copyright 2023 Digitus. All
          Rights Reserved.</li>
      </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/script/faq.js"></script>
    <script src="./assets/script/cptcha.js"></script>
    <script src="./assets/script/handlescroll.js"></script>
    

</body>

</html>
