<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Cast\Array_;

class UserController extends Controller
{
    public function index () {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function store (Request $request) {
        $data = $request->all();
        if ($request->input('password')) {
            $data['password'] = bcrypt($data['password']);
        }

        User::create($data);
        return redirect('/user');
    }

    public function show ($id) {
        $user = User::find($id);
        return view('user.detail', compact('user'));
    }

    public function edit ($id) {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update (Request $request, $id) {
        $user = User::find($id);
        $data = $request->all();

        if ($request->input('password')) {
            $data['password'] = bcrypt($data['password']);
        } else {
            $data = Arr::except($data, 'password');
        }

        $user->update($data);
        return redirect('/user');
    }

    public function destroy ($id) {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
