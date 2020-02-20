@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="py-2">
                                    inforamsi siswa
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa.....">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Keahlian</label>
                                   <select name="" id="" class="form-control">
                                    <option value="">***Pilih Keahlian/ Jurusan***</option>
                                    <option value="">MM</option>
                                    <option value="">RPL</option>
                                   </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="py-2">
                                    Nilai Non - Teknis
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kedisiplinan</label>
                                    <input type="number" name="" id="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kerjasama</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa......." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Inisiative/Kreatif</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa......." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kerajinan</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa......." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Tanggung Jawab</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa......." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Sikap</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa......." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kebersihan</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Siswa......." >
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <button type="submit" class="btn btn-info">Simpan Nilai</button>
                            <a href="{{route('master.nilai')}}" class="btn btn-secondary">
                                Batalkan
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection