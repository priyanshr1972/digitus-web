<?php include "./dashboard/z_db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | Digitus</title>
  <link rel="stylesheet" href="./assets/css/blogpage.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="./assets/css/secondsection.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/footer_2.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  
  <script src="https://kit.fontawesome.com/81831682c9.js" crossorigin="anonymous"></script>
</head>
<body  id="body" onscroll="handleScroll()">
<!-- header section and first container start -->
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
<!-- header section and first container end -->

<!-- blog area start -->
  <div>
    <!-- background image -->
    <div class="background-image">
      <!-- blog page intro start -->
      <p class="para1 para-section">

        The latest electronic invoicing calendar: the essential things to remember
      </p>

     <p class="para2 para-section">  Digitbus news, Electronic invoicing
      <br>
      <b class="text3" style="text-shadow: 1px 2px 2px rgba(0,0,0,0.81);">
          The latest electronic invoicing calendar: the essential things to remember
      </b>
      <br><br>
       27/10/2023
      </p>
      <!-- blog page intro end -->
    </div>

    <!-- detail section start -->
    <div class="main-section">
      <!-- first part start -->
      <div class="first-section">
        <button class="previous-page"><b class="arrow-back">&lt;</b> Return to previous page</button>
        <p class="para-section-down">
          The reform of <b>electronic invoicing</b> , far from being a simple trend, 
          is emerging as an upcoming reality for companies. France, keen to 
          offer a solid and honest <u>“Y” model</u> , recently reviewed the timetable 
          for implementing its <b>tax dematerialization</b> reform . This change aims 
          to ensure a <b>smooth</b> transition for businesses while strengthening the 
          maturity of operating entities.
          <br>
          <br>
          On July 28, an official message from the <b>General Directorate of Public 
          Finance</b> indicated the delay in the general implementation of electronic 
          invoicing, without specifying new deadlines.
          <br>
          <br>
          Now the dates have been set (although they are still subject to explicit validation).
        </p>
        <h2 class="page-semi-title">
          A brief reminder of the history of the electronic invoicing reform
        </h2>
        <p class="para-section-down">
          In 2021, the French government launched with Ordinance <u>No. 2021-1190 of September 15, 2021</u> 
          the ambitious project to modernize invoicing between professionals. Faced with a rapidly 
          changing business world, the idea was to bring <b>clarity</b> and <b>productivity to B2B invoicing</b> 
          processes while combating fraud. Thanks to close collaboration between the administration 
          and various stakeholders, the system has been continually refined to better respond to 
          realities on the ground.
        </p>
        <h2 class="page-semi-title">
          Postponement of the initial schedule and reasons
        </h2>
        <p class="para-section-down">
          The complexity and issues associated with such a change led to a major decision: to postpone 
          (once again) the date of entry into force. After numerous consultations with professional 
          federations and companies, it was deemed essential to guarantee a smooth transition by read 
          justing the <b>timetable</b> of obligations concerning <b>E-Invoicing</b>.
          <br>
          <br>
          The reasons for the delay in reform are mainly due to a lack of information and preparation 
          of societies.
          <br>
          <br>
          There was a misestimation of the consequences of the reform on the IT system of <b>the AIFE</b> 
          (State Financial IT Agency).
          <br>
          It is also essential to ensure that the <b>PPF</b> ( <b>Public Billing Portal</b> ) can provide the required 
          protection in the face of increased operational activities.
          <br>
          <b>Companies present heterogeneous</b> levels of progress regarding the adoption of the reform: 
          a quarter of large companies reported that they would not be operational within the timeframe 
          initially planned.
          <br>
          In addition, the information intended for SMEs (numbering 146,000 in France) is considered 
          insufficient.
        </p>
        <h2 class="page-semi-title">
          The new detailed electronic invoicing calendar
        </h2>
        
        <p class="para-section-down">
          <i>Update in October 2023 of the deadlines for Electronic Invoicing obligations</i><br><br>
          Faced with the scale of the reform, the government, after consultation, therefore chose 
          to postpone the date of entry into force of electronic invoicing initially planned for July 1, <b>2024</b> .
          <br>
          <br>
          As part of the finance bill for 2024, amendment No. I-5395  tabled on October 17, 2023 
          by the government postpones the deadlines for electronic invoicing between companies. 
          The E-invoicing obligations will still apply gradually but this time from  September 1, 2026 .
          <br>
          <br>
          <b>• September 1, 2026</b> for Large Businesses (initially planned for July 1, 2024).
          <br>
          <b>• September 1, 2026</b> for ETIs (mid-sized companies), while they were initially targeted for 
          January 1, 2025.
          <br>
          <b>• September 1, 2027</b> for SMEs and micro-enterprises, delayed by one year compared to the initial
           date of January 1, 2026.
        </p>
        <h2 class="page-semi-title">
          TO REMEMBER :
        </h2>
        <p class="para-section-diff">
          <b>As of 01/09/2026</b>  :
          <br><br>
          Obligation to receive  electronic invoices for all companies regardless of their size: <br>
          <b> Large Companies, ETIs, SMEs, microenterprises</b> .
          <br>
          <b>Obligation to issue </b> electronic invoices for Large Enterprises (<b>GE</b> ) and <br>
          Intermediate-Sized Enterprises ( <b>ETI</b> ).
          <br>
          <b>From 01/09/2027 </b>: obligation to issue electronic invoices for Small and <br>
          Medium Enterprises (<b> SMEs </b>) and microenterprises.
        </p>
        <p class="para-section-down">
          <i>However, it is essential to note that these dates remain subject to the final adoption of the 
            law.</i>
        </p>
        <h2 class="page-semi-title">
          The principle of electronic invoicing
        </h2>
        <p class="para-section-down">
          The essence of this model is to transform paper invoices into electronic invoices through a 
          process that complies with the <b>requirements of legal and tax regulations</b> . By this we mean 
          not the “paper” invoice which would have simply been converted into an ordinary <b>PDF format 
          and sent by email, but rather a file which brings together a set of data in a structured 
          electronic format</b>. Last but not least, <b>invoices will no longer be exchanged directly 
          between companies</b>.

          <br>
          <i>Electronic invoicing model France</i>
          <br><br>
          At the heart of the Billing scheme will be the Administration's <b>Public Billing Platform (PPF)</b>. 
          Companies, failing to be satisfied with the latter very basic, will have to resort to 
          <b>Dematerialization Operators</b> (OD) or <b>Dematerialization Partner Platforms</b> (PDP) in order to 
          benefit from functionalities with higher added value.
          <br><br>
          For more details, see our <u>Electronic invoicing page</u> .
          <br><br>
          <b><u>Electronic invoicing</u></b> will become the exclusive means of invoicing for all companies in France. 
          This change represents a major challenge for <b>Administrative and Financial</b> Directors who must 
          prepare their company for this transition.
        </p>
        <h2 class="page-semi-title">
          These new deadlines concern all mandatory data flows to be transmitted to the Tax Administration.
        </h2>
        <p class="para-section-down">
        <b>•  E-INVOICING</b>  : transmission of invoice data with all mandatory data defined by the reform, in 
          transmission and reception.
          <br><br>
        <b>•  E-REPORTING</b> : transmission of transaction data not covered by e-invoicing in the case of 
          exchanges involving a partner established outside France (B2B outside domestic) or a non-taxable 
          person (B2C).
          <br><br>
        <b>•  LIFE CYCLE </b>: transmission of invoice processing statuses, deposited (issuer), 
          rejected (receiver), refused (receiver), collected (issuer).
        </p>
        <h2 class="page-semi-title">
          How to prepare for the electronic invoicing reform?
        </h2>
        <div class="content-grid">
          <div>
            <p class="para-section-down">
              It is imperative for businesses to know their obligations . The use of appropriate 
              dematerialization platforms and the addition of new mandatory information on invoices 
              are key steps in addition to the security and conservation of these electronic invoices. 
              But beyond these imperatives, it is crucial to fully understand the need to anticipate the 
              reform for your company and to map the impact on business processes that this will cause.
              <br><br>
              In this sense, our experts on the subject at Digitbus offer you comprehensive support in 
              order to make this shift more fluid.
            </p>
          </div>
        </div>
        <h3><u>Find our complete guide to Electronic Invoicing here.</u></h3>
        <div>
          <div>
            <p class="para-section-down">
              <i>
                “The expression of this latest calendar is an important announcement for businesses. It is 
                essential to perceive this “lag” as an opportunity to intensify preparations, rather than 
                “additional delay” leading to postponement of consideration.
              </i>
            </p>
          </div>
          <div></div>
        </div>
        <p class="para-section-down">
          <i>
            The gain in visibility conferred by these new dates, in addition to ensuring consistency with 
            realities on the ground, once again allows us to affirm that Electronic Invoicing is a concrete 
            reality whose importance is no longer subjective. Ignoring this development is simply no longer 
            an option. On the contrary, it requires serious anticipation on the part of companies, especially 
            when we know that the adoption of this new digital practice offers above all enormous advantages: 
            accuracy of information, optimization, speed of processing, increased transparency and better 
            management of financial transactions. All of this constitutes an obvious lever for improvement 
            for companies. ".
            <br><br>
            Eser SARIKAN, CEO d'Digitus
          </i>
        </p>
        <div>
          <div class="para-section-diff">
            Anticipate <b>electronic invoicing</b> with Digitbus! The transition to E-Invoicing is a central issue. 
            For an adaptation with complete peace of mind, rely on a trusted partner who adapts to your 
            specific needs. Our SaaS solution, <b>Hubtimize® E-invoicing</b> , combines compliance, simplicity 
            and modernity. It integrates easily with your systems, providing complete and seamless automation. 
            With Hubtimize®, benefit from personalized support, from audit to maintenance. <u>Discover Hubtimize® 
            E-invoicing now!</u>
          </div>
          <div class="button-contact">
            <button class="button-contact-expert">Contact an expert</button>
          </div>


        </div>
      </div>
      <!-- first part end -->

      <!-- second part start -->
      <div class="second-section">
        <div>
          <div class="item-categores-title">ITEM CATEGORIES</div>
          <div class="item-categores-list">Digitbus News</div>
          <hr>
          <div class="item-categores-list">Electronic invoicing</div>
          <hr>
          <div class="item-categores-list">Guide</div>
          <hr>
          <div class="item-categores-list">The EDI</div>
          <hr>
        </div>

        <div class="button-vertical">
          <button class="button-design">DIGITIZE ALL YOUR B2B FLOWS</button>
          <br>
          <button class="button-design">DEMATERIALIZE YOUR INVOICES</button>
        </div>
      </div>
      <!-- second part end -->
    </div>
    <!-- detail section end -->

  <!-- newsletter start -->
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
  <!-- newsletter end -->

  </div>
<!-- blog area end -->

<!-- consumer detail start -->
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
<!-- consumer detail end -->

<!-- footer start -->
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
<!-- footer end -->

  <script src="./assets/script/cptcha.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./assets/script/faq.js"></script>

  <script src="./assets/script/handlescroll.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>