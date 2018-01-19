<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rumah extends Model
{
	protected $table ='rumahs';
    protected $fillable = ['tipe_rumah','harga_rumah','luas_tanah','jumlah_lantai','kamar_tidur','kamar_mandi','alamat','agen_id', 'foto'];
    protected $visible = ['tipe_rumah','harga_rumah','luas_tanah','jumlah_lantai','kamar_tidur','kamar_mandi','alamat','agen_id', 'foto'];
    public $timestamps = true;

    public function agens()
    {
    	return $this->belongsTo('App\agen','agen_id');
    }
}
