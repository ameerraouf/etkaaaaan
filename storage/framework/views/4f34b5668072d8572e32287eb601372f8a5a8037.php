<?php $__env->startSection('theme'); ?>

    <div class="registerpage">
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
            <div class="registerform">
               <?php echo Form::open(); ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">إسم المستخدم</label>
                  <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">البريد الإلكتروني</label>
                  <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">كلمة المرور</label>
                  <input type="password" name="password"  class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">إعادة كلمة المرور</label>
                  <input type="password" name="password_confirmation"   class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">رقم الجوال</label>
                  <input type="text" name="mobile" class="form-control" value="<?php echo e(old('mobile')); ?>" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">النوع</label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineRadio1" <?php if(old('gender') == 'male'): ?> checked <?php endif; ?> value="male"> ذكر
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineRadio2" <?php if(old('gender') == 'female'): ?> checked <?php endif; ?> value="female"> أنثي
                  </label>
                </div><!-- end form-group -->
                <button type="submit">سـجـل الأن</button>
              <?php echo Form::close(); ?>

            </div><!-- end registerform -->
          </div><!-- end col-lg-8 -->
        </div><!-- end row -->
      </div><!-- end registerpage -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>