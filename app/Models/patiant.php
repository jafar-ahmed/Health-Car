<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\patiant as Authenticatable;
class patiant extends Authenticatable
{
    use HasFactory;

    use SoftDeletes;

    protected $table='patiant';

    public $timestamps=true;

    public function retrive ()
    {
     $patiant = array();
     foreach(patiant::all() as $item )
       $patiant = $item;
       return $patiant;
    }

   public function patiantinfo ()
   {
     return $this->hasOne(patiantinfo::class);
   }

   public function patiantfav ()

   {
      return $this->belongsToMany(patiantfav::class);
   }



}
