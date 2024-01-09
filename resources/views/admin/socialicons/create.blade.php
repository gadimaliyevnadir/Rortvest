@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>

                    </div>
                    @include('admin.layouts.includes.alert-message')
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.socialicons.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" value="{{old('class')}}" class="form-control" name="class" id="class" placeholder="Enter Class Name">
                            </div>
                            <div class="form-group">
                                <label for="links">Link</label>
                                <input type="text" value="{{old('links')}}" class="form-control" name="links" id="links" placeholder="Enter Link">
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
