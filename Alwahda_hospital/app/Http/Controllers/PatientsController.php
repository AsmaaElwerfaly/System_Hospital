<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Section;

class PatientsController extends Controller
{
   
    public function index()
    {
        $sections = Section::latest()->get();
        $patients = Patient::latest()->get();

       return view('patients',compact('sections','patients'));

    }

    
    public function create(request $request)
    {
      
    }

   
    public function store(Request $request)
    {

        
        Patient::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'age'=>$request->age,
            'address'=>$request->address,
            'family'=>$request->family,
            'job'=>$request->job,
            'sections_id'=>$request->sections_id,
            'phone'=>$request->phone,
            'idcard'=>$request->idcard,
            'dateofentry'=>$request->dateofentry,
            'exitdate'=>$request->exitdate,
            'maritalstatus'=>$request->maritalstatus,
            'note'=>$request->note,
            'Gender'=>$request->Gender,
            'state'=>'دخول',
            'user'=>Auth::user()->name,

        ]);
        session()->flash('Add', 'تم اضافة البيانات بنجاح ');
            return redirect('/patients');
    }


   
    public function show(Patient $patients)
    {
          $patients=Patient::select('*')->where('state','Like', 'دخول')->get();

          $sections = Section::all();

        return view('showpatients',compact('patients','sections'));
    }

    

    public function printlogin( $id)
    {       

        $sections = Section::all();
        $patients =  Patient::findorfail($id);
        return view('printlogin',compact('patients','sections'));

    }


   
    public function edit( $id)
    {
        $patients =  Patient::where('id',$id)->first();
        $sections = Section::all();
        return view('editlogin',compact('patients','sections'));


    }


    
   

    public function update(Request $request)
    { $patients = Patient::findOrFail($request->id);
        $sections = Section::all();

        $patients->update([

        'name' => $request->name,
        'age' =>$request->age,
        'address'=>$request->address,
        'family'=>$request->family,
        'job'=>$request->job,
        'sections_id'=>$request->sections_id,
        'phone'=>$request->phone,
        'idcard'=>$request->idcard,
        'dateofentry'=>$request->dateofentry,
        'maritalstatus'=>$request->maritalstatus,
        'note'=>$request->note,
        'Gender'=>$request->Gender,
        'exitdate'=>$request->exitdate,
        'state'=>$request->state,

    ]);
     


    session()->flash('edit', 'تم تعديل البيانات بنجاح');
    return back();
        
    }


      
      
    public function destroy(Patient $patients)
    {
        
    }
}
