<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Models\Barbershop;
use App\Models\Employee;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class DeleteEmployeeController extends Controller
{
    public function __invoke(string $barbershopId, string $employeeId)
    {
        $barbershop = $this->findOrFailWithError(Barbershop::class, $barbershopId, 'Barbearia não encontrada');

        $userCanUpdate = Gate::inspect('update', $barbershop);

        if (!$userCanUpdate->allowed()) {
            return $this->error('Você não tem permissão para deletar empregados desta barbearia', Response::HTTP_FORBIDDEN);
        }

        $employee = $this->findOrFailWithError(Employee::class, $employeeId, 'Empregado não encontrado');

        // Verificar se o empregado pertence à barbearia
        if ($employee->barbershop_id !== $barbershop->id) {
            return $this->error('Este empregado não pertence a esta barbearia', Response::HTTP_FORBIDDEN);
        }

        $employee->delete();

        return $this->success('Empregado deletado com sucesso', Response::HTTP_OK);
    }
}
