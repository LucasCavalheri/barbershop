<?php

namespace App\Http\Controllers\Api\Barbershop;

use App\Http\Controllers\Controller;
use App\Http\Resources\BarbershopResource;
use App\Models\Barbershop;
use Illuminate\Http\Response;

class FindAllBarbershopsController extends Controller
{
    public function __invoke()
    {
        $barbershops = Barbershop::all();

        return $this->success('Barbearias listadas com sucesso', Response::HTTP_OK, BarbershopResource::collection($barbershops));
    }
}
