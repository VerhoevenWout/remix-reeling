jQuery(function($){

  var templateUrl = '<?= get_bloginfo("template_url"); ?>';

  // IFRAME HEADER RESPONSIVE RESIZE
  function resize(){
    var windowWidth = $(window).width();
    // Load Variables - we do this here so they are reset when the screen changes size.
    var SW = $(window).width();
    var VH = SW * 0.5625;
    var SH = $(window).height();
    var VW = SH * 1.777;
    // Screen size check based on 16:9 ratio
    if (SW > VW) {
      $(".content-big iframe, .content-big video").width(SW).height(VH).css("top", -(VH - SH) /2);
    } else {
      $(".content-big iframe, .content-big video").height(SH).width(VW).css("left", -(VW - SW) /2);
    }
  }
  resize();
  $(window).resize(function() {
    resize();
  });

  // LOADING SVG FADEOUT ON VIDEO 1s
  var iframe = document.querySelector('iframe');
  var player = new Vimeo.Player(iframe);
  player.on('progress', function(data) {
    seconds: 1;
    $('.loading-svg').addClass('hide');
    $('.play-button').addClass('hide');
    $('.loading-background').addClass('hide');
  });
  var ismobile=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)
  if (!ismobile) {
    player.play();
  }

  $(window).scroll(function(){
    $("#intro-wrapper span").css("opacity", 1 - $(window).scrollTop() / 250);
    $("#intro-wrapper h1").css("opacity", 1 - $(window).scrollTop() / 250);
  });

  var $body = $('html, body');
  $('.button-scroll-contact').click(function(){
    var topOfObject = $( $.attr(this, 'href') ).offset().top
    $body.animate({
      scrollTop: topOfObject
    }, 500);
    return false;
  })

  // player.pause();
  $('.play-button').click(function(){
    $(this).addClass('hide');
    player.play();
    $('.loading-svg').addClass('hide');
  });

  if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $("video").prop('muted', false);
  }

});
