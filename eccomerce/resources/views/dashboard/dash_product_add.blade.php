<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Product add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <!--sidebar-->
    <div class="sidebar">
        <nav class="nav flex-column">
            <a class="nav-link" href="#">
                <span class="icon">
                        <i class="bi bi-grid"></i>
                </span>
                <span class="description">Dashboard</span>
            </a>
            <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-clipboard-check"></i>
                </span>
                <span class="description">Posts</span>
            </a>
            <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-bell"></i>
                </span>
                <span class="description">Notification</span>
            </a>
                <!--menu  with dropdown-->
             <a class="nav-link" href="#" data-bs-toggle="collapse"
             data-bs-target="#submenu" aria-expanded="false"
             area-controls="submenu">
                <span class="icon">
                    <i class="bi bi-box-seam"></i>
                </span>
                <span class="description">Gallery <i class="bi bi-caret-down-fill"></i></span>
            </a>   
            <!--sub menu  dropdown-->
                <div class="sub-menu collapse" id="submenu"> 
             <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-file-earmark-check"></i>
                </span>
                <span class="description">Gallery Add</span>
            </a>
            <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-file-earmark-check"></i>
                </span>
                <span class="description">Gallery List</span>
            </a>
          
            </div>
            <!---------->
            <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-gear"></i>
                </span>
                <span class="description">Settings</span>
            </a>
        </nav>
    </div>


    <!--main-->
   
   <main class="main-content">
  <div class="container">
     <h3>Product Add</h3><hr>
   <p class="bg-secondary text-white">Dashboard / Product Add</p>
  </div>
<div class="container p-3">

 <form action="{{ route('products.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="row">

      <!-- Title -->
      <div class="col-12 mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
      </div>

      <!-- Description -->
      <div class="col-12 mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
      </div>

      <!-- Price -->
      <div class="col-12 col-md-4 mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" value="0" class="form-control">
      </div>

      <!-- Discount Price -->
      <div class="col-12 col-md-4 mb-3">
        <label class="form-label">Size</label>
        <select name="size" class="form-select">
          <option selected>Select size</option>
          <option>Small</option>
          <option>Medium</option>
           <option>Large</option>
        </select>
      </div>

      <!-- Stock -->
      <div class="col-12 col-md-4 mb-3">
        <label class="form-label">Stock Quantity</label>
        <input type="number" name="stock" value="0" class="form-control">
      </div>

      <!-- Category -->
      <div class="col-12 col-md-4 mb-3">
        <label class="form-label">Category</label>
        <select name="category" class="form-select">
          <option selected>Select Category</option>
          <option>Dress</option>
          <option>Shoes</option>
        </select>
      </div>

      <!-- Order -->
      <div class="col-12 col-md-4 mb-3">
        <label class="form-label">Order</label>
        <input type="number" name="order" value="0" class="form-control">
      </div>

      <!-- Status -->
      <div class="col-12 col-md-4 mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
          <option value="1">Active</option>
          <option value="0">Inactive</option>
        </select>
      </div>

      <!-- Image -->
      <div class="col-12 mb-3">
        <label class="form-label">Image</label>
        <input class="form-control" type="file" name="image">
      </div>

      <!-- Buttons -->
      <div>
        <button type="submit" class="btn btn-primary">
          Save
        </button>

        <a href="/" class="btn btn-secondary">
          Back
        </a>
      </div>

    </div>

  </form>

</div>
  

  </div>
</div>


</main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>