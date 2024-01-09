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
                            @foreach ($attribute as $atribut)
                            <a href="{{route('admin.attributeoption.create',$atribut->id)}}" class="btn btn-primary">+Create</a>
                            @endforeach
                        </h3>
                        {{$options->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Row</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($options as $key=> $option)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{!!$option->name!!}</td>
                                    <td style="gap: 10px;display:flex">
                                        <a href="{{route('admin.attributeoption.edit',$option->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.attributeoption.destroy',$option->id)}}">
                                            @csrf
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
