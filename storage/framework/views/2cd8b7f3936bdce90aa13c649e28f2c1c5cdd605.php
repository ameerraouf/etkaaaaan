<?php $__env->startSection('theme'); ?>
<?php if($page->active == 1): ?>
 	<div class="pagefile">
        <div class=" fixed-icons">
            <ul class=" mb-1 list-unstyled p-0 social-links text-center">
                <li class="nav-item d-inline-block">
                    <a class=" d-block " href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class=" d-block " href="#"><i class="fab fa-twitter"></i></a>
                    <a class=" d-block " href="https://wa.me/0558232328/?"><i class="fab fa-whatsapp"></i></a>
                    <a class=" d-block " href="#"><i class="fab fa-instagram"></i></a>
                    <a class=" d-block " href="#"><i class="fas fa-envelope s-envelope"></i></a>
                    <a class=" d-block " href="#"><i class="fab fa-snapchat-ghost"></i></a>
                    <a class=" d-block " href="https://www.youtube.com/channel/UCtjMnF1cgBVxjL52SoXjXfw"><i class="fab fa-youtube"></i></a>

                </li>
            </ul>
        </div>
        <div class="title"><?php echo e($title); ?></div>
        <div class="content add-toc">
       
          <?php echo $page->content; ?>

          
          <hr />
          <?php if($page->files): ?>
            <h3 class="text-center">ملفات</h3>
            <?php $__currentLoopData = $page->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(asset('assets/uplodedfiles/'. $file->file)); ?>" class="item slide-imgs h-100">
                    <?php echo e($file->file); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div><!-- end content -->
      </div><!-- end pagefile -->
<?php else: ?>
 <div class="alert alert-danger">
 	<h2>هذه الصفحة غير متاحة حاليا</h2>
 </div>
<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>