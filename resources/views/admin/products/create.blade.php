
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

                                    {{ Form::label('price','Product Price:')}}
                                    {{ Form::text('price','',['class'=>'form-control border-input','placeholder'=>'$2500'])}}

                                </div>

                                <div class="form-group">

                                    {{ Form::label('descrption','Description')}}
                                    {{ Form::textarea('description','',['class'=>'form-control border-input','placeholder'=>'Product Description'])}}

                                </div>

                                <div class="form-group">

                                    {{ Form::label('file','File')}}
                                    {{ Form::file('image',['class'=>'form-control border-input'])}}

                                </div>

                                <div class="form-group">

                                    {{ Form::submit('ADD PRODUCT',['class'=>'btn btn-primary'])}}

                                </div>

                            </div>

                        </div>

                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
