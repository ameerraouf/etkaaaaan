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
<title>404 Not Found Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{url('/')}}/assets/css/style-metronic-rtl.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/css/style-rtl.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/css/style-responsive-rtl.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/css/themes/default-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{url('/')}}/assets/css/pages/error-rtl.css" rel="stylesheet" type="text/css"/>
<link href="{{url('/')}}/assets/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{url('/')}}/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-404-3">
<div class="page-inner">
	<img src="{{url('/')}}/assets/img/pages/earth-rtl.jpg" class="img-responsive" alt="">
</div>
<div class="container error-404">
	<h1>404</h1>
	<h2>الصفحة المطلوبة غير موجودة او لربما ليست لديك صلاحية لدخولها.</h2>
	<p>
		 راسل الإدارة فى حال ظهور هذا الخطأ اذا كنت ترغب فى ذلك
	</p>
	<p>

	@if(auth()->user())	
	@if(auth()->user()->level == 'admin')
		<a href="{{url('/')}}/admin">
	@elseif(auth()->user()->level == 'store' || auth()->user()->level == 'user')
		<a href="{{url('/')}}/store">
	@endif	
	@else
		<a href="{{url('/')}}">
	@endif
	  	 اضغط هنا للإنتقال الي صفحتك الرئيسية
		</a>
		<br>
	</p>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{url('/')}}/assets/plugins/respond.min.js"></script>
<script src="{{url('/')}}/assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{url('/')}}/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{url('/')}}/assets/scripts/core/app.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>