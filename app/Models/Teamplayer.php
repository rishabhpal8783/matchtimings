<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teamplayer extends Model
{
    protected $table="team_player";
    protected $fillable=['team_player_id','sport_id','league_id','event_id','season_id','team_id','status','created','modified','createdBy','modifiedBy'];
}
