<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Customer;

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
        $users = Customer::all();
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
        $customer->phone_number = $request->input('phone_number');
        $customer->address1 = $request->input('address1');
        $customer->address2 = $request->input('address2');
        $customer->city = $request->input('city');
        $customer->zipcode = $request->input('zipcode');
        $customer->quantity = $request->input('quantity');
        $customer->deposit = '$279.00';
        $customer->pay_method = $request->input('inlineRadioOptions');
        $customer->save();
        return view('success');
    }
}
