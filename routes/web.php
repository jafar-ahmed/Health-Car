<?php

use App\Http\Controllers\adminContrplller;
use App\Http\Controllers\adminrequestController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\doctorControlller;
use App\Http\Controllers\loginController;
use App\Http\Controllers\patiant;
use App\Http\Controllers\patiantController;
use App\Models\adminRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // test start in the project


  Route::get('/', function () {
    return view('welcome');
   })->name('welcome');

   Route::get('/medicalcare',function(){
    return view('Medilab.registreationHome');
   })->name('registerationHome');

    Route::get('/login' , function () {
      return view('login-form-07.index');
    })->name('login');


    Route::get('/signup',function(){
      return view('colorlib-regform-14.index');
    } )->name('signup');


    Route::get('/Gallary',function(){
        return view('patiant.Gallary.index');
    })->name('Gallary');

    Route::get('/profile', function () {
     return view('patiant.profile.index-green');
    })->name('profile');

    Route::get('/patianthome', function () {
           return view('Medilab.index');
    })->name('medicalcare');


    Route::get('/diseases' , function () {
    return view('patiant.details.desiiese');
    })->name('diseases');


   Route::get('/editInfo', function(){
    return view('patiant.details.editinfo');
   })->name('editinfo');

   Route::get('/previousOperations' , function () {
    return view('patiant.details.previousOperations');
   })->name('previousOperations');

    Route::get('/AddDiseases',function(){
        return view('patiant.details.AddDesiiese');
    })->name('AddDiseases');

    Route::get('/Addoperation',function(){
        return view('patiant.details.AddOperation');
    })->name('Addoperation');


    Route::get('/uplodeGalllary' , function(){
        return view('patiant.details.uplodeGallary');
    })->name('uplodeGallary');

    Route::post('/registerPatiant' , [patiantController::class,'store'])->name('registerPatiant');

    Route::get('/acsspetAppoinment/{id}' , [doctorrequestconntroller::class , 'destroy'])->name('acsspetAppoinment');

    Route::get('/rejectPatiant/{id}' , [doctorrequestconntroller::class , 'destroy'])->name('rejectPatiant');

    //  doctor

   Route::get('/doctorProfile', function () {
    return view('doctor.profile.doctorProfile');
   })->name('doctorProfile');

   Route::get('/Doctorrequest' , function(){
    return view('doctor.requiestTable');
   })->name('DoctorRequest');

   Route::get('DrEditInfo',function(){
    return view('doctor.profile.editinfo');
   })->name('doctorEditInfo');

  Route::get('/addClinic',function(){
    return view('doctor.profile.addClinic');
  })->name('addClinic');

  Route::get('/Clinic',function(){
    return view('doctor.profile.clinicsTable');
  })->name('Clinic');


  Route::get('/signupinfo' , function(){
    return view('signup');
  })->name('filesignup');

  Route::get('/accesptRequest/{id}' , [doctorControlller::class , 'store'])->name('accesptRequest');

  Route::get('/rejectRequest/{id}' , [adminrequestController::class , 'destroy'])->name('ReqjectRequest');

  Route::post('/createRequest' , [adminrequestController::class , 'store'])->name('requeststore');
// Admin

  Route::get('/AddAdmin' , function(){
    return view('admin.addAdmin');
  })->name('AddAdmin');

  Route::get('/AdminProfile' , function(){
    return view('admin.profile.index');
  })->name('AdminProfile');


  Route::get('/AdminTable' ,[adminContrplller::class , 'index'])->name('AdminTable');

  Route::get('/admindoctorRequest' ,[adminrequestController::class , 'showall'])->name('admindoctorrequest');

  Route::get('/doctorTable' , function(){
    return view('admin.doctortable');
  })->name('doctortable');

  Route::get('/adminEdit' , function(){
    return view('admin.editinfo');
  })->name('AdminEdit');

  Route::get('/AdminHome' , function(){
    return view('admin.Home');
  })->name('AdminHome');


Route::post('/storeAdmin' , [adminContrplller::class , 'store'])->name('storeadmin');
Route::post('/storeAdmin' , [adminContrplller::class , 'store'])->name('storeadmin');

Route::get('/DeleteAdmin/{id}' , [adminContrplller::class  , 'destroy'])->name('adminDelete');

Route::get('/editAdmin/{id}' , [adminContrplller::class , 'edit'])->name('showAdminEdit');

Route::post('/Adminupdate/{id}' , [adminContrplller::class , 'update'])->name('AdminUpdate');


Route::get('departmentTable' , [DepartmentController::class , 'index'])->name('departmenttTable');

Route::post('/storeDepartment' , [DepartmentController::class, 'store'])->name('storeDepartment');

Route::get('/editDepartment/{id}' , [DepartmentController::class , 'edit'])->name('showDepartmentEdit');

Route::post('/Departmentupdate/{id}' , [DepartmentController::class , 'update'])->name('DepartmentUpdate');

Route::get('/DeleteDepartment/{id}' , [DepartmentController::class  , 'destroy'])->name('DepartmentDelete');

Route::get('/addDepartment' , [DepartmentController::class , 'create'])->name('addDeepartment');

  /*
  Route::get('/' , function(){
    return view('signup');
  })->name('filesignup');
*/



//login

Route::any('/submit_login' ,[loginController::class , 'check_type'])->name('submit_login');
Route::get('/logout' , [loginController::class , 'logout'])->name('logout');



