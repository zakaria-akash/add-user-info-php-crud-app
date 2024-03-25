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

  <div class="container-fliud table-responsive d-flex flex-column justify-content-center align-items-center px-4">
    <a href="add_new.php" class="btn btn-dark btn-block btn-lg my-4">Add New</a>

    <table class="table table-hover text-center table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include ("db_conn.php");
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td>
              <?php echo $row['id'] ?>
            </td>
            <td>
              <?php echo $row['first_name'] ?>
            </td>
            <td>
              <?php echo $row['last_name'] ?>
            </td>
            <td>
              <?php echo $row['email'] ?>
            </td>
            <td>
              <?php echo $row['gender'] ?>
            </td>
            <td class="d-flex justify-content-center align-items-center">
              <a href="edit.php?id==<?php echo $row['id'] ?>" class="link-dark">
                <i class="fa-solid fa-pen-to-square mx-2" style="color: #fff;"></i>
              </a>
              <a href="delete.php?id==<?php echo $row['id'] ?>" class="link-dark">
                <i class="fa-solid fa-trash mx-2" style="color: #fff;"></i>
              </a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>



  <!-- Bootstrap 5 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>