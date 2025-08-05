<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <!-- 🔺 NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="#">Student Registration</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-center">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register Student</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🔻 HERO SECTION -->
  <header class="py-5 bg-primary text-white text-center">
    <div class="container">
      <h1 class="display-5 fw-bold">Welcome to the Student Registration Form</h1>
      <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="register.php" class="btn btn-light btn-lg text-primary fw-bold">Register as Student</a>
        <a href="./admin/dashboard.php" class="btn btn-outline-light btn-lg">View Students</a>
      </div>
    </div>
  </header>

  <!-- ✅ ABOUT SECTION -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="mb-4">About Student Registration System</h2>
      <p class="lead">
        This student registration system helps to collect and organize student data efficiently.
        It allows users to register students with key details and view the registered list in a clean interface.
      </p>
      <p>
        Built using PHP, MySQL, and Bootstrap 5, it's a simple and modern web-based system ideal for schools, colleges, or training centers.
      </p>
    </div>
  </section>

  <!-- ✅ CONTACT SECTION -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">📞 Contact Us</h2>
      <p class="lead">Have questions or need support? Reach out to us below.</p>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <p><strong>Email:</strong> support@studentsystem.com</p>
          <p><strong>Phone:</strong> +91 98765 43210</p>
          <p><strong>Address:</strong> 123 Street 3, New Delhi, India</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 🔻 FOOTER -->
  <footer class="bg-dark text-white text-center py-4">
    <p class="mb-0">© 2025 Student Registration Form | Built with ❤️ using Bootstrap</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
