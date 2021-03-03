@extends(app('at').'.index')
@section('admin')

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box green">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> {{ $title }}
			</div>
		</div>
	<div class="portlet-body form">
{!! Form::open(['url'=>app('aurl').'/orders3/'.$uid,'method'=>'put','files'=>true]) !!}
<div class="form-body">

 <ol>
 	
 @foreach($files as $file)
 <li style="padding:5px;">
 <label><input type="checkbox" name="fid[]" value="{{$file->id}}"> {{$file->pdf_name}}   </label>   - <a href="{{url('upload'.$file->pdf_files)}}" target="_blank" class="btn btn-info">{{trans('admin.show')}}</a> 
   <a href="{{url(app('aurl').'/downloadpdf/'.$file->id)}}" target="_blank" ><i class="fa fa-download"></i></a>

 {{ trans('admin.status') }} - 
 @if($file->status == 'panding')
 <span class="label label-warning">{{trans('admin.panding')}}</span>
 @elseif($file->status == 'refused')
 <span class="label label-danger">{{trans('admin.refused')}}</span> - 
 {{trans('admin.refused_reason')}} : {{$file->refused_reason}}
 @elseif($file->status == 'accept')
 <span class="label label-success">{{trans('admin.accept')}}</span>
 @endif

 </li>
 @endforeach
 
 </ol>

<div class="form-group">
	<label>{{trans('admin.proccess')}}</label>
	{!! Form::select('proccess',['accept'=>trans('admin.accept'),'panding'=>trans('admin.panding'),'delete'=>trans('admin.delete'),'refused'=>trans('admin.refused')],'',['class'=>'form-control proccess']) !!}
</div>
<script>
$(document).on('change','.proccess',function(){
 var proccess = $('.proccess option:selected').val();
 if(proccess == 'refused')
 {
 	$('.refused_reason').removeClass('hidden');	
 }else{
 	$('.refused_reason').addClass('hidden');	
 }
});
</script>
<div class="form-group refused_reason hidden">
	<label>{{trans('admin.refused_reason')}}</label>
	<textarea name="refused_reason" class="form-control" placeholder="{{trans('admin.refused_reason')}}"></textarea>
</div>
<div class="form-actions left">


{!! Form::submit(trans('admin.go'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop