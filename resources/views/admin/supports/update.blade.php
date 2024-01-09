@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row w-100">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @include('admin.layouts.includes.alert-message')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.supports.update', $support->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-sm-6">
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
                                                                <label class="mb-1" for="slug">Title</label>
                                                                <input class="form-control" id="slug" type="text"
                                                                    name="title[{{ $key }}]" placeholder="Enter Title"
                                                                    value="{{ old('title' . $key, $support->getTranslation('title', $key)) }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1" for="slug">Subtitle</label>
                                                                <input class="form-control" id="slug" type="text"
                                                                    name="subtitle[{{ $key }}]" placeholder="Enter Subtitle"
                                                                    value="{{ old('subtitle' . $key, $support->getTranslation('title', $key)) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div>
                                            <img class="img-fluid" style="height: 390px" src="{{ asset($support->icon) }}">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" value="{{ old('icon', $support->icon) }}"
                                                    name="icon" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
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
