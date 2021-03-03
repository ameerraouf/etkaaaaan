<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/Said/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> قالو عنا
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>الاسم</th>
									<th>قال</th
									<th>صوره</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    <?php if($says): ?>
							    <?php $__currentLoopData = $says; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $said): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($said->name); ?></td>
									<td><?php echo e($said->description); ?></td>
									<td>
									    <?php if($said->img): ?>
			 <img src="<?php echo e(asset('assets/uploded/'.$said->img)); ?>"
                      style="width:50px;height:50px;border-radius:50%" />
									    <?php else: ?>
									        لايوجد صوره
									    <?php endif; ?>
									</td>
									<td>
	<a href="<?php echo e(url(app('aurl').'/Said/'.$said->id.'/edit')); ?>" title="" class="btn green"><i class="fa fa-edit"></i></a>
									
									<a href="#" class="btn red delrec" classform="deleteform<?php echo e($said->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									
									
								    <?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/Said/'.$said->id,'class'=>'deleteform'.$said->id]); ?>

									<?php echo Form::close(); ?>

									
								    
								    
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