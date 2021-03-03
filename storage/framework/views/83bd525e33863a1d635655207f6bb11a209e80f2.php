<?php $__env->startSection('theme'); ?>


<div class="contactuspage">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="contactdetils">
             <?php if(Set::set()->mobile2 != NULL): ?>
              <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <?php echo e(Set::set()->mobile2); ?>

              </span>
             <?php endif; ?>
             <?php if(Set::set()->mobile1 != NULL): ?>
              <span>
                <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                <?php echo e(Set::set()->mobile1); ?>

              </span>
             <?php endif; ?>
              <?php if(Set::set()->fax != NULL): ?>
              <span>
                <i class="fa fa-fax" aria-hidden="true"></i>
                <?php echo e(Set::set()->fax); ?>

              </span>
             <?php endif; ?>
              <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <?php echo e(Set::set()->sitemail); ?>

              </span>
               <?php if(Set::set()->fax != NULL): ?>
	              <a href="<?php echo e(Set::set()->facebook); ?>" target="_blank"><i aria-hidden="true" class="fa fa-facebook"></i></a>
               <?php endif; ?>
               <?php if(Set::set()->fax != NULL): ?>
                <a href="<?php echo e(Set::set()->twitter); ?>" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a>
               <?php endif; ?>
                <?php if(Set::set()->youtube != NULL): ?>
                 <a href="<?php echo e(Set::set()->youtube); ?>" target="_blank"><i aria-hidden="true" class="fa fa-youtube"></i></a>
                <?php endif; ?>
                <?php if(Set::set()->pinterest != NULL): ?>
	              <a href="<?php echo e(Set::set()->pinterest); ?>" target="_blank"><i aria-hidden="true" class="fa fa-pinterest-p"></i></a>
	            <?php endif; ?>
	            <?php if(Set::set()->skype != NULL): ?>
                 <a href="skype:<?php echo e(Set::set()->skype); ?>" target="_blank"><i aria-hidden="true" class="fa fa-skype"></i></a>
                <?php endif; ?>
                <?php if(Set::set()->linkedin != NULL): ?>
	              <a href="<?php echo e(Set::set()->linkedin); ?>" target="_blank"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
	            <?php endif; ?>
            </div><!-- end contactdetils -->



            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBZWz8oCWUVF5x2qYf8YQb8QKbKmXp_DY&callback=initialize" async defer></script>
            <div id="map" style="height: 450px;width:100%;"></div>

                <script type="text/javascript">
                    var map;
                    function initialize(){

                    <?php if(Set::set()->address_lat_lng == '' || Set::set()->address_lat_lng == null): ?>
                      var data = new Array(24.71205535972918,46.67198138574213,10);
                      $('.address_lat_lng').val(data[0]+','+data[1]+','+data[2]);
                    <?php else: ?>
                     <?php
$lats = explode(',', Set::set()->address_lat_lng);
?>
                      var data = new Array(<?php echo e($lats[0]); ?>,<?php echo e($lats[1]); ?>,<?php echo e($lats[2]); ?>);
                    <?php endif; ?>
                  var zoomer = parseInt(data[2]);
                  var myLatlng = new google.maps.LatLng(data[0],data[1]);
                  var myOptions = {
                      zoom:zoomer,
                      center: myLatlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  }

                map = new google.maps.Map(document.getElementById("map"), myOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    draggable: false,
                 });


                    }

                window.onload = function () { initialize() };
                </script> -->

          </div><!-- end col-lg-4 -->
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="contactusform">
              <?php echo Form::open(); ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">الاسم</label>
                  <input type="text" name="name" <?php if(auth()->user()): ?> value="<?php echo e(auth()->user()->name); ?>" <?php else: ?>  value="<?php echo e(old('name')); ?>" <?php endif; ?> class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">البريد الإلكتروني</label>
                  <input type="email" class="form-control" name="email" <?php if(auth()->user()): ?> value="<?php echo e(auth()->user()->email); ?>" <?php else: ?> value="<?php echo e(old('email')); ?>" <?php endif; ?> id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">رقم الجوال</label>
                  <input type="text" class="form-control" name="mobile" <?php if(auth()->user()): ?> value="<?php echo e(auth()->user()->mobile); ?>" <?php else: ?>  value="<?php echo e(old('mobile')); ?>" <?php endif; ?>  id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">عنوان الرسالة</label>
                  <input type="text" name="title" value="<?php echo e(old('title')); ?>" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                        <div class="form-group">
                  <label for="exampleInputEmail1">نوع الرسالة</label>
                   <?php echo Form::select('type_id',App\TypeCon::pluck('name','id'),old('type_id'),['class'=>'form-control']); ?>

                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">محتوي رسالتك</label>
                  <textarea class="form-control" name="content" rows="10"><?php echo e(old('content')); ?></textarea>
                </div><!-- end form-group -->
                <button type="submit">أرسل الأن</button>
              <?php echo Form::close(); ?>

            </div><!-- end contactusform -->
          </div><!-- end col-lg-8 -->
        </div><!-- end row -->
      </div><!-- end contactuspage -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('tmp').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>