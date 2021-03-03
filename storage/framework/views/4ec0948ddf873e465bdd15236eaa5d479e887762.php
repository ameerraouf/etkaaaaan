<?php $__env->startSection('admin'); ?>

<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
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
									<th>السعر</th>
									<th>الدوله</th>
									<th>المدينه</th>
									<th>الاسم</th>
									<th>رقم الهاتف</th>
									<th>الايميل</th>
									<th>النوع </th>
									<th>البنك</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
								    
							    <?php if($says): ?>
							    <?php $__currentLoopData = $says; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $said): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							   
								<tr>
									<td><?php echo e($said->price); ?></td>
									<td><?php echo e($said->country); ?></td>
									<td><?php echo e($said->city); ?></td>
									<td><?php echo e($said->name); ?></td>
									<td><?php echo e($said->phone); ?></td>
									<td><?php echo e($said->email); ?></td>
									<td><?php echo e($said->type); ?></td>
									<td><?php echo e($said->bank); ?></td>
									<td>
                                    
                                <a href="#" class="btn red delrec" classform="deleteform<?php echo e($said->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									
								    <?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/Pay/'.$said->id,'class'=>'deleteform'.$said->id]); ?>

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