@extends('admin.layouts.master')
@section('title')
About Us | Medicon Pharmaceuticals Ltd.
@endsection
@section('content')
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
                                <span class="caption-subject font-dark sbold uppercase">About Us</span>
                            </div>
                        </div>
                        <div class="portlet-body form">                             
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                            @foreach($abouts as $about)
                            <table class="table mb0 table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">Title</th>
                                        <th colspan="3">Content</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td>Logo</td>
                                        <td><img src="{{ $about->logo }}" alt="" width="150px"></td>
                                        <td>Slogan</td>
                                        <td>{{ $about->slogan }}</td>
                                    </tr>
                                    <tr>
                                        <td>About (Home Page)</td>
                                        <td colspan="3">{{ $about->home_about }}</td>
                                    </tr>
                                    <tr>
                                        <td>About (About Page)</td>
                                        <td colspan="3">{{ $about->about }}</td>
                                    </tr>
                                    <tr>
                                        <td>Our Mission</td>
                                        <td colspan="3">{!! $about->mission !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Vision</td>
                                        <td colspan="3">{!! $about->vision !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Objective</td>
                                        <td colspan="3">{{ $about->objective }}</td>
                                    </tr>
                                    <tr>
                                        <td>Growth</td>
                                        <td colspan="3">{{ $about->growth }}</td>
                                    </tr>
                                    <tr>
                                        <td>Images (About)</td>
                                        <td colspan="3">
                                            <img src="{{ $about->about_image }}" alt="" width="150px">
                                            <img src="{{ $about->mission_image }}" alt="" width="150px">
                                            <img src="{{ $about->growth_image }}" alt="" width="150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $about->address }}</td>
                                        <td>Contact No. </td>
                                        <td>{{ $about->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $about->email }}</td>
                                        <td>Fax</td>
                                        <td>{{ $about->fax }}</td>
                                    </tr>
                                    <tr>
                                        <td>Facebook UserName</td>
                                        <td>{{ $about->facebook }}</td>
                                        <td>Twitter UserName</td>
                                        <td>{{ $about->twitter }}</td>
                                    </tr>
                                    <tr> 
                                        <td>Linkedin UserName</td>
                                        <td>{{ $about->linkedin }}</td>
                                        <td>Google Map Iframe</td>
                                        <td>{{ $about->map }}</td>
                                    </tr>
                                </tbody>
                            </table>  

                            <a href="{{ url('/about-us/'.$about->id.'/edit') }}"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Edit About</label></a>

                            @endforeach                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection