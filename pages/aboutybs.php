<?php 
require_once ("DataObject.class.php");
require_once('menu.php');
echo DataObject::busheader();

 ?>
<section class="busdetail" >
	<div class="mainfirst6" >
		<div class="container">
			<div class="row text-center" style="margin-top: 9%;position: relative;">
				<p class="aboutHeader">About YBS<br><img src="../image/ybslogo.png" style="border-radius: 50%;width: 20%;height:20%;"></p>
			</div>
			<div class="row">
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.1s">
					<h4 class="abouttitle text-center">Started Date</h4>
					<p class="aboutbody text-center">16 January 2017</p>
			</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.3s">
					<h4 class="abouttitle text-center">YBS</h4><br>
					<p class="aboutbody">The Yangon Bus Service,also known as YBS, is a bus transport network system.It is operated by the Yangon Region Transport Authority(YRTA).</p>
				</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.4s">
					<h4 class="abouttitle text-center">Purpose</h4><br>
					<p class="aboutbody">To serve commuters, shortage of buses, misconduct of bus staff and constant violation of traffic rules.</p>
				</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.5s">
					<h4 class="abouttitle text-center">Cost</h4><br>
					<p class="aboutbody">-200 Kyats per person</p>
				</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.6s">
					<h4 class="abouttitle text-center">Bus Colors</h4><br>
					<p class="aboutbody">There are five bus colors, each go to different regions in Yangon.<br>

					<span style="font-size: 50px;color:#405CAA;">&diams; </span> - <span style ="color:#405CAA;">North</span> District Areas(Bus Number - 1, 11, 20, 22, 23, 35, 36, 37, 39, 40, 41, 42, 61, 68, 69)<br>
					<span style="font-size: 50px;color:#96509F;">&diams; </span> - <span style ="color:#96509F;">South</span> District Areas(Bus Number - 8, 9, 10, 31, 32, 33, 34, 70)<br>
					<span style="font-size: 50px;color:#DF504E;">&diams; </span> - <span style ="color:#DF504E;">East</span> District Areas(Bus Number - 2, 3, 4, 5, 6, 7, 12, 13, 15, 16, 17, 18, 19, 24, 25, 26, 27, 28, 29, 30,38, 59, 63, 64)<br>
					<span style="font-size: 50px;color:#86603E;">&diams; </span> - <span style ="color:#86603E;">Downtown</span> Areas(Bus Number - 56,57,58)<br>
					<span style="font-size: 50px;color:#2C8A6C;">&diams; </span> - Lines that connect with the main roads(Bus Number - 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 60, 62, 66, 67)<br>
					</p>
				</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.7s">
					<h4 class="abouttitle text-center">Link</h4><br>
					<p class="aboutbody text-center"><a href="www.YangonBus.com" style="text-decoration: none;color: #36f;">www.YangonBus.com</a></p>
				</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.8s">
					<h4 class="abouttitle text-center">Hotline Number</h4><br>
					<p class="aboutbody text-center"">01-23998811881</p>
				</div>
				<div class="detailbox wow fadeInLeft" style="margin-top: 4%;position: relative;" data-wow-delay="0.9s">
					<h4 class="abouttitle text-center">YBS Map</h4><br><p class="aboutbody">
					<img src="../image/busmap1.jpg" style="padding: 15px;padding-bottom: 10px;width: 90%;height: 50%;">
					<img src="../image/busmap2.jpg" style="padding: 15px;padding-bottom: 10px;width: 90%;height: 50%;">
					</p>
				</div>
			</div>
		</div>
	</div>

</section>

  <?php echo DataObject::footer(); ?>