<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_das') }}
            {{ Form::text('id_das', $dashboard->id_das, ['class' => 'form-control' . ($errors->has('id_das') ? ' is-invalid' : ''), 'placeholder' => 'Id Das']) }}
            {!! $errors->first('id_das', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>