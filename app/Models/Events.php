<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table="events";
    protected $fillable=['event_id','sport_id','league_id','event_name','description','status','created','modified','createdBy','modifiedBy'];


    public function sesions()
    {
     return $this->hasMany(Seasons::class,'event_id','event_id');
    }




}
