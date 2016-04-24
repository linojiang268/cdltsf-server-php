<?php
namespace Ltsf\Http\Controllers;

use Ltsf\News;

class AboutController extends Controller
{
    /**
     * 公司简介
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function firm()
    {
        return view('about.firm', [
            'headerNav' => 'about',
            'nav' => 'firm'
        ]);
    }

    /**
     * 龙腾文化
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function culture()
    {
        return view('about.culture', [
            'headerNav' => 'about',
            'nav' => 'culture'
        ]);
    }

    /**
     * 联系我们
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('about.contact', [
            'headerNav' => 'about',
            'nav' => 'contact'
        ]);
    }
}
