<?php
# @Date:   2020-11-26T12:56:24+00:00
# @Last modified time: 2021-01-04T12:41:37+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visits;
use App\Models\Doctor;

class VisitController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */
    public function index()
    {
      $visits = Visits::all();

      return view('admin.visits.index', [
        'visits' => $visits
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();

        return view('admin.visits.create', [
          'doctors' => $doctors
        ]);
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
        'patientName' => 'required|max:191',
        'doctor_id' => 'required',
        'dateTime' => 'required|max:191'
      ]);

      $visit = new Visits();
      $visit->patientName = $request->input('patientName');
      $visit->doctor_id = $request->input('doctor_id');
      $visit->dateTime = $request->input('dateTime');
      $visit->save();

      return redirect()->route('admin.visits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $visit = Visits::findOrFail($id);

      return view('admin.visits.show', [
        'visit'=> $visit
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
      $visit = Visits::findOrFail($id);
      $doctors = Doctor::all();

      return view('admin.visits.edit', [
        'visit'=> $visit,
        'doctors'=> $doctors
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
      $visit = Visits::findOrFail($id);

      $request->validate([
        'patientName' => 'required|max:191',
        'doctor_id' => 'required',
        'dateTime' => 'required|max:191'
      ]);

      $visit->patientName = $request->input('patientName');
      $visit->doctor_id = $request->input('doctor_id');
      $visit->dateTime = $request->input('dateTime');
      $visit->save();

      return redirect()->route('admin.visits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $visit = Visits::findOrFail($id);
      $visit->delete();

      return redirect()->route('admin.visits.index');
    }
}
