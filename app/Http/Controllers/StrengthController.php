<?php
namespace Ltsf\Http\Controllers;

class StrengthController extends Controller
{
    /**
     * 资质认证
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cert()
    {
        return view('strength.cert', [
            'headerNav' => 'strength',
            'nav' => 'cert'
        ]);
    }

    /**
     * 荣誉事迹
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function glory()
    {
        return view('strength.glory', [
            'headerNav' => 'strength',
            'nav' => 'glory'
        ]);
    }
}
