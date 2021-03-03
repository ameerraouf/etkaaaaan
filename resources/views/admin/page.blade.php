@extends($tm.'.index')

@if($tm == 'store')
@section('store')
@elseif($tm == 'user')
@section('user')
@else
@section('admin')
@endif
 


 <div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
					<i class="fa fa-reorder"></i> {{ $title }}
			</div>
		</div>
<div class="portlet-body">

		{!! $page->content !!}

</div>
</div>


@stop