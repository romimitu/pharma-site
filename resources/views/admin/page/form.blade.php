<div class="form-body">
    <div class="form-group">
        {!! Form::label('title','Title',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('title',isset($page->title) ? $page->title : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('details', 'Details', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::textarea('details',isset($page->details) ? $page->details : null,['class'=> 'form-control details']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('summary', 'Summary', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::textarea('summary',isset($page->summary) ? $page->summary : null,['class'=> 'form-control details',]) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Top Image</label>
        <div class="col-md-4">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                @if(isset($page->image1))
                    <img src="/{{$page->image1}}" alt="" />
                @else
                    <img src="http://www.placehold.it/200x150/" alt="" />
                @endif
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                <div>
                    <span class="btn default btn-file">
                        <span class="fileinput-new"> Select image1 </span>
                        <span class="fileinput-exists"> Change </span>
                        {!! Form::file('image1') !!}  </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
        </div>
        <label class="control-label col-md-2">Middle Image</label>
        <div class="col-md-4">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                @if(isset($page->image2))
                    <img src="/{{$page->image2}}" alt="" />
                @else
                    <img src="http://www.placehold.it/200x150/" alt="" />
                @endif
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                <div>
                    <span class="btn default btn-file">
                        <span class="fileinput-new"> Select image2 </span>
                        <span class="fileinput-exists"> Change </span>
                        {!! Form::file('image2') !!}  </span>
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