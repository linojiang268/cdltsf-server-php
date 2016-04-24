<?php
namespace Ltsf\Repositories;

use Ltsf\Product;

class ProductRepository
{

    public function add($product)
    {
        return Product::create($product)->id;
    }

    public function findProductById($id)
    {
        return Product::where('id', $id)->first();
    }

    public function findProducts($brand = null, $page = null, $size = 16)
    {
        $query = Product::orderBy('created_at', 'desc');
        if (!is_null($brand)) {
            $query->where('brand', $brand);
        }
        if (!is_null($page)) {
            $query->forPage($page, $size);
        }
        $count = $query->count();
        $data = $query->get()->all();

        return [$count, $data];
    }

    public function findHotProducts()
    {
        return Product::orderBy('created_at', 'desc')
                        ->where('hot', true)
                        ->get();
    }
}
