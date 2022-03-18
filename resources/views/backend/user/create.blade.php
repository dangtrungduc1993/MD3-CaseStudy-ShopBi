<form action="{{route('user.create')}}" method="POST" >
    @csrf
    <div>
        User Name:
        <input type="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
    </div>
    <div>
        User Email:
        <input type="email" name="email">
        <p>{{$errors->has('email')? $errors->first('email'):""}}</p>
    </div>
    <div>
        User Password:
        <input type="password" name="password">
        <p>{{$errors->has('password')? $errors->first('password'):""}}</p>
    </div>

    <div>
        <button>Create User</button>
    </div>
</form>

