<form action="{{route('shop.create')}}" method="POST" >
    @csrf
    <div>
        Shop Name:
        <input type="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
    </div>
  
    <div>
        <button>Create Type</button>
    </div>
</form>

