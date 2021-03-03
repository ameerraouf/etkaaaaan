<?php $__env->startSection('admin'); ?>

			<div class="row inbox">
				<div class="col-md-2">
					<?php echo $__env->make(app('at').'.contactus.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-md-10">

					<?php echo $__env->make(app('at').'.contactus.inbox', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				</div>
			</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>