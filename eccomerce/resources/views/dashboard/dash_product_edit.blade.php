<div class="container mt-5">

<form action="{{ url('/product-update/' . $product->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <!-- Title -->
    <div class="mb-3">
        <label>Title</label>
        <input type="text"
               name="title"
               value="{{ $product->title }}"
               class="form-control">
    </div>

    <!-- Category -->
    <div class="mb-3">
        <label>Category</label>
        <input type="text"
               name="category"
               value="{{ $product->category }}"
               class="form-control">
    </div>

    <!-- Order -->
    <div class="mb-3">
        <label>Order</label>
        <input type="number"
               name="order"
               value="{{ $product->order }}"
               class="form-control">
    </div>

    <!-- Status -->
    <div class="mb-3">
        <label>Status</label>

        <select name="status" class="form-select">

            <option value="1"
            {{ $product->status == 1 ? 'selected' : '' }}>
                Active
            </option>

            <option value="0"
            {{ $product->status == 0 ? 'selected' : '' }}>
                Inactive
            </option>

        </select>
    </div>

    <!-- Current Image -->
    <div class="mb-3">
        <img src="{{ asset('storage/products-images/' . $product->image) }}"
             width="120">
    </div>

    <!-- New Image -->
    <div class="mb-3">
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

</form>

</div>