<?php
use Illuminate\Support\Str;
?>

@extends('layouts.panel')

@section('content')

          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Editar paciente</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('/pacientes')}}" class="btn btn-sm btn-success">
                  <i class= "fas fa-chevron-left"></i>  
                  Regresar</a>
                </div>
              </div>
            </div>
         
            <div class="card-body">

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-exclamation-triangle"></i>
                            <strong>Por favor!!</strong> {{ $error}}
                        </div>
                    @endforeach
                @endif

                <form action="{{ route('pacientes.update', $patient->id)}}" method="POST">
                    @csrf
                    {{ method_field('PATCH') }}
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="name">Nombre del paciente</label>
                        <input type="text" name="name" class="for-control"
                         value="{{ old('name', $patient->name)}}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo eléctronico</label>
                        <input type="text" name="email" class="for-control" value="{{old ('email', $patient->email)}}">
                    </div>

                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" class="for-control" 
                        value="{{old ('cedula', $patient->cedula)}}">
                    </div>

                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" name="address" class="for-control" 
                        value="{{old ('address', $patient->address)}}">
                    </div>

                    <div class="form-group">
                        <label for="phone">teléfono /Móvil</label>
                        <input type="text" name="phone" class="for-control" value="{{old ('phone', $patient->phone)}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" class="for-control" >
                        <small class="text-warning">Solo llena el campo si desea cambiar la contraseña</small>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Guardar cambios</button>
                </form>
            </div>

          </div>
   

@endsection
