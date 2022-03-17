<form  method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        ProductName:
        <input type="text" name="name">
        <p>{{($errors->has('name'))? $errors->first('name'):""}}</p>
    </div>
    <div>
        ProductDescription:
        <input type="text" name="description">
        <p>{{($errors->has('description'))? $errors->first('description'):""}}</p>
    </div>
    <div>
        ProductPrice:
        <input type="number" name='price'>
        <p>{{($errors->has('price'))? $errors->first('price'):""}}</p>
    </div>
    <div>
        ProductQuantity:
        <input type="number" name="quantity">
        <p>{{($errors->has('quantity'))? $errors->first('quantity'):""}}</p>
    </div>
    <div>
        SelectProductImage:
        <input type="file" name="img" >
        <p>{{($errors->has('img'))? $errors->first('img'):""}}</p>
    </div>

    <div>
        SelectTypeName:
        <select name="type_id" id="">
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
        <input type="text" name="shop_id" value="2" hidden>
    </div>

        <button>Create Product</button>

</form>

