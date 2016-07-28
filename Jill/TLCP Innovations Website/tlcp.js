/* jQuery for HOME webpage */

// Rotate animation for the logo on 1st container
$(document).ready(function(){   
    $(window).scroll(function(){
        if ($(window).scrollTop() > 100) {
            $("#scale").addClass("animate");
        };
    });
});
// End of rotate animation for the logo on 1st container  


// Go to first container   
$(document).ready(function(){
    $("#button-learn-more").click(function(){
        $("html, body").animate({scrollTop: $("#learnmore").offset().top}, "slow");
    });
});
// End of go to first container


// Go to top
$(document).ready(function(){
        $("#gototop").click(function(){
            $("html, body").animate({scrollTop:0}, "slow");
                return false;
        });
    });
// End of go to top


/* End of jQuery for HOME webpage */




/* jQuery for ABOUT page */


// Slide down animation for MEET OUR TEAM and MISSION/VISION
$(document).ready(function(){
    $(".text-over-banner, .meet-our-team").addClass("slidedown")
});
// End of Slide down animation for MEET OUR TEAM and MISSION/VISION


/* End of jQuery for ABOUT page */