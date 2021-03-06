<?php


namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\User;

use Illuminate\Http\Request;

class PatientController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $patients=Patient::latest()->paginate(5);
        return view('patients.index',compact('patients'))
          ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients/create');
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
            'name'=>'required',
            'prenom'=>'required',
            'VilleResidence'=>'required',
            'telephone'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'dateNais'=>'required'
        ]);
       

       Patient::create([
        'name'=>$request->name,
        'prenom'=>$request->prenom,
        'VilleResidence'=>$request->VilleResidence,
        'telephone'=>$request->telephone,
        'email'=>$request->email,
        'dateNais'=>$request->dateNais,   
        'password' => bcrypt($request->password)] );
     
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        

        return back()
        ->with('success','votre compte Patient est crée avec succes Veillez vous connecter pour contuer ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $student)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
      

        $request->validate([

        ]);
        $patient->update($request->all());
        return redirect()->route('patients.index')
        ->with('success','Compte Patient mise à jour successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('patient.index')
        ->with('success','patient deleted successfully');
    }
}
