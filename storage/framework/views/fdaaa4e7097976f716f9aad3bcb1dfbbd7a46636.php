	<div class="inbox-header">
						<h1 class="pull-left"><?php echo e(trans('admin.inbox')); ?></h1>
							<?php echo Form::open(['method'=>'get','class'=>'form-inline pull-right']); ?>

							<div class="input-group input-medium">
								<input type="text" name="search" class="form-control" value="<?php echo e(Request::get('search')); ?>" placeholder="<?php echo e(trans('admin.search')); ?>">
								<span class="input-group-btn">
									<button type="submit" class="btn green"><i class="fa fa-search"></i></button>
								</span>
							</div>
						   <?php echo Form::close(); ?>								
					</div>
					<div class="inbox-loading">
					<?php echo Form::open(['url'=>app('aurl').'/contactus/go','method'=>'post']); ?>

 						<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th></th>
									<th>الرساله</th>
									<th><?php echo e(trans('admin.sent_by')); ?></th>
								</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								 <tr <?php if($msg->reading == 0): ?> class="success" <?php endif; ?>>
								 	<td><input type="checkbox" name="id[]" value="<?php echo e($msg->id); ?>"></td>
								 	<td><a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id)); ?>"><?php echo e($msg->content); ?></a></td>
								 	<td>
    								 <?php echo e($msg->email); ?>

								 	</td>
								 </tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						   	</tbody>
								</table>
				<?php if(count($messages) > 0): ?>				
	       	   	<div class="col-md-5 inbox-info-btn ">
  				 	   <?php echo Form::select('move_to',[
 				 	   			'inbox'=>trans('admin.inbox'),
 				 	   			'trash'=>trans('admin.trash'),
 				 	   			'archive'=>trans('admin.archive'),
 				 	   			'delete'=>trans('admin.delete'),
 				 	   			],'',['class'=>'form-control','style'=>'display:inline']); ?>

			    	</div>
	       	   	<div class="col-md-5 inbox-info-btn ">
 		 			 <?php echo Form::submit(trans('admin.send'),['class'=>'btn green','style'=>'display:inline']); ?>

			    	</div>
					<div class="clearfix"></div>
								<?php echo Form::close(); ?>


								<?php echo $messages->appends([
										'search'=>Request::get('search'),
										'move_to'=>Request::get('move_to'),
									])->render(); ?>

					</div>
					<?php endif; ?>
					<div class="inbox-content">
 					</div>
 