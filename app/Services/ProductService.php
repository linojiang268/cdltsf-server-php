<?php

namespace Ltsf\Services;

use Ltsf\Repositories\ProductRepository;

class ProductService
{
    private $products;

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    /**
     * find hot products
     *
     * hot products are those that might be promoted in that season
     *
     * @return mixed
     */
    public function findHotProducts()
    {
        return $this->products->findHotProducts();
    }
}