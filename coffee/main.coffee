# ATTENTION: This is shitty javascript. Most of it is recycled. Todo: Unshittify.
cc = -> for arg in arguments then console.log arg
$ ->

  checkHeight = ->
    if ($("body").height() < $(window).height()) then $("header").removeClass("hidden-header")

  # Pass in a string identifier an call in a this context, or pass in a clicked element context
  goToPage = (page, $el) ->
    $t = $el || $ @
    rel = page || $t.attr "rel"
    $g = $("#" + $t.parent().data("group"))
    $link = $("#" + rel)
    return if $t.hasClass("slider")
    return if $link.hasClass("active-page")
    $g.children().hide().removeClass "active-page"
    if typeof rel is "undefined"
      i = $t.index()
      $g.children().eq(i).fadeIn("fast").addClass "active-page"
    $g.children().removeClass "active-page"
    $link.fadeIn "fast"
    $link.addClass("active-page").trigger("viewingpage")
    $(".selected-tab").removeClass "selected-tab"
    $t.addClass("selected-tab")
    unless $t.parent().attr("hashchange") == "false"
      window.location.hash = rel
      $('html, body').animate 
        scrollTop: 0
      , 400
    checkHeight()

  # Bind events to each li 
  $(".tabs").on("click", "li", ->
      goToPage.call(this);
  )
  $(".tabs li").each ->
    $t = $ @
    $t.addClass "selected-tab"  unless $t.index()
    $g = $("#" + $t.parent().data("group"))
    $g.children(":gt(0)").hide()
    $g.children().first().addClass("active-page").trigger("viewingpage")

  # On page load check if we're not on the home page - if so, go to page
  hash = window.location.hash
  if hash != "" then goToPage.call($("[rel=" + hash.slice(1) + "]"), hash.slice(1))

  # Show or hide top nav on scroll
  $(window).scroll ->
    if $(window).scrollTop() > 0
      $("header").removeClass("hidden-header")
      $("body").addClass("header-visible")
    else
      $("header").addClass("hidden-header")
      $("body").removeClass("header-visible")

  # Smooth transition for in page anchors
  $(".js-goto").on "click", "a", (e)->
    loc = $(@).attr("href")
    pos = $(loc).offset().top
    $('html, body').animate 
        scrollTop: pos - 70 + "px"
    , 400
    e.preventDefault()

  # When we go to the contact page, auto focus the input
  $("#contact").on "viewingpage", ->
    $(@).find("input").first().focus().select()

  objectflasher = ->
    $spottedobj = $(".js-spotted-object")
    objindex = 0
    arr = ["toys", "Santa", "his new apartment", "birds flying high", "Jay-Z", "Kanye", "a white Christmas"]
    len = arr.length

    return ->
      $spottedobj.fadeOut("fast", ->
        $(@).text(arr[objindex % len]).fadeIn("fast")
        objindex++
      )
  # Arbitrary flipping of spotted objects
  setInterval(objectflasher(), 6000)

  $people = $(".person-image")
  len = $people.length
  personindex = 0
  flash = ->
    $(".saturated").removeClass("saturated")
    $people.eq(personindex % len).addClass("saturated")
    personindex++
  flash()
  # Flicker through people images
  setInterval(flash,5000)

$(window).on "hashchange", ->
  pages = ["contact", "help", "home", "blog", "team"]
  hash = window.location.hash.slice(1)
  if pages.indexOf(hash) != -1
    # Stop the page scroll shit
    $("html, body").finish()
    $("[rel=" + hash + "]").trigger "click"


