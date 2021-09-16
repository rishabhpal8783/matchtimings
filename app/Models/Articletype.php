<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articletype extends Model
{
    protected $table="article_types";
    protected $fillable=['article_type_id','sport_id','league_id','event_id','season_id','article_type_name','description','status','created','modified','createdBy','modifiedBy'];
}
