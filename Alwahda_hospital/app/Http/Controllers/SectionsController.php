<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SectionsRequest;


use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectionsController extends Controller
{
   
    public function index()
    {
        
        $sections = Section::latest()->get();
        return view('sections',compact('sections'));
    }

   
    public function create()
    {
        //
    }

   
    public function store(SectionsRequest $request)
    {
        

        Section::create([
            'name' => $request->name,
            'description'=>$request->description,
            'created_by' =>Auth::user()->name,
          
        ]);
        session()->flash('Add', 'تم اضافة البيانات بنجاح ');
        return redirect('/sections');
    }

    
    public function show(Section $sections)
    {
        //
    }

    
    public function edit(Section $sections)
    {
        //
    }

    
    public function update(Request $request, Section $sections)
    {
        
        $input=Section::findOrFail($request->id);
        $input->name=$request->name;
        $input->description=$request->description;
        $input->save();
   
     
      
        session()->flash('edit','تم تعديل البيانات بنجاج');
        return redirect('/sections'); 
 
    }

   
    public function destroy(Request $request, Section $sections)
    {
        Section::findOrFail($request->id)->delete();
      
        $sections->delete();
         session()->flash('delete','تم حذف البيانات بنجاج');
         return redirect('/sections'); 
    }
}
