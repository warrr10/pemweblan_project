@extends('layout/v_template')
@section('title', 'Akun')

@section('content')
    <a href="/akun/add" class="btn btn-primary btn-sm">Add</a> <br>

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
                <th>ID Pengguna</th>
                <th>Role</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($akun as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->role }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a href="/akun/detail/{{ $data->id_pengguna }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/akun/edit/{{ $data->id_pengguna }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_pengguna }}">
                            Delete
                        </button>
                    </td>
                    {{-- <td><img src="{{ url('foto_akun/'.$data->foto_akun) }}" width="100px"></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($akun as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_pengguna }}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->username }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="/akun/delete/{{ $data->id_pengguna }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach

@endsection
