@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <h5 class="text-muted font-weight-bold">
                                form jurusan dan kelas
                            </h5>
                        </div>
                        <form action="{{route('master.update.jurusan', $temukanjurusan->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                <input type="text" name="nama_kelas" value="{{$temukanjurusan->nama_kelas}}" placeholder="nama kelas" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="nama_jurusan">Nama Jurusan</label>
                                <input type="text" name="nama_jurusan" value="{{$temukanjurusan->nama_kelas}}" placeholder="nama jurusan" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="fasilitas">fasilitas</label>
                                <textarea name="fasilitas" id="" class="form-control" cols="30" rows="10">
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