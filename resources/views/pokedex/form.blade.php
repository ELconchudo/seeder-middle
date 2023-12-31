<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $pokedex->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('Tipo', __('Tipo')) }}
    {{ Form::select('Tipo', ['fuego' => __('Fuego'), 'agua' => __('Agua'), 'eléctrico' => __('Eléctrico')], $pokedex->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : '')]) }}
    {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('Tamaño', __('Tamaño')) }}
    {{ Form::select('Tamaño', ['grande' => __('Grande'), 'mediano' => __('Mediano'), 'pequeño' => __('Pequeño')], $pokedex->Tamaño, ['class' => 'form-control' . ($errors->has('Tamaño') ? ' is-invalid' : '')]) }}
    {!! $errors->first('Tamaño', '<div class="invalid-feedback">:message</div>') !!}
</div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('Peso', $pokedex->Peso, ['class' => 'form-control' . ($errors->has('Peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('Peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>