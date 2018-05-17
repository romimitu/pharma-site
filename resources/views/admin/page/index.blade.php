@extends('admin.layouts.master')
@section('title')
Page | Medicon Pharmaceuticals Ltd.
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
                                <span class="caption-subject font-dark sbold uppercase">All Pages</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided">
                                    <a href="/page/create"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Add New Page</label></a>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body form">                             
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table mb0"> 
                                <thead>
                                    <tr> 
                                        <th class="col-md-1">ID</th>
                                        <th class="col-md-2">Title</th>
                                        <th class="col-md-3">Details</th>
                                        <th class="col-md-2">Image</th>
                                        <th class="col-md-2" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($pages as $page)
                                    <tr> 
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->details }}</td>
                                        <td><img src="/{{ $page->image1 }}" class="img-responsive" alt=""></td>
                                        <td class="align-middle">
                                            <a class="btn btn-sm btn-primary" href="{{ url('/page/'.$page->id.'/edit') }}">Edit</a>
                                        </td>
                                        <td class="align-middle">
                                            {!! Form::open([ 'method' => 'Delete', 'url' => ['/page', $page->id]]) !!}
                                            {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection