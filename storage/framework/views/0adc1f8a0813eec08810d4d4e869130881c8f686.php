<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/partner/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-file"></i> شركاء العمل
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered text-center">
								<thead class="thead-dark">
								<tr>
									<th><?php echo e(trans('الاسم')); ?></th>
									<th><?php echo e(trans('الشعار')); ?></th>
									<th><?php echo e(trans('admin.action')); ?></th>
								</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($partner->name); ?></td>
									<td><img src="<?php echo e(asset('public/'. $partner->logo)); ?>"></td>
									<td>
								    <a href="<?php echo e(url(app('aurl').'/partner/'.$partner->id.'/edit')); ?>" title="" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform<?php echo e($partner->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/partner/'.$partner->id,'class'=>'deleteform'.$partner->id]); ?>

									<?php echo Form::close(); ?>

									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php if($partners->count() == 0): ?>
								    <tr>
								        <td colspan="3">لا يوجد بيانات</td>
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