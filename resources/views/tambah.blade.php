@extends('layouts.admin')

@section('content')
<ul class="sidebar navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/input">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/input">
            <i class="fas fa-fw fa-users"></i>
            <span>Member</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/input/tambah">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Tambah Talent</span></a>
    </li>
</ul>

<div id="content-wrapper">

    <div class="container-fluid">
        <h1>Tambah Artist Baru</h1>

        <a href="/input"> Kembali</a>

        <br />
        <br />

        <form action="/input/store" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Group </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" required="required"> <br />
                </div>
            </div>
            <div class="form-group row">
                <label for="sel1" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="custom-select mr-sm-2" name="kategori" required="required"
                        id="inlineFormCustomSelect">
                        <option selected>Pilih</option>
                        <option value="Drama">Drama</option>
                        <option value="Music">Music</option>
                        <option value="Dance">Dance</option>
                        <option value="Mix Art">Mix Art</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ketua/Owner</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="owner" required="required"> <br />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control" required="required"></textarea> <br />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="handphone" required="required" maxlength="15">
                    <br />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" required="required"></textarea> <br />
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto</label>
                <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1">
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </div>
            </div>
        </form>
        <link href="css/sb-admin.css" rel="stylesheet">
        @endsection
