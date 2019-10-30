export function init_ancora() {
    init_scroll_section();
    var $doc = $("html, body");
    $("a").click(function() {
      if ($.attr(this, "href").charAt(0) === "#") {
        var el = $("body").find($.attr(this, "href"));
        if ($(el).length > 0) {
          $(".menu-mobile").removeClass("active");
          $(".collapse").removeClass("active");
  
          var i = 0;

  
          $doc.animate(
            {
              scrollTop: $($.attr(this, "href")).offset().top - i
            },
            500
          );
          window.location.hash = $.attr(this, "href");
          return false;
        }
      }
    });
  }

  function init_scroll_section() {
    var width = $(window).width();
    if (width <= 991) {
      var i = 65;
    } else {
      var i = 95;
    }
  
    $(window).resize(function() {
      var width = $(window).width();
      if (width <= 991) {
        var i = 50;
      } else {
        var i = 95;
      }
    });
  
    $(window).on("scroll", function() {
      var logo_top = $($("#logo")).offset().top - i;
      var logo_bottom = logo_top + $("#logo").height();
  
      var home_top = $($("#home")).offset().top - i;
      var home_bottom =
        home_top + $("#home").height();
  
      var conteudos_top = $($("#conteudos")).offset().top - i;
      var conteudos_bottom =
        conteudos_top + $("#conteudos").height();
  
      var mais_lidas_top = $($("#mais-lidas")).offset().top - i;
      var mais_lidas_bottom =
        mais_lidas_top + $("#mais-lidas").height();
  
      var scrollPosition = $(window).scrollTop();
  
      if (scrollPosition >= logo_top && scrollPosition <= logo_bottom) {
        // window.location.hash = "#logo";
        $(".nav-item").removeClass("active");
        $('a[href="#logo"]')
          .parent()
          .addClass("active");
      } else if (
        scrollPosition >= home_top &&
        scrollPosition <= home_bottom
      ) {
        // window.location.hash = "#home";
        $(".nav-item").removeClass("active");
        $('a[href="#home"]')
          .parent()
          .addClass("active");
      } else if (
        scrollPosition >= conteudos_top &&
        scrollPosition <= conteudos_bottom
      ) {
        // window.location.hash = "#conteudos";
        $(".nav-item").removeClass("active");
        $('a[href="#conteudos"]')
          .parent()
          .addClass("active");
      } else if (
        scrollPosition >= mais_lidas_top &&
        scrollPosition <= mais_lidas_bottom
      ) {
        // window.location.hash = "#mais-lidas";
        $(".nav-item").removeClass("active");
        $('a[href="#mais-lidas"]')
          .parent()
          .addClass("active");
      } else {
        $(".nav-item").removeClass("active");
      }
    });
  }
  