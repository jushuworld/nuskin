<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    /**
     * Index all user instance.
     *
     * @param Request $request
     * @return View
     */
    protected function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $users = Customer::where('sponsor', $user_id)->get();
        return view('dashboard')->with('users', $users);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param Request $request
     * @return View
     */
    protected function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|max:10|unique:customers'
        ]);

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->sponsor = $request->input('sponsor');
        $customer->phone_number = $request->input('phone_number');
        $customer->address1 = $request->input('address1');
        $customer->address2 = $request->input('address2');
        $customer->city = $request->input('city');
        $customer->zipcode = $request->input('zipcode');
        $customer->quantity = $request->input('quantity');
        $customer->deposit = '0.00';
        $customer->pay_method = $request->input('inlineRadioOptions');
        $customer->save();
        return view('success');
    }
}
