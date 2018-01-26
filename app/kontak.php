<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    //
    protected $table ='kontaks';
    protected $fillable =['nama','email','seluler'];
    protected $visible =['nama','email','seluler'];

    public $timestamps =true;

}
