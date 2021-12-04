<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function show($id)
    {
        try {

            $posts = User::findOrFail($id)->posts()->paginate(5);
            return view('Users/posts', ['posts' => $posts]);

        } catch (\Exception $e) {

            return redirect()->back()->with('Not found');
        }
    }
}
