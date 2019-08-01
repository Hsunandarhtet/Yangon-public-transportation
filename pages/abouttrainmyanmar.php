<?php 
require_once ("DataObject.class.php");
require_once('menumyanmar.php');
echo DataObject::trainheader();
 ?>
<style type="text/css">
	@font-face{
    font-family:'Zawgyi-One';
    src:url('zawgyi.eot');
    src:local('Zawgyi-One'),url('zawgyi.ttf') format('truetype'),url('zawgyi.woff') format('woff'), url('zawgyi.svg') format('svg');
}
.myanfont{
    font-family: 'Zawgyi-One' !important;
}
.aboutbody{
    font-size: 15px !important;
  }
</style>
  <section class="traindetail" >
<div class="mainfirst6" >
<div class="container">
<div class="row text-center" style="margin-top: 9%;position: relative;">
<p class="aboutHeader">About Train</p>
</div>
<div class="row">
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.3s">
<h4 class="abouttitle text-center myanfont">ရန္ကုန္ရထားလမ္းေၾကာင္း</h4><br>

<p class="aboutbody myanfont">- ရန္ကုန္ၿမိဳ႕ပတ္ရထားလမ္းေၾကာင္းတြင္ ၃၉ ဘူတာရုံ ပါရွိသည္။<br>- ရန္ကုန္ၿမိဳ႕ပတ္ရထားလမ္းေၾကာင္းသည္ ရန္ကုန္ဘူတာႀကီးမွ မဂၤလာဒံုဘူတာ၊ အေနာက္ဘက္တြင္ အင္းစိန္ဘူတာ ႏွင့္ အေရွ႕ဘက္တြင္ ဥကၠာပဘူတာ ထိျဖစ္သည္။</p>

<img src="../image/trainmap2.png" style="padding: 20px 50px ;padding-bottom: 10px;width: 80%;height: 400px;">

</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.4s">
<h4 class="abouttitle text-center myanfont">ခရီးၾကာခ်ိန္</h4><br>
<p class="aboutbody myanfont">ရန္ကုန္ၿမိဳ႕ပတ္ခ်ိန္သည္ သုံးနာရီနီးပါးၾကာျမင့္မည္ျဖစ္ၿပီး ရန္ကုန္ၿမိဳ႕၏ ျမင္ကြင္းကုိ ေတြ႕နုိင္ေသာ နည္းလမ္းတစ္ခုလည္း ျဖစ္သည္။<br>ရန္ကုန္ၿမိဳ႕ပတ္ရထားလမ္းေၾကာင္းသည္ မနက္ ၃း၄၅ မွ ည ၁၀း၁၅ အထိ ပုံမွန္လည္ပတ္သည္။</p>
<img src="../image/trainmap.jpg" style="padding: 20px 50px ;padding-bottom: 10px;width: 80%;height: 400px;">

</div>
<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.5s">
<h4 class="abouttitle text-center myanfont">လက္မွတ္ခ</h4><br>
<p class="aboutbody myanfont">-(၁၅) မုိင္အထိ ခရီးစဥ္အား (၁၀၀) က်ပ္<br>-(၁၅) မုိင္ႏွင့္ အထက္ ခရီးစဥ္အား (၂၀၀) က်ပ္<br>- ၿမိဳ႕တစ္ပတ္လံုးလက္မွတ္ခ (၂၀၀) က်ပ္</p>
</div>

</div>
</div>
</div>
</div>
</section>

  <?php echo DataObject::footer(); ?>