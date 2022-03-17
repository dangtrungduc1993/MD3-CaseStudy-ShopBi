<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        ProductName:
        <input type="text" name="name" value="{{$product->name}}">
    </div>
    <div>
        ProductDescription:
        <input type="text" name="description"{{$product->description}}>
    </div>
    <div>
        ProductPrice:
        <input type="number" name='price' value="{{$product->price}}">
    </div>
    <div>
        ProductQuantity:
        <input type="number" name="quantity" value="{{$product->quantity}}">
    </div>
    <div>
        SelectProductImage:
        <input type="file" name="img"  >
    </div>
    <div>
        SelectShopName:
        <select name="shop_id" id="">
            @foreach($products as $product)
            <option value="{{$product->shopid}}">{{$product->shopname}}</option>
            @endforeach
        </select>
    </div>
    <div>
        SelectTypeName:
        <select name="type_id" id="">
            @foreach($products as $product)
            <option value="{{$product->typeid}}">{{$product->typename}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button>UpdateProduct</button>
    </div>
</form>
