<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctorRequestModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table='doctorRequeest';

    public $timestamps = true;

    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }
}
