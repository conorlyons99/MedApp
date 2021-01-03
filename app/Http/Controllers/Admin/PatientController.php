<?php
# @Date:   2021-01-03T17:09:23+00:00
# @Last modified time: 2021-01-03T18:36:15+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
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

    public function index()
    {
      $patient = Patient::all();

      return view('admin.patients.index', [
        'patient' => $patient
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
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
        'email' => 'required|max:191',
        'phone' => 'required|max:191'
      ]);

      $patient = new Patient();
      $patient->firstName = $request->input('firstName');
      $patient->lastName = $request->input('lastName');
      $patient->email = $request->input('email');
      $patient->phone = $request->input('phone');
      $patient->save();

      return redirect()->route('admin.patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $patient = Patient::findOrFail($id);

      return view('admin.patients.show', [
        'patient'=> $patient
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
      $patient = Patient::findOrFail($id);

      return view('admin.patients.edit', [
        'patient'=> $patient
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
      $patient = Patient::findOrFail($id);

      $request->validate([
        'firstName' => 'required|max:191',
        'lastName' => 'required|max:191',
        'email' => 'required|max:191',
        'phone' => 'required|max:191'
      ]);

      $patient->firstName = $request->input('firstName');
      $patient->lastName = $request->input('lastName');
      $patient->email = $request->input('email');
      $patient->phone = $request->input('phone');
      $patient->save();

      return redirect()->route('admin.patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $patient = Patient::findOrFail($id);
      $patient->delete();

      return redirect()->route('admin.patients.index');
    }
}
