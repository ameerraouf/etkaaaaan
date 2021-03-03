@extends(app('tmp').'.index')
@section('title', '  |  الإستطلاع ')
@section('theme')
    <div class="my-5">
        <div class="container home-prog p-4">
            <h4 class="text-center mb-5" style="color: #064964"><i class="icofont-badge"></i> مارأيك بالموقع   </h4>
            <div class="rating">
                <form id="rate-form" method="post" action="{{ route('rate.store') }}">
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                    <div class="row choose-r">
                        <div class=" d-flex align-items-center  col-md-3 col-lg-2 col-6 text-center mb-3" style="color: #d55e5e;">
                            <h5 class="mb-0">  <input type="radio"
                            value="bad" name="rate"
                            name="rate" data-percent="10%"> سيئ </h5>
                        </div>
                        <div class=" d-flex align-items-center  col-md-3 col-lg-2 col-6 text-center mb-3" style="color: #6b7f87">
                            <h5 class="mb-0"><input
                            value="good" name="rate"
                            type="radio" name="rate" data-percent="50%" checked>  جيد  </h5>
                        </div>
                        <div class=" d-flex align-items-center  col-md-3 col-lg-2 col-6 text-center mb-3" style="color: #05a080;">
                            <h5 class="mb-0"><input
                            value="vreygood" name="rate"
                            type="radio" name="rate"  data-percent="80%" > جيد جدا </h5>
                        </div>
                        <div class=" d-flex align-items-center  col-md-3 col-lg-2 col-6 text-center mb-3" style="color: #259ac3">
                            <h5 class="mb-0"><input
                            value="excellent" name="rate"
                            type="radio" name="rate"  data-percent="100%"> ممتاز </h5>
                        </div>

                        <div class="col-md-12 col-lg-2 text-center ">
                            <button 
                            form="rate-form"
                            class="btn btn-success "><i class="icofont-ui-rate-add"></i>  تقييم </button>
                        </div>
                    </div>
                </form>


                <div class="my-5  kufi">
                    <h4 class="text-center mb-2" style="color: #064964"><i class="icofont-learn"></i>
                        استطلاع رأى</h4>
                    <div class="row my-4 pers">
                        <div class="col-md-3">
                            ممتاز
                        </div>
                        <div class=" col-md-7 progress">
                            <div class="progress-bar" role="progressbar" 
                            style="width: {{ ($rates->where('rate','excellent')->count() / $rates->count() ) * 100 }}%;" 
                            aria-valuenow="{{ ($rates->where('rate','excellent')->count() / $rates->count() ) * 100 }}%" 
                            aria-valuemin="0" 
                            aria-valuemax="100">{{intval (($rates->where('rate','excellent')->count() / $rates->count() ) * 100 )}}%</div>
                        </div>
                    </div>
                    <div class="row my-4 pers">
                        <div class="col-md-3">
                            جيد جدا
                        </div>
                        <div class=" col-md-7 progress">
                            <div class="progress-bar" 
                            role="progressbar" 
                            style="width: {{ ($rates->where('rate','vreygood')->count() / $rates->count() ) * 100 }}%;"
                            aria-valuenow="{{ ($rates->where('rate','vreygood')->count() / $rates->count() ) * 100 }}" 
                            aria-valuemin="0"
                            aria-valuemax="100">{{intval( ($rates->where('rate','vreygood')->count() / $rates->count() ) * 100 )}}%</div>
                        </div>
                    </div>
                    <div class="row my-4 pers">
                        <div class="col-md-3">
                            جيد
                        
                        </div>
                        <div class=" col-md-7 progress">
                            <div class="progress-bar" 
                            role="progressbar" 
                            style="width: {{ ($rates->where('rate','good')->count() / $rates->count() ) * 100 }}%;" 
                            aria-valuenow="{{ ($rates->where('rate','good')->count() / $rates->count() ) * 100 }}" 
                            aria-valuemin="0" 
                            aria-valuemax="100">{{intval( ($rates->where('rate','good')->count() / $rates->count() ) * 100 )}}%</div>
                        </div>
                    </div>

                    <div class="row my-4 pers">
                        <div class="col-md-3">
                            سيئ
                        </div>
                        <div class=" col-md-7 progress">
                            <div class="progress-bar" 
                            role="progressbar" 
                            style="width: {{ ($rates->where('rate','bad')->count() / $rates->count() ) * 100 }}%;" 
                            aria-valuenow="{{ ($rates->where('rate','bad')->count() / $rates->count() ) * 100 }}" 
                            aria-valuemin="0" 
                            aria-valuemax="100">{{intval( ($rates->where('rate','bad')->count() / $rates->count() ) * 100 )}}%</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@stop