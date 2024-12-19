<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="p-3">
    <a href="login.php" class="text-white text-decoration-none">&larr; Back</a>
    <div class="float-end">
      <i class="bi bi-people text-white"></i>
    </div>
  </div>

  <div class="container text-white">
    <div class="d-flex justify-content-between border-bottom mb-2">
      <a href="#" class="text-white text-decoration-none fw-bold">For you</a>
      <a href="#" class="text-white text-decoration-none">Following</a>
    </div>
  </div>

  <div class="container">
    <div class="card mb-3 shadow-sm">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <img src="ml.png" alt="Profile" class="rounded-circle me-2">
          <div>
            <h6 class="mb-0">Mobile Legends: Bang bang <i class="bi bi-patch-check-fill text-primary"></i></h6>
            <small class="text-muted">2m ago</small>
          </div>
        </div>
        <p class="mb-2">Finals MVP - Kelra!</p>
        <img src="kelra.jpg" alt="Post Image" class="img-fluid rounded mb-2">
        <div class="d-flex justify-content-around text-muted">
          <span><i class="bi bi-chat"></i> 501 replies</span>
          <span><i class="bi bi-heart"></i> 20.1k likes</span>
        </div>
      </div>
    </div>

    <div class="card mb-3 shadow-sm">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <img src="apple.png" alt="Profile" class="rounded-circle me-2">
          <div>
            <h6 class="mb-0">Apple <i class="bi bi-patch-check-fill text-primary"></i></h6>
            <small class="text-muted">29m ago</small>
          </div>
        </div>
        <p class="mb-2">
          iPhone 15 Pro and iPhone 15 Pro Max <br>#WaitForIt <br>#PowerfulDevicesOnTheWay
        </p>
        <img src="iphone.png" alt="Post Image" class="img-fluid rounded mb-2">
        <div class="d-flex justify-content-around text-muted">
          <span><i class="bi bi-chat"></i> 1.9k replies</span>
          <span><i class="bi bi-heart"></i> 205k likes</span>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="container d-flex justify-content-around">
      <a href="dashboard.php" class="text-dark text-decoration-none"><i class="bi bi-house-door"></i><br>Home</a>
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-search"></i><br>Search</a>
      <a href="post.php" class="text-dark text-decoration-none"><i class="bi bi-plus-square"></i><br>Post</a>
      <a href="#" class="text-dark text-decoration-none"><i class="bi bi-bell"></i><br>Notifications</a>
      <a href="profile.php" class="text-dark text-decoration-none"><i class="bi bi-person"></i><br>Profile</a>
    </div>
  </nav>

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>

</body>
</html>
