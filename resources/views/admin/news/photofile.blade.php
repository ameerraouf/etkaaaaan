<li class="li{{$file->id}}" dir="ltr"> 
 
<a href="#" class="delete_file" fid="{{$file->id}}"><i class="fa fa-times"></i></a> 
 <img src="{{url('upload/'.$file->path.'/'.$file->file)}}" style="width:100%;height:100px;" />
 <?php 
 /*
 {{$file->name}} : {{$file->size}}
{{'<Image:'.$file->id.'/>'}}
 */?>
<hr />
</li>