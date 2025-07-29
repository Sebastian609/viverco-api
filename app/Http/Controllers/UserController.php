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


    public function create()
    {
        return view("users.create");
    }
}