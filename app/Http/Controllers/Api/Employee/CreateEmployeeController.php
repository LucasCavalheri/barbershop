<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Employee\CreateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Barbershop;
use App\Models\Employee;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class CreateEmployeeController extends Controller
{
    public function __invoke(CreateEmployeeRequest $request, string $id)
    {
        $barbershop = $this->findOrFailWithError(Barbershop::class, $id, 'Barbearia não encontrada');

        $userCanUpdate = Gate::inspect('update', $barbershop);

        if (!$userCanUpdate->allowed()) {
            return $this->error('Você não tem permissão para adicionar empregados nessa barbearia', Response::HTTP_FORBIDDEN);
        }

        $data = $request->validated();

        $employee = Employee::create([
            ...$data,
            'barbershop_id' => $barbershop->id,
        ]);

        return $this->success('Empregado adicionado com sucesso', Response::HTTP_CREATED, EmployeeResource::make($employee));
    }
}
