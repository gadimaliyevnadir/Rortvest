@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid vh-100">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Import Excel</h3>

                        </div>
                        @include('admin.layouts.includes.alert-message')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.import.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="iframe">Excel File</label>
                                    <input type="file" value="" class="form-control" name="file" id="file" placeholder="Enter Iframe Link">
                                    <a href="/uploads/Spreadsheet.xlsx">{{ __('Demo') }}</a>

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
