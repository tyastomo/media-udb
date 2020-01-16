<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    protected $table = 'mapels';
    protected $primaryKey = 'id';
    public $timestamps = true;
    /*public $incrementing = false;*/

    protected $fillable = [
        'id',
        'nama',
        'nama_penulis',
        'cover',
        'created_at',
        'updated_at'
    ];

    public function bagian()
    {
        return $this->hasMany('App\Models\BagianModel', 'id', 'id_mapel');
    }
}
