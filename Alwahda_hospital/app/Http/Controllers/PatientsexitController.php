<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use App\Models\Section;


use Illuminate\Http\Request;

class PatientsexitController extends Controller
{
   
    public function index()
    {
        $patients=Patient::select('*')->where('state','Like', 'خروج')->get();
         return view('showpatexit',compact('patients'));
       
    }

    
    public function create()
    {
        

    }
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }


    
    public function printexit( $id)
    {
        $patients =  Patient::where('id',$id)->first();
        
        return view('printexit',compact('patients'));

    }

    
    public function edit(string $id)
    {
         
    }

    
    public function update(Request $request)
    {
          
        $patients = Patient::findOrFail($request->id);
        $patients->update([

            'name' => $request->name,
            'exitdate'=>$request->exitdate,
            'state'=>$request->state,
        ]);
     
   
     
      
        session()->flash('edit','تم تعديل البيانات بنجاج');
        return back();
 
    }

    
    public function destroy(string $id)
    {
        //
    }
}
