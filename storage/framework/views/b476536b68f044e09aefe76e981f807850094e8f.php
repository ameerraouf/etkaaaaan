<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/links/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<script>
$(document).on('click','.delrec',function(){
	var furl = $(this).attr('furl');
	var classid = $(this).attr('classid');
	var classform = $(this).attr('classform');

	$('.formdelete').removeClass();
	$('#formdelete').addClass('formdelete');
	$('.formdelete').attr('action','<?php echo e(url('/')); ?>/'+furl);
	$('.formdelete').addClass(classform);
});
</script>
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-link"></i> <?php echo e($title); ?>

							</div>
						</div>
						<div class="portlet-body">
						<?php echo Form::open(); ?>

							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>ترتيب</th>
									<th><?php echo e(trans('admin.name')); ?></th>
									<th><?php echo e(trans('admin.url')); ?></th>
									<th><?php echo e(trans('admin.type')); ?></th>
									<th><?php echo e(trans('admin.action')); ?></th>
								</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>
									<input type="text" name="dir[]" style="width:50px" value="<?php echo e($link->dir); ?>">
									<input type="hidden" name="id[]" value="<?php echo e($link->id); ?>">
									</td>
									<td><?php echo e($link->name); ?></td>
									<td><?php echo e($link->url); ?></td>
									<td><?php echo e(trans('admin.'.$link->typelink)); ?></td>
									<td>
									<a href="<?php echo e(url(app('aurl').'/links/'.$link->id.'/edit')); ?>" title="<?php echo e(trans('admin.edit')); ?>" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red  delrec" classform="deleteform<?php echo e($link->id); ?>" classid="<?php echo e($link->id); ?>" furl="<?php echo e(app('aurl').'/links/'.$link->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
									
									</td>
								</tr>
								<tr>
									<td colspan="5">
										 <?php $__currentLoopData = App\Link::where('parent',$link->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										 <div class="col-md-6">
										 	<input type="text" name="dir[]" style="width:50px" value="<?php echo e($sub->dir); ?>">
										      <input type="hidden" name="id[]" value="<?php echo e($sub->id); ?>">

										 	<a href="<?php echo e(url($sub->url)); ?>" target="_blank"><?php echo e($sub->name); ?></a>
										 </div>
										 <div class="col-md-6">
										 	<a href="<?php echo e(url(app('aurl').'/links/'.$sub->id.'/edit')); ?>" title="<?php echo e(trans('admin.edit')); ?>" class="btn green"><i class="fa fa-edit"></i></a>
										

											    
											 <a href="#" class="btn red  delrec" 
											 classform="deleteform<?php echo e($sub->id); ?>" 
											 classid="<?php echo e($sub->id); ?>" 
											 furl="<?php echo e(app('aurl').'/links/'.$sub->id); ?>" 
											 title="<?php echo e(trans('admin.delete')); ?>"
											 ><i class="fa fa-times"></i></a>
											 
										 </div>
										 <div class="clearfix"></div>
										 <hr />
										 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td>
								</tr>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
								</table>
								<input type="submit" name="save" value="حفظ الترتيب " class="btn green" />
								<?php echo Form::close(); ?>

								<?php echo $links->render(); ?>

							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->

					<?php echo Form::open(['method'=>'delete','url'=>'','class'=>'formdelete','id'=>'formdelete']); ?>

					<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>