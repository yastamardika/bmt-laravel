@extends('layouts.admin')
@section('content')
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
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
</ul>

<div id="content-wrapper">

    <div class="container-fluid">
        <div class="p-3">
            <h1>List Artist</h1>

            <a href="/input/tambah"> + Tambah Artist Baru</a>

            <br />
            <br />

            <table border="1">
                <tr>
                    <th>Nama</th>
                    <th>kategori</th>
                    <th>Owner</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
                @foreach($artist as $p)
                <tr>
                    <td>{{ $p->nama_artist }}</td>
                    <td>{{ $p->kategori }}</td>
                    <td>{{ $p->nama_owner }}</td>
                    <td>{{ $p->deskripsi }}</td>
                    <td><img width="250px" src="{{ url('/data_file/'.$p->foto) }}"></td>
                    <td>
                        <a href="/input/edit/{{ $p->id }}">Edit</a>
                        |
                        <a href="/input/hapus/{{ $p->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <br>
        <br>
        @endsection
