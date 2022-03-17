<form action="{{route('shop.create')}}" method="POST" >
    @csrf
    <div>
        Shop Name:
        <input type="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
    </div>
    <div>
        Shop Email:
        <input type="email" name="email">
        <p>{{$errors->has('email')? $errors->first('email'):""}}</p>
    </div>
    <div>
        Shop Password:
        <input type="password" name="password">
        <p>{{$errors->has('password')? $errors->first('password'):""}}</p>
    </div>

    <div>
        <button>CreateProduct</button>
    </div>
</form>

