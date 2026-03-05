<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>

<form action="/products/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}">
    <input type="text" name="description" value="{{ $product->description }}">
    <input type="number" name="price" value="{{ $product->price }}">
    <input type="number" name="stock" value="{{ $product->stock }}">

    <select name="size">
        <option value="S" {{ $product->size == 'S' ? 'selected' : '' }}>S</option>
        <option value="M" {{ $product->size == 'M' ? 'selected' : '' }}>M</option>
        <option value="L" {{ $product->size == 'L' ? 'selected' : '' }}>L</option>
    </select>

    <button type="submit">Update</button>
</form>
</body>
</html>