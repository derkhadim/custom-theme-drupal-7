
(function ($) {

  Drupal.behaviors.adie = {
    attach: function (context, settings) {
      
      //Init foundation
      $(document).foundation();

      
      //Slide Show news
      $("#owl-demo-2").owlCarousel({
 
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,
     
      });

      //Slider show partners
      $("#owl-demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 6,
          itemsMobile : [479,1],
          itemsDesktopSmall : [979,4],
          itemsDesktop : [1199,5],
     
      });

      // Slide Show
      $('.owl-next').html('<i class="icon icon-arrow-right2"></i>');
      $('.owl-prev').html('<i class="icon icon-arrow-left2"></i>');

      

    }
  };

})(jQuery);
