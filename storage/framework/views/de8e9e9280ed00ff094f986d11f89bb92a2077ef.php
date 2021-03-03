<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/ImageCategory/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i> <?php echo e($title); ?>

							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th><?php echo e(trans('admin.name')); ?></th>
									<th><?php echo e(trans('admin.action')); ?></th>
								</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $ImageCategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($dep->title); ?>

									

									</td>
								 
									<td>
									<a href="<?php echo e(url(app('aurl').'/ImageCategory/'.$dep->id.'/edit')); ?>" title="<?php echo e(trans('admin.edit')); ?>" class="btn green"><i class="fa fa-edit"></i></a>
									<?php if($dep->id != 9 and $dep->id != 8): ?>
									<a href="#" class="btn red delrec" classform="deleteform<?php echo e($dep->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/ImageCategory/'.$dep->id,'class'=>'deleteform'.$dep->id]); ?>

									<?php echo Form::close(); ?>

									<?php endif; ?>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
								</table>
								<?php echo $ImageCategorys->render(); ?>

							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>