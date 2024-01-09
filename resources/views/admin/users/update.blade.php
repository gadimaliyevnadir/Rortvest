@extends('admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>

                    </div>
                    @include('admin.layouts.includes.alert-message')
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" value="{{old('name',$user->name)}}" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" value="{{old('email',$user->email)}}" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" value="{{old('password',$user->password)}}" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Password Repeat</label>
                                <input type="password" value="{{old('password_confirmation',$user->password)}}" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>




@endsection
