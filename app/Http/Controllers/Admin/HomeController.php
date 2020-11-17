<?php
# @Date:   2020-11-16T23:52:08+00:00
# @Last modified time: 2020-11-17T02:31:19+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        return view('admin.home');
    }
}
