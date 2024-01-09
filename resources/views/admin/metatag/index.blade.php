@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <!--<div class="card-header">-->
                    <!--    <h3 class="card-title">-->
                    <!--        <a href="{{route('admin.metatag.create')}}" class="btn btn-primary">+Create</a>-->
                    <!--    </h3>-->
                    <!--</div>-->
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>HOME_META</th>
                                    <th>CATEGORY_META</th>
                                    <th>BLOG_META</th>
                                    <th>VACANCY_META</th>
                                    <th>ABOUT_META</th>
                                    <th>CONTACT_META</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$metatag->id}}</td>
                                    <td>{{$metatag->home_title}}</td>
                                    <td>{{$metatag->category_title}}</td>
                                    <td>{{$metatag->blog_title}}</td>
                                    <td>{{$metatag->vacancy_title}}</td>
                                    <td>{{$metatag->about_title}}</td>
                                    <td>{{$metatag->contact_title}}</td>
                                    <td style="display: flex;gap:10px">
                                        <a href="{{route('admin.metatag.edit',$metatag->id)}}" style="font-size: 12.5px" class="btn btn-primary">Edit</a>
                                        <!--<form method="post" class="delete-from" action="{{route('admin.metatag.destroy',$metatag->id)}}">-->
                                        <!--    @csrf-->
                                        <!--    @method('delete')-->
                                        <!--   <button type="submit" class="btn btn-danger btn-sm">Delete</button>-->
                                        <!--</form>-->
                                    </td>
                                </tr>
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
