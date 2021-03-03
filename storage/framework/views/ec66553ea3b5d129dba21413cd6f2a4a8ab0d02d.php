<?php $__env->startSection('admin'); ?>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>
								<?php echo e($title); ?>

							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>
									    التقييم
									</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    <?php if($says): ?>
							    <?php $__currentLoopData = $says; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $said): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($said['name']); ?></td>
									<td>

								<?php echo e($said['count']); ?>

									

									</td>
								</tr>
							    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <?php endif; ?>
							
								</tbody>
								</table>
							
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>