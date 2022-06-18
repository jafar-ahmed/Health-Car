<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class patiantfav extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table='favdoctor';

    protected $timestamps = true;



    public function patiant()
    {
        return $this->belongsToMany(patiant::class);
    }
}
