<?php


//^ Database credentials
$host = 'localhost';
$username = 'root';
$password = '';

//^ Connect to MySQL server
$conn = mysqli_connect($host, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//^ Create the database if it doesn't exist
$databaseName = 'dbaddy';
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";

$result = mysqli_query($conn, $sql);

if (!$result) {
  echo "Error creating database: " . mysqli_error($conn);
}

// Select the database
mysqli_select_db($conn, $databaseName);

$tableName = 'personal_details';

//^ SQL query to create a table
$sql = "CREATE TABLE IF NOT EXISTS $tableName (
  sno INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(50),
  lastname VARCHAR(50),
  email VARCHAR(100),
  mobile VARCHAR(15),
  password VARCHAR(255),
  address VARCHAR(255),
  city VARCHAR(100),
  state VARCHAR(100),
  zip VARCHAR(15),
  suggestions TEXT
)";

// Execute query
$result = mysqli_query($conn, $sql);
if (!$result) {
  echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Personal Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content {
      flex: 1;
    }
  </style>
</head>

<body>
  <div class="content">
    <!-- Creating navbar  -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link link-dark active" aria-current="page" href="../personal.html">Personal Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-light" href="../../Travel_Form/travel.html">Travel Details</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit"> Search </button>
        </form>
      </div>
    </nav>

    <!-- Creating alert -->
    <?php
    // echo var_dump($_SERVER);                          //^ to print all the keys of associative array of $Server super global variable
    // echo var_dump($_POST);                           //! input name is stored as associative keys in the array.

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $fname = isset($_POST['fname']) ? $_POST['fname'] : 'null';
      $lname = isset($_POST['lname']) ? $_POST['lname'] : 'null';

      $email = isset($_POST['email']) ? $_POST['email'] : 'null';
      $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : 'null';
      $password = isset($_POST['password']) ? $_POST['password'] : 'null';

      $address = isset($_POST['address']) ? $_POST['address'] : 'null';
      $city = isset($_POST['city']) ? $_POST['city'] : 'null';
      $state = isset($_POST['state']) ? $_POST['state'] : 'null';
      $zip = isset($_POST['zip']) ? $_POST['zip'] : 'null';

      $suggestion = isset($_POST['suggestion']) ? $_POST['suggestion'] : 'null';

      // SQL query to insert a record
      $sql = "INSERT INTO $tableName (firstname, lastname, email, mobile, password, address, city, state, zip, suggestions) VALUES ('$fname', '$lname', '$email', '$mobile', '$password', '$address', '$city', '$state', '$zip', '$suggestion')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo '<div class="alert alert-success text-center" role="alert"> 
              <strong>Success !!</strong> 
              <span>Thankyou, Your credentials has been submitted in our database</span>
            </div>';
      } else {
        echo '<div class="alert alert-danger text-center" role="alert"> 
              <strong>Error !!</strong> 
              <span>Due to technical glitch your details has not been submitted, Sorry for the inconvinience.<span>
              <p>Please try again later</p>
            </div>';
      }
    }

    // Close the connection
    mysqli_close($conn);

    ?>
  </div>

  <!-- Creating Footer -->
  <footer class="container-fluid mt-auto d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2024 Company, Inc</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
</body>

</html>