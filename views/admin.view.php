<?php
require 'partials/head.php';
require 'partials/footer.php';
require 'controller/admin.php';

?>
<div class="d-flex">
  <!-- Sidebar -->
  <nav class="sidebar p-3">
    <h4 class="navbar-brand mb-4">OSP - Open School Portal</h4>
    <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Teachers</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Classes</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Subjects</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Exams</a></li>
      <li class="nav-item"><a class="nav-link" href="#">User Management</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <!-- Main content -->
  <div class="content w-100">
    <h2>Welcome, Admin</h2>
    <p class="text-muted">Overview of school activities</p>

    <div class="row mb-4">
      <div class="col-md-3">
        <div class="card text-bg-primary">
          <div class="card-body">
            <h5>Total Students</h5>
            <p class="display-6"><?php echo $student_count; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-success">
          <div class="card-body">
            <h5>Total Business</h5>
            <p class="display-6"><?php echo $teacher_count; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-warning">
          <div class="card-body">
            <h5>Classes</h5>
            <p class="display-6"><?php echo $class_count; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-danger">
          <div class="card-body">
            <h5>Subjects</h5>
            <p class="display-6"><?php echo $subject_count; ?></p>
          </div>
        </div>
      </div>
    </div>

    <h4>Recent Registrations</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Role</th>
          <th>Registered On</th>
        </tr>
      </thead>
      <tbody>
        <?php while($user = $registrations->fetch_assoc()): ?>
          <tr>
            <td><?php echo htmlspecialchars($user['full_name']); ?></td>
            <td><?php echo htmlspecialchars($user['role']); ?></td>
            <td><?php echo htmlspecialchars($user['created_at']); ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
