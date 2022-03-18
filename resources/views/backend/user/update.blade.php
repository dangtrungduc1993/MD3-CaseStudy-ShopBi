<form action="{{route('user.update',$user->id)}}" method="POST" >
    @csrf
    <div>
        User Name:
        <input type="text" name="name" value="{{$user->name}}">
    </div>
    <div>
        Email:
        <input readonly type="email" name="email" value="{{$user->email}}">
    </div>
    <div>
        Password:
        <input type="password" name='password' value="{{$user->password}}">
    </div>


    <div>
        <button>Update User</button>
    </div>
</form>
