<?php

namespace App\Http\Controllers\Cms;

use Request;

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
        $pageSlug = Request::route()->getName();
        return view('cms.' . $pageSlug);
    }

}
