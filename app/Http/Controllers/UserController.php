<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $items = $request->query("items", 10);
        $users = User::orderByDesc("created_at")->paginate($items);
        return view("users.index", compact("users"));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|confirmed|unique:users,email",
            "password" => "required|string|max:32|confirmed"
        ]);

        $validator['password'] = Hash::make($validator['password']);

        User::create($validator);

        return redirect()->route('users.index')->with('success', 'Usuario creado');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("users.edit", compact("user"));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.edit', $id)->with('success', 'Usuario actualizado correctamente');
    }


    public function create()
    {
        return view("users.create");
    }
}