<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class patiantinfo extends Model
{
    use HasFactory , SoftDeletes;

    protected $table='patiantinfo';

    protected $timestamps = true;

    public function patiant()
    {
        return $this->belongsTo(patiant::class);
    }
}
