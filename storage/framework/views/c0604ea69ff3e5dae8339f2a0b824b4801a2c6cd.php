<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<?php echo Form::open(['route'=>'admingroup.store']); ?>


<div class="form-body">

<div class="form-group">
<label><?php echo e(trans('admin.name')); ?></label>
<input name="name" type="text" placeholder="<?php echo e(trans('admin.name')); ?>" class="form-control" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(trans('admin.name')); ?>">
</div>
 
<div class="form-group">
 <div class="checkbox-list">
    <div class="col-md-3">
	<label>
	<input type="checkbox" name="settings" value="1" <?php if(old('settings') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.settings')); ?> </label>
    </div>
    <div class="col-md-3">
	<label>
	<input type="checkbox" name="country" value="1" <?php if(old('country') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.country')); ?> </label>
    </div>
 
    <div class="col-md-3">
	<label>	
	<input type="checkbox" name="admingroup" value="1" <?php if(old('admingroup') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.admingroup')); ?> </label>
    </div>


   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="links" value="1" <?php if(old('links') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.links')); ?> </label>
   </div>
   <div class="col-md-3 hidden">
	<label>	
	<input type="checkbox" name="comments" value="1" <?php if(old('comments') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.comments')); ?> </label>
   </div>
   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="contact" value="1" <?php if(old('contact') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.contactus')); ?> </label>
   </div>

   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="banners" value="1" <?php if(old('banners') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.banners')); ?> </label>
   </div>

   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="news" value="1" <?php if(old('news') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.news')); ?> </label>
   </div>
  
  <div class="col-md-3">
	<label>	
	<input type="checkbox" name="departments" value="1" <?php if(old('departments') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.departments')); ?> </label>
   </div>

   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="formspdf" value="1" <?php if(old('formspdf') == 1): ?> checked <?php endif; ?> > <?php echo e(trans('admin.formspdf')); ?> </label>
   </div>

 


    

    
	 
 </div>
 <div class="clearfix"></div>
</div> 


 
</div>
<div class="form-actions left">
<?php echo Form::submit(trans('admin.add'),['class'=>'btn green']); ?>

</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>