<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagtypes extends Model
{
    protected $table="tag_types";
    protected $fillable=['tag_type_id','article_type_id','tag_type_name','created','modified','createdBy','modifiedBy','status'];
}
