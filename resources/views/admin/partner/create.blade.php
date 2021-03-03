@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/partner/index') }}" class="btn green">{{ trans('admin.back') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-file"></i> شركاء العمل
		</div>
	</div>
	<div class="portlet-body">
        <form action="{{ url(app('aurl').'/partner') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>
                    الاسم
                </label>
                <input name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>
                    الشعار
                </label>
                <input name="logo" type="file" class="form-control">
            </div>
            <button class="btn btn-success" type="submit">
                حفظ
            </button>
        </form>
	</div>
</div>
<!-- END SAMPLE TABLE PORTLET-->
@stop