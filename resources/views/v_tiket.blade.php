@extends('layout/v_template')
@section('title', 'Tiket')

@section('content')
<a href="/tiket/print" target="_blank" class="btn btn-primary">Print To Printer</a>
<a href="/tiket/printpdf" target="_blank" class="btn btn-success">Print To PDF</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Tiket</th>
            <th>Total Harga</th>
            <th>Kuantitas</th>
            <th>No. KA</th>
            <th>No. KTP</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($tiket as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->total_harga }}</td>
                <td>{{ $data->kuantitas }}</td>
                <td>{{ $data->no_ka }}</td>
                <td>{{ $data->no_ktp }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection