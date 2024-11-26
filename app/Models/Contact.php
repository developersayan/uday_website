<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contact";
    public function package_details()
    {
        return $this->hasOne('App\Models\Package','id','package_id');
    }
}
