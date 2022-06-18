<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class admin extends Authenticatable
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'admin';

    public $timestamps = true;

    public function retriveadmin()
   {
     $admin =array();
     foreach (admin::all() as $item)
       $admin = $item ;
       return $admin;
   }


    public function adminninfo()
    {
        return $this->hasOne(admininfo::class);
    }



}
