<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create a product</h1>
    <form method="POST" action="{{ route('product.store') }}"> 
     @csrf
     @method('post')   
<div>
    <label>name</label>
    <input type="text" name="name" placeholder="Name"/>
</div>
<div>
    <label>description</label>
    <input type="text" name="description" placeholder="Description"/>
</div>
<div>
    <label>price</label>
    <input type="text" name="price" placeholder="$$$"/>
</div>
<div>
    <label>qty</label>
    <input type="text" name="qty" placeholder="Qty"/>
</div>
<div>
    <input type="submit" values="Save the product"/>
</div>
    </form>
</body>
</html>