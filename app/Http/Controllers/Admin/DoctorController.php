<?php
# @Date:   2020-12-31T00:31:33+00:00
# @Last modified time: 2020-12-31T00:55:05+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{


    public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }
    public function index()
    {
      $doctor = Doctor::all();

      return view('admin.doctors.index', [
        'doctor' => $doctor
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'firstName' => 'required|max:191',
        'lastName' => 'required|max:191',
        'email' => 'required|max:191'
      ]);

      $doctor = new Doctor();
      $doctor->firstName = $request->input('firstName');
      $doctor->lastName = $request->input('lastName');
      $doctor->email = $request->input('email');
      $doctor->save();

      return redirect()->route('admin.doctors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $doctor = Doctor::findOrFail($id);

      return view('admin.doctors.show', [
        'doctor'=> $doctor
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $doctor = Doctor::findOrFail($id);

      return view('admin.doctors.edit', [
        'doctor'=> $doctor
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $doctor = Doctor::findOrFail($id);

      $request->validate([
        'firstName' => 'required|max:191',
        'lastName' => 'required|max:191',
        'email' => 'required|max:191'
      ]);

      $doctor->firstName = $request->input('firstName');
      $doctor->lastName = $request->input('lastName');
      $doctor->email = $request->input('email');
      $doctor->save();

      return redirect()->route('admin.doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $doctor = Doctor::findOrFail($id);
      $doctor->delete();

      return redirect()->route('admin.doctors.index');
    }
}
