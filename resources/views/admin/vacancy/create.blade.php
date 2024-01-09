@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">
                        @include('admin.layouts.includes.alert-message')

                        <form action="{{ route('admin.vacancy.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"id="{{ $key }}"
                                                        role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">

                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="title" class="mb-1">Title</label>
                                                                <input type="text" name="title[{{ $key }}]"
                                                                    id="title"
                                                                    placeholder="Vakansiya Başlığını Qeyd Edin"
                                                                    class="form-control" value="{{ old('title' . $key) }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Description</label>
                                                                <textarea placeholder="Enter Description" id="summernote-{{ $key }}" name="desc[{{ $key }}]"
                                                                    class="mt-3 mb-3">{{ old('desc' . $key) }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
