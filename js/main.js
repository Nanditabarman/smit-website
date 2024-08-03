
  AOS.init({
    duration: 1000,
  });
  $(document).ready(function () {
    $('body').scrollspy({
      target: '.navbar',
      offset: 50
    });

    $(window).scroll(function () {
      var $window = $(window),
        $body = $('body'),
        $panel = $('.panel');

      var scroll = $window.scrollTop() + ($window.height() / 3);
      $panel.each(function () {
        var $this = $(this);
        if ($this.offset().top <= scroll &&
          $this.offset().top + $this.height() > scroll) {
          $body.removeClass(function (index, css) {
            return (css.match(/(^|\s)color-\S+/g) || []).join('');
          });
          $body.addClass('color-' + $this.data('color'));

          // Highlight the corresponding dot in the scrollspy
          var sectionId = $this.attr('id');
          $('#scrollspy-dots a').removeClass('active');
          $('#scrollspy-dots a[href="#' + sectionId + '"]').addClass('active');
        }
      });
    }).scroll();
  });

  const burgerButton = document.getElementById("burger");
    const menus = document.getElementById("menus");
    const overlay = document.querySelector(".overlay");

    burgerButton.addEventListener("click", function () {
        burgerButton.classList.toggle("active");
        overlay.classList.toggle("active");
        menus.classList.toggle("active");

        // Toggle a class on the body to prevent scrolling
        document.body.classList.toggle("nav-open");
    });

    overlay.addEventListener("click", function () {
        burgerButton.classList.remove("active");
        overlay.classList.remove("active");
        menus.classList.remove("active");
        document.body.classList.remove("nav-open");
    });

// servvice 
$(document).ready(function() {
  // Function to handle scrolling and highlighting the active section
  function handleScroll() {
      var scrollPosition = $(document).scrollTop();

      // Iterate through each section and check if it's in the viewport
      $(".child-service").each(function() {
          var sectionID = $(this).attr("id");
          var sectionTop = $(this).offset().top - 50;
          var sectionBottom = sectionTop + $(this).outerHeight();

          // Add or remove the 'active' class based on scroll position
          if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
              $(".nav-item").removeClass("active-menu");
              $('.nav-item a[href="#' + sectionID + '"]').parent().addClass("active-menu");
          }
      });
  }

  // Call the handleScroll function on page load and scroll events
  handleScroll();
  $(window).scroll(handleScroll);
});



// .................... NAAC AND NBA LOGO ANIMATION START....................
let logoIndex = 0;
let pauseSlide = false;
let logoInterval = null;
const $logoElement = $(".logo");
let logoDelay =
    Number($logoElement.data("delay")) || 24000;
const $logoBadgeElement = $(".logo-badge");
const $logoNoStartElement = $(".logo.no-start");
const $slideItemsElement = $(".logo-text");
const $dataItems = Number($('.logo').data('items'));

if ($logoElement && $logoNoStartElement.length === 0)
  carousel();

if (
  $logoNoStartElement &&
  $logoNoStartElement.length === 1
) {
  $logoBadgeElement.each((index, element) => {
    $($logoBadgeElement[index]).css("display", "none");
  });
  document.getElementsByClassName(
    "logo-text"
  )[0].style.display = "block";
}

function showSlideItem(
$slideItemsElement,
 logoIndex,
 $,
 $logoBadgeElement
) {
  if (!$slideItemsElement) return;
  $slideItemsElement[logoIndex - 1].style.display = "block";
  $($logoBadgeElement[logoIndex - 1]).attr(
    "style",
    "background: #DDD6CC !important"
  );
}

function stopAutoLoad() {
  clearInterval(logoInterval);
  logoInterval = null;
}

function carousel() {
  let i;

  
  let slideItemsLength = $slideItemsElement.length;
  for (i = 0; i < slideItemsLength; i++) {
    $slideItemsElement[i].style.display = "none";
    $($logoBadgeElement[i]).attr(
      "style",
      "background: transparent !important"
    );
  }

  if (!$slideItemsElement) return;
  if (!pauseSlide) {
    if (logoIndex < $dataItems) {
      logoIndex++;
      showSlideItem($slideItemsElement, logoIndex, $, $logoBadgeElement);
    } else {
      logoIndex = 1;
      showSlideItem($slideItemsElement, logoIndex, $, $logoBadgeElement);
    }
  } else {
    showSlideItem($slideItemsElement, logoIndex, $, $logoBadgeElement);
  }
  if (logoInterval !== null) return;
  logoInterval = setInterval(carousel, logoDelay);
}

