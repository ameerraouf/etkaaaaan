<?php $__env->startSection('admin'); ?>

			<div class="row inbox">
				<div class="col-md-2">
					<?php echo $__env->make(app('at').'.contactus.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-md-10">
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
<?php echo Form::open(); ?>

	<div class="inbox-compose-btn">
		<?php echo Form::select('send_to',['admin'=>trans('admin.gadmin'),'store'=>trans('admin.guser'),'email'=>trans('admin.email')],old('send_to'),['class'=>'form-control send_to','placeholder'=>'....']); ?>

	</div>
<script type="text/javascript">
$(document).on('change','.send_to',function(){
	var sendto = $('.send_to option:selected').val();
	if(sendto == 'email')
	{
		$('.mail-to').removeClass('hidden');
	}else{
		$('.mail-to').addClass('hidden');
	}
});	
$(document).ready(function(){
	<?php if(old('send_to') == 'email'): ?>
	$('.mail-to').removeClass('hidden');
	<?php endif; ?>
});
</script>	
	<div class="inbox-form-group mail-to hidden" >
		<label class="control-label"><?php echo e(trans('admin.to')); ?>:</label>
		<div class="controls controls-to">
			<input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
		</div>
	</div>
 
	<div class="inbox-form-group">
		<label class="control-label"><?php echo e(trans('admin.subject')); ?>:</label>
		<div class="controls">
			<input type="text" class="form-control" name="subject" value="<?php echo e(old('subject')); ?>">
		</div>
	</div>
	<div class="inbox-form-group">
	<textarea class="inbox-editor ckeditor form-control" name="message" rows="12"><?php echo e(old('message')); ?>

	</textarea>
	</div>
 
 
	<div class="inbox-compose-btn">
		<button type="submit" class="btn blue"><i class="fa fa-check"></i><?php echo e(trans('admin.send')); ?></button>
	</div>
<?php echo Form::close(); ?>

				</div>
			</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>