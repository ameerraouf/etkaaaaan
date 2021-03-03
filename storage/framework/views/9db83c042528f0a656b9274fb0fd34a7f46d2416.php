<?php $__env->startSection('theme'); ?>

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

      <div class="allcategory">
        <div class="title">الصور والفيديو</div>
        <div class="row">
         <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="<?php echo e(url('category/'.$dep->id)); ?>" title="<?php echo e($dep->title); ?>"><?php echo e($dep->title); ?></a>
          </div><!-- end col-lg-3 -->
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

         <?php $__currentLoopData = $pics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="<?php echo e(url('category/'.$dep->id)); ?>" title="<?php echo e($dep->title); ?>"><?php echo e($dep->title); ?></a>
          </div><!-- end col-lg-3 -->
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <div class="clearfix"></div> 
        </div><!-- end row -->
      </div><!-- end allcategory -->

    
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>