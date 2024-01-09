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
                            <a href="{{route('admin.socialicons.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$socialicons->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Class Name</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody style="overflow-wrap: anywhere;">
                                @foreach($socialicons as $socialicon)
                                <tr>
                                    <td>{{$socialicon->id}}</td>
                                    <td>{{$socialicon->class}}</td>
                                    <td>{{substr($socialicon->links,0,70)}}</td>
                                    <td style="display: flex;gap:10px">
                                        <a href="{{route('admin.socialicons.edit',$socialicon->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.socialicons.destroy',$socialicon->id)}}">
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
