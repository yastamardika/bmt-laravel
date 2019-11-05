@extends('layouts.default')

@section('content')
<div class="" style="padding:10px">
    <h1>
        category.name
    </h1>
    <div class="container" style="">
        <div class="row">
            <div class="col-12 col-sm-8 col-lg-5">
                <h6 class="text-muted">List Group with Images</h6>
                <ul class="list-group text-light">
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        style="background-color:black">
                        <div class="image-parent">
                            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg"
                                class="img-fluid" alt="quixote">
                        </div>
                        Don Quixote
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
