<li class="li{{$file->id}}" dir="ltr"> 
 
<a href="#" class="delete_file" fid="{{$file->id}}"><i class="fa fa-times"></i></a> {{$file->name}} : {{$file->size}}
<audio style="width:100%;" controls>
  <source src="{{url('upload/'.$file->path.'/'.$file->file)}}" type="audio/mpeg">
</audio>
 {{'<Audio:'.$file->id.'/>'}}
<hr />
</li>