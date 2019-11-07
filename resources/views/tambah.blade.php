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
        <h1>tambah artist baru</h1>

        <a href="/input"> Kembali</a>

        <br />
        <br />

        <form action="/input/store" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            Nama <br> <input type="text" name="nama" required="required"> <br />
            Kategori <br><input type="text" name="kategori" required="required"> <br />
            Owner <br><input type="text" name="owner" required="required"> <br />
            Deskripsi <br><textarea type="text" name="deskripsi" required="required"> </textarea> <br />
            Nomor Telepon <br><input type="text" name="handphone" required="required"> <br />
            Alamat <br><textarea name="alamat" required="required"></textarea> <br />
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto</label>
                <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1">
            </div>
            <input type="submit" value="Simpan Data">
        </form>
        <link href="css/sb-admin.css" rel="stylesheet">
        @endsection
