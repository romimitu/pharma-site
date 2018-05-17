@extends('admin.layouts.master')
@section('title')
Edit About Us | Medicon Pharmaceuticals Ltd.
@endsection
@section('content')
<style>
    .about-img img{height:150px;}
</style>
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Edit About</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                             @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {!! Form::open(['url' => ['/about-us', $about->id], 'method' =>'PATCH', 'class'=>'form-horizontal','enctype'=>"multipart/form-data"]) !!}
                            <div class="form-body">
                                <div class="form-group">
                                    {!! Form::label('slogan','Slogan',['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::text('slogan',isset($about->slogan) ? $about->slogan : null, ['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('address', 'Address', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('address',isset($about->address) ? $about->address : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('mobile', 'Mobile No', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('mobile',isset($about->mobile) ? $about->mobile : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('email',isset($about->email) ? $about->email : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('fax', 'Fax No', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('fax',isset($about->fax) ? $about->fax : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('facebook', 'Facebook UserName', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('facebook',isset($about->facebook) ? $about->facebook : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('twitter', 'Twitter UserName', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('twitter',isset($about->twitter) ? $about->twitter : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('linkedin', 'Linkedin UserName', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('linkedin',isset($about->linkedin) ? $about->linkedin : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('map', 'Google Map', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('map',isset($about->map) ? $about->map : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('about', 'About Details', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('about',isset($about->about) ? $about->about : null,['class'=> 'form-control details','size' => '50x5']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('home_about', 'About (Home page)', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('home_about',isset($about->home_about) ? $about->home_about : null,['class'=> 'form-control details','size' => '50x5']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('objective', 'Objective', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('objective',isset($about->objective) ? $about->objective : null,['class'=> 'form-control details','size' => '50x5']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('growth', 'Growth', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('growth',isset($about->growth) ? $about->growth : null,['class'=> 'form-control details','size' => '50x5']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('mission', 'Mission/Vision', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('mission',isset($about->mission) ? $about->mission : null,['class'=> 'form-control details','size' => '50x5']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('vision', 'Vision', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('vision',isset($about->vision) ? $about->vision : null,['class'=> 'form-control details','size' => '50x5']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('logo', 'Logo', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4 about-img">
                                        @if(isset($about->logo))
                                            <img src="/{{$about->logo}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/140x120/" alt="" />
                                        @endif
                                        {!! Form::file('logo') !!} 
                                    </div>
                                    {!! Form::label('about_img', 'About Page Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4 about-img">
                                        @if(isset($about->about_img))
                                            <img src="/{{$about->about_img}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/140x120/" alt="" />
                                        @endif
                                        {!! Form::file('about_img') !!} 
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    {!! Form::label('mission_image', 'Mission Page Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4 about-img">
                                        @if(isset($about->mission_image))
                                            <img src="/{{$about->mission_image}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/140x120/" alt="" />
                                        @endif
                                        {!! Form::file('mission_image') !!} 
                                    </div>
                                    {!! Form::label('growth_image', 'Growth Page Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4 about-img">
                                        @if(isset($about->growth_image))
                                            <img src="/{{$about->growth_image}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/140x120/" alt="" />
                                        @endif
                                        {!! Form::file('growth_image') !!} 
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
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection