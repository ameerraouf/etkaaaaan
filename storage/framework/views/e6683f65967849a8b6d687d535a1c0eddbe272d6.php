<?php $__env->startSection('theme'); ?>
<div class="mainslider">
	<div id="homeslider" class="owl-carousel">
		<?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
		<div class="item">
			<a href="<?php echo e($slide->url); ?>" title="<?php echo e($slide->title); ?>">
				<img src="<?php echo e(url('upload/'.$slide->photo)); ?>" alt="<?php echo e($slide->title); ?>">
				<span><?php echo e($slide->title); ?></span>
			</a>
		</div><!-- end item -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div><!-- End homeslider -->
	<div class="clearfix"></div>
</div><!-- end mainslider -->
<div class="latestnews">
	<div class="title">الأخبار</div>
	<div class="marquee">
		<ul>
  		<?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
     	<li><a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>"><?php echo e($news->title); ?></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  	</ul>
	</div><!-- end marquee -->
	<div class="clearfix"></div>
</div><!-- end latestnews -->
<div class="linksarea">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a class="linkone" href="<?php echo e(url('/')); ?>/page/6" title="خدمات المستفيدين"><i class="fa fa-cog"></i>خدمات المستفيدين</a>
		</div><!-- end col-lg-4 -->
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a class="linktwo" href="http://g-alba.com/contactus" title="طلب خدمة"><i class="fa fa-life-ring"></i>طلب خدمه</a>
		</div><!-- end col-lg-4 -->
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a class="linkthree" href="<?php echo e(url('/')); ?>/page/7" title="أسرة متعففه"><i class="fa fa-users"></i>أسرة متعففه</a>
		</div><!-- end col-lg-4 -->
	</div><!-- end row -->
