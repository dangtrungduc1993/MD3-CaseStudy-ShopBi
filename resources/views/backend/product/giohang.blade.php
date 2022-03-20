<?php
        session_start();
        if(!isset($_SESSION['giohang']))$_SESSION['giohang']=[];
        if (isset($_POST['addcart'])&&($_POST['addcart'])) {
            $hinh=$_POST['hinh'];
            $tensp=$_POST['tensp'];
            $gia=$_POST['gia'];
            $soluong=$_POST['soluong'];
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
            // dd($_SESSION['giohang']);
        }

        // public function showgiohang() {
        //     if (isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))) {

        //         for ($i=0; $i < sizeof($_SESSION['giohang']); $i++){
        //             echo



        //         }
        //     }
        // }
    ?>

@extends('front.layout.master')
@section('body')
<table border="1">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            {{-- <th>ShopName</th> --}}
            <th>TypeName</th>
            <th colspan="3">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ()
        <tr>
            <td><img style="width: 100 px" src="$_SESSION['giohang']" alt=""></td>
            <td>{{$product->name}}</td>

            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            {{-- <td>{{$product->shopname}}</td> --}}
            <td>{{$product->typename}}</td>

            {{-- <td><a href="{{route('product.detail',$product->id)}}">Detail</a></td>
            <td><a href="">Add to cart</a></td>
            <td><a href="">Buy</a></td> --}}
            {{-- <td><a href="{{route('product.detailType',$product->type_id)}}">DetailType</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
