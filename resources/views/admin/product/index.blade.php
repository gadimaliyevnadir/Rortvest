@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{route('admin.product.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$products->links('admin.partials.pagination')}}
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>First Image</th>
                                    <th>Second Image</th>
                                    <th>Product Title</th>
                                    <th>Product Description</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th> Best Category</th>
                                    <th> Attributes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=> $product)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        @if ($product->firstimage == null)
                                            <img style="height: 60px;width:60px;object-fit:contain" src="/assets/images/logo/logo.png" alt=""
                                                 class="default-image" />
                                        @else
                                            <img style="height: 60px;width:60px;object-fit:contain" src="{{asset('/uploads/firstimage/'.$product->firstimage)}}" class="img-fluid mb-2" />
                                        @endif

                                    </td>
                                    <td>
                                        @if ($product->secondimage == null)
                                            <img style="height: 60px;width:60px;object-fit:contain" src="/assets/images/logo/logo.png" alt=""
                                                 class="default-image" />
                                        @else
                                            <img style="height: 60px;width:60px;object-fit:contain" src="{{asset('/uploads/secondimage/'.$product->secondimage)}}" class="img-fluid mb-2" />
                                        @endif

                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{substr($product->desc,0,43)}}</td>
                                    <td>{{$product->slug}}</td>
                                    <td>@if($product->subcategory) {{$product->subcategory->title}}  @endif</td>
                                    <td>@if($product->bestcategory) {{$product->bestcategory->title}} @endif</td>
                                    <td>
                                        <a href="{{route('admin.attributeedit',$product->id)}}" style="font-size: 12.5px;width:95px;" class="btn btn-primary">Atribut Edit</a>
                                    </td>
                                    <td style="display: flex;gap:10px;height: 89px">
                                        <a href="{{route('admin.product.edit',$product->id)}}" style="font-size: 12.5px;height: 30px" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from" action="{{route('admin.product.destroy',$product->id)}}">
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
