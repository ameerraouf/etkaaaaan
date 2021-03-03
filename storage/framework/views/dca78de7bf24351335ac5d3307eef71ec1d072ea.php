<?php $__env->startSection('theme'); ?>
<?php $youtube = explode('||',$news->youtube); ?>
  

  <div class="singlepage">
        <div class="title"><a href="<?php echo e(url('/')); ?>" style="color:#fff" >الرئيسية</a>  <i class="fa fa-arrow-left"></i> <a href="<?php echo e(url('category/'.$department->id)); ?>" style="color:#fff"><?php echo e($department->title); ?></a>  <i class="fa fa-arrow-left"></i> <?php echo e($title); ?></div>
        <div class="content">

        <?php if(!empty($news->files()->get())): ?>
			<div class="mainslider">
				<div id="homeslider" class="owl-carousel">
				<?php $__currentLoopData = $news->files()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
			  	<div class="item">
			  		<img src="<?php echo e(url('upload/'.$slide->path.'/'.$slide->file)); ?>" style="width:100%;height:500px;" alt="">
			  	</div><!-- end item -->
  				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div><!-- End homeslider -->
				<div class="clearfix"></div>
			</div><!-- end mainslider -->
        <?php endif; ?>  

			<?php 
			/*
@if(empty($youtube[0]) and empty($youtube[1]))
             <div class="imgthumb"><img src="{{url('upload/'.$news->photo)}}"  alt=""></div>
            @endif  
			*/
			?>
 
           <?php if(!empty($youtube[0])): ?>
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo e(Set::youtubelink($youtube[0])); ?>"></iframe>
           <?php endif; ?>
           <?php if(!empty($youtube[1])): ?>
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo e(Set::youtubelink($youtube[1])); ?>"></iframe>
           <?php endif; ?>
          <?php echo $news->content; ?>

          </div><!-- end content -->
      </div><!-- end singlepage -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>