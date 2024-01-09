@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <!--<h3 class="card-title">-->
                            <!--    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">+Create</a>-->
                            <!--</h3>-->

                            {{ $sliders->links('admin.partials.pagination') }}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Id</th>
                                        <th>File</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $slider->id }}</td>
                                            <td style="width: 15%">
                                                <video style="width: 100%;height: 85px"  id="video" loop="" playsinline="" autoplay=""
                                                    muted="" controls="controls">
                                                    <source style="height: 200px;object-fit:contain" src="{{asset($slider->video)}}" type="video/mp4">
                                                </video>
                                            </td>
                                            <td>{!! $slider->title !!}</td>
                                            <td>{!! $slider->subtitle !!}</td>
                                            <td style="display: flex;gap:10px;align-items:center;height: 109px">
                                                <a href="{{ route('admin.sliders.edit', $slider->id) }}" style="font-size: 12.5px"
                                                    class="btn btn-primary">Edit</a>
                                                <!--<form method="post" class="delete-from"-->
                                                <!--    action="{{ route('admin.sliders.destroy', $slider->id) }}">-->
                                                <!--    @csrf-->
                                                <!--    @method('delete')-->
                                                <!--    <button type="submit" class="btn btn-danger btn-sm">Delete</button>-->
                                                <!--</form>-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
