<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $table="players";
    protected $fillable=['player_id','sport_id','league_id','event_id','season_id','player_type_id','player_name','country_id','player_image','description','ranking','career_start_date','status','created','modified','createdBy','modifiedBy'];
}
