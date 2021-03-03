<?php $__env->startSection('theme'); ?>

  

			<div class="lastnews">
				<div class="title"><span>أخبار الجمعية</span></div>
				<div class="row">
				  <?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="postitem">
							<a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>">
								<img src="<?php echo e(url('upload/'.$news->photo)); ?>" alt="">
								<div class="content">
									<h1><?php echo e($news->title); ?></h1>
									<h2><?php echo e(mb_substr(strip_tags($news->content),0,200, "utf-8")); ?></h2>
									<span><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> إقرأ التفاصيل</span>
								</div><!-- end content -->
							</a>
						</div><!-- end postitem -->
					</div><!-- end col-lg-6 -->
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					<div class="clearfix"></div>
				</div><!-- end row -->
			</div><!-- end lastnews -->
 	<?php echo $allnews->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>