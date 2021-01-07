<?php
# @Date:   2020-11-16T23:42:27+00:00
# @Last modified time: 2021-01-05T13:48:28+00:00




namespace App\Http\Controllers;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $home = 'home';

        if($user->hasRole('admin')){
          $home = 'admin.home';
        }
        else if($user->hasRole('doctor')){
          $home = 'doctor.home';
        }
        else if($user->hasRole('user')){
          $home = 'patient.home';
        }
        return redirect()->route($home);
    }
}
