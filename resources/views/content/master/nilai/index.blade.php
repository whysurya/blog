@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="container">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="py-2">
                        <a href="{{route('master.tampilkan.form.nilai')}}" class="btn btn-info">
                            Input Nilai Siswa
                        </a>
                    </div>
                    <h5>Data Nilai Siswa (Non Akses Teknis) </h5>

                    <table class="table table-striped">
                        <thead>
                            <th>Nama</th>
                            <th>Kedisiplinan</th>
                            <th>Kerjasama</th>
                            <th>Inisiatif/kreatif</th>
                            <th>Kerajinan</th>
                            <th>Tanggung Jawab</th>
                        </thead>
                    </table>
                    <h5>Data Nilai Siswa (Akses Teknis) </h5>

                    <table class="table table-striped">
                        <thead>
                            <th>Nama</th>
                            <th>Kedisiplinan</th>
                            <th>Kerjasama</th>
                            <th>Inisiatif/kreatif</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection