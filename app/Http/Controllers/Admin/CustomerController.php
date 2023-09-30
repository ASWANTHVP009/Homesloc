<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = User::latest()->paginate(20);
        return view('admin.customer.list', compact('customers'));
        return view('admin.customer.list');
    }
    public function create()
    {
        $customers = User::all();
        return view('admin.customer.create')->with('customers', $customers);
    }
    public function delete($id)
    {
        $customer = User::find(decrypt($id));
        $customer->delete();
        return redirect()->route('admin.customer.list')->with('message', 'User deleted successfully');
    }
    public function edit($id)
    {
        $customers = User::find(decrypt($id));
        return view('admin.customer.edit', compact('customers'))->with('customers', $customers);
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'last_name', 'mobile', 'email', 'password']);
        $input['password'] = bcrypt($input['password']);
        $customers = User::find(decrypt($request->customer_id));
        $customers->update($input);
        return redirect()->route('admin.customer.list')->with('message', 'User updated successfully');
    }

    public function save()
    {
        $input = request()->all();
        $customer = new User();
        $customer->name = $input['name'];
        $customer->last_name = $input['last_name'];
        $customer->password = bcrypt($input['password']);
        $customer->email = $input['email'];
        $customer->mobile = $input['mobile'];
        $customer->save();

        return redirect()->route('admin.customer.list')->with('message', 'User created successfully');
    }
}
