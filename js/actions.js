( function($) {

  console.log("actions work!");
  var navbar = $(".side-nav")

  $('.navbar-toggle').click(function(){
    if(navbar.hasClass("open")) {

      navbar.removeClass("open")
      navbar.addClass("closed");

    } else if (navbar.hasClass("closed")) {

      navbar.removeClass("closed");
      navbar.addClass("open");

    }
  })

  $(".fa-arrow-down").click(function(){

    scrollToFirstSection($);

  })

  $(window).scroll(function() {
    if(document.body.scrollTop === 5) {
      console.log('at the top');
      scrollToFirstSection($);

    } else {
      console.log("scrolltop", document.body.scrollTop)
    }
    });

}(jQuery))

function scrollToFirstSection($){
  var scrollPoint = $('#scroll-to-section').offset().top

    if ($(window).width() < 1000) {
      scrollPoint = scrollPoint -= 90
    }

    $('html, body').animate({
      scrollTop: scrollPoint
    }, 400)
}
