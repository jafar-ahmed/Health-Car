<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\doctor as Authenticatable;
class doctor extends Authenticatable
{
    use HasFactory;

    use SoftDeletes ;

    protected $table = 'doctor';

    public  $timestamps = true ;

    public function retrivedoctor()
    {
        $doctor = array();
      foreach(doctor::all() as $item)
          $doctor = $item ;

          return $doctor ;
    }

    public function doctorinfo()
    {
       return $this->hasOne(doctorinfo::class);
    }

    public function doctorclinic()
    {
        return $this->belongsToMany(doctorclinic::class);
    }

    public function doctorrequest()
    {
        return $this->belongsToMany(doctorRequest::class);
    }
}
