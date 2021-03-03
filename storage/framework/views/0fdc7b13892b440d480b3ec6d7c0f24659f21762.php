<?php $__env->startSection('admin'); ?>
 
	<div class="row">
    		 

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat blue">
            <div class="visual"><i class="fa fa-group"></i></div>
            <div class="details">
              <div class="number"><?php echo e(App\User::where('level','admin')->count()); ?></div>
              <div class="desc">عدد المشرفين</div>
            </div>
            <a class="more" href="<?php echo e(url(app('aurl').'/users?level=admin')); ?>">المزيد <i class="m-icon-swapright m-icon-white"></i></a>
        	</div>
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat green">
            <div class="visual">
               <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <div class="details">
              <div class="number"><?php echo e(App\Pay::count()); ?></div>
              <div class="desc">
                  عدد المدفوعات
              </div>
            </div>
            <a class="more" href="<?php echo e(url(app('aurl').'/users?level=store')); ?>">المزيد <i class="m-icon-swapright m-icon-white"></i></a>
        	</div>
    		</div>


    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat btn-primary">
            <div class="visual"><i class="fa fa-group"></i></div>
            <div class="details">
              <div class="number"><?php echo e(App\Admin::count()); ?></div>
              <div class="desc">مجموعات المشرفين</div>
            </div>
            <a class="more" href="<?php echo e(url(app('aurl').'/admingroup')); ?>">المزيد <i class="m-icon-swapright m-icon-white"></i></a>
        	</div>
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat yellow">
            <div class="visual">
                <i class="fa fa-comment" aria-hidden="true"></i>
            </div>
            <div class="details">
              <div class="number"><?php echo e(App\Said::count()); ?></div>
              <div class="desc">
                  قالو عنا 
              </div>
            </div>
            <a class="more" href="<?php echo e(url(app('aurl').'/users?active=0')); ?>">المزيد <i class="m-icon-swapright m-icon-white"></i></a>
        	</div>
    		</div>


    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat hos-info">
            <div class="visual"><i class="fa fa-film"></i></div>
            <div class="details">
              <div class="number"><?php echo e(App\Episode::count()); ?></div>
              <div class="desc">
                  طلبات الحلقات
              </div>
            </div>
     
        	</div>
    		</div>

 
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat btn-warning">
            <div class="visual"><i class="fa fa-file-o"></i></div>
            <div class="details">
              <div class="number"><?php echo e(App\Page::count()); ?></div>
              <div class="desc">عدد الصفحات</div>
            </div> 
        	</div>
    		</div>
    		
    		
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat btn-info">
            <div class="visual">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="details">
              <div class="number"><?php echo e(App\Market::count()); ?></div>
              <div class="desc">
                  المنتجات في المتجر
              </div>
            </div> 
        	</div>
    		</div>

     
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat purple">
            <div class="visual"><i class="fa fa-clock-o"></i></div>
            <div class="details">
              <div class="number"><?php echo e(App\Banner::count()); ?></div>
              <div class="desc">عدد البنرات</div>
            </div> 
        	</div>
    		</div>

    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        	<div class="dashboard-stat hos-site">
            <div class="visual"><i class="fa fa-envelope"></i></div>
            <div class="details">
              <div class="number"><?php echo e(App\Contact::count()); ?></div>
              <div class="desc">إتصل بنا</div>
            </div> 
        	</div>
    		</div>

 
  
          
<div class="clearfix"></div>
<hr />
<div class="clearfix"></div>
       
    


			</div>

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>