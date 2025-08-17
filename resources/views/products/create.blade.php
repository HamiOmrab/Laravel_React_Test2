<h1>Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" required>

    <button type="submit">Add Product</button>
</form>

<a href="{{ route('products.index') }}">Back to Products</a>