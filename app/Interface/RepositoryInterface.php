<?php

declare(strict_types=1);

namespace App\Interface;


/**
 *
 */
interface RepositoryInterface
{
    public function find($id);

    public function findById($id);

    public function get();
}
