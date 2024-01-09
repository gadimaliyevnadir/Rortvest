@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @include('admin.layouts.includes.alert-message')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.attributeoption.store') }}" method="post" enctype="multipart/form-data">
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
                                                                 <label class="mb-1" for="name">Value</label>
                                                                 @foreach ($attribute as $atribut)
                                                                 <input type="hidden" name="attribute_id" value="{{$atribut->id}}">
                                                                <input class="form-control" id="name" type="text" name="name[{{ $key }}]"
                                                                   disabled
                                                                    value="{{ old('name'.$key,$atribut->getTranslation('name', $key))}}">
                                                                     @endforeach
                                                                <label class="mb-1" for="name">Name</label>
                                                                <input class="form-control" id="name" type="text" name="name[{{ $key }}]"
                                                                    placeholder="Enter Name"
                                                                    value="{{ old('name' . $key) }}">
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
