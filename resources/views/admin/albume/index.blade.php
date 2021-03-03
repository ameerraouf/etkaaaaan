@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/Albume/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i> {{ $title }}
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                   
                                    <th>صوره</th>
                                    <th>##</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($says)
                                @foreach($says as $said)
                                <tr>
                                    <td>{{ $said->name }}</td>
                                    
                                    <td>
         <img src="{{  asset('assets/uplodedimage/'. $said->img) }}"
                                        style="width:40px;height:40px;border-radius:50%" />
                                    </td>
                                    <td>
    <a href="{{ url(app('aurl').'/Albume/'.$said->id.'/edit') }}" title="" class="btn green"><i class="fa fa-edit"></i></a>
                                    
                                    <a href="#" class="btn red delrec" classform="deleteform{{ $said->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
                                    
                                    
                                    {!! Form::open(['method'=>'delete','url'=>app('aurl').'/Albume/'.$said->id,'class'=>'deleteform'.$said->id]) !!}
                                    {!! Form::close() !!}
                                    
                                    
                                    
                                    </td>
                                </tr>
                                    @endforeach
                                @endif
                            
                                </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
@stop