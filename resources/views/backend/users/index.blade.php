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
                                    <i class="fas fa-user"></i>
                                    User List
                                </h3>
                                <a href="{{ route('users.create') }}" class="btn btn-success float-right btn-sm"> <i
                                        class="fas fa-plus-circle"></i>
                                    Add User</a>
                            </div>
                            @include('alert.message')
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL.</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($allUsers) > 0)
                                            @foreach ($allUsers as $key => $user)
                                                <tr>
                                                    <td scope="row">{{ $key + 1 ?? null }}</td>
                                                    <td>{{ $user->user_type ?? null }}</td>
                                                    <td>{{ $user->name ?? null }}</td>
                                                    <td>{{ $user->email ?? null }}</td>
                                                    <td>
                                                        <div class="float-left" style="margin-right: 5px">
                                                            <a title="Edit" class="btn btn-primary btn-sm"
                                                                href="{{ route('users.edit', $user->id) }}"> <i
                                                                    class="fa fa-edit"></i> </a>
                                                        </div>
                                                        <div>
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input  type="hidden" name="_method" value="DELETE">
                                                                <button id="delete" type="submit" class="btn btn-danger btn-sm"><i
                                                                        class="fa fa-trash" ></i></button>
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
