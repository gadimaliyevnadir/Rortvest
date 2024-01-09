@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @include('admin.layouts.includes.alert-message')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.vacancy.update', $vacancy->id) }}" method="post"
                            enctype="multipart/form-data">
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
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="{{ $key }}" role="tabpanel"
                                                        aria-labelledby="custom-tabs-two-profile-tab">

                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="title" class="mb-1">Title</label>
                                                                <input type="text" name="title[{{ $key }}]"
                                                                    id="title"
                                                                    placeholder="Vakansiya Başlığını Qeyd Edin"
                                                                    class="form-control" value="{{ old('title' . $key, $vacancy->getTranslation('title', $key)) }}">
                                                            </div>
                                                                <div class="form-group">
                                                                    <label class="mb-1">Description</label>
                                                                    <textarea placeholder="Enter Description" id="summernote-{{ $key }}" name="desc[{{ $key }}]"
                                                                        class="mt-3 mb-3">{{ old('desc' . $key, $vacancy->getTranslation('desc', $key)) }}</textarea>
                                                                </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
    @push('scripts')
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
