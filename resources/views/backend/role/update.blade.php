<form action="{{route('role.update',$role->id)}}" method="POST" >
    @csrf
    <div>
        Role Name:
        <input role="text" name="name" value="{{$role->name}}">
    </div>


    <div>
        <button>Update role</button>
    </div>
</form>
