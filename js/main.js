
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


$(document).ready(function () {
  $('.owl-banner').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: false,
    dots: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
  })
  $('.owl-test-class').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    margin: 20,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      }
    }
  })
  $('.owl-university-class').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    margin: 25,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 6,
      }
    }
  })
  
  
  $(".owl-service").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    margin: 20,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      }
    }
  })
});

const parentDiv = document.querySelector('.tab-wrapper');
const buttons = parentDiv.querySelectorAll('  button');
const numberOfButtons = buttons.length;
console.log(numberOfButtons);
parentDiv.classList.add(`navlink${numberOfButtons}`);