$logoBadgeElement.on("click", function(e) {
  e.preventDefault();

  const n = $(this).data("index");
  

  stopAutoLoad();

  logoIndex = n;

  $($slideItemsElement[n])
    .attr("style", "display: block !important")
    .siblings()
    .attr("style", "display: none !important");

  $(this)
    .attr("style", "background: #DDD6CC !important")
    .siblings()
    .attr("style", "background: #fff; !important");
});

$(".testimonials-control").on("mouseleave", function() {
  if (
    logoInterval == null &&
    $logoNoStartElement.length === 0
  ) {
    pauseSlide = false;
    carousel();
  }
});
// .................... NAAC AND NBA LOGO ANIMATION END....................



// .................... COUNT UP START....................
document.addEventListener('DOMContentLoaded', function () {
  // Array of count-up elements
  var countUpElements = document.querySelectorAll('.count-up');
  
  // Iterate through each count-up element
  countUpElements.forEach(function (countUpElement) {
      var initialCount = parseInt(countUpElement.getAttribute('data-count'));
      var currentCount = 0;

      function updateCount() {
          if (currentCount <= initialCount) {
              countUpElement.textContent = currentCount;
              currentCount++;
              setTimeout(updateCount, 50); // Update every 50 milliseconds
          }
      }

      var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                  // Restart count when the element becomes visible
                  currentCount = 10;
                  updateCount();
              }
          });
      }, { threshold: 0.5 }); // Adjust the threshold as needed

      // Start observing each count-up element
      observer.observe(countUpElement);
  });
});
// .................... COUNT UP END....................

// ....................STUDENT COUNT UP START....................
document.addEventListener('DOMContentLoaded', function () {
  // Array of count-up elements
  var countUpElements = document.querySelectorAll('.student-count-up');
  
  // Iterate through each count-up element
  countUpElements.forEach(function (countUpElement) {
      var initialCount = parseInt(countUpElement.getAttribute('data-count'));
      var currentCount = 0;

      function updateCount() {
          if (currentCount <= initialCount) {
              countUpElement.textContent = currentCount;
              currentCount++;
              setTimeout(updateCount, 5); // Update every 50 milliseconds
          }
      }

      var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                  // Restart count when the element becomes visible
                  currentCount = 2600;
                  updateCount();
              }
          });
      }, { threshold: 0.5 }); // Adjust the threshold as needed

      // Start observing each count-up element
      observer.observe(countUpElement);
  });
});
// .................... STUDENT COUNT UP END....................




//..................... TESTIMONIAL SLIDER START.......................
$(document).ready(function() {
  $("#testimonial-slider").owlCarousel({
      items: 3,
      itemsDesktop: [1000, 1],
      itemsDesktopSmall: [980, 1],
      itemsTablet: [768, 2],
      itemsMobile: [650, 1],
      pagination: true,
      navigation: false,
      slideSpeed: 1000,
      autoPlay: true
  });
});
//..................... TESTIMONIAL SLIDER END.......................

//..................... HOME SLIDER START.......................
document.addEventListener("DOMContentLoaded", function () {
  // Use setTimeout to delay the execution
  setTimeout(function () {
    // Initialize Owl Carousel after 1 minute
    $("#home-owl").owlCarousel({
      items: 1,
      itemsDesktop: [1000, 1],
      itemsDesktopSmall: [980, 1],
      itemsTablet: [768, 1],
      itemsMobile: [650, 1],
      pagination: true,
      navigation: false,
      autoPlay: true,
      autoplayTimeout: 100,
      dots: false,
      nav: false,
    });
  }, 2000); // 60000 milliseconds = 1 minute
});
//..................... HOME SLIDER END.......................

//..................... COMPANY LOGO SLIDER START.......................
$(document).ready(function() {
  $("#owl-2").owlCarousel({
      items: 5,
      itemsDesktop: [1000, 6],
      itemsDesktopSmall: [980, 4],
      itemsTablet: [768, 5],
      itemsMobile: [650, 5],
      pagination: true,
      navigation: false,
      slideSpeed: 1000,
      autoPlay: true
  });
});
//..................... COMPANY LOGO SLIDER START.......................

//..................... MODAL START.......................

const popup = document.querySelector(".popupBox");
const close = document.querySelector(".closes");

window.onload = function () {
  setTimeout(() => {
    popup.style.display = "block";
  }, 3000);
};

close.addEventListener("click", () => {
  popup.style.display = "none";
});


//..................... MODAL END.......................

//..................... FAQ START.......................
const buttons = document.querySelectorAll(".faq-toggle");

buttons.forEach((button) => {
  button.addEventListener("click", () =>
    button.parentElement.classList.toggle("active")
  );
});
//..................... FAQ START.......................




