<?php $__env->startSection('admin'); ?>
 		<a href="<?php echo e(url(app('aurl').'/contactus/new/compose')); ?>" data-title="<?php echo e(trans('admin.compose')); ?>" class="btn green">
								<i class="fa fa-edit"></i> <?php echo e(trans('admin.compose')); ?>

							</a>
<br>
<small><?php echo e(trans('admin.message_compose_cron')); ?></small>
<hr />							

 	<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> <?php echo e($title); ?>

							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>#</th>
									<th><?php echo e(trans('admin.subject')); ?></th>
									<th><?php echo e(trans('admin.send_to')); ?></th>
									<th><?php echo e(trans('admin.email')); ?></th>
									<th><?php echo e(trans('admin.status')); ?></th>
									<th><?php echo e(trans('admin.action')); ?></th>
								</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $maillists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($mail->id); ?></td>
									<td><?php echo e($mail->subject); ?></td>
									<td>
									<?php if($mail->send_to == 'admin'): ?>
									<?php echo e(trans('admin.gadmin')); ?>

									<?php elseif($mail->send_to == 'store'): ?>
									<?php echo e(trans('admin.guser')); ?>

									<?php elseif($mail->send_to == 'email'): ?>
									<?php echo e(trans('admin.email')); ?>

									<?php endif; ?>
									</td>
									<td><?php echo e($mail->email); ?></td>
									<td>
									<?php if($mail->cronjob_status == 0): ?>
									<span class="label label-danger pulsate-regular"><?php echo e(trans('admin.panding')); ?></span>
									<?php else: ?>
									<span class="label label-info"><?php echo e(trans('admin.sent')); ?></span>
									<?php endif; ?>
									</td>
									<td>
									<a href="<?php echo e(url(app('aurl').'/contactus/cronjob/messages/'.$mail->id.'/edit')); ?>" title="<?php echo e(trans('admin.edit')); ?>" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform<?php echo e($mail->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/contactus/cronjob/messages/'.$mail->id.'/delete','class'=>'deleteform'.$mail->id]); ?>

									<?php echo Form::close(); ?>

									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
								</table>
								<?php echo $maillists->render(); ?>

							</div>
						</div>
					</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>