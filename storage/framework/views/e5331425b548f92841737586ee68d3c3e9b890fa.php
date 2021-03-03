<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<?php echo Form::open(['route'=>'MyImage.store']); ?>

<div class="form-body">
<div class="form-group">
<label><?php echo e(trans('admin.name')); ?></label>
<input name="title" type="text" placeholder="<?php echo e(trans('admin.title')); ?>" class="form-control" value="<?php echo e(old('title')); ?>" placeholder="<?php echo e(trans('admin.name')); ?>">
</div>




<div class="form-group">
	<?php echo Form::label('category',trans('admin.category'),['class'=>'control-label']); ?>

	<div style="padding:5px;">
		<select name="category_id" class="form-control" required>
			<option value="">اختر القسم</option>
			<?php $__currentLoopData = $ImageCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ImageCategor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($ImageCategor->id); ?>"><?php echo e($ImageCategor->title); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>
</div>



		<input name="image" type="file" placeholder="<?php echo e(trans('admin.photo')); ?>" class="form-control"  >





<div class="form-actions left">
<?php echo Form::submit(trans('admin.add'),['class'=>'btn green']); ?>

</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>