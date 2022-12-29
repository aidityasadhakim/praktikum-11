<?php 
require('function.php');
$data = get_data("SELECT * FROM karyawan");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="add">
    <a href="input.php" class="btn btn-primary mt-5 ms-5" role="button">Add Data</a>
  </div>
    
  <table class="table table-striped mt-5">
    <thead>
        <tr class="table-primary">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Position</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php $i=1; ?>
        <?php foreach($data as $data): ?>
        <tr>
        <th scope="row"><?= $i ?></th>
        <td><?= $data["name"]; ?></td>
        <td><?= $data["email"]; ?></td>
        <td><?= $data["address"]; ?></td>
        <td><?= $data["gender"]; ?></td>
        <td><?= $data["position"]; ?></td>
        <td><?= $data["status"]; ?></td>
        <td>
            <a href="hapus.php?id=<?= $data["id"]; ?>" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>