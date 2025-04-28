<?php

namespace App\Http\Controllers\Api\Barbershop;

use App\Http\Controllers\Controller;
use App\Http\Resources\BarbershopResource;
use App\Models\Barbershop;
use Illuminate\Http\Response;

class GetBarbershopController extends Controller
{
    public function __invoke(string $id)
    {
        $barbershop = Barbershop::find($id);

        if (!$barbershop) {
            return $this->error('Barbearia nao encontrada', Response::HTTP_NOT_FOUND);
        }

        return $this->success('Barbearia encontrada com sucesso', Response::HTTP_OK, BarbershopResource::make($barbershop));
    }
}
