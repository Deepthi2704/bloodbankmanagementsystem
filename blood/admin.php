<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>blood details!</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="admin.php">BLOOD DONARS DETAILS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Add New</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>ADDRESS</th>
      <th>BLOODGROUP</th>
      <th>FATHERNAME</th>
      <th>MOBILE_NO</th>
      <th>CITY</th>
      <th>AGE</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection1.php";
    $sql="select * from don";
    $result=$conn->query($sql);
    if(!$result){
        die("Invalid query!!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[address]</td>
      <td>$row[bloodgroup]</td>
      <td>$row[fathername]</td>
      <td>$row[mobile_no]</td>
      <td>$row[city]</td>
      <td>$row[age]</td>
      <td>
      <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
      <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
      </td>
    </tr>
    " ;
    }
    ?>
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>