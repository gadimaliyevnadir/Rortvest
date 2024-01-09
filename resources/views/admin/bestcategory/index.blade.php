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
                            <a href="{{route('admin.bestcategory.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$bestcategories->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bestcategories as $key=> $bestcategory)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{!!$bestcategory->title!!}</td>
                                    <td style="gap: 10px;display:flex">
                                        <a href="{{route('admin.bestcategory.edit',$bestcategory->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.bestcategory.destroy',$bestcategory->id)}}">
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
