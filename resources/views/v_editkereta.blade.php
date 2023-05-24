@extends('layout/v_template')
@section('title', 'Edit Kereta')

@section('content')

<form action="/kereta/update/{{ $kereta->no_ka }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>No. KA</label>
                    <input name="no_ka" class="form-control" value="{{ $kereta->no_ka }}">
                    <div class="text-danger">
                        @error('no_ka')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jadwal Keberangkatan</label>
                    <input name="jadwal_berangkat" class="form-control" value="{{ $kereta->jadwal_berangkat }}">
                    <div class="text-danger">
                        @error('jadwal_berangkat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Stasiun Asal</label>
                    <input name="keberangkatan" class="form-control" value="{{ $kereta->keberangkatan }}">
                    <div class="text-danger">
                        @error('keberangkatan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Stasiun Tujuan</label>
                    <input name="tujuan" class="form-control" value="{{ $kereta->tujuan }}">
                    <div class="text-danger">
                        @error('tujuan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ $kereta->harga }}">
                    <div class="text-danger">
                        @error('harga')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- <div class="col-sm 12">
                    <div class="col-sm-4">
                        <img src="{{ url('foto_kereta/'.$kereta->foto_kereta) }}" width="150px">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                    <label>Ganti Foto Kereta</label>
                    <input type="file" name="foto_kereta" class="form-control" value="{{ $kereta->foto_kereta }}">
                    <div class="text-danger">
                        @error('foto_kereta')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                    </div>
                </div>
                <br> --}}
                
                <div class="col-sm 12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            
        </div>
    </div>

</form>

@endsection