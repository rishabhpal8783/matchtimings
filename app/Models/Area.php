<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table="area";
    protected $fillable=['continent_id','country_id','state_id','city_id','modifiedBy','created','modified','name','createdBy','status','pincode'];
}
