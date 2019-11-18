<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $table = "artist";

    protected $fillable = ['nama_artist','kategori','nama_owner','deskripsi','nomor_telepon','alamat','foto'];

}
