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
                        <form action="{{ route('admin.translate.update', $translate->id) }}" method="post"
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
                                                                <label for="exampleInputEmail1">Text</label>
                                                                <input type="text"
                                                                    value="{{ old('text' . $key,$translate->getTranslation('text',$key))}}"
                                                                    class="form-control" name="text[{{ $key }}]"
                                                                    id="exampleInputEmail1" placeholder="Enter text">
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <label class="mb-1">Text</label>
                                                                <textarea placeholder="Enter Text" id="summernote-{{ $key }}" name="text[{{ $key }}]"
                                                                    class="mt-3 mb-3">{{ old('text' . $key, $translate->getTranslation('text', $key)) }}</textarea>
                                                            </div> --}}
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
                                        <label for="exampleInputEmail1">Group</label>
                                        <input type="text" value="{{ old('group', $translate->group) }}"
                                            class="form-control" name="group" id="exampleInputEmail1"
                                            placeholder="Enter group">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Key</label>
                                        <input type="text" value="{{ old('key', $translate->key) }}"
                                            class="form-control" name="key" id="exampleInputPassword1"
                                            placeholder="Enter Key">
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
