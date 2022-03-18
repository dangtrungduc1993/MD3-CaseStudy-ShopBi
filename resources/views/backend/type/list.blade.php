<a href="{{route('type.showFormCreate')}}">Create Type</a>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="7">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($types as $type)
        <tr>
            <td>{{$type->name}}</td>
            <td><a href="{{route('type.showFormUpdate',$type->id)}}">Update</a></td>
            <td><a onclick="confirm('Are you sure')" href="{{route('type.delete',$type->id)}}">Delete</a></td>
            <td><a href="{{route('type.detail',$type->id)}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
