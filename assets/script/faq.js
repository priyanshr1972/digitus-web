$(window).on("scroll", function () {
    AOS.init();
});


$(document).ready(function () {
    $(".FAQAnswers").hide();
    $(".TAXFAQ").hide();
    $(".1stQ .FAQAnswers").show();
    $(".1stQ .iconarrow").addClass("open");
    $(".1stQ .iccrxx").addClass("open");
    $(".t1stQ .FAQAnswers").show();
    $(".t1stQ .iconarrow").addClass("open");
    $(".t1stQ .iccrxx").addClass("open");
    
    $(".switchContentContainer, .switchContentContainer2nd").hide();
    $(".switchContentContainer").show();
    $(".secondCircleDesc2nd").hide();
    $(".secondCircleDesc2nd2nd").hide();
    $(".iconarrow").removeClass("open");
    $(".iccrxx").removeClass("open");
    
    $(".queshead").click(function () {
        $(".FAQAnswers").hide();
        $(".iconarrow").removeClass("open");
        $(".iccrxx").removeClass("open");
        $(this).siblings(".FAQAnswers").show();
        $(this).find(".iconarrow").addClass("open");
        $(this).find(".iccrxx").addClass("open");
    });

    $(".edibar").click(function () {

        if (!$(this).find("hr").hasClass("active")) {
            $(".FAQAnswers").hide();
            $(".EDIFAQ").show();
            $(".TAXFAQ").hide();
            $(".1stQ .FAQAnswers").show();
            $(".1stQ .iconarrow").addClass("open");
            $(".1stQ .iccrxx").addClass("open");
            $("hr").toggleClass("active");
        }
    });

    $(".taxbar").click(function () {
        if (!$(this).find("hr").hasClass("active")) {
            $(".FAQAnswers").hide();
            $(".TAXFAQ").show();
            $(".EDIFAQ").hide();
            $(".t1stQ .FAQAnswers").show();
            $(".t1stQ .iconarrow").addClass("open");
            $(".t1stQ .iccrxx").addClass("open");
            $("hr").toggleClass("active");
        }

    });

    

    $(".adminswitch").click(function () {
        $(".switchContentContainer, .switchContentContainer2nd").hide();
        $(".switchContentContainer2nd").show();
    });

    $(".directswitch").click(function () 
    {
        $(".switchContentContainer, .switchContentContainer2nd").hide();
        $(".switchContentContainer").show();

    });



    $(".secDescHeader2nd").click(function () 
    {
        $(".iconarrow").removeClass("open");
        $(".iccrxx").removeClass("open");
        $(".secondCircleDesc2nd2nd").hide();
        $(this).siblings(".secondCircleDesc2nd2nd").show();
        $(this).find(".iconarrow").addClass("open");
        $(this).find(".iccrxx").addClass("open");
    });

    $(".issuesnew").click(function () 
    {
        $(".iconarrow").removeClass("open");
        $(".iccrxx").removeClass("open");
        $(".secondCircleDesc2nd").hide();
        $(this).siblings(".secondCircleDesc2nd").show();
        $(this).find(".iconarrow").addClass("open");
        $(this).find(".iccrxx").addClass("open");
    });
    
});