<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<?php echo Form::open(['url'=>app('aurl').'/Policie/'.$row->id,'method'=>'put','files'=>true]); ?>

<div class="form-body">
    
    
<div class="form-group">
<label>الاسم</label>
<input name="name" type="text" required placeholder="الاسم" class="form-control"
value="<?php echo e($row->name); ?>" />

</div>

<div class="form-group">
<label>االوصف</label>
  <textarea
        class="form-control"
      required  name="description"><?php echo e($row->description); ?></textarea>
</div>

 <div class="form-group">
<label>
    صوره
</label>
<img src="<?php echo e(asset('assets/uplodedimage/'.$row->img)); ?>"
                      style="width:50px;height:50px;border-radius:50%" />
<input type="file" accept="image/*" name="img" class="form-control">
</div>

<div class="form-group">
<label>
    ملف
</label>
 <a href="<?php echo e(asset('assets/uplodedfiles/'.$row->file)); ?>">
									            فتح
									    </a>
<input type="file"  name="file" class="form-control">
</div>


<div class="form-actions left">
<?php echo Form::submit(trans('admin.edit'),['class'=>'btn green']); ?>

</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>