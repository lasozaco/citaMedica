@extends('layouts.panel')

@section('content')

          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Nueva especialidad</h3>
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

                <form action="{{ route('especialidades.store')}}" method="POST">
                    @csrf
                    
                    @include('specialties.form')
                </form>
            </div>

          </div>
   

@endsection
