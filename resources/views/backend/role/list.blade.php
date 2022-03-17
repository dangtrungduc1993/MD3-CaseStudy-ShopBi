<a href="{{route('role.showFormCreate')}}">Create role</a>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="7">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{$role->name}}</td>
            <td><a href="{{route('role.showFormUpdate',$role->id)}}">Update</a></td>
            <td><a onclick="confirm('Are you sure')" href="{{route('role.delete',$role->id)}}">Delete</a></td>
            <td><a href="{{route('role.detail',$role->id)}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
