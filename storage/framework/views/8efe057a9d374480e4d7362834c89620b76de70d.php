 
<?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	<div class="col-xs-12 col-sm-12 col-md-<?php echo e($col); ?> col-lg-<?php echo e($col); ?>">
						<div class="banneritem">
	<?php if($banner->type == 'photo'): ?>
	 <a href="<?php echo e($banner->url); ?>">
	  <img src="<?php echo e(url('upload/'.str_replace('//', '/',$banner->content))); ?>" style="widht:<?php echo e($banner->width); ?>;height:<?php echo e($banner->height); ?>" />
	 </a>
	<?php elseif($banner->type == 'text'): ?>
	 <a href="<?php echo e($banner->url); ?>">
	 <?php echo e($banner->content); ?>

	 </a>
	<?php elseif($banner->type == 'code'): ?>
	 <?php echo $banner->content; ?>

	<?php endif; ?>
 	</div><!-- end banneritem -->
	</div><!-- end col-lg-6 -->
 

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

