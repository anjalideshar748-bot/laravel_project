<?php

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//HTTP Methods:
// Get-> read
//post ->create
// put/patch->update,
// delete->delete
Route::get("/about",function() {
    $companies=Company::all();
    return $companies;
return view("about",compact('companies'));
});
Route::post("/save-company",function(Request $request){
    //return $request;
    $company=new Company();
    $company->name=$request->name;
    $company->phone=$request->phone;
    $company->email=$request->email;
    $company->address=$request->address;
    $logo=$request->logo;
    if($logo){
    $fileName=time(). ".". $logo->getClientOriginalExtension();
        $logo->move("images",$fileName);
        $company->logo="images/".$fileName;
    }
    $company->save();
    return redirect("/");
});
