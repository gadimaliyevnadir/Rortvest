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
                            <a href="{{route('admin.supports.create')}}" class="btn btn-primary">+Create</a>
                        </h3>

                        {{$supports->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($supports as $support)
                                <tr>
                                    <td>{{$support->id}}</td>
                                    <td style="width: 10%;">
                                        <img style="height: 55px;object-fit:contain" src="{{asset($support->icon)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{!!$support->title!!}</td>
                                    <td>{!!$support->subtitle!!}</td>
                                    <td style="display: flex;gap:10px;align-items: center;height: 80px">
                                        <a href="{{route('admin.supports.edit',$support->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from" action="{{route('admin.supports.destroy',$support->id)}}">
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
