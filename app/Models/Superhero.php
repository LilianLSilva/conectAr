<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $table='superheroes';

    protected $fillable = [
        'name',
        'fullName',
        'strength',
        'speed',
        'durability',
        'power',
        'combat',
        'race',
        'height/0',
        'height/1',
        'weight/0',
        'weight/1',
        'eyeColor',
        'hairColor',
        'publisher'
    ];

    public function race()
    {
        return $this->hasOne(Race::class);
    }

    public function eyeColor()
    {
        return $this->hasOne(eyeColor::class);
    }

    public function hairColor()
    {
        return $this->hasOne(hairColor::class);
    }

    public function publisher()
    {
        return $this->hasOne(Publisher::class);
    }
}
