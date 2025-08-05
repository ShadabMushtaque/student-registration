<?php
include('db.php');
$msg = "";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $course = $_POST['course'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (name, email, phone, father, mother, course, age, address) 
            VALUES ('$name', '$email', '$phone', '$father', '$mother', '$course', '$age', '$address')";

    if (mysqli_query($conn, $sql)) {
        $msg = "<div class='alert alert-success'>✅ Student registered successfully!</div>";
    } else {
        $msg = "<div class='alert alert-danger'>❌ Error: " . mysqli_error($conn) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5.3.7 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Main container -->
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <!-- Card -->
      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
          <h3 class="mb-0">🎓 Student Registration</h3>
        </div>
        <div class="card-body">

          <!-- Message -->
          <?php if ($msg) echo $msg; ?>

          <!-- Registration Form -->
          <form method="POST" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Father's Name</label>
                <input type="text" name="father" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Mother's Name</label>
                <input type="text" name="mother" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Course</label>
                <input type="text" name="course" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="d-grid mt-4">
              <button type="submit" name="register" class="btn btn-primary">
                Register
              </button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center">
          <a href="index.php" class="btn btn-link text-primary">Back to Home</a>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
