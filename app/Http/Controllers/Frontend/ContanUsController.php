<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Document;
use App\Models\Config;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;

class ContanUsController extends Controller
{
	
	public function index()
	{
        $web_lang = ((!session('locale'))? 'en':session('locale') );	
        $this->data =[
                        'web_lang' => $web_lang,
                        'name' => 'name_'.$web_lang,
                        'detail' => 'detail_'.$web_lang,
                        'short_desc' => 'short_desc_'.$web_lang,
						'copyright' => 'copyright_'.$web_lang,
						'phone' => 'phone_'.$web_lang,
						'address' => 'address_'.$web_lang,
						'web_config' => Config::first(),
						'documents' => Document::orderBy('created_at', 'desc')->get(),
                    ];	
        return view('frontend.contact_us', $this->data);
	}
	public function store(Request $request)
    {
        // $request->validate([
        //     'g-recaptcha-response' => 'required|captcha',
				// ]);
				$data=request()->validate([
					'name'	=>	'required',
					'email'	=>	'required|email',
					'message'	=>	'required',
					'g-recaptcha-response' => 'required|captcha',
				]);

				Mail::to('test@test.com')->send(new ContactFormMail($data));
				return redirect('contact-us');
    }
}
