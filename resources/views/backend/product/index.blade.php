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
                                <i class="fas fa-user"></i>
                                Products List
                            </h3>
                            <a href="{{ route('products.create') }}" class="btn btn-success float-right btn-sm"> <i class="fas fa-plus-circle"></i>
                                Add Product</a>
                        </div>
                        @include('alert.message')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">SL.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category </th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($products) > 0)
                                    @foreach ($products as $key => $product)
                                    <tr>
                                        <td scope="row">{{ $products->firstItem() + $loop->index ?? null }} </td>
                                         <td>{{ $product->name ?? null }}</td>
                                         <td>{{ $product->category ?? null }}</td>
                                         <td>{{ $product->price ?? null }}</td>
                                         <td>{{ $product->quantity ?? null }}</td>
                                         <td>{{  Str::limit(strip_tags($product->description) , 40) ?? null }}</td>
                                         <td><img src="{{ asset('uploads/product/' .$product->image ) ?? null }}" height="100px" width="150px" alt="" srcset=""></td>
                                        <td>
                                            <div class="float-left" style="margin-right: 5px">
                                                <a title="Edit" class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id)  }}"> <i class="fa fa-edit"></i> </a>
                                            </div>
                                            <div>
                                                <form action="{{ route('products.destroy' , $product->id)  }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button id="" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body-->
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
@endsection
