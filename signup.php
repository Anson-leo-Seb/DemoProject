<?php
include 'db_connection.php';
$conn = OpenCon();
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $name = $_POST['name'];
    $passwd = $_POST['pswd'];
    echo '<!DOCTYPE html>
    <html>
    <head>
      <title>Congratulations!</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          background-image: url("13891871_SL_081919_22630_05.jpg");
          background-size: cover;
          background-position: center;
        }
    
        .container {
          max-width: 600px;
          padding: 30px;
          background-color: rgba(0, 0, 0, 0.4);
          border-radius: 10px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
          cursor: pointer;
          text-align: center;
        }
    
        h1 {
          margin: 0 0 20px;
          font-size: 28px;
          color: wheat;
        }
    
        p {
          margin: 0 0 15px;
          color: #aaa;
          line-height: 1.4;
        }
    
        a {
          color: #bbb;
          text-decoration: none;
          transition: color 0.3s ease;
        }
    
        a:hover {
          color: #ccc;
        }
      </style>
    </head>
    <body>
      <div class="container" onclick="redirectToLogin()">
        <h1>Congratulations!</h1>
        <p>You have successfully signed up.</p>
        <p>Click here to go to the <a href="index.html">login page</a>.</p>
      </div>
    
      <script>
        function redirectToLogin() {
          window.location.href = "index.html";
        }
      </script>
    </body>
    </html>';
    $sql = "INSERT INTO employers VALUES ('$username', '$name','$passwd')";
    mysqli_query($conn, $sql);
}
else
{
    echo 'error';
}
?>

