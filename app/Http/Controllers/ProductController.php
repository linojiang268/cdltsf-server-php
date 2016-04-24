<?php
namespace Ltsf\Http\Controllers;

use Illuminate\Http\Request;
use Ltsf\Repositories\BrandRepository;
use Ltsf\Repositories\ProductRepository;

class ProductController extends Controller
{
    public function productList(Request $request, ProductRepository $productRepository, $brand)
    {
        list($page, $size) = $this->sanePageAndSize($request, [
            'defaultSize' => 12
        ]);
        try {
            list($count, $products) = $productRepository->findProducts($brand, $page, $size);

            return $this->json([
                'pages' => intval(ceil($count / $size)),
                'products'  => $products,
            ]);
        } catch (\Exception $ex) {
            return $this->jsonException($ex);
        }
    }

    public function product(ProductRepository $products,
                            BrandRepository $brandRepository,
                            $id)
    {
        $brands = array_reduce($brandRepository->findBrands(), function ($brands, $brand) {
            $brands[$brand->type] = $brand;
            return $brands;
        }, []);
        if (empty($brands)) {
            abort(404);
        }

        $product = $products->findProductById($id);
        if (empty($product)) {
            abort(404);
        }

        $brand = isset($brands[$product->brand]) ? $brands[$product->brand]: null;
        if (empty($brand)) {
            abort(404);
        }

        return view('product.index', [
            'headerNav'  => 'brands',
            'brands'     => $brands,
            'brand'      => $brand,
            'product'    => $product,
        ]);
    }

}
