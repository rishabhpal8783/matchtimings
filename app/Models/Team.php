<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table="team";
    protected $fillable=['team_id','sport_id','league_id','event_id','season_id','team_name','team_logo','formations','country_id','description','status','created','modified','createdBy','modifiedBy'];
}
