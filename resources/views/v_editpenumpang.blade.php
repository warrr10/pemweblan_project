@extends('layout/v_template')
@section('title', 'Edit Penumpang')

@section('content')

<form action="/penumpang/update/{{ $penumpang->no_ktp }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>No. KTP</label>
                    <input name="no_ktp" class="form-control" value="{{ $penumpang->no_ktp }}">
                    <div class="text-danger">
                        @error('no_ktp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" class="form-control" value="{{ $penumpang->nama }}">
                    <div class="text-danger">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{ $penumpang->alamat }}">
                    <div class="text-danger">
                        @error('alamat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>No. HP</label>
                    <input name="no_telp" class="form-control" value="{{ $penumpang->no_telp }}">
                    <div class="text-danger">
                        @error('no_telp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <input name="gender" class="form-control" value="{{ $penumpang->gender }}">
                    <div class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Umur</label>
                    <input name="umur" class="form-control" value="{{ $penumpang->umur }}">
                    <div class="text-danger">
                        @error('umur')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- <div class="col-sm 12">
                    <div class="col-sm-4">
                        <img src="{{ url('foto_penumpang/'.$penumpang->foto_penumpang) }}" width="150px">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                    <label>Ganti Foto Penumpang</label>
                    <input type="file" name="foto_penumpang" class="form-control" value="{{ $penumpang->foto_penumpang }}">
                    <div class="text-danger">
                        @error('foto_penumpang')
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