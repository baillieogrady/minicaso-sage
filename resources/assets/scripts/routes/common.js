import 'slick-carousel';
import '@fancyapps/fancybox';
import LazyLoad from 'vanilla-lazyload';
import AOS from 'aos';
// import InfiniteScroll from 'infinite-scroll';

export default {
  init() {
    // globals
    const $slider = $('.slider__slides'),
      $exploreButton = $('#explore'),
      $banner = $('.banner'),
      $banner_cross = $('.banner__cross');

    // JavaScript to be fired on all pages
    // hero
    $slider.slick({
      arrows: true,
      prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;"> <svg xmlns="http://www.w3.org/2000/svg" width="51.472" height="13.652" viewBox="0 0 51.472 13.652"><g transform="translate(-84.5 -267.793)"><path d="M128.439,268.6l6.119,6.119-6.119,6.119" transform="translate(0 -0.102)" fill="none" stroke="#0e1111" stroke-width="2"/><line x1="50" transform="translate(84.5 274.5)" fill="none" stroke="#0e1111" stroke-width="2"/></g></svg></button>',
      nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;"> <svg xmlns="http://www.w3.org/2000/svg" width="51.472" height="13.652" viewBox="0 0 51.472 13.652"><g transform="translate(-84.5 -267.793)"><path d="M128.439,268.6l6.119,6.119-6.119,6.119" transform="translate(0 -0.102)" fill="none" stroke="#0e1111" stroke-width="2"/><line x1="50" transform="translate(84.5 274.5)" fill="none" stroke="#0e1111" stroke-width="2"/></g></svg></button>',
      slidesToShow: 1,
      // appendArrows: $('.slider__nav'),
      mobileFirst: true,
      autoplay: true,
      autoplaySpeed: 4000,
      swipeToSlide: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            centerMode: true,
          },
        },
      ],
    });

    //banner
    $banner_cross.on('click', function () {
      $banner.slideUp();
    })

    // scrolling animations - AOS
    $(window).on('load', function () {
      AOS.init({
        duration: 1000,
        once: true,
        disable: 'mobile',
      });
    })

    // hero - scroll down button
    $exploreButton.on('click', scrollDown);

    function scrollDown(e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $('.domino').offset().top - 100 }, 'slow');
    }

    // product single page - increment quantity

    $(function () {

      var valueElement = $('#value');
      function incrementValue(e) {
        valueElement.text(Math.max(parseInt(valueElement.text()) + e.data.increment, 0));
        return false;
      }

      $('#plus').bind('click', { increment: 1 }, incrementValue);

      $('#minus').bind('click', { increment: -1 }, incrementValue);

    });

    // // shop - infinite scroll
    // if ($('.woocommerce-pagination').length) {
    //   (function () {
    //     var infScroll = new InfiniteScroll('.products.columns-4', {
    //       // defaults listed

    //       path: '.woocommerce-pagination .next',
    //       // REQUIRED. Determines the URL for the next page
    //       // Set to selector string to use the href of the next page's link
    //       // path: '.pagination__next'
    //       // Or set with {{#}} in place of the page number in the url
    //       // path: '/blog/page/{{#}}'
    //       // or set with function
    //       // path: function() {
    //       //   return return '/articles/P' + ( ( this.loadCount + 1 ) * 10 );
    //       // }

    //       append: '.products.columns-4 .product',
    //       // REQUIRED for appending content
    //       // Appends selected elements from loaded page to the container

    //       checkLastPage: true,
    //       // Checks if page has path selector element
    //       // Set to string if path is not set as selector string:
    //       //   checkLastPage: '.pagination__next'

    //       prefill: false,
    //       // Loads and appends pages on intialization until scroll requirement is met.

    //       responseType: 'document',
    //       // Sets the type of response returned by the page request.
    //       // Set to 'text' to return flat text for loading JSON.

    //       outlayer: false,
    //       // Integrates Masonry, Isotope or Packery
    //       // Appended items will be added to the layout

    //       scrollThreshold: 400,
    //       // Sets the distance between the viewport to scroll area
    //       // for scrollThreshold event to be triggered.

    //       elementScroll: false,
    //       // Sets scroller to an element for overflow element scrolling

    //       loadOnScroll: true,
    //       // Loads next page when scroll crosses over scrollThreshold

    //       history: true,
    //       // Changes the browser history and URL.
    //       // Set to 'push' to use history.pushState()
    //       //    to create new history entries for each page change.

    //       historyTitle: true,
    //       // Updates the window title. Requires history enabled.

    //       hideNav: undefined,
    //       // Hides navigation element

    //       status: '.page-load-status',
    //       // Displays status elements indicating state of page loading:
    //       // .infinite-scroll-request, .infinite-scroll-load, .infinite-scroll-error
    //       // status: '.page-load-status'

    //       button: undefined,
    //       // Enables a button to load pages on click
    //       // button: '.load-next-button'

    //       onInit: undefined,
    //       // called on initialization
    //       // useful for binding events on init
    //       // onInit: function() {
    //       //   this.on( 'append', function() {...})
    //       // }

    //       debug: false,
    //       // Logs events and state changes to the console.
    //     })
    //     return infScroll;
    //   })()
    // }

    // $('.products.columns-4').on('last.infiniteScroll', function () {
    //   $('.page-load-status').hide();
    //   // isLast = true;
    //   console.log('Last!');
    // });

    // lazyloading
    (function () {
      var lazyLoadInstance = new LazyLoad({
        elements_selector: '.lazy',
      });
      return lazyLoadInstance;
    })()


    // menu
    // background color - header
    var myNav = document.querySelector('header');
    window.onscroll = function () {
      'use strict';
      if (
        document.body.scrollTop >= 100 ||
        document.documentElement.scrollTop >= 100
      ) {
        myNav.classList.add('header--scroll');
      } else {
        myNav.classList.remove('header--scroll');
      }
    };
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
