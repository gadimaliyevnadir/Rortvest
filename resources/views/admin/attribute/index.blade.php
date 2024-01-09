@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{route('admin.attribute.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$attributes->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Row</th>
                                    <th>Name</th>
                                    <th>Options</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attributes as $key=> $attribute)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{!!$attribute->name!!}</td>
                                    <td>
                                        <a href="{{route('admin.attributeoption.index',$attribute->id)}}" style="font-size: 12.5px" class="btn btn-primary">Options</a>
                                    </td>
                                    <td style="gap: 10px;display:flex">
                                        <a href="{{route('admin.attribute.edit',$attribute->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.attribute.destroy',$attribute->id)}}">
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
