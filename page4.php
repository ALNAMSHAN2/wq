<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>التحصيل االدراسي</title>
<meta name="generator" content="alnamshan7">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="logo2.png" rel="apple-touch-icon" sizes="300x300">
<link href="tahsil-qwq.css" rel="stylesheet">
<link href="page4.css" rel="stylesheet">
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
</div>
<div id="PageHeader1">
   <div id="wb_Text1">
      <span style="color:#009999;font-family:Arial;font-size:24px;"><strong>الاحياء</strong></span></div>
   <div id="wb_Image1">
      <img src="images/logo2.png" id="Image1" alt=""></div>
   <div id="wb_Image3">
      <a href="./index.php"><img src="images/2-2-home-png-file.png" id="Image3" alt=""></a></div>
   <div id="wb_Text2">
      <span style="color:#009999;font-family:Arial;font-size:15px;"><strong><a href="./index.php">العودة للرئيسة</a></strong></span></div>
</div>
<div id="home">
<div id="home_Container">

<div id="wb_Text3">
<span style="color:#009999;font-family:Arial;font-size:27px;"><strong>نتمنى لكم دوام التوفيق<br>لاتنسى التسجيل معنا</strong></span></div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:15px;"><a href="http://www.kaaf.edu.sa" target="_blank">www.kaaf.edu.sa</a></span></div>
<div id="wb_Shape1">
<img src="images/img0002.png" id="Shape1" alt=""></div>
<div id="wb_YouTube1">
<iframe id="YouTube1" src="https://www.youtube.com/embed/iC-b6dj1wX0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape2">
<img src="images/img0005.png" id="Shape2" alt=""></div>
<div id="wb_YouTube2">
<iframe id="YouTube2" src="https://www.youtube.com/embed/SNQbMiydE40?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape4">
<img src="images/img0006.png" id="Shape4" alt=""></div>
<div id="wb_YouTube3">
<iframe id="YouTube3" src="https://www.youtube.com/embed/QcB7fYBuOfQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube4">
<iframe id="YouTube4" src="https://www.youtube.com/embed/kRP4QpARVno?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube5">
<iframe id="YouTube5" src="https://www.youtube.com/embed/0aGklnMCBnA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape5">
<img src="images/img0008.png" id="Shape5" alt=""></div>
<div id="wb_YouTube6">
<iframe id="YouTube6" src="https://www.youtube.com/embed/vQ6anah7n5w?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube7">
<iframe id="YouTube7" src="https://www.youtube.com/embed/5AXObNfRf_A?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube9">
<iframe id="YouTube9" src="https://www.youtube.com/embed/ITopphtRtQY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube10">
<iframe id="YouTube10" src="https://www.youtube.com/embed/d3wmOYyKpsc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape6">
<img src="images/img0009.png" id="Shape6" alt=""></div>
<div id="wb_Shape7">
<img src="images/img0010.png" id="Shape7" alt=""></div>
<div id="wb_YouTube11">
<iframe id="YouTube11" src="https://www.youtube.com/embed/o7x3AHyXqds?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube12">
<iframe id="YouTube12" src="https://www.youtube.com/embed/5PJ5OH_0vpQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape8">
<img src="images/img0012.png" id="Shape8" alt=""></div>
<div id="wb_YouTube14">
<iframe id="YouTube14" src="https://www.youtube.com/embed/ArWEJG8_xrs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube15">
<iframe id="YouTube15" src="https://www.youtube.com/embed/zosRGqQHvmA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape9">
<img src="images/img0013.png" id="Shape9" alt=""></div>
<div id="wb_YouTube16">
<iframe id="YouTube16" src="https://www.youtube.com/embed/sLMxRp6DYiE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube17">
<iframe id="YouTube17" src="https://www.youtube.com/embed/T-uYqr491dY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube18">
<iframe id="YouTube18" src="https://www.youtube.com/embed/XjFhxuB8kJ8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape10">
<img src="images/img0014.png" id="Shape10" alt=""></div>
<div id="wb_YouTube19">
<iframe id="YouTube19" src="https://www.youtube.com/embed/YmE6x3B81QY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape11">
<img src="images/img0016.png" id="Shape11" alt=""></div>
<div id="wb_YouTube20">
<iframe id="YouTube20" src="https://www.youtube.com/embed/WQh8DcMyG4g?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube21">
<iframe id="YouTube21" src="https://www.youtube.com/embed/pF0PmmFxbfs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube23">
<iframe id="YouTube23" src="https://www.youtube.com/embed/-RzUhg03HMc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube24">
<iframe id="YouTube24" src="https://www.youtube.com/embed/9qZX_U9CXX0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube26">
<iframe id="YouTube26" src="https://www.youtube.com/embed/cEyYHf0OE10?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube27">
<iframe id="YouTube27" src="https://www.youtube.com/embed/B2lvnfU7MZU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape13">
<img src="images/img0018.png" id="Shape13" alt=""></div>
<div id="wb_YouTube28">
<iframe id="YouTube28" src="https://www.youtube.com/embed/ln14DJO6h1A?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape14">
<img src="images/img0019.png" id="Shape14" alt=""></div>
<div id="wb_YouTube29">
<iframe id="YouTube29" src="https://www.youtube.com/embed/EQL2eSKYJug?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube30">
<iframe id="YouTube30" src="https://www.youtube.com/embed/2E3601KrpGc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube31">
<iframe id="YouTube31" src="https://www.youtube.com/embed/p9M2KpUrFd8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape15">
<img src="images/img0020.png" id="Shape15" alt=""></div>
<div id="wb_YouTube32">
<iframe id="YouTube32" src="https://www.youtube.com/embed/o_rbF3pH15U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube33">
<iframe id="YouTube33" src="https://www.youtube.com/embed/dj44aPR4PzY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube34">
<iframe id="YouTube34" src="https://www.youtube.com/embed/g8DkUnndpVY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape16">
<img src="images/img0022.png" id="Shape16" alt=""></div>
<div id="wb_YouTube35">
<iframe id="YouTube35" src="https://www.youtube.com/embed/SaIqO1GIQzc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube36">
<iframe id="YouTube36" src="https://www.youtube.com/embed/O1jD8L_swsw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube37">
<iframe id="YouTube37" src="https://www.youtube.com/embed/5bjzlRZp4H0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube38">
<iframe id="YouTube38" src="https://www.youtube.com/embed/I80bI1s-iTw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube39">
<iframe id="YouTube39" src="https://www.youtube.com/embed/_caMSoPmWlY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape17">
<img src="images/img0023.png" id="Shape17" alt=""></div>
<div id="wb_YouTube41">
<iframe id="YouTube41" src="https://www.youtube.com/embed/1jcZ4EM7KSw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube42">
<iframe id="YouTube42" src="https://www.youtube.com/embed/fAJIchFZ17M?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube43">
<iframe id="YouTube43" src="https://www.youtube.com/embed/3HSGKy24UjE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube44">
<iframe id="YouTube44" src="https://www.youtube.com/embed/WNfrVcU9MfM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube46">
<iframe id="YouTube46" src="https://www.youtube.com/embed/k0hWR4nivaA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape18">
<img src="images/img0024.png" id="Shape18" alt=""></div>
<div id="wb_YouTube47">
<iframe id="YouTube47" src="https://www.youtube.com/embed/IwjJqMksy7E?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube48">
<iframe id="YouTube48" src="https://www.youtube.com/embed/sh7ZW4WobwE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube49">
<iframe id="YouTube49" src="https://www.youtube.com/embed/v90roi1vbpQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube50">
<iframe id="YouTube50" src="https://www.youtube.com/embed/62G3yfusIjU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape19">
<img src="images/img0026.png" id="Shape19" alt=""></div>
<div id="wb_YouTube51">
<iframe id="YouTube51" src="https://www.youtube.com/embed/sGniyKVE-vQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube54">
<iframe id="YouTube54" src="https://www.youtube.com/embed/84tGY4mpNwI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape22">
<img src="images/img0030.png" id="Shape22" alt=""></div>
<div id="wb_YouTube57">
<iframe id="YouTube57" src="https://www.youtube.com/embed/jS_gXs899LM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape23">
<img src="images/img0031.png" id="Shape23" alt=""></div>
<div id="wb_YouTube59">
<iframe id="YouTube59" src="https://www.youtube.com/embed/5RlXwkUGFWQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape24">
<img src="images/img0032.png" id="Shape24" alt=""></div>
<div id="wb_YouTube60">
<iframe id="YouTube60" src="https://www.youtube.com/embed/SPH76UE7W2Y?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube61">
<iframe id="YouTube61" src="https://www.youtube.com/embed/y6AP-Y-qSy8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube62">
<iframe id="YouTube62" src="https://www.youtube.com/embed/tU7lXScn2Eo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube64">
<iframe id="YouTube64" src="https://www.youtube.com/embed/hdu4qc_b_uE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape25">
<img src="images/img0033.png" id="Shape25" alt=""></div>
<div id="wb_YouTube66">
<iframe id="YouTube66" src="https://www.youtube.com/embed/9qhnz1G61X8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube67">
<iframe id="YouTube67" src="https://www.youtube.com/embed/Zcl1IJg6ZQE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube68">
<iframe id="YouTube68" src="https://www.youtube.com/embed/-VecKjqK-RM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube71">
<iframe id="YouTube71" src="https://www.youtube.com/embed/r6epzp59lsY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube74">
<iframe id="YouTube74" src="https://www.youtube.com/embed/A05yRXamVyA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube75">
<iframe id="YouTube75" src="https://www.youtube.com/embed/VSQEpvAFyMU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube77">
<iframe id="YouTube77" src="https://www.youtube.com/embed/97-57IGLy1Q?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube79">
<iframe id="YouTube79" src="https://www.youtube.com/embed/5JngtJWqgDk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image84">
<img src="images/تابع80.jpg" id="Image84" alt=""></div>
<div id="wb_YouTube83">
<iframe id="YouTube83" src="https://www.youtube.com/embed/8-EmiK5w85Q?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube84">
<iframe id="YouTube84" src="https://www.youtube.com/embed/ys8trWyAW6w?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube86">
<iframe id="YouTube86" src="https://www.youtube.com/embed/2YIu1Nddkz8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape30">
<img src="images/img0039.png" id="Shape30" alt=""></div>
<div id="wb_YouTube87">
<iframe id="YouTube87" src="https://www.youtube.com/embed/rgYlaEpigdc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube88">
<iframe id="YouTube88" src="https://www.youtube.com/embed/-ObnMNHw-B4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube90">
<iframe id="YouTube90" src="https://www.youtube.com/embed/gL29FJOUc9A?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube91">
<iframe id="YouTube91" src="https://www.youtube.com/embed/GDc_zfiyKvk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape31">
<img src="images/img0082.png" id="Shape31" alt=""></div>
<div id="wb_YouTube92">
<iframe id="YouTube92" src="https://www.youtube.com/embed/KvjQNF8GEd4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape32">
<img src="images/img0083.png" id="Shape32" alt=""></div>
<div id="wb_YouTube93">
<iframe id="YouTube93" src="https://www.youtube.com/embed/C_81GIR8Vfw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube94">
<iframe id="YouTube94" src="https://www.youtube.com/embed/yyknzyt0kcE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube95">
<iframe id="YouTube95" src="https://www.youtube.com/embed/otPJgP8z0Q4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube97">
<iframe id="YouTube97" src="https://www.youtube.com/embed/s2ypKBUZnbQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube98">
<iframe id="YouTube98" src="https://www.youtube.com/embed/KhMOTym66Rg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube99">
<iframe id="YouTube99" src="https://www.youtube.com/embed/HCZH9v47oQo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube100">
<iframe id="YouTube100" src="https://www.youtube.com/embed/oAeK4uRgIAs?rel=1&amp;autohide=0"></iframe></div>
<div id="Layer1">
</div>
<div id="wb_Image4">
<img src="images/b -1)‬.png" id="Image4" alt=""></div>
<div id="wb_Image5">
<img src="images/b ‫(1)‬ ‫‬.png" id="Image5" alt=""></div>
<div id="wb_Image6">
<img src="images/b ‫(63972773)‬ ‫‬.png" id="Image6" alt=""></div>
<div id="wb_Image7">
<img src="images/b ‫(63972774)‬ ‫‬.png" id="Image7" alt=""></div>
<div id="wb_Image8">
<img src="images/b ‫(63972775)‬ ‫‬.png" id="Image8" alt=""></div>
<div id="wb_Image9">
<img src="images/b ‫(63972776)‬ ‫‬.png" id="Image9" alt=""></div>
<div id="wb_Image10">
<img src="images/b ‫(63972777)‬ ‫‬.png" id="Image10" alt=""></div>
<div id="wb_Image11">
<img src="images/b ‫(63972778)‬ ‫‬.png" id="Image11" alt=""></div>
<div id="wb_YouTube8">
<iframe id="YouTube8" src="https://www.youtube.com/embed/4x7h0v3VxD0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image12">
<img src="images/b ‫(63972779)‬ ‫‬.png" id="Image12" alt=""></div>
<div id="wb_Image13">
<img src="images/b ‫(63972780)‬ ‫‬.png" id="Image13" alt=""></div>
<div id="wb_Image14">
<img src="images/b ‫(63972781)‬ ‫‬.png" id="Image14" alt=""></div>
<div id="wb_Image15">
<img src="images/b ‫(63972782)‬ ‫‬.png" id="Image15" alt=""></div>
<div id="wb_Image16">
<img src="images/b ‫(63972783)‬ ‫‬.png" id="Image16" alt=""></div>
<div id="wb_YouTube13">
<iframe id="YouTube13" src="https://www.youtube.com/embed/6iVFqtYdzus?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image17">
<img src="images/b ‫(63972784)‬ ‫‬.png" id="Image17" alt=""></div>
<div id="wb_Image18">
<img src="images/b ‫(63972785)‬ ‫‬.png" id="Image18" alt=""></div>
<div id="wb_Image19">
<img src="images/b ‫(63972786)‬ ‫‬.png" id="Image19" alt=""></div>
<div id="wb_Image20">
<img src="images/b ‫(63972787)‬ ‫‬.png" id="Image20" alt=""></div>
<div id="wb_Image21">
<img src="images/b ‫(63972788)‬ ‫‬.png" id="Image21" alt=""></div>
<div id="wb_Image22">
<img src="images/b ‫(63972789)‬ ‫‬.png" id="Image22" alt=""></div>
<div id="wb_Image23">
<img src="images/b ‫(63972790)‬ ‫‬.png" id="Image23" alt=""></div>
<div id="wb_Image24">
<img src="images/b ‫(63972791)‬ ‫‬.png" id="Image24" alt=""></div>
<div id="wb_Image25">
<img src="images/b ‫(63972792)‬ ‫‬.png" id="Image25" alt=""></div>
<div id="wb_YouTube22">
<iframe id="YouTube22" src="https://www.youtube.com/embed/dtrJ1fxRLis?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image26">
<img src="images/b ‫(63972793)‬ ‫‬.png" id="Image26" alt=""></div>
<div id="wb_Image27">
<img src="images/b ‫(63972794)‬ ‫‬.png" id="Image27" alt=""></div>
<div id="wb_Shape12">
<img src="images/img0017.png" id="Shape12" alt=""></div>
<div id="wb_Image28">
<img src="images/b ‫(63972795)‬ ‫‬.png" id="Image28" alt=""></div>
<div id="wb_YouTube25">
<iframe id="YouTube25" src="https://www.youtube.com/embed/5FIJtrc3rj8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image29">
<img src="images/b ‫(63972796)‬ ‫‬.png" id="Image29" alt=""></div>
<div id="wb_Image30">
<img src="images/b ‫(63972797)‬ ‫‬.png" id="Image30" alt=""></div>
<div id="wb_Image31">
<img src="images/b ‫(63972798)‬ ‫‬.png" id="Image31" alt=""></div>
<div id="wb_Image32">
<img src="images/b ‫(63972799)‬ ‫‬.png" id="Image32" alt=""></div>
<div id="wb_Image33">
<img src="images/b ‫(63972800)‬ ‫‬.png" id="Image33" alt=""></div>
<div id="wb_Image34">
<img src="images/b ‫(63972801)‬ ‫‬.png" id="Image34" alt=""></div>
<div id="wb_Image35">
<img src="images/b ‫(63972802)‬ ‫‬.png" id="Image35" alt=""></div>
<div id="wb_Image36">
<img src="images/b ‫(63972803)‬ ‫‬.png" id="Image36" alt=""></div>
<div id="wb_Image37">
<img src="images/b ‫(63972804)‬ ‫‬.png" id="Image37" alt=""></div>
<div id="wb_Image38">
<img src="images/b ‫(63972805)‬ ‫‬.png" id="Image38" alt=""></div>
<div id="wb_Image39">
<img src="images/b ‫(63972806)‬ ‫‬.png" id="Image39" alt=""></div>
<div id="wb_Image40">
<img src="images/b ‫(63972807)‬ ‫‬.png" id="Image40" alt=""></div>
<div id="wb_Image41">
<img src="images/b ‫(63972808)‬ ‫‬.png" id="Image41" alt=""></div>
<div id="wb_Image42">
<img src="images/b ‫(63972809)‬ ‫‬.png" id="Image42" alt=""></div>
<div id="wb_YouTube40">
<iframe id="YouTube40" src="https://www.youtube.com/embed/6w49EkLgcLs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image43">
<img src="images/b ‫(63972810)‬ ‫‬.png" id="Image43" alt=""></div>
<div id="wb_Image44">
<img src="images/b ‫(63972811)‬ ‫‬.png" id="Image44" alt=""></div>
<div id="wb_Image45">
<img src="images/b ‫(63972812)‬ ‫‬.png" id="Image45" alt=""></div>
<div id="wb_Image46">
<img src="images/b ‫(63972813)‬ ‫‬.png" id="Image46" alt=""></div>
<div id="wb_Image47">
<img src="images/b ‫(63972814)‬ ‫‬.png" id="Image47" alt=""></div>
<div id="wb_YouTube45">
<iframe id="YouTube45" src="https://www.youtube.com/embed/GHexf8T5nuM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image48">
<img src="images/b ‫(63972815)‬ ‫‬.png" id="Image48" alt=""></div>
<div id="wb_Image49">
<img src="images/b ‫(63972816)‬ ‫‬.png" id="Image49" alt=""></div>
<div id="wb_Image50">
<img src="images/b ‫(63972817)‬ ‫‬.png" id="Image50" alt=""></div>
<div id="wb_Image51">
<img src="images/b ‫(63972818)‬ ‫‬.png" id="Image51" alt=""></div>
<div id="wb_Image52">
<img src="images/b ‫(63972819)‬ ‫‬.png" id="Image52" alt=""></div>
<div id="wb_Image53">
<img src="images/b ‫(63972820)‬ ‫‬.png" id="Image53" alt=""></div>
<div id="wb_Image54">
<img src="images/b ‫(63972821)‬ ‫‬.png" id="Image54" alt=""></div>
<div id="wb_YouTube52">
<iframe id="YouTube52" src="https://www.youtube.com/embed/ZDcXHqsKfDk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image55">
<img src="images/b ‫(63972822)‬ ‫‬.png" id="Image55" alt=""></div>
<div id="wb_YouTube53">
<iframe id="YouTube53" src="https://www.youtube.com/embed/qZ8w4JFfiRY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image56">
<img src="images/b ‫(63972823)‬ ‫‬.png" id="Image56" alt=""></div>
<div id="wb_Shape20">
<img src="images/img0027.png" id="Shape20" alt=""></div>
<div id="wb_Image57">
<img src="images/b ‫(63972824)‬ ‫‬.png" id="Image57" alt=""></div>
<div id="wb_Image58">
<img src="images/b ‫(63972825)‬ ‫‬.png" id="Image58" alt=""></div>
<div id="wb_YouTube55">
<iframe id="YouTube55" src="https://www.youtube.com/embed/ehM3PqQTypM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape21">
<img src="images/img0029.png" id="Shape21" alt=""></div>
<div id="wb_Image59">
<img src="images/b ‫(63972826)‬ ‫‬.png" id="Image59" alt=""></div>
<div id="wb_YouTube56">
<iframe id="YouTube56" src="https://www.youtube.com/embed/L_IieWGY-6A?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image60">
<img src="images/b ‫(63972827)‬ ‫‬.png" id="Image60" alt=""></div>
<div id="wb_YouTube58">
<iframe id="YouTube58" src="https://www.youtube.com/embed/dcqmfrBVutw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image61">
<img src="images/b ‫(63972828)‬ ‫‬.png" id="Image61" alt=""></div>
<div id="wb_Image62">
<img src="images/b ‫(63972829)‬ ‫‬.png" id="Image62" alt=""></div>
<div id="wb_Image63">
<img src="images/b ‫(63972830)‬ ‫‬.png" id="Image63" alt=""></div>
<div id="wb_Image64">
<img src="images/b ‫(63972831)‬ ‫‬.png" id="Image64" alt=""></div>
<div id="wb_Image65">
<img src="images/b ‫(63972832)‬ ‫‬.png" id="Image65" alt=""></div>
<div id="wb_YouTube63">
<iframe id="YouTube63" src="https://www.youtube.com/embed/xBh2MSRUqlU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image66">
<img src="images/b ‫(63972833)‬ ‫‬.png" id="Image66" alt=""></div>
<div id="wb_Image67">
<img src="images/b ‫(63972834)‬ ‫‬.png" id="Image67" alt=""></div>
<div id="wb_YouTube65">
<iframe id="YouTube65" src="https://www.youtube.com/embed/4s6m1UiDEwk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image68">
<img src="images/b ‫(63972835)‬ ‫‬.png" id="Image68" alt=""></div>
<div id="wb_Image69">
<img src="images/b ‫(63972836)‬ ‫‬.png" id="Image69" alt=""></div>
<div id="wb_Image70">
<img src="images/b ‫(63972837)‬ ‫‬.png" id="Image70" alt=""></div>
<div id="wb_Image71">
<img src="images/b ‫(63972838)‬ ‫‬.png" id="Image71" alt=""></div>
<div id="wb_YouTube69">
<iframe id="YouTube69" src="https://www.youtube.com/embed/RakwoQhZGV8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image72">
<img src="images/b ‫(63972839)‬ ‫‬.png" id="Image72" alt=""></div>
<div id="wb_YouTube70">
<iframe id="YouTube70" src="https://www.youtube.com/embed/Be18iQ-tBsg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image73">
<img src="images/b ‫(63972840)‬ ‫‬.png" id="Image73" alt=""></div>
<div id="wb_Shape26">
<img src="images/img0034.png" id="Shape26" alt=""></div>
<div id="wb_Image74">
<img src="images/b ‫(63972841)‬ ‫‬.png" id="Image74" alt=""></div>
<div id="wb_YouTube72">
<iframe id="YouTube72" src="https://www.youtube.com/embed/T-XTyZALdig?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image75">
<img src="images/b ‫(63972842)‬ ‫‬.png" id="Image75" alt=""></div>
<div id="wb_Image76">
<img src="images/b ‫(63972843)‬ ‫‬.png" id="Image76" alt=""></div>
<div id="wb_YouTube73">
<iframe id="YouTube73" src="https://www.youtube.com/embed/c7M-fLTaU4s?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image77">
<img src="images/b ‫(63972844)‬ ‫‬.png" id="Image77" alt=""></div>
<div id="wb_Shape27">
<img src="images/img0035.png" id="Shape27" alt=""></div>
<div id="wb_Image78">
<img src="images/b ‫(63972845)‬ ‫‬.png" id="Image78" alt=""></div>
<div id="wb_YouTube76">
<iframe id="YouTube76" src="https://www.youtube.com/embed/ITqS68Ha3YY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image79">
<img src="images/b ‫(63972846)‬ ‫‬.png" id="Image79" alt=""></div>
<div id="wb_Image80">
<img src="images/b ‫(63972847)‬ ‫‬.png" id="Image80" alt=""></div>
<div id="wb_YouTube78">
<iframe id="YouTube78" src="https://www.youtube.com/embed/yRmJ8b2y-oE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image81">
<img src="images/b ‫(63972848)‬ ‫‬.png" id="Image81" alt=""></div>
<div id="wb_Shape28">
<img src="images/img0036.png" id="Shape28" alt=""></div>
<div id="wb_Image82">
<img src="images/b ‫(63972849)‬ ‫‬.png" id="Image82" alt=""></div>
<div id="wb_Image83">
<img src="images/b ‫(63972850)‬ ‫‬.png" id="Image83" alt=""></div>
<div id="wb_YouTube80">
<iframe id="YouTube80" src="https://www.youtube.com/embed/dXbkpj2rEKM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube81">
<iframe id="YouTube81" src="https://www.youtube.com/embed/hiNbTAAujqE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image85">
<img src="images/b ‫(63972851)‬ ‫‬.png" id="Image85" alt=""></div>
<div id="wb_Shape29">
<img src="images/img0038.png" id="Shape29" alt=""></div>
<div id="wb_YouTube82">
<iframe id="YouTube82" src="https://www.youtube.com/embed/t6A_m1dUy0g?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image86">
<img src="images/b ‫(63972852)‬ ‫‬.png" id="Image86" alt=""></div>
<div id="wb_Image87">
<img src="images/b ‫(63972853)‬ ‫‬.png" id="Image87" alt=""></div>
<div id="wb_Image88">
<img src="images/b ‫(63972854)‬ ‫‬.png" id="Image88" alt=""></div>
<div id="wb_Image89">
<img src="images/b ‫(63972855)‬ ‫‬.png" id="Image89" alt=""></div>
<div id="wb_YouTube85">
<iframe id="YouTube85" src="https://www.youtube.com/embed/6R8NRtutCzQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image90">
<img src="images/b ‫(63972856)‬ ‫‬.png" id="Image90" alt=""></div>
<div id="wb_Image91">
<img src="images/b ‫(63972857)‬ ‫‬.png" id="Image91" alt=""></div>
<div id="wb_Image92">
<img src="images/b ‫(63972858)‬ ‫‬.png" id="Image92" alt=""></div>
<div id="wb_YouTube89">
<iframe id="YouTube89" src="https://www.youtube.com/embed/zi0Xk-yvhNM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image93">
<img src="images/b ‫(63972859)‬ ‫‬.png" id="Image93" alt=""></div>
<div id="wb_Image94">
<img src="images/b ‫(63972860)‬ ‫‬.png" id="Image94" alt=""></div>
<div id="wb_Image95">
<img src="images/b ‫(63972861)‬ ‫‬.png" id="Image95" alt=""></div>
<div id="wb_Image96">
<img src="images/b ‫(63972862)‬ ‫‬.png" id="Image96" alt=""></div>
<div id="wb_Image97">
<img src="images/b ‫(63972863)‬ ‫‬.png" id="Image97" alt=""></div>
<div id="wb_Image98">
<img src="images/b ‫(63972864)‬ ‫‬.png" id="Image98" alt=""></div>
<div id="wb_Image99">
<img src="images/b ‫(63972865)‬ ‫‬.png" id="Image99" alt=""></div>
<div id="wb_YouTube96">
<iframe id="YouTube96" src="https://www.youtube.com/embed/CUKzLSna9Sw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image100">
<img src="images/b ‫(63972866)‬ ‫‬.png" id="Image100" alt=""></div>
<div id="wb_Shape33">
<img src="images/img0085.png" id="Shape33" alt=""></div>
<div id="wb_Image101">
<img src="images/b ‫(63972867)‬ ‫‬.png" id="Image101" alt=""></div>
<div id="wb_Image102">
<img src="images/b ‫(63972868)‬ ‫‬.png" id="Image102" alt=""></div>
<div id="wb_Image103">
<img src="images/b ‫(63972869)‬ ‫‬.png" id="Image103" alt=""></div>
<div id="wb_Image104">
<img src="images/b ‫(63972870)‬ ‫‬.png" id="Image104" alt=""></div>
</div>
</div>
<div id="PageFooter1">
<div id="PageFooter1_Container">
<div id="wb_Image2">
<img src="images/4.png" id="Image2" alt=""></div>
</div>
</div>
</body>
</html>