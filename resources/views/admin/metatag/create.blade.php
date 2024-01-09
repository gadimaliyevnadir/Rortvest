@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">

                        @include('admin.layouts.includes.alert-message')
                        <form action="{{ route('admin.metatag.store') }}" method="post" enctype="multipart/form-data">
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
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                                        id="{{ $key }}" role="tabpanel"
                                                        aria-labelledby="custom-tabs-two-profile-tab">


                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Home Meta Title</label>
                                                                <input type="text" value="{{ old('home_title' . $key) }}"
                                                                    class="form-control" name="home_title[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Home Meta Description</label>
                                                                <input type="text" value="{{ old('home_desc' . $key) }}"
                                                                    class="form-control" name="home_desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Home Meta Keywords</label>
                                                                <input type="text" value="{{ old('home_keywords' . $key) }}"
                                                                    class="form-control" name="home_keywords[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Category Meta Title</label>
                                                                <input type="text" value="{{ old('category_title' . $key) }}"
                                                                    class="form-control" name="category_title[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Category Meta Description</label>
                                                                <input type="text" value="{{ old('category_desc' . $key) }}"
                                                                    class="form-control" name="category_desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Category Meta Keywords</label>
                                                                <input type="text" value="{{ old('category_keywords' . $key) }}"
                                                                    class="form-control" name="category_keywords[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Blog Meta Title</label>
                                                                <input type="text" value="{{ old('blog_title' . $key) }}"
                                                                    class="form-control" name="blog_title[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Blog Meta Description</label>
                                                                <input type="text" value="{{ old('blog_desc' . $key) }}"
                                                                    class="form-control" name="blog_desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Blog Meta Keywords</label>
                                                                <input type="text" value="{{ old('blog_keywords' . $key) }}"
                                                                    class="form-control" name="blog_keywords[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Vacancy Meta Title</label>
                                                                <input type="text" value="{{ old('vacancy_title' . $key) }}"
                                                                    class="form-control" name="vacancy_title[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Vacancy Meta Description</label>
                                                                <input type="text" value="{{ old('vacancy_desc' . $key) }}"
                                                                    class="form-control" name="vacancy_desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Vacancy Meta Keywords</label>
                                                                <input type="text" value="{{ old('vacancy_keywords' . $key) }}"
                                                                    class="form-control" name="vacancy_keywords[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                            </div>

                                                             <div class="form-group">
                                                                <label for="exampleInputEmail1">About Meta Title</label>
                                                                <input type="text" value="{{ old('about_title' . $key) }}"
                                                                    class="form-control" name="about_title[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">About Meta Description</label>
                                                                <input type="text" value="{{ old('about_desc' . $key) }}"
                                                                    class="form-control" name="about_desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">About Meta Keywords</label>
                                                                <input type="text" value="{{ old('about_keywords' . $key) }}"
                                                                    class="form-control" name="about_keywords[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Contact Meta Title</label>
                                                                <input type="text" value="{{ old('contact_title' . $key) }}"
                                                                    class="form-control" name="contact_title[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Contact Meta Description</label>
                                                                <input type="text" value="{{ old('contact_desc' . $key) }}"
                                                                    class="form-control" name="contact_desc[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Description">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Contact Meta Keywords</label>
                                                                <input type="text" value="{{ old('contact_keywords' . $key) }}"
                                                                    class="form-control" name="contact_keywords[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Meta Keywords">
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
@endsection
