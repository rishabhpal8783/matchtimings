<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchlevels extends Model
{
    protected $table="match_levels";
    protected $fillable=['match_level_id','sport_id','league_id','event_id','season_id','match_level_name','description','status','created','modified','createdBy','modifiedBy'];
}
