<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<?php echo Form::open(['route'=>'Policie.store','files' => true]); ?>

<div class="form-body">
    
    
<div class="form-group">
<label>الاسم</label>
<input name="name" type="text" required placeholder="الاسم" class="form-control" value="<?php echo e(old('name')); ?>">
</div>



<div class="form-group">
<label>االوصف</label>
  <textarea
        class="form-control"
      required  name="description"><?php echo e(old('description')); ?></textarea>
</div>

 <div class="form-group">
<label>
    صوره
</label>
<input type="file" required accept="image/*" name="img" class="form-control">
</div>

<div class="form-group">
<label>
    ملف
</label>
<input type="file"  required name="file" class="form-control">
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