<?php

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected ProductRepository $productRepository)
    {
    }

    public function index()
    {
        $data = $this->productRepository->get();

        return response()->success($data, 200);
    }

    public function store(Request $request)
    {
    }

    public function show(Product $product)
    {
        return request()->wantsJson()
            ? response()->success($product, 200)
            : $product;
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }

    public function getAttributes(): array
    {
        return $this->productRepository->getAttributes();
    }
}
