<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="design.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<style>
  

</style>
<body>
  <div class="container-fluid">
  <div class="row min-vh-100">
    
    <!-- LEFT SIDE IMAGE -->
    <div class="col-md-6 p-0 d-none d-md-block ">
      <img 
        src="{{ asset('storage/ecomside.jpg') }}" 
        alt="Image" 
        class="img-fluid w-100 h-100 object-fit-cover"
      >
    </div>

    <!-- RIGHT SIDE FORM -->
    <div class="col-md-6 d-flex align-items-center justify-content-center ">
      <div class="w-75">
        <img src="{{ asset('storage/logo.jpg') }}" alt="Logo" class="img-fluid d-block mx-auto" style="max-height:60px;">
        <h3 class="mb-4 text-center text-primary">Admin Login</h3>

        <form>
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" id="username" placeholder="admin" class="form-control">
             </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="password" placeholder="admin" class="form-control">
          </div>

          <!-- <div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input">
  <label class="form-check-label">Check me out</label>
</div> -->

<div class="d-flex justify-content-between ">
  <button class="w-100 btn-primary" type="button" onclick="login()">Login</button>

</div><br>
 <a href="/home" class="btn btn-outline-secondary w-100">
        Home
    </a>


          
        </form>
      </div>
    </div>

  </div>
</div>

<script>

function login() {

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    // Check username and password are same
    if(username === password && username !== "") {

        // Open home page
        window.location.href = "/dash-product";

    } else {

        alert("Username and Password must be same");

    }
}

</script>


</body>
</html>