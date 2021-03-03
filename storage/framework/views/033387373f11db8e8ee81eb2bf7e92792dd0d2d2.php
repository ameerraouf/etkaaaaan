<?php $__env->startSection('admin'); ?>
<a href="<?php echo e(url(app('aurl').'/Ads/create')); ?>" class="btn green"><?php echo e(trans('admin.add')); ?></a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-globe"></i> 
    البنرات
              </div>
            </div>
            <div class="portlet-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead>
                <tr>
                  <th>الاول</th>
                  <th>الثاني</th>
                  <th>الثالث</th>
                  <th>الرابع</th>
                  <th>##</th>
                </tr>
                </thead>
                <tbody>
                  <?php if($ads): ?>
                <tr>
                  <td>
                      <?php if($ads->one): ?>
                      <a href="<?php echo e($ads->link_one); ?>" />
                          <img src="<?php echo e(asset('assets/adsimgs/'.$ads->one)); ?>"
                          style="width:50px;height:50px;border-radius:50%" />
                      </a>
                      <?php else: ?> 
                        لايوجد
                      <?php endif; ?>
                  </td>
                  
                  <td>
                      <?php if($ads->tow): ?>
                      <a href="<?php echo e($ads->link_two); ?>" />
                          <img src="<?php echo e(asset('assets/adsimgs/'.$ads->tow)); ?>"
                          style="width:50px;height:50px;border-radius:50%" />
                      </a>
                      <?php else: ?> 
                        لايوجد
                      <?php endif; ?>
                  </td>
                  
                  <td>
                      <?php if($ads->three): ?>
                      <a href="<?php echo e($ads->link_three); ?>" />
                          <img src="<?php echo e(asset('assets/adsimgs/'.$ads->three)); ?>"
                          style="width:50px;height:50px;border-radius:50%" />
                        </a>
                      <?php else: ?> 
                        لايوجد
                      <?php endif; ?>
                  </td>
                  
                  <td>
                      <?php if($ads->four): ?>
                      <a href="<?php echo e($ads->link_four); ?>" />
                          <img src="<?php echo e(asset('assets/adsimgs/'.$ads->four)); ?>"
                          style="width:50px;height:50px;border-radius:50%" />
                        </a>
                      <?php else: ?> 
                        لايوجد
                      <?php endif; ?>
                  </td>
                
                
                  <td>
  <a href="<?php echo e(url(app('aurl').'/Ads/'.$ads->id.'/edit')); ?>" title="" class="btn green"><i class="fa fa-edit"></i></a>
                  
                  <a href="#" class="btn red delrec" classform="deleteform<?php echo e($ads->id); ?>" title="<?php echo e(trans('admin.delete')); ?>"><i class="fa fa-times"></i></a>
                  
                  
                    <?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/Ads/'.$ads->id,'class'=>'deleteform'.$ads->id]); ?>

                  <?php echo Form::close(); ?>

                  
                    
                    
                  </td>
                </tr>
                  <?php endif; ?>
              
                </tbody>
                </table>
              
              </div>
            </div>
          </div>
          <!-- END SAMPLE TABLE PORTLET-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>