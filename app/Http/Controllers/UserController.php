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
        $items = $request->query("items",10);
        $users = User::paginate($items);    
        
        return view("index", compact("users")); 
    }
} 