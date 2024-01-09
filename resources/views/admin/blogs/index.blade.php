@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{route('admin.blogs.create')}}" class="btn btn-primary">+Create</a>
                        </h3>

                        {{$blogs->links('admin.partials.pagination')}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    {{-- <th>Date</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $key=> $blog)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td style="width: 250px;">
                                        <img style="height: 100px;width:150px;object-fit:contain" src="{{asset($blog->image)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{!!$blog->title!!}</td>
                                    <td>{!!substr($blog->desc,0,50)!!}</td>
                                    <td>{!!$blog->slug!!}</td>
                                    {{-- <td>{!!$blog->date!!}</td> --}}
                                    <td style="gap: 10px;display:flex">
                                        <a href="{{route('admin.blogs.edit',$blog->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from" action="{{route('admin.blogs.destroy',$blog->id)}}">
                                            @csrf
                                            @method('delete')
                                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
