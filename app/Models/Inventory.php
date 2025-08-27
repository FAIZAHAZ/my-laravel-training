<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //getter make sure title is always uppercase
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

       public function getDescriptionAttribute($value)
    {
        return strtoupper($value);
    }

      //setter make sure insert in DB always uppercase
    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = strtoupper($value);
    }

}
