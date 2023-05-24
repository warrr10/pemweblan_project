@extends('layout/v_template')
@section('title', 'Add Akun')

@section('content')

<form action="/akun/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Role</label>
                    <input name="role" class="form-control" value="{{ old('role') }}">
                    <div class="text-danger">
                        @error('role')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" value="{{ old('username') }}">
                    <div class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input name="password" class="form-control" value="{{ old('password') }}">
                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" value="{{ old('email') }}">
                    <div class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

                {{-- <div class="form-group">
                    <label>Foto Akun</label>
                    <input type="file" name="foto_akun" class="form-control" value="{{ old('foto_akun') }}">
                    <div class="text-danger">
                        @error('foto_akun')
                            {{ $message }}
                        @enderror
                    </div>
                </div> --}}

            </div>
            
        </div>
    </div>

</form>
aadsgvddcdc
@endsection
