<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
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
        src="{{ asset('storage/regpageimage.jpg') }}"
        alt="Image" 
        class="img-fluid w-100 h-100 object-fit-cover"
      >
    </div>

    <!-- RIGHT SIDE FORM -->
    <div class="col-md-6 d-flex align-items-center justify-content-center ">
      <div class="w-75">
        <img src="{{ asset('storage/logo.jpg') }}" alt="Logo" class="img-fluid d-block mx-auto" style="max-height:60px;">
        <h3 class="mb-4 text-center text-primary">Register</h3>

        <form action="{{ url('/register-save') }}" method="POST">
             @csrf


            <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your Name">
             </div>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email">
             </div>

             <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control"
                  rows="3" placeholder="Enter your Address"></textarea>
             </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div><br>

          <div>
  
 
</div>

<div class="mt-3">
  <button type="submit" class="btn btn-primary w-100">
    Register
  </button><br><br>
  <p><a href="/login"> sign in</a> All ready you have account</p>
</div>

</form>
      
</div>
</div>

  </div>
</div>



</body>
</html>