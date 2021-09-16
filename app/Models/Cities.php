<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table="cities";
    protected $fillable=['id','continent_id','country_id','state_id','createdBy','modifiedBy','created','modified','name','status'];
}
