<?php 
    include 'db.php';
?>
<?php 
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($conn, "SELECT * FROM designation WHERE id=$id");

        if (count($record) == 1 ) {
            $row = mysqli_fetch_array($record);
            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
            $designation = $row['designation'];
        }
    }
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

<section class="container">
    <div class="row justify-content-center h-75 align-items-center">
        <div class="col-md-7 border shadow-sm p-3 mb-5 bg-white rounded">
            <h3 class="text-primary mb-4">Edit User Profile </h3>
            <form method="post" action="/update.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="fn_hidden" value="<?php echo $firstname; ?>">
                <input type="hidden" name="ls_hidden" value="<?php echo $lastname; ?>">
                <input type="hidden" name="desg_hidden" value="<?php echo $designation; ?>">

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $lastname; ?>">
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" id="designation" class="form-control" value="<?php echo $designation; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
                <a class="btn btn-primary" name="cancel" href="designation.php">Cancel</a>
            </form>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

