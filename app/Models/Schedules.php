<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table="schedule";
    protected $fillable=['schedule_id','sport_id','league_id','event_id','season_id','match_level_id','group_id','team1_id','team2_id','country_id','state_id','city_id','schedule_date','schedule_time','venue_id','status','created','modified','createdBy','modifiedBy'];
}
