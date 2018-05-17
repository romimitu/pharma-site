<div class="form-body">
    <div class="form-group">
        {!! Form::label('branch','Branch',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('branch',isset($depot->branch) ? $depot->branch : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('address','Address',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('address',isset($depot->address) ? $depot->address : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('phone','Phone',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('phone',isset($depot->phone) ? $depot->phone : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('email','Email',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('email',isset($depot->email) ? $depot->email : null, ['class'=> 'form-control']) !!}
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