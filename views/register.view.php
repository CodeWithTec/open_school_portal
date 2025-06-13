<?php
require 'view/partials/head.php';
require 'view/partials/footer.php';
require 'register.php';
?>





<form method="post">
    <input name="full_name" placeholder="Full Name" required>
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <select name="role" required>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit">Register</button>
</form>