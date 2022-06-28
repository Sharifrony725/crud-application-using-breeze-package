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
                                    Add New User
                                </h3>
                                <a href="{{ route('users.index') }}" class="btn btn-success float-right btn-sm"> <i
                                        class="fas fa-list"></i>
                                    User List</a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('users.store') }}" method="POST" id="myForm">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input name="name" type="text" class="form-control" id="name"
                                                placeholder="Name">
                                                <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control"
                                                id="confirm_password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_type">User Role</label>
                                        <select name="user_type" id="user_type" class="form-control">
                                            <option style="display:none">Choose...</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
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
    <script>
$(function () {
  $('#myForm').validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        equalTo: '#password'
      },
      user_type: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      user_type: {
          required : "Please select a user type",
         }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection
