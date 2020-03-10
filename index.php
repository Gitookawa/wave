<!DOCTYPE html>
  <head>
   <meta charset="UTF-8">
   <link href="css/tokutyo.css" rel="stylesheet"> 
   <link href="css/menubar.css" rel="stylesheet">
   <link href="css/mainbody.css" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">

   <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
function slideSwitch() {
   var $active = $('#slideshow img.active');

   if ( $active.length == 0 ) $active = $('#slideshow img:last');

   var $next =  $active.next().length ? $active.next()
      : $('#slideshow img:first');

   $active.addClass('last-active');

   $next.css({opacity: 0.0})
      .addClass('active')
      .animate({opacity: 1.0}, 1000, function() {
           $active.removeClass('active last-active');
      });
}

$(function() {
   setInterval( "slideSwitch()", 3000 );
});
</script>

 </head>
  <header>
    <div id ="menubar"> 
      <ul>
        <li><a href="#home">メインページ</a></li>
        <li><a href="#news">サービス</a></li>
        <li><a href="#contact">NEWS</a></li>
        <li><a href="#about">アクセス</a></li>
     </ul>
     <img class="img1"src="img/wave1.JPG"height="450"width="850">
   <p id="slideshow">
     <img class="img1"src="img/wave2.JPG" height="450"width="850" alt="wave2">
     <img class="img1"src="img/wave3.JPG" height="450"width="850" alt="wave3">
     <img class="img1"src="img/wave4.JPG" height="450"width="850" alt="wave4">
  </p>    
  </header>
 </div>
<body>
 <h1>とことん綺麗にとことんしみ抜き、綺麗にするならクリーニングWAVE</h1>
<script>
$(function() {
  var h1 = $('h1');
  
  var txt_array = h1.text().split('');
  
  $('h1').html('');
  
  $.each(txt_array, function(index, element) {
    var new_element = $("<span/>").text(element).css({ opacity: 0 });
    h1.append(new_element);
    new_element.delay(index * 5);
    new_element.animate({opacity: 1}, 3000);
  });
});
</script>
<div id="tokutyo">
 <div class="waku">
   <img src="img/neko.jpg" class="zukei" width="200" height="200">
    <span class="kasen">とことんシミ抜き</span>
  <!--  <div class="kasenposition">
     <span class="kasen">シミ</span>
    </div>-->
   <p>aaaaaaaaaaaaaaaaaaaaaaa<br>
   aaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
   aaaaaaaaaaaaaaaaaaaaaaaaaa</p>
  </div>
</div>

</body>
<footer>

</footer>
</html>

