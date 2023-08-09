<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{

  public function index()
  {
    $specialties = Specialty::all();
    return view('specialties.index', compact('specialties'));
  }

  public function create()
  {
    $data = new Specialty();
    return view('specialties.create', compact('data'));
  }

  public function store(Request $request)
  {

    $rules = [
      'name' => 'required|min:3'
    ];

    $messages = [
      'name.required' => 'El nombre de la especialidad es obligatorio.',
      'name.min' => 'El nombre de la especialidad debe tener más de 3 caracteres.'
    ];

    $this->validate($request, $rules, $messages);

    $specialty = new Specialty();
    $specialty->name = $request->name;
    $specialty->description = $request->description;

    $specialty->save();

    $notification = 'La especialidad se ha creado correctamente.';

    return redirect()->route('especialidades.index')->with(compact('notification'));
  }

  public function edit($id)
  {
    $data = Specialty::findOrFail($id);
    return view('specialties.edit', compact('data'));
  }


  public function update(Request $request, Specialty $specialty)
  {

    $rules = [
      'name' => 'required|min:3'
    ];

    $messages = [
      'name.required' => 'El nombre de la especialidad es obligatorio.',
      'name.min' => 'El nombre de la especialidad debe tener más de 3 caracteres.'
    ];

    $this->validate($request, $rules, $messages);

    $specialty->name = $request->input('name');
    $specialty->description = $request->input('description');
    $specialty->update($request->all());

    $notification = 'La especialidad se ha actualizado correctamente.';

    return redirect()->route('especialidades.index')->with(compact('notification'));
  }


  public function destroy(Specialty $specialty)
  {
    $deleteName = $specialty->name;
    $specialty->delete();

    $notification = 'La especialidad ' . $deleteName . ' se ha eliminado correctamente.';

    return redirect()->route('especialidades.index')->with(compact('notification'));
  }
}
