
@extends('admin.layouts.master')


@section('page')
    ADD PRODUCT
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-md-10">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Product</h4>
                </div>
                <div class="content">
                    {!! Form::open(['url' => 'foo/bar']) !!}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">

                                    {{ Form::label('product_name','Product Name:')}}
                                    {{ Form::text('product','',['class'=>'form-control border-input','placeholder'=>'Macbook pro'])}}

                                </div>

                                <div class="form-group">

                                    {{ Form::label('product_name','Product Price:')}}
                                    {{ Form::text('product','',['class'=>'form-control border-input','placeholder'=>'Macbook pro'])}}

                                    <label>Product Price:</label>
                                    <input type="text" class="form-control border-input" placeholder="$2500">
                                </div>

                                <div class="form-group">
                                    <label>Product Description:</label>
                                    <textarea name="" id="" cols="30" rows="10"
                                                class="form-control border-input" placeholder="Product Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Product Image:</label>
                                    <input type="file" class="form-control border-input">
                                </div>

                            </div>

                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                        </div>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
