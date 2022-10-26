<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'tgl_lahir', 'pendidikan', 'email', 'no_hp', 'alamat', 'nick_name', 'ID_game', 'id_loker'];
    public $timestamps = true;

    public function loker()
    {

        return $this->belongsTo('App\Models\Loker', 'id_loker');
    }

}
