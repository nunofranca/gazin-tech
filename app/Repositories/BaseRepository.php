<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class BaseRepository
{
    public function __construct(private Model $model)
    {
    }

    public function getAll(): object
    {
        return $this->model->all();
    }

    public function create($attributes): void
    {
        $this->model->create($attributes);
    }

    public function getById($id): object
    {
        $this->model->find($id);
    }

    public function update($attributes, $id): void
    {
        $model = $this->model->find($id);
        if (! $model) {
            throw new ModelNotFoundException();
        }
        $model->update($attributes);
    }

    public function destroy($id): void
    {
        $model = $this->model->find($id);
        $model->delete();
    }
}
