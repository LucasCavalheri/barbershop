<?php

namespace App\Http\Controllers\Api\Service;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Barbershop;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListBarbershopServicesController extends Controller
{
    public function __invoke(Request $request, string $barbershopId)
    {
        $barbershop = $this->findOrFailWithError(Barbershop::class, $barbershopId, 'Barbearia não encontrada');

        $services = $barbershop->services;

        return $this->success('Serviços listados com sucesso', Response::HTTP_OK, ServiceResource::collection($services));
    }
}
