<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table="countries";
    protected $fillable=['id','continent_id','name','created','modified','createdBy','modifiedBy','status'];
}
