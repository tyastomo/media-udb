<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BagianModel extends Model
{
    protected $table = 'bagians';
    protected $primaryKey = 'id';
    public $timestamps = true;
    /*public $incrementing = false;*/

    protected $fillable = [
    	'id',
        'id_mapel',
        'nama',
        'isi',
        'created_at',
        'updated_at'
    ];

    public function mapel()
    {
        return $this->belongsTo('App\Models\MapelModel', 'id_mapel', 'id');
    }
}
