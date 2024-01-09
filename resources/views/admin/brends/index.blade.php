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
                            <a href="{{route('admin.brends.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$brends->links('admin.partials.pagination')}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>Image</th>
                                    <th>Brend Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brends as $key=> $brend)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <img style="height:65px;width:10%;object-fit:contain" src="{{asset($brend->image)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{$brend->link}}</td>
                                    <td style="gap:10px;display:flex;align-items: center;height: 90px">
                                        <a href="{{route('admin.brends.edit',$brend->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                      <form method="post" class="delete-from" action="{{route('admin.brends.destroy',$brend->id)}}">
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
