<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<?php echo Form::open(['route'=>'department.store']); ?>

<div class="form-body">
<div class="form-group">
<label><?php echo e(trans('admin.name')); ?></label>
<input name="title" type="text" placeholder="<?php echo e(trans('admin.title')); ?>" class="form-control" value="<?php echo e(old('title')); ?>" placeholder="<?php echo e(trans('admin.name')); ?>">
</div>
 
<?php echo Form::select('parent',App\Department::where('parent',0)->pluck('title','id'),old('parent'),['class'=>'form-control','placeholder'=>trans('admin.main')]); ?>

<div class="form-actions left">
<?php echo Form::submit(trans('admin.add'),['class'=>'btn green']); ?>

</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>