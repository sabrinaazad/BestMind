/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;
var question = $(".question");

$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });

  $(document).scroll(function () {
    if (win.innerWidth < 767) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    }
    var topval = $(document).scrollTop();
    if (topval >= mainNavOffset) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    } else {
      stickyWrap.removeClass("sticky");
      mainNav.removeClass("sticky-margin");
    }
  });

  $('.hero-slider').slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  $('.bottom_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.bottom_slider_2',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          dots: true
        }
      }
    ]
  });

  $('.bottom_slider_2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.bottom_slider',
    arrows: false,
    dots: false,
    centerMode: false,
    focusOnSelect: true
  });

  $('.featured_slider').slick({
    infinite: true,
    arrows: false,
    dots: true,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 5,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          infinite: true,
          arrows: false,
          dots: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3,
          cssEase: 'linear'
        }
      },
      {
        breakpoint: 768,
        settings: {
          infinite: true,
          arrows: false,
          dots: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
          cssEase: 'linear'
        }
      }
    ]
  });

  $('.featured_blogs').slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });
  
  $('.team_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.team_slider_2',
  });

  $('.team_slider_2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.team_slider',
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });
  
  $('.testimonials_slider').slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 2,
          slidesToScroll: 1,
        }
     },
       {
          breakpoint: 767,
          settings: {
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
          }
       }
    ]
  });

  $('.testimonials-slider-v2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true
  });

  question.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find("#button").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find("#button").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });


  
  var x, i, j, l, ll, selElmnt, a, b, c;
  /* Look for any elements with the class "custom-select": */
  x = document.getElementsByClassName("state-picker");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /* For each option in the original select element,
      create a new DIV that will act as an option item: */
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /* When an item is clicked, update the original select box,
          and the selected item: */
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /* When the select box is clicked, close any other select boxes,
      and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }

  function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }

  /* If the user clicks anywhere outside the select box,
  then close all select boxes: */
  document.addEventListener("click", closeAllSelect);

});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}
