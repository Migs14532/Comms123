<?php

$error = ( isset($_GET['error']) ) ? $_GET['error'] : '' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="p-3">
    <a href="#" class="text-white text-decoration-none">&larr; Back</a>
    <div class="float-end">
      <i class="bi bi-person"></i>
    </div>
  </div>

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg" style="width: 22rem;">
      <div class="card-body text-center p-4">

        <h4 class="mb-1">Hello</h4>
        <p class="text-muted mb-4">Sign into your Account</p>
        
        <form>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-2">
            <input type="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="text-end mb-3">
            <a href="#" class="text-decoration-none text-muted">Forgot your Password?</a>
          </div>
          <button type="submit" class="btn btn-primary w-100">Log In</button>
        </form>
        
        <p class="mt-3 mb-2">Or Login using social Media</p>
        <div class="d-flex justify-content-center mb-3">
          <a href="#" class="me-3">
            <img src="fb-logo.png" alt="Facebook" width="40">
          </a>
          <a href="#">
            <img src="gmail-logo.jpg" alt="Gmail" width="40">
          </a>
        </div>
    
        <p>
          Don’t have an account? 
          <a href="dashboard.php" class="text-primary text-decoration-none">Register Now</a>
        </p>
      </div>
    </div>
  </div>
  
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
