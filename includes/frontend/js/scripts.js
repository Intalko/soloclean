/*================
 Template Name: ProLex Product Landing Page Template
 Description: ProLex is app and product landing page template.
 Version: 1.0
 Author: https://themeforest.net/user/themetags
=======================*/

// TABLE OF CONTENTS
// 1. fixed navbar
// 2. page scrolling feature - requires jQuery Easing plugin
// 3. closes the responsive menu on menu item click
// 4. magnify popup video
// 5. client testimonial slider
// 6. Screenshots slider
// 7. custom counter js with scrolling
// 8. client-testimonial one item carousel
// 9. our clients logo carousel
// 10. our clients logo carousel
// 11. wow js


jQuery(function ($) {
  // global variables
  var interval = null;
  var isFirstTime = true;

  'use strict';
  // 1. fixed navbar
  $(window).on('scroll', function () {
    // checks if window is scrolled more than 500px, adds/removes solid class
    if ($(this).scrollTop() > 60) {
      $('.navbar').addClass('affix');
    } else {
      $('.navbar').removeClass('affix');
    }
  });


  // 2. page scrolling feature - requires jQuery Easing plugin
  $(function () {
    $(document).on('click', 'a.page-scroll', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 60
      }, 900, 'easeInOutExpo');
      event.preventDefault();
    });
  });

  // 3. closes the responsive menu on menu item click
  $(".navbar-nav li a").on("click", function (event) {
    if (!$(this).parent().hasClass('dropdown'))
      $(".navbar-collapse").collapse('hide');
  });

  //navbar active class
  $('.navbar-nav .nav-link').on("click", function (event) {
    $('.navbar-nav .nav-link').removeClass('active');
    $(this).addClass('active');
  })

  // 4. magnify popup video
  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // 5. client testimonial slider
  $('.client-testimonial').owlCarousel({
    loop: false,
    margin: 30,
    items: 1,
    nav: true,
    dots: false,
    responsiveClass: true,
    autoplay: false,
    autoplayHoverPause: true,
    lazyLoad: true,
  })

  // 6. Screenshots slider
  $('.product-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      991: {
        items: 3
      },
      1200: {
        items: 8
      },
      1920: {
        items: 8
      }
    }
  });

  //Taken from Owl Carousel so we calculate width the same way
  var viewport = function() {
    var width;
    if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
      width = $(carouselOptions.responsiveBaseElement).width();
    } else if (window.innerWidth) {
      width = window.innerWidth;
    } else if (document.documentElement && document.documentElement.clientWidth) {
      width = document.documentElement.clientWidth;
    } else {
      console.warn('Can not detect viewport width.');
    }
    return width;
  };

  var severalRows = false;
  var orderedBreakpoints = [];
  for (var breakpoint in carouselOptions.responsive) {
    if (carouselOptions.responsive[breakpoint].rows > 1) {
      severalRows = true;
    }
    orderedBreakpoints.push(parseInt(breakpoint));
  }
  
  //Custom logic is active if carousel is set up to have more than one row for some given window width
  if (severalRows) {
    orderedBreakpoints.sort(function (a, b) {
      return b - a;
    });
    var slides = el.find('[data-slide-index]');
    var slidesNb = slides.length;
    if (slidesNb > 0) {
      var rowsNb;
      var previousRowsNb = undefined;
      var colsNb;
      var previousColsNb = undefined;

      //Calculates number of rows and cols based on current window width
      var updateRowsColsNb = function () {
        var width =  viewport();
        for (var i = 0; i < orderedBreakpoints.length; i++) {
          var breakpoint = orderedBreakpoints[i];
          if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
            var breakpointSettings = carouselOptions.responsive['' + breakpoint];
            rowsNb = breakpointSettings.rows;
            colsNb = breakpointSettings.items;
            break;
          }
        }
      };

      var updateCarousel = function () {
        updateRowsColsNb();

        //Carousel is recalculated if and only if a change in number of columns/rows is requested
        if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
          var reInit = false;
          if (carousel) {
            //Destroy existing carousel if any, and set html markup back to its initial state
            carousel.trigger('destroy.owl.carousel');
            carousel = undefined;
            slides = el.find('[data-slide-index]').detach().appendTo(el);
            el.find('.fake-col-wrapper').remove();
            reInit = true;
          }


          //This is the only real 'smart' part of the algorithm

          //First calculate the number of needed columns for the whole carousel
          var perPage = rowsNb * colsNb;
          var pageIndex = Math.floor(slidesNb / perPage);
          var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));

          //Then populate with needed html markup
          var count = 0;
          for (var i = 0; i < fakeColsNb; i++) {
            //For each column, create a new wrapper div
            var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
            for (var j = 0; j < rowsNb; j++) {
              //For each row in said column, calculate which slide should be present
              var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
              if (index < slidesNb) {
                //If said slide exists, move it under wrapper div
                slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
              }
              count++;
            }
          }
          //end of 'smart' part

          previousRowsNb = rowsNb;
          previousColsNb = colsNb;

          if (reInit) {
            //re-init carousel with new markup
            carousel = el.owlCarousel(carouselOptions);
          }
        }
      };

      //Trigger possible update when window size changes
      $(window).on('resize', updateCarousel);

      //We need to execute the algorithm once before first init in any case
      updateCarousel();
    }
  }

  //init
  carousel = el.owlCarousel(carouselOptions);


  // 7. custom counter js with scrolling
  $(function () {
    var countSelector = $('.single-counter > span, .single-card > h3');
    if (countSelector.length) {
      initCounter(countSelector);
    }
  });

  function initCounter(countSelector) {
    var startingTop = countSelector.offset().top - window.innerHeight;
    if (startingTop > 0) {
      $(window).on('scroll', function () {
        if (isFirstTime && $(window).scrollTop() > startingTop) {
          startCounting();
          isFirstTime = false;
        }
      });
    } else {
      startCounting();
    }
  }

  /**
   * Get the increment value
   * @param value
   * @returns {number}
   */
  function incrementValue(value) {
    var incVal = 0;
    if (Math.ceil(value / 2) <= 5) { // upto 10
      incVal = 1;
    }
    else if (Math.ceil(value / 10) <= 10) { // up to 100
      incVal = 10;
    }
    else if (Math.ceil(value / 100) <= 10) { // up to 1000
      incVal = 25;
    }
    else if (Math.ceil(value / 100) <= 100) { // up to 10000
      incVal = 50;
    }
    else if (Math.ceil(value / 1000) <= 100) { // up to 100000
      incVal = 150;
    }
    else {
      incVal = 500;
    }
    return incVal;
  }

  /**
   * To start count
   * @param counters all selectors
   * @param start int
   * @param value int
   * @param id int
   */
  function count(counters, start, value, id) {
    var localStart = start;
    var inc = incrementValue(value);
    interval = setInterval(function () {
      if (localStart < value) {
        localStart = localStart + inc;
        counters[id].innerHTML = localStart;
      }
    }, 40);
  }

  /**
   * Start the count
   */
  function startCounting() {
    var counters = $(".single-counter > span, .single-card > h3");
    var countersQuantity = counters.length;
    var counter = [];

    // get al counts from HTML count
    for (var i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
    }

    // calling all count function
    for (var j = 0; j < countersQuantity; j++) {
      count(counters, 0, counter[j], j);
    }
  }

  // 8. client-testimonial one item carousel
  $('.client-testimonial-1').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    lazyLoad: true,
    items: 1,
  });

  // 9. our clients logo carousel
  $('.clients-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 15,
    dots: true,
    slideTransition: 'linear',
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    autoplaySpeed: 4500,
    responsive: {
      0: {
        items: 2
      },
      500: {
        items: 3
      },
      600: {
        items: 4
      },
      800: {
        items: 5
      },
      1200: {
        items: 6
      }

    }
  })

  // 10. our clients logo carousel
  $(document).ready(function () {
    $(".player").YTPlayer();
  });


  // 11. wow js
  function wowAnimation() {
    new WOW({
      offset: 100,
      mobile: true
    }).init()
  }

  wowAnimation()

}); // JQuery end