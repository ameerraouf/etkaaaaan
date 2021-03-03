<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="ar"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="ar"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ar"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@if(!empty($title)) {{$title}} @else الجمعية الخيرية بمركز علباء @endif</title>
	<meta name="description" content="{{Set::set()->description}}">
	<meta name="author" content="{{Set::set()->keywords}}">
	<script type="text/javascript" src="{{url('style')}}/js/jquery-2.2.0.min.js"></script>
	<!-- Bootstrap Style -->
	<link rel="stylesheet" href="{{url('style')}}/css/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="{{url('style')}}/css/bootstrap-theme-rtl.min.css">
	<!-- Fonts -->
	<link href="{{url('style')}}/fonts/fonts.css" rel="stylesheet">
	<!-- Fonticon Style -->
	<link href="{{url('style')}}/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{url('style')}}/images/favicon.png" type="image/x-icon">
	<!-- Slider Style -->
	<link rel="stylesheet" href="{{url('style')}}/css/owl.carousel.css">
	<!-- Main Style -->
	<link rel="stylesheet" href="{{url('style')}}/style.css">
	<link href="{{url('assets')}}/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
	<!-- Responsive Style -->
	<link rel="stylesheet" href="{{url('style')}}/css/responsive.css">
 	@if(auth()->user())
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
 	@endif
</head>
<body>
	<div class="container">
		<div id="allsite">
			<div class="topheader">
				<div class="date"><i class="fa fa-calendar"></i> <script type="text/javascript">
          function isGregLeapYear(t){return t%4==0&&t%100!=0||t%400==0}function gregToFixed(t,i,r){var o=Math.floor((t-1)/4),n=Math.floor((t-1)/100),a=Math.floor((t-1)/400),h=Math.floor((367*i-362)/12);return 2>=i?e=0:i>2&&isGregLeapYear(t)?e=-1:e=-2,0+365*(t-1)+o-n+a+h+e+r}function Hijri(t,i,e){this.year=t,this.month=i,this.day=e,this.toFixed=hijriToFixed,this.toString=hijriToString}function hijriToFixed(){return this.day+Math.ceil(29.5*(this.month-1))+354*(this.year-1)+Math.floor((3+11*this.year)/30)+227015-1}function hijriToString(){var t=new Array("محرم","صفر","ربيع أول","ربيع ثانى","جمادى أول","جمادى ثانى","رجب","شعبان","رمضان","شوال","ذو القعدة","ذو الحجة");return this.day+" "+t[this.month-1]+" "+this.year}function fixedToHijri(t){var i=new Hijri(1100,1,1);i.year=Math.floor((30*(t-227015)+10646)/10631);var e=new Hijri(i.year,1,1),r=Math.ceil((t-29-e.toFixed())/29.5)+1;return i.month=Math.min(r,12),e.year=i.year,e.month=i.month,e.day=1,i.day=t-e.toFixed()+2,i}var fixd,tod=new Date,weekday=new Array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت"),monthname=new Array("يناير","فبراير","مارس","إبريل","مايو","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر"),y=tod.getFullYear(),m=tod.getMonth(),d=tod.getDate(),dow=tod.getDay();document.write(""),m++,fixd=gregToFixed(y,m,d);var h=new Hijri(1421,11,28);h=fixedToHijri(fixd),document.write(""+h.toString()+" هجرى");
        </script></div>
				@if(Set::set()->mobile2 != NULL)
					<div class="phone"><i class="fa fa-phone"></i> {{Set::set()->mobile2}}</div>
				@endif
				<div class="mail"><i class="fa fa-envelope"></i> {{Set::set()->sitemail}}</div>
				<div class="search">
					<button type="button" data-toggle="modal" data-target="#mySearch"><i class="fa fa-search"></i></button>
					<div class="modal fade" id="mySearch" tabindex="-1" role="dialog" aria-labelledby="mySearchLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					        <form action="{{url('search')}}" method="get">
										<input type="text" name="search"  placeholder="أدخل كلمة البحث هنا .." onblur="if (this.value == '') {this.value = 'أدخل كلمة البحث هنا ..';}" onfocus="if (this.value == 'أدخل كلمة البحث هنا ..') {this.value = '';}" value="{{Request::get('search')}}" />
										<button type="submit"><i class="fa fa-search"></i></button>
										<div class="clearfix"></div>
									</form>
					      </div>
					    </div>
					  </div>
					</div>
				</div><!-- end search -->
				<div class="socialmedia">
					@if(Set::set()->fax != NULL)
	      		<a href="{{Set::set()->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
        	@endif
         	@if(Set::set()->fax != NULL)
           	<a href="{{Set::set()->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
        	@endif
        	@if(Set::set()->youtube != NULL)
           	<a href="{{Set::set()->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
          @endif
          @if(Set::set()->pinterest != NULL)
	        	<a href="{{Set::set()->pinterest}}" target="_blank"><i class="fa fa-pinterest-p"></i></a>
	      	@endif
	       	@if(Set::set()->skype != NULL)
          	<a href="skype:{{Set::set()->skype}}" target="_blank"><i class="fa fa-skype"></i></a>
        	@endif
        	@if(Set::set()->linkedin != NULL)
	        	<a href="{{Set::set()->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a>
	      	@endif
				</div><!-- end socialmedia -->
				<div class="clearfix"></div>
			</div><!-- end topheader -->
			<header>
				<div class="logo">
					<a href="{{url('/')}}" title="{{Set::set()->sitename}}"><img src="{{url('style')}}/images/logo.png" alt=""></a>
				</div><!-- end logo -->
				<div class="memberarea">
					@if(auth()->user())
						<a href="{{url('myaccount')}}"><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
					 	<a href="{{url('step')}}"><i class="fa fa-edit"></i> تقديم طلب</a>
					 	<a href="{{url('myaccount')}}"><i class="fa fa-wrench"></i> ملفي الشخصي</a>
					 	<a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> {{trans('main.logout')}}</a>
					@else
						<div class="visitarea">
							<a href="{{url('login')}}" title="تسجيل الدخول"><i class="fa fa-user" aria-hidden="true"></i> تسجيل الدخول</a>
							<a href="{{url('register')}}" title="مستخدم جديد"><i class="fa fa-user-plus" aria-hidden="true"></i> {{trans('main.register')}}</a>
						</div>
					@endif
				</div><!-- end visitlink -->
				<div class="clearfix"></div>
			</header><!-- End Header -->
			<nav>
				<ul>
					<li><a href="{{url('/')}}" title="الرئيسية">الرئيسية</a></li>
				 	@foreach(App\Link::where('typelink','header')->orderBy('dir','asc')->where('parent',0)->get() as $link)
						<li><a href="{{$link->url}}" title="{{$link->name}}">{{$link->name}}</a>
						@if(App\Link::where('typelink','header')->orderBy('dir','asc')->where('parent',$link->id)->count() > 0)
						   <ul>
				 
				 	@foreach(App\Link::where('typelink','header')->orderBy('dir','asc')->where('parent',$link->id)->get() as $sub)
						<li><a href="{{$sub->url}}" title="{{$sub->name}}">{{$sub->name}}</a></li>
				 	@endforeach	
				</ul>
				@endif
						</li>
				 	@endforeach	
				</ul>
				<div class="clearfix"></div>
			</nav><!-- End Nav -->
			<div id="wrapper">