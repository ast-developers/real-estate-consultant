<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;

/**
 * Class CmsController
 * @package App\Http\Controllers\Cms
 */
class CmsController
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $pageSlug = $request->route()->getName();
        return view('cms.' . $pageSlug);
    }

}
