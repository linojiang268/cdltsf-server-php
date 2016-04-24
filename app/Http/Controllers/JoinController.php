<?php
namespace Ltsf\Http\Controllers;

class JoinController extends Controller
{
    /**
     * action for Join us page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('join.index', [
            'headerNav' => 'join',
            'nav' => 'info'
        ]);
    }

    public function recruit()
    {
        return view('join.recruit', [
            'headerNav' => 'join',
            'nav' => 'recruit'
        ]);
    }

}
