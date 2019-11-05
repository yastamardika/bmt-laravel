@extends('layouts.app')
@section('content')
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
