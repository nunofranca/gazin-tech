<?php

declare(strict_types=1);

namespace App\Services\User;

interface UserServiceInterface
{
    public function getAll(): object;

    public function create(array $attributes): void;

    public function update(array $attibutes, int $id): void;

    public function destroy(int $id): void;
}
