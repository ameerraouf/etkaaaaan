 
@foreach($banners as $banner)
	
	<div class="col-xs-12 col-sm-12 col-md-{{$col}} col-lg-{{$col}}">
						<div class="banneritem">
	@if($banner->type == 'photo')
	 <a href="{{$banner->url}}">
	  <img src="{{ url('upload/'.str_replace('//', '/',$banner->content)) }}" style="widht:{{$banner->width}};height:{{$banner->height}}" />
	 </a>
	@elseif($banner->type == 'text')
	 <a href="{{$banner->url}}">
	 {{$banner->content}}
	 </a>
	@elseif($banner->type == 'code')
	 {!! $banner->content !!}
	@endif
 	</div><!-- end banneritem -->
	</div><!-- end col-lg-6 -->
 

@endforeach

