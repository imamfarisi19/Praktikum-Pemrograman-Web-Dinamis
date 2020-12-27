<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mhs";
    protected $primaryKey = "id";
    protected $fillable = ['nama','alamat'];
}