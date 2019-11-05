<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="/css/style.css">

<body style="padding:1%">


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


</body>

</html>
