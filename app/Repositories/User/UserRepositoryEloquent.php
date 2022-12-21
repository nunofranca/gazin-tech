<?php

declare(strict_types=1);

namespace App\Repositories\User;

use App\Repositories\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(private User $user)
    {
        parent::__construct($user);
    }
}
