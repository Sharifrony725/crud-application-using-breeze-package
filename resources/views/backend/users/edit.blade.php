@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">user</li>
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
                                   Update User Info
                                </h3>
                                <a href="{{ route('users.index') }}" class="btn btn-success float-right btn-sm"> <i
                                        class="fas fa-list"></i>
                                    User List</a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('users.update', $user->id) }}" method="POST" id="myForm">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input name="name" type="text" class="form-control" id="name"
                                                value="{{ $user->name }}">
                                                <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_type">User Role</label>
                                        <select name="user_type" id="user_type" class="form-control">
                                            <option style="display:none">Choose...</option>
                                            <option value="Admin" {{ ($user->user_type=="Admin")?"selected":"" }}>Admin</option>
                                            <option value="User"{{ ($user->user_type=="User")?"selected":"" }}>User</option>
                                        </select>
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
