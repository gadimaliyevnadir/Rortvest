@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">

                        @include('admin.layouts.includes.alert-message')
                        <form action="{{ route('admin.settings.update',$setting->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="card card-primary card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                @foreach ($locales as $key => $locale)
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                            id="custom-tabs-two-home-tab" data-toggle="pill"
                                                            href="#{{ $key }}" role="tab"
                                                            aria-controls="custom-tabs-two-home"
                                                            aria-selected="true">{{ strtoupper($key) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                                @foreach ($locales as $key => $locale)
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                                        id="{{ $key }}" role="tabpanel"
                                                        aria-labelledby="custom-tabs-two-profile-tab">

                                                        <div class="card-body">

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Description</label>
                                                                <input type="text" value="{{ old('desc' . $key,$setting->getTranslation('desc',$key)) }}"
                                                                    class="form-control" name="desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Address</label>
                                                                <input type="text" value="{{ old('address' . $key,$setting->getTranslation('address',$key)) }}"
                                                                    class="form-control" name="address[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" value="{{ old('email',$setting->email) }}" class="form-control"
                                                    name="email" id="email" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" value="{{ old('phone',$setting->phone) }}" class="form-control"
                                                    name="phone" id="phone" placeholder="Enter Phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">File input</label>
                                                <div>
                                                    <img class="img-fluid" style="height: 120px"
                                                         src="{{ asset($setting->image) }}">
                                                </div>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" value="{{ old('image',$setting->image) }}"
                                                            name="image" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
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


