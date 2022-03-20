@extends('front.layout.master')
@section('body')
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            {{-- <th>ShopName</th> --}}
            <th>TypeName</th>
            <th colspan="3">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td><img style="width: 100 px" src="{{asset('storage/'.$product->image)}}" alt=""></td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            {{-- <td>{{$product->shopname}}</td> --}}
            <td>{{$product->typename}}</td>

            <td><a href="{{route('product.detail',$product->id)}}">Detail</a></td>
            <td><a href="">Add to cart</a></td>
            <td><a href="">Buy</a></td>
            {{-- <td><a href="{{route('product.detailType',$product->type_id)}}">DetailType</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
