@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Data pekerja</h4></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                <a href="{{ route('pekerja.create') }}" class="btn btn-primary">Add</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama pekerja</th>
                                <th scope="col">Umur</th>
                                <th scope="col">No Handphone</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jenis Pekerjaan</th>
                                <th scope="col">foto</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($pekerja as $data)
                            <tr>
                                <td scope="row">{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->jenis_pekerjaan }}
                                </td>
                                <td>
                                    <img src="{{ asset('/images/pekerja/' . $data->cover) }}" alt="" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('pekerja.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('pekerja.show', $data->id)}}" class="btn btn-warning">show</a>
                                    <form action="{{ route('pekerja.destroy', $data->id) }}" method="post" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
