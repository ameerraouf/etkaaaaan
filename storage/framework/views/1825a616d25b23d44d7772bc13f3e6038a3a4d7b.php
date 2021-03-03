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
            <div class="ressetform">
              <?php echo Form::open(); ?>

                <p>ادخل عنوان بريدك الإلكتروني وسنرسل لك رابط لإعادة ضبط كلمة السر الخاصة بك</p>
                <div class="form-group">
                  <label for="exampleInputEmail1">البريد الإلكتروني</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <button type="submit">أرسل</button>
              <?php echo Form::close(); ?>

            </div><!-- end ressetform -->
          </div><!-- end col-lg-8 -->

        </div><!-- end row -->
      </div><!-- end loginpage -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>