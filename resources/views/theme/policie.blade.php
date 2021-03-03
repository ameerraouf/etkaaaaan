@extends(app('tmp').'.index')
@section('theme')

 	<div class="pagefile">
        <div class=" fixed-icons">
            <ul class=" mb-1 list-unstyled p-0 social-links text-center">
                <li class="nav-item d-inline-block">
                    <a class=" d-block " href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class=" d-block " href="#"><i class="fab fa-twitter"></i></a>
                    <a class=" d-block " href="https://wa.me/0558232328/?"><i class="fab fa-whatsapp"></i></a>
                    <a class=" d-block " href="#"><i class="fab fa-instagram"></i></a>
                    <a class=" d-block " href="#"><i class="fas fa-envelope s-envelope"></i></a>
                    <a class=" d-block " href="#"><i class="fab fa-snapchat-ghost"></i></a>
                    <a class=" d-block " href="https://www.youtube.com/channel/UCtjMnF1cgBVxjL52SoXjXfw"><i class="fab fa-youtube"></i></a>

                </li>
            </ul>
        </div>
        <div class="title">
            السياسات
        </div>
        <div class="content add-toc add-rw">
      
                <div class="row w-100 p-0 m-0" style="width: 100%">

                    @foreach($rows as $row)
                    <div class="col-md-4">
                        <div class="card mb-3" >
                            <div class="row no-gutters"  style="width: 100%">
                                <div class="col-md-4 text-center">
                                    <img 
                                    src="{{ asset('assets/uplodedimage/'.$row->img) }}" 
                                    class="card-img w-100 h-100" style="object-fit: cover" alt="...">
                                </div>
                                <div class="col-md-8 px-0" style="padding: 0">
                                    <div class="card-body p-2">
                                        <h6 class="card-title mb-1"><small>
                                                {{ $row->name }}
                                            </small></h6>
                                        <p class="" style="white-space: nowrap;text-overflow: ellipsis;width: 100%;overflow: hidden;"
                                        ><a target="_blank" class=" " href="{{ asset('assets/uplodedfiles/'.$row->file) }}">
                                            {{ $row->description }}
                                            </a>
                                        </p>
                                        <div class="text-left">
                                            <a target="_blank" class="text-danger " href="{{ asset('assets/uplodedfiles/'.$row->file) }}">
                                                <small>ملف</small> <i class=" fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



                </div>

	       <hr />


        </div><!-- end content -->
      </div><!-- end pagefile -->

@stop