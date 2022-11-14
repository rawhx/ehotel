var count = true;
$("div.like").click(function(){
  var heart = $('<div class="post_animated_heart post_poof"><span class="heart_left"></span><span class="heart_right"></span></div>').toggleClass("unliked", count = !count);
  
  $(this).toggleClass("liked").append(heart);
  
  setTimeout(function() {
    heart.fadeOut(200, function() {
      heart.remove()
    })
  }, 300);
});


