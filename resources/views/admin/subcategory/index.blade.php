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
                            <a href="{{route('admin.subcategory.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$subcategories->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subcategories as $subcategory)
                                <tr>
                                    <td>{{$subcategory->id}}</td>
                                    <td>{!!$subcategory->title!!}</td>
                                    <td>{!!$subcategory->slug!!}</td>
                                    <td>{!!$subcategory->category->title!!}</td>
                                    <td style="gap:10px;display:flex">
                                        <a href="{{route('admin.subcategory.edit',$subcategory->id)}}" class="btn btn-primary" style="font-size: 13px">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.subcategory.destroy',$subcategory->id)}}">
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
