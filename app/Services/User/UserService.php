<?php

declare(strict_types=1);

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function getAll(): object
    {
        return $this->userRepository->getAll();
    }

    public function create(array $attributes): void
    {
        $this->userRepository->create($attributes);
    }

    public function update(array $attibutes, int $id): void
    {
        $this->userRepository->update($attibutes, $id);
    }

    public function destroy(int $id): void
    {
        $this->userRepository->destroy($id);
    }
}
