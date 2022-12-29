<?php 
require 'function.php';
if(isset($_POST['submit'])){
    tambah($_POST);
    echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
    </script>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" required>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1 class="text-center">Tambahkan Data</h1>
    <div class="mb-3 col-lg-3 mx-auto mt-5">
        <form action="" method="POST">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
            
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
            
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender" required>
                <option selected>Male</option>
                <option>Female</option>
            </select>

            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" required>
            
            <label for="status" class="form-label">status</label>
            <select class="form-select" name="status" id="status" required>
                <option selected>Fulltime</option>
                <option>Part Time</option>
                <option>Internship</option>
            </select>

            <button type="submit" name="submit" class="btn btn-success mt-3">Submit</button>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>