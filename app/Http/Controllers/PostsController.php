<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PostsController extends Controller
{

    public function show(Request $request,$id)
    {

        if ($request->ajax()) {
            $posts = User::findOrFail($id)->posts;
            return Datatables::of($posts)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Users.posts',);

    }
}
