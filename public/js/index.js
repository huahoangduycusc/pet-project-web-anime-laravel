let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]
$('.slides-top-news').owlCarousel({
  items: 2,
  dots: false,
  nav: true,
  navText: navText,
  margin: 15,
  responsive: {
    300: {
      items: 1
    },
    400: {
      items: 1
    },
    500: {
      items: 1
    },
    1280: {
      items: 2
    },
    1600: {
      items: 2
    }
  }
});
$('.slides-video-news').owlCarousel({
  items: 2,
  dots: false,
  nav: true,
  navText: navText,
  margin: 15,
  responsive: {
    300: {
      items: 1
    },
    500: {
      items: 2
    },
    1280: {
      items: 4
    },
    1600: {
      items: 5
    }
  }
});
$('.slides-weekly-rankings').owlCarousel({
  items: 2,
  dots: false,
  nav: true,
  navText: navText,
  margin: 15,
  responsive: {
    300: {
      items: 1
    },
    500: {
      items: 2
    },
    1280: {
      items: 4
    },
    1600: {
      items: 4
    }
  }
});
$(document).ready(function () {

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });

  $('.scrollup').click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });

});

/// open search
$(".search-open").on('click', function (e) {
  e.preventDefault();
  $(".search-overlay").addClass("active");
});
$(".search-close").on('click', function (e) {
  $(".search-overlay").removeClass("active");
});
// toggle menu bar
$(".menu-bar").on('click', function (e) {
  $(this).toggleClass("active");
  $(".nav-container").toggleClass("active");
  $(".menu-overlay").toggleClass("active");
});
// close menu bar
$(".menu-overlay").on('click', function (e) {
  $(".menu-bar").removeClass("active");
  $(".nav-container").removeClass("active");
  $(".menu-overlay").removeClass("active");
});

var flagChild = true;
$(".has-child").on('click', function (e) {
  $child = $(this).find(".menu-mobile");
  $(".menu-desktop").toggleClass("open");
  var height = $child.prop('scrollHeight');
  if (flagChild) {
    $child.css('height', height);
    $(this).find(".bx").css('transform', 'rotate(180deg)');
    $(this).find(".bx").css('transition', 'all 0.3s ease');
  }
  else {
    $(this).find(".bx").css('transform', 'rotate(0deg)');
    $(this).find(".bx").css('transition', 'all 0.3s ease');
    $child.css('height', 0);
  }
  flagChild = !flagChild;
});
