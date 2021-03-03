@extends(app('tmp').'.index')
@section('theme')


<div class="contactuspage">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="contactdetils">
             @if(Set::set()->mobile2 != NULL)
              <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
                {{Set::set()->mobile2}}
              </span>
             @endif
             @if(Set::set()->mobile1 != NULL)
              <span>
                <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                {{Set::set()->mobile1}}
              </span>
             @endif
              @if(Set::set()->fax != NULL)
              <span>
                <i class="fa fa-fax" aria-hidden="true"></i>
                {{Set::set()->fax}}
              </span>
             @endif
              <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                {{Set::set()->sitemail}}
              </span>
               @if(Set::set()->fax != NULL)
	              <a href="{{Set::set()->facebook}}" target="_blank"><i aria-hidden="true" class="fa fa-facebook"></i></a>
               @endif
               @if(Set::set()->fax != NULL)
                <a href="{{Set::set()->twitter}}" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a>
               @endif
                @if(Set::set()->youtube != NULL)
                 <a href="{{Set::set()->youtube}}" target="_blank"><i aria-hidden="true" class="fa fa-youtube"></i></a>
                @endif
                @if(Set::set()->pinterest != NULL)
	              <a href="{{Set::set()->pinterest}}" target="_blank"><i aria-hidden="true" class="fa fa-pinterest-p"></i></a>
	            @endif
	            @if(Set::set()->skype != NULL)
                 <a href="skype:{{Set::set()->skype}}" target="_blank"><i aria-hidden="true" class="fa fa-skype"></i></a>
                @endif
                @if(Set::set()->linkedin != NULL)
	              <a href="{{Set::set()->linkedin}}" target="_blank"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
	            @endif
            </div><!-- end contactdetils -->



            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBZWz8oCWUVF5x2qYf8YQb8QKbKmXp_DY&callback=initialize" async defer></script>
            <div id="map" style="height: 450px;width:100%;"></div>

                <script type="text/javascript">
                    var map;
                    function initialize(){

                    @if(Set::set()->address_lat_lng == '' || Set::set()->address_lat_lng == null)
                      var data = new Array(24.71205535972918,46.67198138574213,10);
                      $('.address_lat_lng').val(data[0]+','+data[1]+','+data[2]);
                    @else
                     <?php
$lats = explode(',', Set::set()->address_lat_lng);
?>
                      var data = new Array({{$lats[0]}},{{$lats[1]}},{{$lats[2]}});
                    @endif
                  var zoomer = parseInt(data[2]);
                  var myLatlng = new google.maps.LatLng(data[0],data[1]);
                  var myOptions = {
                      zoom:zoomer,
                      center: myLatlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  }

                map = new google.maps.Map(document.getElementById("map"), myOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    draggable: false,
                 });


                    }

                window.onload = function () { initialize() };
                </script> -->

          </div><!-- end col-lg-4 -->
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="contactusform">
              {!! Form::open() !!}
                <div class="form-group">
                  <label for="exampleInputEmail1">الاسم</label>
                  <input type="text" name="name" @if(auth()->user()) value="{{auth()->user()->name}}" @else  value="{{old('name')}}" @endif class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">البريد الإلكتروني</label>
                  <input type="email" class="form-control" name="email" @if(auth()->user()) value="{{auth()->user()->email}}" @else value="{{old('email')}}" @endif id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">رقم الجوال</label>
                  <input type="text" class="form-control" name="mobile" @if(auth()->user()) value="{{auth()->user()->mobile}}" @else  value="{{old('mobile')}}" @endif  id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">عنوان الرسالة</label>
                  <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                        <div class="form-group">
                  <label for="exampleInputEmail1">نوع الرسالة</label>
                   {!! Form::select('type_id',App\TypeCon::pluck('name','id'),old('type_id'),['class'=>'form-control']) !!}
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">محتوي رسالتك</label>
                  <textarea class="form-control" name="content" rows="10">{{old('content')}}</textarea>
                </div><!-- end form-group -->
                <button type="submit">أرسل الأن</button>
              {!! Form::close() !!}
            </div><!-- end contactusform -->
          </div><!-- end col-lg-8 -->
        </div><!-- end row -->
      </div><!-- end contactuspage -->


@stop