<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
   use HasFactory;
   use SoftDeletes;

   public function user()
    {
        return $this->belongsTo(User::class);
    }

     //getter make sure title is always uppercase
    public function getModelAttribute($value)
    {
        return strtoupper($value);
    }

     public function getColorAttribute($value)
    {
        return strtoupper($value);
    }

       public function getNoplatAttribute($value)
    {
        return strtoupper($value);
    }

      //setter make sure insert in DB always uppercase
    public function setNoplatAttribute($value)
    {
        return $this->attributes['noplat'] = strtoupper($value);
    }

}
