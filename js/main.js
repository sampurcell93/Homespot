// Generated by CoffeeScript 1.6.3
(function() {
  var cc;

  cc = function() {
    var arg, _i, _len, _results;
    _results = [];
    for (_i = 0, _len = arguments.length; _i < _len; _i++) {
      arg = arguments[_i];
      _results.push(console.log(arg));
    }
    return _results;
  };

  $(function() {
    var goToPage, hash;
    goToPage = function(page) {
      var $g, $link, $t, i, rel;
      $t = $(this);
      rel = page || $t.attr("rel");
      $g = $("#" + $t.parent().data("group"));
      $link = $("#" + rel);
      if ($t.hasClass("slider")) {
        return;
      }
      if ($link.hasClass("active-page")) {
        return;
      }
      $g.children().hide().removeClass("active-page");
      if (typeof rel === "undefined") {
        i = $t.index();
        $g.children().eq(i).fadeIn("fast").addClass("active-page");
      }
      $g.children().removeClass("active-page");
      $link.fadeIn("fast");
      $link.addClass("active-page");
      $(".selected-tab").removeClass("selected-tab");
      $t.addClass("selected-tab");
      if ($t.parent().attr("hashchange") !== "false") {
        window.location.hash = rel;
        return $('html, body').animate({
          scrollTop: 0
        }, 400);
      }
    };
    $(".tabs").find("li").on("click", function() {
      return goToPage.call(this);
    }).each(function() {
      var $g, $t;
      $t = $(this);
      if (!$t.index()) {
        $t.addClass("selected-tab");
      }
      $g = $("#" + $t.parent().data("group"));
      $g.children(":gt(0)").hide();
      return $g.children().first().addClass("active-page");
    });
    hash = window.location.hash;
    if (hash !== "") {
      $("[rel=" + hash.slice(1) + "]").trigger("click");
    }
    $(window).scroll(function() {
      if ($(window).scrollTop() > 0) {
        return $("header").addClass("has-shadow");
      } else {
        return $("header").removeClass("has-shadow");
      }
    });
    return $(".js-goto").on("click", "a", function(e) {
      var loc, pos;
      loc = $(this).attr("href");
      pos = $(loc).offset().top;
      $('html, body').animate({
        scrollTop: pos - 70 + "px"
      }, 400);
      return e.preventDefault();
    });
  });

  $(window).on("hashchange", function() {
    var hash, pages;
    pages = ["contact", "help", "home", "blog", "team"];
    hash = window.location.hash.slice(1);
    if (pages.indexOf(hash) !== -1) {
      $("html, body").finish();
      return $("[rel=" + hash + "]").first().trigger("click");
    }
  });

}).call(this);
