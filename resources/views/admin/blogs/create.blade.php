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
                        <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                                                <label class="mb-1">Title</label>
                                                                <input type="text" placeholder="Enter Title"  name="title[{{ $key }}]" value="{{ old('title' . $key) }}"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Description</label>
                                                                <textarea placeholder="Enter Description" id="summernote-{{ $key }}" name="desc[{{ $key }}]"
                                                                    class="mt-3 mb-3">{{ old('desc' . $key) }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Slug</label>
                                                                <input type="text" value="{{ old('slug' . $key) }}"
                                                                    class="form-control" name="slug[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Slug">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="countries">Tags</label>
                                        <select id="select2" class="js-example-basic-multiple form-control"
                                            name="tag_id[]" multiple="multiple">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">
                                                    {!! $tag->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" value="{{ old('image') }}" name="image"
                                                    class="custom-file-input" id="exampleInputFile">
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
        </div>
    </section>
     @push('scripts')
         <script src="{{ asset('/admin/plugins/select2/js/select2.full.min.js') }}"></script>
         <script>
             $(document).ready(function() {
                 $('#select2').select2();
             });
         </script>

         <script>
            $(function() {
                $('#summernote-az').summernote()
                $('#summernote-en').summernote()
                $('#summernote-ru').summernote()
                $('#summernote_az').summernote()
                $('#summernote_en').summernote()
                $('#summernote_ru').summernote()
                $('#summernote=az').summernote()
                $('#summernote=en').summernote()
                $('#summernote=ru').summernote()
            })
        </script>
    @endpush
@endsection
