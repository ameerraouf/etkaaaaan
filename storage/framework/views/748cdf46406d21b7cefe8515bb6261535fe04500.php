<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> <?php echo e($title); ?>

							</div>
						</div>
	<div class="portlet-body form">
							<?php echo Form::open(['files'=>true]); ?>

								<div class="form-body">
									<div class="form-group">
										<label><?php echo e(trans('admin.sitename')); ?></label>
										<input name="sitename" type="text" placeholder="<?php echo e(trans('admin.sitename')); ?>" class="form-control" value="<?php echo e(Set::set()->sitename); ?>" placeholder="<?php echo e(trans('admin.sitename')); ?>">
										</div>
										 
										

										<div class="form-group">
										<label><?php echo e(trans('admin.siteurl')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-link"></i>
											</span>
											<input type="url"  value="<?php echo e(Set::set()->siteurl); ?>" name="siteurl" class="form-control" placeholder="<?php echo e(trans('admin.siteurl')); ?>">
										</div>
										</div>

										<!--<div class="form-group">-->
										<!--<label><?php echo e(trans('admin.active_users')); ?></label>-->
										<!--<div class="input-group">-->
										<!--	<span class="input-group-addon">-->
										<!--		<i class="fa fa-group"></i>-->
										<!--	</span>-->
										<!--<?php echo Form::select('active_users',['auto'=>trans('admin.auto'),'email'=>trans('admin.byemail'),'sms'=>trans('admin.bysms')],Set::set()->active_users,['class'=>'form-control']); ?>	-->
										<!--</div>-->
										<!--</div>-->
 
										<div class="form-group">
										<label><?php echo e(trans('admin.status_site')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-globe"></i>
											</span>
										<?php echo Form::select('status_site',['open'=>trans('admin.open'),'close'=>trans('admin.close')],Set::set()->status_site,['class'=>'form-control']); ?>	
										</div>
										</div>

										<div class="form-group">
										<label><?php echo e(trans('admin.status_message')); ?> </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-globe"></i>
											</span>
											 <textarea name="status_message" class="form-control" placeholder="<?php echo e(trans('admin.status_message')); ?>" ><?php echo e(Set::set()->status_message); ?></textarea>
										</div>
										</div>

										 
										<div class="form-group">
										<label><?php echo e(trans('admin.keywords')); ?> </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-tag"></i>
											</span>
											 <textarea name="keywords" class="form-control" placeholder="<?php echo e(trans('admin.keywords')); ?>" ><?php echo e(Set::set()->keywords); ?></textarea>
										</div>
										</div>

										<div class="form-group">
										<label><?php echo e(trans('admin.discription')); ?> </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-tag"></i>
											</span>
											 <textarea name="discription" class="form-control" placeholder="<?php echo e(trans('admin.discription')); ?>" ><?php echo e(Set::set()->discription); ?></textarea>
										</div>
										</div>
 	


										<div class="form-group">
										<label><?php echo e(trans('admin.active_comment')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-photo"></i>
											</span>
										<?php echo Form::select('active_comment',['1'=>trans('admin.open'),'0'=>trans('admin.close')],Set::set()->active_comment,['class'=>'form-control']); ?>	
										</div>
										</div>

										
 									    <div class="form-group">
										<label><?php echo e(trans('admin.enable_watermark')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-photo"></i>
											</span>
										<?php echo Form::select('enable_watermark',['1'=>trans('admin.open'),'0'=>trans('admin.close')],Set::set()->enable_watermark,['class'=>'form-control']); ?>	
										</div>
										</div>



										<div class="form-group">
										<label><?php echo e(trans('admin.watermark')); ?> </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-photo"></i>
											</span>
											 <input type="file" name="watermark" class="form-control">
											 <?php if(!empty(Set::set()->watermark)): ?>
											 <img src="<?php echo e(url('upload/'.Set::set()->watermark)); ?>" style="width:100px;height:100px;" />
											 <?php endif; ?>
										</div>
										</div>
 							 
 
										<hr />

										<div class="form-group">
										<label><?php echo e(trans('admin.sitemail')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
											<input type="email" 
											 value="<?php echo e(Set::set()->sitemail); ?>" name="sitemail" class="form-control" placeholder="<?php echo e(trans('admin.sitemail')); ?>">
										</div>
										</div>

										<div class="form-group">
										<label><?php echo e(trans('admin.fax')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-fax"></i>
											</span>
											<input type="text" 
											 value="<?php echo e(Set::set()->fax); ?>" name="fax" class="form-control" placeholder="<?php echo e(trans('admin.fax')); ?>">
										</div>
										</div>

										<div class="form-group">
										<label><?php echo e(trans('admin.phone')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-mobile-phone"></i>
											</span>
											<input type="text" 
											 value="<?php echo e(Set::set()->mobile2); ?>" name="mobile2" class="form-control" placeholder="<?php echo e(trans('admin.phone')); ?>">
										</div>
										</div>

										<div class="form-group">
										<label><?php echo e(trans('admin.facebook')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-facebook"></i>
											</span>
											<input type="text" 
											 value="<?php echo e(Set::set()->facebook); ?>" name="facebook" class="form-control" placeholder="<?php echo e(trans('admin.facebook')); ?>">
										</div>
										</div>

										<div class="form-group">
										<label><?php echo e(trans('admin.twitter')); ?></label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-twitter"></i>
											</span>
											<input type="text" 
											 value="<?php echo e(Set::set()->twitter); ?>" name="twitter" class="form-control" placeholder="<?php echo e(trans('admin.twitter')); ?>">
										</div>
										</div>


									
								</div>
								<div class="form-actions left">
								<?php echo Form::submit(trans('admin.save'),['class'=>'btn green']); ?>

								</div>
							<?php echo Form::close(); ?>

					 
					</div>
					<!-- END SAMPLE FORM PORTLET-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>