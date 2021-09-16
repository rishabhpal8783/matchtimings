<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teamplayermapping extends Model
{
    protected $table="team_player_mapping";
    protected $fillable=['id','team_player_id','team_id','player_id','status','created','modified','createdBy','modifiedBy'];
}
