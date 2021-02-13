<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>التحصيل االدراسي</title>
<meta name="generator" content="www.kaaf.edu.sa">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="2.png" rel="apple-touch-icon" sizes="93x90">
<link href="tahsil-qwq.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
$(document).ready(function()
{
   $("a[href*='#home']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#home').offset().top }, 600, 'easeInQuad');
   });
});
</script>
<script>
$(document).ready(function()
{
   // change the date here
   var dateFuture = new Date("april 24, 2020 12:00:00");
   var dateNow = new Date();
   var seconds = Math.floor((dateFuture - (dateNow))/1000);
   var minutes = Math.floor(seconds/60);
   var hours = Math.floor(minutes/60);
   var days = Math.floor(hours/24);

   hours = hours-(days*24);
   minutes = minutes-(days*24*60)-(hours*60);
   seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);
   
   $('#wb_days strong').first().data('value', days).addClass('counter');
   $('#wb_hours strong').first().data('value', hours).addClass('counter');
   $('#wb_minutes strong').first().data('value', minutes).addClass('counter');
   $('#wb_seconds strong').first().data('value', seconds).addClass('counter');

   // change the ID here: 'home' is the ID of the layout grid!
   var $numbers = $('#home .counter');
     
   $numbers.each(function() 
   {
     var $obj = $(this);
     $obj.data('done', false);
     $obj.text('0');
   });
   $(window).bind('scroll', function() 
   {
      $numbers.each(function() 
      {
         var $obj = $(this);
         if (!$obj.data('done') && $(window).scrollTop() + $(window).height() >= $obj.offset().top) 
         {
            $obj.data('done', true);
            $obj.animate({scroll: 1}, 
            { 
               duration: 3000, 
               step: function(now) 
               {
                  var $obj = $(this);
                  var val = Math.round($obj.data('value') * now);
                  $obj.text(val);
               }
            });
         }
      });
   }).triggerHandler('scroll');
});
</script>
</head>
<body>
<div id="container">
<div id="wb_Image6">
<a href="./page1.php"><img src="images/phys1.png" id="Image6" alt=""></a></div>
<div id="wb_Image5">
<a href="./page3.php"><img src="images/kamstry.png" id="Image5" alt=""></a></div>
</div>
<div id="home">
<div id="home_Container">

<div id="wb_Image4">
<img src="images/3.png" id="Image4" alt=""></div>
<div id="wb_Image2">
<img src="images/90.png" id="Image2" alt=""></div>
<div id="wb_Image1">
<a href="http://www.kaaf.edu.sa" target="_blank"><img src="images/adghat.png" id="Image1" alt=""></a></div>
<div id="wb_Image8">
<img src="images/tahsil.png" id="Image8" alt=""></div>
<div id="wb_Image3">
<a href="./page2.php"><img src="images/math.png" id="Image3" alt=""></a></div>
<div id="wb_Image7">
<a href="./page4.php"><img src="images/bilogy.png" id="Image7" alt=""></a></div>
</div>
</div>
</body>
</html>