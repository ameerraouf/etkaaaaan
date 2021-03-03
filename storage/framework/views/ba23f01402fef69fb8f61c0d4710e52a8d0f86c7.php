<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/Numbers/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> الارقام
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>الاعضاء</th>
									<th>المدرسين</th>
									<th>الحلقات</th>
									<th>الحفاظ</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    <?php if($numbers): ?>
								<tr>
									<td><?php echo e($numbers->users); ?></td>
									<td><?php echo e($numbers->teachers); ?></td>
									<td><?php echo e($numbers->sessions); ?></td>
									<td><?php echo e($numbers->keeps); ?></td>
									<td>
	<a href="<?php echo e(url(app('aurl').'/Numbers/'.$numbers->id.'/edit')); ?>" title="" class="btn green"><i class="fa fa-edit"></i></a>
									
									<a href="#" class="btn red delrec" classform="deleteform<?php echo e($numbers->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									
									
								    <?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/Numbers/'.$numbers->id,'class'=>'deleteform'.$numbers->id]); ?>

									<?php echo Form::close(); ?>

									
								    
								    
									</td>
								</tr>
							    <?php endif; ?>
							
								</tbody>
								</table>
							
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>