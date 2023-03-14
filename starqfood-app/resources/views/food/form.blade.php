<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('food_id') }}
            {{ Form::text('food_id', $food->food_id, ['class' => 'form-control' . ($errors->has('food_id') ? ' is-invalid' : ''), 'placeholder' => 'Food Id']) }}
            {!! $errors->first('food_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('category_id_fk') }}
            {{ Form::select('category_id_fk',$category, $food->category_id_fk, ['class' => 'form-control' . ($errors->has('category_id_fk') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('category_id_fk', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('food_name') }}
            {{ Form::text('food_name', $food->food_name, ['class' => 'form-control' . ($errors->has('food_name') ? ' is-invalid' : ''), 'placeholder' => 'Food Name']) }}
            {!! $errors->first('food_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cost') }}
            {{ Form::text('cost', $food->cost, ['class' => 'form-control' . ($errors->has('cost') ? ' is-invalid' : ''), 'placeholder' => 'Cost']) }}
            {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            {{ Form::text('time', $food->time, ['class' => 'form-control' . ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('visibility') }}
            {{ Form::text('visibility', $food->visibility, ['class' => 'form-control' . ($errors->has('visibility') ? ' is-invalid' : ''), 'placeholder' => 'Visibility']) }}
            {!! $errors->first('visibility', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ruc_fk') }}
            {{ Form::select('ruc_fk',$restaurant, $food->ruc_fk, ['class' => 'form-control' . ($errors->has('ruc_fk') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ruc_fk', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>