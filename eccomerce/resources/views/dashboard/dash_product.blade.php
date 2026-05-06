<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Product</title>
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
     <h3>Product</h3><hr>
   <p class="bg-secondary text-white">Dashboard / Product list</p>
  </div>

<div class="d-flex justify-content-end">
    <button class="btn btn-primary">Add Product +</button>
</div>


<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Order</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

    @foreach($products as $product)

    <tr>

      <th scope="row">{{ $loop->iteration }}</th>

      <td>
        <img src="{{ asset('storage/products-images/' . $product->image) }}"
             width="80"
             height="80"
             style="object-fit:cover;">
      </td>

      <td>{{ $product->title }}</td>

      <td>{{ $product->category }}</td>

      <td>{{ $product->order }}</td>

      <td>
        {{ $product->status == 1 ? 'Active' : 'Inactive' }}
      </td>

      <td>

        <!-- Edit Button -->
        <a href="{{ url('/product-edit/' . $product->id) }}"
           class="btn btn-primary btn-sm">
           Edit
        </a>

        <!-- Delete Button -->
        <form action="{{ route('product.delete', $product->id) }}"
              method="POST"
              style="display:inline-block;">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="btn btn-danger btn-sm">
                Delete
            </button>

        </form>

      </td>

    </tr>

    @endforeach

  </tbody>

</table>


</main>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>