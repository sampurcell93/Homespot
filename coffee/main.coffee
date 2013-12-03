$ ->
  cc = -> for arg in arguments then console.log arg

  goToPage = (page) ->
    $t = $ @
    rel = page || $t.attr "rel"
    $g = $("#" + $t.parent().data("group"))
    $link = $("#" + rel)
    return  if $t.hasClass("slider")
    return  if $link.hasClass("active-page")
    $g.children().hide().removeClass "active-page"
    if typeof rel is "undefined"
      i = $t.index()
      $g.children().eq(i).fadeIn("fast").addClass "active-page"
    $g.children().removeClass "active-page"
    $link.fadeIn "fast"
    $link.addClass "active-page"
    $t.addClass("selected-tab").siblings().removeClass "selected-tab"
    unless $t.parent().attr("hashchange") == "false"
      window.location.hash = rel
      $('html, body').animate 
        scrollTop: 0
      , 400

  $(".tabs").find("li").on("click", ->
      goToPage.call(this);
  ).each ->
    $t = $ @
    $t.addClass "selected-tab"  unless $t.index()
    $g = $("#" + $t.parent().data("group"))
    $g.children(":gt(0)").hide()
    $g.children().first().addClass "active-page"

  hash = window.location.hash
  if hash != ""
      $("[rel=" + hash.slice(1) + "]").trigger "click"

  $(window).scroll ->
    if $(window).scrollTop() > 0
      $("header").addClass("has-shadow")
    else
      $("header").removeClass("has-shadow")
  $(".js-goto").on "click", "a", (e)->
    loc = $(@).attr("href")
    pos = $(loc).offset().top
    $('html, body').animate 
        scrollTop: pos - 70 + "px"
    , 400
    e.preventDefault()