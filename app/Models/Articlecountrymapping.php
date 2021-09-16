<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articlecountrymapping extends Model
{
    protected $table="article_country_mapping";
    protected $fillable=['id','article_id','country_id'];
}
