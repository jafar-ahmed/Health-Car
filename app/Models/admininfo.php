<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class admininfo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table ='admininfo';

    protected $timestamps = true;


    public function admin()
    {
        return $this->belongsTo(admin::class);
    }


}
