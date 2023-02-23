<?php

namespace App\Http\Controllers;

use App\Models\Physician;
use App\Models\Specialty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhysicianController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @param int $specialtyId
     * @return \Illuminate\Http\Response
     */
    public function index($specialtyId)
    {
        $specialty = Specialty::findOrFail($specialtyId);
        $physicians = $specialty->physicians;
        return $physicians;
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
        'name'=> 'required|max:255',
        'last_name'=> 'required',
        'email'=> 'required|unique:physicians|max:255',
        'phone_number'=> 'required',
        'picture',
        'description',
        'specialty_id'=> 'required|exists:specialties,id',

      ]);
      $physician = new Physician();
      $physician->name = $request->name;
      $physician->last_name = $request->last_name;
      $physician->email = $request->email;
      $physician->phone_number = $request->phone_number;
      $physician->picture = $request->picture;
      $physician->description = $request->description;
      $physician->specialty_id = $request->specialty_id;

      $physician->save();

      return $physician;
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Physician $physician, $id)
    {
      $physician = Physician::findOrFail($id);
      return $physician;
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
      $physician = Physician::findOrFail($id);

      $request->validate([
        'name'=> 'required|max:255',
        'last_name'=> 'required',
        'email'=> 'required|unique:physicians,email,$physician->id|max:255',
        'phone_number'=> 'required',
        'picture',
        'description',
        'specialty_id'=> 'required|exists:specialties,id',
      ]);

      $physician->name = $request->name;
      $physician->last_name = $request->last_name;
      $physician->email = $request->email;
      $physician->phone_number = $request->phone_number;
      $physician->picture = $request->picture;
      $physician->description = $request->description;
      $physician->specialty_id = $request->specialty_id;

      $physician->save();

      return $physician;

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $physician = Physician::findOrFail($id);

      $physician->delete();
      
    }
}
