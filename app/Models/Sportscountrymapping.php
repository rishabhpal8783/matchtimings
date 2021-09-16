<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sportscountrymapping extends Model
{
    protected $table="sports_country_mapping";
    protected $fillable=['id','sport_id','country_id'];
}
