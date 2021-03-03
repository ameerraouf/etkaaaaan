@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/Ads/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-globe"></i> 
    البنرات
              </div>
            </div>
            <div class="portlet-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead>
                <tr>
                  <th>الاول</th>
                  <th>الثاني</th>
                  <th>الثالث</th>
                  <th>الرابع</th>
                  <th>##</th>
                </tr>
                </thead>
                <tbody>
                  @if($ads)
                <tr>
                  <td>
                      @if($ads->one)
                      <a href="{{ $ads->link_one }}" />
                          <img src="{{ asset('assets/adsimgs/'.$ads->one) }}"
                          style="width:50px;height:50px;border-radius:50%" />
                      </a>
                      @else 
                        لايوجد
                      @endif
                  </td>
                  
                  <td>
                      @if($ads->tow)
                      <a href="{{ $ads->link_two }}" />
                          <img src="{{ asset('assets/adsimgs/'.$ads->tow) }}"
                          style="width:50px;height:50px;border-radius:50%" />
                      </a>
                      @else 
                        لايوجد
                      @endif
                  </td>
                  
                  <td>
                      @if($ads->three)
                      <a href="{{ $ads->link_three }}" />
                          <img src="{{ asset('assets/adsimgs/'.$ads->three) }}"
                          style="width:50px;height:50px;border-radius:50%" />
                        </a>
                      @else 
                        لايوجد
                      @endif
                  </td>
                  
                  <td>
                      @if($ads->four)
                      <a href="{{ $ads->link_four }}" />
                          <img src="{{ asset('assets/adsimgs/'.$ads->four) }}"
                          style="width:50px;height:50px;border-radius:50%" />
                        </a>
                      @else 
                        لايوجد
                      @endif
                  </td>
                
                
                  <td>
  <a href="{{ url(app('aurl').'/Ads/'.$ads->id.'/edit') }}" title="" class="btn green"><i class="fa fa-edit"></i></a>
                  
                  <a href="#" class="btn red delrec" classform="deleteform{{ $ads->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
                  
                  
                    {!! Form::open(['method'=>'delete','url'=>app('aurl').'/Ads/'.$ads->id,'class'=>'deleteform'.$ads->id]) !!}
                  {!! Form::close() !!}
                  
                    
                    
                  </td>
                </tr>
                  @endif
              
                </tbody>
                </table>
              
              </div>
            </div>
          </div>
          <!-- END SAMPLE TABLE PORTLET-->
@stop