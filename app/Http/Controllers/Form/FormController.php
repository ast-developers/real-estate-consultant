<?php
namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use Excel;
use Mail;

/**
 * Class CmsController
 * @package App\Http\Controllers\Form
 */
class FormController
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected $excel;

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $pageSlug = $request->route()->getName();
	    return view('cms.' . $pageSlug);
    }

    public function post(Request $request)
    {
        try {
            $customerInfo = $request['customerInfo'];
            $siteInfo = $request['siteInfo'];
            $billingInfo = $request['billingInfo'];
			$data=[];
			$attachments=[];
			if($request->hasfile('fileInfo'))
			{
				foreach($request->file('fileInfo') as $file)
				{
					$name=time().$file->getClientOriginalName();
					$newFileName=$name;
					$file->move(public_path().DIRECTORY_SEPARATOR.'Uploads'.DIRECTORY_SEPARATOR,$newFileName );
					$data[] = $newFileName;
					$attachments[] = public_path() .DIRECTORY_SEPARATOR. 'Uploads' .DIRECTORY_SEPARATOR. $newFileName;

				}
			}
			$title_array = [];
            $value_array = [];
            foreach ($customerInfo as $key => $value) {
                $title_array[] = 'Customer Info - ' . ucfirst(str_replace('_', ' ', $key));
                $value_array[] = $value;
            }
            foreach ($siteInfo as $key => $value) {
                $title_array[] = 'Site Info - ' . ucfirst(str_replace('_', ' ', $key));
                $value_array[] = $value;
            }
            foreach ($billingInfo as $key => $value) {
                $title_array[] = 'Billing Info - ' . ucfirst(str_replace('_', ' ', $key));
                $value_array[] = $value;
            }

            $data_array = array($title_array, $value_array);
            $file_name = 'REC_' . time();
            Excel::create($file_name, function ($excel) use ($data_array) {
                $excel->sheet('Sheet1', function ($sheet) use ($data_array) {
                    $sheet->fromArray($data_array, null, 'A1', false, false);
                });
            })->store('xls');

            $file_path = storage_path() .DIRECTORY_SEPARATOR. 'exports' .DIRECTORY_SEPARATOR. $file_name . '.xls';
            $attachments[] = $file_path;

            Mail::send('emails.mail', [], function ($m) use ($attachments) {
                $m->to(env('MAIL_BILLING_TO_EMAIL'));
                $m->subject(env('APP_NAME') . ' | Billing Info');
				foreach ($attachments as $attach){
					$m->attach($attach);
				}
            });

            return redirect('contact')->with('success', 'Thank You !!!.....We are Contacted in less than 48 hours.');
        } catch (\Exception $e) {
            return redirect('zone')->with('error', 'Something went wrong.');
        }
    }


}
