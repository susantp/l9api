<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Warehouse;
use Illuminate\Auth\Access\HandlesAuthorization;

class WarehousePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Warehouse $warehouse): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Warehouse $warehouse): bool
    {
        //
    }

    public function delete(User $user, Warehouse $warehouse): bool
    {
        //
    }

    public function restore(User $user, Warehouse $warehouse): bool
    {
        //
    }

    public function forceDelete(User $user, Warehouse $warehouse): bool
    {
        //
    }
}