</div><!-- end linksarea -->
<div class="programs_society">
	<div class="title"><span>برامج الجمعية</span><a href="category/12" title="المزيد من البرامج">المزيد من البرامج <i class="fa fa-chevron-circle-left"></i></a></div>
	<div class="row">
	    
	    	<?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	

	    
    		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    			<div class="item">
    				<a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>">
    					<div class="imgthumb">
    						<img src="<?php echo e(url('upload/'.$news->photo)); ?>" alt="<?php echo e($news->title); ?>">
    					</div><!-- end imgthumb -->
    					<span><?php echo e($news->title); ?></span>
    					<p><?php echo e(mb_substr(strip_tags($news->content),0,200, "utf-8")); ?></p>
    				</a>
    			</div><!-- end item -->
    		</div><!-- end col-lg-3 -->
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div><!-- end row -->
</div><!-- end programs_society -->
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<div class="newvideos">
			<div class="title"><i class="fa fa-play-circle-o"></i> جديد الفيديو</div>
			<div class="content">
				<div class="row">
					<?php $video_dep = App\Department::where('parent',8)->get(['id']); ?>
					<?php $__currentLoopData = App\News::whereIn('department',$video_dep)->orWhere('department',8)->orderBy('id','desc')->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="videoitem">
							<a href="<?php echo e(url('news/'.$videos->id.'/'.$videos->title)); ?>" title="<?php echo e($videos->title); ?>">
								<div class="imgthumb">
									<?php $youtube = explode('||',$videos->youtube); ?>
									<?php if(!empty($videos->photo)): ?>
										<img src="<?php echo e(url('upload/'.$videos->photo)); ?>" alt="">
									<?php else: ?>
										<?php if(!empty($youtube[0])): ?>
											<img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[0])); ?>/hqdefault.jpg" alt="">
										<?php elseif(!empty($youtube[1])): ?>
											<img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[1])); ?>/hqdefault.jpg" alt="">
										<?php endif; ?>
									<?php endif; ?>
									<span><i class="fa fa-play"></i></span>
								</div>
								<p><?php echo e($videos->title); ?></p>
							</a>
						</div><!-- end videoitem -->
					</div><!-- end col-lg-4 -->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div><!-- end row -->
				<div class="moremedia"><a href="<?php echo e(url('category/8')); ?>" title="شاهد المزيد">شاهد المزيد <i class="fa fa-angle-double-left"></i></a></div>
			</div><!-- end content -->
		</div><!-- end newvideos -->
		<div class="newnews">
			<div class="title"><i class="fa fa-newspaper-o"></i> جديد الأخبار</div>
			<div class="content">
				<?php $__currentLoopData = $newss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				<div class="item">
					<?php if(!empty($news)): ?>
						<div class="imgthumb">
							<a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>"><img src="<?php echo e(url('upload/'.$news->photo)); ?>" alt="<?php echo e($news->title); ?>"></a>
						</div><!-- end imgthumb -->
					<?php endif; ?>
					<div class="desc">
						<span><a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>"><?php echo e($news->title); ?></a></span>
						<p><?php echo e(mb_substr(strip_tags($news->content),0,200, "utf-8")); ?></p>
						<time>28  أكتوبر 2018</time>
					</div><!-- end desc -->
					<div class="clearfix"></div>
				</div><!-- end item -->
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<div class="morenews"><a href="<?php echo e(url('all/news')); ?>" title="المزيد من الأخبار">المزيد من الأخبار</a></div>
			</div><!-- end content -->
		</div><!-- end newnews -->
		<div class="newimages">
			<div class="title"><i class="fa fa-camera"></i> جديد الصور</div>
			<div class="content">
				<div class="row">
					<?php $pic_dep = App\Department::where('parent',9)->get(['id']); ?>
					<?php $__currentLoopData = App\News::whereIn('department',$pic_dep)->orWhere('department',9)->orderBy('id','desc')->take(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="galleryitem">
							<a href="<?php echo e(url('news/'.$pics->id.'/'.$pics->title)); ?>" title="<?php echo e($pics->title); ?>">
								<img src="<?php echo e(url('upload/'.$pics->photo)); ?>" alt="">
								<span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
							</a>
						</div><!-- end galleryitem -->
					</div><!-- end col-lg-4 -->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div><!-- end row -->
				<div class="moremedia"><a href="<?php echo e(url('category/9')); ?>" title="شاهد المزيد ">شاهد المزيد <i class="fa fa-angle-double-left"></i></a></div>
			</div><!-- end content -->
		</div><!-- end newimages -->
	</div><!-- end col-lg-9 -->
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="msgsite">
			<div class="title">رسالة الجمعية</div>
			<div class="content">
منشئة خيرية تسعى للارتقاء بمستوى حياة المجتمع عامة والمحتاجين خاصة في كل المجالات وفق الشرع الحنيف بشفافية ومهنية عالية ومن خلال التعاون مع الجهات ذات العلاقة واعتماد العمل المتميز 			</div><!-- end content -->
		</div><!-- end msgsite -->
		<div class="ourvision">
			<div class="title">الرؤية</div>
			<div class="content">
		أن نقدم الخدمات الخيرية للمستفيدين بشكل كبير ولجميع الفئات المستهدفة
			</div><!-- end content -->
			
		</div><!-- end ourvision -->
		<div class="bannerpage">
			<a href="#" title="#"><img src="<?php echo e(url('style')); ?>/images/banner.png" alt=""></a>
		</div><!-- end bannerpage -->
		<div class="bannersarea">
			<div class="title">إعلانات</div>
			<?php echo Set::banner('top','one','6'); ?>

			<?php echo Set::banner('bottom','one','6'); ?>

		</div><!-- end bannersarea -->
	</div><!-- end col-lg-3 -->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="itemcontact">
			<i class="fa fa-institution"></i>
			<div class="desc">
				الراجحي
				<p>SA5780000167608010134335</p>
				الانماء
				<p>SA5905000068288819900000</p>
			</div><!-- end desc -->
		</div><!-- end itemcontact -->
	</div><!-- end col-lg-4 -->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="itemcontact">
			<i class="fa fa-phone"></i>
			<div class="desc">
				<span>الهاتف</span>
     		<?php if(Set::set()->fax != NULL): ?>
					<p>رقم الجوال  :  <?php echo e(Set::set()->fax); ?></p>
				<?php endif; ?>
				<?php if(Set::set()->mobile2 != NULL): ?>
					<p>رقم التليفون  :  <?php echo e(Set::set()->mobile2); ?></p>
				<?php endif; ?>
			</div><!-- end desc -->
		</div><!-- end itemcontact -->
	</div><!-- end col-lg-4 -->
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="itemcontact">
			<i class="fa fa-envelope"></i>
			<div class="desc">
				<span>البريد الإلكتروني</span>
				<p>البريد الرسمي لنا هو  :</p>
				<p><?php echo e(Set::set()->sitemail); ?></p>
			</div><!-- end desc -->
		</div><!-- end itemcontact -->
	</div><!-- end col-lg-4 -->
</div><!-- end row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>