<div class="form-body">
    <div class="form-group">
        {!! Form::label('name','Name',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('name',isset($member->name) ? $member->name : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('designation','Designation',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('designation',isset($member->designation) ? $member->designation : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('details', 'Details or Message', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::textarea('details',isset($member->details) ? $member->details : null,['class'=> 'form-control details']) !!}
        </div>
    </div>
    <div class="form-group last">
        <label class="control-label col-md-2">Image</label>
        <div class="col-md-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                @if(isset($member->image))
                    <img src="/{{$member->image}}" alt="" />
                @else
                    <img src="http://www.placehold.it/200x150/" alt="" /> 
                @endif
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                <div>
                    <span class="btn default btn-file">
                        <span class="fileinput-new"> Select image </span>
                        <span class="fileinput-exists"> Change </span>
                        {!! Form::file('image') !!}  </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
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