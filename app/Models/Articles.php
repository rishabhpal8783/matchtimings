<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table="articles";
    protected $fillable=['article_id','sport_id','league_id','event_id','season_id','article_type_id','heading1','heading2','image','image_desc','video_url','summary_outline_description','detail_description','published_by','status','created','modified','createdBy','modifiedBy'];
}
