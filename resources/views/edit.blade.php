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
    <li class="nav-item">
        <a class="nav-link" href="/input/tambah">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Tambah Talent</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/input/edit/{id}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Edit Talent</span></a>
    </li>
</ul>

<div id="content-wrapper">

    <div class="container-fluid">
    <a href="/input"> Kembali</a>

    <br />
    <br />

    @foreach($artist as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required" value="{{ $p->nama_artist }}"> <br />
        Kategori <input type="text" name="kategori" required="required" value="{{ $p->kategori }}"> <br />
        Owner <input type="text" name="owner" required="required" value="{{ $p->nama_owner }}"> <br />
        Deskripsi <textarea type="text" name="deskripsi" required="required"
            value="{{ $p->deskripsi }}"> </textarea><br />
        Nomor Telepon <input type="text" name="handphone" required="required" value="{{ $p->nomor_telepon }}"> <br />
        Alamat <textarea name="alamat" required="required" value="{{ $p->alamat }}"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

@endsection
