<?php 
    include 'db.php';
    session_start();
    //print_r($_SESSION['username']); die;
    ?>
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-26H64FGC8W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-26H64FGC8W');
</script>

<!-- Hotjar Tracking Code for https://localhost:8080/index.php -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3116382,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
    <!-- <button type="submit" class="btn btn-primary" name="save">Log Out</button> -->
    <a class="btn btn-primary" name="logout" href="logout.php">Log Out</a>
  </div>
  </header>
<div class="border border-2">
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered  table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM designation";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { ?>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['first_name']; ?></td>
                        <td><?= $row['last_name']; ?></td>
                        <td><?= $row['designation']; ?></td>
                        <td>
                          <!-- <button type="button" class="btn btn-default btn-sm"><a href="edit.php">
                            <span class="glyphicon glyphicon-pencil"></span></a>
                          </button> -->
                          <a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                        </td>
                    </tbody>
                    <?php } 
                  } ?>
                </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

