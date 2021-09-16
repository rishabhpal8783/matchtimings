<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table="states";
    protected $fillable=['id','continent_id','country_id','name','createdBy','modifiedBy','created','modified','status'];
}
