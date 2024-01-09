@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">

                        @include('admin.layouts.includes.alert-message')
                        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
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
                                                                <label for="exampleInputEmail1">Product Title</label>
                                                                <input type="text" value="{{ old('title' . $key) }}"
                                                                    class="form-control" name="title[{{ $key }}]"
                                                                    id="exampleInputEmail1"
                                                                    placeholder="Enter Product Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Description</label>
                                                                <input type="text" value="{{ old('desc' . $key) }}"
                                                                    class="form-control" name="desc[{{ $key }}]"
                                                                    id="exampleInputEmail1"
                                                                    placeholder="Enter Product Description">
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
                                        <div class="col-sm-12">
                                            <hr>
                                            <h3 style="margin-left: 20px">Attributes</h3>
                                            <div class="accordion accordion-flush" id="accordionAttribute">
                                                @foreach ($attributes as $key => $attribute)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-heading">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-{{ $key }}"
                                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                                {{ $attribute->name }}
                                                            </button>
                                                        </h2>

                                                        <div id="flush-{{ $key }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="flush-headingOne"
                                                            data-bs-parent="#accordionAttribute" style="">
                                                            <div class="accordion-body">
                                                                @foreach ($attribute->attributeOption as $atribut)
                                                                    <div style="margin: 10px;">
                                                                        <input type="checkbox" name="attributeoption_id[]"
                                                                            value="{{ $atribut->id }}" id="1">
                                                                        <label for="1"> {{ $atribut->name }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <select name="best_id" class="form-control">
                                                    @foreach ($bestcategories as $bestcategory)
                                                        <option class="form-control" value="{{ $bestcategory->id }}">
                                                            {!! $bestcategory->title !!}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select name="category" id="category" class="form-control">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="subcategory">Subcategory</label>
                                                <select name="category_id" id="subcategory" class="form-control">
                                                    <option value="" disabled selected>Alt Kategori Seçin</option>
                                                    @foreach ($categories as $category)
                                                        @foreach ($category->subcategory as $subcategory)
                                                            <option value="{{ $subcategory->id }}"
                                                                data-category-id="{{ $subcategory->category_id }}"
                                                                class="subcategory-option">{{ $subcategory->title }}
                                                            </option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile" style="margin-left: 10px">First
                                                    Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" value="{{ old('firstimage') }}"
                                                            name="firstimage" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile" style="margin-left: 10px">Second
                                                    Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" value="{{ old('secondimage') }}"
                                                            name="secondimage" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile" style="margin-left: 10px">Product
                                                    Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" value="{{ old('image[]') }}" multiple
                                                            name="image[]" class="custom-file-input"
                                                            id="exampleInputFile">
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
     @push('scripts')
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#category').on('change', function () {
            var selectedCategoryId = $(this).val();

            // Hide all subcategories
            $('.subcategory-option').hide();

            // Show subcategories based on selected category
            $('.subcategory-option[data-category-id="'+selectedCategoryId+'"]').show();

            // Set the first visible subcategory as selected
            var firstVisibleSubcategory = $('#subcategory option:visible:first');
            if (firstVisibleSubcategory.length > 0) {
                $('#subcategory').val(firstVisibleSubcategory.val());
            } else {
                // If no subcategories are visible, reset the subcategory dropdown
                $('#subcategory').val('');
            }
        });
    });
    </script>
    @endpush
@endsection
