<?php $__env->startSection('theme'); ?>

   
     <div class="loginpage">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
               <div class="registerlinks">
              <a href="<?php echo e(url('register')); ?>" title="#"><?php echo e(trans('main.register')); ?></a>
              <a href="<?php echo e(url('login')); ?>" title="#">تسجيل الدخول</a>
              <a href="<?php echo e(url('page/1')); ?>" title="#">تعليمات التسجيل</a>
              <a href="<?php echo e(url('contactus')); ?>" title="#">تواصل معنا</a>
            </div><!-- end registerlinks -->
          </div><!-- end col-lg-4 -->
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="loginform">
              <?php echo Form::open(); ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">إسم المستخدم او البريد الإلكتروني</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">كلمة المرور</label>
                  <input type="password" name="password" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="forgetpass"><a href="<?php echo e(url('forgot/password')); ?>">نسيت كلمة المرور؟</a></div>
                <button type="submit">دخــول</button>
              <?php echo Form::close(); ?>

            </div><!-- end loginform -->
          </div><!-- end col-lg-8 -->
        </div><!-- end row -->
      </div><!-- end loginpage -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>