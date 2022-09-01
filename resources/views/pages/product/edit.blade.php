<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Product Image</label>
        <input type="file" class="form-control" name="images" value="{{ $product->images }}"
         accept="image/jpg, image/jpeg, image/png">
      </div>
    <div class="mb-3">
      <label for="price" class="form-label">Product Price</label>
      <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
     </div>
    <div class="mb-3">
        <label for="price" class="form-label">Status</label>
        <select class="form-select" name="status" value="{{ $product->status }}" required>
             {{-- <option selected>select Availability</option> --}}
             <option value="1">Available</option>
             <option value="0">Unavailable</option>
        </select>
    </div> 
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form> 