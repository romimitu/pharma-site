<div class="form-body">
    <div class="form-group">
        {!! Form::label('trade_name','Trade Name',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('trade_name',isset($product->trade_name) ? $product->trade_name : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('generic_name','Generic Name',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('generic_name',isset($product->generic_name) ? $product->generic_name : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('therapeutic_class','Therapeutic Class',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('therapeutic_class',isset($product->therapeutic_class) ? $product->therapeutic_class : null, ['class'=> 'form-control']) !!}
        </div>
        {!! Form::label('prescribing_file','Prescribing File',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-4">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 100%;">
                @if(isset($product->prescribing_file))
                    {{$product->prescribing_file}}
                @endif
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%;"> </div>
                <div>
                    <span class="btn default btn-file">
                        <span class="fileinput-new"> Select Prescribing File </span>
                        <span class="fileinput-exists"> Change </span>
                        {!! Form::file('prescribing_file') !!}  </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('indication','Indication',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">            
            {!! Form::textarea('indication',isset($product->indication) ? $product->indication : null,['class'=> 'form-control details']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('dosage_administration','Dosage Administration',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">            
            {!! Form::textarea('dosage_administration',isset($product->dosage_administration) ? $product->dosage_administration : null,['class'=> 'form-control details']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('preparation','Preparation',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">            
            {!! Form::textarea('preparation',isset($product->preparation) ? $product->preparation : null,['class'=> 'form-control details']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('image','Product Image',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            <input type="file" name="photos[]" id="photos0" multiple><br>
            <a class="btn btn-sm btn-danger btn-circle" id="addmore"><i class="fa fa-plus"></i></a>
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


<script type="text/javascript">
    $('body').on('click','#addmore', function() {
        var inputs = 1;
        while($('#photos'+inputs).length) { inputs++; }

        $("<input type='file' multiple/>")
            .attr("id", "photos"+inputs)
            .attr("name", "photos[]")
            .insertAfter("#photos"+(inputs-1));
        $("<br/>").insertBefore("#photos"+inputs);
    });
</script>