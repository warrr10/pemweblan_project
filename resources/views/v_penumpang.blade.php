@extends('layout/v_template')
@section('title', 'Penumpang')

@section('content')
    <a href="/penumpang/add" class="btn btn-primary btn-sm">Add</a> <br>

    @if (session('Pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('Pesan') }}.
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. KTP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Gender</th>
                <th>Umur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penumpang as $data)
                <tr>
                    <td>{{ $data->no_ktp }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->umur }}</td>
                    <td>
                        <a href="/penumpang/detail/{{ $data->no_ktp }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/penumpang/edit/{{ $data->no_ktp }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->no_ktp }}">
                            Delete
                        </button>
                    </td>
                    {{-- <td><img src="{{ url('foto_penumpang/'.$data->foto_penumpang) }}" width="100px"></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($penumpang as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->no_ktp }}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->no_ktp }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="/penumpang/delete/{{ $data->no_ktp }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach

@endsection
