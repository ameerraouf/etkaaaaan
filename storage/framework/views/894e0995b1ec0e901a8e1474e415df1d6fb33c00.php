<?php $__env->startSection('admin'); ?>

			<div class="row inbox">
				<div class="col-md-2">
					<?php echo $__env->make(app('at').'.contactus.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-md-10">

 <div class="inbox-header inbox-view-header">
	<h1 class="pull-left"><?php echo e($msg->title); ?>

	<a href="#">
		 <?php echo e(trans('admin.'.$msg->move_to)); ?>

	</a>
	</h1>
	<div class="pull-right">
		<a href="javascript:window.print();"><i class="fa fa-print"></i></a>
	</div>
</div>
<div class="inbox-view-info">
	<div class="row">
		<div class="col-md-7">
			 <i class="fa fa-envelope"></i>
			<span class="bold">
				 <?php if(!empty($msg->user()->first())): ?>
				   <?php echo e($msg->user()->first()->name); ?>

				   <?php else: ?>
				   <?php echo e($msg->name); ?>

				 <?php endif; ?>
			</span>
			<span>
				 &#60;
				 <?php if(!empty($msg->user()->first())): ?>
				 <?php echo e($msg->user()->first()->email); ?>

				 <?php else: ?>
				 <?php echo e($msg->email); ?>

				 <?php endif; ?>
				 &#62;
			</span>
			 <?php echo e(trans('admin.to')); ?>

			<span class="bold">
				<?php echo e(trans('admin.site')); ?>

			</span>
			 <?php echo e(trans('admin.in')); ?> <?php echo e($msg->created_at); ?>

		</div>
	
			</div>
		</div>
		<div class="inbox-view">
		<?php echo e(trans('admin.mobile')); ?> : <?php echo e($msg->mobile); ?> <br>
		<?php echo e(trans('admin.email')); ?> : <?php echo e($msg->email); ?>

			<p>
		   <?php echo $msg->content; ?>

			</p>
		</div>
		<hr />
		<?php 
			$replays = $msg->replay()->paginate(5);
		 ?>
		<?php $__currentLoopData = $replays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $replay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		  <div class="inbox-view">
		  <i class="fa fa-user"></i> : <?php echo e($replay->user()->first()->name); ?>

			<p>
		   <?php echo $replay->content; ?>

			</p>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<hr>
		<?php echo $replays->appends(['move_to'=>Request::get('move_to')])->render(); ?>

		<div class="inbox-attached">
		 <?php 
		 	/*
			<div class="margin-bottom-15">
				<span>
					 <?php echo e(trans('admin.attachments')); ?>

				</span>
				<a href="#">
					 Download all attachments
				</a>
				<a href="#">
					 View all images
				</a>
			</div>
	<div class="margin-bottom-25">
				<img src="assets/img/gallery/image4.jpg">
				<div>
					<strong>image4.jpg</strong>
					<span>
						 173K
					</span>
					<a href="#">
						 View
					</a>
					<a href="#">
						 Download
					</a>
				</div>
			</div>
		 	*/
		  ?>
	
		</div>

				</div>
			</div>
 
			<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/contactus/'.$msg->id,'class'=>'deleteform'.$msg->id]); ?>

									<?php echo Form::close(); ?>


	<?php echo Form::open(['class'=>'inbox-compose form-horizontal','url'=>app('aurl').'/contactus/replay/'.$msg->id]); ?>

	<div class="inbox-compose-btn">
	
		   

		   	<div class="col-md-5 inbox-info-btn ">
			<div class="btn-group">
 						<button  type="submit" class="btn blue"><i class="fa fa-check"></i><?php echo e(trans('admin.send')); ?></button>
				<button class="btn blue dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right">
					 
					<li>
						<a href="<?php echo e(url(app('aurl').'/contactus')); ?>">
							<i class="fa fa-arrow-right reply-btn"></i> <?php echo e(trans('admin.back')); ?>

						</a>
					</li>
					<li>
						<a href="javascript:window.print();">
							<i class="fa fa-print"></i> <?php echo e(trans('admin.print')); ?>

						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#" class="delrec" classform="deleteform<?php echo e($msg->id); ?>">
							<i class="fa fa-trash-o"></i> <?php echo e(trans('admin.delete')); ?>

						</a>
					</li>
						<li>
						<a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id.'?move_to=inbox')); ?>" >
							<i class="fa fa-envelope"></i>  <?php echo e(trans('admin.inbox')); ?>

						</a>
					</li>
					<li>
						<a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id.'?move_to=trash')); ?>" >
							<i class="fa fa-trash-o"></i>  <?php echo e(trans('admin.trash')); ?>

						</a>
					</li>
						<li>
						<a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id.'?move_to=archive')); ?>" >
							<i class="fa fa-archive"></i>  <?php echo e(trans('admin.archive')); ?>

						</a>
					</li>
					<li>
					</div>
				</div>
					<div class="clearfix"></div>

	</div>
	<div class="inbox-form-group mail-to">
		<label class="control-label"><?php echo e(trans('admin.to')); ?></label>
		<div class="controls controls-to">
		<?php 
			if(!empty($msg->user()->first()->email))
			{
				$email = $msg->user()->first()->email;
			}else{
				$email = $msg->email;
			}
		 ?>
			<input type="text" class="form-control" name="to" value="<?php echo e($email); ?>">
			<span class="inbox-cc-bcc"  style="display:none">
				<span class="inbox-cc " style="display:none">
					 Cc
				</span>
				<span class="inbox-bcc">
					 Bcc
				</span>
			</span>
		</div>
	</div>
	<?php 
		/*
<div class="inbox-form-group input-cc hidden">
		<a href="javascript:;" class="close">
		</a>
		<label class="control-label">Cc:</label>
		<div class="controls controls-cc">
			<input type="text" name="cc" class="form-control" value="jhon.doe@gmail.com, kevin.larsen@gmail.com">
		</div>
	</div>
		*/
	 ?>
	<div class="inbox-form-group input-bcc display-hide">
		<a href="javascript:;" class="close">
		</a>
		<label class="control-label">Bcc:</label>
		<div class="controls controls-bcc">
			<input type="text" name="bcc" class="form-control">
		</div>
	</div>
	<div class="inbox-form-group">
		<label class="control-label"><?php echo e(trans('admin.subject')); ?>:</label>
		<div class="controls">
			<input type="text" class="form-control" name="subject" value="<?php echo e($msg->title); ?>">
		</div>
	</div>
	<div class="inbox-form-group">
		<div class="controls-row" dir="rtl">
			<textarea class="inbox-editor ckeditor form-control pull-right" style="text-align: right;float: right;" dir="rtl" name="content"  rows="12">
				<div  style="text-align: : right;" dir="rtl">
					<?php echo $msg->content; ?>

				<hr />
				<p><?php echo e(trans('admin.to')); ?> : <?php echo e($email); ?></p>
				<p><?php echo e(trans('admin.subject')); ?> : <?php echo e($msg->title); ?></p>
					<br />
					<hr />
				</div>
 	 		</textarea>
		  
		</div>
	</div>

	<div class="inbox-compose-btn">
	

		   	<div class="col-md-5 inbox-info-btn ">
			<div class="btn-group">
 						<button  type="submit" class="btn blue"><i class="fa fa-check"></i><?php echo e(trans('admin.send')); ?></button>
				<button class="btn blue dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right">
					 
					<li>
						<a href="<?php echo e(url(app('aurl').'/contactus')); ?>">
							<i class="fa fa-arrow-right reply-btn"></i> <?php echo e(trans('admin.back')); ?>

						</a>
					</li>
					<li>
						<a href="javascript:window.print();">
							<i class="fa fa-print"></i> <?php echo e(trans('admin.print')); ?>

						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#" class="delrec" classform="deleteform<?php echo e($msg->id); ?>">
							<i class="fa fa-trash-o"></i> <?php echo e(trans('admin.delete')); ?>

						</a>
					</li>
						<li>
						<a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id.'?move_to=inbox')); ?>" >
							<i class="fa fa-envelope"></i>  <?php echo e(trans('admin.inbox')); ?>

						</a>
					</li>
					<li>
						<a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id.'?move_to=trash')); ?>" >
							<i class="fa fa-trash-o"></i>  <?php echo e(trans('admin.trash')); ?>

						</a>
					</li>
						<li>
						<a href="<?php echo e(url(app('aurl').'/contactus/'.$msg->id.'?move_to=archive')); ?>" >
							<i class="fa fa-archive"></i>  <?php echo e(trans('admin.archive')); ?>

						</a>
					</li>
					<li>
					</div>
				</div>
					<div class="clearfix"></div>
	
	</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>