@extends('front.layout.master')
@section('body')
<table border="1">
    <tr>
        <th>Name</th>
        <td>{{$products->name}}</td>
    </tr>
    <tr>
        <th>image</th>
        <td><img style="width: 100px" src="{{asset('storage/'.$products->image)}}" alt=""></td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$products->description}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$products->price}}</td>
    </tr>
    <tr>
        <th>Quantity</th>
        <td>{{$products->quantity}}</td>
    </tr>

    <tr>
        <th>TypeName</th>
        <td>{{$products->typename}}</td>
    </tr>
    </table>
@endsection
