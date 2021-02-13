<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>التحصيل االدراسي</title>
<meta name="generator" content="alnamshan7">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="logo2.png" rel="apple-touch-icon" sizes="300x300">
<link href="tahsil-qwq.css" rel="stylesheet">
<link href="page3.css" rel="stylesheet">
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
      <span style="color:#009999;font-family:Arial;font-size:24px;"><strong>الكيمياء</strong></span></div>
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
<img src="images/img0041.png" id="Shape1" alt=""></div>
<div id="Layer1">
</div>
<div id="wb_YouTube1">
<iframe id="YouTube1" src="https://www.youtube.com/embed/rt_BcCpyINQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube2">
<iframe id="YouTube2" src="https://www.youtube.com/embed/FlcH_mYZE5g?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape2">
<img src="images/img0043.png" id="Shape2" alt=""></div>
<div id="wb_YouTube3">
<iframe id="YouTube3" src="https://www.youtube.com/embed/BIndhsARylc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube4">
<iframe id="YouTube4" src="https://www.youtube.com/embed/a1ngz-nTcBM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube5">
<iframe id="YouTube5" src="https://www.youtube.com/embed/ZjUGMymnZIY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube6">
<iframe id="YouTube6" src="https://www.youtube.com/embed/z6XCwwf1BJ0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube7">
<iframe id="YouTube7" src="https://www.youtube.com/embed/IsK4aBbWuCA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube8">
<iframe id="YouTube8" src="https://www.youtube.com/embed/5cBJ_fgWz0U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube9">
<iframe id="YouTube9" src="https://www.youtube.com/embed/Txeu8UajGxU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube10">
<iframe id="YouTube10" src="https://www.youtube.com/embed/_hf8g6HVbGs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube11">
<iframe id="YouTube11" src="https://www.youtube.com/embed/SwhzZnmhuhE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube12">
<iframe id="YouTube12" src="https://www.youtube.com/embed/124ZhcBUy64?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube13">
<iframe id="YouTube13" src="https://www.youtube.com/embed/CRATgFA2rgs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape4">
<img src="images/img0045.png" id="Shape4" alt=""></div>
<div id="wb_YouTube14">
<iframe id="YouTube14" src="https://www.youtube.com/embed/0eZ3SHOPRUE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube15">
<iframe id="YouTube15" src="https://www.youtube.com/embed/V8yLQCeaTbg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube16">
<iframe id="YouTube16" src="https://www.youtube.com/embed/JMZ-CvoAULg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube17">
<iframe id="YouTube17" src="https://www.youtube.com/embed/9FBtgLPC8Lo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape5">
<img src="images/img0046.png" id="Shape5" alt=""></div>
<div id="wb_YouTube21">
<iframe id="YouTube21" src="https://www.youtube.com/embed/94yuxC3mJkk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape6">
<img src="images/img0047.png" id="Shape6" alt=""></div>
<div id="wb_YouTube22">
<iframe id="YouTube22" src="https://www.youtube.com/embed/sIEYgkJwzmw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube23">
<iframe id="YouTube23" src="https://www.youtube.com/embed/jOSj39A7Vbg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube24">
<iframe id="YouTube24" src="https://www.youtube.com/embed/8wS1HMdeaLA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube25">
<iframe id="YouTube25" src="https://www.youtube.com/embed/--HfXzM0JTY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube26">
<iframe id="YouTube26" src="https://www.youtube.com/embed/2bZNb4WEXuk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube19">
<iframe id="YouTube19" src="https://www.youtube.com/embed/DvFURMolTyo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube18">
<iframe id="YouTube18" src="https://www.youtube.com/embed/-7QjvB8IjT4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube20">
<iframe id="YouTube20" src="https://www.youtube.com/embed/N5o9jY8RJzk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape7">
<img src="images/img0049.png" id="Shape7" alt=""></div>
<div id="wb_YouTube27">
<iframe id="YouTube27" src="https://www.youtube.com/embed/WXIRuzwtEug?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube28">
<iframe id="YouTube28" src="https://www.youtube.com/embed/yB-spCWgI30?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube29">
<iframe id="YouTube29" src="https://www.youtube.com/embed/zPSXtVFpHgc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube30">
<iframe id="YouTube30" src="https://www.youtube.com/embed/LJvdUmBg9yk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube31">
<iframe id="YouTube31" src="https://www.youtube.com/embed/PZaPQ6Imk1U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube32">
<iframe id="YouTube32" src="https://www.youtube.com/embed/WnNjNQlhTTk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube33">
<iframe id="YouTube33" src="https://www.youtube.com/embed/ll2fXsD3hgg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube34">
<iframe id="YouTube34" src="https://www.youtube.com/embed/NLkE539eMGE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube35">
<iframe id="YouTube35" src="https://www.youtube.com/embed/2nyt1KHG6RU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube36">
<iframe id="YouTube36" src="https://www.youtube.com/embed/VztOKPMyeKA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube37">
<iframe id="YouTube37" src="https://www.youtube.com/embed/aBQzOW5jRog?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube38">
<iframe id="YouTube38" src="https://www.youtube.com/embed/oVVhQVrgAkU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube39">
<iframe id="YouTube39" src="https://www.youtube.com/embed/b7RewX1AYRU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube40">
<iframe id="YouTube40" src="https://www.youtube.com/embed/CF-yVEJs6Lg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube41">
<iframe id="YouTube41" src="https://www.youtube.com/embed/WNRM88p4DEo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube42">
<iframe id="YouTube42" src="https://www.youtube.com/embed/Qjga2DMgQnw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube43">
<iframe id="YouTube43" src="https://www.youtube.com/embed/57mD5q_2lnU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube44">
<iframe id="YouTube44" src="https://www.youtube.com/embed/9hLZwbCVlxA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube45">
<iframe id="YouTube45" src="https://www.youtube.com/embed/maMI0dhV9VY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube46">
<iframe id="YouTube46" src="https://www.youtube.com/embed/odSkLSknvFQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube47">
<iframe id="YouTube47" src="https://www.youtube.com/embed/ADcRnXtJ_7w?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube48">
<iframe id="YouTube48" src="https://www.youtube.com/embed/b3TbAYLMMpU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube50">
<iframe id="YouTube50" src="https://www.youtube.com/embed/bM2i5uLz3js?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube51">
<iframe id="YouTube51" src="https://www.youtube.com/embed/ZrnhnYjvpAM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape8">
<img src="images/img0050.png" id="Shape8" alt=""></div>
<div id="wb_YouTube52">
<iframe id="YouTube52" src="https://www.youtube.com/embed/Nw6U-KpHN6E?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube53">
<iframe id="YouTube53" src="https://www.youtube.com/embed/b3M5KSE4UWo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube54">
<iframe id="YouTube54" src="https://www.youtube.com/embed/jzbekhd7t8s?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube55">
<iframe id="YouTube55" src="https://www.youtube.com/embed/6GemSE198D8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube56">
<iframe id="YouTube56" src="https://www.youtube.com/embed/cRzxnMHjRNs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube57">
<iframe id="YouTube57" src="https://www.youtube.com/embed/GiVa0njo_Dw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube58">
<iframe id="YouTube58" src="https://www.youtube.com/embed/bRCfBXPWm0o?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube59">
<iframe id="YouTube59" src="https://www.youtube.com/embed/E3YO_0_QDoM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube60">
<iframe id="YouTube60" src="https://www.youtube.com/embed/qYLcqGwnMDg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape9">
<img src="images/img0051.png" id="Shape9" alt=""></div>
<div id="wb_YouTube61">
<iframe id="YouTube61" src="https://www.youtube.com/embed/s-pkB4kXoP4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube62">
<iframe id="YouTube62" src="https://www.youtube.com/embed/w-2ueRVJoZQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube63">
<iframe id="YouTube63" src="https://www.youtube.com/embed/qhoHILlnRas?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube64">
<iframe id="YouTube64" src="https://www.youtube.com/embed/1g8rniVeBkA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube65">
<iframe id="YouTube65" src="https://www.youtube.com/embed/oTEDQrMJfwc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube66">
<iframe id="YouTube66" src="https://www.youtube.com/embed/nWIu05fjYhI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube67">
<iframe id="YouTube67" src="https://www.youtube.com/embed/4YbrgSiio6E?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube68">
<iframe id="YouTube68" src="https://www.youtube.com/embed/uXBSdUm4gu8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube69">
<iframe id="YouTube69" src="https://www.youtube.com/embed/qR0tzzWritM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape11">
<img src="images/img0054.png" id="Shape11" alt=""></div>
<div id="wb_YouTube71">
<iframe id="YouTube71" src="https://www.youtube.com/embed/IEw8fDB8pZs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube72">
<iframe id="YouTube72" src="https://www.youtube.com/embed/ezvKxF8bHFw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape12">
<img src="images/img0055.png" id="Shape12" alt=""></div>
<div id="wb_YouTube73">
<iframe id="YouTube73" src="https://www.youtube.com/embed/o3hW8WvqS28?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube74">
<iframe id="YouTube74" src="https://www.youtube.com/embed/KBJcQjs0p-g?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube75">
<iframe id="YouTube75" src="https://www.youtube.com/embed/d8cT0erJsDk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube76">
<iframe id="YouTube76" src="https://www.youtube.com/embed/8ZpOJyz6IIQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube77">
<iframe id="YouTube77" src="https://www.youtube.com/embed/nJJjoT1aRTM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube79">
<iframe id="YouTube79" src="https://www.youtube.com/embed/pADhWIDXa18?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube80">
<iframe id="YouTube80" src="https://www.youtube.com/embed/W40ErvOiW6U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube81">
<iframe id="YouTube81" src="https://www.youtube.com/embed/Njm6322v48c?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube82">
<iframe id="YouTube82" src="https://www.youtube.com/embed/Jz8p3mvGnrQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube83">
<iframe id="YouTube83" src="https://www.youtube.com/embed/qqaodRZo8Xo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape13">
<img src="images/img0057.png" id="Shape13" alt=""></div>
<div id="wb_YouTube84">
<iframe id="YouTube84" src="https://www.youtube.com/embed/xfh2Y3PYN14?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube86">
<iframe id="YouTube86" src="https://www.youtube.com/embed/Sm7Jrm_EjA4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube87">
<iframe id="YouTube87" src="https://www.youtube.com/embed/QGB1_iLzZTk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube88">
<iframe id="YouTube88" src="https://www.youtube.com/embed/EUedB-n9wtg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube89">
<iframe id="YouTube89" src="https://www.youtube.com/embed/XpC7QIHQEHg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube90">
<iframe id="YouTube90" src="https://www.youtube.com/embed/GIN9IVs54tU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube91">
<iframe id="YouTube91" src="https://www.youtube.com/embed/w9GD7MlK_aU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape14">
<img src="images/img0058.png" id="Shape14" alt=""></div>
<div id="wb_YouTube92">
<iframe id="YouTube92" src="https://www.youtube.com/embed/ZCp-I_1_2Xw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube93">
<iframe id="YouTube93" src="https://www.youtube.com/embed/oNri4ulIftA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube94">
<iframe id="YouTube94" src="https://www.youtube.com/embed/80pmW8jKp3U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube95">
<iframe id="YouTube95" src="https://www.youtube.com/embed/YECevgUc83A?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape15">
<img src="images/img0059.png" id="Shape15" alt=""></div>
<div id="wb_YouTube96">
<iframe id="YouTube96" src="https://www.youtube.com/embed/h50w9lqgi0w?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube97">
<iframe id="YouTube97" src="https://www.youtube.com/embed/6S0CHjKypUI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube98">
<iframe id="YouTube98" src="https://www.youtube.com/embed/ascA5C30N7E?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube99">
<iframe id="YouTube99" src="https://www.youtube.com/embed/w4wa0S5xVEY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube100">
<iframe id="YouTube100" src="https://www.youtube.com/embed/7YKpekQ6u0E?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image4">
<img src="images/k ‫-1‬.png" id="Image4" alt=""></div>
<div id="wb_Image5">
<img src="images/k ‫(1)‬ ‫‬.png" id="Image5" alt=""></div>
<div id="wb_Image6">
<img src="images/k ‫(247236813)‬ ‫‬.png" id="Image6" alt=""></div>
<div id="wb_Image7">
<img src="images/k ‫(247236814)‬ ‫‬.png" id="Image7" alt=""></div>
<div id="wb_Image8">
<img src="images/k ‫(247236815)‬ ‫‬.png" id="Image8" alt=""></div>
<div id="wb_Image9">
<img src="images/k ‫(247236816)‬ ‫‬.png" id="Image9" alt=""></div>
<div id="wb_Image10">
<img src="images/k ‫(247236817)‬ ‫‬.png" id="Image10" alt=""></div>
<div id="wb_Image11">
<img src="images/k ‫(247236818)‬ ‫‬.png" id="Image11" alt=""></div>
<div id="wb_Image12">
<img src="images/k ‫(247236819)‬ ‫‬.png" id="Image12" alt=""></div>
<div id="wb_Image13">
<img src="images/k ‫(247236820)‬ ‫‬.png" id="Image13" alt=""></div>
<div id="wb_Image14">
<img src="images/k ‫(247236821)‬ ‫‬.png" id="Image14" alt=""></div>
<div id="wb_Image15">
<img src="images/k ‫(247236822)‬ ‫‬.png" id="Image15" alt=""></div>
<div id="wb_Image16">
<img src="images/k ‫(247236823)‬ ‫‬.png" id="Image16" alt=""></div>
<div id="wb_Image17">
<img src="images/k ‫(247236824)‬ ‫‬.png" id="Image17" alt=""></div>
<div id="wb_Image18">
<img src="images/k ‫(247236825)‬ ‫‬.png" id="Image18" alt=""></div>
<div id="wb_Image19">
<img src="images/k ‫(247236826)‬ ‫‬.png" id="Image19" alt=""></div>
<div id="wb_Image20">
<img src="images/k ‫(247236827)‬ ‫‬.png" id="Image20" alt=""></div>
<div id="wb_Image21">
<img src="images/k ‫(247236828)‬ ‫‬.png" id="Image21" alt=""></div>
<div id="wb_Image22">
<img src="images/k ‫(247236829)‬ ‫‬.png" id="Image22" alt=""></div>
<div id="wb_Image23">
<img src="images/k ‫(247236830)‬ ‫‬.png" id="Image23" alt=""></div>
<div id="wb_Image24">
<img src="images/k ‫(247236831)‬ ‫‬.png" id="Image24" alt=""></div>
<div id="wb_Image25">
<img src="images/k ‫(247236832)‬ ‫‬.png" id="Image25" alt=""></div>
<div id="wb_Image26">
<img src="images/k ‫(247236833)‬ ‫‬.png" id="Image26" alt=""></div>
<div id="wb_Image27">
<img src="images/k ‫(247236834)‬ ‫‬.png" id="Image27" alt=""></div>
<div id="wb_Image28">
<img src="images/k ‫(247236835)‬ ‫‬.png" id="Image28" alt=""></div>
<div id="wb_Image29">
<img src="images/k ‫(247236836)‬ ‫‬.png" id="Image29" alt=""></div>
<div id="wb_Image30">
<img src="images/k ‫(247236837)‬ ‫‬.png" id="Image30" alt=""></div>
<div id="wb_Image31">
<img src="images/k ‫(247236838)‬ ‫‬.png" id="Image31" alt=""></div>
<div id="wb_Image32">
<img src="images/k ‫(247236839)‬ ‫‬.png" id="Image32" alt=""></div>
<div id="wb_Image33">
<img src="images/k ‫(247236840)‬ ‫‬.png" id="Image33" alt=""></div>
<div id="wb_Image34">
<img src="images/k ‫(247236841)‬ ‫‬.png" id="Image34" alt=""></div>
<div id="wb_Image35">
<img src="images/k ‫(247236842)‬ ‫‬.png" id="Image35" alt=""></div>
<div id="wb_Image36">
<img src="images/k ‫(247236843)‬ ‫‬.png" id="Image36" alt=""></div>
<div id="wb_Image37">
<img src="images/k ‫(247236844)‬ ‫‬.png" id="Image37" alt=""></div>
<div id="wb_Image38">
<img src="images/k ‫(247236845)‬ ‫‬.png" id="Image38" alt=""></div>
<div id="wb_Image39">
<img src="images/k ‫(247236846)‬ ‫‬.png" id="Image39" alt=""></div>
<div id="wb_Image40">
<img src="images/k ‫(247236847)‬ ‫‬.png" id="Image40" alt=""></div>
<div id="wb_Image41">
<img src="images/k ‫(247236848)‬ ‫‬.png" id="Image41" alt=""></div>
<div id="wb_Image42">
<img src="images/k ‫(247236849)‬ ‫‬.png" id="Image42" alt=""></div>
<div id="wb_Image43">
<img src="images/k ‫(247236850)‬ ‫‬.png" id="Image43" alt=""></div>
<div id="wb_Image44">
<img src="images/k ‫(247236851)‬ ‫‬.png" id="Image44" alt=""></div>
<div id="wb_Image45">
<img src="images/k ‫(247236852)‬ ‫‬.png" id="Image45" alt=""></div>
<div id="wb_Image46">
<img src="images/k ‫(247236853)‬ ‫‬.png" id="Image46" alt=""></div>
<div id="wb_Image47">
<img src="images/k ‫(247236854)‬ ‫‬.png" id="Image47" alt=""></div>
<div id="wb_Image48">
<img src="images/k ‫(247236855)‬ ‫‬.png" id="Image48" alt=""></div>
<div id="wb_Image49">
<img src="images/k ‫(247236856)‬ ‫‬.png" id="Image49" alt=""></div>
<div id="wb_Image50">
<img src="images/k ‫(247236857)‬ ‫‬.png" id="Image50" alt=""></div>
<div id="wb_Image51">
<img src="images/k ‫(247236858)‬ ‫‬.png" id="Image51" alt=""></div>
<div id="wb_Image52">
<img src="images/k ‫(247236859)‬ ‫‬.png" id="Image52" alt=""></div>
<div id="wb_YouTube49">
<iframe id="YouTube49" src="https://www.youtube.com/embed/G914ykDMi4o?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image53">
<img src="images/k ‫(247236860)‬ ‫‬.png" id="Image53" alt=""></div>
<div id="wb_Image54">
<img src="images/k ‫(247236861)‬ ‫‬.png" id="Image54" alt=""></div>
<div id="wb_Image55">
<img src="images/k ‫(247236862)‬ ‫‬.png" id="Image55" alt=""></div>
<div id="wb_Image56">
<img src="images/k ‫(247236863)‬ ‫‬.png" id="Image56" alt=""></div>
<div id="wb_Image57">
<img src="images/k ‫(247236864)‬ ‫‬.png" id="Image57" alt=""></div>
<div id="wb_Image58">
<img src="images/k ‫(247236865)‬ ‫‬.png" id="Image58" alt=""></div>
<div id="wb_Image59">
<img src="images/k ‫(247236866)‬ ‫‬.png" id="Image59" alt=""></div>
<div id="wb_Image60">
<img src="images/k ‫(247236867)‬ ‫‬.png" id="Image60" alt=""></div>
<div id="wb_Image61">
<img src="images/k ‫(247236868)‬ ‫‬.png" id="Image61" alt=""></div>
<div id="wb_Image62">
<img src="images/k ‫(247236869)‬ ‫‬.png" id="Image62" alt=""></div>
<div id="wb_Image63">
<img src="images/k ‫(247236870)‬ ‫‬.png" id="Image63" alt=""></div>
<div id="wb_Image64">
<img src="images/k ‫(247236871)‬ ‫‬.png" id="Image64" alt=""></div>
<div id="wb_Image65">
<img src="images/k ‫(247236872)‬ ‫‬.png" id="Image65" alt=""></div>
<div id="wb_Image66">
<img src="images/k ‫(247236873)‬ ‫‬.png" id="Image66" alt=""></div>
<div id="wb_Image67">
<img src="images/k ‫(247236874)‬ ‫‬.png" id="Image67" alt=""></div>
<div id="wb_Image68">
<img src="images/k ‫(247236875)‬ ‫‬.png" id="Image68" alt=""></div>
<div id="wb_Image69">
<img src="images/k ‫(247236876)‬ ‫‬.png" id="Image69" alt=""></div>
<div id="wb_Image70">
<img src="images/k ‫(247236877)‬ ‫‬.png" id="Image70" alt=""></div>
<div id="wb_Image71">
<img src="images/k ‫(247236878)‬ ‫‬.png" id="Image71" alt=""></div>
<div id="wb_Shape10">
<img src="images/img0053.png" id="Shape10" alt=""></div>
<div id="wb_Image72">
<img src="images/k ‫(247236879)‬ ‫‬.png" id="Image72" alt=""></div>
<div id="wb_Image73">
<img src="images/k ‫(247236880)‬ ‫‬.png" id="Image73" alt=""></div>
<div id="wb_YouTube70">
<iframe id="YouTube70" src="https://www.youtube.com/embed/ZkKrJWzsOiU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image74">
<img src="images/k ‫(247236881)‬ ‫‬.png" id="Image74" alt=""></div>
<div id="wb_Image75">
<img src="images/k ‫(247236882)‬ ‫‬.png" id="Image75" alt=""></div>
<div id="wb_Image76">
<img src="images/k ‫(247236883)‬ ‫‬.png" id="Image76" alt=""></div>
<div id="wb_Image77">
<img src="images/k ‫(247236884)‬ ‫‬.png" id="Image77" alt=""></div>
<div id="wb_Image78">
<img src="images/k ‫(247236885)‬ ‫‬.png" id="Image78" alt=""></div>
<div id="wb_Image79">
<img src="images/k ‫(247236886)‬ ‫‬.png" id="Image79" alt=""></div>
<div id="wb_Image80">
<img src="images/k ‫(247236887)‬ ‫‬.png" id="Image80" alt=""></div>
<div id="wb_YouTube78">
<iframe id="YouTube78" src="https://www.youtube.com/embed/3Ld7gDi3SFY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image81">
<img src="images/k ‫(247236888)‬ ‫‬.png" id="Image81" alt=""></div>
<div id="wb_Image82">
<img src="images/k ‫(247236889)‬ ‫‬.png" id="Image82" alt=""></div>
<div id="wb_Image83">
<img src="images/k ‫(247236890)‬ ‫‬.png" id="Image83" alt=""></div>
<div id="wb_Image84">
<img src="images/k ‫(247236891)‬ ‫‬.png" id="Image84" alt=""></div>
<div id="wb_Image85">
<img src="images/k ‫(247236892)‬ ‫‬.png" id="Image85" alt=""></div>
<div id="wb_Image86">
<img src="images/k ‫(247236893)‬ ‫‬.png" id="Image86" alt=""></div>
<div id="wb_Image87">
<img src="images/k ‫(247236894)‬ ‫‬.png" id="Image87" alt=""></div>
<div id="wb_Image88">
<img src="images/k ‫(247236895)‬ ‫‬.png" id="Image88" alt=""></div>
<div id="wb_YouTube85">
<iframe id="YouTube85" src="https://www.youtube.com/embed/Dsood1H1ugk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image89">
<img src="images/k ‫(247236896)‬ ‫‬.png" id="Image89" alt=""></div>
<div id="wb_Image90">
<img src="images/k ‫(247236897)‬ ‫‬.png" id="Image90" alt=""></div>
<div id="wb_Image91">
<img src="images/k ‫(247236898)‬ ‫‬.png" id="Image91" alt=""></div>
<div id="wb_Image92">
<img src="images/k ‫(247236899)‬ ‫‬.png" id="Image92" alt=""></div>
<div id="wb_Image93">
<img src="images/k ‫(247236900)‬ ‫‬.png" id="Image93" alt=""></div>
<div id="wb_Image94">
<img src="images/k ‫(247236901)‬ ‫‬.png" id="Image94" alt=""></div>
<div id="wb_Image95">
<img src="images/k ‫(247236902)‬ ‫‬.png" id="Image95" alt=""></div>
<div id="wb_Image96">
<img src="images/k ‫(247236903)‬ ‫‬.png" id="Image96" alt=""></div>
<div id="wb_Image97">
<img src="images/k ‫(247236904)‬ ‫‬.png" id="Image97" alt=""></div>
<div id="wb_Image98">
<img src="images/k ‫(247236905)‬ ‫‬.png" id="Image98" alt=""></div>
<div id="wb_Image99">
<img src="images/k ‫(247236906)‬ ‫‬.png" id="Image99" alt=""></div>
<div id="wb_Image100">
<img src="images/k ‫(247236907)‬ ‫‬.png" id="Image100" alt=""></div>
<div id="wb_Image101">
<img src="images/k ‫(247236908)‬ ‫‬.png" id="Image101" alt=""></div>
<div id="wb_Image102">
<img src="images/k ‫(247236909)‬ ‫‬.png" id="Image102" alt=""></div>
<div id="wb_Image103">
<img src="images/k ‫(247236910)‬ ‫‬.png" id="Image103" alt=""></div>
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