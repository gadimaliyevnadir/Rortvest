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
                            <h3 class="card-title">Meta Tag</h3>
                        </div>
                        @include('admin.layouts.includes.alert-message')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.metatag.update', $metatag->id) }}" method="post"
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
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                                        id="{{ $key }}" role="tabpanel"
                                                        aria-labelledby="custom-tabs-two-profile-tab">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Home Meta Title</label>
                                                            <input type="text" value="{{ old('home_title' . $key,$metatag->getTranslation('home_title', $key)) }}"
                                                                class="form-control" name="home_title[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Home Meta Description</label>
                                                            <input type="text" value="{{ old('home_desc' . $key,$metatag->getTranslation('home_desc', $key)) }}"
                                                                class="form-control" name="home_desc[{{ $key }}]"
                                                                id="exampleInputEmail1"
                                                                placeholder="Enter Meta Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Home Meta Keywords</label>
                                                            <input type="text" value="{{ old('home_keywords' . $key,$metatag->getTranslation('home_keywords', $key)) }}"
                                                                class="form-control"
                                                                name="home_keywords[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Category Meta Title</label>
                                                            <input type="text"
                                                                value="{{ old('category_title' . $key,$metatag->getTranslation('category_title', $key)) }}"
                                                                class="form-control"
                                                                name="category_title[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Category Meta Description</label>
                                                            <input type="text" value="{{ old('category_desc' . $key,$metatag->getTranslation('category_desc', $key)) }}"
                                                                class="form-control"
                                                                name="category_desc[{{ $key }}]"
                                                                id="exampleInputEmail1"
                                                                placeholder="Enter Meta Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Category Meta Keywords</label>
                                                            <input type="text"
                                                                value="{{ old('category_keywords' . $key,$metatag->getTranslation('category_keywords', $key)) }}"
                                                                class="form-control"
                                                                name="category_keywords[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Blog Meta Title</label>
                                                            <input type="text" value="{{ old('blog_title' . $key,$metatag->getTranslation('blog_title', $key)) }}"
                                                                class="form-control" name="blog_title[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Blog Meta Description</label>
                                                            <input type="text" value="{{ old('blog_desc' . $key,$metatag->getTranslation('blog_desc', $key)) }}"
                                                                class="form-control" name="blog_desc[{{ $key }}]"
                                                                id="exampleInputEmail1"
                                                                placeholder="Enter Meta Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Blog Meta Keywords</label>
                                                            <input type="text" value="{{ old('blog_keywords' . $key,$metatag->getTranslation('blog_keywords', $key)) }}"
                                                                class="form-control"
                                                                name="blog_keywords[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Vacancy Meta Title</label>
                                                            <input type="text"
                                                                value="{{ old('vacancy_title' . $key,$metatag->getTranslation('vacancy_title', $key)) }}"
                                                                class="form-control"
                                                                name="vacancy_title[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Vacancy Meta Description</label>
                                                            <input type="text"
                                                                value="{{ old('vacancy_desc' . $key,$metatag->getTranslation('vacancy_desc', $key)) }}"
                                                                class="form-control"
                                                                name="vacancy_desc[{{ $key }}]"
                                                                id="exampleInputEmail1"
                                                                placeholder="Enter Meta Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Vacancy Meta Keywords</label>
                                                            <input type="text"
                                                                value="{{ old('vacancy_keywords' . $key,$metatag->getTranslation('vacancy_keywords', $key)) }}"
                                                                class="form-control"
                                                                name="vacancy_keywords[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">About Meta Title</label>
                                                            <input type="text" value="{{ old('about_title' . $key,$metatag->getTranslation('about_title', $key)) }}"
                                                                class="form-control"
                                                                name="about_title[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">About Meta Description</label>
                                                            <input type="text" value="{{ old('about_desc' . $key,$metatag->getTranslation('about_desc', $key)) }}"
                                                                class="form-control"
                                                                name="about_desc[{{ $key }}]"
                                                                id="exampleInputEmail1"
                                                                placeholder="Enter Meta Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">About Meta Keywords</label>
                                                            <input type="text"
                                                                value="{{ old('about_keywords' . $key,$metatag->getTranslation('about_keywords', $key)) }}"
                                                                class="form-control"
                                                                name="about_keywords[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Contact Meta Title</label>
                                                            <input type="text"
                                                                value="{{ old('contact_title' . $key,$metatag->getTranslation('contact_title', $key)) }}"
                                                                class="form-control"
                                                                name="contact_title[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Contact Meta Description</label>
                                                            <input type="text"
                                                                value="{{ old('contact_desc' . $key,$metatag->getTranslation('contact_desc', $key)) }}"
                                                                class="form-control"
                                                                name="contact_desc[{{ $key }}]"
                                                                id="exampleInputEmail1"
                                                                placeholder="Enter Meta Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1">Contact Meta Keywords</label>
                                                            <input type="text"
                                                                value="{{ old('contact_keywords' . $key,$metatag->getTranslation('contact_keywords', $key)) }}"
                                                                class="form-control"
                                                                name="contact_keywords[{{ $key }}]"
                                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
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
@endsection
