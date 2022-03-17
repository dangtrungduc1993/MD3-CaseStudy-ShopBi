<form action="{{route('shop.update',$shop->id)}}" method="POST" >
    @csrf
    <div>
        Shop Name:
        <input type="text" name="name" value="{{$shop->name}}">
    </div>
    <div>
        Email:
        <input type="email" name="email"{{$shop->email}}>
    </div>
    <div>
        Password:
        <input type="password" name='password' value="{{$shop->password}}">
    </div>


    <div>
        <button>Updateshop</button>
    </div>
</form>
