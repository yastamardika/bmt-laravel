<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="/css/style.css">

<head>
</head>

<body style="padding:1%">

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

</body>

</html>
