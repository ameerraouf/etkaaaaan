<?php $__env->startSection('theme'); ?>

   <div class="categoryshow">
        <div class="title" dir="rtl">نتائج البحث عن كلمة { <?php echo e($title); ?> } = <?php echo e(count($searches)); ?> نتيجة !</div>
        <div class="content">
        <?php if(count($searches) > 0): ?>
         <?php $__currentLoopData = $searches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="postitem">
            <div class="imgthumb">
              <a href="<?php echo e(url('news/'.$search->id.'/'.$search->title)); ?>" title="<?php echo e($search->title); ?>">
		 

			 							  <?php $youtube = explode('||',$search->youtube); ?>
										  <?php if(!empty($search->photo)): ?>
											<img src="<?php echo e(url('upload/'.$search->photo)); ?>" alt="">
										  <?php else: ?>

										  <?php if(!empty($youtube[0])): ?>
										  <img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[0])); ?>/hqdefault.jpg" alt="">
										  <?php elseif(!empty($youtube[1])): ?>
										  <img src="https://i1.ytimg.com/vi/<?php echo e(Set::youtubelink($youtube[1])); ?>/hqdefault.jpg" alt="">
										  <?php endif; ?>

										  <?php endif; ?>	


              </a>
            </div><!-- end imgthumb -->
            <div class="descrption">
              <h1><a href="#"><?php echo e($search->title); ?></a></h1>
              <span ><i class="fa fa-calendar-plus-o"></i> <?php echo e($search->created_at); ?></span>
              <span class="hidden"><i class="fa fa-eye"></i> 53 مشاهدة</span>
              <span class="hidden"><i class="fa fa-flag"></i> رقم الخبر : 5254</span>
              <h2>
 
              	<?php echo e(mb_substr(strip_tags($search->content),0,200, "utf-8")); ?>

              </h2>
            </div><!-- end descrption -->
            <div class="clearfix"></div>
          </div><!-- end postitem -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php else: ?>

         <?php endif; ?>


         <?php echo $searches->appends(['search'=>Request::get('search')])->render(); ?>

        </div><!-- end content -->
      </div><!-- end categoryshow -->
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>