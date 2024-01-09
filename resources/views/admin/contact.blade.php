@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid vh-100">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">

                    </div> --}}
                    {{$contacts->links('admin.partials.pagination')}}
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Ad</th>
                                    <th>Soyad</th>
                                    <th>Mail</th>
                                    <th>Telefon</th>
                                    <th>Yaranma tarixi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{!!$contact->name!!}</td>
                                    <td>{!!$contact->last_name!!}</td>
                                    <td>{!!$contact->email!!}</td>
                                    <td>{!!$contact->phone!!}</td>
                                    <td>{{$contact->created_at}}</td>
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
