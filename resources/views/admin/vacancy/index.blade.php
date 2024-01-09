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
                            <a href="{{route('admin.vacancy.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$vacancies->links('admin.partials.pagination')}}
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vacancies as $vacancy)
                                <tr style="height: 81px">
                                    <td>{{$vacancy->id}}</td>
                                    <td>{{$vacancy->title}}</td>
                                    <td>{!!substr($vacancy->desc,0,200)!!}</td>
                                    <td style="display: flex;gap:10px;align-items: center;height: 81px">
                                        <a href="{{route('admin.vacancy.edit',$vacancy->id)}}" style="font-size: 12.5px;height: 32px" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.vacancy.destroy',$vacancy->id)}}">
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

                </div>

            </div>

        </div>
    </div>

</section>
@endsection
