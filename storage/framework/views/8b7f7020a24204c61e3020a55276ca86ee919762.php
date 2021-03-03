   </div>
 </div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 <?php echo e(date('Y')); ?> &copy; كوكبة التقنية
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
 
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo e(url('assets')); ?>/plugins/respond.min.js"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(url('assets')); ?>/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>

<script src="<?php echo e(url('assets')); ?>/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo e(url('assets')); ?>/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(url('assets')); ?>/scripts/custom/index.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/scripts/custom/tasks.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-bootpag/jquery.bootpag.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/holder.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/scripts/custom/ui-general.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/scripts/custom/inbox.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   UIGeneral.init();
   Index.init();
  // Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Index.initIntro();
   Tasks.initDashboardWidget();
      Inbox.init();
      //FormSamples.init();
});
</script>
<!-- END JAVASCRIPTS -->
<?php echo $__env->yieldPushContent('js'); ?>
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
   <script type="text/javascript">
    $(document).on('click','.modalbtndel',function(){
     var classform = $(this).attr('classform');
      $('.'+classform).submit();
      return false;
    });
    $(document).on('click','.delrec',function(){
     var classform = $(this).attr('classform');
     //alert(classform);
     $('.deletemodal').modal('show');
     $('.modalbtndel').attr('classform',classform);
     return false;
    });  
   </script>
         <div class="deletemodal modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="deletemodal" aria-hidden="true" >
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title"><?php echo e(trans('admin.delete')); ?></h4>
                  </div>
                  <div class="modal-body">
                      <?php echo e(trans('admin.askdel')); ?>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn red modalbtndel"><?php echo e(trans('admin.delete')); ?></button>
                     <button type="button" class="btn green" data-dismiss="modal"><?php echo e(trans('admin.cancel')); ?></button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
</body>
<!-- END BODY -->
</html>