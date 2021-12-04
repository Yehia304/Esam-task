<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::where('id','>',0);
            return Datatables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return '<a href="/users/'. $row->id .'" class="btn btn-primary">Posts</a>';

                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Users.users');
    }


}
