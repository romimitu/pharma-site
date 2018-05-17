@extends('admin.layouts.master')
@section('title')
Doctor | Medicon Pharmaceuticals Ltd.
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
                                <span class="caption-subject font-dark sbold uppercase">Doctor</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided">
                                    <a href="/doctor/create"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Add New Doctor</label></a>
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
                                        <th class="col-md-1">SL</th>
                                        <th class="col-md-2">Name</th>
                                        <th class="col-md-2">Degree</th>
                                        <th class="col-md-2">Hospital</th>
                                        <th class="col-md-2">City</th>
                                        <th class="col-md-2" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($doctors as $doctor)
                                    <tr> 
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->degree }}</td>
                                        <td>{{ $doctor->hospital }}</td>
                                        <td>{{ $doctor->city }}</td>
                                        <td class="align-middle">
                                            <a class="btn btn-sm btn-primary" href="{{ url('/doctor/'.$doctor->id.'/edit') }}">Edit</a>
                                        </td>
                                        <td class="align-middle">
                                            {!! Form::open([ 'method' => 'Delete', 'url' => ['/doctor', $doctor->id]]) !!}
                                            {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}      
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>  
                            <?php echo $doctors->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection