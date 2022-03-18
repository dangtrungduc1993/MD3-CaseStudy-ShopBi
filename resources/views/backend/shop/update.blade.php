<form action="{{route('shop.update',$shop->id)}}" method="POST" >
    @csrf
    <div>
        Shop Name:
        <input type="text" name="name" value="{{$shop->name}}">
    </div>
    <div>
        Email:
        <input readonly type="email" name="email" value="{{$shop->email}}">
    </div>
    <div>
        Password:
        <input type="password" name='password' value="{{$shop->password}}">
    </div>


    <div>
        <button>Updateshop</button>
    </div>
</form>
