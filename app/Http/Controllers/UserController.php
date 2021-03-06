<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $client = DB::select('select * from client ');

        return view('user.dashboard', ['client' => $client]);
    }
}