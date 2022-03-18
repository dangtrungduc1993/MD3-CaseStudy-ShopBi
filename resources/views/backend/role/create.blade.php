<form action="{{route('role.create')}}" method="POST" >
    @csrf
    <div>
        Role Name:
        <input role="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
    </div>

    <div>
        <button>Create Role</button>
    </div>
</form>

