<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class varifcationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


   public function Admin($name , $password , Request $request)
   {
     if (Auth::guard('admin')->attempt(['username' => $name , 'password' =>$password])) {

        $request->session()->regenerateToken();

        return redirect('/AddAdmin');
    }





   }

   public function doctor($name , $password ,Request $request)
   {

    if (Auth::guard('doctor')->attempt(['email' => $name , 'password' =>$password])) {
        print 'test';
        $request->session()->regenerateToken();
        return redirect('/AddAdmin');
    }


   }

   public function patiant($name , $password ,Request $request)
   {
    if (Auth::guard('patiant')->attempt(['logincode' => $name , 'password' =>$password])) {
        $request->session()->regenerateToken();

        return redirect('/AddAdmin');
     }


   }



}
