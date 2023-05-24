@extends('layout/v_template')
@section('title', 'Add Kereta')

@section('content')

<form action="/kereta/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>No. KA</label>
                    <input name="no_ka" class="form-control" value="{{ old('no_ka') }}">
                    <div class="text-danger">
                        @error('no_ka')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jadwal Keberangkatan</label>
                    <input name="jadwal_berangkat" class="form-control" value="{{ old('jadwal_berangkat') }}">
                    <div class="text-danger">
                        @error('jadwal_berangkat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Stasiun Asal</label>
                    <input name="keberangkatan" class="form-control" value="{{ old('keberangkatan') }}">
                    <div class="text-danger">
                        @error('keberangkatan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Stasiun Tujuan</label>
                    <input name="tujuan" class="form-control" value="{{ old('tujuan') }}">
                    <div class="text-danger">
                        @error('tujuan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ old('harga') }}">
                    <div class="text-danger">
                        @error('harga')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

                {{-- <div class="form-group">
                    <label>Foto Kereta</label>
                    <input type="file" name="foto_kereta" class="form-control" value="{{ old('foto_kereta') }}">
                    <div class="text-danger">
                        @error('foto_kereta')
                            {{ $message }}
                        @enderror
                    </div>
                </div> --}}

            </div>
            
        </div>
    </div>

</form>

@endsection