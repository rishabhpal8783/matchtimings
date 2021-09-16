<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table="team_player_mapping";
    protected $fillable=['id','continent_id','country_id','state_id','city_id','area_id','pincode','name','address','status','created','modified','createdBy','modifiedBy'];
}
