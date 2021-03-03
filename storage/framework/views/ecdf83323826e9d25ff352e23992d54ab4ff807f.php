<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php if(!empty($title)): ?> <?php echo e($title); ?> <?php else: ?> <?php echo e(trans('main.controlpanel')); ?> <?php endif; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<script>
var projecturl = "<?php echo e(url('/')); ?>/";
var csrf       = "<?php echo e(csrf_token()); ?>";
window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(), ]); ?>;
</script>
<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css"/>
 
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo e(url('assets')); ?>/plugins/gritter/css/jquery.gritter-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo e(url('assets')); ?>/css/style-metronic-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/style-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/style-responsive-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/pages/tasks-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/themes/default-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo e(url('assets')); ?>/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/pages/inbox-rtl.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
		   .hos-success{color: #fff;background-color: #4caf50;border-color: #4caf50;box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(76,175,80,.4);}
		   .hos-info{color: #fff;background-color: #00bcd4;border-color: #00bcd4;box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(0,188,212,.4);}
		   .hos-primary{color: #fff;background-color: #9c27b0;border-color: #9c27b0;box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(156,39,176,.4);}
		   .hos-danger{color: #fff;background-color: #f44336;border-color: #f44336;box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(244,67,54,.4)}
		   .hos-warning{color: #fff;background-color: #ff9800;border-color: #ff9800;box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(255,152,0,.4);}
			 .hos{display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center; vertical-align: middle;cursor: pointer; background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 14px;line-height: 1.42857;border-radius: 0px;border-radius: 0 !important;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;}
			 .hos-site{color:#fff;transition: all .2s ease-in-out;border-color: #5e72e4;background-color: #5e72e4;box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);}
</style>

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo e(url('/')); ?>favicon.ico"/>

<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets')); ?>/plugins/select2/select2-rtl.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets')); ?>/plugins/select2/select2-metronic-rtl.css"/>

<script src="<?php echo e(url('assets')); ?>/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

<script src="<?php echo e(url('assets')); ?>/scripts/custom/form-samples.js" type="text/javascript"></script>
<script src="http://malsup.github.com/jquery.form.js" type="text/javascript"></script>
	 <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBZWz8oCWUVF5x2qYf8YQb8QKbKmXp_DY&callback=initialize" async defer></script-->
<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
	format: 'dd/mm/yyyy',
   // startDate: '-3d'
	});


	// Type Number
$(".plus").unbind('click').click(function(){
  if($(this).parent().children(".qty").is(':enabled'))
  $(this).parent().children(".qty").val((+$(this).parent().children(".qty").val()+1) || 0);
});
$(".minus").unbind('click').click(function(){
  if($(this).parent().children(".qty").is(':enabled'))
  $(this).parent().children(".qty").val(($(this).parent().children(".qty").val()-1 > 0)?($(this).parent().children(".qty").val() - 1) : 0);
});
  
});
</script>

 <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
 </script>

 <script>
  function show_div(select,div)
  {
    $(document).on('change','.'+select,function(){
      var data = $('.'+select +' option:selected').val();
      if(data == 'no')
      {
        $('.'+div).addClass('hidden');
      }else{
        $('.'+div).removeClass('hidden');
      }
    });

    $(document).ready(function(){
       var data = $('.'+select +' option:selected').val();
      if(data == 'no')
      {
        $('.'+div).addClass('hidden');
      }else{
        $('.'+div).removeClass('hidden');
      }
    });	
  }
</script>

    <?php echo $__env->yieldPushContent('head'); ?>

</head>    

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->

			<?php echo $__env->make(app('at').'.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END HEADER -->
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<?php echo $__env->make(app('at').'.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
	<div class="page-content">
			
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<?php echo e($title); ?></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo e(url(app('aurl'))); ?>">
								<?php echo e(trans('admin.home')); ?>

							</a>
						</li>
						<?php if(!empty(Request::segment(2))): ?>
						<li>
							<i class="fa fa-angle-left"></i>
							<a href="<?php echo e(URL::current()); ?>">
								<?php echo e($title); ?>

							</a>
						</li>
						<?php endif; ?>
						<?php
						/*<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>*/
						 ?>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->