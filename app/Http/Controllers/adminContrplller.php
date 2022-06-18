<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class adminContrplller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = new admin();
        $admins = admin::all();
       return view('admin.AdminTable')->with('admins' , $admins);
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
    public function store(Request $request)
    {
        $admin = new admin();
        $admin->username = $request->input('name');
        $admin->emial = $request->input('email');
        $admin->password =Hash::make($request->input('pass'));
        $admin->save();

      return $this->index();


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
        $admin = new admin();
        $admin = admin::find($id);

        return view('admin.editAdmin')->with('admin' , $admin);
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

        $admin = new admin();
        $admin = admin::find($id);
        $admin->username = $request->input('name');
        $admin->emial = $request->input('email');
        $admin->save();

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
        admin::destroy($id);

        return $this->index();
    }
}
