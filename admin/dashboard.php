<?php
include('../db.php');

// Fetch all students, latest first
$students = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>All Registered Students</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container py-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white text-center">
      <h4 class="mb-0">📋 All Registered Students</h4>
    </div>

    <div class="card-body">
      <?php if (mysqli_num_rows($students) > 0): ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead class="table-primary">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Father</th>
              <th>Mother</th>
              <th>Course</th>
              <th>Age</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($students)) { ?>
              <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['father']) ?></td>
                <td><?= htmlspecialchars($row['mother']) ?></td>
                <td><?= htmlspecialchars($row['course']) ?></td>
                <td><?= htmlspecialchars($row['age']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php else: ?>
        <div class="alert alert-warning text-center">No students found.</div>
      <?php endif; ?>
    </div>

    <div class="card-footer text-center">
      <a href="../index.php" class="btn btn-outline-primary">Back to Home</a>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
