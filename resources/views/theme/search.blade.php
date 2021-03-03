@extends(app('tmp').'.index')
@section('theme')

   <div class="categoryshow">
        <div class="title" dir="rtl">نتائج البحث عن كلمة { {{$title}} } = {{count($searches)}} نتيجة !</div>
        <div class="content">
        @if(count($searches) > 0)
         @foreach($searches as $search)
          <div class="postitem">
            <div class="imgthumb">
              <a href="{{url('news/'.$search->id.'/'.$search->title)}}" title="{{$search->title}}">
		 

			 							  <?php $youtube = explode('||',$search->youtube); ?>
										  @if(!empty($search->photo))
											<img src="{{url('upload/'.$search->photo)}}" alt="">
										  @else

										  @if(!empty($youtube[0]))
										  <img src="https://i1.ytimg.com/vi/{{Set::youtubelink($youtube[0])}}/hqdefault.jpg" alt="">
										  @elseif(!empty($youtube[1]))
										  <img src="https://i1.ytimg.com/vi/{{Set::youtubelink($youtube[1])}}/hqdefault.jpg" alt="">
										  @endif

										  @endif	


              </a>
            </div><!-- end imgthumb -->
            <div class="descrption">
              <h1><a href="#">{{$search->title}}</a></h1>
              <span ><i class="fa fa-calendar-plus-o"></i> {{$search->created_at}}</span>
              <span class="hidden"><i class="fa fa-eye"></i> 53 مشاهدة</span>
              <span class="hidden"><i class="fa fa-flag"></i> رقم الخبر : 5254</span>
              <h2>
 
              	{{ mb_substr(strip_tags($search->content),0,200, "utf-8") }}
              </h2>
            </div><!-- end descrption -->
            <div class="clearfix"></div>
          </div><!-- end postitem -->
          @endforeach
         @else

         @endif


         {!! $searches->appends(['search'=>Request::get('search')])->render() !!}
        </div><!-- end content -->
      </div><!-- end categoryshow -->
 

@stop