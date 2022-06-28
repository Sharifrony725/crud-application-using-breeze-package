@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Edit Product
                                </h3>
                                <a href="{{ route('products.index') }}" class="btn btn-success float-right btn-sm"> <i
                                        class="fas fa-list"></i>
                                    Product List</a>
                            </div>
                                @include('alert.message')
                            <div class="card-body">
                                <form action="{{ route('products.update',$product->id) }}" method="POST" id="myForm" enctype="multipart/form-data">
                                     @csrf
                                      @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input name="name" type="text" class="form-control" id="name"
                                             value="{{ $product->name ?? null }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <input name="category" type="text" class="form-control" id="category"
                                             value="{{ $product->category ?? null }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Price</label>
                                            <input name="price" type="number" class="form-control" id="price"
                                             value="{{ $product->price ?? null }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Quantity</label>
                                            <input name="quantity" type="number" class="form-control" id="quantity"
                                             value="{{ $product->quantity ?? null }}">
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label for="inputEmail4">Image</label>
                                             <img src="{{ asset('uploads/product/' .$product->image ) ?? null }}" height="100px" width="150px" alt="" srcset="">
                                            <br>
                                               <input name="image" type="file" class="form-control" id="image">
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label for="inputEmail4">Description</label>
                                           <textarea  name="description" class="form-control-file" id="" rows="4" placeholder="Description">{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </form>
                            </div>
                            <!-- /.card-body-->
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
    {{-- <script>
        $(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    supplier_id: {
                        required: true,
                    },
                    unit_id: {
                        required: true,
                    },
                    category_id: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter product name",
                    },
                    supplier_id: {
                        required: "Please select supplier name",
                    },
                    unit_id: {
                        required: "Please select  unit name",
                    },
                    category_id: {
                        required: "Please select category name",
                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script> --}}
@endsection
