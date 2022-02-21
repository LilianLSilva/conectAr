<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSuperheroRequest;
use App\Services\SuperheroService;
use Illuminate\Http\Request;

class SuperherosController extends Controller
{
    private $superheroService;

    public function __construct(SuperheroService $superheroService)
    {
        $this->superheroService = $superheroService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $superhero = $this->superheroService->all($request);
            return \Response()->json(['data' => $superhero], 200);
        } catch (\Exception $e){
            return \Response()->json(['res' => false, 'message' => $e->getMessage()], 422);
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function superheroImport()
    {
        try {
            $this->superheroService->import();
            return \Response()->json(['res' => true, 'message' => 'success, All good!'], 200);
        } catch (\Exception $e){
            return \Response()->json(['res' => false, 'message' => $e->getMessage()], 422);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function importSuperheros(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $this->superheroService->importSuperheros($request);
            return \Response()->json(['res' => true, 'message' => 'success, All good!'], 200);
        } catch (\Exception $e){
            return \Response()->json(['res' => false, 'message' => $e->getMessage()], 422);
        }
    }
}
