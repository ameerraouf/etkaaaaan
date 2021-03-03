<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<?php echo Form::open(['route'=>'banners.store','files'=>true]); ?>

<div class="form-body">
 
<div class="form-group">
<label><?php echo e(trans('admin.title')); ?></label>
<input name="title" type="text" placeholder="<?php echo e(trans('admin.title')); ?>" class="form-control" value="<?php echo e(old('title')); ?>" placeholder="<?php echo e(trans('admin.title')); ?>">
</div>

<?php 
/*'right'=>trans('admin.right'),'left'=>trans('admin.left'), */
?>
<div class="form-group">
<label><?php echo e(trans('admin.place')); ?></label>
<?php echo Form::select('place',['top'=>trans('admin.top'),'bottom'=>trans('admin.bottom')],old('place'),['class'=>'form-control','placeholder'=>trans('admin.place')]); ?>

</div>


<script type="text/javascript">
$(document).on('change','.type',function(){
	var type = $('.type option:selected').val();
 if(type == 'photo')
 {
 	$('.photo').removeClass('hidden');
 	$('.text').addClass('hidden');
 	$('.code').addClass('hidden');
 }else if(type == 'text')
 {
 	$('.text').removeClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.code').addClass('hidden');
 }else if(type == 'code')
 {
 	$('.code').removeClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.text').addClass('hidden');
 }else{
 	$('.code').addClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.text').addClass('hidden');
 }
});
</script>
<div class="form-group">
<label><?php echo e(trans('admin.type')); ?></label>
<?php echo Form::select('type',['code'=>trans('admin.code'),'text'=>trans('admin.text'),'photo'=>trans('admin.photo')],old('type'),['class'=>'form-control type','placeholder'=>trans('admin.type')]); ?>

</div>

<div class="form-group photo <?php if(old('type') != 'photo'): ?> hidden <?php endif; ?>">
<label><?php echo e(trans('admin.photo')); ?></label>
<input type="file" name="photo" placeholder="<?php echo e(trans('admin.photo')); ?>" >
<hr />
<div class="clearfix"></div>
<div class="form-group col-md-3">
 	<label><?php echo e(trans('admin.width')); ?></label>
 	<input type="text" name="width" placeholder="<?php echo e(trans('admin.width')); ?>" value="<?php echo e(old('width')); ?>">
</div>
<div class="form-group col-md-3">
 	<label><?php echo e(trans('admin.height')); ?></label>
 	<input type="text" name="height" placeholder="<?php echo e(trans('admin.height')); ?>" value="<?php echo e(old('height')); ?>">
</div>
<div class="clearfix"></div>
<small style="color:#c33"><?php echo e(trans('admin.width_height_message')); ?></small>
<div class="clearfix"></div>
</div>

<div class="form-group text hidden">
<label><?php echo e(trans('admin.text')); ?></label>
<textarea name="text" placeholder="<?php echo e(trans('admin.text')); ?>" class="form-control"><?php echo e(old('text')); ?></textarea>
</div>

<div class="form-group code hidden">
<label><?php echo e(trans('admin.code')); ?></label>
<textarea name="code" placeholder="<?php echo e(trans('admin.code')); ?>" class="form-control"><?php echo e(old('code')); ?></textarea>
</div>

<div class="clearfix"></div>
<div class="form-group col-md-3">
<label><?php echo e(trans('admin.start_to')); ?> </label>
 <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
    <input type="text" name="start_to" value="<?php echo e(old('start_to')); ?>" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
</div>


<div class="form-group col-md-3">
<label><?php echo e(trans('admin.expire_to')); ?></label>
<div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
    <input type="text" name="expire_to" value="<?php echo e(old('expire_to')); ?>" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
</div>

<div class="clearfix"></div>

<div class="form-group">
<label><?php echo e(trans('admin.url')); ?></label>
<input name="url" type="url" placeholder="<?php echo e(trans('admin.url')); ?>" class="form-control" value="<?php echo e(old('url')); ?>" placeholder="<?php echo e(trans('admin.url')); ?>">
</div>

<div class="clearfix"></div>

<div class="form-group">
<label><?php echo e(trans('admin.status')); ?></label>
<?php echo Form::select('active',['1'=>trans('admin.active'),'0'=>trans('admin.deactivate')],old('active'),['class'=>'form-control status']); ?>

</div>




<div class="form-actions left">
<?php echo Form::submit(trans('admin.add'),['class'=>'btn green']); ?>

</div>
			<?php echo Form::close(); ?>

</div>
</div>
</div>
	 
	<!-- END SAMPLE FORM PORTLET-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>