<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class adminRequest extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'adminrequest';

    public $timestamps = true ;

    public function retriverequest()
    {
     $request = array();
        foreach (doctorRequest::all() as $item )
           $request = $item ;
           return $request ;
    }


}
