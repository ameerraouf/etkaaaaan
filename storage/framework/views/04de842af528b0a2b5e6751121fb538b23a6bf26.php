 <!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo e($title); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets')); ?>/plugins/select2/select2-rtl.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets')); ?>/plugins/select2/select2-metronic-rtl.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo e(url('assets')); ?>/css/style-metronic-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/style-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/style-responsive-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/themes/default-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo e(url('assets')); ?>/css/pages/login-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(url('assets')); ?>/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
	var projecturl = "<?php echo e(url('/')); ?>/";
</script>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="<?php echo e(url(app('aurl'))); ?>">
		<?php echo e(Set::set()->sitename); ?>

	</a>
</div>

<!-- END LOGO -->
<?php echo $__env->make(app('at').'.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo e(url(app('aurl').'/login')); ?>" method="post">
		 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<h3 class="form-title"><?php echo e(trans('admin.login_account')); ?></h3>
	 
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 <?php echo e(trans('admin.messageerrorlogin')); ?>

			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9"><?php echo e(trans('admin.email')); ?></label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="<?php echo e(trans('admin.email')); ?>" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9"><?php echo e(trans('admin.password')); ?></label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="<?php echo e(trans('admin.password')); ?>" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="rememberme" value="1"/> <?php echo e(trans('admin.rememberme')); ?> </label>
			<button type="submit" class="btn green pull-right">
			<?php echo e(trans('admin.login')); ?> <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		 
	</form>
	<!-- END LOGIN FORM -->
 
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
 برمجة وتطوير كوكبة التقنية <?php echo e(date('Y')); ?>

</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="<?php echo e(url('assets')); ?>/plugins/respond.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(url('assets')); ?>/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(url('assets')); ?>/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(url('assets')); ?>/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo e(url('assets')); ?>/scripts/custom/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>