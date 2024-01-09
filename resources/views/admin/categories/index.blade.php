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
                            <a href="{{route('admin.categories.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$categories->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key=> $category)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td style="width: 10%;">
                                        <img style="height: 50px;object-fit:contain" src="{{asset($category->image)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{!!$category->title!!}</td>
                                    <td style="gap: 10px;display:flex;align-items: center;height: 76px">
                                        <a href="{{route('admin.categories.edit',$category->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.categories.destroy',$category->id)}}">
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
