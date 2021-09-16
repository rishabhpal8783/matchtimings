<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table="groups";
    protected $fillable=['group_id','sport_id','league_id','event_id','season_id','group_name','team_id','status','created','modified','createdBy','modifiedBy'];
}
