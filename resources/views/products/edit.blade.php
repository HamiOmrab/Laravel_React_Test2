<h1>Edit Product</h1>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>

    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>

    <button type="submit">Update Product</button>
</form>

<a href="{{ route('products.index') }}">Back to Products</a>
