<?php

namespace App;
use \Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasTags;
    protected $table = "artist";

    protected $fillable = ['nama_artist','kategori','nama_owner','deskripsi','nomor_telepon','alamat','foto'];

}
