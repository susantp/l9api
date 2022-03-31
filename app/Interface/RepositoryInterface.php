<?php

declare(strict_types=1);

namespace App\Interface;

interface RepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array;

    /**
     * @param $id
     * @return array
     */
    public function getById($id): array;
}
