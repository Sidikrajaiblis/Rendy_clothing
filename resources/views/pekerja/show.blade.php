@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pekerja</div>

                <div class="card-body">
                <form action="{{ route('pekerja.update', $pekerja->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Nama pekerja</label>
                        <input type="text" class="form-control" name="nama" value="{{ $pekerja->nama }}" disabled>
                    </div><br>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="numb" class="form-control" name="umur" value="{{ $pekerja->umur }}" disabled>
                    </div><br>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" name="no_hp" value="{{ $pekerja->no_hp }}" disabled>
                    </div><br>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $pekerja->alamat }}" disabled>
                    </div><br>
                    <div class="form-group">
                        <label>Jenis Pekerjaan</label>
                        <input type="text" class="form-control" name="jenis_pekerjaan" value="{{ $pekerja->jenis_pekerjaan }}" disabled>
                    </div><br>
                    <div class="form-group">
                        <label>Foto</label>
                        <img src="{{ asset('/images/pekerja/' . $pekerja->cover) }}" width="100">
                    </div><br>
                        <div class="form-group">
                        <a href="{{ route('pekerja.index') }}" class="btn btn-primary">Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
