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
                                    Add Product
                                </h3>
                                <a href="{{ route('products.index') }}" class="btn btn-success float-right btn-sm"> <i
                                        class="fas fa-list"></i>
                                    Product List</a>
                            </div>
                              @include('alert.message')
                            <div class="card-body">
                                <form action="{{ route('products.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input name="name" type="text" class="form-control" id="name"
                                                placeholder="Product Name" value="{{ old('name') }}">
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <input name="category" type="text" class="form-control" id="category"
                                                placeholder="Product Category" value="{{ old('category') }}">
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputEmail4">Price</label>
                                            <input name="price" type="number" class="form-control" id="price"
                                                placeholder="Product Price" value="{{ old('price') }}">
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputEmail4">Quantity</label>
                                            <input name="quantity" type="number" class="form-control" id="price"
                                                placeholder="Product Quantity" value="{{ old('quantity') }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Image</label>
                                            <input name="image" type="file" class="form-control" id="image">
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputEmail4">Description</label>
                                            <textarea  name="description" class="form-control-file" id="" rows="4" placeholder="Description">{{ old('description') }}</textarea>
                                        </div>

                                    </div>
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </form>
                            </div>
                            <!-- /.card-body-->
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>

@endsection
