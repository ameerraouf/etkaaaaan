<?php echo $__env->make(app('tmp').'.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make(app('tmp').'.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php if(auth()->user()): ?>
<?php if(auth()->user()->active == 0): ?>

 <?php if(Set::set()->active_users == 'email'): ?>
 <div class="alert alert-danger">
 	<h1>حسابك لم يتم تفعيله حتي الان </h1>
 	<h3>اضغط على الزر ادناه وقم تفعيل الحساب عبر البريد الالكتروني الخاص بك </h3>
 <a href="<?php echo e(url('resend/active/account')); ?>" class="btn btn-danger">اضغط هنا للتفعيل عبر البريد الالكتروني  </a>
 </div>
 <?php elseif(Set::set()->active_users == 'sms'): ?>
 
  <div class="alert alert-warning">
     <h1><i class="fa fa-envelope"></i> قم بتفعيل حسابك عبر رسالة SMS بكود التفعيل الخاص بحسابك</h1>
  	 <h1> <i class="fa fa-phone"></i> لم تستلم كود التفعيل ؟!! </h1>
  	 <a href="<?php echo e(url('active/sms/code')); ?>" class="btn btn-danger">اضغط هنا وسنقوم بإرسال كود التفعيل على جوالك</a>
  </div>
  <hr />

  <div class="alert alert-info">
  	 <h1> <i class="fa fa-phone"></i> ادخل كود التفعيل هنا واضغط على تفعيل ليصبح حسابك جاهز </h1>
  	 <?php echo Form::open(['url'=>'active/sms/code']); ?>

  	  <div class="col-md-6">
  	  	 <input type="text" name="code" placeholder="كود التفعيل" class="form-control"> 
  	  </div>
  	  <div class="col-md-6">
  	  	<input type="submit" name="active" value="تفعيل" class="btn btn-info" >
  	  </div>
  	 <?php echo Form::close(); ?>

  	 <div class="clearfix"></div>
  </div>



 <?php endif; ?>
 <br />
<?php elseif(auth()->user()->blocking_user == 1): ?>
 <div class="alert alert-danger">
 	<h1><?php echo e(trans('main.user_blocking')); ?></h1>
 </div>
<?php else: ?>

<?php echo $__env->yieldContent('theme'); ?>

<?php endif; ?>

<?php else: ?>

<?php echo $__env->yieldContent('theme'); ?>

<?php endif; ?>

<?php echo $__env->make(app('tmp').'.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>