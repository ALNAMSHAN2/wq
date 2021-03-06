<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>التحصيل االدراسي</title>
<meta name="generator" content="alnamshan7">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="logo2.png" rel="apple-touch-icon" sizes="300x300">
<link href="tahsil-qwq.css" rel="stylesheet">
<link href="page1.css" rel="stylesheet">
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
      <span style="color:#009999;font-family:Arial;font-size:24px;"><strong>الفيزياء</strong></span></div>
   <div id="wb_Image1">
      <img src="images/logo2.png" id="Image1" alt=""></div>
   <div id="wb_Image3">
      <a href="./index.php"><img src="images/2-2-home-png-file.png" id="Image3" alt=""></a></div>
   <div id="wb_Text2">
      <span style="color:#009999;font-family:Arial;font-size:15px;"><strong><a href="./index.php">العودة للرئيسة</a></strong></span></div>
</div>
<div id="home">
<div id="home_Container">

<div id="wb_Image5">
<img src="images/صورة1.png" id="Image5" alt=""></div>
<div id="wb_YouTube1">
<iframe id="YouTube1" src="https://www.youtube.com/embed/jUroNr2NtKQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube2">
<iframe id="YouTube2" src="https://www.youtube.com/embed/Tq8TkWaYlIo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape3">
<img src="images/img0003.png" id="Shape3" alt=""></div>
<div id="wb_YouTube3">
<iframe id="YouTube3" src="https://www.youtube.com/embed/j_VbF8FCKFw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube4">
<iframe id="YouTube4" src="https://www.youtube.com/embed/BqJMWHGpY1k?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube5">
<iframe id="YouTube5" src="https://www.youtube.com/embed/o1ZQZgC1AFQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube7">
<iframe id="YouTube7" src="https://www.youtube.com/embed/c2I6iWIN3VM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube8">
<iframe id="YouTube8" src="https://www.youtube.com/embed/FpzzcCzmx-o?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape7">
<img src="images/img0007.png" id="Shape7" alt=""></div>
<div id="wb_Shape11">
<img src="images/img0011.png" id="Shape11" alt=""></div>
<div id="wb_YouTube9">
<iframe id="YouTube9" src="https://www.youtube.com/embed/XLqH89MR8Ps?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube10">
<iframe id="YouTube10" src="https://www.youtube.com/embed/sknHy2xDf0Q?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube11">
<iframe id="YouTube11" src="https://www.youtube.com/embed/Fw_gNiEQE7Q?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube12">
<iframe id="YouTube12" src="https://www.youtube.com/embed/GwvhzwMH-Qo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube13">
<iframe id="YouTube13" src="https://www.youtube.com/embed/I3I6KAxwhdU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube14">
<iframe id="YouTube14" src="https://www.youtube.com/embed/CiZYJg52jaM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube15">
<iframe id="YouTube15" src="https://www.youtube.com/embed/jm5YMfEslJI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube16">
<iframe id="YouTube16" src="https://www.youtube.com/embed/xfgN-9N0viw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube17">
<iframe id="YouTube17" src="https://www.youtube.com/embed/gTNatHpcB5s?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube18">
<iframe id="YouTube18" src="https://www.youtube.com/embed/1JlioBP7-H4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube19">
<iframe id="YouTube19" src="https://www.youtube.com/embed/JcEfieJc1YE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube20">
<iframe id="YouTube20" src="https://www.youtube.com/embed/n9reJgMXf4A?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape24">
<img src="images/img0025.png" id="Shape24" alt=""></div>
<div id="wb_Shape20">
<img src="images/img0021.png" id="Shape20" alt=""></div>
<div id="wb_Shape15">
<img src="images/img0015.png" id="Shape15" alt=""></div>
<div id="wb_YouTube21">
<iframe id="YouTube21" src="https://www.youtube.com/embed/VIpBOPW78G0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape28">
<img src="images/img0028.png" id="Shape28" alt=""></div>
<div id="wb_YouTube22">
<iframe id="YouTube22" src="https://www.youtube.com/embed/FDkmFHTTnAA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube23">
<iframe id="YouTube23" src="https://www.youtube.com/embed/QLERULHKA4U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube24">
<iframe id="YouTube24" src="https://www.youtube.com/embed/nnY9wV-f0Xo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube25">
<iframe id="YouTube25" src="https://www.youtube.com/embed/mtIyXhYxgQk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube26">
<iframe id="YouTube26" src="https://www.youtube.com/embed/C59bjE8vBME?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube27">
<iframe id="YouTube27" src="https://www.youtube.com/embed/1-PHXPZ-Cuk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube28">
<iframe id="YouTube28" src="https://www.youtube.com/embed/FZlsnNEPQgY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube30">
<iframe id="YouTube30" src="https://www.youtube.com/embed/Iu9mpXDFmMY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube31">
<iframe id="YouTube31" src="https://www.youtube.com/embed/PksCoJ0oj8w?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube32">
<iframe id="YouTube32" src="https://www.youtube.com/embed/jeT_mfLTg30?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube34">
<iframe id="YouTube34" src="https://www.youtube.com/embed/0qzIHpYjNHk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube35">
<iframe id="YouTube35" src="https://www.youtube.com/embed/E5fTWRZHAUA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube36">
<iframe id="YouTube36" src="https://www.youtube.com/embed/tSn_vHSGkBs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape5">
<img src="images/img0001.png" id="Shape5" alt=""></div>
<div id="wb_YouTube38">
<iframe id="YouTube38" src="https://www.youtube.com/embed/pkMwB425HvM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube39">
<iframe id="YouTube39" src="https://www.youtube.com/embed/DctufnHQ5NA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube40">
<iframe id="YouTube40" src="https://www.youtube.com/embed/aaNTFfrBVAA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube41">
<iframe id="YouTube41" src="https://www.youtube.com/embed/rgt4VF7rTKI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube42">
<iframe id="YouTube42" src="https://www.youtube.com/embed/ON6S1M23wR4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube43">
<iframe id="YouTube43" src="https://www.youtube.com/embed/22zZOW3UI1Q?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube44">
<iframe id="YouTube44" src="https://www.youtube.com/embed/8UrATDCvoy0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube45">
<iframe id="YouTube45" src="https://www.youtube.com/embed/R1DunXnYbn4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube46">
<iframe id="YouTube46" src="https://www.youtube.com/embed/gfMNwzqOptg?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube50">
<iframe id="YouTube50" src="https://www.youtube.com/embed/dz0X-_J7BX4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape68">
<img src="images/img0037.png" id="Shape68" alt=""></div>
<div id="wb_YouTube51">
<iframe id="YouTube51" src="https://www.youtube.com/embed/vH7as-ufSz0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube52">
<iframe id="YouTube52" src="https://www.youtube.com/embed/xuWz-JBGvho?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape71">
<img src="images/img0040.png" id="Shape71" alt=""></div>
<div id="wb_Shape75">
<img src="images/img0044.png" id="Shape75" alt=""></div>
<div id="wb_YouTube56">
<iframe id="YouTube56" src="https://www.youtube.com/embed/V-tFmKlteJM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube57">
<iframe id="YouTube57" src="https://www.youtube.com/embed/Jypr_Pg6zU8?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube58">
<iframe id="YouTube58" src="https://www.youtube.com/embed/_nzHq2xMR_s?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape79">
<img src="images/img0048.png" id="Shape79" alt=""></div>
<div id="wb_YouTube59">
<iframe id="YouTube59" src="https://www.youtube.com/embed/GFjkwnogkyM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube60">
<iframe id="YouTube60" src="https://www.youtube.com/embed/hDopjiLL-Ys?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube61">
<iframe id="YouTube61" src="https://www.youtube.com/embed/UQLerSOrklU?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape83">
<img src="images/img0052.png" id="Shape83" alt=""></div>
<div id="wb_YouTube62">
<iframe id="YouTube62" src="https://www.youtube.com/embed/JVsvr_pZ730?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube63">
<iframe id="YouTube63" src="https://www.youtube.com/embed/Ik_yWiXe0qw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape87">
<img src="images/img0056.png" id="Shape87" alt=""></div>
<div id="wb_YouTube64">
<iframe id="YouTube64" src="https://www.youtube.com/embed/JMH6vUoTWzI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube65">
<iframe id="YouTube65" src="https://www.youtube.com/embed/ImAlLJLOstA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape33">
<img src="images/img0061.png" id="Shape33" alt=""></div>
<div id="wb_Shape37">
<img src="images/img0065.png" id="Shape37" alt=""></div>
<div id="wb_Shape43">
<img src="images/img0070.png" id="Shape43" alt=""></div>
<div id="wb_Shape45">
<img src="images/img0071.png" id="Shape45" alt=""></div>
<div id="wb_YouTube33">
<iframe id="YouTube33" src="https://www.youtube.com/embed/ZtXer7xNpLI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape50">
<img src="images/img0075.png" id="Shape50" alt=""></div>
<div id="wb_Shape61">
<img src="images/img0084.png" id="Shape61" alt=""></div>
<div id="wb_Shape67">
<img src="images/img0087.png" id="Shape67" alt=""></div>
<div id="wb_YouTube47">
<iframe id="YouTube47" src="https://www.youtube.com/embed/TK62_4l-CQc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube48">
<iframe id="YouTube48" src="https://www.youtube.com/embed/w8oBll4rKmQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube49">
<iframe id="YouTube49" src="https://www.youtube.com/embed/qCCx3pMOxIA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube53">
<iframe id="YouTube53" src="https://www.youtube.com/embed/8nxB-CbndGY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube54">
<iframe id="YouTube54" src="https://www.youtube.com/embed/yn5PW9t7hXY?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube66">
<iframe id="YouTube66" src="https://www.youtube.com/embed/7FGPkembtL0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube67">
<iframe id="YouTube67" src="https://www.youtube.com/embed/yZYCsS0IwRk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape1">
<img src="images/img0004.png" id="Shape1" alt=""></div>
<div id="wb_YouTube68">
<iframe id="YouTube68" src="https://www.youtube.com/embed/ABSGMrIKveo?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube69">
<iframe id="YouTube69" src="https://www.youtube.com/embed/17gRpKRwpAc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube70">
<iframe id="YouTube70" src="https://www.youtube.com/embed/l25Glzy6uQ4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube71">
<iframe id="YouTube71" src="https://www.youtube.com/embed/VuB_PgLdoS4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape2">
<img src="images/img0062.png" id="Shape2" alt=""></div>
<div id="wb_YouTube72">
<iframe id="YouTube72" src="https://www.youtube.com/embed/BoRoVJjqpko?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube73">
<iframe id="YouTube73" src="https://www.youtube.com/embed/LXY5lJmxuxk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube74">
<iframe id="YouTube74" src="https://www.youtube.com/embed/u1Jy0yv_91M?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube75">
<iframe id="YouTube75" src="https://www.youtube.com/embed/mUq0j4q59Fc?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape4">
<img src="images/img0074.png" id="Shape4" alt=""></div>
<div id="wb_YouTube76">
<iframe id="YouTube76" src="https://www.youtube.com/embed/AtCcoBdmEB4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube77">
<iframe id="YouTube77" src="https://www.youtube.com/embed/QBzhBkhnP04?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube78">
<iframe id="YouTube78" src="https://www.youtube.com/embed/OyO8w08z1BQ?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube79">
<iframe id="YouTube79" src="https://www.youtube.com/embed/Dfbl0JUHeX0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube80">
<iframe id="YouTube80" src="https://www.youtube.com/embed/UPrPR4S7AnM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube81">
<iframe id="YouTube81" src="https://www.youtube.com/embed/s-leZXvFb70?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube29">
<iframe id="YouTube29" src="https://www.youtube.com/embed/irV5Me7FC0M?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape8">
<img src="images/img0076.png" id="Shape8" alt=""></div>
<div id="wb_YouTube82">
<iframe id="YouTube82" src="https://www.youtube.com/embed/WELrdS_wZbk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube83">
<iframe id="YouTube83" src="https://www.youtube.com/embed/v1nPO6zUMBk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube84">
<iframe id="YouTube84" src="https://www.youtube.com/embed/25ODcSjVOmA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube85">
<iframe id="YouTube85" src="https://www.youtube.com/embed/OLbEF1MNscs?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube86">
<iframe id="YouTube86" src="https://www.youtube.com/embed/XDwTXYna1cI?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape9">
<img src="images/img0077.png" id="Shape9" alt=""></div>
<div id="wb_YouTube87">
<iframe id="YouTube87" src="https://www.youtube.com/embed/5qEfVeB4XM4?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube88">
<iframe id="YouTube88" src="https://www.youtube.com/embed/ZDbOJ_Zc0_U?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube89">
<iframe id="YouTube89" src="https://www.youtube.com/embed/eahv4wkzak0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape10">
<img src="images/img0078.png" id="Shape10" alt=""></div>
<div id="wb_YouTube90">
<iframe id="YouTube90" src="https://www.youtube.com/embed/tRZwAR8m52I?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube91">
<iframe id="YouTube91" src="https://www.youtube.com/embed/afdIGcdjJTE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube92">
<iframe id="YouTube92" src="https://www.youtube.com/embed/dHWYnfnMQrM?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube93">
<iframe id="YouTube93" src="https://www.youtube.com/embed/lZ18wpb_a28?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube95">
<iframe id="YouTube95" src="https://www.youtube.com/embed/ap6_mmvFzng?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape12">
<img src="images/img0079.png" id="Shape12" alt=""></div>
<div id="wb_YouTube96">
<iframe id="YouTube96" src="https://www.youtube.com/embed/TgZFtpxAwgw?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube97">
<iframe id="YouTube97" src="https://www.youtube.com/embed/6-BKSvdUQB0?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Shape13">
<img src="images/img0080.png" id="Shape13" alt=""></div>
<div id="wb_YouTube98">
<iframe id="YouTube98" src="https://www.youtube.com/embed/hnhFDxZIT_Q?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube99">
<iframe id="YouTube99" src="https://www.youtube.com/embed/jO0e7wXOZcA?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_YouTube100">
<iframe id="YouTube100" src="https://www.youtube.com/embed/yI0cMGdgv7I?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Text3">
<span style="color:#009999;font-family:Arial;font-size:27px;"><strong>نتمنى لكم دوام التوفيق<br>لاتنسى التسجيل معنا</strong></span></div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:15px;"><a href="https://www.kaaf.edu.sa" target="_blank">www.kaaf.edu.sa</a></span></div>
<div id="Layer1">
</div>
<div id="wb_Image4">
<img src="images/صورة2.png" id="Image4" alt=""></div>
<div id="wb_Image6">
<img src="images/صورة3.png" id="Image6" alt=""></div>
<div id="wb_Image7">
<img src="images/صورة4.png" id="Image7" alt=""></div>
<div id="wb_Image8">
<img src="images/صورة5.png" id="Image8" alt=""></div>
<div id="wb_YouTube6">
<iframe id="YouTube6" src="https://www.youtube.com/embed/ALbyuUFlLjk?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image9">
<img src="images/صورة6.png" id="Image9" alt=""></div>
<div id="wb_Image10">
<img src="images/صورة7.png" id="Image10" alt=""></div>
<div id="wb_Image11">
<img src="images/صورة8.png" id="Image11" alt=""></div>
<div id="wb_Image12">
<img src="images/صورة9.png" id="Image12" alt=""></div>
<div id="wb_Image13">
<img src="images/صورة10.png" id="Image13" alt=""></div>
<div id="wb_Image14">
<img src="images/صورة11.png" id="Image14" alt=""></div>
<div id="wb_Image15">
<img src="images/صورة12.png" id="Image15" alt=""></div>
<div id="wb_Image16">
<img src="images/صورة13.png" id="Image16" alt=""></div>
<div id="wb_Image17">
<img src="images/صورة14.png" id="Image17" alt=""></div>
<div id="wb_Image18">
<img src="images/صورة15.png" id="Image18" alt=""></div>
<div id="wb_Image19">
<img src="images/صورة16.png" id="Image19" alt=""></div>
<div id="wb_Image20">
<img src="images/صورة17.png" id="Image20" alt=""></div>
<div id="wb_Image21">
<img src="images/صورة18.png" id="Image21" alt=""></div>
<div id="wb_Image22">
<img src="images/صورة19.png" id="Image22" alt=""></div>
<div id="wb_Image23">
<img src="images/صورة20.png" id="Image23" alt=""></div>
<div id="wb_Image24">
<img src="images/صورة21.png" id="Image24" alt=""></div>
<div id="wb_Image25">
<img src="images/صورة22.png" id="Image25" alt=""></div>
<div id="wb_Image26">
<img src="images/صورة23.png" id="Image26" alt=""></div>
<div id="wb_Image27">
<img src="images/صورة24.png" id="Image27" alt=""></div>
<div id="wb_Image28">
<img src="images/صورة25.png" id="Image28" alt=""></div>
<div id="wb_Image29">
<img src="images/صورة26.png" id="Image29" alt=""></div>
<div id="wb_Image30">
<img src="images/صورة27.png" id="Image30" alt=""></div>
<div id="wb_Image31">
<img src="images/صورة28.png" id="Image31" alt=""></div>
<div id="wb_Image32">
<img src="images/صورة29.png" id="Image32" alt=""></div>
<div id="wb_Image33">
<img src="images/صورة30.png" id="Image33" alt=""></div>
<div id="wb_Image34">
<img src="images/صورة31.png" id="Image34" alt=""></div>
<div id="wb_Image35">
<img src="images/صورة32.png" id="Image35" alt=""></div>
<div id="wb_Image36">
<img src="images/صورة33.png" id="Image36" alt=""></div>
<div id="wb_Image37">
<img src="images/صورة34.png" id="Image37" alt=""></div>
<div id="wb_Image38">
<img src="images/صورة35.png" id="Image38" alt=""></div>
<div id="wb_Image39">
<img src="images/صورة36.png" id="Image39" alt=""></div>
<div id="wb_Image40">
<img src="images/صورة37.png" id="Image40" alt=""></div>
<div id="wb_YouTube37">
<iframe id="YouTube37" src="https://www.youtube.com/embed/pCwFufpRY8c?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image41">
<img src="images/صورة38.png" id="Image41" alt=""></div>
<div id="wb_Image42">
<img src="images/صورة39.png" id="Image42" alt=""></div>
<div id="wb_Image43">
<img src="images/صورة40.png" id="Image43" alt=""></div>
<div id="wb_Image44">
<img src="images/صورة41.png" id="Image44" alt=""></div>
<div id="wb_Image45">
<img src="images/صورة42.png" id="Image45" alt=""></div>
<div id="wb_Image46">
<img src="images/صورة43.png" id="Image46" alt=""></div>
<div id="wb_Image47">
<img src="images/صورة44.png" id="Image47" alt=""></div>
<div id="wb_Image48">
<img src="images/صورة45.png" id="Image48" alt=""></div>
<div id="wb_Image49">
<img src="images/صورة46.png" id="Image49" alt=""></div>
<div id="wb_Image50">
<img src="images/صورة47.png" id="Image50" alt=""></div>
<div id="wb_Image51">
<img src="images/صورة48.png" id="Image51" alt=""></div>
<div id="wb_Image52">
<img src="images/صورة49.png" id="Image52" alt=""></div>
<div id="wb_Image53">
<img src="images/صورة50.png" id="Image53" alt=""></div>
<div id="wb_Image54">
<img src="images/صورة51.png" id="Image54" alt=""></div>
<div id="wb_Image55">
<img src="images/صورة52.png" id="Image55" alt=""></div>
<div id="wb_Image56">
<img src="images/صورة53.png" id="Image56" alt=""></div>
<div id="wb_Image57">
<img src="images/صورة54.png" id="Image57" alt=""></div>
<div id="wb_Image58">
<img src="images/صورة55.png" id="Image58" alt=""></div>
<div id="wb_YouTube55">
<iframe id="YouTube55" src="https://www.youtube.com/embed/wKVIOS-afow?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image59">
<img src="images/صورة56.png" id="Image59" alt=""></div>
<div id="wb_Image60">
<img src="images/صورة57.png" id="Image60" alt=""></div>
<div id="wb_Image61">
<img src="images/صورة58.png" id="Image61" alt=""></div>
<div id="wb_Image62">
<img src="images/صورة59.png" id="Image62" alt=""></div>
<div id="wb_Image63">
<img src="images/صورة60.png" id="Image63" alt=""></div>
<div id="wb_Image64">
<img src="images/صورة61.png" id="Image64" alt=""></div>
<div id="wb_Image65">
<img src="images/صورة62.png" id="Image65" alt=""></div>
<div id="wb_Image66">
<img src="images/صورة63.png" id="Image66" alt=""></div>
<div id="wb_Image67">
<img src="images/صورة64.png" id="Image67" alt=""></div>
<div id="wb_Image68">
<img src="images/صورة65.png" id="Image68" alt=""></div>
<div id="wb_Image69">
<img src="images/صورة66.png" id="Image69" alt=""></div>
<div id="wb_Image70">
<img src="images/صورة67.png" id="Image70" alt=""></div>
<div id="wb_Image71">
<img src="images/صورة68.png" id="Image71" alt=""></div>
<div id="wb_Image72">
<img src="images/صورة69.png" id="Image72" alt=""></div>
<div id="wb_Image73">
<img src="images/صورة70.png" id="Image73" alt=""></div>
<div id="wb_Image74">
<img src="images/صورة71.png" id="Image74" alt=""></div>
<div id="wb_Image75">
<img src="images/صورة72.png" id="Image75" alt=""></div>
<div id="wb_Image76">
<img src="images/صورة73.png" id="Image76" alt=""></div>
<div id="wb_Image77">
<img src="images/صورة74.png" id="Image77" alt=""></div>
<div id="wb_Image78">
<img src="images/صورة75.png" id="Image78" alt=""></div>
<div id="wb_Image79">
<img src="images/صورة76.png" id="Image79" alt=""></div>
<div id="wb_Image80">
<img src="images/صورة77.png" id="Image80" alt=""></div>
<div id="wb_Image81">
<img src="images/صورة78.png" id="Image81" alt=""></div>
<div id="wb_Image82">
<img src="images/صورة79.png" id="Image82" alt=""></div>
<div id="wb_Image83">
<img src="images/صورة80.png" id="Image83" alt=""></div>
<div id="wb_Shape6">
<img src="images/img0081.png" id="Shape6" alt=""></div>
<div id="wb_Image84">
<img src="images/صورة81.png" id="Image84" alt=""></div>
<div id="wb_Image85">
<img src="images/صورة82.png" id="Image85" alt=""></div>
<div id="wb_Image86">
<img src="images/صورة83.png" id="Image86" alt=""></div>
<div id="wb_Image87">
<img src="images/صورة84.png" id="Image87" alt=""></div>
<div id="wb_Image88">
<img src="images/صورة85.png" id="Image88" alt=""></div>
<div id="wb_Image89">
<img src="images/صورة86.png" id="Image89" alt=""></div>
<div id="wb_Image90">
<img src="images/صورة87.png" id="Image90" alt=""></div>
<div id="wb_Image91">
<img src="images/صورة88.png" id="Image91" alt=""></div>
<div id="wb_Image92">
<img src="images/صورة89.png" id="Image92" alt=""></div>
<div id="wb_Image93">
<img src="images/صورة90.png" id="Image93" alt=""></div>
<div id="wb_Image94">
<img src="images/صورة91.png" id="Image94" alt=""></div>
<div id="wb_Image95">
<img src="images/صورة92.png" id="Image95" alt=""></div>
<div id="wb_Image96">
<img src="images/صورة93.png" id="Image96" alt=""></div>
<div id="wb_Image97">
<img src="images/صورة94.png" id="Image97" alt=""></div>
<div id="wb_YouTube94">
<iframe id="YouTube94" src="https://www.youtube.com/embed/epo880nYsPE?rel=1&amp;autohide=0"></iframe></div>
<div id="wb_Image98">
<img src="images/صورة95.png" id="Image98" alt=""></div>
<div id="wb_Image99">
<img src="images/صورة96.png" id="Image99" alt=""></div>
<div id="wb_Image100">
<img src="images/صورة97.png" id="Image100" alt=""></div>
<div id="wb_Image101">
<img src="images/صورة98.png" id="Image101" alt=""></div>
<div id="wb_Image102">
<img src="images/صورة99.png" id="Image102" alt=""></div>
<div id="wb_Image103">
<img src="images/صورة100.png" id="Image103" alt=""></div>
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