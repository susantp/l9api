<?php

namespace App\Repositories;

use App\Interface\RepositoryInterface;
use JetBrains\PhpStorm\ArrayShape;
use Ramsey\Uuid\Uuid;

/**
 *
 */
class HomeRepository implements RepositoryInterface
{
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

    /**
     * @return array
     */
    #[ArrayShape(['pageTitle' => 'string', 'products' => 'array[]'])]
    public function getHomeData(): array
    {
        return [
            'pageTitle' => 'Home Page',
            'products' => [
                [
                    'id' => Uuid::uuid4(),
                    'title' => 'first product',
                    'description' => 'first product description',
                    'price' => 100,
                ],
                [
                    'id' => Uuid::uuid4(),
                    'title' => 'Second product',
                    'description' => 'Second product description',
                    'price' => 100,
                ],
                [
                    'id' => Uuid::uuid4(),
                    'title' => 'Third product',
                    'description' => 'Third product description',
                    'price' => 100,
                ],
                [
                    'id' => Uuid::uuid4(),
                    'title' => 'Fourth product',
                    'description' => 'first product description',
                    'price' => 100,
                ],
                [
                    'id' => Uuid::uuid4(),
                    'title' => 'Fifth product',
                    'description' => 'first product description',
                    'price' => 100,
                ],
                [
                    'id' => Uuid::uuid4(),
                    'title' => 'Sixth product',
                    'description' => 'first product description',
                    'price' => 100,
                ],
            ],
        ];
    }
}
