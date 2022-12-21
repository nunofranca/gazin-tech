<?php

declare(strict_types=1);

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function getAll(): object;

    public function getById(int $id): object;

    public function create(array $attributes): void;

    public function update(array $attibutes, int $id): void;

    public function destroy(int $id): void;
}
