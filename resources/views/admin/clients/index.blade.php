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
                                <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">+Create</a>
                            </h3>
                            {{ $clients->links('admin.partials.pagination') }}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Id</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $client->id }}</td>
                                            <td style="width: 15%;">
                                                <img style="height:70px;width: 80px"
                                                    src="{{ asset($client->image) }}" class="img-fluid mb-2" />
                                            </td>
                                            <td>{!! $client->title !!}</td>
                                            <td>{!! $client->number !!}</td>
                                            <td style="gap:10px;display:flex;align-items: center;height: 96px">
                                                <a href="{{ route('admin.clients.edit', $client->id) }}" style="font-size: 12.5px;height: 30px"
                                                    class="btn btn-primary">Edit</a>
                                                <form method="post" class="delete-from"
                                                    action="{{ route('admin.clients.destroy', $client->id) }}">
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
