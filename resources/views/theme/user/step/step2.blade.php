    

        <div class="step1content">
          <h1>حالة الطلب</h1>
           
            <div class="steptwo">
            @if($order->status == 'accept')
              <h2 class="alertsuc">تم القبول</h2>
              <div class="alert alert-success" role="alert">تم قبول طلبك مبدئيا ونرجو منك استكمال تعبئه البينات ليتم مراجعتها مرة اخرى</div>
            @endif
            @if($order->status == 'refused')  
              <h2 class="alertdan">تم الرفض</h2>
              <div class="alert alert-danger" role="alert">
              {{$order->refused_reason}}
              </div>
            @endif 
            @if($order->status == 'panding') 
              <h2 class="alertwar">فى الانتظار</h2>
              <div class="alert alert-warning" role="alert">طلبك فى حالة الانتظار</div>
            </div><!-- end steptwo -->
            @endif 
            <hr>
            @if($order->status == 'accept')
            <div class="pull-right hidden"><a href="#" class="prevstep"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> السابق</a></div>
            <div class="pull-left"><a href="{{url('step/2')}}" class="nextstep">التالي <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
            @endif
            <div class="clearfix"></div>
          
        </div><!-- end step1content -->
        </div><!-- end step1content -->

 