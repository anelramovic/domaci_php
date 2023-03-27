<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="POST">
        <h1 class="text-center mb-4">Registration Form</h1>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
          <label for="last_name">Last Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
          <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <div class="d-grid gap-2 mb-3">
          <button class="btn btn-primary" type="submit" href="Login.php">Register</button>
        </div>
        <div class="d-grid gap-2">
          <a href="#" class="btn btn-link">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>
</div>

    
    <?php
    header("Location: Login.php");
    exit;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteka";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  if(empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password)){
  echo "Morate popuniti sva polja";
  }else{
  $sql = "INSERT INTO registrations (first_name, last_name, username, email, password)
  VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";
  }
  if ($conn->query($sql) === TRUE) {
    echo "Uspjesno ste se registrovali";
  } else {
    echo "Greska: " . $sql . "<br>" . $conn->error;
  }
}


$conn->close();
?>


            
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
