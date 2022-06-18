<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctorclinic extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'clinic' ;

    protected $timestamps = true;

    public function doctor()
    {
        return $this->belongsToMany(doctor::class);
    }
}
