<?php

namespace App\Repositories;

use App\Http\Requests\CreateSuperheroRequest;
use App\Imports\SuperherosImport;
use App\Models\Superhero;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SuperheroRepository extends BaseRepository
{
    public function __construct(Superhero $superhero)
    {
        parent::__construct($superhero);
    }

    public function all(Request $request)
    {
        return $this->model->where('name', 'LIKE', "%{$request->txtSearch}%")
                            ->orWhere('fullName', 'LIKE', "%{$request->txtSearch}%")
                            ->orWhere('race', 'LIKE', "%{$request->txtSearch}%")->paginate();
    }

    public function import(){
        Excel::import(new SuperherosImport, public_path()."/".'superheros.csv');
    }

    public function importSuper(Request $request){
        Excel::import(new SuperherosImport, $request->file('csv_file'));
    }

}
