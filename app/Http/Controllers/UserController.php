<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {

            $users = User::paginate(15);
            return view('Users/users', ['users' => $users]);

        } catch (\Exception $e) {

            abort(500);
        }

    }
}
