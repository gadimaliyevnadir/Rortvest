@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!--<h3 class="card-title">-->
                        <!--    <a href="{{route('admin.settings.create')}}" class="btn btn-primary">+Create</a>-->
                        <!--</h3>-->
                        {{$settings->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Logo</th>
                                    <th>Description</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody style="overflow-wrap: anywhere;">
                                @foreach($settings as $setting)
                                <tr>
                                    <td>{{$setting->id}}</td>
                                    <td style="width: 10%;">
                                        <img style="height: 140px;object-fit:contain" src="{{asset($setting->image)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{$setting->desc}}</td>
                                    <td>{{$setting->email}}</td>
                                    <td>{{$setting->address}}</td>
                                    <td style="display:flex;gap:10px">
                                        <a href="{{route('admin.settings.edit',$setting->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                       <!--<form method="post" class="delete-from" action="{{route('admin.settings.destroy',$setting->id)}}">-->
                                       <!--     @csrf-->
                                       <!--     @method('delete')-->
                                       <!--    <button type="submit" class="btn btn-danger btn-sm">Delete</button>-->
                                       <!-- </form>-->
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
