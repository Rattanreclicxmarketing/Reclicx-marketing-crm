<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),

        ]);

        $user->assignRole($request->role);

        return redirect()->route('users.index')
            ->with('success','User Created Successfully');
    }

public function edit($id)
{
    $user = User::find($id);

    return view('users.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::find($id);

    $user->name = $request->name;

    $user->email = $request->email;

    $user->save();

    $user->syncRoles([$request->role]);

    return redirect()->route('users.index')
        ->with('success','User Updated Successfully');
}

public function delete($id)
{
    $user = User::find($id);

    $user->delete();

    return redirect()->back()
        ->with('success','User Deleted Successfully');
}

}   