@extends(app('tmp').'.index')
@section('theme')

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

      <div class="allcategory">
        <div class="title">الصور والفيديو</div>
        <div class="row">
         @foreach($videos as $dep)    
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="{{url('category/'.$dep->id)}}" title="{{$dep->title}}">{{$dep->title}}</a>
          </div><!-- end col-lg-3 -->
         @endforeach 

         @foreach($pics as $dep)    
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="{{url('category/'.$dep->id)}}" title="{{$dep->title}}">{{$dep->title}}</a>
          </div><!-- end col-lg-3 -->
         @endforeach 
          <div class="clearfix"></div> 
        </div><!-- end row -->
      </div><!-- end allcategory -->

    
 
@stop