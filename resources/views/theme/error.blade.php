@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
  <h1>{{ session()->get('error') }}</h1>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
  <h1>{{ session()->get('success') }}</h1>
    </div>
@endif