@extends('layout/v_template')
@section('title', 'Add Penumpang')

@section('content')

<form action="/penumpang/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>No. KTP</label>
                    <input name="no_ktp" class="form-control" value="{{ old('no_ktp') }}">
                    <div class="text-danger">
                        @error('no_ktp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" class="form-control" value="{{ old('nama') }}">
                    <div class="text-danger">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                    <div class="text-danger">
                        @error('alamat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>No. HP</label>
                    <input name="no_telp" class="form-control" value="{{ old('no_telp') }}">
                    <div class="text-danger">
                        @error('no_telp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <input name="gender" class="form-control" value="{{ old('gender') }}">
                    <div class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Umur</label>
                    <input name="umur" class="form-control" value="{{ old('umur') }}">
                    <div class="text-danger">
                        @error('umur')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

                {{-- <div class="form-group">
                    <label>Foto Penumpang</label>
                    <input type="file" name="foto_penumpang" class="form-control" value="{{ old('foto_penumpang') }}">
                    <div class="text-danger">
                        @error('foto_penumpang')
                            {{ $message }}
                        @enderror
                    </div>
                </div> --}}

            </div>
            
        </div>
    </div>

</form>

@endsection