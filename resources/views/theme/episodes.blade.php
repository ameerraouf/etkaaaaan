@extends(app('tmp').'.index')
@section('title', '  |  فتح الحلقة ')
@section('theme')
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row my-5 my-shadow bg-white w-100 mx-0 p-3 border ">
        <div class="col-sm-12">
            <legend>
                فتح حلقة :
            </legend>
        </div>
        <!-- panel preview -->
        <div class="col-md-7">
            
            @if($errors->any())
                <ul>
                @foreach( $errors->all() as $e)
                    <li class=" text-danger text-center">
                        {{ $e }}
                    </li> 
                @endforeach 
                </ul>
            @endif
            
            
            @if( session()->has('success') )
                <div class="alert alert-success">
                    {{  session()->get('success') }}
                </div>
            @endif
            
            <div class="panel father panel-default">
            <form id="send" action="{{ route('episodes') }}" method="post">
                {{ csrf_field() }}
          
                <div class="panel-body form-horizontal payment-form">
                    
                    
                    <div class="form-group">
                        <label for="status" class=" control-label">
                            الاسم
                        </label>
                        <div class="">
                           <input type="text" 
                            class="form-control" required
                           name="name" value="{{ old('name') }}" />
                        </div>
                    </div> 
                    
                     <div class="form-group">
                        <label for="status" class=" control-label">
                            الجوال
                        </label>
                        <div class="">
                           <input type="phone" 
                           placeholder="رقم الجوال بصيغه دوليه مثل +999 000000 00000" required
                            class="form-control"
                           name="phone" value="{{ old('phone') }}" />
                        </div>
                    </div> 
                    
                     <div class="form-group">
                        <label for="status" class=" control-label">
                            البريد الالكتروني
                        </label>
                        <div class="">
                           <input type="email" 
                            class="form-control" required
                           name="email" value="{{ old('email') }}" />
                        </div>
                    </div> 
                    
                
                <div class="form-group">
                        <label for="status" class=" control-label">
                            صله مقدم الطلب بالمسجد
                        </label>
                        <div class="">
                           <input type="text" 
                            class="form-control" required
                           name="relation" value="{{ old('relation') }}" />
                        </div>
                    </div> 
                    
                    
                         
                         
                 <div class="form-group">
                        <label for="concept" class=" control-label">
                            نوع الطلب
                        </label>
                        
                        <div class="">
                           <select class="form-control" name="type" required>
                               <option value="طلب فتح حلقه"
                               >طلب فتح حلقه</option>
                           </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="status" class=" control-label">
                            أسم المسجد
                        </label>
                        <div class="">
                           <input type="text"  required
                            class="form-control"
                           name="mosque" value="{{ old('mosque') }}" />
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="status" class=" control-label">
                            اسم الامام
                        </label>
                        <div class="">
                           <input type="text"  required
                            class="form-control"
                           name="emam_name" value="{{ old('emam_name') }}" />
                        </div>
                    </div> 
                    
                    
                     <div class="form-group">
                        <label for="status" class=" control-label">
                            العنوان
                        </label>
                        <div class="">
                           <input type="text"  required
                            class="form-control"
                           name="address" value="{{ old('address') }}" />
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="status" class=" control-label">
                            ملاحظات
                        </label>
                        <div class="">
                           <textarea class="form-control" name="note">{{ old('note') }}</textarea>
                        </div>
                    </div> 
                    
                
                    
                    <div class="form-group">
                        <div class="text-right">
                            <input type="submit" value="ارسال "
                            style="float:right"
                            class="btn btn-success btn-lg preview-add-button" />
                        </div>
                    </div>
                </div>
                  </form>
            </div>            
        </div> <!-- / panel preview -->
        
      
	</div>
</div>
@stop