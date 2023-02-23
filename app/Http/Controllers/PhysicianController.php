<?php

namespace App\Http\Controllers;

use App\Models\Physician;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhysicianController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Physician::all();
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

      $physician->save();

      return $physician;
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function show(Physician $physician, $id)
    {
      $physician = Physician::find($id);
      return $physician;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Physician $physician, $id)
    {
      $physician = Physician::find($id);
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

      $physician->save();

      return $physician;

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physician $physician, $id)
    {
      $physician = Physician::find($id);

      $physician->delete();
      
    }
}
