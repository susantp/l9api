<?php

namespace App\Repositories;

use App\Interface\RepositoryInterface;

/**
 *
 */
class HomeRepository implements RepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array
    {
        return [];
    }

    /**
     * @param $id
     * @return array
     */
    public function getById($id): array
    {
        return [];
    }
}
