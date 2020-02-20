@extends('layouts.template')

@section('content')
    <div class="row pyt-4">
        <!-- posisi image dan komen -->
        <div class="col-md-8">
            <!-- posisi image pembuka -->
            <img src="{{asset('img/ywdh gambar.jpg')}}" class="rounded" width="100%" height="100%" alt="">
            <!-- penutup image -->
            <!-- posisi title -->
            <div class="pt-3">
                <a href="http://">
                    #Naif #loebodoh
                 </a>
                <h4>
                    Why.Ay - Sedang Streaming
                </h4>
            </div>
            <!-- penutup title -->
            <!-- posisi informasi -->
            <div class="d-flex">
                    <div class="mr-auto">
                            <p>100,55,047 views - jun 13,2002</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="mr-3">123k </p>
                        <p class="mr-3">4.3k</p>
                        <p class="mr-3">Share</p>
                        <p class="mr-3">Save</p>
                    </div>
            </div> 
        </div>
        <!-- posisi up next -->
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <h6 class="font-weight-bold">Up Next</h6>
                        </div>
                        <!-- <div>
                            <div class="custom-control custom-switch">
                               <label for="customSwitch1" class="custom-control-label">Autoplay</label>
                                <input type="checkbox" class="custom-control-input" name="" id="customSwitch1">
                            </div>
                        </div> -->
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                            <span class="absolute -no"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>   
@endsection