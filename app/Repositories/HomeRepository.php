<?php

namespace App\Repositories;

use App\Interface\RepositoryInterface;
use JetBrains\PhpStorm\ArrayShape;

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
    #[ArrayShape(['title' => 'string', 'products' => 'array[]'])]
 public function getHomeData(): array
 {
     return [
         'title' => 'Home Page',
         'products' => [
             [
                 'title' => 'first product',
                 'description' => 'first product description',
                 'price' => 100,
             ],
             [
                 'title' => 'first product',
                 'description' => 'first product description',
                 'price' => 100,
             ],
             [
                 'title' => 'first product',
                 'description' => 'first product description',
                 'price' => 100,
             ],
             [
                 'title' => 'first product',
                 'description' => 'first product description',
                 'price' => 100,
             ],
             [
                 'title' => 'first product',
                 'description' => 'first product description',
                 'price' => 100,
             ],
             [
                 'title' => 'first product',
                 'description' => 'first product description',
                 'price' => 100,
             ],
         ],
     ];
 }
}
