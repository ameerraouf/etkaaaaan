<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/pages/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-file"></i> <?php echo e($title); ?>

							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered table table-striped">
								<thead>
								<tr>
									<th><?php echo e(trans('admin.name')); ?></th>
									<th><?php echo e(trans('admin.status')); ?></th>
									<th>ملفات</th>
									<th><?php echo e(trans('admin.action')); ?></th>
								</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($page->name); ?></td>
									<td><?php echo e(trans('admin.'.$page->active)); ?></td>
									<td>
									     <?php if($page->files->count()): ?>
                                            <?php $__currentLoopData = $page->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(asset('assets/uplodedfiles/'. $file->file)); ?>" class="item slide-imgs h-100">
                                                    <?php echo e($file->file); ?>

                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?> 
                                       لايوجد
                                          <?php endif; ?>
                                	</td>
									<td>
									    <center>
									<a href="<?php echo e(url(app('aurl').'/pages/'.$page->id.'/edit')); ?>" title="<?php echo e(trans('admin.edit')); ?>" class="btn hos-success">
									    <i class="fa fa-edit"></i>
									</a>
									<a href="<?php echo e(url('/page/'.$page->id)); ?>" target="_blank" title="<?php echo e(trans('admin.show')); ?>" class="btn hos-info">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="#" class="btn hos-danger delrec" classform="deleteform<?php echo e($page->id); ?>" title="<?php echo e(trans('admin.delete')); ?>">
									    <i class="fa fa-times"></i>
									</a>
									<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/pages/'.$page->id.'/delete','class'=>'deleteform'.$page->id]); ?>

									  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
									<?php echo Form::close(); ?>

									</center>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
								</table>
								<?php echo $pages->render(); ?>

							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>