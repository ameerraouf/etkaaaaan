@extends(app('tmp').'.index')
@section('theme')

    @php 
        $rows = App\AlbumeImage::where('albume_id', request('albume_id'))->get();
    @endphp

    <div class="container">
        <div id="lightgallery">
            <div class=" row ">
                @foreach($rows as $row)
                    <div class="col-lg-3 col-md-4">
                        <div class="card "  style="height: 250px;">
                            <a href="{{asset('assets/uplodedimage/'. $row->img) }}" class="item slide-imgs h-100">
                            <div  class="overlay-left">
                                <i class="fas fa-search"></i>
                            </div>
                            <img  class="card-img-top h-100" style="object-fit: cover" src="{{  asset('assets/uplodedimage/'. $row->img) }}" alt="Card image cap">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@stop