<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="wrap-input80 validate-input">
            
            {{ Form::label('') }}
            {{ Form::text('Imagen', $service->Imagen, ['class' => 'input100 my-4' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
            <span class="focus-input100"></span>
            </div>
            
        </div>
        <div class="form-group">
            <div class="wrap-input80 validate-input">
            {{ Form::label('') }}
            {{ Form::text('Nombre', $service->Nombre, ['class' => 'input100 my-4' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
            <span class="focus-input100"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="wrap-input80 validate-input">
            {{ Form::label('') }}
            {{ Form::text('Descripccion', $service->Descripccion, ['class' => 'input100 my-4' . ($errors->has('Descripccion') ? ' is-invalid' : ''), 'placeholder' => 'Descripccion']) }}
            {!! $errors->first('Descripccion', '<div class="invalid-feedback">:message</div>') !!}
            <span class="focus-input100"></span>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-sm-6 mb-2">
            <button type="submit" class="login100-form-btn">
                Registrar
              </button>
        </div>
        <div class="col-12 col-sm-6 mb-2">
            <a class="login100-form-btn-danger" href="{{ route('services.index') }}">Cancelar</a>
        </div>
    </div>
</div>