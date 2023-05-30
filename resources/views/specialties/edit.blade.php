@extends('layouts.panel')

@section('content')

          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Editar especialidad</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('/especialidades')}}" class="btn btn-sm btn-success">
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

                <form action="{{ route('especialidades.edit', $data->id) }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}

                    @include('specialties.form')
                    
                </form>
            </div>

          </div>
   

@endsection