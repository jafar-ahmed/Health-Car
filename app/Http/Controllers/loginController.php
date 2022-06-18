<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use App\Models\doctor;
use App\Models\patiant;

class loginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('login');
    }


    public static function redirect()
    {
        return redirect()->route('login');
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

    public function check_type(Request $request)
    {

        $admin = new admin();
        $doctor = new doctor();
        $patiant = new patiant();

         $this->validate($request, [
        'name' => 'required' ,
        'pass' => 'required'
     ]);
      $name = $request->input('name');
      $pass = $request->input('pass');

      $doctor = strpos($name, '@gmail.com') ;
        $patiant = substr($name , 0, 3)==121 ;
        $admin = !($doctor || $patiant);
        // @gmail.com doctor
        // without @gmail.com its admin

        if ($doctor) {
                     if (Auth::guard('doctor')->attempt(['email' => $request->input('name') , 'password' =>$request->input('pass')]))
                      {
                        $doctor = doctor::where('email' , $request->input('name'))->first();
                        $request->session()->regenerateToken();
                        $request->session()->put('active' , 'true');
                        $request->session()->put('doctor' , 'true');
                        $request->session()->put('user' , $doctor);
                        return redirect()->route('DoctorRequest');
                     }


                } elseif ($patiant) {


                    if (Auth::guard('patiant')->attempt(['logincode' => $request->input('name') , 'password' =>$request->input('pass')])) {
                      $patiant = patiant::where('logincode' , $request->input('name'))->first();
                      $request->session()->regenerate();
                      $request->session()->put('active' , 'true');
                      $request->session()->put('patiant', 'true');
                     $request->session()->put('user' , $patiant);
                      return redirect()->route('patianthome');

                    }

        } elseif ($admin) {

           if (Auth::guard('admin')->attempt(['username' => $request->input('name') , 'password' =>$request->input('pass')])) {
            $admin = admin::where('username' , $request->input('name'))->first();
            $request->session()->regenerateToken();
                $request->session()->put('active' , 'true');
                $request->session()->put('doctor', 'true');
                $request->session()->put('user' , $admin);
                return redirect()->route('AdminHome');
            }
        }



    }



   public function logout(Request $request)
   {

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    $request->session()->put('active' , 'false');
    $request->session()->put('patiant', 'false');
    $request->session()->put('doctor' , 'false');
    $request->session()->put('admin'  , 'false');
    $request->session()->put('user' , null);
    return redirect()->route('registerationHome');
   }







}
