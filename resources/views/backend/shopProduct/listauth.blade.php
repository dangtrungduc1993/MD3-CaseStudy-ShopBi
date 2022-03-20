<a href="{{route('shopProduct.showFormCreate')}}">Create Product</a>
{{-- <a href="{{route('auth.logout')}}">Logout</a> --}}
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
            <th colspan="7">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($shopProducts as $shopProduct)
        <tr>
            <td>{{$shopProduct->name}}</td>
            <td><img style="width: 100" src="{{asset('storage/'.$shopProduct->image)}}" alt=""></td>
            <td>{{$shopProduct->description}}</td>
            <td>{{$shopProduct->price}}</td>
            <td>{{$shopProduct->quantity}}</td>
            {{-- <td>{{$shopProduct->shopname}}</td> --}}
            <td>{{$shopProduct->typename}}</td>
            <td><a href="{{route('shopProduct.showFormUpdate',$shopProduct->id)}}">Update</a></td>
            <td><a onclick="confirm('Are you sure')" href="{{route('shopProduct.delete',$shopProduct->id)}}">Delete</a></td>
            <td><a href="{{route('shopProduct.detail',$shopProduct->id)}}">Detail</a></td>
            {{-- <td><a href="{{route('shopProduct.detailType',$shopProduct->type_id)}}">DetailType</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
