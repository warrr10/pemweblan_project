@extends('layout/v_template')
@section('title', 'Kereta')

@section('content')
    <a href="/kereta/add" class="btn btn-primary btn-sm">Add</a> <br>

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
                <th>No. KA</th>
                <th>Jadwal Keberangkatan</th>
                <th>Stasiun Asal</th>
                <th>Stasiun Tujuan</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kereta as $data)
                <tr>
                    <td>{{ $data->no_ka }}</td>
                    <td>{{ $data->jadwal_berangkat }}</td>
                    <td>{{ $data->keberangkatan }}</td>
                    <td>{{ $data->tujuan }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>
                        <a href="/kereta/detail/{{ $data->no_ka }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/kereta/edit/{{ $data->no_ka }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->no_ka }}">
                            Delete
                        </button>
                    </td>
                    {{-- <td><img src="{{ url('foto_kereta/'.$data->foto_kereta) }}" width="100px"></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($kereta as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->no_ka }}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->no_ka }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="/kereta/delete/{{ $data->no_ka }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach

@endsection
