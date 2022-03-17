<a href="{{route('shop.showFormCreate')}}">Createshop</a>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="7">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($shops as $shop)
        <tr>
            <td>{{$shop->name}}</td>
            <td>{{$shop->email}}</td>
            <td>{{$shop->password}}</td>
            <td><a href="{{route('shop.showFormUpdate',$shop->id)}}">Update</a></td>
            <td><a onclick="confirm('Are you sure')" href="{{route('shop.delete',$shop->id)}}">Delete</a></td>
            <td><a href="{{route('shop.detail',$shop->id)}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
