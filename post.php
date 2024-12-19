<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="p-3 d-flex justify-content-between">
    <a href="#" class="text-white text-decoration-none">&larr; Back</a>
    <button class="btn btn-link text-white"><i class="bi bi-x-lg"></i></button>
  </div>

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg" style="width: 22rem;">
      <div class="card-body p-4">
        <h5 class="text-center mb-3">Create Post</h5>

        <div class="d-flex align-items-center mb-3">
          <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle me-2">
          <div>
            <h6 class="mb-0">Miguel Barafon</h6>
          </div>
        </div>

        <textarea 
          class="form-control mb-3 border-0" 
          rows="5" 
          placeholder="What's happening?" 
          style="background-color: #f1f1f1; resize: none;"
        ></textarea>

        <div class="text-end">
          <button class="btn btn-primary px-4 rounded-pill">Post</button>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="container d-flex justify-content-around">
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-house-door"></i><br>Home</a>
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-search"></i><br>Search</a>
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-plus-square"></i><br>Post</a>
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-bell"></i><br>Notifications</a>
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-person"></i><br>Profile</a>
    </div>
  </nav>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
