<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>All Tasks</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: helvetica;
}

.wrapper{
    margin-top: 85px;
    display: flex;
    justify-content: center;
}

.search-form {
    position: relative;
    display: inline-block;
}

.search-form input[type="text"] {
    width: 200px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 20px;
    outline: none;
    transition: all 0.3s ease;
}

.search-form button {
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    border: none;
    background: #3498db;
    color: #fff;
    border-radius: 0 20px 20px 0;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-form input[type="text"]:focus {
    border-color: #7a7aff;
}

.search-form button:hover {
    background: #297db6;
}

.wrapper:hover .search-form input[type="text"] {
    width: 300px;
}

.wrapper:hover .search-form button {
    width: 80px;
}

table {
    width: 750px;
    border-collapse: collapse;
    margin: 50px auto;
}

tr:nth-of-type(odd) {
    background: #eee;
}

th {
    background: #3498db;
    color: white;
    font-weight: bold;
}

td, th {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
    font-size: 18px;
}

.logout-button {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.logout-button:hover {
    background-color: #c82333;
}
</style>
</head>
<body>

<div class="wrapper">
    <form class="search-form" action="" method="GET">
        <input type="text" name="search" placeholder="Search by Employee ID">
        <button type="submit">Search</button>
    </form>
</div>

<table>
<thead>
  <tr>
    <th>Employee Id</th>
    <th>Task Name</th>
    <th>Task ID</th>
  </tr>
</thead>
<tbody>
  <?php
  // Connect to your database
  $conn = mysqli_connect('localhost', 'root', '', 'mml');
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Check if a search query is provided
  if(isset($_GET['search'])) {
      $search = $_GET['search'];
      // Retrieve data based on search query
      $sql = "SELECT empid, taskname, taskid FROM tasks WHERE empid LIKE '%$search%'";
  } else {
      // Retrieve all data from the tasks table if no search query provided
      $sql = "SELECT empid, taskname, taskid FROM tasks";
  }

  $query = mysqli_query($conn, $sql);

  // Display the retrieved data in the table
  while ($rows = mysqli_fetch_assoc($query)) {
  ?>
      <tr>
          <td><?php echo $rows['empid']; ?></td>
          <td><?php echo $rows['taskname']; ?></td>
          <td><?php echo $rows['taskid']; ?></td>
      </tr>
  <?php
  }
  mysqli_close($conn);
  ?>
</tbody>
</table>

<button class="logout-button" onclick="location.href='index.php'">Logout</button>

</body>
</html>
