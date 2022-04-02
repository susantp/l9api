<?php

declare(strict_types=1);

namespace App\Repositories\Product;

use App\Interface\RepositoryInterface;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Schema;

class ProductRepository implements RepositoryInterface
{
    public function __construct(protected Product $productModel)
    {
    }

    public function find($id): array
    {
        // TODO: Implement find() method.
        return [];
    }

    public function findById($id): array
    {
        // TODO: Implement findById() method.
        return [];
    }

    /**
     * @return mixed
     */
    public function get()
    {
        // TODO: Implement get() method.
        return $this->productModel->get();
    }

    public function getCombo(Product $product)
    {
        if (!$this->productModel->isCombo()) {
            return [];
        }

        return $product->combo;
    }

    public function getPaginate(int $number = null, int $defaultNumber = 5)
    {
        if ($number) {
            return $this->productModel->simplePaginate($number);
        }

        return $this->productModel->simplePaginate($defaultNumber);
    }

    public function getAttributes()
    {
        return Schema::getColumnListing($this->productModel->getTable());
    }
}
