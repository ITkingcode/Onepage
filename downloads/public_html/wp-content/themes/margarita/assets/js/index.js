$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 100){
      $("body").addClass("sticky-header");
    }else{
      $("body").removeClass("sticky-header");
    }//if-else
  });//win func.
});//ready func.

// Scroll spy and smooth scroll

$(function() {
  
  var link = $('#navbar a.dot');
  
  // Move to specific section when click on menu link
  link.on('click', function(e) {
    var target = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 600);
    $(this).addClass('active');
    e.preventDefault();
  });
  
  // Run the scrNav when scroll
  $(window).on('scroll', function(){
    scrNav();
  });
  
  // scrNav function 
  // Change active dot according to the active section in the window
  function scrNav() {
    var sTop = $(window).scrollTop();
    $('section').each(function() {
      var id = $(this).attr('id'),
          offset = $(this).offset().top-1,
          height = $(this).height();
      if(sTop >= offset && sTop < offset + height) {
        link.removeClass('active');
        $('#navbar').find('[data-scroll="' + id + '"]').addClass('active');
      }
    });
  }
  scrNav();
});






// Open sidebar when product added

jQuery(document).ready(function($){
    $('body').on( 'added_to_cart', function(){
       $('body').addClass('sidebar-active');
    });
});


// Open and close sidebar and overlay

$(window).load( function() {

  $(".ninja-btn, .slider-panel-overlay, .slider-panel li a").click( function() {
    $("body").toggleClass("sidebar-active");
  }); 

});




//Nav bar Dropdowns
var dropdown = ".dropdown";

$(".dropdown-container > li").click(function() { //If you want the Dropdowns on hover, just change the ".click" method to ".hover". 
    //Note: I DO NOT recommend you use these dropdowns on .hover, this practice has serious usability issues. Leave them on .click and your users will Thank You forever.
    //Hide any other Dropdwn that"s visible
    $(this).siblings().find(dropdown).slideUp("fast");
    //Hide Cart Dropdwn
    $(this).parents(".dropdown-container").siblings().find(dropdown).slideUp("fast"); 
    //Toggle class .active
    $(this).toggleClass("active");
    //Remove class .active from any other <li>
    $(this).parents().find(".active").not(this).removeClass("active");
    //Slide up/down the actual Dropdwn		
    $(this).find(dropdown).stop(true, true).slideToggle("fast");
    //Deactivate the "focus" on the nav item when clicked
    $(this).children("a").blur();
});

//Close button/link
$(".close").click(function() {
    $(this).parents(".dropdown").slideUp("fast", function() {
        //Remove the class .active from parent element
        $(this).parents().find(".active").removeClass("active");
    });
});

//Collapse Dropdowns when clicking anywhere else on the page	
var mouse_is_inside = false;
//Select the parent element of the Dropdwn
$(".dropdown-container li").hover(
    function() {
        mouse_is_inside = true;
    },
    function() {
        mouse_is_inside = false;
    });

$("html").mouseup(function(e) {
    e.stopPropagation();
    if (!mouse_is_inside)
        $(".dropdown").slideUp("fast", function() {
            $(".active").removeClass("active");
        });
});

//Avoid collapsing the Dropdowns when clicking inside of them
$(".dropdown").click(function(e) {
    e.stopPropagation();
});

//Close any open Dropdowns when pressing the ESC key
var elem = $(".dropdown");
$(document).on("keydown", function(e) {
    if (e.keyCode === 27) {
        $(elem).slideUp("fast");
        e.stopPropagation();
    }
});

/*NOT NEEDED FOR THE DEMO*/

/*Stop the default action of dummy links using "#" so CodePen doesn"t freak out*/

//jQuery version:
$(".dropdown-container > li a").click(function(e) {
});

//Plain JavaScript verison:
/*var anchors = document.getElementsByClassName("a");
 for(i=0, len=anchors.length; i<len; i++){
     anchors[i].addEventListener("click", function(e){e.preventDefault();});
 }*/

//Add a title to the links that open in a new tab/window
$("a[target='_blank']").attr({
    title: "Opens in a new tab/window"
}).addClass("new-window");