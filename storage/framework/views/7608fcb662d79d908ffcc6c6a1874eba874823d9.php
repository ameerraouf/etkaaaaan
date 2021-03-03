<?php $__env->startSection('theme'); ?>

  
	  <?php if(in_array($id, [9,8])): ?>

	  <?php if(!empty($departments) and count($departments) > 0): ?>
	  <div class="allcategory">
        <div class="title"><?php echo e($title); ?></div>
        <div class="row">
         <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 	 
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="<?php echo e(url('category/'.$dep->id)); ?>" title="<?php echo e($dep->title); ?>"><?php echo e($dep->title); ?></a>
          </div><!-- end col-lg-3 -->
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <div class="clearfix"></div>
        </div><!-- end row -->
      </div><!-- end allcategory -->
      <?php endif; ?>
  

	  <div class="allviodes">
        <div class="title"><?php if(count($departments) > 0): ?><a href="<?php echo e(url('/')); ?>" style="color:#fff" >الرئيسية</a>  <i class="fa fa-arrow-left"></i>  صور القسم <?php else: ?> 
         <a href="<?php echo e(url('/')); ?>" style="color:#fff" >الرئيسية</a>  <i class="fa fa-arrow-left"></i> <a href="<?php echo e(url('category/'.$parent->id)); ?>" style="color:#fff"><?php echo e($parent->title); ?></a>  <i class="fa fa-arrow-left"></i> <?php echo e($title); ?>


         <?php endif; ?></div>
        <div class="content">
          <div class="row">
                   <?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

					  <div class="postitem">
		                <a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>">
		                  <div class="imgthumb">
		                  				<?php $youtube = explode('||',$news->youtube); ?>
										  <?php if(!empty($news->photo)): ?>
											<img src="<?php echo e(url('upload/'.$news->photo)); ?>" alt="">
										  <?php else: ?>
										  
										  <?php if(!empty($youtube[0])): ?>
										  <img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[0])); ?>/hqdefault.jpg" alt="">
										  <?php elseif(!empty($youtube[1])): ?>
										  <img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[1])); ?>/hqdefault.jpg" alt="">
										  <?php endif; ?>

										  <?php endif; ?>
		                  </div>
		                  <span><?php echo e($news->title); ?></span>
		                </a>
		              </div><!-- end postitem -->
            </div><!-- end col-lg-3 -->
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

            
             
            <div class="clearfix"></div>
          </div><!-- end row -->
        
           	<?php echo $allnews->render(); ?>


        </div><!-- end content -->
      </div><!-- end allviodes -->

	  <?php else: ?>
			<div class="lastnews">
				<div class="title"><span><?php echo e($title); ?></span></div>
				<div class="row">
				  <?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="postitem">
							<a href="<?php echo e(url('news/'.$news->id.'/'.$news->title)); ?>" title="<?php echo e($news->title); ?>">
								        <?php $youtube = explode('||',$news->youtube); ?>
										  <?php if(!empty($news->photo)): ?>
											<img src="<?php echo e(url('upload/'.$news->photo)); ?>" alt="">
										  <?php else: ?>
										  
										  <?php if(!empty($youtube[0])): ?>
										  <img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[0])); ?>/hqdefault.jpg" alt="">
										  <?php elseif(!empty($youtube[1])): ?>
										  <img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[1])); ?>/hqdefault.jpg" alt="">
										  <?php endif; ?>

										  <?php endif; ?>	

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

      <?php endif; ?>
			


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>