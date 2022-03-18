<form action="{{route('type.update',$type->id)}}" method="POST" >
    @csrf
    <div>
        Type Name:
        <input type="text" name="name" value="{{$type->name}}">
    </div>


    <div>
        <button>Update type</button>
    </div>
</form>
