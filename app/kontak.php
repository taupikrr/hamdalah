<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    //
    protected $table ='kontak';
    protected $fillable =['email','seluler'];
    protected $visible =['email','seluler'];

    public $timestamps =true;

}
