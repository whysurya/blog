@extends('layouts.template')

@section('content')
<div class="pt-5">
    <h3 class="font-weight-bold">
        Recommended
    </h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header boreder-0">
                    <img src="{{asset('img/ywdh gambar.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('img/ywdh gambar.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                    <div>
                        <a href="{{route('watch/Sedang-Streaming')}}">
                        <h6 class="font-weight-bold"> Sedang Streaming</h6>
                        </a>
                    
                            <small class="text-muted">Why.Ay</small>
                            <br>
                            <small class="text-muted">1M View . i day ago</small>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection