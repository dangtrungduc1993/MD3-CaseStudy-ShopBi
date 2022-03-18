<a href="{{route('user.showFormCreate')}}">Create User</a>
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
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="{{route('user.showFormUpdate',$user->id)}}">Update</a></td>
            <td><a onclick="confirm('Are you sure')" href="{{route('user.delete',$user->id)}}">Delete</a></td>
            <td><a href="{{route('user.detail',$user->id)}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
