@extends(app('tmp').'.index')
@section('theme')

  

			<div class="lastnews">
				<div class="title"><span>أخبار الجمعية</span></div>
				<div class="row">
				  @foreach($allnews as $news)	
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="postitem">
							<a href="{{url('news/'.$news->id.'/'.$news->title)}}" title="{{$news->title}}">
								<img src="{{url('upload/'.$news->photo)}}" alt="">
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

@stop