<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Exception;
use Mail;

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

    public function post(ContactRequest $request)
    {
        try {
            $req = $request->only('name', 'subject', 'message');
            $name = $req['name'];
            $subject = $req['subject'];
            $message = $req['message'];

            Mail::send('emails.contactMail', ['content' => $message], function ($m) use ($subject) {
                $m->to(env('MAIL_BILLING_EMAIL'));
                $m->subject(env('APP_NAME') . ' | ' . $subject);
            });

            return redirect('contact')->with('success', 'Mail sent successfully.');

        } catch (Exception $e) {
            return redirect('contact')->with('error', 'Something went wrong.');
        }
    }

}
