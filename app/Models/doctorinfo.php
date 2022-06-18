<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctorinfo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table='doctorinfo';

    protected $timestamps = true;

    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }
}
