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
            <a class="nav-link" href="/dash-product">
                <span class="icon">
                        <i class="bi bi-grid"></i>
                </span>
                <span class="description">Dashboard</span>
            </a>
            <a class="nav-link" href="/users-list">
                <span class="icon">
                    <i class="bi bi-clipboard-check"></i>
                </span>
                <span class="description">User list</span>
            </a>
            <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-bell"></i>
                </span>
                <!-- <span class="description">Notification</span> -->
                 <span class="description" type="button" onclick="logout()">Logout</span>
            </a>
               
            
             <!-- <a class="nav-link" href="#" data-bs-toggle="collapse"
             data-bs-target="#submenu" aria-expanded="false"
             area-controls="submenu">
                <span class="icon">
                    <i class="bi bi-box-seam"></i>
                </span>
                <span class="description">Gallery <i class="bi bi-caret-down-fill"></i></span>
            </a>   
            

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
           -->
            
            </div>
            <!---------->
            <a class="nav-link" href="#">
                <span class="icon">
                    <i class="bi bi-gear"></i>
                </span>
                 <span class="description" type="button" onclick="logout()">Logout</span>
            </a>
        </nav>
    </div>


    <!--main-->
   
   <main class="main-content">
  <div class="container">
     <h3>User List</h3><hr>
   <p class="bg-secondary text-white">Dashboard / User list</p>
  </div>

<div class="d-flex justify-content-end ">
    
     <a href="/register" class="btn btn-primary text-white"> Add user +</a>
     
</div>



    <!-- TABLE -->
    <div class="card shadow border-0 rounded-4">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table">

                    <tr>

                        <th>#</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Address</th>

                        <th width="180">
                            Action
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td class="fw-bold">
                            {{ $user->name }}
                        </td>

                        <td>
                            {{ $user->email }}
                        </td>

                        <td>
                            {{ $user->address }}
                        </td>

                        <td>

                            <!-- EDIT -->
                            <!-- <a href="{{ url('/user-edit/' . $user->id) }}"
                               class="btn btn-sm btn-primary">

                                <i class="bi bi-pencil-square"></i>

                                Edit

                            </a> -->


                            <!-- DELETE -->
                            <a href="{{ url('/user-delete/' . $user->id) }}"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Delete this user?')">

                                <i class="bi bi-trash"></i>

                                Delete

                            </a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</main>



<script>
function logout() {

    // Redirect to login page
    window.location.href = "/admin";

}
</script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>