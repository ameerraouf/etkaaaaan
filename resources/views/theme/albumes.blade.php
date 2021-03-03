@extends(app('tmp').'.index')
@section('theme')



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class=" row my-3 ">
                @foreach(App\Albume::all() as $row)
                    <div class="col-md-4 p-1">
                        <a class="d-block" href="{{ url('Albumes/show') }}?albume_id={{ $row->id }}">
                            <div class="card my-0" >
                            <div class="position-relative slide-imgs" style="height: 250px">
                                <div  class="overlay-left">
                                    <i class="fas fa-search"></i>
                                </div>

                                <img  class="card-img-top h-100" src="{{  asset('assets/uplodedimage/'. $row->img) }}" alt="Card image cap">
                            </div>
                            <div class="card-body p-2">
                                <h5 class="card-title text-center text-dark">{{ $row->name }}</h5>
                                <h5 class="card-title text-center text-dark">{{ $row->imgs->count() }} صوره</h5>
                            </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="col-md-4">
            <div class="store my-3">

                <a href="">
                    <img style="height: 200px; object-fit: contain" class="w-100" src="https://th-qw.com/assets/adsimgs/1600359436.jpg" alt="">
                </a>
            </div>
            <div class="store my-3">
                <a href="">
                    <img style="height: 200px; object-fit: contain" class="w-100" src="https://th-qw.com/assets/adsimgs/1600359436.jpg" alt="">
                </a>
            </div>
            <div class="store my-3">
                <a href="">
                    <img style="height: 200px; object-fit: contain" class="w-100" src="https://th-qw.com/assets/adsimgs/1600359436.jpg" alt="">
                </a>
            </div>

        </div>
    </div>
</div>

@stop