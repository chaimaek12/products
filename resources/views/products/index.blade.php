<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-8">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Products</h1>

      
        <form action="/products" method="POST" class="grid grid-cols-6 gap-4 mb-8">
            @csrf

            <input type="text" name="name" placeholder="Name"
                class="border rounded-lg p-2 col-span-1">

            <input type="text" name="description" placeholder="Description"
                class="border rounded-lg p-2 col-span-2">

            <input type="number" name="price" placeholder="Price"
                class="border rounded-lg p-2">

            <input type="number" name="stock" placeholder="Stock"
                class="border rounded-lg p-2">

            <select name="size" class="border rounded-lg p-2">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>

            <button type="submit"
                class="bg-blue-500 text-white rounded-lg px-4 hover:bg-blue-600 transition">
                Add
            </button>
        </form>

       
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3">Name</th>
                    <th class="p-3">Description</th>
                    <th class="p-3">Price</th>
                    <th class="p-3">Stock</th>
                    <th class="p-3">Size</th>
                    <th class="p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-semibold">{{ $product->name }}</td>
                    <td class="p-3">{{ $product->description }}</td>
                    <td class="p-3 text-green-600 font-bold">
                        ${{ $product->price }}
                    </td>
                    <td class="p-3">{{ $product->stock }}</td>
                    <td class="p-3">
                        <span class="bg-gray-300 px-2 py-1 rounded text-sm">
                            {{ $product->size }}
                        </span>
                    </td>
                    <td class="p-3">
                        <form action="/products/{{ $product->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>