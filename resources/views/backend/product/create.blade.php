<form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        ProductName:
        <input type="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
    </div>
    <div>
        ProductDescription:
        <input type="text" name="description">
        <p>{{$errors->has('description')? $errors->first('description'):""}}</p>
    </div>
    <div>
        ProductPrice:
        <input type="number" name='price'>
        <p>{{$errors->has('price')? $errors->first('price'):""}}</p>
    </div>
    <div>
        ProductQuantity:
        <input type="number" name="quantity">
        <p>{{$errors->has('quantity')? $errors->first('quantity'):""}}</p>
    </div>
    <div>
        SelectProductImage:
        <input type="file" name="img" >
        <p>{{$errors->has('img')? $errors->first('img'):""}}</p>
    </div>
    <div>
        SelectShopName:
        <select name="shop_id" id="">
            @foreach($products as $product)
            <option value="{{$product->shopid}}">{{$product->shopid}}</option>
            @endforeach
        </select>
    </div>
    <div>
        SelectTypeName:
        <select name="type_id" id="">
            @foreach($products as $product)
            <option value="{{$product->typeid}}">{{$product->typeid}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button>CreateProduct</button>
    </div>
</form>
