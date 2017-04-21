jQuery(document).ready(function($) {

  var $hash = $(location).attr('hash');

  if ( $hash.indexOf("#") >= 0 ) {
    var $target = $($hash),
      $offset = 260;

      if ($(window).width() < 768) {
        $offset = 0;
      }

      var targetOffset = $target.offset().top - $offset;
  
      $('html,body').animate({scrollTop: targetOffset}, 1500);
      
  }

  // Smooth scroll
  $('a[href*="#"]:not(#to-top)').click(function() {

      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
      && location.hostname == this.hostname) {
          var $target = $(this.hash);
          
          $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
              $offset = 80;

              if ($(window).width() < 768) {
                $offset = 0;
              }

              var targetOffset = $target.offset().top - $offset;
              
              $('html,body').animate({scrollTop: targetOffset}, 1500);
              return false;
          }
      }
  });

  //  Back to Top
  var to_top = $('#to-top');
  to_top.addClass('transparent');

  $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
          to_top.removeClass('transparent');
      } else {
          to_top.addClass('transparent');
      }
  });

  to_top.click(function() {
      $('body, html').animate({
          scrollTop: 0
      }, 1000);
      return false;
  });

  // Sticky nav
  $(window).scroll(function() {
      var stickyHeader = $('.ipacarai-navbar'),
      offset  = $(window).scrollTop(); 
      
      if( offset > 0 ) {
          stickyHeader.addClass('sticky');
      } else {
          stickyHeader.removeClass('sticky');
      }
  });

  var $products = $('.products-listing').isotope({
    // options
    itemSelector: '.product-listing',
    layoutMode: 'masonry'
  });

  var $banners = $('.featured-banners-container').isotope({
    // options
    itemSelector: '.featured-product-banner',
    layoutMode: 'vertical',
    filter: '.first'
  });

  $('.product-categories').on( 'click', 'a', function(e) {
    e.preventDefault();

    $('.product-categories .active').removeClass('active');

    var $that = $(this),
    filterValue = $that.attr('data-filter');

    $that.addClass('active');

    $products.isotope({ filter: filterValue });

    if (filterValue == '*') {
      $banners.isotope({ filter: '.first' });
    } else {
      $banners.isotope({ filter: filterValue });
    }
  });

});
