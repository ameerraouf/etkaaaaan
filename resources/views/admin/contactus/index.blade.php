@extends(app('at').'.index')
@section('admin')

			<div class="row inbox">
				<div class="col-md-2">
					@include(app('at').'.contactus.right')
				</div>
				<div class="col-md-10">

					@include(app('at').'.contactus.inbox')

				</div>
			</div>
 
@stop