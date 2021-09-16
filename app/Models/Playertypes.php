<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playertypes extends Model
{
    protected $table="player_types";
    protected $fillable=['player_type_id ','sport_id','league_id','event_id','season_id','player_type_name','status','created','modified','createdBy','modifiedBy'];
}
