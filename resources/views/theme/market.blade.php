@include(app('tmp').'.header')

<!--  Header  -->
<div class="container main-page-content">

        <div class="row p-0 m-0 w-100 dor2">
            <h5 class="title-news text-center w-100 mt-4 mb-0">
               المنتجات
            </h5>


            @foreach($products as $product)
                <div class="col-xl-3 col-md-6 pd-left sm-pd">
                    <div class="card">
                        <img
                                class="card-img-top p-2 img-lst"
                                src="{{  asset('assets/uplodedimage/'. $product->img) }}"
                                alt="Card image cap"
                        />
                        <div class="card-body p-0 text-center">
                            <h6 class="card-title px-2 mb-0 font-weight-bold">
                                {{ $product->name }}
                            </h6>
                            <p class="card-text p-2  mb-0">
                                <small
                                        style="display:block;margin-bottom:5px"
                                >
                                    {{ $product->description }}
                                    .</small>
                                <span class="">{{ $product->price }}</span>
                            </p>

                            <form action="{{ route('pay') }}" method="get">
                                <div>
                                    <div
                                            class="d-flex align-items-center px-3 my-4 "
                                    >
                                        <p class="mb-0">
                                            <small class="font-weight-bold">
                                                قم بإدخال التبرع :
                                            </small>
                                        </p>
                                        <div>
                                            <input
                                                    name="price"
                                                    type="text" required class="mx-1 wd-input text-center" value="50">
                                            <small>ريال</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <input type="submit" class="d-block w-100 cd-btn cd-btn1"
                                           value="إهداء"/>
                                    <input type="submit" class="d-block w-100 cd-btn cd-btn2 text-light"
                                           value="التبرع المباشر"
                                    >
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

</div>
<!-- main page content-->

@include(app('tmp').'.footer')

