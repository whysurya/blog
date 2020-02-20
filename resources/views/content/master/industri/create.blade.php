@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <h5 class="text-muted font-weight-bold">
                                Forum Industri
                            </h5>
                        </div>
                        <form action="{{route('master.kirim.data.baru')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_industri">Nama Industri</label>
                                <input type="text" name="nama_industri" value="" placeholder="nama industri" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="nama_pemilik">Nama pemilik</label>
                                <input type="text" name="nama_pemilik" value="" placeholder="nama pemilik" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <textarea name="alamat" id="" class="form-control" cols="30" rows="10">
                            </textarea>
                            <div class="pt-3 mb-3">
                                <button type="submit" class="btn btn-outline-info">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection