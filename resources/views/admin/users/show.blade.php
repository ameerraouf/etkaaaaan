@extends(app('at').'.index')
@section('admin')
 <a href="{{url(app('aurl').'/download/user/file/'.$user->id)}}" class="btn green"><i class="fa fa-file-o"></i> حفظ الملف فى ملف PDF</a>
 <a href="{{url(app('aurl').'/download/user/file/'.$user->id)}}?action=show" target="_blank" class="btn blue"><i class="fa fa-file-o"></i> مشاهدة الملف PDF</a>
<div class="clearfix"></div>
 <br>
	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
			  <i class="fa fa-reorder"></i> {{trans('admin.full_file')}} -  {{ $title }}
			</div>
		</div>
	<div class="portlet-body form">
 			
 		@include(app('at').'.users.step1',['user'=>$user])
 		@include(app('at').'.users.step2',['user'=>$user])

	</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

	<div class="clearfix"></div>
    <br>
	<a href="{{url(app('aurl').'/download/user/file/'.$user->id)}}" class="btn green"><i class="fa fa-file-o"></i> حفظ الملف فى ملف PDF</a>
	<a href="{{url(app('aurl').'/download/user/file/'.$user->id)}}?action=show" target="_blank" class="btn blue"><i class="fa fa-file-o"></i> مشاهدة الملف PDF</a>

@stop