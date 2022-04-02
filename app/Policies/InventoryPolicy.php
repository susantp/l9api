<?php

namespace App\Policies;

use App\Models\Inventory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InventoryPolicy
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

    public function view(User $user, Inventory $inventory): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Inventory $inventory): bool
    {
        //
    }

    public function delete(User $user, Inventory $inventory): bool
    {
        //
    }

    public function restore(User $user, Inventory $inventory): bool
    {
        //
    }

    public function forceDelete(User $user, Inventory $inventory): bool
    {
        //
    }
}