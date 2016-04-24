<?php
namespace Ltsf\Repositories;

use Ltsf\Brand;

class BrandRepository
{

    public function add($brand)
    {
        return Brand::create($brand)->id;
    }

    public function findBrands()
    {
        $query = Brand::orderBy('created_at', 'asc');

        return $query->get()->all();
    }
}
