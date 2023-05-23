@extends('layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar User Baru</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="card-text">

                        <form class="col-6" action="/userstore" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" placeholder="Username" autofocus class="form-control">
                                @error('username')
                                <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                                @error('password')
                                <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Level</label>
                                <select class="form-control" name="level">
                                    <option hidden value="">- Pilih Level -</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Petugas">Petugas</option>
                                </select>
                                @error('level')
                                <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                                <a href="/datausers" class="btn btn-dark">Kembali</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
@endsection