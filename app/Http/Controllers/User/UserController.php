<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function follow(User $user)
    {
        auth()->user()->following()->attach($user->id);
        return response()->json(['message' => 'Now following ' . $user->name]);
    }

    public function unfollow(User $user)
    {
        auth()->user()->following()->detach($user->id);
        return response()->json(['message' => 'Unfollowed ' . $user->name]);
    }
}
