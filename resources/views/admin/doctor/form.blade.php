<div class="form-body">
    <div class="form-group">
        {!! Form::label('name','Name',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('name',isset($doctor->name) ? $doctor->name : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('degree','Degree',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('degree',isset($doctor->degree) ? $doctor->degree : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('speciality','Speciality',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('speciality',isset($doctor->speciality) ? $doctor->speciality : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('hospital','Hospital Name',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('hospital',isset($doctor->hospital) ? $doctor->hospital : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('city','City',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('city',isset($doctor->city) ? $doctor->city : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('helpline','Helpline',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('helpline',isset($doctor->helpline) ? $doctor->helpline : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('area','Area',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('area',isset($doctor->area) ? $doctor->area : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Submit ', ['class'=> 'btn green']) !!}
        </div>
    </div>
</div>