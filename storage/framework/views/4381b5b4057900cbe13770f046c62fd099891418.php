<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="ar"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="ar"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ar"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php if(!empty($title)): ?> <?php echo e($title); ?> <?php else: ?> الجمعية الخيرية بمركز علباء <?php endif; ?></title>
	<meta name="description" content="<?php echo e(Set::set()->description); ?>">
	<meta name="author" content="<?php echo e(Set::set()->keywords); ?>">
	<script type="text/javascript" src="<?php echo e(url('style')); ?>/js/jquery-2.2.0.min.js"></script>
	<!-- Bootstrap Style -->
	<link rel="stylesheet" href="<?php echo e(url('style')); ?>/css/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="<?php echo e(url('style')); ?>/css/bootstrap-theme-rtl.min.css">
	<!-- Fonts -->
	<link href="<?php echo e(url('style')); ?>/fonts/fonts.css" rel="stylesheet">
	<!-- Fonticon Style -->
	<link href="<?php echo e(url('style')); ?>/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo e(url('style')); ?>/images/favicon.png" type="image/x-icon">
	<!-- Slider Style -->
	<link rel="stylesheet" href="<?php echo e(url('style')); ?>/css/owl.carousel.css">
	<!-- Main Style -->
	<link rel="stylesheet" href="<?php echo e(url('style')); ?>/style.css">
	<link href="<?php echo e(url('assets')); ?>/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
	<!-- Responsive Style -->
	<link rel="stylesheet" href="<?php echo e(url('style')); ?>/css/responsive.css">
 	<?php if(auth()->user()): ?>
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
 	<?php endif; ?>
