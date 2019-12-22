<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DonationController extends Controller
{
    
    public function index()
    {
        $this->data = [
            'donation' => Donation::first(),
        ];
    
        return view('admin.donation.index', $this->data);
    }
    

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }
    

    public function show(Donation $donation)
    {
        //
    }

    
    public function edit(Donation $donation)
    {
        //
    }

    
    public function update(Request $request)
    {
        $donation = Donation::first();
        $donation->update([
                        'detail_en' => $request->detail_en,
                        'detail_kh' => (($request->detail_kh)? $request->detail_kh : $request->detail_en),
                        'detail_my' => (($request->detail_my)? $request->detail_my : $request->detail_en),
                        'detail_sa' => (($request->detail_sa)? $request->detail_sa : $request->detail_en),
                        'seo_description' => $request->seo_description,
                        'seo_keywords' => $request->seo_keywords,
                    ]);
        // Redirect
        return redirect()->route('admin.donation.index')
            ->with('success', __('alert.crud.success.delete', ['name' => Auth::user()->module()]));
    }

    
    public function destroy(Donation $donation)
    {
        //
    }
}
