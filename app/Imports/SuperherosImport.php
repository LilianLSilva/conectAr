<?php

namespace App\Imports;

use App\Models\Superhero;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SuperherosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    */
    public function model(array $row)
    {
       return new Superhero([
           'id'            => $row['id'],
           'name'          => $row['name'],
           'fullName'      => $row['fullname'],
           'strength'      => $row['strength'],
           'speed'         => $row['speed'],
           'durability'    => $row['durability'],
           'power'         => $row['power'],
           'combat'        => $row['combat'],
           'race'          => $row['race'],
           'height/0'      => $row['height0'],
           'height/1'      => $row['height1'],
           'weight/0'      => $row['weight0'],
           'weight/1'      => $row['weight1'],
           'eyeColor'      => $row['eyecolor'],
           'hairColor'     => $row['haircolor'],
           'publisher'     => $row['publisher'],
       ]);
    }
}
