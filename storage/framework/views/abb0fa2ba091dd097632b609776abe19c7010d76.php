			</div><!-- End Wrapper -->
			<footer>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="menu">
							<ul>
								<li><a href="http://g-alba.com/" title="الرئيسية"><i class="fa fa-angle-double-left"></i>الرئيسية</a></li>
								<li><a href="/page/8" title="التبرع للجمعية"><i class="fa fa-angle-double-left"></i>التبرع للجمعية</a></li>
								<li><a href="#" title="عن الجمعية"><i class="fa fa-angle-double-left"></i>عن الجمعية</a></li>
								<li><a href="/page/8" title="الحسابات البنكية"><i class="fa fa-angle-double-left"></i>الحسابات البنكية</a></li>
								<li><a href="/contactus" title="اتصل بنا"><i class="fa fa-angle-double-left"></i>إتصل بنا</a></li>
								<li><a href="#" title="قريبا"><i class="fa fa-angle-double-left"></i>قريباُ</a></li>
							</ul>
							<div class="clearfix"></div>
						</div><!-- end menu -->
					</div><!-- end col-lg-6 -->
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  col-md-offset-2">
						<div class="socialmedia">
							<?php if(Set::set()->fax != NULL): ?>
			      		<a href="<?php echo e(Set::set()->facebook); ?>" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
		        	<?php endif; ?>
		         	<?php if(Set::set()->fax != NULL): ?>
		           	<a href="<?php echo e(Set::set()->twitter); ?>" target="_blank" class="tw"><i class="fa fa-twitter"></i></a>
		        	<?php endif; ?>
		        	<?php if(Set::set()->youtube != NULL): ?>
		           	<a href="<?php echo e(Set::set()->youtube); ?>" target="_blank" class="yt"><i class="fa fa-youtube"></i></a>
		          <?php endif; ?>
		          <?php if(Set::set()->pinterest != NULL): ?>
			        	<a href="<?php echo e(Set::set()->pinterest); ?>" target="_blank" class="pn"><i class="fa fa-pinterest-p"></i></a>
			      	<?php endif; ?>
			       	<?php if(Set::set()->skype != NULL): ?>
		          	<a href="skype:<?php echo e(Set::set()->skype); ?>" target="_blank" class="sk"><i class="fa fa-skype"></i></a>
		        	<?php endif; ?>
		        	<?php if(Set::set()->linkedin != NULL): ?>
			        	<a href="<?php echo e(Set::set()->linkedin); ?>" target="_blank" class="ln"><i class="fa fa-linkedin"></i></a>
			      	<?php endif; ?>
						</div><!-- end socialmedia -->
					</div><!-- end col-lg-6 -->
				</div><!-- end row -->
				<div class="clearfix"></div>
			</footer><!-- End Footer -->
			<div class="footer2">
				<div class="copyright">
				 	جميع الحقوق محفوظة لـ <a href="<?php echo e(url('/')); ?>" title="<?php echo e(Set::set()->sitename); ?>"><?php echo e(Set::set()->sitename); ?></a> © <?php echo e(date('Y')); ?>

				</div><!-- end copyright -->
				<div class="const">
					<a target="_blank" title="مؤسسة كوكبة التقنية" href="http://const-tech.com.sa"><img alt="مؤسسة كوكبة التقنية" src="<?php echo e(url('style')); ?>/images/const.png"></a>
				</div><!-- end const -->
				<div class="clearfix"></div>
			</div><!-- end footer2 -->
		</div><!-- End Allsite -->
	</div><!-- end container -->

 	<!--[if lt IE 8 ]>
 	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
 	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
 	<![endif]-->
 
 	<!-- Javascript -->
 	<script type="text/javascript" src="<?php echo e(url('style')); ?>/js/modernizr.custom.97442.js"></script>
 	<script type="text/javascript" src="<?php echo e(url('style')); ?>/js/bootstrap-rtl.min.js"></script>
 	<script type="text/javascript" src="<?php echo e(url('style')); ?>/js/owl.carousel.min.js"></script>
 	<script type="text/javascript" src="<?php echo e(url('style')); ?>/js/jquery.marquee.min.js"></script>
 	<script type="text/javascript" src="<?php echo e(url('style')); ?>/js/more.js"></script>
	<!-- Javascript -->
</body>
</html>