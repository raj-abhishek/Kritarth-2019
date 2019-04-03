
 // N A V B A R

$(document).ready(function() {
      // Transition effect for navbar
      $(window).scroll(function() {
        // checks if window is scrolled more than 500px, adds/removes solid class
        if($(this).scrollTop() > 20) {
            $('.navbar').addClass('solid');
        } else {
            $('.navbar').removeClass('solid');
        }
      });
});




      //Go to top Button

      $(function() {
        // Amount of scrolling before button is shown/hidden.
        var offset = 100;

        // Fade duration
        var duration = 500;

        // Toggle view of button when scrolling.
        $(window).scroll(function() {
          if ($(this).scrollTop() > offset) {
            $('#c-go-top').fadeIn(duration);
          } else {
            $('#c-go-top').fadeOut(duration);
          }
        });

        // Scroll to top when button is clicked.
        $('#c-go-top').click(function(event) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: 0
          }, duration);
          return false;
        });
      });
//explore Button
