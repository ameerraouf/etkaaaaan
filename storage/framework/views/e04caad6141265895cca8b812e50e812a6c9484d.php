<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/Policie/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> السياسات
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>الاسم</th>
									<th>صوره</th>
									<th>الوصف</th>
									<th>ملف</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    <?php if($rows): ?>
							    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($row->name); ?></td>
									<td>
									    <?php if($row->img): ?>
			 <img src="<?php echo e(asset('assets/uplodedimage/'.$row->img)); ?>"
                      style="width:50px;height:50px;border-radius:50%" />
									    <?php else: ?>
									        لايوجد صوره
									    <?php endif; ?>
									</td>
									<td><?php echo e($row->description); ?></td>
									<td>
									    <a href="<?php echo e(asset('assets/uplodedfiles/'.$row->file)); ?>">
									            فتح
									    </a>
									</td>
									<td>
	<a href="<?php echo e(url(app('aurl').'/Policie/'.$row->id.'/edit')); ?>" title="" class="btn green"><i class="fa fa-edit"></i></a>
									
									<a href="#" class="btn red delrec" classform="deleteform<?php echo e($row->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									
									
								    <?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/Policie/'.$row->id,'class'=>'deleteform'.$row->id]); ?>

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