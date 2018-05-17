@extends('admin.layouts.master')
@section('title')
Product | Medicon Pharmaceuticals Ltd.
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
                                <span class="caption-subject font-dark sbold uppercase">Product</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided">
                                    <a href="/product/create"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Add New Product</label></a>
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
                                        <th class="col-md-2">Therapeutic class</th>
                                        <th class="col-md-2">Indication</th>
                                        <th class="col-md-2">Image</th>
                                        <th class="col-md-2" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($products as $product)
                                    <tr> 
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->trade_name }}</td>
                                        <td>{{ $product->therapeutic_class }}</td>
                                        <td>{{ $product->indication }}</td>
                                        <td>
                                            @foreach($product->med_images as $med_img)
                                            {{$med_img->image}},
                                            @endforeach
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-sm btn-primary" href="{{ url('/product/'.$product->id.'/edit') }}">Edit</a>
                                        </td>
                                        <td class="align-middle">
                                            {!! Form::open([ 'method' => 'Delete', 'url' => ['/product', $product->id]]) !!}
                                            {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}      
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>  
                            <?php echo $products->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection