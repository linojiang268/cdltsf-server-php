<?php

namespace Ltsf\Http\Controllers;

use Ltsf\Repositories\NewsRepository;
use Ltsf\Services\ProductService;

class HomeController extends Controller
{
    /**
     * action for home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(NewsRepository $newsRepository, ProductService $productService)
    {
        $newspaper = $newsRepository->findLatestPiecesOfNews(7);
        $hotProducts = $productService->findHotProducts();

        return view('index', [
            'headerNav' => 'home',
            'newspaper' => $newspaper,
            'products'  => $hotProducts,
        ]);
    }
}
