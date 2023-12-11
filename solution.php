<?php include "./dashboard/z_db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/solution.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
<!-- ___________________________ -->

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
    <a style="text-decoration: none;color: inherit" href="solution.php">
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

<!-- ___________________________ -->

  <div class="solutionss_div">
    <div class="solutionss_div-main-sol">
      <div class="solutionss_div-main-sol-3">Turn your problems into  <div class="solutionss_main-div-sol-p-tag">
        <div class="solutionss_grad">
    
        </div>
        <div class="solutionss_main-div-part-small-text">
          profitable business
        </div>
      </div></span></div>
      <div class="solutionss_div-main-sol-4">
        <div class="solutionss_div-main-sol-5">Get more customers</div>
        <div class="solutionss_div-main-sol-6">Watch free demo</div>
      </div>
      <div class="solutionss_div-main-sol-7">60 Days free trial . No credit card required</div>
    </div>
    <div data-aos="fade-up" class="solutionss_main-div-sol-img-1">
      <img
      loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c3fc5397ba8ab3dbe4979a69ca7003d28b6bcfa59c3e10f152d3b453cb6eed5?apiKey=7103b0229adb49a88a34b61c64810a65&"
      class="solutionss_img-2"
    />
    </div>
    <div class="solutionss_div-13">
      <div class="solutionss_div-14">
        <div data-aos="fade-up" class="solutionss_div-15">Over 1000+ people trust us</div>
        <div data-aos="fade-up" class="solutionss_div-16">
          Clarity gives you the blocks & components you need to create a truly
          professional website, landing page or admin panel for your SaaS.
        </div>
        <div class="solutionss_div-17">
          <div class="solutionss_div-18">
            <div class="solutionss_swiper-container">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="./assets/images/solPageRish1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/solPageRish1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/solPageRish1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/solPageRish1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/solPageRish1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/solPageRish1.jpg" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="solutionss_div-34">See all reviews by our customers</div>
      </div>
    </div>
    <div class="solutionss_div-35">
      <div class="solutionss_div-36">
        <div data-aos="fade-up" class="solutionss_div-37">Make every step user-centric</div>
        <div class="solutionss_div-38">
          Lorem ipsum dolor sit amet, consectetur adipis elit
        </div>
        <div data-aos="fade-up" class="solutionss_div-39">
          <div data-aos="fade-up" class="solutionss_div-40">
            <div class="solutionss_column-4">
              <div class="solutionss_div-41">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/4619a74d5f9e03c3a801fd47f89d1c6c9134fc5281249842a2eced489cf8930a?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-9"
                />
                <div class="solutionss_div-42">Support</div>
                <div class="solutionss_div-43">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.
                </div>
              </div>
            </div>
            <div class="solutionss_column-5">
              <div class="solutionss_div-44">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/d4d766f208712a2283c7fe14d659dcd0bdbb06770bd832c92010302a4b52b455?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-10"
                />
                <div class="solutionss_div-45">Sales</div>
                <div class="solutionss_div-46">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.
                </div>
              </div>
            </div>
            <div class="solutionss_column-6">
              <div class="solutionss_div-47">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/7a71297990b498fb8e690dc2c73d0e8cdd3ceb5c438eaa3cb6605480f7c486ba?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-11"
                />
                <div class="solutionss_div-48">Onboarding</div>
                <div class="solutionss_div-49">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="solutionss_div-50">
          <div data-aos="fade-up" class="solutionss_div-51">
            <div class="solutionss_column-7">
              <div class="solutionss_div-52">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/4edad43a5f662ab29266d024f2a1aeff9bd062c706bddf1fe65826c7d0596386?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-12"
                />
                <div class="solutionss_div-53">Product</div>
                <div class="solutionss_div-54">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.
                </div>
              </div>
            </div>
            <div class="solutionss_column-8">
              <div class="solutionss_div-55">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/015072809002ebaee72c6f530bbda36ae11450d4d7d26bdf34ba9fd3a12711fc?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-13"
                />
                <div class="solutionss_div-56">Quality</div>
                <div class="solutionss_div-57">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.
                </div>
              </div>
            </div>
            <div class="solutionss_column-9">
              <div class="solutionss_div-58">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f232f065b929336aaffbc45a250a6c117712a4d1311dd048f67863e3717b546?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-14"
                />
                <div class="solutionss_div-59">Result</div>
                <div class="solutionss_div-60">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="solutionss_div-61">
      <div class="solutionss_div-62">
        <div class="solutionss_div-63">
          <div data-aos="fade-left" class="solutionss_column-10">
            <div  class="solutionss_div-64">
              <div class="solutionss_div-65">
                <div class="solutionss_div-66"></div>
                <div class="solutionss_div-67">
                  <div class="solutionss_div-68">Rareblocks</div>
                  <div class="solutionss_div-69">www.rareblocks.xyz</div>
                </div>
              </div>
              <div class="solutionss_div-70">
                <div class="solutionss_div-71">Insight</div>
                <div class="solutionss_div-72">You have made $39,492 this week!</div>
              </div>
              <div class="solutionss_div-73">
                <div class="solutionss_div-74">
                  <div class="solutionss_div-75">Sale Report</div>
                  <div class="solutionss_div-76">Mar 21-Apr 20</div>
                </div>
                <div class="solutionss_div-77">
                  <div class="solutionss_div-78"></div>
                  <div class="solutionss_div-79"></div>
                  <div class="solutionss_div-80"></div>
                  <div class="solutionss_div-81"></div>
                  <div class="solutionss_div-82"></div>
                  <div class="solutionss_div-83"></div>
                  <div class="solutionss_div-84"></div>
                  <div class="solutionss_div-85"></div>
                  <div class="solutionss_div-86"></div>
                  <div class="solutionss_div-87"></div>
                </div>
              </div>
            </div>
          </div>
          <div data-aos="fade-right" class="solutionss_column-11">
            <div class="solutionss_div-88">
              <div class="solutionss_div-89">
                Managing & selling digital products never been so easy!
              </div>
              <div class="solutionss_div-90">
                Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim nec,
                proin faucibus nibh et sagittis a. Lacinia purus ac amet
                pellentesque aliquam enim.
              </div>
              <div class="solutionss_div-91">
                <div class="solutionss_div-92">Make your first sale</div>
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9802a783edfe06aa375811212e22e24c90c28f2377b7012425fe7aae7cc80b0?apiKey=7103b0229adb49a88a34b61c64810a65&"
                  class="solutionss_img-15"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="solutionss_div-93">
      <div class="solutionss_div-94">
        <div class="solutionss_div-95">
          <div data-aos="fade-left" class="solutionss_column-12">
            <div class="solutionss_div-96">
              <div class="solutionss_div-97">
                Managing & selling digital products never been so easy!
              </div>
              <div class="solutionss_div-98">
                <div class="solutionss_div-99">
                  Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim
                  nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet
                  pellentesque aliquam enim.
                </div>
                <div class="solutionss_div-100">
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/ac7baf9c77e3863e168f4b5f35f78b30682c413ca8b850309a502e8a86b6fc3c?apiKey=7103b0229adb49a88a34b61c64810a65&"
                    class="solutionss_img-16"
                  />
                  <div class="solutionss_div-101">Make your first sale</div>
                </div>
              </div>
            </div>
          </div>
          <div class="solutionss_column-13">
            <div data-aos="fade-right" class="solutionss_div-102">
              <div class="solutionss_div-103">
                <div class="solutionss_div-104">
                  <div class="solutionss_div-105">Rareblocks</div>
                  <div class="solutionss_div-106">www.rareblocks.xyz</div>
                </div>
                <div class="solutionss_div-107">R</div>
              </div>
              <div class="solutionss_div-108">
                <div class="solutionss_div-109">Insight</div>
                <div class="solutionss_div-110">You have made $39,492 this week!</div>
              </div>
              <div class="solutionss_div-111">
                <div class="solutionss_div-112">
                  <div class="solutionss_div-113">Mar 21-Apr 20</div>
                  <div class="solutionss_div-114">Sale Report</div>
                </div>
                <div class="solutionss_div-115">
                  <div class="solutionss_div-116"></div>
                  <div class="solutionss_div-117"></div>
                  <div class="solutionss_div-118"></div>
                  <div class="solutionss_div-119"></div>
                  <div class="solutionss_div-120"></div>
                  <div class="solutionss_div-121"></div>
                  <div class="solutionss_div-122"></div>
                  <div class="solutionss_div-123"></div>
                  <div class="solutionss_div-124"></div>
                  <div class="solutionss_div-125"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
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

    
    <script src="./assets/script/handlescroll.js"></script>
    <!-- for Navba/assetsr Part -->
    <script src="./assets/script/cptcha.js"></script>
    <!-- for captcha Part -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="./assets/script/solution.js"></script>
</body>

</html>