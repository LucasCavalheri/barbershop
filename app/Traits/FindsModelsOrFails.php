<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

trait FindsModelsOrFails
{
    use HttpResponses;

    /**
     * Find a model by ID or fail with a custom error message.
     *
     * @param  class-string<Model>  $model
     * @param  int|string  $id
     * @param  string|null  $errorMessage
     * @return Model
     */
    protected function findOrFailWithError(string $model, int|string $id, ?string $errorMessage = null)
    {
        /** @var Model|null $instance */
        $instance = $model::find($id);

        if (!$instance) {
            $this->error($errorMessage ?? 'Registro não encontrado', Response::HTTP_NOT_FOUND)->throwResponse();
        }

        return $instance;
    }
}
