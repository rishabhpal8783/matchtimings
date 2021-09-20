<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table="schedule";
    protected $fillable=['schedule_id','sport_id','league_id','event_id','season_id','match_level_id','group_id','team1_id','team2_id','country_id','state_id','city_id','schedule_date','schedule_time','venue_id','status','created','modified','createdBy','modifiedBy'];
    public function sport()
    {
        return $this->hasOne(Sports::class,'sport_id','sport_id');
    }
    public function league()
    {
     return $this->hasOne(League::class,'league_id','league_id');
    }
    public function countries()
    {
     return $this->hasOne(Countries::class,'id','country_id');
    }
    public function teama()
    {
     return $this->hasOne(Team::class,'team_id','team1_id');
    }
    public function teamb()
    {
     return $this->hasOne(Team::class,'team_id','team2_id');
    }
}
