<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="p-3">
    <a href="#" class="text-white text-decoration-none">&larr; Back</a>
    <div class="float-end">
      <i class="bi bi-person-plus"></i>
    </div>
  </div>
  
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg" style="width: 22rem;">
      <div class="card-body text-center p-4">
        <h4 class="mb-4">Create Account</h4>

        <form>
          <div class="row g-2 mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" required>
            </div>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Confirm password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Register now</button>
        </form>
        
        <p class="mt-3 mb-2">Or Login using social Media</p>
        <div class="d-flex justify-content-center mb-3">
          <a href="#" class="me-3">
            <img src="fb-logo.png" alt="Facebook" width="40">
          </a>
          <a href="#">
            <img src="gmail-logo.jpg" alt="Google" width="40">
          </a>
        </div>
        
        <p>
          Don’t have an account? 
          <a href="dashboard.php" class="text-primary">Login</a>
        </p>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
