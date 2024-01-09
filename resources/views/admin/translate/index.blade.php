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
                            <a href="{{route('admin.translate.create')}}" class="btn btn-primary">+Create</a>
                        </h3>

                        {{$translates->links('admin.partials.pagination')}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Text</th>
                                    <th>Group</th>
                                    <th>Key</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($translates as $model)
                                <tr>
                                    <td>{{$model->id}}</td>
                                    <td>{!!$model->text!!}</td>
                                    <td>{{$model->group}}</td>
                                    <td>{{$model->key}}</td>
                                    <td>
                                        <a href="{{route('admin.translate.edit',$model->id)}}" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from" action="{{route('admin.translate.destroy',$model->id)}}">
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
