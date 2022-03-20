<form action="{{route('shopProduct.update',$shopProduct->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        Product Name:
        <input type="text" name="name" value="{{$shopProduct->name}}">
    </div>
    <div>
        Product Description:
        <input type="text" name="description"{{$shopProduct->description}}>
    </div>
    <div>
        Product Price:
        <input type="number" name='price' value="{{$shopProduct->price}}">
    </div>
    <div>
        Product Quantity:
        <input type="number" name="quantity" value="{{$shopProduct->quantity}}">
    </div>
    <div>
        Select ProductImage:
        <input type="file" name="img" value="{{$shopProduct->image}}" >
    </div>

    <div>
        Select Type Name:
        <select name="type_id" id="">
            @foreach($shopProducts as $shopProduct)
            <option value="{{$shopProduct->typeid}}">{{$shopProduct->typename}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button>Update Product</button>
    </div>
</form>
