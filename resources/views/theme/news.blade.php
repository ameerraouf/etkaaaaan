@extends(app('tmp').'.index')
@section('theme')
<?php $youtube = explode('||',$news->youtube); ?>


  <div class="singlepage container">

        <div class="title bread-nav"><a href="{{url('/')}}" style="color:#fff" >الرئيسية</a>  <i class="fa fa-arrow-left mx-1"></i> <a href="{{url('category/'.$department->id)}}" style="color:#fff">{{$department->title}}</a>  <i class="fa fa-arrow-left mx-1"></i> {{$title}}</div>
        <div class="content position-relative" style="min-height: 330px;">
			<div class=" fixed-icons position-absolute">
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
        @if(!empty($news->files()->get()))
			<div class="mainslider">
				<div id="homeslider" class="owl-carousel">
				@foreach($news->files()->get() as $slide)
			  	<div class="item">
			  		<img src="{{url('upload/'.$slide->path.'/'.$slide->file)}}" style="width:100%;height:500px;" alt="">
			  	</div><!-- end item -->
  				@endforeach
				</div><!-- End homeslider -->
				<div class="clearfix"></div>
			</div><!-- end mainslider -->
        @endif

			<?php
			/*
@if(empty($youtube[0]) and empty($youtube[1]))
             <div class="imgthumb"><img src="{{url('upload/'.$news->photo)}}"  alt=""></div>
            @endif
			*/
			?>

           @if(!empty($youtube[0]))
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{Set::youtubelink($youtube[0])}}"></iframe>
           @endif
           @if(!empty($youtube[1]))
           <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{Set::youtubelink($youtube[1])}}"></iframe>
           @endif
          {!! $news->content !!}
          </div><!-- end content -->
      </div><!-- end singlepage -->


	<div class="container">
		<div class="text-center py-3">
			<a href=""><img src="https://th-qw.com/assets/images/telegram.png" alt=""></a>
		</div>
		<div class="row w-100 m-0 p-0 mb-3">
			<div class="col-md-3 my-3">
				<div style="background-size:cover;background-image: url(https://th-qw.com/assets/adsimgs/1600359436.jpg)">
					<a class="d-block" href="https://th-qw.com/"><span class=" w-100 baner-etq baner-etq1"><i class="icofont-ebook"></i> الخدمات الإلكترونية </span></a>
				</div>
			</div>
			<div class="col-md-3 my-3">
				<div style="background-size:cover;background-image: url(https://th-qw.com/assets/adsimgs/1600359436.jpg)">
					<a class="d-block" href="https://th-qw.com/"><span class=" w-100 baner-etq baner-etq2"><i class="icofont-users-social"></i> الفريق التطوعى </span></a>
				</div>
			</div>
			<div class="col-md-3 my-3">
				<div style="background-size:cover;background-image: url(https://th-qw.com/assets/adsimgs/1600359436.jpg)">
					<a class="d-block" href="https://th-qw.com/"><span class=" w-100 baner-etq baner-etq3"><i class="fas fa-hand-holding-heart"></i>  كيف تدعمنا </span></a>
				</div>
			</div>
			<div class="col-md-3 my-3">
				<div class="position-relative " style="background-size:cover;background-image: url(https://th-qw.com/assets/adsimgs/1600359436.jpg)">
					<a class="d-block" href="https://th-qw.com/"><span class=" w-100 baner-etq baner-etq4"><span class="masmo3"> <span>صوتك مسموع</span></span></span></a>
				</div>
			</div>
		</div>
	</div>

@stop