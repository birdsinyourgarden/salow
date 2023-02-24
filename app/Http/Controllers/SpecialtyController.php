<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* notes for fellow coders: 
*consider separating validation on an independent method in the future to avoid repetition of code. Not done as of now to avoid yet another bit of extra work in order meet the Hackaton's deadline.
*It is best to use the routes to pass the id instead of passing the id as a parameter of the method. Mine is a provisional solution to an issue on my computer and again, time is of the essence for achieving an mvp for the Caixa's hackaton. The issue should be tackled before an eventual second sprint.
*/



class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $specialties = Specialty::orderBy('name', 'asc')->paginate(8);
      return view('layouts.app', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $specialty = new Specialty();
      $request->validate([
        'name'=> 'required|unique:specialties|max:255',

      ]);

      $specialty->name = $request->name;

      $specialty->save();

      return $specialty;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function show(Specialty $specialty, $id)
    {
      $specialty = Specialty::find($id);
      return $specialty;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialty $specialty, $id)
    {
      $specialty = Specialty::find($id);
      $request->validate([
        'name' => 'required|unique:specialties,name,' . $specialty->id . '|max:255',
      ]);

  

      $specialty->name = $request->name;

      $specialty->save();

      return $specialty;

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialty $specialty, $id)
    {
      $specialty = Specialty::find($id);

      $specialty->delete();
      
    }

}
