@extends(app('tmp').'.index')
@section('theme')

  
	  @if(in_array($id, [9,8]))

	  @if(!empty($departments) and count($departments) > 0)
	  <div class="allcategory">
        <div class="title">{{$title}}</div>
        <div class="row">
         @foreach($departments as $dep) 	 
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="{{url('category/'.$dep->id)}}" title="{{$dep->title}}">{{$dep->title}}</a>
          </div><!-- end col-lg-3 -->
         @endforeach 
          <div class="clearfix"></div>
        </div><!-- end row -->
      </div><!-- end allcategory -->
      @endif
  

	  <div class="allviodes">
        <div class="title">@if(count($departments) > 0)<a href="{{url('/')}}" style="color:#fff" >الرئيسية</a>  <i class="fa fa-arrow-left"></i>  صور القسم @else 
         <a href="{{url('/')}}" style="color:#fff" >الرئيسية</a>  <i class="fa fa-arrow-left"></i> <a href="{{url('category/'.$parent->id)}}" style="color:#fff">{{$parent->title}}</a>  <i class="fa fa-arrow-left"></i> {{$title}}

         @endif</div>
        <div class="content">
          <div class="row">
                   @foreach($allnews as $news)	
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

					  <div class="postitem">
		                <a href="{{url('news/'.$news->id.'/'.$news->title)}}" title="{{$news->title}}">
		                  <div class="imgthumb">
		                  				<?php $youtube = explode('||',$news->youtube); ?>
										  @if(!empty($news->photo))
											<img src="{{url('upload/'.$news->photo)}}" alt="">
										  @else
										  
										  @if(!empty($youtube[0]))
										  <img src="https://i1.ytimg.com/vi/{{Set::youtubelink($youtube[0])}}/hqdefault.jpg" alt="">
										  @elseif(!empty($youtube[1]))
										  <img src="https://i1.ytimg.com/vi/{{Set::youtubelink($youtube[1])}}/hqdefault.jpg" alt="">
										  @endif

										  @endif
		                  </div>
		                  <span>{{$news->title}}</span>
		                </a>
		              </div><!-- end postitem -->
            </div><!-- end col-lg-3 -->
				  @endforeach	

            
             
            <div class="clearfix"></div>
          </div><!-- end row -->
        
           	{!! $allnews->render() !!}

        </div><!-- end content -->
      </div><!-- end allviodes -->

	  @else
			<div class="lastnews">
				<div class="title"><span>{{$title}}</span></div>
				<div class="row">
				  @foreach($allnews as $news)	
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="postitem">
							<a href="{{url('news/'.$news->id.'/'.$news->title)}}" title="{{$news->title}}">
								        <?php $youtube = explode('||',$news->youtube); ?>
										  @if(!empty($news->photo))
											<img src="{{url('upload/'.$news->photo)}}" alt="">
										  @else
										  
										  @if(!empty($youtube[0]))
										  <img src="https://i1.ytimg.com/vi/{{Set::youtubelink($youtube[0])}}/hqdefault.jpg" alt="">
										  @elseif(!empty($youtube[1]))
										  <img src="https://i1.ytimg.com/vi/{{Set::youtubelink($youtube[1])}}/hqdefault.jpg" alt="">
										  @endif

										  @endif	

								<div class="content">
									<h1>{{$news->title}}</h1>
									<h2>{{ mb_substr(strip_tags($news->content),0,200, "utf-8") }}</h2>
									<span><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> إقرأ التفاصيل</span>
								</div><!-- end content -->
							</a>
						</div><!-- end postitem -->
					</div><!-- end col-lg-6 -->
				  @endforeach	
					<div class="clearfix"></div>
				</div><!-- end row -->
			</div><!-- end lastnews --> 
	 {!! $allnews->render() !!}
      @endif
			


@stop