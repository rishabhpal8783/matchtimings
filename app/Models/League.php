<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table="leagues";
    protected $fillable=['league_id','sport_id','league_name','description','status','created','modified','createdBy','modifiedBy'];
    
    public function event()
    {
        return $this->hasMany(Events::class,'league_id','league_id');
    }
}
