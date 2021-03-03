<?php $__env->startSection('theme'); ?>

 <?php if(auth()->user()->level == 'admin'): ?>
  <div class="alert alert-danger">
    <h1>المشرفين لا يوجد لديهم تحكم او ملفات كمستفيدين برجاء قم بإعداد حسابك من لوحة تحكم الادارة</h1>
  </div>
 <?php else: ?>
     <div class="userpanelpage">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="userpanelitem">
              <a href="<?php echo e(url('step')); ?>">
                <i class="fa fa-edit" aria-hidden="true"></i>
                <span>تعبئة / إستكمال الطلب</span>
              </a>
            </div><!-- end userpanelitem -->
          </div><!-- end col-lg-3 -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="userpanelitem">
              <a href="#">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>ملخص معلومات المستفيد</span>
              </a>
            </div><!-- end userpanelitem -->
          </div><!-- end col-lg-3 -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="userpanelitem">
              <a href="<?php echo e(url('myaccount/edit')); ?>">
                <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                <span>تغيير رقم الجوال / البيانات</span>
              </a>
            </div><!-- end userpanelitem -->
          </div><!-- end col-lg-3 -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="userpanelitem">
              <a href="<?php echo e(url('myaccount/change/password')); ?>">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <span>تغيير كلمة المرور</span>
              </a>
            </div><!-- end userpanelitem -->
          </div><!-- end col-lg-3 -->
          <div class="clearfix"></div>
        </div><!-- end row -->
      </div><!-- end userpanelpage -->
 <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>