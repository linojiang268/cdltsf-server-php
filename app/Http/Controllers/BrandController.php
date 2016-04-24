<?php
namespace Ltsf\Http\Controllers;

use Ltsf\Repositories\BrandRepository;

class BrandController extends Controller
{
    /**
     * action for home page
     *
     * @param string $brand brand
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(BrandRepository $brandRepository, $brand = null)
    {
        $brands = $brandRepository->findBrands();
        $brandData = [];
        foreach ($brands as $brandObj) {
            $brandData[ $brandObj->type ] = $brandObj;
        }
        $brand = isset($brandData[ $brand ]) ? $brand : current($brandData)->type;
        // load products in that brand
        $brand = $brandData[ $brand ]; // for demo, just assume that there's no product

        return view('brand.index', [
            'headerNav' => 'brands',
            'brands'    => $brandData,
            'brand'     => $brand,
        ]);
    }
}
