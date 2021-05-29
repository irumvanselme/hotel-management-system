<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function all(): JsonResponse
    {
        return response()->json(User::all());
    }
}
