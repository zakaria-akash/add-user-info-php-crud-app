<?php
include ("db_conn.php");

if (isset ($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL, '$first_name', '$last_name', '$email', '$gender')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: index.php?msg=New record created successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- FontAwesome 6.1.1 CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>PHP CRUD App</title>
</head>

<body>

  <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="background-color: aquamarine;">
    Simple PHP CRUD Application
  </nav>

  <div class="container-fluid mb-4">
    <div class="text-center mb-4">
      <h3>Add New User</h3>
      <p class="text-muted">Complete the form below to add a new user</p>
    </div>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width: 55vw; min-width: 350px">
        <div class="row form-group mb-3">
          <div class="col">
            <label for="" class="form-label">First Name:</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name">
          </div>
          <div class="col">
            <label for="" class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
          </div>
        </div>
        <div class="row form-group mb-3">
          <div class="col">
            <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Your Email">
          </div>
        </div>
        <div class="row form-group mb-3">
          <div class="col-12">
            <label for="" class="form-label">Gender:</label> &nbsp;
            <input type="radio" class="form-check-input" name="gender" id="male" value="male">
            <label for="male" class="form-input-label">Male</label>&nbsp;
            <input type="radio" class="form-check-input" name="gender" id="female" value="female">
            <label for="female" class="form-input-label">Male</label>
          </div>
        </div>
        <div class="row form-group mb-3">
          <div class="col">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
            <a href="index.php" class="btn btn-danger btn-lg btn-block">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap 5 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>