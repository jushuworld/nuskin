<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function store(Request $request)
    {
//        dd($request);
//        dd($request->input(''));
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->phone_number = $request->input('phone_number');
        $customer->address1 = $request->input('address1');
        $customer->address2 = $request->input('address2');
        $customer->city = $request->input('city');
        $customer->zipcode = $request->input('zipcode');
        $customer->quantity = $request->input('quantity');
        $customer->deposit = '$279.00';
        $customer->pay_method = $request->input('inlineRadioOptions');
        $customer->save();
//        return view('welcome');
        return view('success');
    }
}
