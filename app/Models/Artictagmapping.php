<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artictagmapping extends Model
{
    protected $table="article_tag_mapping";
    protected $fillable=['id','article_id','tag_type_id'];
}
