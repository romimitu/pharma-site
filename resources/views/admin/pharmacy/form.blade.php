<div class="form-body">
    <div class="form-group">
        {!! Form::label('name','Name',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('name',isset($pharmacy->name) ? $pharmacy->name : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('address','Address',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('address',isset($pharmacy->address) ? $pharmacy->address : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('helpline','Contact No',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('helpline',isset($pharmacy->helpline) ? $pharmacy->helpline : null, ['class'=> 'form-control']) !!}
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