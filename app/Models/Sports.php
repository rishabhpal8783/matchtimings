<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    protected $table="sports";
    protected $fillable=['sport_id','description','status','sport_name','created','modified','createdBy','modifiedBy'];
    public function league()
    {
     return $this->hasMany(League::class,'sport_id','sport_id');
    }

  
}
