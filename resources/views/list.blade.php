@extends('layouts.default')

@section('content')
<div class="" style="padding:10px">
    <h1>
        {{ $kategori }}
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-lg-5">
                <h6 class="text-muted">List Group with Images</h6>
                <ul class="list-group text-light">

                    @foreach($artist as $data)
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color:black; margin-bottom:10px">
                        <div class="image-parent">
                            <img src="{{ url('/data_file/'.$data->foto) }}" class="img-fluid" alt="quixote">
                        </div>
                        {{ $data->nama_artist }}
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        {{ $artist->links() }}
    </div>
</div>
<br>
@endsection