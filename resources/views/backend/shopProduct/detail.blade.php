<table border="1">
    <tr>
        <th>Name</th>
        <td>{{$shopProducts->name}}</td>
    </tr>
    <tr>
        <th>image</th>
        <td><img style="width: 100px" src="{{asset('storage/'.$shopProducts->image)}}" alt=""></td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$shopProducts->description}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$shopProducts->price}}</td>
    </tr>
    <tr>
        <th>Quantity</th>
        <td>{{$shopProducts->quantity}}</td>
    </tr>

    <tr>
        <th>Type</th>
        <td>{{$shopProducts->typename}}</td>
    </tr>
    </table>
