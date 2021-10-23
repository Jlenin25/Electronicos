<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_log') }}
            {{ Form::text('id_log', $logistica->id_log, ['class' => 'form-control' . ($errors->has('id_log') ? ' is-invalid' : ''), 'placeholder' => 'Id Log']) }}
            {!! $errors->first('id_log', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_emp') }}
            {{ Form::text('id_emp', $logistica->id_emp, ['class' => 'form-control' . ($errors->has('id_emp') ? ' is-invalid' : ''), 'placeholder' => 'Id Emp']) }}
            {!! $errors->first('id_emp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::text('id_estado', $logistica->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>