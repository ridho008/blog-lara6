<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // jika field password di isi
        if ($request->password) {
            $passwordField = 'required|confirmed';
        } else {
            $passwordField = 'confirmed';
        }

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => $passwordField,
            'role' => 'required',
        ]);

        // jika password tidak di isi di field
        if ($request->hasAny('password')) {
            $passwordDB = '1234';
        } else {
            $passwordDB = $request->password;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($passwordDB),
            'role' => $request->role,
        ]);

        session()->flash('success', 'User was created successful!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // jika field password di isi
        if ($request->password) {
            $passwordField = 'required|confirmed';
        } else {
            $passwordField = 'confirmed';
        }

        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => $passwordField,
            'role' => 'required',
        ]);

        // jika password ada di isi di field
        if ($request->input('password')) {
            $data = [
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ];
        } else {
            $data = [
                'name' => $request->name,
                'role' => $request->role,
            ];
        }

        $user = User::find($id);
        $user->update($data);

        session()->flash('success', 'User was updated successful!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        session()->flash('success', 'User '. $user->name .' was deleted!');
        return redirect()->route('user.index');
    }
}
