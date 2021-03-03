@include(app('tmp').'.header')
<div class="container">
    <div class="row p-0 m-0 w-100 dor2">
            <h5 class="title-news text-center w-100 mt-1 mb-0 kufi">
                <a href="{{ route('Gallary') }}" class="text-light">
                معرض الصور
                </a>
            </h5>
            <div class=" overflow-hidden w-100 my-3">
                <!-- slider --------------->
               <div class="row">
                    <?php
                    $pic_dep = App\Department::where('parent', 9)->get(['id']);
                    ?>
                    @foreach(App\News::whereIn('department',$pic_dep)->orWhere('department',9)->orderBy('id','desc')->get() as $pics)
                        <div class="col-4 card" style="width: 100%;">
                      
                        <a href="{{url('news/'.$pics->id.'/'.$pics->title)}}" class="slide-imgs" dir="rtl">
                            <img
                                    class="card-img-top w-100 h-100"  
                                    src="{{url('upload/'.$pics->photo)}}"
                                    alt=""
                            />
                            <div class="overlay">
                                <i class="icofont-eye-alt"></i>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
</div>
@include(app('tmp').'.footer')
