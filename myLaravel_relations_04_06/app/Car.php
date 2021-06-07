<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Pilot;

class Car extends Model
{
    protected $fillable = [
        'name', 'model', 'kw', 'brand_id',
    ];

    public function brand(){

        return $this -> belongsTo(Brand::class);
    }

    public function pilots(){

        return $this -> belongsToMany(Pilot::class);
    }
}
