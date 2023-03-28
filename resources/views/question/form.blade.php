<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            <div class="wrap-input80 validate-input">
            {{ Form::label('') }}
            {{ Form::text('Pregunta', $question->Pregunta, ['class' => 'input100 my-4' . ($errors->has('Pregunta') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta']) }}
            {!! $errors->first('Pregunta', '<div class="invalid-feedback">:message</div>') !!}
            <span class="focus-input100"></span>
             </div>
    </div>
        <div class="form-group">
            {{ Form::label('') }}
            {{ Form::text('Respuesta', $question->Respuesta, ['class' => 'input100 my-4' . ($errors->has('Respuesta') ? ' is-invalid' : ''), 'placeholder' => 'Respuesta']) }}
            {!! $errors->first('Respuesta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-sm-6 mb-2">
            <button type="submit" class="login100-form-btn">
                Registrar
              </button>
        </div>
        <div class="col-12 col-sm-6 mb-2">
            <a class="login100-form-btn-danger" href="{{ route('questions.index') }}">Cancelar</a>
        </div>
    </div>
    
</div>