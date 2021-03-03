<?php $__env->startSection('theme'); ?>

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
        <div class="title">
            التقارير السنويه
        </div>
        <div class="content add-toc">
      
                <div class="row w-100 p-0 m-0">
                    
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card mb-3" >
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img 
                                    src="<?php echo e(asset('assets/uplodedimage/'.$row->img)); ?>" 
                                    class="card-img w-100 h-100" style="object-fit: cover" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-2">
                                        <h6 class="card-title mb-1"><small>
                                                <?php echo e($row->name); ?>

                                            </small></h6>
                                        <p class="" style="white-space: nowrap;text-overflow: ellipsis;width: 100%;overflow: hidden;"
                                        >
                                            <?php echo e($row->description); ?>

                                        </p>
                                        <div class="text-left">
                                            <a target="_blank" class="text-danger " href="<?php echo e(asset('assets/uplodedfiles/'.$row->file)); ?>">
                                                <small>ملف</small> <i class=" fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    
                    
                </div>

	       <hr />
	
         
        </div><!-- end content -->
      </div><!-- end pagefile -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>