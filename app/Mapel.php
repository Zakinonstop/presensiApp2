<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
    protected $table = 'mapel';
    // protected $fillable = 'nama_mapel';
    protected $guarded = [];
    protected $fillable = ['id', 'nama_mapel'];
    protected $primaryKey = 'id';

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id', 'mapel_id');
    }
}
