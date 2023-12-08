<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/hubtimize.css" />
    <script
      src="https://kit.fontawesome.com/81831682c9.js"
      crossorigin="anonymous"
    ></script>

    <link href="../css/footer.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/secondsection.css" />
    <link rel="stylesheet" href="../css/footer_2.css" />

    <script
      src="https://kit.fontawesome.com/81831682c9.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
      type="module"
    ></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha384-oSNWNu9qXlXkC7VlP1EGqLkTof9X8X+5b0V/1B/W+4OQ6Fm3adS5ogC2Y4LnXfA4"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/voussimplify.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body id="body" onscroll="handleScroll()">
    <div class="firstSec">
      <div class="firstSectionContainer" id="firstSectionContainer">
        <h1 class="DigitusLogo">
          <a href="../index.php"
            ><img
              src="./assets/images/mainlogo.png"
              class="logoImage"
              alt="Digitus"
              height="90x"
          /></a>
        </h1>

        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navmenu">
          <li>
            <a
              class="factLinkContainer"
              href="/expertise/facturation-electronique/"
            >
              Electronic invoicing 2024</a
            >
          </li>
          <li>
            <div
              class="addOption"
              id="firstDropdownButton"
              onmouseover="showDropdown()"
            >
              <span onmouseleave="hideDropdown()" class="navBarOpt"
                >Expertise</span
              >
              <span
                onmouseleave="hideDropdown()"
                id="dropdown1"
                class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl"
              >
                <div class="dropdownContainer">
                  <div class="firstDropdownSection">
                    <div class="dropdownHeader">NOTRE EXPERTISE</div>
                    <div>
                      Optimize your B2B data exchanges to benefit your
                      productivity in line with your sectoral requirements
                    </div>
                  </div>
                  <div class="secondDropdownSection">
                    <a style="text-decoration: none" href="edipul.php"
                      ><div>EDI- Electronic Data Interchange</div></a
                    >
                    <div>Electronic invoicing</div>
                  </div>
                </div>
              </span>
            </div>
          </li>

          <li>
            <div class="addOption" onmouseover="showDropdown2()">
              <span onmouseleave="hideDropdown2()" class="navBarOpt"
                >Solutions</span
              >
              <span
                onmouseleave="hideDropdown2()"
                id="dropdown2"
                class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl"
              >
                <div class="dropdownContainer">
                  <div class="firstDropdownSection">
                    <div class="dropdownHeader">NOS SOLUTIONS</div>
                    <div>
                      Catalyze collaboration within your ecosystem through a
                      wide range of dematerialization solutions adapted to your
                      needs
                    </div>
                  </div>
                  <div class="secondDropdownSection2nd">
                    <div>Nos solutions</div>
                    <hr />
                    <div class="dropdownSeperator">
                      <div class="rightOptionsForDropdown">
                        <div class="blackColorFont">On premise</div>
                        <div class="yellowColorFont">TradeXpress</div>
                        <div class="yellowColorFont">IBM Sterling</div>
                        <div class="yellowColorFont">Cleo</div>
                      </div>
                      <a style="text-decoration: none" href="hubtimize.php"
                        ><div>
                          <div class="blackColorFont">Cloud</div>
                          <div class="yellowColorFont">Hubtimize®</div>
                        </div></a
                      >
                    </div>
                  </div>
                </div>
              </span>
            </div>
          </li>

          <li>
            <div class="addOption" onmouseover="showDropdown3()">
              <span onmouseleave="hideDropdown3()" class="navBarOpt"
                >Services</span
              >
              <div
                onmouseleave="hideDropdown3()"
                id="dropdown3"
                class="hover-target submenu absolute group-hover:transition duration-300 shadow-xl"
              >
                <div class="dropdownContainer">
                  <div class="firstDropdownSection">
                    <div class="dropdownHeader">NOS SERVICES</div>
                    <div>
                      Optimize your B2B data exchanges to benefit your
                      productivity in line with your sectoral requirements
                    </div>
                  </div>
                  <div class="secondDropdownSection3rd">
                    <div>Nos Services</div>
                    <hr />
                    <div class="dropdownSeperator3rd">
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
            <a href="blog.php" style="text-decoration: none">
              <div class="addOption">Blog</div></a
            >
          </li>

          <li>
            <a href="contact.php" style="text-decoration: none">
              <div class="navButton">Get Demo</div></a
            >
          </li>
          <li>
            <div class="fropt">
              <select
                name="cars"
                id="cars"
                class="addOption"
                style="border: none"
              >
                <option value="volvo">En</option>
                <option value="saab">Fr</option>
                <option value="mercedes">Tr</option>
              </select>
            </div>
          </li>
        </ul>
      </div>

      <div class="header_main_body">
        <div>
          <div
            data-aos="fade-down"
            data-aos-duration="1500"
            class="header_main_body_logo2"
          >
            <img
              alt="ISO 27001 Logo"
              src="./assets/images/iso-27001 (1).webp"
              width="160"
              height="74"
              decoding="async"
              data-nimg="1"
              class="header_main_body_logo3"
              loading="lazy"
              style="color: transparent"
            />
          </div>
          <h1
            data-aos="fade-up"
            data-aos-easing="ease-in-out-cubic"
            class="header_main_body_heading"
          >
            La dématérialisation<br />au service de votre business
          </h1>
          <h2
            data-aos="fade-up"
            data-aos-duration="1500"
            class="header_main_body_heading_two"
          >
            Esalink vous accompagne dans la digitalisation de vos flux B2B
          </h2>
          <div
            data-aos="fade-up"
            data-aos-duration="1500"
            class="header_main_body_buttons"
          >
            <a class="header_main_body_buttons_one"
              >Trouver votre solution EDI</a
            >
            <a class="header_main_body_buttons_one"
              >Passer à la facturation électronique</a
            >
          </div>
          <div class="header_main_body_photos">
            <div class="header_main_body_photos_include">
              <img
                alt="Logo Generix Group Blanc "
                data-aos="fade-up"
                data-aos-duration="900"
                src="./assets/images/Qlik_Logo.svg.png"
                decoding="async"
                data-nimg="1"
                loading="lazy"
                style="color: transparent"
              />
            </div>

            <div class="header_main_body_photos_include">
              <img
                alt="Logo Generix Group Blanc"
                data-aos="fade-up"
                data-aos-duration="900"
                src="./assets/images/Oracle_logo.svg.png"
                decoding="async"
                data-nimg="1"
                loading="lazy"
                style="color: transparent"
              />
            </div>
            <div class="header_main_body_photos_include">
              <img
                alt="Logo Generix Group Blanc"
                data-aos="fade-up"
                data-aos-duration="900"
                src="./assets/images/Liferay-logo-full-color-2x.png"
                decoding="async"
                data-nimg="1"
                loading="lazy"
                style="color: transparent"
              />
            </div>
            <div class="header_main_body_photos_include">
              <img
                alt="Logo Generix Group Blan"
                data-aos="fade-up"
                data-aos-duration="900"
                src="./assets/images/power-bi_logo.webp"
                decoding="async"
                data-nimg="1"
                loading="lazy"
                style="color: transparent"
              />
            </div>
            <div class="header_main_body_photos_include">
              <img
                alt="Logo Generix Group Blanc "
                data-aos="fade-up"
                data-aos-duration="900"
                src="./assets/images/PTC_Windchill.png"
                decoding="async"
                data-nimg="1"
                loading="lazy"
                style="color: transparent"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="crossOver" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="overLapContainer">
          <div class="blackContainer">I would like</div>
          <div class="whiteCont">Det Support fro my EDI solution</div>
          <div class="lastCont">I go</div>
        </div>
      </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="hidden_Navbar">
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
          <a href="../index.php"
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
                  <a
                    style="text-decoration: none; color: orange"
                    href="edipul.php"
                    ><li class="dropdownitem">
                      EDI- Electronic Data Interchange
                    </li></a
                  >
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
                  <a
                    style="text-decoration: none; color: orange"
                    href="hubtimize.php"
                    ><li class="dropdownitem">Hubtimize®</li></a
                  >
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
                  <a
                    style="text-decoration: none; color: orange"
                    href="edi.php"
                  >
                    <li class="yellowColorFontThird">EDP</li>
                  </a>
                  <a
                    style="text-decoration: none; color: orange"
                    href="edp.php"
                  >
                    <li class="yellowColorFontThird">EDI</li>
                  </a>
                  <a
                    style="text-decoration: none; color: orange"
                    href="cx.php"
                  >
                    <li class="yellowColorFontThird">CX</li>
                  </a>
                  <a
                    style="text-decoration: none; color: orange"
                    href="bi.php"
                  >
                    <li class="yellowColorFontThird">BI</li>
                  </a>
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
          <a href="contact.php" style="text-decoration: none"> Get Demo </a>
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- ---------------------------------------------------------------------------------------------------------------------------------------------      -->

    <div class="hubtimize_nav_view_main_container">
      <div
        data-aos="fade-right"
        data-aos-offset="400"
        data-aos-easing="ease-in-sine"
        data-aos-duration="400"
        class="hubtimize_nav_view_main_left_container"
      >
        <ul class="hubtimize_nav_view_main_sub_container_text-right">
          <li class="custom-list-item">
            Gestion de vos factures entrantes et sortantes
          </li>
          <li class="custom-list-item">
            Suivi simplifié de tous les documents
          </li>
          <li class="custom-list-item">Gestion de vos partenaires</li>
          <li class="custom-list-item">
            Gestion des tables de transcodification
          </li>
          <li class="custom-list-item">Mise en conformité légale</li>
          <li class="custom-list-item">
            Personnalisation des profils utilisateurs
          </li>
          <li class="custom-list-item">Gestion de tous les formats</li>
          <li class="py-3">
            Visibilité et traçabilité sur tous les processus de traitement
          </li>
        </ul>
      </div>
      <div class="hubtimize_nav_view_main_video">
        <video
          id="my-video"
          loop=""
          class="hubtimize_nav_view_main_video_real"
          preload="auto"
          muted=""
          data-setup="{}"
          autoplay=""
          poster="./assets/images/solutionsEDI/hubtimize/login-hubtimize.webp"
        >
          <source src="../html/videos/hubtimize.mp4" type="video/mp4" />
        </video>
      </div>
      <div
        data-aos="fade-up"
        data-aos-duration="400"
        data-aos-easing="ease-in-sine"
        data-aos-offset="400"
        class="hubtimize_nav_view_main_right_container"
      >
        <ul class="hubtimize_nav_view_main_right_container_text-left">
          <li class="custom-list-item">
            Complétion : intervenez facilement à tout moment
          </li>

          <li class="custom-list-item">Outils de monitoring puissants</li>
          <li class="custom-list-item">Affiliation logique des documents</li>
          <li class="custom-list-item">
            Génération d'un visible pour tout document
          </li>
          <li class="custom-list-item">
            Visibilité partagée des transactions multi-fournisseurs
          </li>
          <li class="custom-list-item">Contrôles métiers personnalisables</li>
          <li class="custom-list-item">Archivage légal coffre-fort</li>
          <li class="py-3">E-reporting et e-invoicing conforme</li>
        </ul>
      </div>
    </div>

    <!-- ---------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="HubtimizeOuterSection">
      <h1>Simple. Efficient. Modular.</h1>
      <h3
        style="
          color: rgb(74, 69, 69);
          text-align: center;
          font-size: 20px;
          padding-top: 10px;
        "
      >
        EDI in its most modern form to optimize your business.
      </h3>

      <div class="animationHubtimize">
        <div class="hubtimizeBlueCircle">
          <div data-aos="fade-up" data-aos-anchor-placement="center-center">
            <img
              src="./assets/Hubtimize/laptop-right.webp"
              alt="left"
              class="hubtimizeBlueCircleimage"
            />
          </div>
          <div data-aos="fade-up" data-aos-anchor-placement="top-center">
            <img
              src="./assets/Hubtimize/laptop_left.webp"
              alt="right"
              class="hubtimizeBlueCircleimage"
            />
          </div>
        </div>
      </div>
      <div
        class="text2HubtimizeAnimation"
        data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom"
      >
        You want to automate the generation, sending and management of all your
        electronic transactions with your business partners: orders, shipping
        notices, electronic invoices and others; Hubtimize® allows you to do
        this by interfacing directly with your ERP or CAPM
      </div>
    </div>

    <!-- ---------------------------------------------------------------------------------------------------------------------------- -->

    <section class="hubtimize_une_solution_main_container">
      <div
        data-aos="fade-up"
        data-aos-duration="800"
        class="hubtimize_une_solution_sub_container"
      >
        <h2 class="hubtimize_une_solution_container_heading">
          <label class="hubtimize_une_solution_main_heading"
            >Une solution SaaS</label
          >
          <br />collaborative pour dynamiser votre écosystème B2B.
        </h2>
        <div class="hubtimize_une_solution_sub_container_bindup">
          <p class="hubtimize_une_solution_container_paragraph_one">
            Pensée par les <b>utilisateurs</b> et réalisée par des
            <b>experts</b>,<br /><br />
            <label class="hubtimize_une_solution_container_paragraph_label"
              >Une expérience d’utilisation optimale pour la gestion et
              optimisation de vos processus Order-to-Cash (O2C) et
              Procure-to-Pay (P2P).</label
            >
          </p>
          <p class="hubtimize_une_solution_container_paragraph_two">
            Adressée tout aussi bien aux personnes métiers qu’aux utilisateurs
            techniques, la nouvelle plateforme Cloud et all-in-one Hubtimize®
            vous propose un concentré de technologie pour gérer, contrôler et
            optimiser vos flux B2B - B2G.
          </p>
        </div>
        <div class="hubtimize_une_solution__second_main_container">
          <div class="hubtimize_une_solution__second_sub_container">
            <button class="hubtimize_une_solution__second_sub_container_button">
              <p class="hubtimize_une_solution__second_sub_container_para">
                Parler avec un spécialiste
              </p>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="hubtimize_moderene_et_intuitive_main_container">
      <div class="hubtimize_moderene_et_intuitive_top_container">
        <h2 class="hubtimize_moderene_et_intuitive_heading">
          Une interface moderne et intuitive.
        </h2>
        <p class="hubtimize_moderene_et_intuitive_para">
          Hubtimize® vous offre tout ce que l’EDI permet, de la meilleure façon,
          dans sa meilleure version.
        </p>
      </div>
      <div class="hubtimize_moderene_et_intuitive_bottom_container">
        <div class="hubtimize_moderene_et_intuitive_bottom_sub_container">
          <img
            data-aos="fade-right"
            data-aos-duration="900"
            alt="Interface computer | Digitus"
            src="./assets/Hubtimize/interface_computer.webp"
            width="600"
            height="600"
            decoding="async"
            data-nimg="1"
            class="hubtimize_moderene_et_intuitive_bottom_sub_container_image"
            loading="lazy"
            style="color: transparent"
          />

          <p class="hubtimize_moderene_et_intuitive_bottom_sub_container_para">
            Que vous soyez DSI, DAF, Responsable logistique, ou responsable
            service client, retrouvez la robustesse d’un système IBM à travers
            une interface ludique.<br /><br />Notre solution EDI SaaS est en
            constante évolution pour vous assurer les plus hauts standards de
            sécurité, de traçabilité et d’évolution.
          </p>
        </div>
      </div>
    </section>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------
 -->
    <div data-aos="fade-up" class="hubtimize_Container_hubtimize_card_priyansh">
      <div class="hubtimize_card_priyansh">
        <span class="hubtimize_card_priyansh_icon"
          ><i class="fa-solid fa-layer-group text-8xl"></i
        ></span>
        <h2>Une plateforme EDI multi-standard</h2>
        <p>
          Flexibility of the offer for an optimized service Data supply for
          personalized KPIs Proactivity in advising on improving your processes
        </p>
      </div>
      <div class="hubtimize_card_priyansh">
        <span class="hubtimize_card_priyansh_icon"
          ><i class="fa-solid fa-ranking-star text-8xl"></i
        ></span>
        <h2>Qualité Digitus</h2>
        <p>
          Simplification of administrative management A single contract covering
          all your requirements A technical approach in line with business
        </p>
      </div>
      <div class="hubtimize_card_priyansh">
        <span class="hubtimize_card_priyansh_icon"
          ><i class="fa-solid fa-gauge-high text-8xl"></i
        ></span>
        <h2>Haute disponibilité garantie</h2>
        <p>
          Flexibility of the offer for an optimized service Data supply for
          personalized KPIs Proactivity in advising on improving your processes
        </p>
      </div>
      <div class="hubtimize_card_priyansh">
        <span class="hubtimize_card_priyansh_icon"
          ><i class="fa-solid fa-clipboard-check text-8xl"></i
        ></span>
        <h2>Compliance EDI</h2>
        <p>
          Adaptation of your consumption through units of work (OU) to the
          subscribed package A single periodic invoice Reduction in costs
        </p>
      </div>
    </div>
    <div class="hubtimize_slider_lastpart"><p class="para"></p></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const icons = document.querySelectorAll(".hubtimize_card_priyansh");

        icons.forEach((icon) => {
          icon.addEventListener("mouseover", function () {
            const paragraph = this.closest(
              ".hubtimize_card_priyansh"
            ).querySelector("p");
            document.querySelector(".para").innerText = paragraph.innerText;
          });
        });
      });
    </script>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------
 -->

    <section class="hubtimize_cloud_part6_main_container">
      <div
        data-aos="fade-up"
        data-aos-duration="400"
        class="hubtimize_cloud_part6_sub_container"
      >
        <img
          alt="Cloud icon | Digitus"
          src="../html/Hubtimize/nuage_vectoriel.f26ecb0d.svg"
          width="953"
          height="586"
          decoding="async"
          data-nimg="1"
          class="hubtimize_cloud_part6_sub_container_image"
          loading="lazy"
          style="color: transparent"
        />
        <h2 class="hubtimize_cloud_part6_sub_container_headingh2">
          Vos <label class="hubtimize_cloud_part6_label">enjeux B2B</label> au
          cœur de notre offre Cloud
          <label class="hubtimize_cloud_part6_label">Hubtimize®</label>
        </h2>
        <div class="hubtimize_cloud_part6_sub_container_division">
          <div class="hubtimize_cloud_part6_sub_container_sub_division">
            <p class="hubtimize_cloud_part6_sub_container_sub_division_para">
              <label class="hubtimize_cloud_part6_label"
                >La solution d'intégration BtoB Hubtimize®</label
              >
              a été conçue pour s’adapter parfaitement à tous vos enjeux
              business. Une plateforme fiable et sécurisée, hautement disponible
              grâce aux dernières technologies
              <label class="hubtimize_cloud_part6_label">Cloud</label> et de
              l’Intelligence Artificielle.
            </p>
            <p class="hubtimize_cloud_part6_sub_container_sub_division_para2">
              Auto-Scalling / Norme de sécurité C5 / micro-services
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ---------------------------------------------------------------priyanshpart--------------------------------------------------------------------- -->

    <section class="Hubtimize_priyansh_section">
      <h1 class="PRIYANSH_H1">A unified and scalable platform</h1>
      <div class="hubtimizePriyansh" style="margin-top: 18%">
        <div>
          <img
            data-aos="zoom-in-up"
            data-aos-duration="800"
            class="Hubtimize_priyansh_section_mainImage"
            src="../html/Hubtimize/hubtimize_screen.webp"
            alt="laptop"
          />
        </div>

        <div class="custom-shape-divider-top-1699475941">
          <svg
            data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1200 120"
            preserveAspectRatio="none"
          >
            <path
              d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z"
              class="shape-fill"
            ></path>
          </svg>
        </div>
      </div>
      <div class="gradientCueveHubtimize"></div>
      <div class="innerdiv_all_compilation">
        <div class="innerdiv_all_compilation_divison">
          <h1>
            Why <span style="color: orange">Hubtimize®</span> ? Above all to
            optimize.
          </h1>

          <div class="inner_div_Priyansh_heading">
            <div
              style="padding-right: 5%; border-right: 4px solid white"
              data-aos="fade-up"
              data-aos-duration="400"
            >
              <h3 style="text-align: right">Innovation</h3>
              <p style="text-align: right">
                A scalable solution: an R&D office that constantly carries out
                internal and external evaluations relating to the quality,
                security and performance of the platform.
              </p>
            </div>

            <div
              style="padding-left: 5%"
              data-aos="fade-right"
              data-aos-duration="400"
            >
              <h3 style="text-align: left">User-friendly</h3>
              <p style="text-align: left">
                A modern user experience: Hubtimize® is the result of extensive
                research work on the ergonomics of the interface and the user
                journey.
              </p>
            </div>
          </div>

          <div
            class="innerdiv_all_compilation_div"
            data-aos="zoom-in"
            data-aos-duration="1600"
          >
            <div class="priyansh_hubtimize_custom_card_container">
              <div class="icon_priyansh_cards_hub">
                <i class="fa-solid fa-layer-group icongroup"></i>
              </div>
              <h2>INTEGRATION MULTI-ERP</h2>
              <p>
                secure connections with comprehensive support for efficient and
                effective communication protocols regardless of your
                configuration
              </p>
            </div>

            <div class="priyansh_hubtimize_custom_card_container">
              <div class="icon_priyansh_cards_hub">
                <i class="fa-solid fa-palette icongroup"></i>
              </div>
              <h2>A MODERN PLATFORM</h2>
              <p>
                a useful and intuitive design that gives you a 360° view of your
                feeds, statuses and partners. A coherent and useful affiliation
                between entities
              </p>
            </div>

            <div class="priyansh_hubtimize_custom_card_container">
              <div class="icon_priyansh_cards_hub">
                <i class="fa-solid fa-tower-broadcast icongroup"></i>
              </div>
              <h2>MONITORING TOOLS</h2>
              <p>
                global visibility of your activity with performance indicators
                and real-time reporting on all of your activities
              </p>
            </div>
          </div>
          <div
            class="innerdiv_all_compilation_div"
            style="margin-top: 0"
            data-aos="zoom-in"
            data-aos-duration="1600"
          >
            <div class="priyansh_hubtimize_custom_card_container">
              <div class="icon_priyansh_cards_hub">
                <i class="fa-solid fa-cloud icongroup"></i>
              </div>
              <h2>INTEGRATION MULTI-ERP</h2>
              <p>
                secure connections with comprehensive support for efficient and
                effective communication protocols regardless of your
                configuration
              </p>
            </div>

            <div class="priyansh_hubtimize_custom_card_container">
              <div class="icon_priyansh_cards_hub">
                <i class="fa-solid fa-robot icongroup"></i>
              </div>
              <h2>A MODERN PLATFORM</h2>
              <p>
                a useful and intuitive design that gives you a 360° view of your
                feeds, statuses and partners. A coherent and useful affiliation
                between entities
              </p>
            </div>

            <div class="priyansh_hubtimize_custom_card_container">
              <div class="icon_priyansh_cards_hub">
                <i class="fa-solid fa-comment-dots icongroup"></i>
              </div>
              <h2>MONITORING TOOLS</h2>
              <p>
                global visibility of your activity with performance indicators
                and real-time reporting on all of your activities
              </p>
            </div>
          </div>
          <div style="text-align: center">
            <button
              data-aos="fade-up"
              data-aos-duration="1500"
              class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_button"
            >
              <p
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_button_para"
              >
                Essayer Hubtimize
              </p>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="hubtimize_vous_simplify_main_container">
      <div class="hubtimize_vous_simplify_sub_container">
        <div>
          <h2 class="hubtimize_vous_simplify_sub_container_heading">
            Hubtimize® vous simplifie la collaboration avec vos partenaires
            grâce à une construction modulaire qui s’adapte à :
          </h2>
          <div>
            <ul
              class="hubtimize_vous_simplify_sub_container_heading_checkulgreen"
            >
              <li
                data-aos="fade-up"
                data-aos-duration="400"
                class="hubtimize_vous_simplify_sub_container_heading_checkulgreen_li1"
              >
                votre taille
              </li>
              <li
                data-aos="fade-up"
                data-aos-duration="800"
                class="hubtimize_vous_simplify_sub_container_heading_checkulgreen_li2"
              >
                vos besoins EDI spécifiques
              </li>
              <li
                data-aos="fade-up"
                data-aos-duration="1200"
                class="hubtimize_vous_simplify_sub_container_heading_checkulgreen_li3"
              >
                votre budget
              </li>
              <li
                data-aos="fade-up"
                data-aos-duration="1600"
                class="hubtimize_vous_simplify_sub_container_heading_checkulgreen_li4"
              >
                votre maturité digitale
              </li>
              <li
                data-aos="fade-up"
                data-aos-duration="2000"
                class="hubtimize_vous_simplify_sub_container_heading_checkulgreen_li5"
              >
                votre secteur d’activité
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- -----------------------------------------------------------------------optimiser------------------------------------------------------------- -->
    <section class="Hubtimize_optimisation_conformite_main_container">
      <div class="Hubtimize_optimisation_conformite_sub_container">
        <div class="Hubtimize_optimisation_conformite_sub_container_sub">
          <div
            class="Hubtimize_optimisation_conformite_sub_container_sub_left_container"
          >
            <div
              data-aos="fade-up"
              data-aos-duration="500"
              class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_div"
            >
              <h3
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_h3"
              >
                Optimisation
              </h3>
              <p
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_para"
              >
                Une optimisation de votre productivité avec une gestion
                améliorée de vos <b>flux B2B</b> et une collaboration
                <b>simplifiée</b> avec tous vos partenaires. Pour toutes les
                organisations et dans tous les <b>secteurs d’activité</b>,
                Hubtimize® c’est d’abord le choix de la valeur ajoutée.
                Optimisez vos cycles <b>P2P</b> et <b>O2C</b> et gagner en
                visibilité et en <b>performance</b>.
              </p>
            </div>
            <div
              data-aos="fade-up"
              data-aos-duration="1000"
              class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_div"
            >
              <h3
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_h3"
              >
                Conformité
              </h3>
              <p
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_para"
              >
                Digitus assure une <b>conformité légale exhaustive</b> avec les
                plus hauts standards de qualité mais aussi les dernières
                directives administratives. Hubtimize® E-invoicing est
                directement connecté à la plateforme de Facturation Publique
                <b>Chorus Pro</b>. Assurez-vous d’être toujours en adéquations
                avec les <b>exigences légales</b> pour votre business et
                <b>fiabilisez vos échanges</b>.
              </p>
            </div>
            <div
              data-aos="fade-up"
              data-aos-duration="1500"
              class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_div"
            >
              <h3
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_h3"
              >
                Collaboration
              </h3>
              <p
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_para"
              >
                Faites le choix de l’efficacité avec un
                <b>écosystème EDI</b> moderne, accessible et collaboratif.
                Embarquer facilement tous <b>vos partenaires</b>, du plus grand,
                jusqu’aux plus petits. Echangez simplement et sereinement avec
                vos <b>Clients et Fournisseurs</b>.
              </p>
            </div>

            <button
              data-aos="fade-up"
              data-aos-duration="1500"
              class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_button"
            >
              <p
                class="Hubtimize_optimisation_conformite_sub_container_sub_left_container_button_para"
              >
                Réserver une démo Hubtimize
              </p>
            </button>
          </div>
          <div
            data-aos="fade-up"
            data-aos-duration="800"
            class="Hubtimize_optimisation_conformite_sub_container_sub_right_container"
          >
            <img
              alt="catalisation Image | Digitus"
              src="../html/Hubtimize/catalisation.gif"
              width="708"
              height="708"
              decoding="async"
              data-nimg="1"
              class="Hubtimize_optimisation_conformite_sub_container_sub_right_container_image"
              loading="lazy"
              style="color: transparent"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------nextcontent--------------------------------------------------------- -->
    <section class="hubtimize_vous_purpose_main_container">
      <div class="hubtimize_vous_purpose_sub_container">
        <h2
          data-aos="fade-up"
          data-aos-duration="500"
          class="hubtimize_vous_purpose_sub_container_heading"
        >
          Digitus vous propose un accompagnement complet sur votre solution
          HUBTIMIZE®
        </h2>
        <div
          data-aos="fade-up"
          data-aos-duration="900"
          class="hubtimize_vous_purpose_sub_container_top_div"
        >
          <ul class="hubtimize_vous_purpose_sub_container_top_div_checkul">
            <li>Analyse de l’information</li>
            <li>
              Développement des messages EDI : flux d’intégration et de test
            </li>
            <li>Configuration des environnements EDI</li>
            <li>Configuration des communications</li>
            <li>Intégration avec le système interne du client</li>
            <li>Coordination du projet de migration des partenaires</li>
          </ul>
          <ul class="hubtimize_vous_purpose_sub_container_top_div_checkul">
            <li>Test et validation des mapping</li>
            <li>Contrôles métier personnalisable</li>
            <li>
              Configuration et gestion des profils d’utilisateurs de la
              plateforme
            </li>
            <li>Formation des utilisateurs</li>
            <li>Mise en œuvre et suivi</li>
            <li>Documentation du projet</li>
            Digitus
          </ul>
        </div>
        <div
          data-aos="fade-up"
          data-aos-duration="900"
          class="hubtimize_vous_purpose_sub_container_bottom_div"
        >
          <div class="hubtimize_vous_purpose_sub_container_bottom_div_sub">
            <a href="/nos-services/">
              <button
                class="hubtimize_vous_purpose_sub_container_bottom_div_sub_button"
              >
                <p
                  class="hubtimize_vous_purpose_sub_container_bottom_div_sub_button_para"
                >
                  Découvrir les services d’accompagnement Digitus pour
                  Hubtimize®
                </p>
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div data-aos="fade-up" class="hubtimize_certificate_main_container">
      <div class="hubtimize_certificate_sub_container">
        <div class="hubtimize_certificate_sub_container_sub">
          <div class="hubtimize_certificate_left_container">
            <div class="my-image-container">
              <img
                alt="ISO 27001 Image | Digitus"
                src="../html/Hubtimize/iso-27001_white.webp"
              />
              <img
                alt="GS1 Logo Image | Digitus"
                src="../html/Hubtimize/gs1_white.2eb52643.svg"
              />
            </div>
          </div>
          <div class="hubtimize_certificate_right_container">
            <div class="hubtimize_certificate_right_container_text1">
              <h3 class="hubtimize_certificate_right_container_text1_heading">
                ISO 27001 certificate related to Information Systems Security:
              </h3>
              <div
                class="hubtimize_certificate_right_container_text1_heading_list"
              >
                <ul
                  class="hubtimize_certificate_right_container_text1_heading_whole_list"
                >
                  <li>Internationally recognized requirements</li>
                  <li>Systematic vulnerability detection</li>
                  <li>Control of IT risks</li>
                  <li>Minimizing IT security risks</li>
                  <li>Confidentiality of information</li>
                  <li>Structured method to meet compliance requirements</li>
                </ul>
              </div>
            </div>
            <div class="hubtimize_certificate_right_container_text2">
              <h3 class="hubtimize_certificate_right_container_text2_heading">
                Certification GS1 du module HUBTIMIZE® E-invoice
              </h3>
              <p class="hubtimize_certificate_right_container_text2_contains">
                Compliance of the Digitus solution with the latest standards
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="Hubtimize_trade_main_container">
      <div class="Hubtimize_trade_sub_container">
        <div>
          <img
            class="Hubtimize_trade_image"
            src="../html/Hubtimize/hubtimize_trade_optimizer.3c87333c.svg"
            alt="there is hubtimize_trade_optimizer image"
          />
        </div>
        <div>
          <h3 class="Hubtimize_trade_title">
            Solution HUBTIMIZE® présentée au salon VIVATECH – FNFE – 77ème
            CONGRES de L’ORDRE DES EXPERTS COMPTABLES - SALONS SOLUTIONS – GITEX
            – ACCOUNTEX London Money 20/20 EUROPE -
          </h3>
        </div>
        <div class="Hubtimize_trade_images_garelly">
          <img
            data-aos="fade-up"
            data-aos-duration="400"
            alt="Congres Expert Image | Digitus"
            src="./assets/images/QAD_Logo_Full-Color-Primary-removebg-preview.png"
            loading="lazy"
            class="image"
          />
          <img
            data-aos="fade-up"
            data-aos-duration="800"
            alt="Account Ex Image | Digitus"
            src="./assets/images/power-bi_logo.webp"
            loading="lazy"
            class="image"
          />
          <img
            data-aos="fade-up"
            data-aos-duration="1200"
            alt="FNFE Logo | Digitus"
            src="./assets/images/Oracle_logo.svg.png"
            loading="lazy"
            class="image"
          />
          <img
            data-aos="fade-up"
            data-aos-duration="1600"
            alt="Gitex Logo | Digitus"
            src="./assets/images/Liferay-logo-full-color-2x.png"
            loading="lazy"
            class="image"
          />
          <img
            data-aos="fade-up"
            data-aos-duration="2000"
            alt="Viva Technology Logo | Digitus"
            src="./assets/images/Qlik_Logo.svg.png"
            loading="lazy"
            class="image"
          />
          <img
            data-aos="fade-up"
            data-aos-duration="2400"
            alt="Money Image | Digitus"
            src="./assets/images/PTC_Windchill.png"
            loading="lazy"
            class="image"
          />
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
        easing: "ease",

        offset: 0,
        anchorPlacement: "top-bottom",
      });
      function initAOSOnScroll() {
        AOS.refresh();
      }

      window.addEventListener("scroll", initAOSOnScroll);
    </script>
    <section class="home_contacter">
      <div class="home_texter">
        <div>
          <span
            data-aos="fade-down"
            data-aos-duration="900"
            class="inline-block text-xs text-gray-50 uppercase aos-init aos-animate"
          >
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
          <canvas
            style="
              border: 1px solid #000;
              background-color: white;
              border-radius: 3px;
            "
            class="captcha"
            >captcha text</canvas
          >

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
            <input
              placeholder="Enter Captha*"
              style="color: black"
              id="textBox"
              type="text"
              name="text"
            />

            <div class="hideondesk">
              <canvas
                style="
                  border: 1px solid #000;
                  background-color: white;
                  border-radius: 3px;
                "
                class="captcha"
                >captcha text</canvas
              >

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
            <h4 style="margin-left: 10px">follow us</h4>
            <div style="margin-left: 10px" class="social-links">
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
              <img
                class="footer_Priyansh_image"
                loading="lazy"
                src="./assets/images/mainlogo.png"
                alt=""
              />
            </div>
          </div>
          <li
            style="
              box-sizing: border-box;
              align-items: center;
              margin: auto;
              color: #ffffff;
            "
          >
            © Copyright 2023 Digitus. All Rights Reserved.
          </li>
        </div>
      </div>
    </footer>
    <script src="./assets/script/cptcha.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- <script>
      AOS.init();
  </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/script/faq.js"></script>

    <script src="./assets/script/handlescroll.js"></script>
  </body>
</html>
