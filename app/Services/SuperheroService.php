<?php
namespace App\Services;

use App\Http\Requests\CreateSuperheroRequest;
use App\Repositories\SuperheroRepository;
use Illuminate\Http\Request;

class SuperheroService
{
    private $superheroRepository;

    public function __construct(SuperheroRepository $superheroRepository)
    {
        $this->superheroRepository = $superheroRepository;
    }
    public function all(Request $request)
    {
        return $this->superheroRepository->all($request);
    }

    public function import()
    {
        return $this->superheroRepository->import();
    }

    public function importSuperheros(Request $request)
    {
        return $this->superheroRepository->importSuper($request);
    }

}
