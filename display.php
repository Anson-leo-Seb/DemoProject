<!DOCTYPE html>
<html>
<head>
  <title>Employee Management System</title>
  <style>
    /* CSS styles for the top bar and tab bar */
    #top-bar {
      background-color: #4CaF50;
      color: #fff;
      padding: 10px;
      text-align: center;
      font-family: Arial;
    }
    
    #tab-bar {
      background-color: #f2f2f2;
      padding: 10px;
      text-align: center;
    }
    
    .tab {
      display: inline-block;
      margin-right: 10px;
    }
    
    .tab a {
      display: inline-block;
      color: #333;
      text-decoration: none;
      padding: 5px 10px;
      border: 1px solid #ddd;
      background-color: #dcedc9;
      transition: background-color 0.3s ease;
    }
    
    .tab a:hover {
      background-color: #ddd;
    }
    
    /* CSS styles for the content area */
    #content {
      margin-top: 20px;
      padding: 20px;
      background-color: #fff;
      font-family: Arial, sans-serif;
      background:url("spring-floral-border-background-green-with-leaf-watercolor-illustration.jpg");
      
      
    }
    .height{
      height: 100vh;
      width: 100vw;
    }
    .styled-table {  
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
   }
   .styled-table thead tr {
    background-color: #4CaF50;
    color: #ffffff;
    text-align: left;
   
  }
  .styled-table th,
  .styled-table td {
    padding: 12px 15px;
  }
  .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}
#table{
  margin:auto;
}
.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #4CaF50;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #4CaF50;
}
  </style>
</head>
<body>
  <div id="top-bar">
    <h1>Employee Database</h1>
  </div>
  
  <div id="tab-bar">
    <div class="tab">
      <a href="home.html">Home</a>
    </div>
    <div class="tab">
      <a href="insert.html">Add Employees</a>
    </div>
    <div class="tab">
      <a href="display.php">My Employees</a>
    </div>
    <!-- Add more tabs as needed -->
  </div>
  <hr>
  <div id="tab-bar">
    <div class="tab">
    <a href="edit.html">EDIT</a>
    </div>
    <div class="tab">
    <a href="delete.html">Delete</a>
    </div>
    </div>
    <!-- Add more tabs as needed -->
  </div>
  <div id="content", class="height">
  <?php
include 'db_connection.php';

    echo '<table id="table"  class="styled-table"> 
    <thead><tr> 
        <td> <font face="Arial">Name</font> </td> 
        <td> <font face="Arial">Age</font> </td> 
        <td> <font face="Arial">Email</font> </td> 
        <td> <font face="Arial">Phone</font> </td>
        <td> <font face="Arial">Salary</font> </td>
    </tr></thead>';
$conn = OpenCon();
$query = "SELECT * FROM employees";
$result = mysqli_query($conn, $query);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Name"];
        $field2name = $row["Age"];
        $field3name = $row["Email"];
        $field4name = $row["Phone"];
        $field5name = $row["Salary"];

        echo '<tbody><tr class="active-row"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
              </tr></tbody>';
    }
    $result->free();
}
?>
</div>
  
</body>
</html>
