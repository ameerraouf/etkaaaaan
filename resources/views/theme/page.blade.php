@extends(app('tmp').'.index')
@section('theme')
@if($page->active == 1)
 	<div class="pagefile">
        <div class=" fixed-icons">
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
        <div class="title">{{$title}}</div>
        <div class="content add-toc">
       
          {!! $page->content !!}
          
          <hr />
          @if($page->files)
            <h3 class="text-center">ملفات</h3>
            @foreach($page->files as $file)
                <a href="{{asset('assets/uplodedfiles/'. $file->file) }}" class="item slide-imgs h-100">
                    {{ $file->file }}
                </a>
            @endforeach
          @endif
        </div><!-- end content -->
      </div><!-- end pagefile -->
@else
 <div class="alert alert-danger">
 	<h2>هذه الصفحة غير متاحة حاليا</h2>
 </div>
@endif



@stop