<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Barbershop;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class UpdateEmployeeController extends Controller
{
    public function __invoke(Request $request, string $barbershopId, string $employeeId)
    {
        $barbershop = $this->findOrFailWithError(Barbershop::class, $barbershopId, 'Barbearia não encontrada');

        $userCanUpdate = Gate::inspect('update', $barbershop);

        if (!$userCanUpdate->allowed()) {
            return $this->error('Você não tem permissão para atualizar empregados desta barbearia', Response::HTTP_FORBIDDEN);
        }

        $employee = $this->findOrFailWithError(Employee::class, $employeeId, 'Empregado não encontrado');

        // Verificar se o empregado pertence à barbearia
        if ($employee->barbershop_id !== $barbershop->id) {
            return $this->error('Este empregado não pertence a esta barbearia', Response::HTTP_FORBIDDEN);
        }

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255|unique:employees,email,' . $employee->id,
        ]);

        $employee->update($request->only(['name', 'email']));

        return $this->success('Empregado atualizado com sucesso', Response::HTTP_OK, EmployeeResource::make($employee));
    }
}
