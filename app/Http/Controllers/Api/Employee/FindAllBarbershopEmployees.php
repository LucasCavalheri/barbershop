<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Barbershop;
use Illuminate\Http\Response;

class FindAllBarbershopEmployees extends Controller
{
    public function __invoke(string $id)
    {
        $barbershop = $this->findOrFailWithError(Barbershop::class, $id, 'Barbearia não encontrada');

        $employees = $barbershop->employees;

        return $this->success('Empregados encontrados com sucesso', Response::HTTP_OK, EmployeeResource::collection($employees));
    }
}
