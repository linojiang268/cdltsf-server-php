<?php
namespace Ltsf\Http\Controllers;

class AffiliateController extends Controller
{
    /**
     * action for claim for affiliate(加盟条件)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function claim()
    {
        return view('affiliate.claim', [
            'headerNav' => 'affiliate',
            'nav' => 'claim'
        ]);
    }

    /**
     * action for sales network(销售网络)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales()
    {
        return view('affiliate.sales', [
            'headerNav' => 'affiliate',
            'nav' => 'sales'
        ]);
    }

    /**
     * action for cooperation for affiliate(合作方式)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cooperate()
    {
        return view('affiliate.cooperate', [
            'headerNav' => 'affiliate',
            'nav' => 'cooperate'
        ]);
    }
}