</head>
<body>
	<div class="container">
		<div id="allsite">
			<div class="topheader">
				<div class="date"><i class="fa fa-calendar"></i> <script type="text/javascript">
          function isGregLeapYear(t){return t%4==0&&t%100!=0||t%400==0}function gregToFixed(t,i,r){var o=Math.floor((t-1)/4),n=Math.floor((t-1)/100),a=Math.floor((t-1)/400),h=Math.floor((367*i-362)/12);return 2>=i?e=0:i>2&&isGregLeapYear(t)?e=-1:e=-2,0+365*(t-1)+o-n+a+h+e+r}function Hijri(t,i,e){this.year=t,this.month=i,this.day=e,this.toFixed=hijriToFixed,this.toString=hijriToString}function hijriToFixed(){return this.day+Math.ceil(29.5*(this.month-1))+354*(this.year-1)+Math.floor((3+11*this.year)/30)+227015-1}function hijriToString(){var t=new Array("محرم","صفر","ربيع أول","ربيع ثانى","جمادى أول","جمادى ثانى","رجب","شعبان","رمضان","شوال","ذو القعدة","ذو الحجة");return this.day+" "+t[this.month-1]+" "+this.year}function fixedToHijri(t){var i=new Hijri(1100,1,1);i.year=Math.floor((30*(t-227015)+10646)/10631);var e=new Hijri(i.year,1,1),r=Math.ceil((t-29-e.toFixed())/29.5)+1;return i.month=Math.min(r,12),e.year=i.year,e.month=i.month,e.day=1,i.day=t-e.toFixed()+2,i}var fixd,tod=new Date,weekday=new Array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت"),monthname=new Array("يناير","فبراير","مارس","إبريل","مايو","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر"),y=tod.getFullYear(),m=tod.getMonth(),d=tod.getDate(),dow=tod.getDay();document.write(""),m++,fixd=gregToFixed(y,m,d);var h=new Hijri(1421,11,28);h=fixedToHijri(fixd),document.write(""+h.toString()+" هجرى");
        </script></div>
				<?php if(Set::set()->mobile2 != NULL): ?>
					<div class="phone"><i class="fa fa-phone"></i> <?php echo e(Set::set()->mobile2); ?></div>
				<?php endif; ?>
				<div class="mail"><i class="fa fa-envelope"></i> <?php echo e(Set::set()->sitemail); ?></div>
				<div class="search">
					<button type="button" data-toggle="modal" data-target="#mySearch"><i class="fa fa-search"></i></button>
					<div class="modal fade" id="mySearch" tabindex="-1" role="dialog" aria-labelledby="mySearchLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        <form action="<?php echo e(url('search')); ?>" method="get">
										<input type="text" name="search"  placeholder="أدخل كلمة البحث هنا .." onblur="if (this.value == '') {this.value = 'أدخل كلمة البحث هنا ..';}" onfocus="if (this.value == 'أدخل كلمة البحث هنا ..') {this.value = '';}" value="<?php echo e(Request::get('search')); ?>" />
										<button type="submit"><i class="fa fa-search"></i></button>
										<div class="clearfix"></div>
									</form>
					      </div>
					    </div>
					  </div>
					</div>
				</div><!-- end search -->
				<div class="socialmedia">
					<?php if(Set::set()->fax != NULL): ?>
	      		<a href="<?php echo e(Set::set()->facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        	<?php endif; ?>
         	<?php if(Set::set()->fax != NULL): ?>
           	<a href="<?php echo e(Set::set()->twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        	<?php endif; ?>
        	<?php if(Set::set()->youtube != NULL): ?>
           	<a href="<?php echo e(Set::set()->youtube); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
          <?php endif; ?>
          <?php if(Set::set()->pinterest != NULL): ?>
	        	<a href="<?php echo e(Set::set()->pinterest); ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a>
	      	<?php endif; ?>
	       	<?php if(Set::set()->skype != NULL): ?>
          	<a href="skype:<?php echo e(Set::set()->skype); ?>" target="_blank"><i class="fa fa-skype"></i></a>
        	<?php endif; ?>
        	<?php if(Set::set()->linkedin != NULL): ?>
	        	<a href="<?php echo e(Set::set()->linkedin); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
	      	<?php endif; ?>
				</div><!-- end socialmedia -->
				<div class="clearfix"></div>
			</div><!-- end topheader -->
			<header>
				<div class="logo">
					<a href="<?php echo e(url('/')); ?>" title="<?php echo e(Set::set()->sitename); ?>"><img src="<?php echo e(url('style')); ?>/images/logo.png" alt=""></a>
				</div><!-- end logo -->
				<div class="memberarea">
					<?php if(auth()->user()): ?>
						<a href="<?php echo e(url('myaccount')); ?>"><i class="fa fa-user"></i> <?php echo e(auth()->user()->name); ?></a>
					 	<a href="<?php echo e(url('step')); ?>"><i class="fa fa-edit"></i> تقديم طلب</a>
					 	<a href="<?php echo e(url('myaccount')); ?>"><i class="fa fa-wrench"></i> ملفي الشخصي</a>
					 	<a href="<?php echo e(url('logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('main.logout')); ?></a>
					<?php else: ?>
						<div class="visitarea">
							<a href="<?php echo e(url('login')); ?>" title="تسجيل الدخول"><i class="fa fa-user" aria-hidden="true"></i> تسجيل الدخول</a>
							<a href="<?php echo e(url('register')); ?>" title="مستخدم جديد"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo e(trans('main.register')); ?></a>
						</div>
					<?php endif; ?>
				</div><!-- end visitlink -->
				<div class="clearfix"></div>
			</header><!-- End Header -->
			<nav>
				<ul>
					<li><a href="<?php echo e(url('/')); ?>" title="الرئيسية">الرئيسية</a></li>
				 	<?php $__currentLoopData = App\Link::where('typelink','header')->orderBy('dir','asc')->where('parent',0)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e($link->url); ?>" title="<?php echo e($link->name); ?>"><?php echo e($link->name); ?></a>
						<?php if(App\Link::where('typelink','header')->orderBy('dir','asc')->where('parent',$link->id)->count() > 0): ?>
						   <ul>
				 
				 	<?php $__currentLoopData = App\Link::where('typelink','header')->orderBy('dir','asc')->where('parent',$link->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e($sub->url); ?>" title="<?php echo e($sub->name); ?>"><?php echo e($sub->name); ?></a></li>
				 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</ul>
				<?php endif; ?>
						</li>
				 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</ul>
				<div class="clearfix"></div>
			</nav><!-- End Nav -->
			<div id="wrapper">