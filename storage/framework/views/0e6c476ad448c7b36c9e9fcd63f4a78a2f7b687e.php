<?php echo $__env->make(app('at').'.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make(app('at').'.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('admin'); ?>

<?php echo $__env->make(app('at').'.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>