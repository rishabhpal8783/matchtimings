<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $table="seasons";
    protected $fillable=['season_id','sport_id','league_id','event_id','season_name','description','status','created','modified','createdBy','modifiedBy'];
    public function sesion()
    {
        return $this->hasOne(Schedules::class,'season_id','season_id');
    }


}
