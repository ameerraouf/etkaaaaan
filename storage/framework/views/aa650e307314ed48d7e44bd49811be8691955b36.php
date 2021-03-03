<ul class="inbox-nav margin-bottom-10">
						<li class="compose-btn">
							<a href="<?php echo e(url(app('aurl').'/contactus/new/compose')); ?>" data-title="<?php echo e(trans('admin.compose')); ?>" class="btn green">
								<i class="fa fa-edit"></i> <?php echo e(trans('admin.compose')); ?>

							</a>
						</li>

						<li class="compose-btn">
						    <a href="<?php echo e(url(app('aurl').'/contactus/cronjob/messages')); ?>" data-title="<?php echo e(trans('admin.compose')); ?>" class="btn green">
								<i class="fa fa-envelope"></i> <?php echo e(trans('admin.cronjob_emails')); ?>

							</a>
						</li>

						
						<li class="inbox <?php if(!Request::has('move_to') || Request::get('move_to') == 'inbox'): ?> active <?php endif; ?>">
							<a href="<?php echo e(url(app('aurl'))); ?>/contactus?move_to=inbox" class="btn" data-title="Inbox">
								<i class="fa fa-envelope-o"></i>
								<?php 
									$countinbox = App\Contact::where('reading',0)->count();
								 ?>
								 <?php echo e(trans('admin.inbox')); ?> <?php if($countinbox > 0): ?> (<?php echo e($countinbox); ?>) <?php endif; ?>
							</a>
							<b></b>
						</li>
				<?php 
					/*		<li class="sent  <?php if(Request::get('move_to') == 'sent'): ?> active <?php endif; ?>">
							<a class="btn" href="<?php echo e(url(app('aurl'))); ?>/contactus?move_to=sent" data-title="Sent">
								 <?php echo e(trans('admin.sent')); ?>

							</a>
							<b></b>
						</li>*/
				 ?>
						<li class="archive <?php if(Request::get('move_to') == 'archive'): ?> active <?php endif; ?>">
							<a class="btn" href="<?php echo e(url(app('aurl'))); ?>/contactus?move_to=archive" data-title="<?php echo e(trans('admin.archive')); ?>">
							<i class="fa fa-archive"></i>	 
							<?php echo e(trans('admin.archive')); ?> (<?php echo e(App\Contact::where('move_to','archive')->count()); ?>)
							</a>
							<b></b>
						</li>
						<li class="trash <?php if(Request::get('move_to') == 'trash'): ?> active <?php endif; ?>">
							<a class="btn" href="<?php echo e(url(app('aurl'))); ?>/contactus?move_to=trash" data-title="trash">
							<i class="fa fa-trash-o"></i>
								 <?php echo e(trans('admin.trash')); ?> (<?php echo e(App\Contact::where('move_to','trash')->count()); ?>)
							</a>
							<b></b>
						</li>
					</ul>