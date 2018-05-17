@extends('admin.layouts.master')
@section('title')
Dhashboard | Medicon Pharmaceuticals Ltd.
@endsection
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Admin Panel</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <p>Welcome To <b><u> medicon pharmaceuticals ltd.</u></b> Admin Panel, <b>{{Auth::user()->name}}</b> !!! U R now logged in !!!!</p>
                            <a href="about-us/1/edit">Edit info</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection