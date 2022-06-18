<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use Illuminate\Support\Facades\Hash;
use App\Models\adminRequest ;

class doctorControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = new doctor();
        $doctor = doctor::all();
        return view('admin.doctortable')->with('doctors' , $doctor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
$doctor = new Doctor();
$adminRequest = new adminRequest();
$adminRequest = adminRequest::find($id);

$doctor->name = $adminRequest->doctorName;
$doctor->email = $adminRequest->email;
$doctor->password = Hash::make('123');
$doctor->save();

$adminRequest->destroy($id);
return redirect()->route('admindoctorrequest');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = new Doctor();
        $doctor = doctor::find($id);
        return view('admin.editDoctor')->with('doctor' , $doctor);
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
        $doctor = new Doctor();
        $doctor = doctor::find($id);
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        doctor::destroy($id);
        return $this->index();
    }
}
