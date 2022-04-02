<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Product\ProductRepository;
use JetBrains\PhpStorm\ArrayShape;

class HomeRepository
{
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(protected ProductRepository $productRepository)
    {
    }

    /**
     * @return array
     */
    #[ArrayShape(['pageTitle' => 'string', 'products' => 'array[]'])]
    public function getHomeData(): array
    {
        $response['pageTitle'] = 'Welcome to thamelmart.com';
        $response['products'] = $this->productRepository->getPaginate(4);
        $response['productAttributes'] = $this->productRepository->getAttributes();

        return $response;
    }
}
