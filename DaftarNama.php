<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Members</title>
  <link rel="stylesheet" href="css/DaftarNama.css">
</head>
<body>
  <header class="admin-header">
    <div class="admin-header-logo">
      <img src="/Aset/18.jpg" alt="">
    </div>
    <div class="admin-header-title">
      <h1>Admin Dashboard</h1>
    </div>
    <nav class="admin-nav">
      <ul>
        <li><a href="courses.html">Courses</a></li>
        <li><a href="members.html">Members</a></li>
        <li><a href="reports.html">Reports</a></li>
        <li><a href="settings.html">Settings</a></li>
        <li><a href="logout.html">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main class="admin-main">
    <div class="admin-content">
      <h2>Members List</h2>
      <table class="admin-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Enrolled Date</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>jdoe@example.com</td>
            <td>2023-02-01</td>
            <td>Active</td>
            <td>
              <button class="btn btn-edit">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Jane Doe</td>
            <td>jane@example.com</td>
            <td>2023-01-15</td>
            <td>Inactive</td>
            <td>
              <button class="btn btn-edit">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Alice Doe</td>
            <td>alice@example.com</td>
            <td>2023-01-10</td>
            <td>Active</td>
            <td>
              <button class="btn btn-edit">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  <footer class="admin-footer">
    <p>&copy; 2023 Kid's Web Course. All rights reserved.</p>
  </footer>
</body>
</html>