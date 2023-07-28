<div class="form-group">
    {{ Form::label('Nombre de la especialidad') }}
    {{ Form::text('name', $data->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
</div>

<div class="form-group">
    {{ Form::label('Descripción') }}
    {{ Form::text('description', $data->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
</div>

<button type="submit" class="btn btn-sm btn-primary">Guardar especialidad</button>
